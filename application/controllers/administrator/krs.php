<?php 

class Krs extends CI_Controller{
	public function index()
	{
		$data = array(
			'th' => set_value('npm'),
			'id_thn_akademi' => set_value('id_thn_akademi'),
		
		);
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/masuk_krs',$data);
        $this->load->view('templates_administrator/footer');	
	}

	public function krs_aksi()
	{
		$this->_rulesKrs();

		if ($this->form_validation->run() == FALSE ) {
			$this->index();
		}else{
			$npm = $this->input->post('npm', TRUE);
			$thn_akademi = $this->input->post('id_thn_akademi', TRUE);
		}

		if ($this->mahasiswa_model->get_by_id($npm)==null){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                   Data Mahasiswa Yang Anda Cari Belum Terdaftar
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
    		redirect('administrator/krs');

		}

		$data = array(
			'npm' => $npm,
			'id_thn_akademi' => $thn_akademi,
			'nama_lengkap' => $this->mahasiswa_model->get_by_id($npm)->nama_lengkap
		);

		$dataKrs = array(
			'krs_data' => $this->baca_krs($npm,$thn_akademi),
			'npm' => $npm,
			'id_thn_akademi' => $thn_akademi,
			'tahun_akademi' => $this->tahunakademi_model->get_by_id($thn_akademi)->tahun_akademi,
			'semester' => $this->tahunakademi_model->get_by_id($thn_akademi)->semester==1?'Ganjil':'Genap',
			'nama_lengkap' => $this->mahasiswa_model->get_by_id($npm)->nama_lengkap,
			'prodi' => $this->mahasiswa_model->get_by_id($npm)->nama_prodi
		);

		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/krs_list',$dataKrs);
        $this->load->view('templates_administrator/footer');
	}

	public function baca_krs($npm,$thn_akademi)
	{
		$this->db->select('k.id_krs,k.kode_matakuliah,m.nama_matakuliah,m.sks');
		$this->db->from('krs as k');
		$this->db->where('k.npm', $npm);
		$this->db->where('k.id_thn_akademi',$thn_akademi);
		$this->db->join('matakuliah as m', 'm.kode_matakuliah = k.kode_matakuliah');
		$krs = $this->db->get()->result();
		return $krs;
	}

	public function _rulesKrs()
	{
		$this->form_validation->set_rules('npm','npm','required');
		$this->form_validation->set_rules('id_thn_akademi','id_thn_akademi','required');
			
	}

	public function tambah_krs($npm, $thn_akademi)
	{
		$data = array(
			'id_krs' => set_value('id_krs'),
			'id_thn_akademi' => $thn_akademi,
			'thn_akademi_smt' => $this->tahunakademi_model->get_by_id($thn_akademi)->tahun_akademi,
			'semester' => $this->tahunakademi_model->get_by_id($thn_akademi)->semester==1?'Ganjil':'Genap',
			'npm' => $npm,
			'kode_matakuliah' => set_value('kode_matakuliah')
		);

		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/krs_form',$data);
        $this->load->view('templates_administrator/footer');
	}

	public function tambah_krs_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->tambah_krs($this->input->post('npm',TRUE),$this->input->post('id_thn_akademi', TRUE));
		}else{
			$npm 	= $this->input->post('npm',TRUE);
			$id_thn_akademi 	= $this->input->post('id_thn_akademi',TRUE);
			$kode_matakuliah 	= $this->input->post('kode_matakuliah',TRUE);

			$data = array (
				'id_thn_akademi' => $id_thn_akademi,
				'npm' => $npm,
				'kode_matakuliah' => $kode_matakuliah
			);
			$this->krs_model->insert($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data KRS Berhasil di Tambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
			redirect('administrator/krs/index');

		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_thn_akademi','id_thn_akademi','required');
		$this->form_validation->set_rules('npm','npm','required');
		$this->form_validation->set_rules('kode_matakuliah','kode_matakuliah','required');	
	}

	public function update ($id)
	{
		$row =  $this->krs_model->get_by_id($id);
		$th = $row->id_thn_akademi;

		if($row) {
			$data = array(
				'id_krs' => set_value('id_krs',$row->id_krs),
				'id_thn_akademi' => set_value('id_thn_akademi',$row->id_thn_akademi),
				'npm' => set_value('npm',$row->npm),
				'kode_matakuliah' => set_value('kode_matakuliah',$row->kode_matakuliah),
				'thn_akademi_smt' =>$this->tahunakademi_model->get_by_id($th)->tahun_akademi,
				'semester' => $this->tahunakademi_model->get_by_id($th)->semester==1?'Ganjil':'Genap',
			);

		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/krs_update',$data);
        $this->load->view('templates_administrator/footer');
		}else{
			echo "Data Tidak Ada";
		}
	}

	public function update_aksi()
	{
		$id_krs =	$this->input->post('id_krs', TRUE);
		$npm =	$this->input->post('npm', TRUE);
		$id_thn_akademi =	$this->input->post('id_thn_akademi', TRUE);
		$kode_matakuliah =	$this->input->post('kode_matakuliah', TRUE);

		$data = array(
			'id_krs' => $id_krs,
			'id_thn_akademi' => $id_thn_akademi,
			'npm' => $npm,
			'kode_matakuliah' => $this->input->post('kode_matakuliah', TRUE)
		);

		$this->krs_model->update($id_krs, $data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data KRS Berhasil di Update!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
			redirect('administrator/krs/index');
	}
	public function delete($id)
    {
        $where = array('id_krs' => $id);
        $this->krs_model->hapus_data($where,'krs');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data KRS Berhasil di Hapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('administrator/krs/index');
}

}

?>
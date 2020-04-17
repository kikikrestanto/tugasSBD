<?php 

class Tahun_akademi extends CI_Controller{
	public function index()
	{
		$data['tahun_akademi'] = $this->tahunakademi_model->tampil_data('tahun_akademi')->result();
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/tahun_akademi',$data);
        $this->load->view('templates_administrator/footer');
	}

	public function tambah_tahun_akademi()
    {
    	$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/tahun_akademi_form');
        $this->load->view('templates_administrator/footer');

    }

    public function tambah_tahun_akademi_aksi()
    {
    	$this->_rules();
    	if($this->form_validation->run() == FALSE)
    	{
    		$this->tambah_tahun_akademi();
    	}else{
    		$tahun_akademi = $this->input->post('tahun_akademi');
    		$semester = $this->input->post('semester');
    		$status = $this->input->post('status');
    		
    		$data = array(
    			'tahun_akademi' => $tahun_akademi,
    			'semester' => $semester,
    			'status' =>$status

    		);
    		$this->tahunakademi_model->insert_data($data,'tahun_akademi');
    		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Tahun Akademi Berhasil di Tambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
    		redirect('administrator/tahun_akademi');

    	}
    }

     public function _rules()
    {
        $this->form_validation->set_rules('tahun_akademi','tahun_akademi','required',[
        'required' => 'Kode Tahun Akademi Wajib di isi']);
        $this->form_validation->set_rules('semester','semester','required',[
        'required' => 'Semester Wajib di isi']);
        $this->form_validation->set_rules('status','status','required',[
        'required' => 'Status Wajib di isi']);
    } 

    public function update($id)
    {
    	$where = array('id_thn_akademi' => $id);
        $data['tahun_akademi'] = $this->tahunakademi_model->edit_data($where,'tahun_akademi')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/tahun_akademi_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
    	$id 		= $this->input->post('id');
    	$tahun_akademi 		= $this->input->post('tahun_akademi');
    	$semester    	 		= $this->input->post('semester');
    	$status 		= $this->input->post('status');

    	$data = array(
    		'tahun_akademi' => $tahun_akademi,
    		'semester' 		=> $semester,
    		'status'		=> $status
    	);

    	$where = array('id_thn_akademi' => $id);

    	$this->tahunakademi_model->update_data($where,$data,'tahun_akademi');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Tahun Akademi Berhasil di Update
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('administrator/tahun_akademi');
    }

    public function delete($id)
    {
        $where = array('id_thn_akademi' => $id);
        $this->tahunakademi_model->hapus_data($where,'tahun_akademi');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Tahun Akademi Berhasil di Hapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('administrator/tahun_akademi');
    }

}


?>
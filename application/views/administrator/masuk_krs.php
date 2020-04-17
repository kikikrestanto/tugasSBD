<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Masuk Halaman KRS
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <form method="post" action="<?php echo base_url('administrator/krs/krs_aksi') ?>">
    	
    	<div class="form-group">
    		<label>NPM Mahasiswa</label>
    		<input type="text" name="npm" placeholder="Masukkan NPM Mahasiswa" class="form-control">
    		<?php  echo form_error('npm','<div class="text"> small ml-2','</div>') ?>
    	</div>

    	<div class="form-group">
    		<label>Tahun Akademi / Semester </label>
    		<?php 
    		$query = $this->db->query('SELECT id_thn_akademi, semester, CONCAT(tahun_akademi,"/") AS thn_semester
    			FROM tahun_akademi');

    			$dropdowns = $query->result();
    			foreach($dropdowns as $dropdown){

    				if($dropdown->semester === 1){
    					$tampilSemester = "Ganjil";
    				}else{
    					$tampilSemester = "Genap";
    				}
    				$dropDownList[$dropdown->id_thn_akademi] = $dropdown->thn_semester." ".$tampilSemester;
    			}

    			echo form_dropdown('id_thn_akademi',$dropDownList,'','class="form-control" id="id_thn_akademi"');
    		 ?>

    	</div>

    	<button type="submit" class="btn btn-primary">Proses</button>
    </form>

</div>
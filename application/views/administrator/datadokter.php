<div class="container-fluid">

	<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Informasi
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php 
    echo anchor('administrator/datadokter/tambah_informasi','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Informasi </button>
    ')
    ?>

	<table class="table table-striped table-hover table-border">
		<tr>
			<th>No</th>
			<th>Nama Dokter</th>
			<th>Spesialis Dokter</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php $no=1;
		 foreach($informasi as $info) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $data->nama_dokter?></td>
			<td><?php echo $data->Spesialis_dokter ?></td>
	
			
			<td width="20px"><?php echo anchor('administrator/datadokter/update/'.$data
            ->id_informasi,'<div class="btn btn-sm btn-primary"><i class = "fa fa-edit" ></i></div> ') ?> </td>
            
            <td width="20px"><?php echo anchor('administrator/informasi/delete/'.$data
            ->id_informasi,'<div class="btn btn-sm btn-danger"><i class = "fa fa-trash" ></i></div> ') ?> </td>
		</tr>

		<?php endforeach; ?>
	</table>


</div>
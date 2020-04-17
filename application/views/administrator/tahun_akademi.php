<div class="containter-fluid">

	<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Tahun Akademi
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php 
    echo anchor('administrator/tahun_akademi/tambah_tahun_akademi','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Tahun Akademi</button>
    ')
    ?>

	<table class="table table-hover table-border table-striped">
		<tr>
			<th>No</th>
			<th>Tahun Akademi</th>
			<th>Semester</th>
			<th>Status</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php $no = 1;
		foreach($tahun_akademi as $ak) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $ak->tahun_akademi ?></td>
				<td><?php echo $ak->semester ?></td>
				<td><?php echo $ak->status ?></td>
				<td width="20px"><?php echo anchor('administrator/tahun_akademi/update/'.$ak
            ->id_thn_akademi,'<div class="btn btn-sm btn-primary"><i class = "fa fa-edit" ></i></div> ') ?> </td>
            
            <td width="20px"><?php echo anchor('administrator/tahun_akademi/delete/'.$ak
            ->id_thn_akademi,'<div class="btn btn-sm btn-danger"><i class = "fa fa-trash" ></i></div> ') ?> </td>
			</tr>
		<?php endforeach; ?>
	</table>


</div>
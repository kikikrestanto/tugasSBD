<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
        <i class="fas fa-eye"></i> Detail Dokter
    </div>

    <table class="table table-hover table-bordered table-striped">

    	<?php foreach($detail as $dt) : ?>
    		<img class="mb-4" src="<?php echo base_url('assets/uploads/').$dt->photo ?>" style="width:20%">


    	<tr>
    		<td>NIDN</td>
    		<td><?php echo $dt->nidn; ?></td>
    	</tr>

    	<tr>
    		<td>Nama Dokter</td>
    		<td><?php echo $dt->nama_dokter; ?></td>
    	</tr>


    	<tr>
    		<td>Alamat</td>
    		<td><?php echo $dt->alamat; ?></td>
    	</tr>


    	<tr>
    		<td>Jenis Kelamin</td>
    		<td><?php echo $dt->jenis_kelamin; ?></td>
    	</tr>

    	<tr>
    		<td>Email</td>
    		<td><?php echo $dt->email; ?></td>
    	</tr>


    	<tr>
    		<td>No. Telepon</td>
    		<td><?php echo $dt->telp; ?></td>
    	</tr>

        <tr>
            <td>Spesialis</td>
            <td><?php echo $dt->spesialis; ?></td>
        </tr>


    	

    <?php endforeach; ?>

    </table>

    <?php echo anchor('administrator/doker','<div class="btn btn-sm btn-primary">Kembali</div>') ?>
    <br>

</div>
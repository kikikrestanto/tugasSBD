<div class="container-fluid">

<div class="alert alert-success" role="alert">
        <i class="fas fa-edit"></i> Form Update Tahun Akademi
    </div>

    <?php foreach($tahun_akademi as  $ta) : ?>

    <form method="post" action="<?php echo base_url(
        'administrator/tahun_akademi/update_aksi'
    ) ?>">
    <div class="form-group">
        <label> Tahun Akademi </label>
        <input type="hidden" name="id"
         class="form-control" value="<?php echo $ta->id_thn_akademi ?>">
        <input type="text" name="tahun_akademi"
        placeholder="Masukkan Tahun Akademi" class="form-control" value="<?php echo $ta->tahun_akademi ?>">
        <?php echo form_error('tahun_akademi','<div class="text-danger
        small" ml-3>')?>
    </div>

    <div class="form-group">
        <label> Semester </label>
        <select name="semester" class="form-control">
            <option ><?php echo $ta->semester ?></option>
            <option>Ganjil</option>
            <option>Genap</option>
        </select>
        <?php echo form_error('semester','<div class="text-danger
        small" ml-3>')?>
    </div>

    <div class="form-group">
        <label> Status </label>
        <select name="status" class="form-control">
            <option ><?php echo $ta->status ?></option>
            <option>Aktif</option>
            <option>Tidak Aktif</option>
        </select>
        <?php echo form_error('status','<div class="text-danger
        small" ml-3>')?>
    </div>

    <button type="submit" class="btn btn-primary"> Simpan </button>
    
    </form>

<?php endforeach; ?>


</div>
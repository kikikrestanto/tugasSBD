<div class="container-fluid">

  <div class="alert alert-success" role="alert">
  <i class="fas fa-tachometer-alt"></i> Dashboard
  </div>

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Selamat Datang</h4>
    <p>Selamat Datang <strong> <?php echo $username; ?> </strong> di Sistem Informasi Akademi , Anda login sebagai<strong> <?php echo $level; ?> </strong> <hr>
      <!-- Button trigger modal -->
  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
  <i class="fas fa-cogs"></i> Control Panel
  </button>
    </div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> Control Panel Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/mahasiswa') ?>"><p class="nav-link small
            text-info">Mahasiswa</p></a>
            <i class="fas fa-3x fa-user-graduate"></i>  
          </div><hr>
          
            <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/tahun_akademi') ?>"><p class="nav-link small
            text-info">Tahun Akademi</p></a>
            <i class="fas fa-3x fa-calendar-alt"></i>  
          </div><hr>
          
            <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/krs') ?>"><p class="nav-link small
            text-info">KRS</p></a>
            <i class="fas fa-3x fa-edit"></i>  
          </div>
        </div>
        <div class="row">
            
            <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/informasi') ?>"><p class="nav-link small
            text-info">Info Kampus</p></a>
            <i class="fas fa-3x fa-bullhorn"></i>  
            </div>
          
            <hr>
            <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/identitas') ?>"><p class="nav-link small
            text-info">Identitas</p></a>
            <i class="fas fa-3x fa-id-card-alt"></i>  
          </div>
          
            <hr>
            <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/tentang_kampus') ?>"><p class="nav-link small
            text-info">Tentang Kampus</p></a>
            <i class="fas fa-3x fa-info-circle"></i>  
          </div>

          </div> 
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>
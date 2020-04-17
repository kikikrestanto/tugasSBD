<nav class="navbar navbar-light bg-warning text-dark">
	<?php foreach($identitas as $id) : ?>
  <a class="navbar-brand"><strong><?php echo $id->judul_website ?></strong></a>
  <span class="small"><?php echo $id->alamat ?> - <?php echo $id->email ?> - <?php echo $id->telp ?></span>
  	<?php endforeach; ?>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    <?php echo anchor('administrator/login','<div class="btn btn-sm btn-outline-primary my-2 my-sm-0 ml-2 type="submit"">Login</div>') ?>
    <!--<button class="btn btn-outline-primary my-2 my-sm-0 ml-2" type="submit" href="<?php echo base_url('administrator/dashboard') ?>">Login</button> -->
  </form>
</nav>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mx-auto">
      <a class="nav-item nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link ml-3" href="#">Tentang Kampus</a>
      <a class="nav-item nav-link ml-3" href="#">Informasi</a>
      <a class="nav-item nav-link ml-3" href="#">Fasilitas</a>
      <a class="nav-item nav-link ml-3" href="#">Gallery</a>
      <a class="nav-item nav-link ml-3" href="#">Kontak</a>
      <a class="nav-item nav-link ml-3" href="#">Data Dokter</a>
      <a class="nav-item nav-link ml-3" href="#">Jadwal Dokter</a>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/puskesmas1.jpg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/puskesmas2.jpg') ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="card text-center m-5">
  <div class="card-header">
    <strong>Tentang Kampus</strong>
  </div>
  <div class="card-body">
    
    <p class="card-text">
    	<?Php foreach($tentang as $ttg) : ?>
		<?php echo word_limiter($ttg->sejarah,10) ?>
		<?php endforeach; ?>
    </p>
   
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Selengkapnya....
</button>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tentang Kampus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-justify">
      	<STRONG>Sejarah Universitas Kampus X</STRONG>
        <?Php foreach($tentang as $ttg) : ?>
		<?php echo $ttg->sejarah ?>
		<?php endforeach; ?><br>

		<STRONG>Visi Universitas Kampus X</STRONG>
        <?Php foreach($tentang as $ttg) : ?>
		<?php echo $ttg->visi ?>
		<?php endforeach; ?><br>

		<STRONG>Misi Universitas Kampus X</STRONG>
        <?Php foreach($tentang as $ttg) : ?>
		<?php echo $ttg->misi ?>
		<?php endforeach; ?><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="row m-4 text-center">

    <?php foreach($informasi as $info) : ?>
    <div class="card m-3" style="width: 18rem;">
      <span class="display-2 text-center text-info"><i class="<?php echo $info->icon ?>"></i></span>
    <div class="card-body">
      <h5 class="card-title badge badge-info"><?php echo $info->judul_informasi ?></h5>
      <p class="card-text"><?php echo $info->isi_informasi ?></p>
      <a href="#" class="btn btn-primary">Selengkapnya...</a>
    </div>
  </div>
<?php endforeach; ?>
</div>
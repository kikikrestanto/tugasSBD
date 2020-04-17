<?php 

$nilai = get_instance();
$nilai->load->model('krs_model');
$nilai->load->model('mahasiswa_model');
$nilai->load->model('matakuliah_model');
$nilai->load->model('tahunakademi_model');

$krs = $nilai->krs_model->get_by_id($id_krs{0});
$kode_matakuliah = $krs['kode_matakuliah'];
$id_thn_akademi = $krs['id_thn_akademi'];
 ?>

 <div class="container-fluid">
 	<div class="alert alert-success">
 		<i class="fas fa-university"></i> Daftar Nilai Mahasiswa
 		
 	</div>

 	<center>
 		<legend><strong>Dafar Nilai Mahasiswa</strong></legend>
 		<table>
 			<tr>
 				<td>Kode Mata Kuliah</td>
 				<td>: <?php echo $kode_matakuliah; ?></td>
 			</tr>

 	<!--		<tr>
 				<td>Nama Mata Kuliah</td>
 				<td>: <?php echo $nilai->matakuliah_model->get_by_id($kode_matakuliah)->nama_matakuliah; ?></td>
 			</tr>

 			<tr>
 				<td>SKS</td>
 				<td>: <?php echo $nilai->matakuliah_model->get_by_id($kode_matakuliah)->sks; ?></td>
 			</tr>

 				<?php 
 					$thn = $nilai->tahunakademi_model->get_by_id($id_thn_akademi);
 					$semester = $thn->semester === 1;

 					if($semester){
 						$tampilSemester = "Ganjil";
 					}else{
 						$tampilSemester = "Genap";
 					}
 				?>
 			<tr>
 				<td>
 					Tahun Akademi (Semester)
 				</td>
 				<td>
 					: <?php echo $thn->tahun_akademi."(".$semester.")" ?>
 				</td>
 			</tr>
 		</table> -->
 	</center>
 	

 </div> 


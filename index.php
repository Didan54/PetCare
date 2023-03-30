<?php
session_start();
include 'koneksi.php';
?>

<?php include 'header.php'; ?>
<div class="jumbotron jumbotron-fluid jumbotronhome">
	<div class="kontainer">
		<h3 class="text-hitam text-tengah teksdepan"><b>SELAMAT DATANG DI <br>  PET CARE MAKASSAR
		</b></h3>
	</div>
</div>
<section id="kategori">
	<div class="kontainer">
		<div class="row mb-3 pb-3">
			<div class="kolom-md-12 judulsection animasikontainer">
			<h3 class="text-tengah">Pet Care Makassar</h3>
				<br>
				
					<p>Toko Pet Care Makassar merupakan toko yang berpengalaman dan terpecaya
				<br>
					Di toko ini juga dijual lengkap berbagai macam kebutuhan untuk kucing mulai dari makanan,
					vitamin, kandang, mainan kucing dan sejenisnya. Beragamnya produk perlengkapan kucing di 
					toko kami juga di ikuti dengan harga yang murah sehingga hal itu menjadikan daya tarik kami.
					Selain itu terdaPet juga jasa perawatan untuk kucing untuk memastikan kucing anda bersih 
					dan sehat.</p>
				
			</div>
		</div>
		<div class="row">
			<div class="kolom-md-4 kolom-lg-4 animasikontainer">
				<div class="produk">
					<img src="foto/whiskas.jpg" style="height:200px;width:100%;border-radius:10px" alt="">
				</div>
			</div>
			<div class="kolom-md-4 kolom-lg-4 animasikontainer">
				<div class="produk">
					<img src="foto/kandang.jpg" style="height:200px;width:100%;border-radius:10px" alt="">
				</div>
			</div>
			<div class="kolom-md-4 kolom-lg-4 animasikontainer">
				<div class="produk">
					<img src="foto/perawatan.jpg" style="height:200px;width:100%;border-radius:10px" alt="">
				</div>
			</div>
		</div>
		<div class="row mb-3 pb-3">
			<div class="kolom-md-12 judulsection animasikontainer">
				
			</div>
		</div>
	</div>
</section>
<?php
include 'footer.php';
?>
<?php
include('koneksi.php');

// Proses data ulasan yang dikirimkan melalui formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = clean_input($_POST["username"]);
    $ulasan = clean_input($_POST["ulasan"]);

    // Simpan ulasan ke dalam database
    $sql = "INSERT INTO reviews (username, ulasan) VALUES ('$username', '$ulasan')";

    if ($conn->query($sql) === TRUE) {
        // Jika data berhasil disimpan, tampilkan modal sukses
        echo '<script>$("#successModal").modal("show");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi database
$conn->close();
?>


<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Menara CaFeha</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Fontawesome CSS Online -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Fontawesome CSS Offline -->
    <link rel="stylesheet" href="fontawesome/all.min.css">

    <!-- Manual Styling -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body id="top">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	  <div class="container">
		<a class="navbar-brand" href="#top"> Menara CaFeha </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#top"><i class="fas fa-fw fa-home"></i> Beranda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about"><i class="fas fa-fw fa-info-circle"></i> Tentang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#galeri"><i class="fas fa-fw fa-images"></i> Galeri<span class="sr-only">(saat ini)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#lokasi"><i class="fas fa-fw fa-map-marker-alt"></i> Lokasi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#ulasan"><i class="fas fa-fw fa-comments"></i> Ulasan</a>
				</li>
			</ul>
		</div>		
	  </div>
	</nav>

	<div class="jumbotron">
        <div class="container text-center">
            <h1>SELAMAT DATANG DI WEBSITE<br>WISATA DESA TELUK SUMBANG</h1>
        </div>
    </div>

	<!-- Tentang -->
	<div id="about" class="pb-4">
		<div class="container">
            <div class="row mb-4 pt-4">
                <div class="col text-center">
                    <h2>Tentang</h2>
                </div>
            </div>
		  <div class="row">
			<div class="col-md-6">
			  <div class="card">
				<img src="images/gambar3.jpg" alt="">
			  </div>
			</div>
			<div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
			  <p style="font-size: 14px;">Menara CaFeha Teluk Sumbang adalah tempat camping ground terbaik di Kampung Teluk Sumbang. Di sini, pengunjung dapat menikmati keindahan kolaborasi antara hutan, gunung, laut, pemukiman, dan pulau, serta menikmati panorama indah Kampung Teluk Sumbang dari ketinggian.
				<br><br>Fasilitas yang tersedia di Menara CaFeha Teluk Sumbang antara lain kamar mandi umum, musholla, persewaan alat, dan area selfie. Tiket masuk ke tempat ini gratis. Namun, bagi yang ingin menginap atau camping, perlu menyewa tempat. Jika tidak memiliki tenda, pengunjung juga dapat menyewa tenda di sana.
				<br><br>Meskipun tempat ini menawarkan keindahan alam yang luar biasa, Menara CaFeha Teluk Sumbang belum banyak diketahui orang, sehingga memberikan pengalaman yang lebih eksklusif dan tenang bagi para pengunjung. Akses menuju lokasi ini agak sulit, sehingga bagi yang ingin berkunjung, disarankan untuk bertanya kepada penduduk setempat untuk mendapatkan petunjuk arah yang tepat.
			   </p>
			</div>
		  </div>
		</div>
	  </div>

    <!-- Galeri Awal -->
	<section id="galeri" class="pb-4">

	    <div class="container mb-2">
	        <div class="row pt-4 mb-4">
	            <div class="col text-center">
	                <h2>Galeri</h2>
	            </div>
	        </div>

	        <!-- <div class="popup-gallery"> -->
	        	<!-- baris 1 galeri -->
	        	<div class="row">
	        		<div class="col-md-4 col-sm-12">
		                <figure>
		            		<img src="images/gambar11.jpeg">
						    <figcaption>
						    	<h3>Alam</h3>
							</figcaption>
		            	</figure>
		            </div>
		            <div class="col-md-4 col-sm-12">
		            	<figure>
		            		<img src="images/gambar6.jpg">
						    <figcaption>
						    	<h3>Alam</h3>
							</figcaption>
		            	</figure>
		            </div>
		            <div class="col-md-4 col-sm-12">
		                <figure>
		            		<img src="images/gambar18.jpeg">
						    <figcaption>
						    	<h3>Alam</h3>
							</figcaption>
		            	</figure>
		            </div>
		        </div>

		        <!-- baris 2 Galeri -->
		        <div class="row">
		            <div class="col-md-4 col-sm-12">
		            	<figure>
		            		<img src="images/gambar16.jpeg">
						    <figcaption>
						    	<h3>Alam</h3>
							</figcaption>
		            	</figure>
		            </div>
		            <div class="col-md-4 col-sm-12">
		                <figure>
		            		<img src="images/gambar12.jpeg">
						    <figcaption>
						    	<h3>Bangunan Menara CaFeha</h3>
							</figcaption>
		            	</figure>
		            </div>
		            <div class="col-md-4 col-sm-12">
		                <figure>
		            		<img src="images/gambar4.jpg">
						    <figcaption>
						    	<h3>Alam</h3>
							</figcaption>
		            	</figure>
		            </div>
		        </div>
		    <!-- </div> -->

	    </div>
	</section>
    <!-- Galeri Akhir -->

	<!-- Lokasi Awal -->
	<section id="lokasi" class="pb-4">
		<div class="container">
			<div class="row pt-4 mb-4">
				<div class="col text-center">
					<h2>Lokasi</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-center">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127938.57707493825!2d118.3024314!3d0.7391349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3274a9003e307f89%3A0x3013a6968f5571b8!2sMenara+CaFeHa!5e0!3m2!1sen!2sid!4v1626896541234!5m2!1sen!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				<div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
					<h5>Tertarik Datang?</h5>
					<p style="font-size: 14px;">Menara CaFeha ini berada di Desa TELUK SUMBANG Rt.04 Kecamatan Biduk-Biduk, Kabupaten Berau, Kalimantan Timur</p>
				</div>
			</div>
		</div>
	</section>
    <!-- Lokasi Akhir -->

	<!-- Ulasan Awal -->
	<section id="ulasan" class="text-white pb-4">
		<div class="container">
			<div class="row pt-4 mb-4">
				<div class="col text-center">
					<h2>Ulasan</h2>
					<button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#reviewModal">
						Berikan Ulasan
					</button>
				</div>
			</div>
			<div id="reviews-container" class="row pt-4">
				<!-- Reviews will be appended here -->
			</div>
		</div>
	</section>
	<!-- Ulasan Akhir -->

	<!-- Review Modal -->
	<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="reviewModalLabel">Berikan Ulasan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">
				<form id="reviewForm" class="mt-2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
						<div class="form-group">
							<input id="username" class="form-control" type="text" placeholder="Username" required>
						</div>
						<div class="form-group">
							<textarea name="ulasan" id="pesan" rows="5" class="form-control" placeholder="Masukkan Ulasan" required></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Kirim</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Success Modal -->
	<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="successModalLabel">SUKSES</h5>
				</div>
				<div class="modal-body text-center">
					Ulasan berhasil dikirim!
				</div>
				<div class="modal-footer d-flex justify-content-center">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Oke</button>
				</div>
			</div>
		</div>
	</div>

    <!-- <a href="#" class="backToTop"></a> -->
    <a id="backtotop" href="#top"><img src="images/angle-up.svg" alt=""></a>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Fontawesome JS Online-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <!-- Fontawesome JS Offline -->
    <script src="fontawesome/all.min.js"></script>
    <!-- My Script -->
    <script src="js/main.js"></script>

	<!-- Custom JavaScript to handle form submission -->
	<script>
		document.getElementById('reviewForm').addEventListener('submit', function(event) {
			event.preventDefault();
			
			// Get the username and review text
			var username = document.getElementById('username').value;
			var ulasan = document.getElementById('pesan').value;

			// Create a new review element
			var reviewElement = document.createElement('div');
			reviewElement.className = 'col-12 mt-3';
			reviewElement.innerHTML = '<div class="card text-dark bg-light"><div class="card-body"><h5 class="card-title">' + username + '</h5><p class="card-text">' + ulasan + '</p></div></div>';

			// Append the new review to the reviews container
			document.getElementById('reviews-container').appendChild(reviewElement);

			// Clear the form
			document.getElementById('reviewForm').reset();

			// Hide the review modal
			$('#reviewModal').modal('hide');

			// Show the success modal
			$('#successModal').modal('show');
		});
	</script>

  </body>
</html>

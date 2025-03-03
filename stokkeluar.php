<?php 
session_start();
?>
<!DOCTYPE html>
<?php 
include "include/head.php"; 
include 'config/koneksi.php';
?>

<body>
<!-- Pastikan Anda telah menghubungkan library SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
// Cek session 'status' di sisi klien (JavaScript)
var status = "<?php echo isset($_SESSION['status']) ? $_SESSION['status'] : ''; ?>";
// Cek apakah pengguna belum login
if (status !== "login") {
	// Tampilkan pesan peringatan SweetAlert2
	Swal.fire({
	icon: 'error',
	title: 'Belum Login',
	text: 'Anda harus login terlebih dahulu untuk mengakses halaman ini.',
	}).then(function() {
	// Redirect pengguna ke halaman login atau halaman lain jika diperlukan
	window.location.href = "login.php"; // Ganti "login.php" dengan URL halaman login Anda
	});
}
</script>



    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="waviy">
		   <span style="--i:1">L</span>
		   <span style="--i:2">o</span>
		   <span style="--i:3">a</span>
		   <span style="--i:4">d</span>
		   <span style="--i:5">i</span>
		   <span style="--i:6">n</span>
		   <span style="--i:7">g</span>
		   <span style="--i:8">.</span>
		   <span style="--i:9">.</span>
		   <span style="--i:10">.</span>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="home.php" class="brand-logo">
				<svg class="logo-abbr" width="53" height="53" viewBox="0 0 53 53">
					<path d="M21.6348 8.04782C21.6348 5.1939 23.9566 2.87204 26.8105 2.87204H28.6018L28.0614 1.37003C27.7576 0.525342 26.9616 0 26.1132 0C25.8781 0 25.639 0.0403711 25.4052 0.125461L7.3052 6.7133C6.22916 7.105 5.67535 8.29574 6.06933 9.37096L7.02571 11.9814H21.6348V8.04782Z" fill="#759DD9"/>
					<path d="M26.8105 5.97754C25.6671 5.97754 24.7402 6.90442 24.7402 8.04786V11.9815H42.8555V8.04786C42.8555 6.90442 41.9286 5.97754 40.7852 5.97754H26.8105Z" fill="#F8A961"/>
					<path class="svg-logo-primary-path" d="M48.3418 41.8457H41.0957C36.8148 41.8457 33.332 38.3629 33.332 34.082C33.332 29.8011 36.8148 26.3184 41.0957 26.3184H48.3418V19.2275C48.3418 16.9408 46.4879 15.0869 44.2012 15.0869H4.14062C1.85386 15.0869 0 16.9408 0 19.2275V48.8594C0 51.1462 1.85386 53 4.14062 53H44.2012C46.4879 53 48.3418 51.1462 48.3418 48.8594V41.8457Z" fill="#5BCFC5"/>
					<path class="svg-logo-primary-path" d="M51.4473 29.4238H41.0957C38.5272 29.4238 36.4375 31.5135 36.4375 34.082C36.4375 36.6506 38.5272 38.7402 41.0957 38.7402H51.4473C52.3034 38.7402 53 38.0437 53 37.1875V30.9766C53 30.1204 52.3034 29.4238 51.4473 29.4238ZM41.0957 35.6348C40.2382 35.6348 39.543 34.9396 39.543 34.082C39.543 33.2245 40.2382 32.5293 41.0957 32.5293C41.9532 32.5293 42.6484 33.2245 42.6484 34.082C42.6484 34.9396 41.9532 35.6348 41.0957 35.6348Z" fill="#5BCFC5"/>
				</svg>
                <svg class="brand-title" width="124px" height="33px">
					<path class="svg-title-path" fill-rule="evenodd"  fill="rgb(25, 59, 98)"
					 d="M119.160,20.128 C119.363,20.309 119.602,20.400 119.873,20.400 L123.681,20.400 L123.681,24.820 L118.718,24.820 C117.108,24.820 115.850,24.366 114.944,23.460 C114.037,22.530 113.583,21.284 113.583,19.720 L113.583,11.696 L118.887,11.696 L118.887,19.414 C118.887,19.686 118.978,19.924 119.160,20.128 ZM110.727,11.696 L110.727,7.378 L113.583,7.378 L113.583,11.696 L110.727,11.696 ZM113.583,3.128 L118.887,3.128 L118.887,7.378 L113.583,7.378 L113.583,3.128 ZM123.681,7.378 L123.681,11.696 L118.887,11.696 L118.887,7.378 L123.681,7.378 ZM110.085,17.782 L98.661,17.782 C98.797,18.371 99.058,18.870 99.443,19.278 C99.828,19.686 100.316,19.992 100.905,20.196 C101.494,20.377 102.151,20.468 102.877,20.468 L108.215,20.468 L108.215,24.820 L103.047,24.820 C101.075,24.820 99.341,24.457 97.845,23.732 C96.349,22.984 95.182,21.964 94.343,20.672 C93.527,19.357 93.119,17.839 93.119,16.116 C93.119,14.212 93.516,12.580 94.309,11.220 C95.102,9.860 96.157,8.817 97.471,8.092 C98.808,7.344 100.281,6.970 101.891,6.970 C103.727,6.970 105.257,7.355 106.481,8.126 C107.728,8.897 108.668,9.951 109.303,11.288 C109.937,12.602 110.255,14.110 110.255,15.810 C110.255,16.104 110.232,16.456 110.187,16.864 C110.164,17.249 110.130,17.555 110.085,17.782 ZM104.951,13.430 C104.860,13.090 104.713,12.795 104.509,12.546 C104.328,12.274 104.112,12.047 103.863,11.866 C103.614,11.662 103.319,11.503 102.979,11.390 C102.661,11.276 102.299,11.220 101.891,11.220 C101.370,11.220 100.905,11.310 100.497,11.492 C100.089,11.673 99.749,11.922 99.477,12.240 C99.205,12.534 98.990,12.886 98.831,13.294 C98.695,13.679 98.593,14.076 98.525,14.484 L105.155,14.484 C105.110,14.121 105.041,13.770 104.951,13.430 ZM87.805,24.106 C86.559,24.854 85.108,25.228 83.454,25.228 C82.751,25.228 82.082,25.137 81.448,24.956 C80.835,24.775 80.269,24.514 79.747,24.174 C79.249,23.811 78.829,23.392 78.489,22.916 L78.387,22.916 L78.387,32.198 L73.117,32.198 L73.117,16.422 C73.117,14.518 73.503,12.852 74.274,11.424 C75.044,9.996 76.132,8.897 77.538,8.126 C78.942,7.355 80.586,6.970 82.467,6.970 C83.940,6.970 85.244,7.196 86.377,7.650 C87.533,8.103 88.508,8.760 89.301,9.622 C90.118,10.460 90.740,11.458 91.171,12.614 C91.602,13.770 91.817,15.028 91.817,16.388 C91.817,18.156 91.455,19.697 90.729,21.012 C90.027,22.326 89.052,23.358 87.805,24.106 ZM85.935,13.770 C85.618,13.067 85.165,12.523 84.576,12.138 C83.986,11.730 83.283,11.526 82.467,11.526 C81.651,11.526 80.938,11.730 80.326,12.138 C79.736,12.523 79.282,13.067 78.965,13.770 C78.648,14.450 78.489,15.221 78.489,16.082 C78.489,16.943 78.648,17.714 78.965,18.394 C79.282,19.074 79.736,19.618 80.326,20.026 C80.938,20.411 81.651,20.604 82.467,20.604 C83.283,20.604 83.986,20.411 84.576,20.026 C85.165,19.618 85.618,19.074 85.935,18.394 C86.275,17.714 86.445,16.943 86.445,16.082 C86.445,15.221 86.275,14.450 85.935,13.770 ZM65.039,14.688 C65.039,14.121 64.892,13.611 64.597,13.158 C64.325,12.682 63.951,12.297 63.475,12.002 C62.999,11.707 62.455,11.560 61.843,11.560 C61.231,11.560 60.676,11.707 60.177,12.002 C59.701,12.297 59.327,12.682 59.055,13.158 C58.783,13.611 58.647,14.121 58.647,14.688 L58.647,24.820 L53.377,24.820 L53.377,14.688 C53.377,14.121 53.230,13.611 52.935,13.158 C52.663,12.682 52.278,12.297 51.779,12.002 C51.303,11.707 50.759,11.560 50.147,11.560 C49.535,11.560 48.979,11.707 48.481,12.002 C48.005,12.297 47.631,12.682 47.359,13.158 C47.087,13.611 46.951,14.121 46.951,14.688 L46.951,24.820 L41.681,24.820 L41.681,14.518 C41.681,13.090 42.010,11.809 42.667,10.676 C43.347,9.520 44.311,8.613 45.557,7.956 C46.804,7.299 48.288,6.970 50.011,6.970 C50.873,6.970 51.666,7.072 52.391,7.276 C53.117,7.457 53.774,7.718 54.363,8.058 C54.975,8.375 55.497,8.760 55.927,9.214 L55.995,9.214 C56.448,8.760 56.970,8.375 57.559,8.058 C58.171,7.718 58.840,7.457 59.565,7.276 C60.313,7.072 61.118,6.970 61.979,6.970 C63.702,6.970 65.187,7.299 66.433,7.956 C67.680,8.613 68.643,9.520 69.323,10.676 C70.003,11.809 70.343,13.090 70.343,14.518 L70.343,24.820 L65.039,24.820 L65.039,14.688 ZM34.927,24.038 C33.499,24.831 31.901,25.228 30.133,25.228 C28.343,25.228 26.733,24.831 25.306,24.038 C23.877,23.244 22.744,22.156 21.906,20.774 C21.089,19.391 20.681,17.839 20.681,16.116 C20.681,14.370 21.089,12.818 21.906,11.458 C22.744,10.075 23.877,8.987 25.306,8.194 C26.733,7.378 28.343,6.970 30.133,6.970 C31.924,6.970 33.522,7.378 34.927,8.194 C36.356,8.987 37.478,10.075 38.293,11.458 C39.132,12.818 39.551,14.370 39.551,16.116 C39.551,17.839 39.132,19.391 38.293,20.774 C37.478,22.156 36.356,23.244 34.927,24.038 ZM33.738,13.804 C33.397,13.124 32.921,12.580 32.310,12.172 C31.698,11.764 30.972,11.560 30.133,11.560 C29.295,11.560 28.558,11.764 27.924,12.172 C27.312,12.580 26.835,13.124 26.495,13.804 C26.156,14.484 25.985,15.243 25.985,16.082 C25.985,16.943 26.156,17.714 26.495,18.394 C26.835,19.074 27.312,19.618 27.924,20.026 C28.558,20.434 29.295,20.638 30.133,20.638 C30.972,20.638 31.698,20.434 32.310,20.026 C32.921,19.618 33.397,19.074 33.738,18.394 C34.078,17.714 34.247,16.943 34.247,16.082 C34.247,15.243 34.078,14.484 33.738,13.804 ZM14.280,24.072 C12.875,24.842 11.231,25.228 9.350,25.228 C7.876,25.228 6.561,25.001 5.406,24.548 C4.272,24.094 3.298,23.449 2.482,22.610 C1.689,21.748 1.076,20.740 0.646,19.584 C0.215,18.428 0.000,17.170 0.000,15.810 C0.000,14.042 0.351,12.501 1.054,11.186 C1.779,9.871 2.765,8.840 4.012,8.092 C5.258,7.344 6.709,6.970 8.364,6.970 C9.067,6.970 9.724,7.061 10.336,7.242 C10.971,7.423 11.537,7.695 12.036,8.058 C12.557,8.398 12.988,8.806 13.328,9.282 L13.430,9.282 L13.430,-0.000 L18.700,-0.000 L18.700,15.776 C18.700,17.680 18.314,19.346 17.544,20.774 C16.773,22.202 15.686,23.301 14.280,24.072 ZM12.851,13.804 C12.534,13.124 12.070,12.591 11.458,12.206 C10.869,11.798 10.166,11.594 9.350,11.594 C8.534,11.594 7.831,11.798 7.242,12.206 C6.652,12.591 6.187,13.124 5.848,13.804 C5.530,14.484 5.372,15.254 5.372,16.116 C5.372,16.977 5.530,17.759 5.848,18.462 C6.187,19.142 6.652,19.686 7.242,20.094 C7.831,20.479 8.534,20.672 9.350,20.672 C10.166,20.672 10.869,20.479 11.458,20.094 C12.070,19.686 12.534,19.142 12.851,18.462 C13.169,17.759 13.328,16.977 13.328,16.116 C13.328,15.254 13.169,14.484 12.851,13.804 Z"/>
				</svg>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                Stok Keluar
                            </div>
                        </div>
                    </div>
				</nav>
			</div>
		</div>
                    
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include "include/sidebar.php"; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Stok Keluar</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Stok Keluar</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="proses/out.php" method="post" class="form-valide-with-icon needs-validation" enctype="multipart/form-data">
                                        <div class="mb-3">
											<div class="form-group">
												<h6 for="search_produk">Masukan Kode/Nama Produk/Kategori Produk</h6>
												<input type="text" class="form-control" id="searchInput2" placeholder="Filter Produk" oninput="filterProduk();" autofocus required>
											</div>
                                        </div>
										<div class="mb-3">
											<div class="form-group">
												<h6 for="produk">Produk *</h6>
												<select class="form-control" id="produk2" name="produk" onmouseover="isiDeskripsi2();isiFoto();" required>

												</select>
											</div>
                                        </div>
                                            <div class="mb-3">
												<div class="form-group">
													<h6 for="deskripsi">Deskripsi</h6>
													<textarea class="form-control" id="deskripsi2" name="deskripsi" readonly></textarea>
												</div>
                                            </div>
											<div class="mb-3">
												<div class="form-group">
													<h6 for="produk">Karyawan *</h6>
													<select class="form-control" id="karyawan" name="karyawan" required>
													<option value="-" disabled selected>Pilih Salah Satu</option>
													<?php
													$koneksi2 = mysqli_connect("localhost","webantne_all","Ber517ANy45wan","penggajian_new");
													$sql1=mysqli_query($koneksi2,"SELECT MASNIP,MASNAM FROM penggajian_new.master WHERE MSEKOLAH='SMA' order by MASNAM");
														while ($s=mysqli_fetch_array($sql1)) { ?>
														<option value="<?php echo $s['MASNIP']; ?>"><?php echo $s['MASNAM']; ?></option>
														<?php } ?>
													</select>
												</div>
                                            </div>
											<div class="mb-3">
												<div class="form-group">
													<h6 for="stok">Jumlah Stok Keluar *</h6>
													<input type="text" class="form-control" id="stok" name="stok" placeholder="Masukkan Jumlah Stok" required>
												</div>
                                            </div>
											<div class="mb-3">
                                                <div class="form-group">
                                                    <h6 for="stok">Foto Produk</h6>
                                                    <img width="150" height="150" id="productImage" onclick="openPopup()" src="images/kosong.png" alt="Foto Produk">
                                                </div>
                                            </div>
                                      
                                        
                                        <button type="submit" class="btn me-2 btn-primary">Submit</button>
                                        <a href="home.php" type="submit" class="btn btn-light">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php include "include/footer.php" ?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

    <script>
		function suggestProducts() {
			var input = document.getElementById("produk").value;
			var suggestionsDiv = document.getElementById("suggestions");

			// Periksa apakah input tidak kosong
			if (input.length >= 5) {
				// Buat objek XMLHttpRequest
				var xhr = new XMLHttpRequest();

				// Konfigurasi permintaan
				xhr.open("GET", "get/produk.php?q=" + input, true);

				// Tangani respons
				xhr.onload = function() {
					if (xhr.status === 200) {
						// Bersihkan daftar saran
						suggestionsDiv.innerHTML = "";

						// Parse data JSON dari server
						var products = JSON.parse(xhr.responseText);

						// Tampilkan saran produk
						products.forEach(function(product) {
							var productDiv = document.createElement("div");
							productDiv.textContent = product.nama_produk; // Gantilah "nama" dengan nama kolom yang sesuai di database
							productDiv.addEventListener("click", function() {
								// Isi input dengan teks produk yang diklik
								document.getElementById("produk").value = product.nama_produk;
								// Kosongkan daftar saran
								suggestionsDiv.style.display = "none";
							});
							suggestionsDiv.appendChild(productDiv);
						});
						// Tampilkan daftar saran
						suggestionsDiv.style.display = "block";
					}
				};

				// Kirim permintaan
				xhr.send();
			} else {
				// Kosongkan daftar saran jika input kosong
				suggestionsDiv.innerHTML = "";
				suggestionsDiv.style.display = "none";
			}
		}

		// Tambahkan event listener untuk mengklik di luar daftar saran
		document.addEventListener("click", function(event) {
			var suggestionsDiv = document.getElementById("suggestions");
			if (!suggestionsDiv.contains(event.target)) {
				suggestionsDiv.innerHTML = "";
				suggestionsDiv.style.display = "none";
			}
		});
	</script>
	<script>

		function isiDeskripsi() {
		var selectProduk = document.getElementById("produk");
		var textareaDeskripsi = document.getElementById("deskripsi");

		// Mendapatkan nilai produk yang dipilih
		var selectedValue = selectProduk.value;

		// Periksa apakah pengguna memilih "Pilih Salah Satu"
		if (selectedValue === "-") {
			textareaDeskripsi.value = ""; // Reset deskripsi jika "Pilih Salah Satu" dipilih
		} else {
			// Kirim permintaan ke server untuk mendapatkan deskripsi produk
			var xhr = new XMLHttpRequest();
			xhr.open("POST", "get/in.php", true);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

			xhr.onreadystatechange = function() {
			if (xhr.readyState === 4 && xhr.status === 200) {
				var response = xhr.responseText;
				textareaDeskripsi.value = response;
			}
			};

			xhr.send("kode_produk=" + selectedValue);
		}
		}

		// Panggil isiDeskripsi saat halaman dimuat untuk menampilkan deskripsi awal jika produk sudah dipilih
		window.addEventListener("load", isiDeskripsi);

	</script>
	<script>

		function isiDeskripsi2() {
		var selectProduk = document.getElementById("produk2");
		var textareaDeskripsi = document.getElementById("deskripsi2");

		// Mendapatkan nilai produk yang dipilih
		var selectedValue = selectProduk.value;

		// Periksa apakah pengguna memilih "Pilih Salah Satu"
		if (selectedValue === "-") {
			textareaDeskripsi.value = ""; // Reset deskripsi jika "Pilih Salah Satu" dipilih
		} else {
			// Kirim permintaan ke server untuk mendapatkan deskripsi produk
			var xhr = new XMLHttpRequest();
			xhr.open("POST", "get/in.php", true);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

			xhr.onreadystatechange = function() {
			if (xhr.readyState === 4 && xhr.status === 200) {
				var response = xhr.responseText;
				textareaDeskripsi.value = response;
			}
			};

			xhr.send("kode_produk=" + selectedValue);
		}
		}

		// Panggil isiDeskripsi saat halaman dimuat untuk menampilkan deskripsi awal jika produk sudah dipilih
		window.addEventListener("load", isiDeskripsi);

	</script>
	<script>

		function isiDeskripsi3() {
		var selectProduk = document.getElementById("produk3");
		var textareaDeskripsi = document.getElementById("deskripsi3");

		// Mendapatkan nilai produk yang dipilih
		var selectedValue = selectProduk.value;

		// Periksa apakah pengguna memilih "Pilih Salah Satu"
		if (selectedValue === "-") {
			textareaDeskripsi.value = ""; // Reset deskripsi jika "Pilih Salah Satu" dipilih
		} else {
			// Kirim permintaan ke server untuk mendapatkan deskripsi produk
			var xhr = new XMLHttpRequest();
			xhr.open("POST", "get/in.php", true);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

			xhr.onreadystatechange = function() {
			if (xhr.readyState === 4 && xhr.status === 200) {
				var response = xhr.responseText;
				textareaDeskripsi.value = response;
			}
			};

			xhr.send("kode_produk=" + selectedValue);
		}
		}

		// Panggil isiDeskripsi saat halaman dimuat untuk menampilkan deskripsi awal jika produk sudah dipilih
		window.addEventListener("load", isiDeskripsi);

		</script>
			<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
			<script>
			$(document).ready(function() {
				// Listen for input changes in the search input field
				$("#searchInput").on("input", function() {
					var searchTerm = $(this).val().toLowerCase();
					$("#produk option").each(function() {
						var optionText = $(this).text().toLowerCase();
						if (optionText.indexOf(searchTerm) === -1) {
							$(this).hide();
						} else {
							$(this).show();
						}
					});
				});
			});
	</script>
	<script>
		$(document).ready(function() {
		// Listen for input changes in the search input field
		$("#searchInput2").on("input", function() {
			var searchTerm = $(this).val().toLowerCase();
			$("#produk2 option").each(function() {
				var optionText = $(this).text().toLowerCase();
				if (optionText.indexOf(searchTerm) === -1) {
					$(this).hide();
				} else {
					$(this).show();
				}
			});
		});
	});
	</script>

	<script>
		$(document).ready(function() {
		// Listen for input changes in the search input field
		$("#searchKaryawan").on("input", function() {
			var searchTerm = $(this).val().toLowerCase();
			$("#karyawan option").each(function() {
				var optionText = $(this).text().toLowerCase();
				if (optionText.indexOf(searchTerm) === -1) {
					$(this).hide();
				} else {
					$(this).show();
				}
			});
		});
	});
	</script>

<script>
function filterProduk() {
    var filterText = document.getElementById("searchInput2").value.toLowerCase();
    var produkDropdown = document.getElementById("produk2");
    produkDropdown.innerHTML = ""; // Kosongkan elemen select

    // Buat request ke server untuk mengambil data produk berdasarkan filter
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var data = JSON.parse(xhr.responseText);

            // Loop melalui hasil query dan tambahkan opsi produk ke dropdown
            data.forEach(function(item) {
                var option = document.createElement("option");
                option.value = item.kode_produk;
                option.text = item.nama_produk + " (" + item.kode_produk + ")";
                produkDropdown.appendChild(option);
            });
        }
    };

    // Ganti URL dengan URL yang sesuai untuk mengambil data produk berdasarkan filter
    xhr.open("GET", "get/get_produk.php?filter=" + filterText, true);
    xhr.send();
}
</script>
<script>
function isiFoto() {
    const inputField = document.getElementById('produk2');
    const productCode = inputField.value;
    // Get the image element
    const productImage = document.getElementById('productImage');

    // Fetch product image path from the database using PHP
    fetch(`get/get_fotoproduk.php?product_code=${productCode}`)
        .then(response => response.json())
        .then(data => {
			if (data.foto) {
                productImage.src = `fotoproduk/${data.foto}`;
                productImage.alt = `Foto ${productCode}`;
            } else {
                productImage.src = 'images/kosong.png'; // Default image path
                productImage.alt = 'Belum Ada Foto';
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
</script>
<script>
function openPopup() {
    const inputField = document.getElementById('produk2');
    const productCode = inputField.value;

    fetch(`get/get_fotoproduk.php?product_code=${productCode}`)
        .then(response => response.json())
        .then(data => {
            if (data.foto) {
                const imageUrl = `fotoproduk/${data.foto}`;
                const popupWindow = window.open(imageUrl, 'Product Image', 'width=600,height=400');
                if (popupWindow) {
                    popupWindow.focus();
                } else {
                    alert('Please allow popups for this website');
                }
            } else {
                alert('Image not available');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
</script>

    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>

	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="./js/custom.min.js"></script>
	<script src="./js/dlabnav-init.js"></script>
	
    
</body>
</html>
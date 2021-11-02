<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

    <link href="styles.css" rel="stylesheet">
    <title>E-comcom</title>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="../index.php">E-comcom</a>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary me-2" type="button" >
                    <a class="text-light" style="text-decoration: none" href="./page/registerPage.php">Sign Up</a>
                </button>
                <button class="btn btn-warning ms-2" type="button" href="./loginPage.php">
                    <a class="text-light" style="text-decoration: none" href="./page/loginPage.php">Login</a>
                </button>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../FotoTubes/carGyms.jpg" class="d-block w-100" alt="Gambar Baju" style="height:700px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color: black;">Alat Fitness</h5>
                    <p style="color: black;">Membantu kesehatan dan kebugaran tubuh anda</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../FotoTubes/carWardrobes.jpg" class="d-block w-100" alt="..." style="height:700px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pakaian</h5>
                    <p>Pakaian Berkuailtas yang disediakan disini</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../FotoTubes/carShoess.jpg" class="d-block w-100" alt="..." style="height:700px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sepatu</h5>
                    <p>Membuat anda nyaman saat berpergian dan berdiri dalam waktu yang lama</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../FotoTubes/carCcosmeticss.jpg" class="d-block w-100" alt="..." style="height:700px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color: black;">Peralatan Kecantikan</h5>
                    <p style="color: black;">Buat Anda Tampil lebih Percaya diri</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="box">
        <div class="container">
            <div id="hot">
                <h2>HOT THIS WEEK</h2>
            </div>
        </div>
    </div>
    
    <div class="card" style="width: 18rem;">
            <img src="../FotoTubes/barbells.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Barbel</h5>
                <p class="card-text">Alat olahraga yang murah, fleksibel dan mudah digunakan</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../FotoTubes/handphones.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Handphone</h5>
                <p class="card-text">Media komunikasi telepon dan SMS, foto, video call, dan mengakses internet</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../FotoTubes/masks.jpg" class="card-img-top" alt="Gambar celana">
            <div class="card-body">
                <h5>Masker</h5>
                <p class="card-text">Bermanfaat untuk kesehatan, terutama dalam mencegah penularan penyakit</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../FotoTubes/pantss.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Celana</h5>
                <p class="card-text">Pakaian luar yang menutup pinggang sampai mata kaki, yang membungkus batang kaki secara terpisah</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../FotoTubes/pens.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Pena</h5>
                <p class="card-text">Alat tulis yang digunakan untuk menyapukan tinta ke permukaan, seperti kertas, untuk menulis atau menggambar</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../FotoTubes/shavers.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Alat Cukur</h5>
                <p class="card-text">Alat untuk menunjang penampilan pria dengan gaya yang elegan</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../FotoTubes/shoess.jpg" class="card-img-top" alt="Gambar celana">
            <div class="card-body">
                <h5>Sepatu</h5>
                <p class="card-text">Melindungi diri dari cedera kaki, akibat terbentur benda keras atau menginjak benda-benda keras maupun tajam</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../FotoTubes/tass.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Tas</h5>
                <p class="card-text">Wadah untuk membawa barang dan perlengkapan, tas kini juga berfungsi sebagai penunjang penampilan</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../FotoTubes/toys.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Mainan</h5>
                <p class="card-text">Mainan tak hanya berfungsi sebagai hiburan bagi anak. Lewat mainan, anak belajar banyak hal</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../FotoTubes/watches.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Jam Tangan</h5>
                <p class="card-text">Fungsi utama dari sebuah jam tangan tentu saja sebagai alat penunjuk waktu</p>
            </div>
        </div>
    
    <div class="navbar navbar-light bg-dark text-light" id="footer" data-animate="fadeInUp" style="height:250px; margin-top:1000px;">
        <div class="container">
            <div class="row">
                <h4>Contact US : </h4>
                <div class="nama">
                    <ul>
                        <li class="fa fa-instagram" aria-hidden="true" href="../index.php">INSTAGRAM</li>
                        <li href="../index.php">YOUTUBE</li>
                    </ul>
                </div>
            </div>
		</div>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
      crossorigin="anonymous"></script>
</body>
</html>
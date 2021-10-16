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
            <a class="navbar-brand fw-bold" href="/tugasbesar">E-comcom</a>
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
                <img src="../FotoTubes/carausel5.jpg" class="d-block w-100" alt="Gambar Baju">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Alat Fitness</h5>
                    <p>Membantu kesehatan dan kebugaran tubuh anda</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../FotoTubes/carausel-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color: black;">Pakaian</h5>
                    <p style="color: black;">Pakaian Berkuailtas yang disediakan disini</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../FotoTubes/carausel-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sepatu</h5>
                    <p>Membuat anda nyaman saat berpergian dan berdiri dalam waktu yang lama</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../FotoTubes/carausel-3.jpg" class="d-block w-100" alt="...">
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
        <img src="../FotoTubes/barbel1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="../FotoTubes/tas1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="../FotoTubes/celana1.jpg" class="card-img-top" alt="Gambar celana">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="../FotoTubes/sepatu1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    <div class="navbar navbar-dark bg-dark" id="footer" data-animate="fadeInUp" style="height:100px">
        <div class="container">
            <div class="row">
                <h4>Contact US : </h4>
                <div class="nama">
                    <ul>
                        <li>EFYGSD</li>
                        <li>TAW</li>
                        <li>GTS</li>
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
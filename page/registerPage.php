<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="../styles.css" rel="stylesheet">
        <title>Register Page</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="../index.php">E-comcom</a>
            </div>
        </nav>

        <div class="bg bg-dark text-dark">
            <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center">
                <div class="card text-light bg-dark ma-5 shadow " style="min-width: 25rem;">
                    <div class="card-header fw-bold" style="padding-left:170px;">Register</div>
                        <div class="card-body">
                            <form action="../process/registerProcess.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Masukkan Nama Anda." required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                                    <input class="form-control" id="noTelp" name="noTelp" aria-describedby="emailHelp" placeholder="08XXXXXXX" required pattern="[0][8][0-9]{8,10}">
                                    <div class="invalid-feedback">
                                        Invalid input.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" aria-label="Default select example" name="jenisKelamin" id="jenisKelamin" required>
                                        <option value="empty">Pilih...</option>
                                        <option value="pria">pria</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">E-mail</label>
                                    <input class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="example@gmail.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                                </div>
                            </form>
                            <p class="mt-2 mb-0">Sudah punya akun ? <a href="./loginPage.php" class="text-primary">Login Disini!</a></p>
                        </div>
                </div>
            </div>
        </div>


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>

        <script src="../script.js"></script>
    </body>
</html>
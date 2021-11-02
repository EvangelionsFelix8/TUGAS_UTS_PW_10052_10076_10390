<?php
    include '../component/sidebar.php';

    include ('../db.php');
    $id = $_GET['id'];
    $sql = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'");
    $data = mysqli_fetch_assoc($sql);
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; 
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >

        <h4>EDIT PENGGUNA, <?php echo $data['name']; ?></h4>
        <hr>
        <form action="../process/editPenggunaProcess.php?id=<?php echo $id ?>" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Pengguna</label>
                <input class="form-control" id="name" name="name" aria-describedby="emailHelp" Required
                value="<?php echo $data['name']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No Telp</label>
                <input class="form-control" id="noTelp" name="noTelp" aria-describedby="emailHelp" Required pattern="[0][8][0-9]{8,10}"
                value="<?php echo $data['noTelp']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenisKelamin" id="jenisKelamin" required>
                    <option value="empty"  <?php if($data['jenisKelamin'] == 'empty'){ echo 'selected'; } ?>>Pilih...</option>
                    <option value="pria" <?php if($data['jenisKelamin'] == 'pria'){ echo 'selected'; } ?>>Laki - Laki</option>
                    <option value="perempuan" <?php if($data['jenisKelamin'] == 'perempuan'){ echo 'selected'; } ?>>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input class="form-control" id="email" name="email" aria-describedby="emailHelp" Required
                value="<?php echo $data['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input class="form-control" id="username" name="username" aria-describedby="emailHelp" Required
                value="<?php echo $data['username']; ?>">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="register">Edit Pengguna</button>
            </div>
        </form>
    </div>
    </aside>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
    </body>
</html>
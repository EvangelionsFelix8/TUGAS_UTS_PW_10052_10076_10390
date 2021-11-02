<?php
    include '../component/sidebar.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #464646; 
                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4>My PROFILE</h4>
        <hr>

        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $query = mysqli_query($con, "SELECT * FROM users WHERE id=$userId") or die(mysqli_error($con));
            
                    if (mysqli_num_rows($query) == 0) {
                        echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                    }
                    else{
                        while($data = mysqli_fetch_assoc($query)){
                            echo'
                                <tr>
                                    <td>'.$data['name'].'</td>
                                    <td>'.$data['noTelp'].'</td>
                                    <td>'.$data['jenisKelamin'].'</td>
                                    <td>'.$data['email'].'</td>
                                    <td>'.$data['username'].'</td>
                                    <td>
                                        <a href="./editPenggunaPage.php?id='.$data['id'].'"><i style="color: green" class="fa fa-edit"></i></a>
                                    </td>
                                </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    </aside>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    // untuk mengecek tombol yang namenya 'register sudah dipencet atau belum
    // $_POST itu method di formnya

    if(isset($_POST['register'])){

        // untuk mengoneksi dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di form ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $namaBarang = $_POST['namaBarang'];
        $hargaBarang = $_POST['hargaBarang'];

        // Melakukan insert ke database dengan query dibawah ini
        $query = mysqli_query($con, "INSERT INTO barang(namaBarang, hargaBarang)
                    VALUES('$namaBarang', '$hargaBarang')")
                        or die(mysqli_error($con));
        // Perintah mysql yang gagal dijalankan di-tangani oleh perintah "or die"

        if($query){
            echo
                '<script>
                    alert("Create Data Success"); window.location = "../page/listBarangPage.php"
                </script>';
        }
        else{
            echo
            '<script>
                alert("Create Data Failed");
            </script>';
        }   
    }
    else{
        echo
            '<script>
                window.history.back();
            </script>';
    }
?>
<?php
    if(isset($_GET['id'])){
        include('../db.php');
        
        $id = $_GET['id'];
        $namaBarang = $_POST['namaBarang'];
        $hargaBarang = $_POST['hargaBarang'];
        
        $query = mysqli_query($con,"UPDATE barang SET namaBarang = '$namaBarang', hargaBarang = '$hargaBarang' WHERE id_barang = '$id'");
        $query = mysqli_query($con,"UPDATE wishlist SET namaBarangWhis = '$namaBarang', hargaBarangWhis = '$hargaBarang' WHERE id_barang = '$id'");

        if($query){
            echo
                '<script>
                    alert("Edit Success"); window.location = "../page/listBarangPage.php"
                </script>';
        }
        else{
            echo
                '<script>
                    alert("Edit Failed"); window.location = "../page/listBarangPage.php"
                </script>';
        }
    }
?>
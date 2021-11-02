<?php
    if(isset($_GET['id'])){
        include('../db.php');

        if(isset($_GET['user'])){

            $id_barang = $_GET['id'];
            $currentUser = $_GET['user'];
    
            $resultFromBarang = mysqli_query($con, "SELECT namaBarang, hargaBarang FROM barang WHERE id_barang = $id_barang")
                            or die(mysqli_error($con));
    
            $fetched = mysqli_fetch_row($resultFromBarang);
    
            $query = mysqli_query($con, "INSERT INTO wishlist(id, id_barang, namaBarangWhis, hargaBarangWhis)
                        VALUES($currentUser, $id_barang,'$fetched[0]', '$fetched[1]')")
                            or die(mysqli_error($con));
    
            if($query){
                echo
                    '<script>
                        alert("Add Barang to Wishlist Success"); window.location = "../page/listWishlistPage.php"
                    </script>';
            }
            else{
                echo
                '<script>
                    alert("Add Barang to Wishlist Failed");
                </script>';
            }
        }
        else{
            echo
            '<script>
                alert("RUSAKKKKKKKKK DALEM"); window.history.back();
            </script>';
        }
    }
    else{
        echo
            '<script>
                alert("RUSAKKKKKKKKK"); window.history.back();
            </script>';
    }
?>
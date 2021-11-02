<?php
    if(isset($_GET['id'])){
        include('../db.php');
        
        if(isset($_GET['user'])){
            $id_wishlist = $_GET['id'];
            $currentUser = $_GET['user'];
            $queryDelete = mysqli_query($con, "DELETE FROM wishlist WHERE id_wishlist='$id_wishlist' AND id='$currentUser'") or die(mysqli_error($con));
            
            if($queryDelete){
                echo
                    '<script>
                        alert("Delete Wishlist Success"); window.location = "../page/listWishlistPage.php"
                    </script>';
            }
            else{
                echo
                    '<script>
                        alert("Delete Wishlist Failed"); window.location = "../page/listWishlistPage.php"
                    </script>';
            }
        }
    }
    else{
        echo
            '<script>
                window.history.back()
            /script>';
    }
?>
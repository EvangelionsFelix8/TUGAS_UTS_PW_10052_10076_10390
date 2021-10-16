<?php
    include('./db.php');
    $id=$_GET['id'];
    $query = mysqli_query($con, "UPDATE users SET status=1 WHERE id='$id'") or die(mysqli_error($con));
    if($query){
        echo
            '<script>
                alert("Account Activated"); window.location = "page/loginPage.php"
            </script>';
        }else{
        echo
            '<script>
                alert("Activation Failed!"); window.location = "page/registerPage.php"
            </script>';
        }
?>
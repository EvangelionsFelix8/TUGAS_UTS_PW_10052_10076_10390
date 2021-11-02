<?php
    if(isset($_GET['id'])){
        include('../db.php');

        $id = $_GET['id'];
        $name = $_POST['name'];
        $noTelp = $_POST['noTelp'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = mysqli_query($con,"UPDATE users SET 
            name = '$name', 
            noTelp = '$noTelp', 
            jenisKelamin = '$jenisKelamin', 
            email = '$email', 
            username='$username' WHERE id = '$id'");

        if($query){
            echo
                '<script>
                    alert("Edit Data Success"); window.location = "../page/profilePage.php"
                </script>';
        }
        else{
            echo
                '<script>
                    alert("Edit Data Failed"); window.location = "../page/profilePage.php"
                </script>';
        }
    }
?>
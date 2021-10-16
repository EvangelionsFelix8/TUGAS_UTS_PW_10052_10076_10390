<?php
    // require __DIR__ . '/path/to/autoload.php';
    // require 'C:\xampp\htdocs\TugasBesar\PHPMailer\src\Exception.php';
    // require 'C:\xampp\htdocs\TugasBesar\PHPMailer\src\PHPMailer.php';
    // require 'C:\xampp\htdocs\TugasBesar\PHPMailer\src\SMTP.php';
    // require '../vendor/autoload.php';
    // require 'C:\xampp\htdocs\TugasBesar\vendor\phpmailer\phpmailer\src\PHPMailer.php';
    // use PHPMailer;
    // use Exception;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require '../vendor/autoload.php';

    if(isset($_POST['register'])){
        include('../db.php');

        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $noTelp = $_POST['noTelp'];
        $email = $_POST['email'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $query_check_email=mysqli_query($con,"SELECT * FROM users WHERE (email='$email')");
        $query_check_username=mysqli_query($con,"SELECT * FROM users WHERE (username='$username')");
            if(mysqli_num_rows($query_check_email)>0){
                echo
                '<script>
                    alert("Email has already exist!"); window.location = "../page/registerPage.php"
                </script>';
            }
            else if(mysqli_num_rows($query_check_username)>0){
                echo
                    '<script>
                        alert("Username has already exist!"); window.location = "../page/registerPage.php"
                    </script>';
            }
            else{
                $query = mysqli_query($con, "INSERT INTO users(name, noTelp, jenisKelamin, email, username, password, status)
                        VALUES('$name', '$noTelp', '$jenisKelamin', '$email', '$username', '$password', 0 )")
                        or die(mysqli_error($con));
                
                $mail = new PHPMailer();
                    //Server settings
                    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = 'kelompok3pw2021@gmail.com';                 // SMTP username
                    $mail->Password = 'kelompok3PW2021';                           // SMTP password
                    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                    // TCP port to connect to
                
                    //Recipients
                    $mail->setFrom('kkumeulchajayo@gmail.com', 'E-comcom');
                    $mail->addAddress($email);               // Name is optional
                
                    //Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Verification Account';
                    $query = mysqli_query($con,"SELECT id FROM users WHERE email='$email'");
                    $data = mysqli_fetch_assoc($query);
                    $mail->Body    = 'Thank you for registering.. Here is the Verified link http://localhost:8081/tugasbesar/verifikasi.php?id='.$data['id'].'';
                
                    $mail->send();
                    echo 'Message has been sent';
                if($query){
                    echo
                        '<script>
                            alert("Register Success"); window.location = "../index.php"
                        </script>';
                }
                else{
                    echo
                    '<script>
                        alert("Register Failed");
                    </script>';
                }
            }
     }
    else{
        echo
            '<script>
                window.history.back();
            </script>';
    }

?>
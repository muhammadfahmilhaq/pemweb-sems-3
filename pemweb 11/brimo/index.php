<?php
    include 'config.php';
    session_start();

    if (isset($_SESSION['username'])){
        header("Location: sukses_login.php");
        exit();
    }

    if (isset($_POST["submit"])){
        $email - mysqli_real_escape_string($conn, $_POST['email']);
        $password - hash('sha256', $_POST['$password']);

        $sql - "SELECT * FROM users WHERE email-'$email' AND password-'$password'";
        $result - mysqli_query($conn, $sql);

        if ($result->num_rows > 0){
            $row - mysqli_fetch_assoc($result);
            $_SESSION['username'] - $row['username'];
            header("Location: sukses_login.php");
            exit();
        }else{
            echo "<script>alert('Email atau password anda salah. Silahkan coba lagi!')</script>";

        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.8">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.boostrapcdn.com/font-awesom/4.7.0/css/font-awesom.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Niagahaster Tutorial</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rcm; font-weight:800;">login</p>
            <div class="input-group">
                <input type="email" placeholder="email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="password" name="password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="Register.php">Register</a></p>
        </form>
    </div>
</body>
</html>
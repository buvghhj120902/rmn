<?php
session_start();
error_reporting(0);
include 'config.php';

// if(isset($_SESSION['username'])){
// 	header('Location: welcom.php');
// }

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $sql = "SELECT * FROM users WHERE email ='$email' AND password ='$password'";
    $result = mysqli_query($conn,$sql);

    if($result->num_rows > 0){

        $row = mysqli_fetch_assoc($result);
        
        $_SESSION['username'] = $row['username'];
        header("Location: welcom.php");

    }else{
        echo "<script>alert('Email hoặc mật khẩu sai')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style1.css">

    <title>Đăng Nhập Form</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">

            <p class="login-text" style="font-size: 2rem; font-weight: 800;">ĐĂNG NHẬP</p>

            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Mật khẩu" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>

            <div class="input-group">
                <button name="submit" class="btn">Đăng nhập</button>
            </div>

            <p class="login-register-text">Chưa có tài khoản đăng ký<a href="signup.php"> tại đây</a>.</p>

        </form>
    </div>
</body>

</html>
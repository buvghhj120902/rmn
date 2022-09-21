<?php
include 'config.php';

error_reporting(0);
// session_start();

// if(isset($_SESSION['username'])){
// 	header('Location: index.php');
// }


if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {

        $sql = "SELECT * FROM users WHERE email='$email' ";
        $result = mysqli_query($conn, $sql);

        
        if (!$result->num_rows > 0) {

            $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            

            if ($result) {

                echo "<script>alert('Chúc mừng bạn đã đăng ký thành công')</script>";

                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                
            } else {
                echo "<script>alert('Có gì đó sai sai')</script>";
            }

 
        } else {
            echo "<script>alert('Email này đã được đăng ký')</script>";
        }

    } else {
        echo "<script>alert('Nhập lại mật khẩu không đúng')</script>";
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

    <title>ĐĂNG KÝ Form</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">

            <p class="login-text" style="font-size: 2rem; font-weight: 800;">ĐĂNG KÝ</p>

            <div class="input-group">
                <input type="text" placeholder="Họ và tên" name="username" value="<?php echo $username; ?>" required>
            </div>

            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Mật khẩu" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Nhập lại mật khẩu" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>

            <div class="input-group">
                <button name="submit" class="btn">ĐĂNG KÝ</button>
            </div>

            <p class="login-register-text">Đã có tài khoản đăng nhập<a href="index.php"> ở đây</a>.</p>

        </form>
    </div>
</body>

</html>
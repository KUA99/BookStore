<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/26c40a9c2a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/loginstyle.css">
</head>
<body>
    <?php include './php/connectdb.php';
        $error = false;
        if (isset($_GET['action']) && $_GET['action'] == 'reg') {
            if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
                $account = $_POST['account'];
                $password = $_POST['password'];
                $password2 = $_POST['password2'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                if ($password === $password2) {
                    $sql = "INSERT INTO taikhoan VALUES ('$account', '$password')";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        echo "Đăng ký thành công";
                        echo "<a href='./login.php'>Đăng Nhập Ngay</a>";
                    } else {
                        echo "Đăng ký không thành công";
                        echo "<a href='./registration.php'>Trở lại</a>";
                    }
                }else {
                    echo "Đăng ký không thành công";
                    echo "<a href='./registration.php'>Trở lại</a>";
                }

            }
        } else {
    ?>
    <header>
        <div class="header__logo">
            <img src="./assets/img/104844_3763419_558039_image.png" alt="Logo">
        </div>
    </header>
    <div class="container">
        <div class="content">
            <h1>Đăng ký</h1>
            <form action="./registration.php?action=reg" method="POST">
                <label for="name">Họ Tên</label>
                <input type="text" name="username" placeholder="Nhập họ và tên của bạn">
                <label for="user">Tên tài khoản</label>
                <input type="text" name="account" placeholder="Nhập tên tài khoản">
                <label for="pass">Mật khẩu</label>
                <input type="password" name="password" placeholder="Nhập mật khẩu">
                <label for="pass2">Nhập lại mật khẩu</label>
                <input type="password" name="password2" placeholder="Nhập lại mật khẩu">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Nhập email">
                <label for="phone">Số điện thoại</label>
                <input type="number" name="phone" placeholder="Nhập số điện thoại">
                <input type="submit" value="Đăng Ký">
            </form>
            <a href="./login.php">Đã có tài khoản ? Đăng nhập ngay !</a>
        </div>
    </div>
    <?php } ?>
</body>
</html>
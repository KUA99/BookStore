
<?php include '../php/connectdb.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/26c40a9c2a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/adminstyle.css">
</head>
<body>
<header>
    <div class="header-left">
        <div class="header-logo">
            <img src="../assets/img/administrator-logo-png-6.png" alt="">
            <h2><span>Admin</span>Page</h2>
        </div>
    </div>
    <div class="header-right">
        <div class="header-search">
            <input type="text" placeholder="Tìm kiếm">
            <i class="fas fa-search"></i>
        </div>
        <div class="header-user">
            <i class="far fa-user"></i>
            <h2>Admin</h2>
        </div>
    </div>
</header>
<div class="content">
    <div class="content-left">
        <ul class="menu">
            <li class="menu-item"><a href="../admin.php"><i class="fas fa-book"></i><span class="item1">Sản phẩm</span></a></li>
            <li class="menu-item"><a href="../account.php"><i class="fas fa-user"></i><span class="item1">Tài khoản</span></a></li>
            <li class="menu-item"><a href="../bill.html"><i class="fas fa-wallet"></i><span> Đơn hàng</span></a></li>
            <li class="menu-item"><a href="../customer.php"><i class="fas fa-user-friends fa-sm"></i><span>Khách hàng</span></a></li>
            <li class="menu-item"><a href="../comment.php"><i class="fas fa-comments"></i><span>Bình luận</span></a></li>
            <li class="menu-item"><a href="../company.php"><i class="fas fa-building"></i><span>Nhà xuất bản</span></a></li>
            <li class="menu-item"><a href="../actor.php"><i class="fas fa-pen"></i><span>Tác giả</span></a></li>
            <li class="menu-item"><a href="../type.php"><i class="fas fa-book-open"></i><span>Loại sản phẩm</span></a></li>

        </ul>
    </div>
    <div class="content-right">
        <div class="content-product">
            <div class="product-title-add">
                <h2>Sửa tài khoản </h2>
                <div class="btn-add">
                    <a href="../admin.php">Trang chủ</a>
                </div>
            </div>

            <?php
                if (isset($_GET['action']) && $_GET['action']=='add') {
                    $tentk = $_POST['tentk'];
                    $mk = $_POST['matkhau'];
                    $id3 = $_GET['id2'];
                    $sql3 = "UPDATE taikhoan SET matkhau=$mk WHERE tentk='$id3'";
                    $result3 = mysqli_query($con, $sql3);

                    if ($result3) {
                        echo 'Sua tai khoan thanh cong';
                    }else {
                        echo 'Sua tai khoan khong thanh cong';
                    }
                    mysqli_close($con);
                }

                else {

            ?>


            <div class="add-book">
                <?php
                $id = $_GET['id'];

                $sql4 = "SELECT * FROM taikhoan WHERE tentk='$id'";
                $result4 = mysqli_query($con, $sql4);
                while ($row4 = mysqli_fetch_array($result4)) {

                ?>
                <form action="../update/upaccount.php?action=add&id2=<?=$id?>" method="POST" enctype="multipart/form-data">
                    <div class="add-detail">
                        <label for="">Tên Tài Khoản: </label>
                        <input type="text" name="tentk" value="<?=$row4['tentk']?>" style="margin-left: 4.7rem">
                    </div>
                    <div class="add-detail">
                        <label for="">Mật Khẩu: </label>
                        <input type="text" name="matkhau" value="<?=$row4['matkhau']?>">
                    </div>
                    <div class="add-detail">
                        <input type="submit" value="Sửa Tài Khoản">
                    </div>
                </form>
                <?php }?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
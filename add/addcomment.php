
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
                <h2>Thêm bình luận</h2>
                <div class="btn-add">
                    <a href="../admin.php">Trang chủ</a>
                </div>
            </div>

            <?php
            if (isset($_GET['action']) && $_GET['action']=='add') {
                $mabl = $_POST['mabl'];
                $chitietbl = $_POST['bl'];
                $tenkh = $_POST['tenkh'];
                $tensach = $_POST['tensach'];

                $sql3 = "INSERT INTO binhluan VALUES ('$mabl', '$tenkh', '$tensach', '$chitietbl')";
                $result3 = mysqli_query($con, $sql3);
                if ($result3) {
                    echo 'Them binh luan thanh cong';
                }else {
                    echo 'Them binh luan khong thanh cong';
                }
                mysqli_close($con);
            }

            ?>


            <div class="add-book">
                <form action="../add/addcomment.php?action=add" method="POST" enctype="multipart/form-data">
                    <div class="add-detail">
                        <label for="">Mã Bình Luận: </label>
                        <input type="text" name="mabl" id="" style="margin-left: 7.7rem">
                    </div>
                    <div class="add-detail">
                        <label for="">Bình Luận: </label>
                        <textarea name="bl" style="margin-left: 10.2rem;width: 40rem;height: 6rem;outline-color: #009efb;"></textarea>
                    </div>
                    <div class="add-detail">
                        <label for="">Tên Tài Khoản: </label>
                        <select name="tenkh" id="" style="margin-left: 7rem;">
                            <?php
                            $sql1 = "SELECT * FROM khachhang";
                            $result1 = mysqli_query($con, $sql1);
                            while ($row1 = mysqli_fetch_array($result1)) {
                                ?>
                                <option value="<?=$row1['makh']?>"><?=$row1['tentk']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="add-detail">
                        <label for="">Tên Sách: </label>
                        <select name="tensach" id="" style="margin-left: 10.5rem;">
                            <?php
                            $sql1 = "SELECT * FROM sach";
                            $result1 = mysqli_query($con, $sql1);
                            while ($row1 = mysqli_fetch_array($result1)) {
                                ?>
                                <option value="<?=$row1['masach']?>"><?=$row1['tensach']?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="add-detail">
                        <input type="submit" value="Thêm Bình Luận">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
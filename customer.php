
<?php include './php/connectdb.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/26c40a9c2a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/adminstyle.css">
</head>
<body>
<header>
    <div class="header-left">
        <div class="header-logo">
            <img src="./assets/img/administrator-logo-png-6.png" alt="">
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
            <li class="menu-item"><a href="./admin.php"><i class="fas fa-book"></i><span class="item1">Sản phẩm</span></a></li>
            <li class="menu-item"><a href="./account.php"><i class="fas fa-user"></i><span class="item1">Tài khoản</span></a></li>
            <li class="menu-item"><a href="./bill.html"><i class="fas fa-wallet"></i><span> Đơn hàng</span></a></li>
            <li class="menu-item"><a href="./customer.php"><i class="fas fa-user-friends fa-sm"></i><span>Khách hàng</span></a></li>
            <li class="menu-item"><a href="./comment.php"><i class="fas fa-comments"></i><span>Bình luận</span></a></li>
            <li class="menu-item"><a href="./company.php"><i class="fas fa-building"></i><span>Nhà xuất bản</span></a></li>
            <li class="menu-item"><a href="./actor.php"><i class="fas fa-pen"></i><span>Tác giả</span></a></li>
            <li class="menu-item"><a href="./type.php"><i class="fas fa-book-open"></i><span>Loại sản phẩm</span></a></li>

        </ul>
    </div>
    <div class="content-right">
        <div class="content-product">
            <div class="product-title-add">
                <h2>Danh sách khách hàng</h2>
                <div class="btn-add">
                    <a href="./add/adcustomer.php">Thêm khách hàng</a>
                </div>
            </div>
            <table>
                <tr>
                    <th>Mã Khách Hàng</th>
                    <th style="width:18rem;">Tên Khách Hàng</th>
                    <th>Tên Tài Khoản</th>
                    <th>Email</th>
                    <th>Số Điện Thoại</th>
                    <th>Lựa Chọn</th>

                </tr>
                <?php
                $sql = "SELECT * FROM khachhang,taikhoan WHERE khachhang.tentk=taikhoan.tentk";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?=$row['makh']?></td>
                        <td><?=$row['tenkh']?></td>
                        <td><?=$row['tentk']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['sdt']?></td>
                        <td class="option">
                            <a href="./update/upcustomer.php?id=<?=$row['makh']?>">Sửa</a>
                            <a href="./delete/deletecustomer.php?id=<?=$row['makh']?>">Xoá</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>
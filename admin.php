
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
                    <h2>Danh sách sản phẩm</h2>
                    <div class="btn-add">
                        <a href="./addbook.php">Thêm sản phẩm</a>
                    </div>
                </div>
                <table>
                    <tr>
                        <th style="width:18rem;">Tên Sách</th>
                        <th>Loại sách</th>
                        <th>Tác Giả</th>
                        <th>Nhà Xuất Bản</th>
                        <th>Khối Lượng</th>
                        <th>Số Trang</th>
                        <th>Hình Ảnh</th>
                        <th>Lựa Chọn</th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM sach,tacgia,loaisach,nxb WHERE sach.matg=tacgia.matg AND sach.maloai=loaisach.maloai AND sach.manxb=nxb.manxb AND sach.maloai=300";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?=$row['tensach']?></td>
                        <td><?=$row['tenloai']?></td>
                        <td><?=$row['tentg']?></td>
                        <td><?=$row['tennxb']?></td>
                        <td><?=$row['khoiluong']?></td>
                        <td><?=$row['sotrang']?></td>
                        <td class="image-product"><img src="./assets/img/kinhte/<?=$row['hinhanh']?>.jpg" style="
                            display:block;
                            width: 8rem;
                        "> </td>
                        <td class="option">
                            <a href="./updatebook.php?id=<?=$row['masach']?>">Sửa</a>
                            <a href="./deletebook.php?id=<?=$row['masach']?>">Xoá</a>
                        </td>
                    </tr>
                    <?php } ?>

                    <?php
                    $sql = "SELECT * FROM sach,tacgia,loaisach,nxb WHERE sach.matg=tacgia.matg AND sach.maloai=loaisach.maloai AND sach.manxb=nxb.manxb AND sach.maloai=302";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?=$row['tensach']?></td>
                            <td><?=$row['tenloai']?></td>
                            <td><?=$row['tentg']?></td>
                            <td><?=$row['tennxb']?></td>
                            <td><?=$row['khoiluong']?></td>
                            <td><?=$row['sotrang']?></td>
                            <td class="image-product"><img src="./assets/img/khoahoc/<?=$row['hinhanh']?>.jpg" style="
                            display:block;
                            width: 8rem;
                        "> </td>
                            <td class="option">
                                <a href="./updatebook.php?id=<?=$row['masach']?>">Sửa</a>
                                <a href="./deletebook.php?id=<?=$row['masach']?>">Xoá</a>
                            </td>
                        </tr>
                    <?php } ?>


                    <?php
                    $sql = "SELECT * FROM sach,tacgia,loaisach,nxb WHERE sach.matg=tacgia.matg AND sach.maloai=loaisach.maloai AND sach.manxb=nxb.manxb AND sach.maloai=303";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?=$row['tensach']?></td>
                            <td><?=$row['tenloai']?></td>
                            <td><?=$row['tentg']?></td>
                            <td><?=$row['tennxb']?></td>
                            <td><?=$row['khoiluong']?></td>
                            <td><?=$row['sotrang']?></td>
                            <td class="image-product"><img src="./assets/img/tamlytongiao/<?=$row['hinhanh']?>.jpg" style="
                            display:block;
                            width: 8rem;
                        "> </td>
                            <td class="option">
                                <a href="./updatebook.php?id=<?=$row['masach']?>">Sửa</a>
                                <a href="./deletebook.php?id=<?=$row['masach']?>">Xoá</a>
                            </td>
                        </tr>
                    <?php } ?>
                    
                </table>
            </div>
        </div>
    </div>
</body>
</html>
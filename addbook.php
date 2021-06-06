
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
                <h2>Thêm sản phẩm</h2>
                <div class="btn-add">
                    <a href="./admin.php">Trang chủ</a>
                </div>
            </div>

            <?php
                if (isset($_GET['action']) && $_GET['action']=='add') {
                    $loaisp = $_POST['loaisach'];
                    $nxb = $_POST['nxb'];
                    $tacgia = $_POST['tacgia'];
                    $hinhthuc = $_POST['hinhthuc'];
                    $masach = $_POST['masach'];
                    $tensach = $_POST['tensach'];
                    $khoiluong = $_POST['khoiluong'];
                    $sotrang = $_POST['sotrang'];
                    $gia = $_POST['gia'];
                    $image = $_FILES['image']['name'];
                    $target = "./assets/img/kinhte/".basename($image);
                    $sql3 = "INSERT INTO sach VALUES ('$masach', '$loaisp', '$nxb', '$tensach', '$khoiluong', '$sotrang', '$hinhthuc', '$image', '$tacgia', '$gia')";
                    $result3 = mysqli_query($con, $sql3);
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                        echo 'Them san pham thanh cong';
                    }else {
                        echo 'Them san pham khong thanh cong';
                    }
                    mysqli_close($con);
                }

            ?>





           <div class="add-book">
               <form action="./addbook.php?action=add" method="POST" enctype="multipart/form-data">
                    <div class="add-detail">
                        <label for="">Mã Sách: </label>
                        <input type="text" name="masach" id="">
                    </div>
                    <div class="add-detail">
                        <label for="">Tên Sách: </label>
                        <input type="text" name="tensach" id="">
                    </div>
                    <div class="add-detail">
                        <label for="">Khối Lượng: </label>
                        <input type="number" name="khoiluong" id="">
                    </div>
                    <div class="add-detail">
                        <label for="">Số Trang: </label>
                        <input type="number" name="sotrang" id="">
                    </div>
                    <div class="add-detail">
                        <label for="">Giá: </label>
                        <input type="number" name="gia" id="">
                    </div>
                    <div class="add-detail">
                        <label for="">Hình Ảnh: </label>
                        <input type="file" name="image">
                    </div>
                    <div class="add-detail">
                        <label for="">Hình Thức: </label>
                        <select name="hinhthuc" id="">
                            <option value="Bìa mềm">Bìa mềm</option>
                            <option value="Bìa cứng">Bìa cứng</option>
                        </select>
                    </div>
                    <div class="add-detail">
                        <label for="">Loại Sách: </label>
                        <select name="loaisach" id="">
                            <?php 
                                $sql = "SELECT * FROM loaisach";
                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?=$row['maloai']?>"><?=$row['tenloai']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="add-detail">
                        <label for="">Nhà Xuất Bản: </label>
                        <select name="nxb" id="">
                            <?php
                            $sql1 = "SELECT * FROM nxb";
                            $result1 = mysqli_query($con, $sql1);
                            while ($row1 = mysqli_fetch_array($result1)) {
                                ?>
                                <option value="<?=$row1['manxb']?>"><?=$row1['tennxb']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="add-detail">
                        <label for="">Tác Giả: </label>
                        <select name="tacgia" id="">
                            <?php
                            $sql2 = "SELECT * FROM tacgia";
                            $result2 = mysqli_query($con, $sql2);
                            while ($row2 = mysqli_fetch_array($result2)) {
                                ?>
                                <option value="<?=$row2['matg']?>"><?=$row2['tentg']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="add-detail">
                        <input type="submit" value="Thêm Sản Phẩm">
                    </div>
               </form>
           </div>
        </div>
    </div>
</div>
</body>
</html>
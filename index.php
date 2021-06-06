<?php include './php/connectdb.php';?>

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
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="app">
        <header class="header">
            <div class="header__contact grid flex">
                <div class="hc__infor ">
                    <a href="" class="hci__help padding_816">
                        <i class="far fa-question-circle margin_right8"></i>
                        <p class="hci__title">Bạn cần giúp đỡ ?</p>
                    </a>
                    <a href="" class="hci__phone padding_816">
                        <i class="fas fa-mobile-alt margin_right8"></i>
                        <p class="hci__title">1900123456</p>
                    </a>
                </div>
                <div class="hc__user">
                    <a href="" class="hcu__cart padding_816">
                        <i class="fas fa-shopping-cart margin_right8"></i>
                        <p class="hci__title">Giỏ hàng</p>
                    </a>
                    <a href="./login.html" class="hcu__account padding_816 hcu_submenu">
                        <i class="fas fa-user margin_right8"></i>
                        <p class="hci__title">Đăng Nhập/Đăng Ký</p>
                    </a>
                    <a href="" class="hcu__notify padding_816">
                        <i class="fas fa-bell margin_right8"></i>
                        <p class="hci__title">Thông Báo</p>
                    </a>
                </div>
            </div>
            <div class="header__content grid flex">
                <div class="hce__logo">
                    <img src="./assets/img/104844_3763419_558039_image.png">
                </div>
                <ul class="list_items">
                    <li class="item"><a href="">Trang Chủ</a></li>
                    <li class="item sub-menu"><a href="">Thể Loại</a>
                        <i class="fas fa-chevron-down"></i>
                        <ul class="sub-menu-type">
                            <li class="item-type"><a href="">Khoa Học</a></li>
                            <li class="item-type"><a href="">Kinh Tế</a></li>
                            <li class="item-type"><a href="">Chính Trị - Pháp Luật</a></li>
                            <li class="item-type"><a href="">Tâm Lý - Tôn Giáo</a></li>
                            <li class="item-type"><a href="">Truyện - Tiểu Thuyết</a></li>
                        </ul>
                    </li>
                    <li class="item"><a href="">Bảng Xếp Hạng</a></li>
                    <li class="item"><a href="">Thiếu Nhi</a></li>
                    <li class="item"><a href="">Mã Giảm Giá</a></li>
                </ul>
                <div class="hce__search">
                    <input type="text" placeholder="Tìm kiếm sản phẩm">
                    <div class="hces__logo">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="grid">
                <div class="grid__row">
                    <div class="hot-product col col-3">
                        <div class="hp__title">
                            <h2>Nổi Bật Trong Ngày</h2>
                        </div>
                        <div class="hp__product">
                            <?php $sql = "SELECT a.tensach, a.gia, a.hinhanh, b.tentg 
                                            FROM sach as a, tacgia as b WHERE masach=1 AND a.matg=b.matg";
                            $result = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="hpp_img">
                                <a href="">
                                    <img src="./assets/img/truyentieuthuyet/<?=$row['hinhanh']?>.jpg">
                                </a>
                            </div>
                            <div class="hpp_detail">
                                <p><?=$row['tensach']?></p>
                                <p><?=$row['tentg']?></p>
                                <p><?=number_format($row['gia'])?></p>
                            </div>
                            <?php } ?>
                        </div>
                    </div>    
                    <div class="slider col col-9">
                        <!-- slide item -->
                        <div class="slide-item fade">
                            <img src="./assets/img/banner/banner.jpg">
                        </div>
                        <div class="slide-item fade">
                            <img src="./assets/img/banner/banner1.jpg">
                        </div>
                        <div class="slide-item fade">
                            <img src="./assets/img/banner/banner2.jpg">
                        </div>
                        <div class="slide-item fade">
                            <img src="./assets/img/banner/banner3.png">
                        </div>
                        <!-- next,pre button -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>
                <div class="content">
                    <div class="content__title grid__row">
                        <div class=" col col-12">
                            <h2>Khoa Học</h2>
                        </div>
                    </div>
                    <div class="content__products grid__row">
                        <?php $sql1 = "SELECT a.tensach, a.masach, a.gia, a.hinhanh, b.tentg 
                                            FROM sach as a, tacgia as b WHERE maloai=302 AND a.matg=b.matg";
                        $result1 = mysqli_query($con, $sql1);
                        while ($row1 = mysqli_fetch_array($result1)) {
                        ?>
                        <div class="product__item col col-24 white_bg">
                            <a href="./detail.php?id=<?=$row1['masach']?>">
                                <img src="./assets/img/khoahoc/<?=$row1['hinhanh']?>.jpg">
                                <p><?=$row1['tensach']?></p>
                                <p><?=$row1['tentg']?></p>
                                <p><?=number_format($row1['gia'])?></p>
                            </a>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <div class="content">
                    <div class="content__title grid__row">
                        <div class=" col col-12">
                            <h2>Chính Trị - Pháp Luật</h2>
                        </div>
                    </div>
                    <div class="content__products grid__row">
                        <?php $sql2 = "SELECT a.tensach, a.masach, a.gia, a.hinhanh, b.tentg 
                                            FROM sach as a, tacgia as b WHERE maloai=301 AND a.matg=b.matg";
                        $result2 = mysqli_query($con, $sql2);
                        while ($row2 = mysqli_fetch_array($result2)) {
                            ?>
                            <div class="product__item col col-24 white_bg">
                                <a href="./detail.php?id=<?=$row2['masach']?>">
                                    <img src="./assets/img/chinhtriphapluat/<?=$row2['hinhanh']?>.jpg">
                                    <p><?=$row2['tensach']?></p>
                                    <p><?=$row2['tentg']?></p>
                                    <p><?=number_format($row2['gia'])?></p>
                                </a>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <div class="content">
                    <div class="content__title grid__row">
                        <div class=" col col-12">
                            <h2>Kinh Tế</h2>
                        </div>
                    </div>
                    <div class="content__products grid__row">
                        <?php $sql3 = "SELECT a.tensach, a.masach, a.gia, a.hinhanh, b.tentg 
                                            FROM sach as a, tacgia as b WHERE maloai=300 AND a.matg=b.matg";
                        $result3 = mysqli_query($con, $sql3);
                        while ($row3 = mysqli_fetch_array($result3)) {
                            ?>
                            <div class="product__item col col-24 white_bg">
                                <a href="./detail.php?id=<?=$row3['masach']?>">
                                    <img src="./assets/img/kinhte/<?=$row3['hinhanh']?>.jpg">
                                    <p><?=$row3['tensach']?></p>
                                    <p><?=$row3['tentg']?></p>
                                    <p><?=number_format($row3['gia'])?></p>
                                </a>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <div class="content">
                    <div class="content__title grid__row">
                        <div class=" col col-12">
                            <h2>Tâm Lý - Tôn Giáo</h2>
                        </div>
                    </div>
                    <div class="content__products grid__row">
                        <?php $sql4 = "SELECT a.tensach, a.masach, a.gia, a.hinhanh, b.tentg 
                                            FROM sach as a, tacgia as b WHERE maloai=303 AND a.matg=b.matg";
                        $result4 = mysqli_query($con, $sql4);
                        while ($row4 = mysqli_fetch_array($result4)) {
                            ?>
                            <div class="product__item col col-24 white_bg">
                                <a href="./detail.php?id=<?=$row4['masach']?>">
                                    <img src="./assets/img/tamlytongiao/<?=$row4['hinhanh']?>.jpg">
                                    <p><?=$row4['tensach']?></p>
                                    <p><?=$row4['tentg']?></p>
                                    <p><?=number_format($row4['gia'])?></p>
                                </a>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <div class="content">
                    <div class="content__title grid__row">
                        <div class=" col col-12">
                            <h2>Thiếu Nhi</h2>
                        </div>
                    </div>
                    <div class="content__products grid__row">
                        <?php $sql5 = "SELECT a.tensach, a.masach, a.gia, a.hinhanh, b.tentg 
                                            FROM sach as a, tacgia as b WHERE maloai=304 AND a.matg=b.matg";
                        $result5 = mysqli_query($con, $sql5);
                        while ($row5 = mysqli_fetch_array($result5)) {
                            ?>
                            <div class="product__item col col-24 white_bg">
                                <a href="./detail.php?id=<?=$row5['masach']?>">
                                    <img src="./assets/img/thieunhi/<?=$row5['hinhanh']?>.jpg">
                                    <p><?=$row5['tensach']?></p>
                                    <p><?=$row5['tentg']?></p>
                                    <p><?=number_format($row5['gia'])?></p>
                                </a>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <div class="content">
                    <div class="content__title grid__row">
                        <div class=" col col-12">
                            <h2>Truyện - Tiểu Thuyết</h2>
                        </div>
                    </div>
                    <div class="content__products grid__row">
                        <?php $sql6 = "SELECT a.tensach, a.masach, a.gia, a.hinhanh, b.tentg 
                                            FROM sach as a, tacgia as b WHERE maloai=305 AND a.matg=b.matg";
                        $result6 = mysqli_query($con, $sql6);
                        while ($row6 = mysqli_fetch_array($result6)) {
                            ?>
                            <div class="product__item col col-24 white_bg">
                                <a href="./detail.php?id=<?=$row6['masach']?>">
                                    <img src="./assets/img/truyentieuthuyet/<?=$row6['hinhanh']?>.jpg">
                                    <p><?=$row6['tensach']?></p>
                                    <p><?=$row6['tentg']?></p>
                                    <p><?=number_format($row6['gia'])?></p>
                                </a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="grid">
                <div class="grid__row white_bg">
                    <div class="footer__content col col-4">
                        <a href="./index.html">
                            <img src="./assets/img/104844_3763419_558039_image.png">
                        </a>
                        <address>17 Nguyễn Văn Cừ, Phường Cái Khế, Quận Ninh Kiều, Thành Phố Cần Thơ</address>
                        <p>Nhận đặt hàng trực tuyến và giao hàng tận nơi. Không hỗ trợ đặt mua và nhận hàng trực tiếp 
                            tại văn phòng.</p>
                        <ul class="social-icon flex">
                            <li class="social-item">
                                <a href="">
                                    <i class="fab fa-instagram-square"></i>
                                </a>
                            </li>
                            <li class="social-item">
                                <a href="">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                            </li>
                            <li class="social-item">
                                <a href="">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li class="social-item">
                                <a href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="social-item">
                                <a href="">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>  
                    </div>
                    <div class="col col-8">
                        <div class="grid__row">
                            <div class="col-4 col">
                                <div class="footer__title">
                                    <h2>DỊCH VỤ</h2>
                                </div>
                                <div class="footer__lists">
                                    <ul class="footerl__item">
                                        <li class="footeri__detail">
                                            <a href="">Điều khoản sử dụng</a>
                                        </li>
                                        <li class="footeri__detail">
                                            <a href="">Chính sách bảo mật</a>
                                        </li>
                                        <li class="footeri__detail">
                                            <a href="">Giới thiệu cửa hàng</a>
                                        </li>
                                        <li class="footeri__detail">
                                            <a href="">Hệ thống cửa hàng</a>
                                        </li>    
                                    </ul>
                                </div>
                            </div>
                            <div class="col-4 col">
                                <div class="footer__title">
                                    <h2>HỖ TRỢ</h2>
                                </div>
                                <div class="footer__lists">
                                    <ul class="footerl__item">
                                        <li class="footeri__detail">
                                            <a href="">Chính sách đổi - trả - hoàn tiền</a>
                                        </li>
                                        <li class="footeri__detail">
                                            <a href="">Chính sách khách sỉ</a>
                                        </li>
                                        <li class="footeri__detail">
                                            <a href="">Phương thức vận chuyển</a>
                                        </li>
                                        <li class="footeri__detail">
                                            <a href="">Phương thức thanh toán và xuất HĐ</a>
                                        </li>    
                                    </ul>
                                </div>
                            </div>
                            <div class="col-4 col">
                                <div class="footer__title">
                                    <h2>TÀI KHOẢN CỦA TÔI</h2>
                                </div>
                                <div class="footer__lists">
                                    <ul class="footerl__item">
                                        <li class="footeri__detail">
                                            <a href="">Đăng nhập/Tạo mới tài khoản</a>
                                        </li>
                                        <li class="footeri__detail">
                                            <a href="">Thay đổi địa chỉ khách hàng</a>
                                        </li>
                                        <li class="footeri__detail">
                                            <a href="">Chi tiết tài khoản</a>
                                        </li>
                                        <li class="footeri__detail">
                                            <a href="">Lịch sử mua hàng</a>
                                        </li>    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        var slideIndex = 1;
        var timer = null;
        showSlides(slideIndex);

        function plusSlides(n) {
        clearTimeout(timer);
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        clearTimeout(timer);
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slide-item");
            
            if (n==undefined){n = ++slideIndex}
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            
            slides[slideIndex-1].style.display = "block";
            
            timer = setTimeout(showSlides, 2000);
        } 
    </script>
</body>
</html>
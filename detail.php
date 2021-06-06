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
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/detailstyle.css">
</head>
<body>
    <div class="app-detail">
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
        <div class="detail-content">
            <div class="grid">
                <?php $sql = "SELECT * FROM sach, tacgia, loaisach, nxb WHERE sach.manxb=nxb.manxb AND sach.matg=tacgia.matg AND sach.maloai=loaisach.maloai AND masach=".$_GET['id'];
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="grid__row white_bg">
                    <div class="detail-img col col-4">
                        <img src="./assets/img/kinhte/<?=$row['hinhanh']?>.jpg">
                    </div>
                    <div class="detail-info col col-8">
                        <h1><?=$row['tensach']?></h1>
                        <div class="detail-info-one">
                            <div class="detail-infobook">
                                <span>Thể loại: </span>
                                <span><?=$row['tenloai']?></span>
                            </div>
                            <div class="detail-infobook">
                                <span>Tác giả: </span>
                                <span><?=$row['tentg']?></span>
                            </div>
                        </div>       
                        <div class="detail-info-one">
                            <div class="detail-infobook">
                                <span>Nhà xuất bản: </span>
                                <span><?=$row['tennxb']?></span>
                            </div>
                            <div class="detail-infobook">
                                <span>Hình thức bìa: </span>
                                <span><?=$row['hinhthuc']?></span>
                            </div>
                        </div>
                        <div class="detail-price">
                            <span><?=number_format($row['gia'])?></span>
                        </div>
                        <div class="detail-delivery">
                            <div class="detail-deli-time">
                                <span>Thời gian giao hàng: </span>
                                <span>Địa điểm giao hàng</span>
                            </div>
                            <div class="detail-deli-policy">
                                <span>Chính sách đổi trả: </span>
                                <span>Đổi trả sản phẩm trong 30 ngày</span>
                            </div>
                        </div>
                        <div class="detail-number">
                            <span>Số lượng: </span>
                            <input type="text" value="1">
                        </div>
                        <div class="detail-addcard">
                            <button type="submit" name="add-to-card">Thêm vào giỏ hàng</button>
                        </div>
                    </div>

                </div>
                <div class="detail-intro white_bg">
                    <div class="intro-title">
                        <div class="title-tag">
                            <h3>Thông tin sản phẩm</h3>
                        </div>
                        <div class="title-tag">
                            <h3>Giới thiệu sản phẩm</h3>
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="intro-info">
                        <table class="info-table">
                            <tr>
                                <th>Mã hàng</th>
                                <td><?=$row['masach']?></td>
                            </tr>
                            <tr>
                                <th>Nhà xuất bản</th>
                                <td><?=$row['tennxb']?></td>
                            </tr>
                            <tr>
                                <th>Tác giả</th>
                                <td><?=$row['tentg']?></td>
                            </tr>
                            <tr>
                                <th>Trọng lượng(gr)</th>
                                <td><?=$row['khoiluong']?></td>
                            </tr>
                            <tr>
                                <th>Số trang</th>
                                <td><?=$row['sotrang']?></td>
                            </tr>
                            <tr>
                                <th>Hình thức</th>
                                <td><?=$row['hinhthuc']?></td>
                            </tr> 
                        </table>
                        <div class="info-text">
                            <p><?=$row['tensach']?></p>
                            <p>
                                Câu chuyện này xoay quanh gặp gỡ và chia ly giữa hai người trẻ tuyệt vọng
                                . Cô tuyệt vọng vì sắp chết. Cậu tuyệt vọng vì phải sống tiếp.
                            </p>
                        </div>
                    </div>
                </div>
                <?php }?>
                <div class="product-relate white_bg">
                    <div class="relate-title">
                        <h2>Sản Phẩm liên quan</h2>
                    </div>
                    <div class="relate-list grid__row">
                        <?php $sql2 = "SELECT * FROM sach, tacgia WHERE sach.matg=tacgia.matg AND maloai=300";
                        $result2 = mysqli_query($con, $sql2);
                        while ($row2 = mysqli_fetch_array($result2)) {
                        ?>
                        <div class="relate-item col col-3">
                            <img src="./assets/img/kinhte/<?=$row2['hinhanh']?>.jpg" alt="">
                            <h2><?=$row2['tensach']?></h2>
                            <span><?=number_format($row2['gia'])?></span>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="product-comment white_bg">
                    <div class="comment-title">
                        <h2>khách hàng nhận xét</h2>
                    </div>
                    <div class="add-comment">
                        <form action="">
                            <input type="text" name="comment">
                            <input type="submit" value="Gửi bình luận">
                        </form>
                    </div>
                    <div class="comment-detail">
                        <ul class="comment-list">
                            <?php
                                $id = $_GET['id'];
                                $sql9 = "SELECT * FROM binhluan,khachhang WHERE binhluan.makh=khachhang.makh AND masach=$id";

                                $result9 = mysqli_query($con, $sql9);
                                while ($row9 = mysqli_fetch_array($result9)) {
                            ?>
                            <li class="comment-item">
                                <h2><?=$row9['tenkh']?></h2>

                                <p><?=$row9['chitietbl']?></p>

                            </li>
                            <?php } ?>
                        </ul>
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
</body>
</html>
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
    <link rel="stylesheet" href="./assets/css/cardstyle.css">
</head>
<body>

        <style>

            .cart__content th, td {
                text-align:center;
            }

            .card__product img {
                width:100%;
            }
            .cart__content tr {
                margin-bottom: 2rem;
            }

            .btn-cart {
                background-color: orange;
                color: #fff;
                font-size: 1.6rem;
                padding: 1.4rem;
                font-weight: bold;
                border: none;
                cursor: pointer;
            }

        </style>

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
    <div class="content grid">
        <h1 class="card__title">Thông Tin Giỏ Hàng:</h1>
        <div class="grid__row white_bg">
            <form action="">
                <table class="cart__content">
                    <tr class="cart__header">
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Loại bỏ</th>
                    </tr>
                    <tr class="card__product">
                        <td style="width: 13rem;">Kinh Tế Trung Quốc</td>
                        <td style="width: 13rem;"> <img src="./assets/img/kinhte/kinhte2.jpg" alt=""> </td>
                        <td><?=number_format(170000)?></td>
                        <td>2</td>
                        <td>340,000</td>
                        <td>xoá</td>
                    </tr>
                    <tr class="card__product">
                        <td>Tâm Lý Học Về Tiền</td>
                        <td><img src="./assets/img/tamlytongiao/tamli2.jpg" alt=""></td>
                        <td><?=number_format(175000)?></td>
                        <td>1</td>
                        <td>175,000</td>
                        <td>xoá</td>
                    </tr>
                    <tr class="card__product">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="color: red;">Tổng tiền:</td>
                        <td>515,000</td>
                        <td></td>
                    </tr>
                    <tr class="card__product">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="btn-cart">Đặt Hàng</button></td>
                    </tr>

                </table>

            </form>

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
</body>

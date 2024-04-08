<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE php>
<php lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web đặt phòng khách sạn</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <a href="./booking.php" class="bk-btn">Đặt Ngay</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Trang Chủ</a></li>
                <li><a href="./rooms.php">Phòng</a></li>
                <li><a href="./about-us.php">Về Chúng Tôi</a></li>
                <li><a href="./blog.php">Tin Tức</a></li>
                <li><a href="./blog-details.php">Chi Tiết Blog</a></li>
                <li><a href="./contact.php">Liên Hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href="https://twitter.com/?lang=vi" target="_blank"><i class="fa fa-twitter"></i></a>
			<a href="https://www.tripadvisor.com.vn/" target="_blank"><i class="fa fa-tripadvisor"></i></a>
			<a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (84) 999 99999</li>
            <li><i class="fa fa-envelope"></i> nguyentrunglam_t65@hus.edu.vn</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> (84) 999 99999</li>
                            <li><i class="fa fa-envelope"></i> phunganhtuan_t65@hus.edu.vn</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/?lang=vi" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.tripadvisor.com.vn/" target="_blank"><i class="fa fa-tripadvisor"></i></a>
                                <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="./booking.php" class="bk-btn">Đặt Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="./index.php">Trang Chủ</a></li>
                                    <li><a href="./rooms.php">Phòng</a></li>
                                    <li><a href="./about-us.php">Về Chúng Tôi</a></li>
                                    <li><a href="./blog.php">Tin Tức</a></li>
                                    <li><a href="./blog-details.php">Chi Tiết Blog</a></li>
                                    <li><a href="./contact.php">Liên Hệ</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right ">
                                <h5 >Xin chào, <?=$_SESSION['fname']?></h5>
                                <a href="logout.php" class="btn btn-warning">
                                    Đăng Xuất
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Về Chúng Tôi</h2>
                        <div class="bt-option">
                            <a href="./index.php">Trang Chủ</a>
                            <span>Về Chúng Tôi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- About Us Page Section Begin -->
    <section class="aboutus-page-section spad">
        <div class="container">
            <div class="about-page-text">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ap-title">
                            <h2>Chào Mừng Bạn Đến Với Web đặt phòng khách sạn.</h2>
                            <p>Phát triển để tạo tiện ích cho người dùng cũng như khách sạn.
							   Giúp người dùng dễ dàng đặt phòng và sử dụng.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <ul class="ap-services">
                            <li><i class="icon_check"></i> Giảm giá 20% cho Chỗ Ở.</li>
                            <li><i class="icon_check"></i> Bữa Sáng Hàng Ngày Miễn Phí</li>
                            <li><i class="icon_check"></i> 3 Bộ Đồ Giặt Mỗi Ngày</li>
                            <li><i class="icon_check"></i> Wifi Miễn Phí.</li>
                            <li><i class="icon_check"></i> Giảm giá 20% cho Thức Ăn & Đồ Uống</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="about-page-services">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p1.jpg">
                            <div class="api-text">
                                <h3>Dịch Vụ Nhà Hàng</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p2.jpg">
                            <div class="api-text">
                                <h3>Du Lịch & Cắm Trại</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p3.jpg">
                            <div class="api-text">
                                <h3>Sự Kiện & Tiệc</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Page Section End -->

    <!-- Video Section Begin -->
    <section class="video-section set-bg" data-setbg="img/video-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>Khám Phá Khách Sạn & Dịch Vụ Của Chúng Tôi.</h2>
                        <p>Đó Là Mùa Bão Nhưng Chúng Tôi Đang Ghé Thăm Đảo Cô Tô</p>
                        <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup"><img
                                src="img/play.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Bộ Sưu Tập Của Chúng Tôi</span>
                        <h2>Khám Phá Công Việc Của Chúng Tôi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery-item set-bg" data-setbg="img/gallery/gallery-1.jpg">
                        <div class="gi-text">
                            <h3>Phòng Sang Trọng</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="gallery-item set-bg" data-setbg="img/gallery/gallery-3.jpg">
                                <div class="gi-text">
                                    <h3>Phòng Đôi</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="gallery-item set-bg" data-setbg="img/gallery/gallery-4.jpg">
                                <div class="gi-text">
                                    <h3>Phòng King</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-item large-item set-bg" data-setbg="img/gallery/gallery-2.jpg">
                        <div class="gi-text">
                            <h3>Phòng Gia Đình</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Footer Section Begin -->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-text">
				<div class="row">
					<div class="col-lg-4">
						<div class="ft-about">
							<div class="logo">
								<a href="#">
									<img src="img/footer-logo.png" alt="">
								</a>
							</div>
							<p>Chúng tôi truyền cảm hứng và đạt được hàng triệu du khách<br /> trên 90 trang web địa phương</p>
							<div class="fa-social">
								<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/?lang=vi" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.tripadvisor.com.vn/" target="_blank"><i class="fa fa-tripadvisor"></i></a>
                                <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
								<a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 offset-lg-1">
						<div class="ft-contact">
							<h6>Liên Hệ</h6>
							<ul>
								<li>(84) 999 99999</li>
								<li>chulong_t65@hus.edu.vn</li>
								<li>Hà Nội, Việt Nam</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 offset-lg-1">
						<div class="ft-newslatter">
							<h6>Tin Mới Nhất</h6>
							<p>Nhận thông tin và ưu đãi mới nhất.</p>
							<form action="#" class="fn-form">
								<input type="text" placeholder="Email">
								<button type="submit"><i class="fa fa-send"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-option">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<ul>
							<li><a href="#">Liên Hệ</a></li>
							<li><a href="#">Điều khoản sử dụng</a></li>
							<li><a href="#">Quyền riêng tư</a></li>
							<li><a href="#">Chính sách môi trường</a></li>
						</ul>
					</div>
					<div class="col-lg-5">
						<div class="co-text"><p><!-- Không thể xóa liên kết trở lại Colorlib. Template được cấp phép theo CC BY 3.0. -->
	  Bản quyền &copy;<script>document.write(new Date().getFullYear());</script> Tất cả các quyền đã được đăng ký | Template này được tạo ra với <i class="fa fa-heart" aria-hidden="true"></i> bởi <a href="https://colorlib.com" target="_blank">Colorlib</a>
	  <!-- Không thể xóa liên kết trở lại Colorlib. Template được cấp phép theo CC BY 3.0. --></p></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Section End -->

	<!-- Search model Begin -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch"><i class="icon_close"></i></div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Tìm kiếm ở đây.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->

	<!-- Js Plugins -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>
</php>
<?php } else {
    header("Location: login.php");
    exit;
} ?>

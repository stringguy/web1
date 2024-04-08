<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE php>
<php lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

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
    <!-- Phần Preloder Trang -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Phần Menu Offcanvas Bắt Đầu -->
	<div class="offcanvas-menu-overlay"></div>
	<div class="canvas-open">
		<i class="icon_menu"></i>
	</div>
	<div class="offcanvas-menu-wrapper">
		<div class="canvas-close">
			<i class="icon_close"></i>
		</div>
		<div class="search-icon search-switch">
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
	<!-- Phần Menu Offcanvas Kết Thúc -->

	<!-- Phần Header Bắt Đầu -->
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
							<div class="nav-right">
								<h5>Xin chào, <?=$_SESSION['fname']?></h5>
								<a href="logout.php" class="btn btn-warning">Đăng Xuất</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Phần Header Kết Thúc -->

	<!-- Phần Hero Bắt Đầu -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="hero-text">
						<h1>Web đặt phòng khách sạn</h1>
						<p>Dưới đây là những trang phòng khách sạn tốt nhất, bao gồm gợi ý cho du lịch quốc tế
							và để tìm phòng khách sạn giá rẻ.</p>
						<a href="./rooms.php" class="primary-btn">Khám Phá Ngay</a>
					</div>
				</div>
			</div>
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg"></div>
		</div>
	</section>
	<!-- Phần Hero Kết Thúc -->

	<!-- Phần Giới Thiệu Bắt Đầu -->
	<section class="aboutus-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about-text">
						<div class="section-title">
							<span>Về Chúng Tôi</span>
							<h2>Intercontinental LA <br />Westlake Hotel</h2>
						</div>
						<p class="f-para">Web đặt phòng khách sạn là một trang web đặt phòng trực tuyến.</p>
						<p class="s-para">Vì vậy, khi bạn muốn đặt phòng khách sạn hoàn hảo, chúng tôi có mọi thứ bạn
							cần: từ khách sạn, chỗ ở nghỉ dưỡng, căn hộ, nhà nghỉ đến nhà trên cây.</p>
						<a href="./about-us.php" class="primary-btn about-btn">Đọc Thêm</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-pic">
						<div class="row">
							<div class="col-sm-6">
								<img src="img/about/about-1.jpg" alt="">
							</div>
							<div class="col-sm-6">
								<img src="img/about/about-2.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Phần Giới Thiệu Kết Thúc -->

    <!-- Phần Kết Thúc Dịch Vụ -->
	<section class="services-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<span>Chúng Tôi Cung Cấp</span>
						<h2>Khám Phá Dịch Vụ Của Chúng Tôi</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="service-item">
						<i class="flaticon-036-parking"></i>
						<h4>Chế Độ Du Lịch</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="service-item">
						<i class="flaticon-033-dinner"></i>
						<h4>Dịch Vụ Ăn Uống</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="service-item">
						<i class="flaticon-026-bed"></i>
						<h4>Trông Trẻ</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="service-item">
						<i class="flaticon-024-towel"></i>
						<h4>Giặt Ủi</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="service-item">
						<i class="flaticon-044-clock-1"></i>
						<h4>Thuê Tài Xế</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="service-item">
						<i class="flaticon-012-cocktail"></i>
						<h4>Bar & Đồ Uống</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Phần Kết Thúc Dịch Vụ -->

    <!-- Phần Bắt Đầu Phòng Chính Trang Chủ -->
	<section class="hp-room-section">
		<div class="container-fluid">
			<div class="hp-room-items">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="hp-room-item set-bg" data-setbg="img/room/room-b1.jpg">
							<div class="hr-text">
								<h3>Phòng Đôi</h3>
								<h2>1.500.000 đồng<span>/Đêm</span></h2>
								<table>
									<tbody>
										<tr>
											<td class="r-o">Diện Tích:</td>
											<td>30 ft</td>
										</tr>
										<tr>
											<td class="r-o">Sức Chứa:</td>
											<td>Tối Đa 5 Người</td>
										</tr>
										<tr>
											<td class="r-o">Giường:</td>
											<td>Giường King</td>
										</tr>
										<tr>
											<td class="r-o">Dịch Vụ:</td>
											<td>Wifi, Truyền Hình, Phòng Tắm,...</td>
										</tr>
									</tbody>
								</table>
								<a href="./doubleroom.php" class="primary-btn">Chi Tiết Thêm</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="hp-room-item set-bg" data-setbg="img/room/room-b2.jpg">
							<div class="hr-text">
								<h3>Phòng Deluxe</h3>
								<h2>2.000.000 đồng<span>/Đêm</span></h2>
								<table>
									<tbody>
										<tr>
											<td class="r-o">Diện Tích:</td>
											<td>30 ft</td>
										</tr>
										<tr>
											<td class="r-o">Sức Chứa:</td>
											<td>Tối Đa 5 Người</td>
										</tr>
										<tr>
											<td class="r-o">Giường:</td>
											<td>Giường King</td>
										</tr>
										<tr>
											<td class="r-o">Dịch Vụ:</td>
											<td>Wifi, Truyền Hình, Phòng Tắm,...</td>
										</tr>
									</tbody>
								</table>
								<a href="./deluxroom.php" class="primary-btn">Chi Tiết Thêm</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="hp-room-item set-bg" data-setbg="img/room/room-b3.jpg">
							<div class="hr-text">
								<h3>Phòng King</h3>
								<h2>2.500.000 đồng<span>/Đêm</span></h2>
								<table>
									<tbody>
										<tr>
											<td class="r-o">Diện Tích:</td>
											<td>30 ft</td>
										</tr>
										<tr>
											<td class="r-o">Sức Chứa:</td>
											<td>Tối Đa 5 Người</td>
										</tr>
										<tr>
											<td class="r-o">Giường:</td>
											<td>Giường King</td>
										</tr>
										<tr>
											<td class="r-o">Dịch Vụ:</td>
											<td>Wifi, Truyền Hình, Phòng Tắm,...</td>
										</tr>
									</tbody>
								</table>
								<a href="./premiumkingroom.php" class="primary-btn">Chi Tiết Thêm</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="hp-room-item set-bg" data-setbg="img/room/room-b4.jpg">
							<div class="hr-text">
								<h3>Phòng Gia Đình</h3>
								<h2>3.000.000 đồng<span>/Đêm</span></h2>
								<table>
									<tbody>
										<tr>
											<td class="r-o">Diện Tích:</td>
											<td>30 ft</td>
										</tr>
										<tr>
											<td class="r-o">Sức Chứa:</td>
											<td>Tối Đa 5 Người</td>
										</tr>
										<tr>
											<td class="r-o">Giường:</td>
											<td>Giường King</td>
										</tr>
										<tr>
											<td class="r-o">Dịch Vụ:</td>
											<td>Wifi, Truyền Hình, Phòng Tắm,...</td>
										</tr>
									</tbody>
								</table>
								<a href="./familyroom.php" class="primary-btn">Chi Tiết Thêm</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Phần Kết Thúc Phòng Chính Trang Chủ -->

    <!-- Bắt đầu Phần Phản hồi -->
	<section class="testimonial-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<span>Phản hồi</span>
						<h2>Khách hàng nói gì?</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="testimonial-slider owl-carousel">
						<div class="ts-item">
							<p>Sau khi dự án xây dựng kéo dài hơn dự kiến, chồng tôi, con gái và tôi cần một nơi ở trong vài đêm. Là người dân Chicago, chúng tôi hiểu rõ về thành phố, khu vực và các lựa chọn nhà ở có sẵn và chúng tôi thực sự thích kỳ nghỉ của mình tại Sona Hotel.</p>
							<div class="ti-author">
								<div class="rating">
									<i class="icon_star"></i>
									<i class="icon_star"></i>
									<i class="icon_star"></i>
									<i class="icon_star"></i>
									<i class="icon_star-half_alt"></i>
								</div>
								<h5> - Alexander Vasquez</h5>
							</div>
							<img src="img/testimonial-logo.png" alt="">
						</div>
						<div class="ts-item">
							<p>Sau khi dự án xây dựng kéo dài hơn dự kiến, chồng tôi, con gái và tôi cần một nơi ở trong vài đêm. Là người dân Chicago, chúng tôi hiểu rõ về thành phố, khu vực và các lựa chọn nhà ở có sẵn và chúng tôi thực sự thích kỳ nghỉ của mình tại Sona Hotel.</p>
							<div class="ti-author">
								<div class="rating">
									<i class="icon_star"></i>
									<i class="icon_star"></i>
									<i class="icon_star"></i>
									<i class="icon_star"></i>
									<i class="icon_star-half_alt"></i>
								</div>
								<h5> - Alexander Vasquez</h5>
							</div>
							<img src="img/testimonial-logo.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Kết thúc Phần Phản hồi -->

	<!-- Bắt đầu Phần Blog -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<span>Tin tức Khách sạn</span>
						<h2>Blog & Sự kiện của chúng tôi</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="blog-item set-bg" data-setbg="img/blog/blog-1.jpg">
						<div class="bi-text">
							<span class="b-tag">Du lịch</span>
							<h4><a href="#">Tremblant ở Canada</a></h4>
							<div class="b-time"><i class="icon_clock_alt"></i> 15 tháng 4, 2019</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="blog-item set-bg" data-setbg="img/blog/blog-2.jpg">
						<div class="bi-text">
							<span class="b-tag">Cắm trại</span>
							<h4><a href="#">Chọn Một Caravan Tĩnh</a></h4>
							<div class="b-time"><i class="icon_clock_alt"></i> 15 tháng 4, 2019</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="blog-item set-bg" data-setbg="img/blog/blog-3.jpg">
						<div class="bi-text">
							<span class="b-tag">Sự kiện</span>
							<h4><a href="#">Copper Canyon</a></h4>
							<div class="b-time"><i class="icon_clock_alt"></i> 21 tháng 4, 2019</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="blog-item small-size set-bg" data-setbg="img/blog/blog-wide.jpg">
						<div class="bi-text">
							<span class="b-tag">Sự kiện</span>
							<h4><a href="#">Chuyến đi đến Iqaluit ở Nunavut - Một thành phố Bắc Cực của Canada</a></h4>
							<div class="b-time"><i class="icon_clock_alt"></i> 08 tháng 4, 2019</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="blog-item small-size set-bg" data-setbg="img/blog/blog-10.jpg">
						<div class="bi-text">
							<span class="b-tag">Du lịch</span>
							<h4><a href="#">Du lịch đến Barcelona</a></h4>
							<div class="b-time"><i class="icon_clock_alt"></i> 12 tháng 4, 2019</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Kết thúc Phần Blog -->

    <!-- Bắt đầu Phần Footer -->
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
							<p>Chúng tôi truyền cảm hứng và đạt được hàng triệu du khách<br /> qua 90 trang web địa phương</p>
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
							<h6>Liên hệ</h6>
							<ul>
								<li>(84) 999 99999</li>
								<li>chulong_t65@hus.edu.vn</li>
								<li>Hà Nội, Việt Nam</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 offset-lg-1">
						<div class="ft-newslatter">
							<h6>Tin tức mới nhất</h6>
							<p>Nhận những cập nhật và ưu đãi mới nhất.</p>
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
							<li><a href="#">Liên hệ</a></li>
							<li><a href="#">Điều khoản sử dụng</a></li>
							<li><a href="#">Quyền riêng tư</a></li>
							<li><a href="#">Chính sách môi trường</a></li>
						</ul>
					</div>
					<div class="col-lg-5">
						<div class="co-text">
							<p><!-- Bản quyền &copy;<script>document.write(new Date().getFullYear());</script> Tất cả các quyền được bảo lưu | Mẫu này được tạo ra với <i class="fa fa-heart" aria-hidden="true"></i> bởi <a href="https://colorlib.com" target="_blank">Colorlib</a> --></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Kết thúc Phần Footer -->

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
<?php }else {
	header("Location: login.php");
	exit;
} ?>
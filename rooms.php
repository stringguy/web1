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
    <title>Rooms</title>

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
    <!-- Phần Hiệu Ứng Trước Trang -->
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
								<h5 >Xin chào, <?=$_SESSION['fname']?></h5>
								<a href="logout.php" class="btn btn-warning">Đăng Xuất</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Phần Header Kết Thúc -->

	<!-- Phần Breadcrumb Bắt Đầu -->
	<div class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-text">
						<h2>Các Phòng Của Chúng Tôi</h2>
						<div class="bt-option">
							<a href="./index.php">Trang Chủ</a>
							<span>Phòng</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Phần Breadcrumb Kết Thúc -->

	<!-- Phần Các Phòng Bắt Đầu -->
	<section class="rooms-section spad">
		<div class="container">
			<div class="row">
				<!-- Thông Tin Phòng 1 -->
				<div class="col-lg-4 col-md-6">
					<div class="room-item">
						<img src="img/room/room-1.jpg" alt="">
						<div class="ri-text">
							<h4>Phòng King Cao Cấp</h4>
							<h3>2.500.000 đồng<span>/Đêm</span></h3>
							<table>
								<tbody>
									<tr>
										<td class="r-o">Diện Tích:</td>
										<td>30 ft</td>
									</tr>
									<tr>
										<td class="r-o">Sức Chứa:</td>
										<td>Tối Đa 3 Người</td>
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

				<!-- Thông Tin Phòng 2 -->
				<div class="col-lg-4 col-md-6">
					<div class="room-item">
						<img src="img/room/room-2.jpg" alt="">
						<div class="ri-text">
							<h4>Phòng Deluxe</h4>
							<h3>2.000.000 đồng<span>/Đêm</span></h3>
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

				<!-- Thông Tin Phòng 3 -->
				<div class="col-lg-4 col-md-6">
					<div class="room-item">
						<img src="img/room/room-3.jpg" alt="">
						<div class="ri-text">
							<h4>Phòng Đôi</h4>
							<h3>1.500.000 đồng<span>/Đêm</span></h3>
							<table>
								<tbody>
									<tr>
										<td class="r-o">Diện Tích:</td>
										<td>30 ft</td>
									</tr>
									<tr>
										<td class="r-o">Sức Chứa:</td>
										<td>Tối Đa 2 Người</td>
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

				<!-- Thông Tin Phòng 4 -->
				<div class="col-lg-4 col-md-6">
					<div class="room-item">
						<img src="img/room/room-4.jpg" alt="">
						<div class="ri-text">
							<h4>Phòng Gia Đình</h4>
							<h3>3.000.000 đồng<span>/Đêm</span></h3>
							<table>
								<tbody>
									<tr>
										<td class="r-o">Diện Tích:</td>
										<td>30 ft</td>
									</tr>
									<tr>
										<td class="r-o">Sức Chứa:</td>
										<td>Tối Đa 1 Người</td>
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
	</section>
	<!-- Phần Các Phòng Kết Thúc -->

    <!-- Phần Footer Bắt đầu -->
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
							<p>Chúng tôi truyền cảm hứng và kết nối hàng triệu du khách<br /> trên 90 trang web địa phương</p>
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
							<h6>Tin mới nhất</h6>
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
						<div class="co-text"><p><!-- Liên kết về Colorlib không thể bỏ. Mẫu này được cấp phép theo CC BY 3.0. -->
	  Bản quyền &copy;<script>document.write(new Date().getFullYear());</script> Đã đăng ký bản quyền | Mẫu này được tạo bởi <i class="fa fa-heart" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank">Colorlib</a>
	  <!-- Liên kết về Colorlib không thể bỏ. Mẫu này được cấp phép theo CC BY 3.0. --></p></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Phần Footer Kết thúc -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
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
<?php }else {
	header("Location: login.php");
	exit;
} ?>
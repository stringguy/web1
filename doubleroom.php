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
    <title>Double Room</title>

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
    <!-- Tiền đề trang -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Phần Menu Offcanvas -->
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
	<!-- Kết thúc phần Menu Offcanvas -->

	<!-- Phần Header -->
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
								<a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a>
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
	<!-- Kết thúc phần Header -->

	<!-- Phần Breadcrumb -->
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
	<!-- Kết thúc phần Breadcrumb -->

	<!-- Phần Chi Tiết Phòng -->
	<section class="room-details-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="room-details-item">
						<img src="img/room/room-1.jpg" alt="">
						<div class="rd-text">
							<div class="rd-title">
								<h3>Phòng King Cao Cấp</h3>
								<div class="rdt-right">
									<div class="rating">
										<i class="icon_star"></i>
										<i class="icon_star"></i>
										<i class="icon_star"></i>
										<i class="icon_star"></i>
										<i class="icon_star-half_alt"></i>
									</div>
									<a href="./booking.php">Đặt Ngay</a>
								</div>
							</div>
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
							<p class="f-para">Xe máy hoặc xe đậu có đó là câu hỏi cho bạn. Dưới đây là một số ưu
								điểm và nhược điểm của cả hai, để bạn có thể tự tin khi mua một chiếc xe RV. Khi so
								sánh các loại xe RV, có nên mua xe máy hay xe kéo, bạn nên mua xe máy hay
								xe kéo? Ưu và nhược điểm của cả hai được nghiên cứu để bạn có thể lựa chọn
								một cách khôn ngoan khi mua một chiếc xe RV. Sở hữu một chiếc xe máy hoặc
								xe kéo là một thành tựu trong đời. Nó có thể tương tự như du lịch với ngôi nhà
								của bạn khi bạn khám phá các địa điểm khác nhau của đất nước chúng ta, Mỹ.</p>
							<p>Hai lớp xe giải trí phổ biến được biết đến là xe máy và xe kéo.
								Xe máy di động hoặc xe máy chở trailer có sự thu hút của việc được kéo bởi một
								xe bán tải hoặc ô tô, do đó mang lại sự linh hoạt của việc có phương tiện di chuyển
								khi bạn đỗ tại khu cắm trại của mình.</p>
						</div>
					</div>
					<div class="rd-reviews">
						<h4>Đánh Giá</h4>
						<div class="review-item">
							<div class="ri-pic">
								<img src="img/room/avatar/avatar-1.jpg" alt="">
							</div>
							<div class="ri-text">
								<span>27 Tháng 8, 2019</span>
								<div class="rating">
									<i class="icon_star"></i>
									<i class="icon_star"></i>
									<i class="icon_star"></i>
									<i class="icon_star"></i>
									<i class="icon_star-half_alt"></i>
								</div>
								<h5>Brandon Kelley</h5>
								<p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
									adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
									magnam.</p>
							</div>
						</div>
						<div class="review-item">
							<div class="ri-pic">
								<img src="img/room/avatar/avatar-2.jpg" alt="">
							</div>
							<div class="ri-text">
								<span>27 Tháng 8, 2019</span>
								<div class="rating">
									<i class="icon_star"></i>
									<i class="icon_star"></i>
									<i class="icon_star"></i>
									<i class="icon_star"></i>
									<i class="icon_star-half_alt"></i>
								</div>
								<h5>Brandon Kelley</h5>
								<p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
									adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
									magnam.</p>
							</div>
						</div>
					</div>
					<div class="review-add">
						<h4>Thêm Đánh Giá</h4>
						<form action="#" class="ra-form">
							<div class="row">
								<div class="col-lg-6">
									<input type="text" placeholder="Họ Tên*">
								</div>
								<div class="col-lg-6">
									<input type="text" placeholder="Email*">
								</div>
								<div class="col-lg-12">
									<div>
										<h5>Đánh Giá của Bạn:</h5>
										<div class="rating">
											<i class="icon_star"></i>
											<i class="icon_star"></i>
											<i class="icon_star"></i>
											<i class="icon_star"></i>
											<i class="icon_star-half_alt"></i>
										</div>
									</div>
									<textarea placeholder="Đánh Giá của Bạn"></textarea>
									<button type="submit">Gửi Ngay</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Kết thúc phần Chi Tiết Phòng -->

    <!-- Phần Footer -->
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
							<p>Chúng tôi truyền cảm hứng và kết nối với hàng triệu du khách<br /> qua 90 trang web địa phương</p>
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
				<div classrow">
					<div class="col-lg-7">
						<ul>
							<li><a href="#">Liên Hệ</a></li>
							<li><a href="#">Điều Khoản Sử Dụng</a></li>
							<li><a href="#">Quyền Riêng Tư</a></li>
							<li><a href="#">Chính Sách Môi Trường</a></li>
						</ul>
					</div>
					<div class="col-lg-5">
						<div class="co-text">
							<p><!-- Liên kết về Colorlib không thể bị xóa. Template được cấp phép theo CC BY 3.0. -->
								Bản quyền &copy;<script>document.write(new Date().getFullYear());</script> Đã đăng ký Bản quyền | Template này được tạo ra với <i class="fa fa-heart" aria-hidden="true"></i> bởi <a href="https://colorlib.com" target="_blank">Colorlib</a>
								<!-- Liên kết về Colorlib không thể bị xóa. Template được cấp phép theo CC BY 3.0. -->
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Kết thúc phần Footer -->

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
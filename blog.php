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
    <title>Contact</title>

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
				<li class="active"><a href="./index.php">Trang chủ</a></li>
				<li><a href="./rooms.php">Phòng</a></li>
				<li><a href="./about-us.php">Về chúng tôi</a></li>
				<li><a href="./blog.php">Tin tức</a></li>
				<li><a href="./blog-details.php">Chi tiết blog</a></li>
				<li><a href="./contact.php">Liên hệ</a></li>
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
									<li class="active"><a href="./index.php">Trang chủ</a></li>
									<li><a href="./rooms.php">Phòng</a></li>
									<li><a href="./about-us.php">Về chúng tôi</a></li>
									<li><a href="./blog.php">Tin tức</a></li>
									<li><a href="./blog-details.php">Chi tiết blog</a></li>
									<li><a href="./contact.php">Liên hệ</a></li>
								</ul>
							</nav>
							<div class="nav-right ">
								<h5 >Xin chào, <?=$_SESSION['fname']?></h5>
								<a href="logout.php" class="btn btn-warning">
									Đăng xuất
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->

	<!-- Contact Section Begin -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="contact-text">
						<h2>Thông Tin Liên Hệ</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
						<table>
							<tbody>
								<tr>
									<td class="c-o">Địa chỉ:</td>
									<td>Hà Nội, Việt Nam</td>
								</tr>
								<tr>
									<td class="c-o">Điện thoại:</td>
									<td>(84) 999 99999</td>
								</tr>
								<tr>
									<td class="c-o">Email:</td>
									<td>chulong_t65@hus.edu.vn</td>
								</tr>
								<tr>
									<td class="c-o">Fax:</td>
									<td>+(84) 999 99999</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-lg-7 offset-lg-1">
					<form action="#" class="contact-form">
						<div class="row">
							<div class="col-lg-6">
								<input type="text" placeholder="Họ và Tên">
							</div>
							<div class="col-lg-6">
								<input type="text" placeholder="Email của bạn">
							</div>
							<div class="col-lg-12">
								<textarea placeholder="Nội dung"></textarea>
								<button type="submit">Gửi Ngay</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.0606825994123!2d-72.8735845851828!3d40.760690042573295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e85b24c9274c91%3A0xf310d41b791bcb71!2sWilliam%20Floyd%20Pkwy%2C%20Mastic%20Beach%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1578582744646!5m2!1sen!2sbd"
					height="470" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div>
	</section>
	<!-- Contact Section End -->

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
								<li>(12) 345 67890</li>
								<li>info.colorlib@gmail.com</li>
								<li>856 Cordia Extension Apt. 356, Lake, United State</li>
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
						<div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Bản quyền &copy;<script>document.write(new Date().getFullYear());</script> Đã đăng ký. | Mẫu này được tạo bởi <i class="fa fa-heart" aria-hidden="true"></i> bởi <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
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
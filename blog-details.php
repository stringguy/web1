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
    <title>Blog</title>

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

<!-- Trang trang trước -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Phần Menu ngoài khung (Offcanvas) -->
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
            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/?lang=vi"><i class="fa fa-twitter"></i></a>
            <a href="https://www.tripadvisor.com.vn/"><i class="fa fa-tripadvisor"></i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (84) 999 99999</li>
            <li><i class="fa fa-envelope"></i> nguyentrunglam_t65@hus.edu.vn</li>
        </ul>
    </div>
    <!-- Phần Menu ngoài khung Kết thúc -->

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
                                    Đăng Xuất
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Kết thúc -->
    <!-- Phần Hero Chi tiết Blog -->
    <section class="blog-details-hero set-bg" data-setbg="img/blog/blog-details/blog-details-hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="bd-hero-text">
                        <span>Du lịch và Cắm trại</span>
                        <h2>Cảnh báo Sức khỏe của CDC Đối với Người du lịch Đến Hoa Kỳ Từ Hon</h2>
                        <ul>
                            <li class="b-time"><i class="icon_clock_alt"></i> 15 tháng 4, 2019</li>
                            <li><i class="icon_profile"></i> Kerry Jones</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kết thúc Phần Hero Chi tiết Blog -->

    <!-- Phần Chi tiết Blog -->
    <section class="blog-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="blog-details-text">
                        <div class="bd-title">
                            <p>Bạn nghĩ về cuộc phiêu lưu du lịch nước ngoài? Bạn đã nghĩ đến những địa điểm tốt nhất
                                để đến khi nói đến cuộc phiêu lưu du lịch nước ngoài chưa? Nepal là một trong những
                                địa điểm phổ biến nhất, khi bạn ghé thăm đất nước kỳ diệu này, bạn sẽ có những cuộc
                                phiêu lưu tốt nhất ngay tại cửa hàng của mình. Chỉ có du lịch phiêu lưu nước ngoài ở
                                Nepal mới mang lại những cơ hội như vậy, vì vậy nếu điều này chưa nằm trong danh sách
                                địa điểm du lịch có thể thăm của bạn, bây giờ là lúc để thêm nó vào đó!</p>
                            <p>Ở Nepal, hành trình du lịch nước ngoài của bạn sẽ rất hấp dẫn. Bạn sẽ được thấy
                                dãy núi Himalaya và trải nghiệm tất cả những gì văn hóa Nepal giàu có có để cung cấp.
                                Họ là những người tuyệt vời có thể duy trì văn hóa và niềm tin của họ lâu hơn so với
                                hầu hết các quốc gia khác. Khi du lịch phiêu lưu nước ngoài đưa bạn đến Nepal, bạn
                                sẽ có cơ hội thấy tất cả những hồ và rừng tuyệt vời và bạn thậm chí có thể dành ngày
                                hoặc tuần trại dưới rừng với một hướng dẫn chuyên nghiệp. Và các thác nước ở Nepal
                                đẹp đến không thể tin được, bạn sẽ không bao giờ thấy điều gì đẹp hơn trong cuộc sống
                                của mình như thác nước của họ! Điều này chắc chắn phải nằm ở đầu danh sách địa điểm
                                du lịch phiêu lưu nước ngoài của bạn!</p>
                        </div>
                        <div class="bd-pic">
                            <div class="bp-item">
                                <img src="img/blog/blog-details/blog-details-1.jpg" alt="">
                            </div>
                            <div class="bp-item">
                                <img src="img/blog/blog-details/blog-details-2.jpg" alt="">
                            </div>
                            <div class="bp-item">
                                <img src="img/blog/blog-details/blog-details-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <h4>Nếu bạn sống ở New York City</h4>
                                <p>Bạn biết tất cả về giao thông ở đó. Đôi khi, việc đến các địa điểm là điều khá
                                    khó khăn, ngay cả với hàng triệu chiếc taxi màu vàng. Nếu bạn giống tôi, bạn thường
                                    xem những chiếc limousine sáng bóng với tài xế chưa có đồng phục và mong muốn mình
                                    có thể ngồi trong đó. Thôi thì, bạn có thể. Dịch vụ limousine New York giá rẻ hơn
                                    bạn nghĩ, cho dù đó là để đưa bạn đến sân bay Newark, sân bay LaGuardia, hoặc lái xe
                                    đến bất kỳ đâu bạn muốn.</p>
                            </div>
                            <div class="bm-item">
                                <h4>Mỗi khi tôi gọi taxi ở New York City</h4>
                                <p>Tôi hy vọng mình sẽ may mắn để có một chiếc taxi tốt và tài xế thực sự nói tiếng
                                    Anh. Tôi đã trải qua nhiều khoảnh khắc lo lắng, không biết liệu mình có đến đích hay
                                    không. Hoặc liệu mình sẽ bị lừa đảo không. Ngay cả khi mọi thứ diễn ra suôn sẻ,
                                    tôi không thể nói rằng tôi nhớ được nhiều chuyến đi taxi ở New York mà thực sự
                                    thoải mái. Và với giá của chúng ngày nay, việc chọn limousine trở nên có ý nghĩa
                                    hơn.</p>
                            </div>
                        </div>
                        <div class="tag-share">
                            <div class="tags">
                                <a href="#">Du lịch</a>
                                <a href="#">Cắm trại</a>
                                <a href="#">Sự kiện</a>
                            </div>
                            <div class="social-share">
                                <span>Chia sẻ:</span>
                                <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/?lang=vi" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.tripadvisor.com.vn/" target="_blank"><i class="fa fa-tripadvisor"></i></a>
                                <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
								<a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                        <div class="comment-option">
                            <h4>2 Bình luận</h4>
                            <div class="single-comment-item first-comment">
                                <div class="sc-author">
                                    <img src="img/blog/blog-details/avatar/avatar-1.jpg" alt="">
                                </div>
                                <div class="sc-text">
                                    <span>27 Tháng 8, 2019</span>
                                    <h5>Brandon Kelley</h5>
                                    <p>Không có ai thích làm bùn, nhưng đôi khi cần phải làm như vậy. Nói chung, tôi
                                        chưa bao giờ muốn lái taxi ở New York City nữa. Limousine thì khác.</p>
                                    <a href="#" class="comment-btn">Thích</a>
                                    <a href="#" class="comment-btn">Trả lời</a>
                                </div>
                            </div>
                            <div class="single-comment-item second-comment ">
                                <div class="sc-author">
                                    <img src="img/blog/blog-details/avatar/avatar-3.jpg" alt="">
                                </div>
                                <div class="sc-text">
                                    <span>27 Tháng 8, 2019</span>
									<h5>Brandon Kelley</h5>
									<p>Không có gì làm cho một người muốn sờ vào ai đó, người ta đôi khi phải làm vậy. Nói chung, tôi
										chưa bao giờ muốn lái taxi ở New York City nữa. Limousine thì khác.</p>
									<a href="#" class="comment-btn">Thích</a>
									<a href="#" class="comment-btn">Trả lời</a>
                                </div>
                            </div>
                        </div>
                        <div class="leave-comment">
                            <h4>Để lại Bình luận</h4>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Họ và tên">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <input type="text" placeholder="Website">
                                        <textarea placeholder="Nội dung"></textarea>
                                        <button type="submit" class="site-btn">Gửi Bình luận</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Phần Chi tiết Blog Kết thúc -->

    <!-- Phần Blog Đề xuất Bắt đầu -->
	<section class="recommend-blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Đề xuất</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="blog-item set-bg" data-setbg="img/blog/blog-1.jpg">
						<div class="bi-text">
							<span class="b-tag">Du lịch</span>
							<h4><a href="#">Bãi Biển Đà Nẵng</a></h4>
							<div class="b-time"><i class="icon_clock_alt"></i> 15 Tháng 4, 2019</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-item set-bg" data-setbg="img/blog/blog-2.jpg">
						<div class="bi-text">
							<span class="b-tag">Cắm trại</span>
							<h4><a href="#">Núi Ba Vì</a></h4>
							<div class="b-time"><i class="icon_clock_alt"></i> 15 Tháng 4, 2019</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-item set-bg" data-setbg="img/blog/blog-3.jpg">
						<div class="bi-text">
							<span class="b-tag">Sự kiện</span>
							<h4><a href="#">Copper Canyon</a></h4>
							<div class="b-time"><i class="icon_clock_alt"></i> 21 Tháng 4, 2019</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Phần Blog Đề xuất Kết thúc -->

	<!-- Phần Chân trang Bắt đầu -->
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
							<p>Chúng tôi truyền cảm hứng và tiếp cận hàng triệu du khách<br /> trên 90 trang web địa phương</p>
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
							<h6>Mới nhất</h6>
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
						<div class="co-text"><p><!-- Không thể xóa liên kết trở lại Colorlib. Bản mẫu được cấp phép theo CC BY 3.0. -->
	Bản quyền &copy;<script>document.write(new Date().getFullYear());</script> Đã đăng ký Bản quyền | Bản mẫu này được tạo với <i class="fa fa-heart" aria-hidden="true"></i> bởi <a href="https://colorlib.com" target="_blank">Colorlib</a>
	<!-- Không thể xóa liên kết trở lại Colorlib. Bản mẫu được cấp phép theo CC BY 3.0. --></p></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Phần Chân trang Kết thúc -->


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
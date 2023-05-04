<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ - KissCat</title>

	<!-- logo-icon  -->
	<link rel="icon" href="/images/logo-icon.png" type="image/gif" sizes="32x32">

	<!--slick slide css  -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

	<!-- css  -->
	<link rel="stylesheet" href="{{url('css/style.css')}}">
	<link rel="stylesheet" href="{{url('css/index.css')}}">

	<!-- css fontawesome  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<!-- script fontawesome  -->
	<script src="https://kit.fontawesome.com/6cea374d55.js" crossorigin="anonymous"></script>

	<!-- link bootstrap  -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->

	<!-- link swiper slider  -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</head>

<body>
	<div class="wrapper">
		<?php include("customerheader.php") ?>
		<main>
			<div class="slider">
				<div class="banner-list">
					<div class="banner-item">
						<img src="{{url('images/banner-1.png')}}" alt="">
					</div>
					<div class="banner-item">
						<img srcset="images/banner-2.png 2x" alt="">
					</div>
					<div class="banner-item">
						<img srcset="images/banner-3.png 2x" alt="">
					</div>
					<div class="banner-item">
						<img srcset="images/banner-4.png 2x" alt="">
					</div>
				</div>
			</div>
			<section class="info">
				<div class="container">
					<div class="info-container">
						<div class="info-img">
							<img src="/images/info-img.png" alt="">
						</div>
						<div class="info-content">
							<div class="info-img-inner">
								<img src="/images/info-img-inner.png" alt="">
							</div>
							<h1 class="info-heading">
								KissCat - Ghế ngồi ô tô trẻ em
							</h1>
							<p class="info-desc">
								Start-up <strong>Công Nghệ Giao Thông xanh</strong>, tiên phong sản xuất dòng xe đạp trợ
								lực điện “Made-in-Vietnam”. Hướng tới tầm nhìn thay thế 2 triệu xe động cơ đốt trong năm
								2030, Wiibike liên tục đổi mới, cải tiến công nghệ và hoàn thiện hệ sinh thái, lan tỏa
								văn hóa xe đạp rộng rãi.
							</p>
							<a class="button">Tìm hiểu thêm</a>
						</div>
					</div>
				</div>
			</section>
			<section class="category">
				<div class="container">
					<div class="category-container">
						<div class="category-heading">
							<h1>Vì sao chọn ghế ngồi ô tô trẻ em KissCat?</h1>
						</div>
						<div class="category-content">
							<div class="category-desc">
								<div class="category-box-list">
									<div class="category-box-item">
										<div class="category-item-text">
											<h2 class="item-text-heading">Năng lượng xanh</h2>
											<p class="item-text-desc">Lithium-ion thân thiện môi trường, an toàn sức
												khỏe. Có thể tái chế đến 95%.</p>
										</div>
										<div class="category-item-img">
											<img src="/images/category-item-img.png" alt="">
										</div>
									</div>
									<div class="category-box-item">
										<div class="category-item-text">
											<h2 class="item-text-heading">Trợ lực thông minh</h2>
											<p class="item-text-desc">Công nghệ trợ lực thiết kế tối ưu với giao thông
												và thói quen người dùng Việt Nam.</p>
										</div>
										<div class="category-item-img">
											<img src="/images/category-item-img.png" alt="">
										</div>
									</div>
									<div class="category-box-item">
										<div class="category-item-text">
											<h2 class="item-text-heading">Made in Vietnam</h2>
											<p class="item-text-desc">Start-up Việt, sản phẩm tỷ lệ nội địa hóa
												cao.</p>
										</div>
										<div class="category-item-img">
											<img src="/images/category-item-img.png" alt="">
										</div>
									</div>
									<div class="category-box-item">
										<div class="category-item-text">
											<h2 class="item-text-heading">Sống chất</h2>
											<p class="item-text-desc">Thời trang, lựa chọn khác biệt, sống chất & có GU.
											</p>
										</div>
										<div class="category-item-img">
											<img src="/images/category-item-img.png" alt="">
										</div>
									</div>
								</div>
								<div class="category-button">
									<a href="" class="button-reverse">Xem ghế</a>
								</div>
							</div>
							<div class="category-img">
								<img src="/images/category-img.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="product">
				<div class="container">
					<div class="product-container">
						<div class="product-item">
							<div class="product-img">
								<img src="/images/product-img.png" alt="">
							</div>
						</div>
						<div class="product-item">
							<div class="product-img">
								<img src="/images/product-img.png" alt="">
							</div>
						</div>
						<div class="product-item">
							<div class="product-content">
								<h1 class="product-heading">
									Ghế ngồi ô tô trẻ em
								</h1>
								<p class="product-desc">
									Là xe đạp được tích hợp bộ trợ lực điện thông minh. Xe có thể đạp thể thao như xe
									đạp
									thường, chạy điện hoặc vừa đạp vừa điện kết hợp để đi nhanh hơn.
								</p>
								<a class="button">Mua ngay</a>
							</div>
						</div>
					</div>

				</div>
			</section>
			<section class="video">
				<div class="container">
					<div class="video-container">
						<div class="box-reverse-content">
							<h1 class="box-reverse-heading">
								KissCat - Video
							</h1>
							<p class="box-reverse-desc">Bộ WiiBike Kit thông minh nâng cấp xe đạp thường thành xe đạp
								trợ lực
								điện. Nhẹ - Nhỏ gọn - An toàn, Wiibike Kit giúp chiếc xe đạp của bạn trở thành người bạn
								lý tưởng đồng hành trên nhiều cung đường dài.</p>
							<a class="button-reverse">Tìm hiểu</a>
						</div>
						<div class="video-youtube">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/8KI9Qqt4awk"
								title="YouTube video player" frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
								allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</section>
			<section class="service">
				<div class="container">
					<div class="service-container">
						<div class="service-big-block">
							<div class="service-item">
                                @if(isset($products[0]))
                                    <div class="service-item-img">
                                        <img style="width: 500px; height: 500px" src="{{URL::asset($products[0]->image)}}" alt="">
                                    </div>
                                    <div class="service-item-text">
                                        {{$products[0]->name}}
                                    </div>
                                @else
                                    <div class="service-item-img">
                                        <img style="width: 500px; height: 500px" src="/images/service-item-img.png" alt="">
                                    </div>
                                    <div class="service-item-text">
                                        Chưa có sản phẩm
                                    </div>
                                @endif
							</div>
						</div>
						<div class="service-block">
                            @for($i = 1; $i < 5; ++$i)
                                @if(isset($products[$i]))
                                    <div class="service-item">
                                        <div class="service-item-img">
                                            <img style="width: 230px; height: 230px" src="{{URL::asset($products[$i]->image)}}" alt="">
                                        </div>
                                        <div class="service-item-text">
                                            {{$products[$i]->name}}
                                        </div>
                                    </div>
                                @else
                                    <div class="service-item">
                                        <div class="service-item-img">
                                            <img style="width: 230px; height: 230px" src="/images/service-item-img.png" alt="">
                                        </div>
                                        <div class="service-item-text">
                                            Chưa có sản phẩm
                                        </div>
                                    </div>
                                @endif
                            @endfor
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer class="footer">
			<div class="container">
				<div class="footer-container">
					<div class="footer-column">
						<div class="footer-logo">
							<img src="/images/logo.png" alt="">
						</div>
						<p class="footer-company">
							Công ty Cổ phần Công nghệ Wiibike Việt Nam
						</p>
						<p class="footer-adress">
							Wiibike Center 1: 81 Nhật Chiêu, Tây Hồ, TP. Hà Nội
						</p>
						<p class="footer-adress">
							Văn Phòng: Tầng M3 Tòa nhà CT1, KĐT Mỹ Đình - Mễ Trì, P. Mỹ Đình 1, Q. Nam Từ Liêm, TP. Hà
							Nội
						</p>
						<div class="footer-contact">
							<a href="" class="contact-item">
								<i class="fas fa-phone contact-item-icon"></i>
								<span class="contact-item-text">0969 969 969</span>
							</a>
							<a href="" class="contact-item">
								<i class="fas fa-envelope contact-item-icon"></i>
								<span class="contact-item-text">Info@kisscat.com</span>
							</a>
						</div>
						<div class="footer-social">
							<a href="" class="social-item">
								<i class="fab fa-facebook-square"></i>
							</a>
							<a href="" class="social-item">
								<i class="fab fa-youtube"></i>
							</a>
							<a href="" class="social-item">
								<i class="fab fa-twitter"></i>
							</a>
						</div>
					</div>
					<div class="footer-column">
						<div class="footer-row">
							<div class="footer-heading">Chính sách</div>
							<ul class="footer-links">
								<li class="footer-item">
									<i class="fas fa-chevron-right footer-arrow-icon"></i>
									<a href="">Chính sách bảo hành - bảo dưỡng</a>
								</li>
								<li class="footer-item">
									<i class="fas fa-chevron-right footer-arrow-icon"></i>
									<a href="">Chính sách đổi trả</a>
								</li>
								<li class="footer-item">
									<i class="fas fa-chevron-right footer-arrow-icon"></i>
									<a href="">Chính sách vận chuyển</a>
								</li>
								<li class="footer-item">
									<i class="fas fa-chevron-right footer-arrow-icon"></i>
									<a href="">Chính sách bảo mật</a>
								</li>
								<li class="footer-item">
									<i class="fas fa-chevron-right footer-arrow-icon"></i>
									<a href="">Chính sách trả góp</a>
								</li>
								<li class="footer-item">
									<i class="fas fa-chevron-right footer-arrow-icon"></i>
									<a href="">Chính sách thanh toán</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="footer-column">
						<div class="footer-row">
							<div class="footer-heading">Tin tức</div>
							<ul class="footer-links">
								<li class="footer-item">
									<i class="fas fa-chevron-right footer-arrow-icon"></i>
									<a href="">Blog kiến thức</a>
								</li>
								<li class="footer-item">
									<i class="fas fa-chevron-right footer-arrow-icon"></i>
									<a href="">Tin mới nhất</a>
								</li>
							</ul>
						</div>
						<div class="footer-row">
							<div class="footer-heading">Hỗ trợ</div>
							<ul class="footer-links">
								<li class="footer-item">
									<i class="fas fa-chevron-right footer-arrow-icon"></i>
									<a href="">FAQ</a>
								</li>
								<li class="footer-item">
									<i class="fas fa-chevron-right footer-arrow-icon"></i>
									<a href="">Danh sách đại lý</a>
								</li>
								<li class="footer-item">
									<i class="fas fa-chevron-right footer-arrow-icon"></i>
									<a href="">Hướng dẫn sử dụng</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="footer-column">
						<div class="footer-iframe-facebook">
							<iframe
								src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDior&tabs=timeline&width=340&height=331&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=825283535029437"
								width="250" height="300" style="border:none;overflow:hidden" scrolling="no"
								frameborder="0" allowfullscreen="true"
								allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="{{url('script/app.js')}}"></script>
</body>

</html>
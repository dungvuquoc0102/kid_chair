<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- slide css  -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

	<!-- css  -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/newsDetail.css">

	<!-- css fontawesome  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<!-- script fontawesome  -->
	<script src="https://kit.fontawesome.com/6cea374d55.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
	<div class="wrapper">
	<?php include("customerheader.php") ?>
		<main>
			<section class="newsDetail">
				<div class="container">
					<div class="newsDetail">
						<div class="newsDetail-heading">
							<span style="font-weight: bold; font-size: 200%">{{$news->title}}</span>
						</div>
						<div class="newsDetail-content">
							<div class="newsDetail-content-left">
                                <div style="text-align: center; color: blue">
                                    <img style="width:500px; height: 500px" src="{{URL::asset($news->image)}}"/>
                                    <p>{{$news->summary}}</p>
                                </div>
                                <div class="content">
                                    {!!$news->content!!}
                                </div>
                            </div>
							<div class="newsDetail-content-right">
								<!--
								<div class="newsDetail-content-heading">
									Các chuyên mục bài viết
								</div>
								<select name="" id="">
									<option value="-1">Chọn chuyên mục</option>
									<option value="Tin tức">Tin tức</option>
									<option value="Tin mới nhất">Tin mới nhất</option>
									<option value="Blog">Blog</option>
								</select>
								-->
								<span class="newsDetail-title">
									Bài viết mới nhất
								</span>
								<ul>
                                    @foreach($hot_news as $h_ns)
                                        <li><a href="/NewsDetail/{{$h_ns->news_id}}">{{$h_ns->title}}</a></li>
                                    @endforeach
								</ul>
							</div>
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
							Công ty Cổ phần Công nghệ KissCat Việt Nam
						</p>
						<p class="footer-adress">
							KissCat Center 1: 81 Nhật Chiêu, Tây Hồ, TP. Hà Nội
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
	<script type="text/javascript" src="/script/app.js"></script>
</body>

</html>
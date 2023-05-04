<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- slide css  -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

	<!-- css fontawesome  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<!-- script fontawesome  -->
	<script src="https://kit.fontawesome.com/6cea374d55.js" crossorigin="anonymous"></script>

	<!-- link swiper slider  -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

	<!-- css  -->
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/category.css">
	
</head>

<body>
	<div class="wrapper">
	<?php include("customerheader.php") ?>
		<main>
			<section class="category">
				<div class="container">
					<div class="category-container">
						<div class="category-heading">
							<div class="category-heading-left">
								
								<div class="category-title">Ghế ngồi</div>
								<div class="category-desc">
									<a href=""> Trang chủ</a>
									<span> / </span>
									<a href=""> Sản phẩm</a>
									<span> / </span>
									<a href=""> Ghế ngồi</a>
								</div>
							
							</div>
							<div class="category-heading-right">
								<select class="category-select" name="news" id="category-news">
									<option <?php if(strcmp($orderBy, "product_id")==0) echo "selected" ?> value="product_id">Mới nhất</option>
									<option <?php if(strcmp($orderBy, "price")==0) echo "selected" ?> value="price">Giá từ cao đến thấp</option>
								</select>
							</div>
						</div>
						<div class="category-content">
							<div class="category-content-left">
								<p class="content-title">Danh mục sản phẩm</p>
								<ul class="content-title-list">
									@foreach($product_sub_categories as $product_sub_category)
										<li class="content-item">
											<a href="/ProductList/{{$product_sub_category->sub_category_id}}/{{$orderBy}}">
												{{$product_sub_category->name}}
											</a>
										</li>
									@endforeach
								</ul>
							</div>
							<div class="category-content-right">
								@foreach($products as $product)
									<a class="product-item" href="/ProductDetail/{{$product->product_id}}">
										<img src="{{URL::asset($product->image)}}" alt=""
											class="category-product-img" style="height: 300px">
										<div class="category-product-detail">
											<p class="category-product-name">{{$product->name}}</p>
											<div class="category-product-price"><span class="price-number"> {{$product->price}}
												</span><span class="price-unit">VNĐ</span></div>
										</div>
									</a>
								@endforeach
							</div>
						</div>
						<div class="m-2 d-flex justify-content-center">{{$products->links()}}</div>
					</div>
				</div>
			</section>
		</main>
		<footer class="footer">
			<div class="container">
				<div class="footer-container">
					<div class="footer-column">
						<div class="footer-logo">
							<img src="./images/logo.png" alt="">
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
	<script type="text/javascript" src="./script/app.js"></script>
	<script>
		$('#category-news').change(function(){
			let orderBy = $(this).val();
			window.location.href = "/ProductList/" + {{$sub_category_id}} + "/" + orderBy;
		});
	</script>
</body>

</html>
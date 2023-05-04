@extends('customer.Layout')

@section('title')	
	<title>Giới thiệu - KissCat</title>
@endsection

@section('link_css')
<link rel="stylesheet" href="{{url('css/intro.css')}}">
@endsection

@section('main_content')
<section class="intro">
	<div class="intro-bg"></div>
	<div class="intro-content">
		<div class="container">
			<div class="intro-cover">
				<h3>Về KissCat</h3>
				<p>Start-up Công Nghệ Giao Thông xanh, tiên phong sản xuất dòng xe đạp trợ lực điện
					“Made-in-Vietnam”. Hướng tới tầm nhìn thay thế 2 triệu xe động cơ đốt trong năm 2030,
					Wiibike liên tục đổi mới, cải tiến công nghệ và hoàn thiện hệ sinh thái, lan tỏa văn hóa
					xe đạp rộng rãi.</p>
			</div>
		</div>
	</div>
</section>
<section class="intro-desc">
	<div class="intro-desc-bg"></div>
	<div class="intro-desc-content">
		<div class="container">
			<div class="intro-desc-cover">
				<div class="box-cover">
					<a href="intro_2.html" class="box-img box-shadow-hover">
						<img src="images/intro_2/img-box-1.png" alt="">
						<h2>KissCat Việt Nam</h2>
					</a>
				</div>
				<div class="box-cover">
					<a href="intro_2.html" class="box-img box-shadow-hover">
						<img src="images/intro_2/img-box-2.png" alt="">
						<h2>Công nghệ</h2>
					</a>
				</div>
				<div class="box-cover">
					<a href="intro_2.html" class="box-img box-shadow-hover">
						<img src="images/intro_2/img-box-3.png" alt="">
						<h2>Danh sách đại lý</h2>
					</a>
				</div>
				<div class="box-cover">
					<a href="intro_2.html" class="box-img box-shadow-hover">
						<img src="images/intro_2/img-box-4.png" alt="">
						<h2>Trung tâm bảo dưỡng - sửa chữa</h2>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
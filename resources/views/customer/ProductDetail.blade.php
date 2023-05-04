@extends('customer.Layout')

@section('title')	
	<title>Chi tiết sản phẩm - KissCat</title>
@endsection

@section('link_css')
	<link rel="stylesheet" href="{{ url('/css/product.css') }}">
@endsection
</head>

@section('main_content')
	<section class="product">
		<div class="container">
			<div class="product-container">
				<div class="product-img">
					<div class="swiper swiper2">
						<div class="swiper-wrapper">
						@for($i = 0; $i < 5; ++$i)
							<div class="swiper-slide">
								<img src="{{URL::asset($product->image)}}" alt="">
							</div>
						@endfor
						</div>
					</div>
					<div class="product-img-list">
						@for($i = 0; $i < 5; ++$i)
							<div class="product-img-item">
								<img src="{{URL::asset($product->image)}}" alt="">
							</div>
						@endfor
					</div>
				</div>
				<div class="product-detail">
					<div class="product-detail-category">
						<a href="/Home"> Trang chủ</a>
						<span> / </span>
						<a href="/ProductList"> Sản phẩm</a>
						<span> / </span>
						<a href=""> Ghế ngồi</a>
					</div>
					<div class="product-detail-name">
						{{$product->name}}
					</div>
					<div class="product-detail-price">
						<span class="price-number"> {{$product->price}}</span>
						<span class="price-unit">VNĐ</span>
					</div>
					<div class="product-detail-desc">
						{!!Str::limit($product->description,200)!!}
					</div>
					<div class="product-detail-label">
						<div class="detail-label-name">
							Màu sắc
						</div>
						<select name="label-color" id="label-color">
							<option>Chọn một tùy chọn</option>
							<option value="red">Đỏ</option>
							<option value="orange">Cam</option>
							<option value="yellow">Vàng</option>
						</select>
					</div>
					<div class="product-detail-button button">Mua ngay</div>
				</div>
			</div>

		</div>
	</section>
	<section class="description">
		<div class="container">
			<div class="description-container">
				<div class="description-left">
					<div class="description-main">Mô tả</div>
					<div class="description-more">Thông tin bổ sung</div>
				</div>
				<div class="description-right">
					{!!$product->description!!}
				</div>
			</div>
		</div>
	</section>
	<section class="similarPro">
		<div class="container">
			<div class="similarPro-container">
				<h3 class="similarPro-heading">Sản phẩm tương tự</h3>
				<div class="similarPro-list">
					@foreach($same_products as $product)
						<a href="/ProductDetail/{{$product->product_id}}" class="product-item">
							<img style="width:200px; height: 200px;" src="{{URL::asset($product->image)}}" alt=""
								class="category-product-img">
							<div class="category-product-detail">
								<p class="category-product-name">{{$product->name}}</p>
								<div class="category-product-price"><span class="price-number"> {{$product->price}}
									</span><span class="price-unit">VNĐ</span></div>
							</div>
						</a>
					@endforeach
				</div>
			</div>
		</div>
	</section>
@endsection
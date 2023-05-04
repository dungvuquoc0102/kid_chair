@extends('customer.Layout')

@section('title')	
	<title>Danh mục - KissCat</title>
@endsection

@section('link_css')
	<link rel="stylesheet" href="{{ url('/css/category.css') }}">
@endsection
</head>

@section('main_content')
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
									class="category-product-img" style="height: 300px; width: 100%;">
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
@endsection
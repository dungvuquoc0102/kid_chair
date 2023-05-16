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
						
						<div class="category-title">{{ $sub_category_name }}</div>
						<div class="category-desc">
							<a href="{{ url('/') }}"> Trang chủ</a>
							<span> / </span>
							<a href="#"> {{ $category_name }}</a>
						</div>
					
					</div>
					<div class="category-heading-right">
						<select class="category-select" name="news" id="product-list">
							<option <?php if(strcmp($orderBy, "product_id")==0) echo "selected" ?> value="{{ $sub_category_id }}/product_id">Mới nhất</option>
							<option <?php if(strcmp($orderBy, "price")==0) echo "selected" ?> value="{{ $sub_category_id }}/price">Giá từ cao đến thấp</option>
						</select>
					</div>
				</div>
				<div class="category-content">
					<div class="category-content-left">
						<p class="content-title">Danh mục</p>
						<ul class="content-title-list">
							@foreach($sub_categories as $product_sub_category)
								<li   class="content-item {{ $product_sub_category->sub_category_id == $sub_category_id ? 'is-bold' : '' }}">
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
								<div class="product-img">
									<img src="{{URL::asset($product->image)}}" alt=""
										class="category-product-img" style="">
								</div>
								<div class="category-product-detail">
									<p class="category-product-name">{{$product->name}}</p>
									<div class="category-product-price"><span class="price-number"> {{ number_format($product->price, 0) }}
										</span><span class="price-unit">VNĐ</span></div>
								</div>
							</a>
						@endforeach
					</div>
				</div>
				<div class="products-paginate">{{$products->links()}}</div>
			</div>
		</div>
	</section>
@endsection
@extends('customer.Layout')

@section('title')	
	<title>Tin tức - KissCat</title>
@endsection

@section('link_css')
	<link rel="stylesheet" href="{{ url('/css/news.css') }}">
@endsection
</head>

@section('main_content')
	<section class="news">
		<div class="container">
			<div class="news-container">
				<div class="news-heading is-large">
					Tin tức
				</div>
				<div class="news-content">
					<div class="news-content-left">
						<div class="news-content-heading">
							Các chuyên mục bài viết
						</div>
						<select name="news_category" id="news_category">

							@if($news_sub_category_id == 0)
								<option selected value="0">Tất cả</option>
							@else
								<option value="0">Tất cả</option>
							@endif

							@foreach($news_sub_categories as $news_sub_category)
								@if($news_sub_category->sub_category_id == $news_sub_category_id)
									<option selected value="{{$news_sub_category->sub_category_id}}">{{$news_sub_category->name}}</option>
								@else
									<option value="{{$news_sub_category->sub_category_id}}">{{$news_sub_category->name}}</option>
								@endif
							@endforeach

						</select>
						<span class="news-title">
							Bài viết mới nhất
						</span>
						<ul>
							@foreach($hot_news as $h_ns)
								<li><a href="/NewsDetail/{{$h_ns->news_id}}">{{$h_ns->title}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="news-content-right">
						@foreach($news as $ns)
							<a href="/NewsDetail/{{$ns->news_id}}">
								<div class="news-post-item">
									<div class="post-item-img">
										<img src="{{URL::asset($ns->image)}}" alt="">
									</div>
									<div class="post-item-content">
										<div class="post-item-heading">
											<span>{{$ns->title}}</span>
										</div>
										<div class="post-item-desc">
											<!-- {{Str::limit($ns->summary,100)}} -->
											{{$ns->summary}}
										</div>
									</div>
								</div>
							</a>
						@endforeach	
					</div>
				</div>
				<div class="news-paginate">{{$news->links()}}</div>
			</div>
		</div>
	</section>
@endsection
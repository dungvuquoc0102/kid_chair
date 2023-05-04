@extends('customer.Layout')

@section('title')	
	<title>Giới thiệu chi tiết - KissCat</title>
@endsection

@section('link_css')
<link rel="stylesheet" href="{{ url('css/introDetail.css') }}">
@endsection

@section('main_content')
<section class="intro">
	<div class="intro-bg"></div>
	<div class="intro-content">
		<div class="container">
			<div class="intro-cover">
				<img src="{{ url('/images/intro/img-banner.png') }}" alt="">
				<h2>Giới thiệu KissCat</h2>
				<p>Công ty Cổ phần Công nghệ Kisscat Việt Nam là doanh nghiệp tiên phong tại Việt Nam tập
					trung
					phát triển các dòng sản phẩm xe đạp và xe đạp trợ lực điện sử dụng năng lượng sạch, bền
					vững
					là pin Lithium-ion, thúc đẩy văn hóa sử dụng xe đạp năng lượng sạch trong giao thông đô
					thị.
					Công ty đã bắt đầu ý tưởng dự án, quan sát thị trường và phát triển sản phẩm thử nghiệm
					vào
					cuối năm 2017, chính thức thành lập doanh nghiệp vào đầu tháng 03/2019.</p>
				<p>Kisscat cung cấp các dịch vụ mua bán, thuê xe, ứng dụng công nghệ và IoT trong quá trình
					vận
					hành và cung ứng sản phẩm. Điểm nổi trội của Kisscat nằm ở bộ E-bike kit có thể chuyển
					đổi
					bất kỳ chiếc xe đạp truyền thống nào thành một chiếc xe đạp điện hybrid.</p>
				<h2>Định vị thương hiệu</h2>
				<p>Kisscat định vị là một start-up công nghệ, với sản phẩm là xe đạp trợ lực điện thời
					trang. Sử
					dụng động cơ và pin thông minh, đáp ứng linh hoạt nhu cầu của khách hàng.</p>
				<img src="{{ url('/images/intro/img-1.png') }}" alt="">
				<h2>Sứ mệnh & tầm nhìn của Kisscat</h2>
				<ul>
					<li>2030 – 100% phương tiện giao thông không phát thải tại trung tâm các thành phố lớn.
					</li>
					<li>Tiên phong cung cấp các giải pháp giao thông đô thị xanh thay thế xe máy và lan tỏa
						lối
						sống bền vững. Dẫn đầu về thiết kế và công nghệ sản phẩm. Hướng tới các tiêu chuẩn
						quốc
						tế hàng đầu.</li>
					<li>Thay thế trên 2.000.000 xe máy bằng xe đạp trợ lực năng lượng xanh di chuyển hàng
						ngày
						trong các thành phố lớn.</li>
					<li>Cắt giảm 611.000 tấn CO2, NO2, CH4 mỗi năm và hoàn toàn không phát khí thải độc hại,
						bụi
						mịn, không phát thải kim loại nặng.
					</li>
					<li>Trở thành doanh nghiệp khoa học công nghệ dẫn đầu trong lĩnh vực giao thông xanh tại
						Việt Nam.
					</li>
				</ul>
				<h2>Đội ngũ chuyên gia
				</h2>
				<img src="{{ url('/images/intro/img-2.png') }}" alt="">
				<p>
					<strong>Trụ sở chính:</strong>
				</p>
				<p>Tòa nhà CT1, Khu đô thị Mỹ Đình – Mễ Trì, Phường Mỹ Đình 1, Quận Nam Từ Liêm, Hà Nội,
					Việt
					Nam</p>
				<p>
					<strong>Liên hệ:</strong>
				</p>
				<p>www.kisscat.com</p>
				<p>
					<strong>Hotline:</strong>
				</p>
				<p>Kinh doanh: <strong>092 9898 098</strong></p>
				<p>Bảo hành: <strong>092 9898 198</strong></p>
			</div>
		</div>
	</div>
</section>
@endsection
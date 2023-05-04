<?php
use App\Http\Controllers\SubCategoryC;
$subCategoryObject = new SubCategoryC();
$category_headers = $subCategoryObject->getCategoryHeader();
?>
<header class="header">
	<div class="container">
		<div class="header-container">
			<div class="header-menu-toggle">
				<i class="fas fa-bars icon-menu"></i>
			</div>
			<a class="header-logo" href="<?php echo url('') ?>">
				<img src="<?php echo url('images/logo.png') ?>" alt="logo">
			</a>
			<div class="header-menu">
				<ul>
					<li>
						<div>
							<a class="header-cate" href="#">Giới thiệu </a>
							<span class="button_show_menu_1">
								<i class="fas fa-angle-down header-arr-down"></i>
							</span>
						</div>
						<ul class="header-sub-menu header-sub-menu_1 header-intro">
							<li>
								<!-- <a class="header-menu-key" href="">Sản phẩm</a> -->
								<ul class="header-sub-sub-menu">
									<li><a href="">Ghế ngồi Việt Nam</a></li>
									<li><a href="">Công nghệ</a></li>
									<li><a href="">Danh sách đại lí</a></li>
									<li><a href="">Trung tâm bảo dưỡng - sửa chữa</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="header-key">
						<div>
							<a class="header-key" href="#">Sản phẩm và dịch vụ </a>
							<span class="button_show_menu_2">
								<i class="fas fa-angle-down header-arr-down"></i>
							</span>
						</div>
						<ul class="header-sub-menu header-sub-menu_2">
						<?php
						foreach($category_headers as $category_header){
						?>
							<li>
								<a class="header-menu-key">
									<?php 
									echo $category_header['category'] 
									?>
								</a>
								<ul class="header-sub-sub-menu">
									<?php
									foreach($category_header['sub_categories'] as $sub_category){
									?>
										<li>
											<a href="/ProductList/<?php echo $sub_category->sub_category_id ?>/product_id">
												<?php echo $sub_category->name ?>
											</a>
										</li>
									<?php
									}
									?>
								</ul>
							</li>
						<?php
						}
						?>
						</ul>
					</li>
					<li>
						<div>
							<a href="/NewsList/0">Tin tức</a>
						</div>
					</li>
					<li>
						<div>
							<a href="">Đăng kí làm đại lý</a>
						</div>	
					</li>
					<li>
						<div>
							<a href="">Liên hệ</a>
						</div>	
					</li>
				</ul>
			</div>
			<div class="header-others">
				<ul>
					<li class="header-search">
						<span class="header-search-button">
							<i class="fas fa-search"></i>
						</span>
						<form class="header-search-form" action="">
							<input type="search" placeholder="Tìm kiếm...">
							<button type="submit" value="Tìm kiếm">
								<i class="fas fa-search"></i>
							</button>
						</form>
					</li>
					<!-- <li><a href="">Đăng kí</a></li>
					<li><a href="">Đăng nhập</a></li> -->
				</ul>
			</div>
		</div>
	</div>
</header>
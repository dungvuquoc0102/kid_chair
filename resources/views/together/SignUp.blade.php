<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>Đăng nhập</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


<!-- Fonts -->
<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body style="height: 100vh; overflow-y: hidden; background-image: url(<?php echo URL::asset('images/banner2.jpg');?>); background-size: cover" class="d-flex flex-column justify-content-center align-items-center">
	<div class="w-25 p-3 d-flex flex-column algin-items-center justify-content-center" style="background-color: white;">
	    <h2 class="text-center text-success">Đăng nhập</h2>
		<form action="/CheckSignUp" method="post" class="w-100 d-flex flex-column">
		@csrf
			<input class="p-2 m-2 border border-2 border-success" type="text" name="username" placeholder="Tên tài khoản" required="">
			@error('username')
			<h6 class="text-danger">{{$message}}</h6>
			@enderror
			<input class="p-2 m-2 border border-2 border-success" type="password" name="password" placeholder="Mật khẩu" required="">
			@error('password')
			<h6 class="text-danger">{{$message}}</h6>
			@enderror
			<input class="p-2 m-2 border border-2 border-success" type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu" required="">
			@error('password_confirmation')
			<h6 class="text-danger">{{$message}}</h6>
			@enderror
			<div class="p-3 text-center">
				<input type="submit" class="btn btn-success" value="Đăng ký">
			</div>
		</form>
		<p class="text-center">Khách đã có tài khoản: <a class="btn btn-outline-primary" href="/SignIn">Đăng nhập</a></p>
	</div>

</body>
<!-- //Body -->

</html>

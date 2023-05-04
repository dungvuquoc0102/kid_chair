<?php
use Illuminate\Support\Facades\Session;
if(!Session::has('user_id')){
    header("Location: /SignIn");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.4.1/socket.io.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body style='background-color: #efefef; height: 100vh'>
        <style>
            .avatar {
                width: 0.1px;
                height: 0.1px;
                opacity: 0;
                overflow: hidden;
                position: absolute;
                z-index: -1;
            }

            .file_label{
                padding: 3px;
                font-size: 1.25em;
                font-weight: 700;
                color: #fff;
                background-color: green;
                display: inline-block;
                cursor: pointer;
            }

            .avatar:focus + label,
            .avatar + label:hover {
                background-color: yellow;
                color: black;
            }

            .list_func{
                border-bottom: 1px solid purple;
                color: green;
            }

            .list_func:hover{
                background-color: purple;
                color: white;
            }

        </style>
        
        <div id='header' class="d-flex" style="height:7vh; background-image: linear-gradient(to right, blue, orange)">
            <h2 class="text-center text-light m-auto">Hệ thống cửa hàng xe trẻ em</h2>
        </div>
        <div class="d-flex">
            <div style="width:15%" class="d-flex flex-column m-2">
                <a href="/ProductManager" class="list_func p-2" style="display:block; text-decoration:none" >
                    <i class="fas fa-watch text-primary"></i> Quản lý sản phẩm
                </a>
                <a href="/NewsManager" class="list_func p-2" style="display:block; text-decoration:none" >
                    <i class="fas fa-box" style="color: pink"></i> Quản lý tin tức
                </a>
                <a href="/CategoryManager" class="list_func p-2" style="display:block; text-decoration:none" >
                    <i class="fab fa-facebook-messenger text-success"></i> Quản lý danh mục
                </a>
                <a href="/SubCategoryManager" class="list_func p-2" style="display:block; text-decoration:none" >
                    <i class="fas fa-person-carry text-warning"></i> Quản lý danh mục con
                </a>
                <a href="/ChangePass" class="list_func p-2" style="display:block; text-decoration:none" >
                    <i class="fas fa-exchange text-danger"></i> Đổi mật khẩu
                </a>
                <a href="/SignOut" class="list_func p-2" style="display:block; text-decoration:none" >
                    <i class="fas fa-sign-out text-dark"></i> Đăng xuất
                </a>
            </div>
            <script>

            // input image
            var inputs = document.querySelectorAll( '.mainavatar' );
            Array.prototype.forEach.call( inputs, function( input )
            {
                var label	 = input.nextElementSibling,
                    labelVal = label.innerHTML;

                input.addEventListener( 'change', function( e )
                {
                    var fileName = '';
                    if( this.files && this.files.length > 1 )
                        fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
                    else
                        fileName = e.target.value.split( '\\' ).pop();

                    if( fileName )
                        label.querySelector( 'span' ).innerHTML = fileName;
                    else
                        label.innerHTML = labelVal;
                });
            });
            $('.mainavatar').change(function(){
                $('#avt_change').submit();
            });
        </script>
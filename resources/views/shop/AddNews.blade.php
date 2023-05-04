<?php include('shopheader.php') ?>
            <div class="d-flex justify-content-center align-items-center text-center p-2" style="width: 100%">
                <fieldset class='bg-dark text-light w-50 p-3'>
                    <legend class="text-center text-warning">Thêm tin tức</legend>
                    <form action='/AddNews' method='post' enctype="multipart/form-data">
                        @csrf
                        <div style='text-align:center'>
                            <img id='avatar' src="{{URL::asset('images/defaultavatar.jpg')}}" alt="Đã thêm ảnh" style='width:50%;height:50%;'>
                        </div>
                        <div style='text-align:center'>
                            <input type="file" name="image" id="file" class="avatar" data-multiple-caption="{count} files selected" multiple required />
                            <label class='file_label' for="file">Chọn ảnh</label>
                        </div>
                        <br>
                        <div class="d-flex flex-column justify-content-between">
                            <div class="row border border-secondary p-1 m-1">
                                <label class="col-3">Tiêu đề</label>
                                <input class="col-9" type='text' name='title' required>
                            </div>
                            <div class="row border border-secondary p-1 m-1">
                                <label class="col-3">Tóm tắt</label>
                                <input class="col-9" type='text' name='summary' required>
                            </div>
                            <div class="row border border-secondary p-1 m-1">
                                <label class="col-3">Danh mục</label>
                                <select id="category" class="col-9" type='text' name='category_id' required>
                                    <option disabled selected value> -- Chọn danh mục -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->category_id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row border border-secondary p-1 m-1">
                                <label class="col-3">Danh mục con</label>
                                <select id="sub_category" class="col-9" type='text' name='sub_category_id'>
                                    <option disabled selected value> -- Chọn danh mục con -- </option>
                                </select>
                            </div>
                            <div class="border border-secondary p-1 m-1">
                                <label class="text-center text-warning h3">Nội dung</label>
                                <textarea id="content" name='content'></textarea>
                            </div>
                        </div>
                        <div class='text-center m-2'><button type='submit' name='btnsuathongtin' class='btn btn-info'>Thêm</button></div>
                    </form>
                </fieldset>
            </div>
        </div>
    </body>

    <script  type="text/javascript" src="{{URL::asset('ckeditor/ckeditor.js')}}"></script>

    <script>
    // add editor
    CKEDITOR.replace('content');

    // select image
    $('.avatar').change(function(){
        let file_path = $(this).val();
        file_path = file_path.split("\\");
        let file_name = file_path[file_path.length-1];
        let path = "{{URL::asset('upload/')}}";
        path += '/' + file_name;
        $('#avatar').attr('src',path);
    });

    // input file
    var inputs = document.querySelectorAll( '.avatar' );
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

    // get subcategory according to selected category
    $("#category").change(function(){
        let category_id = $(this).val();
        let data = {
            'category_id':category_id
        }
        $.get('/Ajax/SubCategoryByCategory',data, function(data){
            let sub_category_option = "";
            for(let i = 0; i < data.length; ++i){
                let option = "<option value='" + data[i]['sub_category_id'] + "'>" + data[i]['name'] + "</option>";
                sub_category_option += option;
            }
            $("#sub_category").html(sub_category_option);
        });
    });

</script>

</html>
<?php include('shopheader.php') ?>
            <div class="d-flex justify-content-center align-items-center text-center p-2" style="width: 100%">
                <fieldset class='bg-dark text-light w-50 p-3'>
                    <legend class="text-center text-warning">Sửa danh mục</legend>
                    <form action='/EditCategory' method='post'>
                        @csrf
                        <div class="d-flex flex-column justify-content-between">
                            <input type="hidden" name="category_id" value="{{$category->category_id}}"/>
                            <div class="row border border-secondary p-1 m-1">
                                <label class="col-3">Tên danh mục</label>
                                <input class="col-9" type='text' name='name' value="{{$category->name}}" required>
                            </div>
                        </div>
                        <div class='text-center m-2'><button type='submit' name='btnsuathongtin' class='btn btn-info'>Sửa</button></div>
                    </form>
                </fieldset>
            </div>
        </div>
    </body>

</html>
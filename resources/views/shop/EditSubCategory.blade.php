<?php include('shopheader.php') ?>
            <div class="d-flex justify-content-center align-items-center text-center p-2" style="width: 100%">
                <fieldset class='bg-dark text-light w-50 p-3'>
                    <legend class="text-center text-warning">Thêm danh mục</legend>
                    <form action='/EditSubCategory' method='post'>
                        @csrf
                        <div class="d-flex flex-column justify-content-between">
                            <input type="hidden" name="sub_category_id" value="{{$sub_category->sub_category_id}}"/>
                            <div class="row border border-secondary p-1 m-1">
                                <label class="col-3">Tên</label>
                                <input class="col-9" type='text' name='name' value="{{$sub_category->name}}" required>
                            </div>
                            <div class="row border border-secondary p-1 m-1">
                                <label class="col-3">Danh mục</label>
                                <select id="category" class="col-9" type='text' name='category_id' required>
                                    <?php
                                    foreach($categories as $category){
                                        if($category->category_id == $sub_category->category_id){
                                            echo "<option selected value='".$category->category_id."'>".$category->name."</option>";
                                        }
                                        else{
                                            echo "<option value='".$category->category_id."'>".$category->name."</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class='text-center m-2'><button type='submit' name='btnsuathongtin' class='btn btn-info'>Sửa</button></div>
                    </form>
                </fieldset>
            </div>
        </div>
    </body>
</html>
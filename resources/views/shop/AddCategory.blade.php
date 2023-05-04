<?php include('shopheader.php') ?>
            <div class="d-flex flex-column justify-content-center align-items-center text-center p-2" style="width: 100%">
                <fieldset class='bg-dark text-light w-50 p-3'>
                    <legend class="text-center text-warning">Thêm danh mục</legend>
                    <form action='/AddCategory' method='post'>
                        @csrf
                        <div class="d-flex flex-column justify-content-between">
                            <div class="row border border-secondary p-1 m-1">
                                <label class="col-3">Tên</label>
                                <input class="col-9" type='text' name='name' required>
                            </div>
                        </div>
                        <div class='text-center m-2'><button type='submit' name='btnsuathongtin' class='btn btn-info'>Thêm</button></div>
                    </form>
                </fieldset>
                @error('name')
                <h4 class="text-center text-danger">{{$message}}</h4>
                @enderror
            </div>
        </div>
    </body>
</html>
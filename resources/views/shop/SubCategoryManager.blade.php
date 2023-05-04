<?php include("shopheader.php") ?>
            <div class="d-flex flex-column m-5" style="width:80%">
                <div class="text-center m-2"><a href="/AddSubCategory" class="btn btn-success">Thêm danh mục con</a></div>
                <table class="table table-success table-hover text-dark text-center">
                    <thead class="text-info">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sub_categories as $sub_category)
                        <tr>
                            <td scope="row">{{$sub_category->sub_category_id}}</td>
                            <td>{{$sub_category->name}}</td>
                            <td>{{$sub_category->category}}</td>
                            <td>
                                <select name="status" class="status">
                                    <option <?php if(strcmp($sub_category->status,"ACTIVE")==0) echo "selected"; ?> value="ACTIVE">ACTIVE</option>
                                    <option <?php if(strcmp($sub_category->status,"INACTIVE")==0) echo "selected"; ?> value="INACTIVE">INACTIVE</option>
                                </select>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <form action="/EditSubCategory" class="m-1">
                                        <input type='hidden' value="{{$sub_category->sub_category_id}}" name='sub_category_id'/>
                                        <button class="edit btn btn-primary"><i class="far fa-pen"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="m-auto">{{$sub_categories->links()}}</div>
            </div>
        </div>
        <script>
            $(".status").change(function(){
                let status = $(this).val();
                let sub_category_id = $(this).parent().parent().children().first().html();
                let data = {
                    "id": sub_category_id,
                    "status": status,
                    "table": "sub_category",
                    "idColumnName": "sub_category_id"
                };
                $.get('/Ajax/ChangeStatus',data, function(){
                    alert("Đã thay đổi trạng thái");
                });
            });
        </script>
    </body>
</html>
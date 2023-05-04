<?php include("shopheader.php") ?>
            <div class="d-flex flex-column m-5" style="width:80%">
                <div class="text-center m-2"><a href="/AddProduct" class="btn btn-success">Thêm sản phẩm</a></div>
                <table class="table table-success table-hover text-dark text-center">
                    <thead class="text-info">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Kích cỡ</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Danh mục con</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td scope="row">{{$product->product_id}}</td>
                            <td>{{$product->name}}</td>
                            <td><img src="{{URL::asset($product->image)}}" style="width:100px; height:100px"/></td>
                            <td>{{$product->price}} VNĐ</td>
                            <td>{{$product->size}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->sub_category}}</td>
                            <td>{!!Str::limit($product->description,100)!!}</td>
                            <td>
                                <select name="status" class="status">
                                    <option <?php if(strcmp($product->status,"ACTIVE")==0) echo "selected"; ?> value="ACTIVE">ACTIVE</option>
                                    <option <?php if(strcmp($product->status,"INACTIVE")==0) echo "selected"; ?> value="INACTIVE">INACTIVE</option>
                                </select>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <form action="/EditProduct" class="m-1">
                                        <input type='hidden' value="{{$product->product_id}}" name='product_id'/>
                                        <button class="edit btn btn-primary"><i class="far fa-pen"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="m-auto">{{$products->links()}}</div>
            </div>
        </div>
        <script>
            $(".status").change(function(){
                let status = $(this).val();
                let product_id = $(this).parent().parent().children().first().html();
                let data = {
                    "id": product_id,
                    "status": status,
                    "table": "product",
                    "idColumnName": "product_id"
                };
                $.get('/Ajax/ChangeStatus',data, function(){
                    alert("Đã thay đổi trạng thái");
                });
            });
        </script>
    </body>
</html>
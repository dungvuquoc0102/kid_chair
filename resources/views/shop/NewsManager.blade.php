<?php include("shopheader.php") ?>
            <div class="d-flex flex-column m-5" style="width:80%">
                <div class="text-center m-2"><a href="/AddNews" class="btn btn-success">Thêm tin tức</a></div>
                <table class="table table-success table-hover text-dark text-center">
                    <thead class="text-info">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Danh mục con</th>
                            <th scope="col">Thời gian</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $ns)
                        <tr>
                            <td scope="row">{{$ns->news_id}}</td>
                            <td><img src="{{URL::asset($ns->image)}}" style="width:100px; height:100px"/></td>
                            <td>{{$ns->title}} VNĐ</td>
                            <td>{{$ns->category}}</td>
                            <td>{{$ns->sub_category}}</td>
                            <td>{{$ns->time}}</td>
                            <td>
                                <select name="status" class="status">
                                    <option <?php if(strcmp($ns->status,"ACTIVE")==0) echo "selected"; ?> value="ACTIVE">ACTIVE</option>
                                    <option <?php if(strcmp($ns->status,"INACTIVE")==0) echo "selected"; ?> value="INACTIVE">INACTIVE</option>
                                </select>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a class="more btn btn-primary m-1" href="/News/{{$ns->news_id}}"><i class="fas fa-eye"></i></a>
                                    <form action="/EditNews" class="m-1">
                                        <input type='hidden' value="{{$ns->news_id}}" name='news_id'/>
                                        <button class="edit btn btn-primary"><i class="far fa-pen"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="m-auto">{{$news->links()}}</div>
            </div>
        </div>
        <script>
            $(".status").change(function(){
                let status = $(this).val();
                let news_id = $(this).parent().parent().children().first().html();
                let data = {
                    "id": news_id,
                    "status": status,
                    "table": "news",
                    "idColumnName": "news_id"
                };
                $.get('/Ajax/ChangeStatus',data, function(){
                    alert("Đã thay đổi trạng thái");
                });
            });
        </script>
    </body>
</html>
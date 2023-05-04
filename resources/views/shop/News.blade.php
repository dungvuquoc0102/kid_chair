<?php include("shopheader.php") ?>
            <div class="d-flex flex-column m-5" style="width:80%">
                <div class="w-75 m-auto bg-light p-4">
                    <h1 class="text-center bg-success text-light p-3">{{$news->title}}</h1>
                    <p class="text-center text-primary">{{$news->time}}</p>
                    <p class="text-center"><img src="{{$news->image}}" style="width:500px; height:300px" alt="Ảnh bìa"/></p>
                    <p>{{$news->summary}}</p>
                    <p>{!!$news->content!!}</p>
                </div>
            </div>
        </div>
        <script>
            //script
        </script>
    </body>
</html>
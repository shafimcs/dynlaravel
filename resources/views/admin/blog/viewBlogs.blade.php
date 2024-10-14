
<!-------------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------------------------------------------------------------------------->

@extends('layouts.app')


@section('content')
    <br><br>
    <div class="row">
        <div class="col-xs-12">
            @include('flash::message')
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Blogs</h3>
                </div>

                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Image
                            </th>
                            <th>Action</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($viewBlogs as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->body }}</td>
                                <td> <?php $images = explode('|',$post->image);
                                    for($i=0;  $i< count($images);$i++)
                                    {

                                    ?>
                                    <img src="{{ asset ('storage/'.$images[$i]) }}"  style="width:200px;"/>
                                    <?php  }
                                    ?></td>
                                <td><a href="{{route('blog.edit',$post->id)}}" class="btn btn-warning">Edit</a><br><br>
                                    {!! Form::open(['method' => 'DELETE','onsubmit' => "return confirm('".trans("Are you sure want to delete")."');",
                                          'route' => ['blog.destroy', $post->id ]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                    <a href="{{route('blog.review',[$post->id,$post->title])}}" class="btn btn-success pull-left">Reviews</a>

                                </td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <center> <div class="align"></div></center>

                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@stop
@section('javascript')
    <link rel="stylesheet" href="{{ asset('dashboard/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

    <script src="{{ asset('dashboard/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}} "></script>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>

@endsection
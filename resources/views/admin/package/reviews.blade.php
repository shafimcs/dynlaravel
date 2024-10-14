@extends('layouts.app')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-xs-12">
            @include('flash::message')
            <div class="box">

                <div class="box-header">
                    <h3 class="box-title">Reviews of {{ $package_name }}</h3>
                </div>

                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover myTable">
                        <thead>
                        <tr>
                            <th>Review</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($reviews as $review)

                            <tr>
                                <td>{{ $review->review }}</td>
                                <td>{{ $review->user_name }}</td>
                                <td>{{ $review->email }}</td>
                                <td>{{ $review->number }}</td>
                                <td> @for ($i=1; $i <= $review->rating ; $i++)

                                        <span class="fa fa-star fa-fw{{ ($i <= $review->rating) ? '' : '-empty'}}"></span>
                                    @endfor
                                </td>

                                <td>@if($review->flag=='1')
                                        <buttton onclick="pushback({{ $review->id }}) " class="btn btn-warning">Push Back</buttton><br><br>
                                    @else
                                    <button onclick="pushtoHome({{ $review->id }})" class="btn btn-success">Push to home</button><br><br>
                                        @endif
                                    &nbsp;&nbsp;
                                    <button onclick="myRow({{ $review->id }})" class="btn btn-danger">Delete</button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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

        function myRow(id) {

            if (!confirm("Do you want to delete")){
                return false;
            }
            else {
                var id=id;
                $.ajax(
                    {
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        dataType: 'text',
                        type: "POST",
                        url: "{{ route('package.review.delete') }}",
                        data: {id:id},
                        success: function (res) {
                            alert(res);
                            $( ".myTable" ).load(window.location.href + " .myTable" );
                            $.notify(res,"error");
                            setTimeout(function() {
                            }, 1000);
                        }
                    });
            }
        }
    </script>

    <script>

        function pushtoHome(id) {

            if (!confirm("Do you want to push this review to home page ??")){
                return false;
            }
            else {
                var id=id;
                $.ajax(
                    {
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        dataType: 'text',
                        type: "POST",
                        url: "{{ route('push.package.review.to.home') }}",
                        data: {id:id},
                        success: function (res) {
                            alert(res);
                            $( ".myTable" ).load(window.location.href + " .myTable" );
                            $.notify(res,"error");
                            setTimeout(function() {
                            }, 1000);
                        }
                    });
            }
        }
    </script>
    <script>
        function pushback(id)
        {
            if (!confirm("Do you want to push back this review from home page ??")){
                return false;
            }
            else {
                var id=id;
                $.ajax(
                    {
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        dataType: 'text',
                        type: "POST",
                        url: "{{ route('push.package.review.back') }}",
                        data: {id:id},
                        success: function (res) {
                            alert(res);

                            $( ".myTable" ).load(window.location.href + " .myTable" );
                            $.notify(res,"error");
                            $('#mybtn').css('color','red');
                            $('#mybtn').text('Pushed');
                            setTimeout(function() {
                            }, 1000);

                        }
                    });
            }
        }
    </script>
@endsection
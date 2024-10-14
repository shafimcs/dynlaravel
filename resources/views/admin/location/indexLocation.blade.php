

@extends('layouts.app')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-xs-12">
            @include('flash::message')

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Locations</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover myTable">
                        <thead>
                        <tr>
                            <th>Country</th>
                            <th>Location</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($location as $locations)
                            <tr>
                                <td>{{ $locations->country }}</td>
                                <td>{{ $locations->location }}</td>
                                <td><img width ="200px" src="{{ asset ('storage/'.$locations->image) }}" alt="No image" /></td>
                                <td><a href="{{route('location.edit',$locations->id)}}" class="btn btn-warning">Edit</a><br><br>
                                    <button type="" class="btn btn-danger" onclick="myRow({{ $locations->id }})">Delete</button>
                                </td>
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
                        url: "{{ route('location.delete') }}",
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
@endsection
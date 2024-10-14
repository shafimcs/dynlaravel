@extends('layouts.app')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-xs-12">
            @include('flash::message')
            <div class="box">

                <div class="box-header">
                    <h3 class="box-title">Hotels</h3>
                </div>

                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover myTable">
                        <thead>
                        <tr>
                            <th>Destination</th>
                            <th>Hotel Name</th>
                            <th>Image</th>
                            <th>Hotel Rooms</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Ameties</th>
                            <th>Action</th>
                         </tr>
                        </thead>
                        <tbody>

                        @foreach ($hotels as $hotel)

                            <tr>
                                <td>{{ $hotel->destination }}</td>
                                <td>{{ $hotel->hotel_name }}</td>
                                <td><img src="{{ asset('storage/'.$hotel->image) }}" style="height: 80px;width:80px;"></td>
                                <td>
                                    @foreach($hotel->get_hotelrooms as $hotel_room)
                                         <img src="{{ asset('storage/'.$hotel_room->image) }}" style="height: 80px;width:80px;"><br>
                                     @endforeach
                                </td>
                                <td>{{ $hotel->type }}</td>
                                <td>{{ $hotel->description }}</td>
                                <td>{{ $hotel->ameties }}</td>
                                <td><a href="{{ route('hotel.edit',$hotel->id) }}" class="btn btn-warning">Edit</a><br><br>
                                 <button onclick="myRow({{ $hotel->id }})" class="btn btn-danger">Delete</button><br><br>
                                    @if(count(\App\HotelRating::where('hotel_id',$hotel->id)->get()))
                                        <a href="{{ route('hotel.reviews', $hotel->id) }}" class="btn btn-success">Reviews</a><br><br>
                                    @else
                                        <span style="color: red">No Reviews</span>
                                    @endif
                                </td>
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
                        url: "{{ route('hotel.delete') }}",
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

<!---------------------------------- -------------------------------------------------------------------------------------------->





@extends('layouts.app')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-xs-12">
            @include('flash::message')

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Destinations</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover myTable">
                        <thead>
                        <tr>
                            <th>Location</th>
                            <th>Destination</th>
                            <th>Best Month</th>
                            <th>Best Days</th>
                            <th>Nearest Airport</th>
                            <th>Nearest RailwayStations</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                         @foreach ($destinations as $destination)

                            <tr>
                                <td>{{ $destination->location }}</td>
                                <td>{{ $destination->destination }}</td>
                                <td>{{ $destination->best_month_from }}<br>
                                To{{ $destination->best_month_to }}</td>
                                <td>{{ $destination->best_day_from }}
                                To &nbsp;{{ $destination->best_day_to }} days</td>
                                <td>{{ $destination->nearest_airport }}</td>
                                <td>{{ $destination->nearest_railway_station }}</td>
                                <td><a href="{{route('destination.edit',$destination->id)}}" class="btn btn-warning">Edit</a><br><br>
                                <button  onclick="myRow({{ $destination->id }})" class="btn btn-danger">Delete</button><br><br>
                                    @if(count(\App\DestinationRating::where('destination_id',$destination->id)->get()))
                                        <a class="btn btn-success" href="{{ route('destination.reviews',$destination->id) }}">Reviews</a><br><br>
                                    @else
                                        <span style="color: red">No Reviews</span>
                                    @endif
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
                        url: "{{ route('destination.delete') }}",
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
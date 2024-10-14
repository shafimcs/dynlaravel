
@extends('layouts.app')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Bookings</h3>
                </div>

                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>

                        <tr>
                            <th>Hotel ID</th>
                            <th>Hotel Name / Destination</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Number of Days</th>
                            <th>Number of Passengers</th>
                            <th>Number of Rooms</th>
                        </tr>

                        </thead>
                        <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>GTZ{{ str_pad($booking->hotel_details['id'],5,'0',STR_PAD_LEFT) }}</td>
                                <td>{{ $booking->hotel_details['hotel_name'] }} / {{ $booking->hotel_details['destination'] }}</td>
                                <td>{{ $booking->created_at->format('d M Y') }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->email }}</td>
                                <td>{{ $booking->number }}</td>
                                <td>{{ $booking->no_of_day }}</td>
                                <td>{{ $booking->no_of_passenger }}</td>
                                <td>{{ $booking->no_of_room }}</td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <center> <div class="align"></div></center>

                </div>
            </div>
        </div>
    </div>
@stop
@section('javascript')
@endsection
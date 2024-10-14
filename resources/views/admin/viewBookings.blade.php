
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
                            <th>Package ID</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Start Date</th>
                            <th>Adults</th>
                            <th>Childrens</th>
                            <th>Notes</th>
                        </tr>

                        </thead>
                        <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>GTZ{{ str_pad($booking->package_details['id'],5,'0',STR_PAD_LEFT) }}</td>
                                <td>{{ $booking->created_at->format('d M Y') }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->email }}</td>
                                <td>{{ $booking->phone_number }}</td>
                                <td>{{ $booking->start_date }}</td>
                                <td>{{ $booking->number_of_adult }}</td>
                                <td>{{ $booking->number_of_children }}</td>
                                <td>{{ $booking->notes }}</td>
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
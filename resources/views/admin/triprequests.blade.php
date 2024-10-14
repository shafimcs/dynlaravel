@extends('layouts.app')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Trip Requests</h3>
                </div>

                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Trip</th>
                            <th>Nights</th>
                            <th>Total</th>
                            <th>Triptype</th>
                            <th>Budget</th>
                            <th>Services</th>
                            <th>Additional Details</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($triprequests as $triprequest)
                            <tr>
                                <td>{{ $triprequest->created_at->format('d M Y') }}</td>
                                <td>{{ $triprequest->name }}</td>
                                <td>{{ $triprequest->number }}</td>
                                <td>{{ $triprequest->email }}</td>

                                <td><b>From :</b>{{ $triprequest->leave_from }} <br>
                                    <b>To :</b>{{ $triprequest->going_to }}</td>
                                <td>{{ $triprequest->nights }}</td>
                                <td><b>Adults :</b> {{ $triprequest->adults }}<br>
                                        <b>Minors :</b> {{ $triprequest->minors }}</td>
                                <td>{{ $triprequest->trip_type }}</td>
                                <td>{{ $triprequest->budget }}</td>
                                <td>{{ $triprequest->services }}</td>
                                <td><a style="text-decoration: none; color: black;" title="{{$triprequest->additional_details}}">{{ str_limit(strip_tags( $triprequest->additional_details), 50) }}</a> </td>
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

@extends('layouts.app')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Enquiries</h3>
                </div>

                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>

                        <tr>
                            <th>Date</th>
                            <th>Destination</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                        </tr>

                        </thead>
                        <tbody>
                        @foreach ($enquiries as $enquiry)
                            <tr>
                                <td>{{ $enquiry->created_at->format('d M Y') }}</td>
                                <td>{{ $enquiry->destination }}</td>
                                <td>{{ $enquiry->email }}</td>
                                <td>{{ $enquiry->number }}</td>
                                <td>{{ $enquiry->start_date }}</td>
                                <td>{{ $enquiry->end_date }}</td>
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
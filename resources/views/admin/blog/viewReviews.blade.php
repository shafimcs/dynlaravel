

@extends('layouts.app')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-xs-12">
            @include('flash::message')
            <div class="box">

                <div class="box-header">
                    <h3 class="box-title">Reviews of {{ $title }}</h3>
                </div>

                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover myTable">
                        <thead>
                        <tr>
                            <th>Review</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($reviews as $review)

                            <tr>
                                <td>{{$review->review}}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE','onsubmit' => "return confirm('".trans("Are you sure want to delete")."');",
                                    'route' => ['blog.review.destroy', $review->id ]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
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

@endsection

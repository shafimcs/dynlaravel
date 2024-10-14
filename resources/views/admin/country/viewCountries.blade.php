
@extends('layouts.app')
@section('content')
  <style>
    .btn-danger{
        float:right !important;
        
    }
     .btn-warning{
    float: right !important;
margin-right: 9px;
}
</style>
    <br><br> <div class="container" >
    <div class="row">
             <div class="col-md-11" style="margin-left:35px;">
            @include('flash::message')

            <div class="panel panel-default">

                                <div class="panel-heading">

                                    <h3>VIEW COUNTRIES </h3>

                                </div>

                                <div class="panel-body">   
                    <table id="example2" class="table  table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th style="text-align:right;"> Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($country as $countries)
                            <tr>
                                <td>{{ $countries->country_name }}</td>



                                <td>
                                    {!! Form::open(['method' => 'DELETE','onsubmit' => "return confirm('".trans("Are you sure want to delete")."');",
                                                                           'route' => ['country.destroy', $countries->id ]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                    <a href="{{route('country.edit',$countries->id)}}" class="btn btn-warning">Edit</a>

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
        </div>

@stop
@section('javascript')
    <link rel="stylesheet" href="{{ asset('dashboard/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

    <script src="{{ asset('dashboard/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}} "></script>
@endsection
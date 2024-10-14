
@extends('layouts.app')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-xs-12">
            @include('flash::message')

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Packages</h3>
                </div>
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
{{--
                            <th>Parent</th>
--}}
                            <th>Image</th>
                           {{-- <th>Country</th>
                            <th>Title</th>
                            <th>Description</th>--}}
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($category as $categories)
                            <tr>
                                <td>{{ $categories->category_name }}</td>
{{--
                                <td>{{ $categories->category_name }}</td>
--}}
                                <td><img width ="200px" src="{{ asset ('storage/'.$categories->image) }}" alt="featured Scroller" /></td>
                               {{-- <td>{{ $categories->country_name }}</td>
                                <td>{{ $categories->title }}</td>
                                <td>{{ $categories->description }}</td>--}}
                                <td>
                                    <a href="{{route('category.edit',$categories->id)}}" class="btn btn-warning">Edit</a><br><br>

                                    {!! Form::open(['method' => 'DELETE','onsubmit' => "return confirm('".trans("Are you sure want to delete")."');",
                                                                            'route' => ['category.destroy', $categories->id ]]) !!}

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
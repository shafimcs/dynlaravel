
@extends('layouts.app')
@section('content')
<style>.scrollmenu {  background-color: #333;  overflow: auto;  white-space: nowrap;}.scrollmenu  {  display: inline-block;  color: white;  text-align: center;  padding: 14px;  text-decoration: none;}.scrollmenu  {  background-color: #777;}
    .btn-danger{
        float:right !important;
    }
    
    .btn-danger, .btn-warning{
        font-size:11px !important;
    }td{	width:459px !important;}
</style>
    <br><br> <div class="container" >
    <div class="row">
             <div class="col-md-11" style="margin-left:35px;">
            @include('flash::message')

            
                    
         

                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    <h3>VIEW POST </h3>

                                </div>

                                <div class="panel-body">        
                    
                    
                    <table id="example2" class="table  table-hover">
                        <thead>
                        <tr>
						
                            <th>TITLE</th>
							<th>JOB_TITLE</th>
							<th>FEATURE </th>
							<th>DESCRIPTION</th>
                            <th> ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($viewpost as $viewposts)
                            <tr>
							<?php
							if($slugname=='mapaddress'||$slugname=='cardmapaddress'){
							?>
                                <td class="scrollmenu">{{ $viewposts->title }}</td>
								<?php
							}
							else
							{
								?>
								 <td>{{ $viewposts->title }}</td>
								 <?php
							}
								 ?>
                                <td>{{ $viewposts->job_title }}</td>
                                 <td>{{ $viewposts->feature1 }}</td>
								  <td>{{ $viewposts->description }}</td>
								  



                                <td>
                                    {!! Form::open(['method' => 'DELETE','onsubmit' => "return confirm('".trans("Are you sure want to delete")."');",
                                                                           'route' => ['post.destroy', $viewposts->id ]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                     <a href="{{route('post.edit',[$viewposts->id])}}" class="btn btn-warning">Edit</a>


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
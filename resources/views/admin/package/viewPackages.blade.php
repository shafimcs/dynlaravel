{{-- \resources\views\users\index.blade.php --}}{{--
@extends('layouts.app')


@section('content')

    <div class="col-md-12">
        <center><h1> Packages </h1></center>
        @include('flash::message')
        <div class="table-responsive">
            --}}{{--    <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Image</th>
                        <th>Country</th>
                        <th>Place</th>
                        <th>Days</th>
                        <th>Nights</th>
                        <th>No.of People</th>
                        <th>Standard</th>
                        <th>Delux</th>
                        <th>Luxury</th>
                        <th>Start date</th>
                        <th>End Date</th>
                        <th>Inclsn</th>
                        <th>Exclusn</th>
                        <th>Hotels</th>
                        <th>Title</th>
                        <th>Descr</th>
                        <th>Keywords</th>
                        <th>Action</th>
                        <th></th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($package as $packages)
                        <tr>
                            <td>{{ $packages->package_name }}</td>
                            <td> <a style="text-decoration: none; color: black;" title="{{$packages->package_details}}">{{ str_limit(strip_tags($packages->package_details), 50) }} </a></td>

                        @if (strlen(strip_tags($packages->package_details)) > 50)

                            <br>
                        @endif


                            <td><img width ="200px" src="{{ asset ('storage/'.$packages->image) }}" alt="no image" /></td>
                            <td>{{ $packages->country_name }}</td>
                            <td>{{ $packages->places }}</td>
                            <td>{{ $packages->days }}</td>
                            <td>{{ $packages->nights }}</td>
                            <td>{{ $packages->number_of_people }}</td>
                            <td>{{ $packages->standard }}</td>
                            <td>{{ $packages->delux }}</td>
                            <td>{{ $packages->luxury }}</td>
                            <td>{{ $packages->start_date }}</td>
                            <td>{{ $packages->end_date }}</td>
                            <td>{{ $packages->inclusion }}</td>
                            <td>{{ $packages->exclusion }}</td>
                           --}}{{----}}{{-- <td>{{ $packages->hotelDetail()->hotels }}</td>--}}{{----}}{{--
                            <td>{{ $packages->title }}</td>
                            <td>{{ $packages->description }}</td>
                            <td>{{ $packages->keywords }}</td>


                            <td>
                                <a href="{{route('package.edit',$packages->id)}}" class="btn btn-warning">Edit</a>


                            </td>
                            <td>
                                {!! Form::open(['method' => 'DELETE','onsubmit' => "return confirm('".trans("Are you sure want to delete")."');",
     'route' => ['package.destroy', $packages->id ]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        <tr><td>
                        </tr>
                    @endforeach
                    </tbody>

                </table> --}}{{--
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Image</th>
                    <th>Country</th>
                    <th>Place</th>
                    <th>Days</th>
                    <th>Nights</th>
                    <th>No.of People</th>
                    <th>Standard</th>
                    <th>Delux</th>
                    <th>Luxury</th>
                    <th>Start date</th>
                    <th>End Date</th>
                    <th>Inclsn</th>
                    <th>Exclusn</th>
                    <th>Hotels</th>
                    <th>Title</th>
                    <th>Descr</th>
                    <th>Keywords</th>
                    <th>Action</th>
                    <th></th>


                </tr>
                </thead>
                <tbody>
                @foreach ($packages as $package)
                    <tr>
                        <td>{{ $package->package_name }}</td>
                        <td>{{ $package->package_details }}</td>
                        <td><img width ="200px" src="{{ asset ('storage/'.$package->image) }}" alt="no image" /></td>
                        <td>{{ $package->country_name }}</td>
                        <td>{{ $package->places }}</td>
                        <td>{{ $package->days }}</td>
                        <td>{{ $package->nights }}</td>
                        <td>{{ $package->number_of_people }}</td>
                        <td>{{ $package->standard }}</td>
                        <td>{{ $package->deluxe }}</td>
                        <td>{{ $package->luxury }}</td>
                        <td>{{ $package->start_date }}</td>
                        <td>{{ $package->end_date }}</td>
                        <td>{{ $package->inclusion }}</td>
                        <td>{{ $package->exclusion }}</td>
                        <td>@foreach( $package->get_hotels as $hotel){{ $hotel->hotels['hotel_name'] }} ,<br> @endforeach</td>
                        <td>{{ $package->title }}</td>
                        <td>{{ $package->description }}</td>
                        <td>{{ $package->keywords }}</td>
                        <td> <a href="{{route('package.edit',$package->id)}}" class="btn btn-warning">Edit</a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE','onsubmit' => "return confirm('".trans("Are you sure want to delete")."');",
                                'route' => ['package.destroy', $package->id ]]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>


        </div>
        {{ $packages->links() }}
    </div>
@endsection--}}
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
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Package Images</th>
                        <th>Country</th>
                        <th>Place</th>
                        <th>Duration</th>
                        <th>No.of People</th>
                        <th>Start date</th>
                        <th>End Date</th>
                        <th>Action</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($packages as $package)
                        <tr>
{{--
                            <td>GTZ{{ str_pad($package->id,5,'0',STR_PAD_LEFT) }}</td>
--}}
                            <td>{{ $package->gotripz_id }}</td>
                            <td>{{ $package->package_name }}</td>
                            <td><img width ="200px" src="{{ asset ('storage/'.$package->image) }}" alt="no image" /></td>

                            <td>@foreach($package->get_hotel_images as $package_image)
                                    <img width ="80px" height ="80px" src="{{ asset ('storage/'.$package_image->image) }}" alt="no image" />
                                @endforeach
                            </td>
                            <td>{{ $package->country_name }}</td>
                            <td>{{ $package->places }}</td>
                            <td>Day:{{ $package->days }}<br> Night:{{ $package->nights }}</td>
                            <td>{{ $package->number_of_people }}</td>
                            <td>{{ $package->start_date }}</td>
                            <td>{{ $package->end_date }}</td>

                            <td> <a href="{{route('package.edit',$package->id)}}" class="btn btn-warning">Edit</a> <br> <br>
                                {!! Form::open(['method' => 'DELETE','onsubmit' => "return confirm('".trans("Are you sure want to delete")."');",
                                        'route' => ['package.destroy', $package->id ]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                                <br>
                                @if(count(\App\PackageRating::where('package_id',$package->id)->get()))
                                    <a href="{{ route('package.reviews', [$package->id,$package->package_name]) }}" class="btn btn-success">Reviews</a><br><br>
                                @else
                                    <span style="color: red">No Reviews</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                 </tbody>
             </table>
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
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   
    <link rel="stylesheet" href="{{asset('dashboard/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('dashboard/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('dashboard/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('dashboard/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dashboard/dist/css/kolorpicker.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Google Font -->
{{--
    <style>
        .js div#preloader { position: fixed;
            left: 0;
            top: 0;
            z-index: 999;
            width: 100%;
            height: 100%;
            overflow: visible;
            background: #ffff url('{{ asset('storage/image/category/ajax-loader(2).gif') }}') no-repeat center center; }

    </style>
--}}

</head>
<div class="js">
    <div id="preloader"></div>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->

            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Trade Lines</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications: style can be found in dropdown.less -->

                    <!-- Tasks: style can be found in dropdown.less -->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('user/img/585e4beacb11b227491c3399.png')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">Admin</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{asset('user/img/585e4beacb11b227491c3399.png')}}" class="img-circle" alt="User Image">


                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-right">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>


                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('user/img/585e4beacb11b227491c3399.png')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Admin</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <section>
                <ul class="sidebar-menu" data-widget="tree">
                   <!-- <li class="">
                        <a href="{{route('home')}}">
                            <i class="fa fa-home"></i> <span>Home</span>
                        </a>
                    </li>-->


                    {{--<li class="treeview">
                        <a href="#">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                            <span>Manage Slider  </span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('slider.create')}}">
                                    <i class="fa fa-circle-o"></i><span>Add Slider</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                 </a>
                            </li>
                            <li class="">
                                <a href="{{route('slider.show')}}">
                                     <i class="fa fa-circle-o"></i><span>List Slider</span>
                                     <i class="fa fa-angle-left pull-right"></i>
                                 </a>
                             </li>
                        </ul>
                    </li>--}}


                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bookmark" aria-hidden="true"></i>
                            <span>Manage Country </span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('country.create')}}">
                                    <span>Add Country</span>
                                   
                                 </a>
                            </li>
                            <li class="">
                                <a href="{{route('country.show')}}">
                                     <span>Countries</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					  <li class="treeview">
                        <a href="#">
                            <i class="fa  fa-th" aria-hidden="true"></i>
                            <span>Category Post </span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('categorypost.create')}}">
                                    <span>Add Categorypost</span>
                                 </a>
                            </li>
                            <li class="">
                                <a href="{{route('categorypost.show')}}">
                                     <span>List Categorypost</span>
                                     
                                 </a>
                             </li>
                        </ul>
                    </li>
                 
							 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-code" aria-hidden="true"></i>
                            <span>Header</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                           <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Call Number</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'call-number'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'call-number'])}}">
                                    <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
						  <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Whatsapp Number</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'whatsapp-number'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'whatsapp-number'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Branches</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
						  <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Branches List</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'branches'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'branches'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					  <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Branches Banner</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'branches-banner'])}}">
                                   <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'branches-banner'])}}">
                                    <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					</ul>
					</li>
					 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Brochure</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
						  <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Brochure List</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'brochure'])}}">
                                   <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'brochure'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					  <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Brochure Banner</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'brochure-banner'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'brochure-banner'])}}">
                                    <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					</ul>
					</li>
						  <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>TopStore </span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'topstore'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'topstore'])}}">
                                    <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					  <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Header Email </span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'header-email'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'header-email'])}}">
                                    <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					  <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Header Offer </span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'header-offer'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'header-offer'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
                        </ul>
                    </li>
			  <li class="treeview">
                        <a href="#">
                            <i class="fa fa-chrome" aria-hidden="true"></i>
                            <span>Logo </span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'logo'])}}">
                                    <span>Create</span>
                                    
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'logo'])}}">
                                    <span>List</span>
                                    
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-copy" aria-hidden="true"></i>
                            <span>Footer</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                           <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Copy Right</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'copyright'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'copyright'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-id-card-o" aria-hidden="true"></i>
                            <span>Popup</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'popup'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'popup'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
                   <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bank" aria-hidden="true"></i>
                            <span>Home </span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Slider </span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'slider'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'slider'])}}">
                                    <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					
				
					
					
						 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Banner 1</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'banner1'])}}">
                                   <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'banner1'])}}">
                                    <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
						 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Banner 2 </span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'banner2'])}}">
                                   <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'banner2'])}}">
                                    <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
							 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Banner 3</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'banner3'])}}">
                                    <span>Create</span>
                                    
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'banner3'])}}">
                                    <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					
							 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Banner 4</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'banner4'])}}">
                                   <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'banner4'])}}">
                                    <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					
						 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Deals of the day</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'dealsday'])}}">
                                    <span>Create</span>
                                    
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'dealsday'])}}">
                                    <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					
					
					
						 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Special Offer</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'special-offer'])}}">
                                   <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'special-offer'])}}">
                                    <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					
					 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Testimonials</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'client-testimonial'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'client-testimonial'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Winter Boost</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'winter-boots'])}}">
                                 <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'winter-boots'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
				
			
					
					
                       </ul>
                    </li>
					
					
						 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-group" aria-hidden="true"></i>
                            <span>About Us</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                           <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>About Banner</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'about-banner'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'about-banner'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
						  <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Abouts</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'abouts'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'abouts'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>About Image</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'aboutimage'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'aboutimage'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Company Details</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'companydetails'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'companydetails'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Company Background</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'companybackground'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'companybackground'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Brands</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'fashionbrands'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'fashionbrands'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
                        </ul>
                    </li>
					
					 
					
					
					
					
				   <li class="treeview">
                        <a href="#">
                            <i class="fa fa-id-badge" aria-hidden="true"></i>
                            <span>Contact Card</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                    
					
					            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Contact Card Banner</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'contactcardbanner'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'contactcardbanner'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Contact Card Details</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'contactcard'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'contactcard'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					  <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Follow Us</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'cardsocialicons'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'cardsocialicons'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Card Map Address</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'cardmapaddress'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'cardmapaddress'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
                        </ul>
                    </li>
					
				   <li class="treeview">
                        <a href="#">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>Contact</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                    
					
					            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Contact Banner</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'contactbanner'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'contactbanner'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Contact Details</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'contact'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'contact'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					  <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Follow Us</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'socialicons'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'socialicons'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Map Address</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'mapaddress'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'mapaddress'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
                        </ul>
                    </li>
					
					 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-image" aria-hidden="true"></i>
                            <span>Gallery</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                    
					
					            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Gallery Banner</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'gallerybanner'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'gallerybanner'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Gallerys</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'gallerys'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'gallerys'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					
					            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Videos</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'video'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'video'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					
					     
					
                        </ul>
                    </li>
					
					
					
					
					 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-map" aria-hidden="true"></i>
                            <span>Blogs</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
						
						
                    
					
					    
					            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Blog Banner</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'blogbanner'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'blogbanner'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					         
					
					
					            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Blogs</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'blogs'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'blogs'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					
					
					
					            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>blog Details Banner</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'blog-details-banner'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'blog-details-banner'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					
					
                        </ul>
                    </li>
							
		<li class="treeview">
                        <a href="#">
                            <i class="fa fa-magic" aria-hidden="true"></i>
                            <span>Theme Colors</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('themecolors.create')}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('themecolors.show')}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
						
					
		<li class="treeview">
                        <a href="#">
                            <i class="fa fa-navicon" aria-hidden="true"></i>
                            <span>Category Product</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('categoryproduct.create')}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('categoryproduct.show')}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					
 
 
 
					
					 <li class="treeview">
                        <a href="#">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            <span>Product</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
						
						
                    
					
					    
					            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Product Banner</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'product-banner'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'product-banner'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					         
					
					        	<li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Product Brands</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('productbrands.create')}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('productbrands.show')}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					
					        	<li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Product</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('product.create')}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('product.show')}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					
					
					
					            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Product Details Banner</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'product-single-banner'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'product-single-banner'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					
					            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Common Whatsapp</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'commonwhatsapp'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'commonwhatsapp'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
					
					            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Specifications</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'specifications'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show', ['slug' => 'specifications'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
					
                        </ul>
                    </li>
					
					       
						<li class="treeview">
                        <a href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <span>Social Icons</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'socialicons'])}}">
                                    <span>Create</span>
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'socialicons'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder" aria-hidden="true"></i>
                            <span>Change Image</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('post.create', ['slug' => 'change-image'])}}">
                                    <span>Create</span>
                                    
                                 </a>
                            </li>
                             <li class="">
                                <a href="{{route('post.show',['slug' => 'change-image'])}}">
                                     <span>List</span>
                                 </a>
                             </li>
                        </ul>
                    </li>


                    <!--<li class="treeview">
                        <a href="#">
                            <i class="fa fa-map-marker"></i>
                            <span>Manage Location</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('location.create')}}">
                                    <i class="fa fa-circle-o"></i><span>Add Location</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{route('location.index')}}">
                                    <i class="fa fa-circle-o"></i><span>Locations</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                            </li>

                        </ul>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-plane"></i>
                            <span>Manage Destination</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('destination.create') }}"><i class="fa fa-circle-o"></i>Add destination</a></li>
                            <li><a href="{{ route('destination.show') }}"><i class="fa fa-circle-o"></i> Destinations</a></li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-h-square"></i>
                            <span>Manage Hotels</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('hotel.create') }}"><i class="fa fa-circle-o"></i>Add Hotel</a></li>
                            <li><a href="{{ route('hotel.show') }}"><i class="fa fa-circle-o"></i> Hotels</a></li>

                        </ul>
                    </li>






            <li class="treeview">
                        <a href="#">
                            <i class="fa fa-tags" aria-hidden="true"></i>
                            <span>Manage Categories </span>
                            <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('category.create')}}">
                                    <i class="fa fa-circle-o"></i><span>Add Category</span>
                                     <i class="fa fa-angle-left pull-right"></i>
                                 </a>
                            </li>
                            <li class="">
                                <a href="{{route('category.show')}}">

                                    <i class="fa fa-circle-o"></i> <span>Categories</span>

                                    <i class="fa fa-angle-left pull-right"></i>

                                </a>

                            </li>

                        </ul>
                    </li>



                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dropbox" aria-hidden="true"></i>
                            <span>Manage Packages </span>
                            <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('package.create')}}">
                                    <i class="fa fa-circle-o"></i><span>Add Packages</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{route('package.show')}}">
                                     <i class="fa fa-circle-o"></i> <span>Packages</span>
                                     <i class="fa fa-angle-left pull-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>








                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th" aria-hidden="true"></i>
                            <span>Manage Blogs </span>
                                <span class="pull-right-container">
                                     <i class="fa fa-angle-left pull-right"></i>
                               </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('blog.create')}}">
                                     <i class="fa fa-circle-o"></i> <span>Add Blogs</span>
                                     <i class="fa fa-angle-left pull-right"></i>
                                 </a>
                             </li>
                            <li class="">
                                <a href="{{route('blog.show')}}">
                                    <i class="fa fa-circle-o"></i><span>Blogs</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                            </li>
                         </ul>
                    </li>



                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file-text" aria-hidden="true"></i>
                            <span>Manage Testimonials </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{route('testimonial.create')}}">
                                     <i class="fa fa-circle-o"></i> <span>Add Testimonial</span>
                                      <i class="fa fa-angle-left pull-right"></i>
                                 </a>
                             </li>
                            <li class="">
                                <a href="{{route('testimonial.show')}}">
                                     <i class="fa fa-circle-o"></i> <span>Testimonials</span>
                                     <i class="fa fa-angle-left pull-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('view.triprequests') }}">
                            <i class="fa fa-suitcase"></i>
                            Trip Requests
                         </a>
                    </li>

                    <li>
                        <a href="{{ route('view.bookings') }}">
                            <i class="fa fa-money" aria-hidden="true"></i>
                              Package Bookings
                         </a>
                    </li>
                    <li>
                        <a href="{{ route('view.hotel.bookings') }}">
                            <i class="fa fa-money" aria-hidden="true"></i>
                              Hotel Bookings
                         </a>
                    </li>
                    <li>
                        <a href="{{ route('view.enquiries') }}">
                            <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                             Enquiries
                         </a>
                    </li>
                    <li>
                        <a href="{{ route('password.change') }}">
                            <i class="fa fa-key" aria-hidden="true"></i>
                              Change Password ???
                         </a>
                     </li>-->
                </ul>
            </section>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        @yield('content')



    </div>
    <!-- /.content-wrapper -->



    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg">





    </div>


    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            {{-- <b>Version</b> 2.4.0--}}
        </div>
        <b style="color: black;"> Copyright &copy; 2023 <a href="#">WebApp Tech Solutions</a>.</b>
    </footer>


</div>








   <script src="{{asset('dashboard/bower_components/jquery/dist/jquery.min.js')}}"></script>
   <!-- Bootstrap 3.3.7 -->
   <script src="{{asset('dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
   <!-- FastClick -->
   <script src="{{asset('dashboard/bower_components/fastclick/lib/fastclick.js')}}"></script>
   <!-- AdminLTE App -->
   <script src="{{asset('dashboard/dist/js/adminlte.min.js')}}"></script>
   <!-- Sparkline -->
   <script src="{{asset('dashboard/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
   <!-- jvectormap  -->
   <script src="{{asset('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
   <script src="{{asset('dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
   <!-- SlimScroll -->
   <script src="{{asset('dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
   <!-- ChartJS -->
   <script src="{{asset('dashboard/bower_components/Chart.js/Chart.js')}}"></script>
   <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <script src="{{asset('dashboard/dist/js/jquery.kolorpicker.js')}}"></script>
   <script src="{{asset('dashboard/dist/js/pages/dashboard2.js')}}"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="{{asset('dashboard/dist/js/demo.js')}}"></script>
   <!-- AdminLTE for demo purposes -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

{{--<script>
    jQuery(document).ready(function($) {

// site preloader -- also uncomment the div in the header and the css style for #preloader
        $(window).load(function(){
            $('#preloader').fadeOut('slow',function(){$(this).remove();});
        });

    });
</script>--}}


    @yield('javascript')
</body>
</div>
</html>

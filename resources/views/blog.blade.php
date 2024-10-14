
 @include('includes.header')
      
	  	<style>
.mobile_whatsapp
{
	display:none;
}
@media only screen and (max-width: 600px){
iframe {
    width: 290px !important;
}
}
</style>	

<main class="main__content_wrapper">                <!-- Start breadcrumb section -->        <section class="breadcrumb__section breadcrumb__bg" style="background: url(public/uploads/{{$blog_banner->image}});background-repeat: no-repeat;background-size: cover;">            <div class="container">                <div class="row row-cols-1">                    <div class="col">                        <div class="breadcrumb__content text-center">                            <h1 class="breadcrumb__content--title text-white mb-25">Blog Grid</h1>                            <ul class="breadcrumb__content--menu d-flex justify-content-center">                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>                                <li class="breadcrumb__content--menu__items"><span class="text-white">Blog Grid</span></li>                            </ul>                        </div>                    </div>                </div>            </div>        </section>        <!-- End breadcrumb section -->        <!-- Start blog section -->        <section class="blog__section section--padding">            <div class="container">                <div class="section__heading text-center mb-50">                    <h2 class="section__heading--maintitle">From The Blog</h2>                </div>                <div class="blog__section--inner">                    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-sm-u-2 row-cols-1 mb--n30">   @foreach($blogs as $value) <div class="col mb-30">                            <div class="blog__items">                                <div class="blog__thumbnail">                                    <a class="blog__thumbnail--link" href="{{route('home.blogdetails', ['id' => $value->id])}}"><img class="blog__thumbnail--img" src="public/uploads/{{$value->image}}" alt="blog-img"></a>                                </div>                                <div class="blog__content">                                    <span class="blog__content--meta">{{$value->job_title}}</span>                                    <h3 class="blog__content--title"><a href="{{route('home.blogdetails',['id' => $value->id])}}">{{$value->title}}</a></h3>                                    <a class="blog__content--btn primary__btn" href="{{route('home.blogdetails',['id' => $value->id])}}">Read more </a>                                </div>                            </div>                        </div>                     @endforeach                    </div>                                 </div>            </div>        </section>        <!-- End blog section -->    </main>
 @include('includes.footer')
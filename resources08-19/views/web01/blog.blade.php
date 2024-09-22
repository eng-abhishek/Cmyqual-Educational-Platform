<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png" sizes="16x16">
    <!-- SITE META -->
    <title>cMyQual | Blog</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
   

    <!-- BOOTSTRAP STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- RESPONSIVE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

    <!-- COLORS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/colors.css')}}">
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css'>
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
@media(min-width:1440px)
{
        .new-header.blog-header .header-bg-img
    {
            margin-left: 16.5%!important;
    }
}
@media(min-width:1920px)
{
    .long-established
    {
        margin-top:50px!important;
    }
}
@media(max-width:1024px)
{
    .long-established {
    padding: 0px 0 50px 0;
}
}
@media(max-width:768px)
{
    .header-bg-img
    {
            margin-top: -95%!important;
    }
    .new-header.blog-header .new-header-content {
    padding-top: 10%;
}
.long-established {
    padding: 30px 0 50px 0;
}
}
@media(max-width:414px)
{
    .long-established
    {
        margin-top:40%!important;
    }
    .new-header.blog-header .new-header-content {
    padding-top: 20%;
}
.new-header.blog-header
{
        padding: 6.8% 0 30px 0;
}
.header-bg-img {
    margin-top: -81%!important;
}
}
@media(max-width:360px)
{
    .long-established {
    margin-top: 44%!important;
}
}
</style>
<body>

    <!-- PRELOADER -->
        <!--<div class="cssload-container">-->
        <!--    <div class="cssload-loader"></div>-->
        <!--</div>-->
    <!-- end PRELOADER -->

    <!-- ******************************************
    START SITE HERE
    ********************************************** -->

    <div id="wrapper">

    @include('web.header')

  
        <!--<div class="counter-area pb-100">-->
        <!--    <div class="container">-->
        <!--        <div class="counter-bg">-->
        <!--            <div class="row">-->
        <!--                <div class="col-xl-3 col-lg-3 col-md-6">-->
        <!--                    <div class="counter-wrapper mb-30">-->
        <!--                        <div class="counter-icon f-left">-->
        <!--                            <i class="fa fa-users"></i>-->
        <!--                        </div>-->
        <!--                        <div class="counter-text">-->
        <!--                            <h1><span class="counter">3045</span>+</h1>-->
        <!--                            <span>Active Profile</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col-xl-3 col-lg-3 col-md-6">-->
        <!--                    <div class="counter-wrapper mb-30">-->
        <!--                        <div class="counter-icon f-left">-->
        <!--                            <i class="fa fa-book"></i>-->
        <!--                        </div>-->
        <!--                        <div class="counter-text">-->
        <!--                            <h1><span class="counter">7852</span>+</h1>-->
        <!--                            <span>Available Courses</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col-xl-3 col-lg-3 col-md-6">-->
        <!--                    <div class="counter-wrapper mb-30">-->
        <!--                        <div class="counter-icon f-left">-->
        <!--                            <i class="fa fa-graduation-cap"></i>-->
        <!--                        </div>-->
        <!--                        <div class="counter-text">-->
        <!--                            <h1><span class="counter">9862</span>+</h1>-->
        <!--                            <span>Qualification Shared</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col-xl-3 col-lg-3 col-md-6">-->
        <!--                    <div class="counter-wrapper mb-30">-->
        <!--                        <div class="counter-icon f-left">-->
        <!--                            <i class="fa fa-code"></i>-->
        <!--                        </div>-->
        <!--                        <div class="counter-text">-->
        <!--                            <h1><span class="counter">8963</span>+</h1>-->
        <!--                            <span>Partnership</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
<section class="new-header blog-header">
    <div class="container">
    <div class="row">
    <div class="col-lg-7 col-md-7 col-sm-12">
        <div class="new-header-content">
        <h1>Growing careers</h1>
        <p>Stories about what we do best.</p>
       
        </div>
    </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
       <!-- <img src="images/new-haeder.png" style="max-width:100%;"> -->
       <div class="header-bg-img">
       <img src="{{asset('assets/images/blog-header-bg.png')}}" alt="" srcset="" class="img-responsive">
       </div>
    </div>
    </div>
    </div>
</section>

<section class="long-established">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="content">
                <h3>long established</h3>
                <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....
                </p>
                 <p>May 20th 2020 <span><a href="{{url('blog-details')}}">Read more</a></span></p>
                 </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{asset('assets/images/long-established-img.jpg')}}" alt="" class="img-responsive"> 
            </div>
        </div>
    </div>
</section>

<section class="more-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{asset('assets/images/more-blog-1.jpg')}}" alt="" class="img-responsive">
            <div class="content">
         
                <h3>long established</h3>
                <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....
                </p>
                 <p>May 20th 2020 <span><a href="{{url('blog-details')}}">Read more</a></span></p>
                 </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{asset('assets/images/more-blog-2.jpg')}}" alt="" class="img-responsive">
            <div class="content">
                <h3>long established</h3>
                <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....
                </p>
                 <p>May 20th 2020 <span><a href="{{url('blog-details')}}">Read more</a></span></p>
                 </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{asset('assets/images/more-blog-1.jpg')}}" alt="" class="img-responsive">
            <div class="content">
                <h3>long established</h3>
                <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....
                </p>
                 <p>May 20th 2020 <span><a href="{{url('blog-details')}}">Read more</a></span></p>
                 </div>
            </div>
        </div>
    </div>
</section>
      
        @include('web.footer')

       
    </div><!-- end wrapper -->

    <!-- ******************************************
    /END SITE
    ********************************************** -->

    <!-- ******************************************
    DEFAULT JAVASCRIPT FILES
    ********************************************** -->
 
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/countdown.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('assets/js/all.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>

    <script>
        $(document).ready(function() {
      $("#owl-example").owlCarousel({
        items :3,
        navigation: true,
        navigationText:  [
        "<i class='icon-chevron-left icon-white'><</i>",
        "<i class='icon-chevron-right icon-white'>></i>"
        ],
        pagination: true,
        responsive :true,
       autoPlay: true,
      });
    });
    </script>
</body>


</html>
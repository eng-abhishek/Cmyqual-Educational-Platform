<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png" sizes="16x16">
    <!-- SITE META -->
    <title>cMyQual | Associations</title>
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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
    .get-a-new-job.get-a-new-job3.enter-higher.desktop
    {
        margin-top:0px;
        padding-bottom:30px;
        margin-bottom:0px;
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

<section class="new-header new-header2 new-header3" style="background-image:none;">
    <div class="container">
    <div class="row">
    <div class="col-lg-7 col-md-7 col-sm-12">
        <div class="new-header-content">
        <h1 class="grow-your-career">Personalise member learning</h1>
        <p>No two members have the same learning needs, so it can be hard to offer a the right experience for everyone.  With cMyQual, members can share their professional development records which helps associations see trends and opportunities to tailor and enhance the membership experience.</p>
        </div>
    </div>
        <div class="col-lg-5 col-md-5 col-sm-12">

       <div class="header-bg-img">
       <img src="{{asset('assets/images/header4.jpg')}}" alt="" srcset="" class="img-responsive">
       </div>
    </div>
    </div>
    </div>
</section>
<section class="get-a-new-job get-a-new-job2">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <img src="{{asset('assets/images/learn-more-about-member.svg')}}" alt="" class="img-responsive">
    </div><!--end-of-col-lg-6-->
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="content">
       
        <h3>Learn more about your members</h3>
       <p>
       With cMyQual you can provide an easy way for your members to log their continuing professional development and share it with employers, government bodies or professional associations. </p>
       <p>Spot gaps in your member's knowledge which can be tackled with new learning opportunities to keep them competitive in the job market.
       </p>
       </div><!--end-of-content-->
 
    </div><!--end-of-col-lg-6-->

    </div><!--end-of-row-->
    </div><!--end-of-container-->
    </section>
    <section class="get-a-new-job get-a-new-job3 enter-higher desktop">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="content">
      
        <h3>Continuous Professional Development logs</h3>
        <p>
        In the mad rush before an audit or inspection, the last thing you need is to be chasing down you team for their professional development logs and certificates.</p>

        <p>Our dashboard makes it easy to keep professional records up-to-date so they are ready to access when the time comes.  Organisation accounts are granted access to their member's relevant achievements & logs, to run reports to track licence renewals.
        </p>
        </div><!--end-of-content-->
    </div><!--end-of-col-lg-6-->
    <div class="col-lg-6 col-md-6 col-sm-12">
        <img src="{{asset('assets/images/continous-log.svg')}}" alt="" class="img-responsive">
    </div><!--end-of-col-lg-6-->

    </div><!--end-of-row-->
    </div><!--end-of-container-->
    </section>
    <section class="get-a-new-job get-a-new-job3 enter-higher mobile-prepare">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <img src="{{asset('assets/images/continous-log.svg')}}" alt="" class="img-responsive">
    </div><!--end-of-col-lg-6-->
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="content">
      
        <h3>Continuous Professional Development logs</h3>
        <p>In the mad rush before an audit or inspection, the last thing you need is to be chasing down you team for their professional development logs and certificates.</p>  
        <p>Our dashboard makes it easy to keep professional records up-to-date so they are ready to access when the time comes. Organisation accounts are granted access to their member's relevant achievements & logs, to run reports to track licence renewals.</p>
       
        </div><!--end-of-content-->
    </div><!--end-of-col-lg-6-->

    </div><!--end-of-row-->
    </div><!--end-of-container-->
    </section>
     
<section class="supercharge supercharge2 supercharge3">
    <div class="container text-center">
    <div class="row">    
    <h1>Reforest the planet with your members</h1>
    <p class="text-center">
    Celebrate with your members when they achieve!  For every achievement that is recorded in cMyQual, one tree is planted which will fight climate change.  Each tree can absorb 22kg (50 pounds) of CO2 per year for 30 years. On top of that, these trees contribute to local economic growth, poverty alleviation, food security and biodiversity conservation.
    </p>
    <li class="btn btn-default"><a title="Join for free" href="{{url('employer/login')}}">Get Started</a></li>
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
    

</body>

</html>
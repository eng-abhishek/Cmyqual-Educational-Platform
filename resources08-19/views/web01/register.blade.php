<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png" sizes="16x16">
    <!-- SITE META -->
    <title>cMyQual | Register</title>
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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
.candidate-signup-form h3.heading3
{
    padding-top: 0;
    position: absolute;
    z-index: 1;
    right: 25%;
    bottom: 33%;
    font-size: 25px;
}
.candidate-signup-form h3.heading3:hover
{
    color:#209c72;
}
.candidate-signup-form img:hover 
{
    
    box-shadow: 0px 2px 12px rgb(171 171 171 / 19%);
    color:#209c72;
}
    .candidate-signup-form h3
    {
        padding-bottom: 0px;
        padding-top: 60px;
    }
    .candidate-signup-form h3.heading1
    {
        padding-top: 30px;
    }
    .candidate-signup-form .container
    {
        background-color:transparent;
    }
    .normal-header
    {
        background-color: #fff;
    }

    @media(max-width:414px)
    {
        .candidate-signup-form h3.heading1
        {
            padding-bottom:0px;
            margin-bottom: -30px;
        }
        .employer-link-page
        {
            margin-bottom:-50px;
        }
        form.candidate-signup-form
        {
                padding-top: 15%;
                margin-bottom: 0px;
              padding-bottom: 20%;
        }
        .candidate-signup-form img
        {
            margin-top: 60px;
        }
}
</style>

<body class="dashboard-background">

    <!-- ******
    START SITE HERE
    ****** -->
    <div id="wrapper">
   
     @include('web.header')
   
        <form class="candidate-signup-form" action="">
            <div class="container" style="    width: 80%;"> 
            <div class="row">
            <div class="col-lg-12">
                <h3 class="heading1 text-center mt-0">Get Started</h3>
               
            </div>
            <div class="col-lg-12">

               
            <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="employer-link-page student-signup-link-page">
                    <a href="{{url('user-login')}}">
                    <img src="{{asset('assets/images/life-long-learner-img.jpg')}}" alt="">
                    <h3 class="heading3">LifeLong Learners</h3>
                    </a>
                 
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="employer-link-page">
                    <a href="{{url('employer/login')}}">
                    <img src="{{asset('assets/images/employer-img.jpg')}}" alt="">
                    <h3 class="heading3">Employers</h3>
                    </a>
                       
                    </div>
                </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="employer-link-page learning-signup-link-page">
            <a href="{{url('partner/login')}}">
            <img src="{{asset('assets/images/learning-partner-img.jpg')}}" alt="">
            <h3 class="heading3">learning Partners</h3>
            </a>
    
            </div>
            </div>

            </div>
          </form>

     
</div>
    </div><!-- end wrapper -->

    @include('web.footer')
    <!-- ******
    /END SITE
    ****** -->

    <!-- ******
    DEFAULT JAVASCRIPT FILES
    ****** -->

    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/countdown.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('assets/js/all.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

    
   
</body>


</html>
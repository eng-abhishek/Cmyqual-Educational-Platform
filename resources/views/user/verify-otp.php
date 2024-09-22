<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png" sizes="16x16">
    <!-- SITE META -->
    <title>cMyQual | Verify OTP</title>
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
    @media(max-width:414px)
    {
        .signup-verify
        {
            width: 90%!important;
            margin: 30px auto!important;
            box-shadow: 0 0px 0px rgb(0 0 0 / 9%)!important;
            -webkit-box-shadow: 0 0px 0px rgb(0 0 0 / 9%)!important;
        }
        .new-user-signup-verify 
        {
         padding: 15% 0 0!important;
         }
    }
    @media(max-width:375px)
    {
        .signup-verify #otp
        {
            width: 45% !important;
        }
    }
.normal-header {
    background-color: #fff;
}
.new-user-signup-verify
{
    padding: 15% 0;
}
.signup-verify
{
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgb(0 0 0 / 20%);
    box-shadow: 0 3px 9px rgb(0 0 0 / 20%);
    width: 600px;
    padding: 10px 0 10px 0;
}
.signup-verify h1{font-weight: 600;font-size:18px;color: #1D9B75;padding: 0px 15px 15px;border-bottom: 1px solid #e5e5e5;}
.signup-verify #otp {
    border: 1px solid rgb(25 130 98 / 55%);
    border-radius: 4px;
    padding: 5px 10px;
    font-size: 12px;
    width: 30%;
}
.signup-verify .btn {
    background-color: #1D9B75;
    border: none;
    color: #fff;
    border-radius: 4px;
    padding: 6px 0;
    margin: 20px auto;
    font-size: 14px;
    width: 30%;
    display: block;
}
</style>
<body class="dashboard-background">

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
        
<section class="new-user-signup-verify">
    <div class="container signup-verify">
        <div class="row">
            <div class="col-lg-12 text-center">
            <h1>Verify Your Email</h1>
            <input type="number" class="control otpSignUP" placeholder="Enter Verification Code" id="otp" name="psw" required="">
            <p style="font-style:italic;display:block;text-align:center!important;">*Please check the provided email account, you will receive the verification code within 2 minutes.</p>    
            <a href="javascript:void(0)" style="display:block;margin:5px 0 -5px 0px;color: #1d9b75;font-style:italic;text-decoration: underline;" onclick="resendOTP()">Resend Verification Code</a>
            <button type="button" class="btn" id="btnChekOtpAtSignUP" onclick="btnChekOtpAtSignUP()">Submit</button>
        </div>
        </div>
    </div>
</section>
</div>
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
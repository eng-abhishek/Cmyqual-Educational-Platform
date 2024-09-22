<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from psdconverthtml.com/live/edupress/index-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 09:30:49 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png" sizes="16x16">
    <!-- SITE META -->
    <title>cMyQual | Employer Login</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
<style>
    .candidate-signup-form img
    { 
        
        margin-top:0px!important;
    }
    .candidate-signup-form {
    padding: 100px 0;
}
    @media(max-width:414px)
    {
        .candidate-signup-form h3
        {
            padding-top:15%;
        }
        .candidate-signup-form .login-box
        {
                width: 100%;
                margin: 25px auto;
                height: auto;
        }
    }
</style>   

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
<body>

    <!-- PRELOADER -->
        <div class="cssload-container">
            <div class="cssload-loader"></div>
        </div>
    <!-- end PRELOADER -->

    <!-- ******************************************
    START SITE HERE
    ********************************************** -->

    <div id="wrapper">

    @include('web.header')

       <div class="demo-parallax parallax section looking-photo employer-registration-bg" data-stellar-background-ratio="0.7" style="background-image:url('upload/demo_04.jpg');display:none">
            <div class="container">
                <div class="row centermessage text-center">
                    <div class="col-lg-12">
                        <div class="tagline"><h4>Login
                        </h4></div>
                      
                    </div>

                    
                </div>
            </div>
        </div><!-- end section -->
       

        <form class="candidate-signup-form" method="post" action="{{url('employer-login-post')}}">
            <div class="container">
            <div class="row">
            <div class="col-lg-12">
                <h3 class="heading1 text-center mt-0">Enter Your Login Details</h3>
               
            </div>
            @csrf
            <div class="col-lg-12">
              
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="uname"><b>Username
                  </b></label>
                <input type="email" placeholder="Enter username" name="email" required>
                </div>

                 <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="number"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                  </div>

    
                <div class="col-lg-12">
                    <button type="submit" class="signupbtn" name="btnUserLogin">Login</button>
                </div>

                <div class="col-lg-12">
                    <p class="lost-a-detail">
                        <a href="">Lost account details?</a>
                    </p>
                    <p class="new">
                        New to CMyQual?
                        <a href="{{route('employer-signin')}}">Sign up Now</a>
                    </p>
                </div>

                  <div class="col-lg-12">
                    <h3 class="heading1 text-center mt-0">Login With</h3>
                   
                </div>
               <div class="col-lg-4 col-md-4 col-sm-4 text-center">
               <div class="login-box">
                   <h4><a href="javascript:void(0)" alt=""> <img src="{{asset('assets/images/socmed_icon_go.png')}}" style="margin-top:0px" alt="">Google</a></h4>
               </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                <div class="login-box">
                    <h4><a href="javascript:void(0)"><img src="{{asset('assets/images/socmed_icon_fb.png')}}" alt=""> Facebook</a></h4>
                </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                    <div class="login-box">
                        <h4><a href="javascript:void(0)"><img src="{{asset('assets/images/socmed_icon_li.png')}}" alt=""> Linkedin</a></h4>
                    </div>
                    </div>
            <!-- <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group">
                    <input type="checkbox" id="agree">
                    <label for="agree">By clicking Register, you agree to our <a href="">Terms & Conditions.</a></label>
                  </div>
          
            </div> -->
            </div>
            </div>
            </div>
          </form>
    
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

<!-- Mirrored from psdconverthtml.com/live/edupress/index-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 09:31:09 GMT -->
</html>
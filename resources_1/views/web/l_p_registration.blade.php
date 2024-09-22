<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png" sizes="16x16">
    <!-- SITE META -->
    <title>cMyQual | Learning Partner Registration</title>
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

<style type="text/css">
.error{color:red !important}   
</style>
</head>
<body>

    <div id="wrapper">
        <form class="candidate-signup-form" action="{{route('l-p-signin-post')}}" method="post" onsubmit="return validateform()">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>Learning Partner Sign Up</h3>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="name"><b>Learning Partner Name</b></label>
                            <input type="text" placeholder="" name="organisation_name" id="org_name" required="">
                           
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="name"><b>Learning Partner Website URL</b></label>
                            <input type="text" placeholder="" name="organisation_web" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="admin_name"><b>Admin Full Name</b></label>
                            <input type="text" placeholder="" name="name" id="admin_name" required="">
                            
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="admin_role"><b>Admin Role</b></label>
                            <input type="text" placeholder="" name="role" id="admin_role" required="">
                           
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="email"><b>Admin Email</b></label> 
                            <input type="email" placeholder="" name="email" id="email" required="">
             
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <img src="{{ asset('assets/images/sign-registration-api.jpg')}}" class="api-img" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 admin_user">
                            <label for="username"><b>Username</b></label>
                            <input type="text" placeholder="" name="username" id="username" required="">
                             
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 admin_user_password">
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="" name="password" id="password" required="">
                            <p class="password-para">Your password must be at least 8 characters long and contain at least 1 lowercase letter, uppercase letter and number.
                            </p>
                        
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 api-label">
                            <div class="form-group">
                                <input type="checkbox" id="agree" name="agree" required="">
                                <label for="agree">By clicking Register, you agree to our <a href="">Terms & Conditions.</a></label>
                              
                            </div>
                            <div class="clearfix">
                                <button type="submit" class="signupbtn">Register</button>
                            </div>
                        </div>
  
            </div>
            </div>
            </div>
          </form>
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
     <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript">
$.validator.addMethod("regx", function(value, element, regexpr){          
    return regexpr.test(value);
}, "Please enter a valid pasword.");


    $('.candidate-signup-form').validate({
    rules:{
    organisation_name:{
    required:true,   
    },
    organisation_web:{
    required:true,    
    },
    name:{
    required:true,    
    },
    role:{
    required:true,
    },
    email:{
    required:true, 
    email:true,       
    },
    username:{
    required:true,    
    },
    password:{
    required:true,       
    },
    password:{
    required:true,
    regx: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/,       
    }
    },
    messages:{
    organisation_name:{
    required:'Please enter organisation name',   
    },
    organisation_web:{
    required:'Please enter organisation website', 
    },
    name:{
    required:'Please enter admin full name',    
    },
    role:{
    required:'Please enter admin role',   
    },
    email:{
    required:'Please enter admin email id', 
    email:'Please enter valide admin email id',       
    },
    username:{
    required:'Please enter user name',    
    },
    password:{
    required:'Please enter password', 
    regx:'Please enter valide password'      
    }
    }    
    });
</script>

</body>

</html>
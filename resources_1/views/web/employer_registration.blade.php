<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png" sizes="16x16">
    <!-- SITE META -->
    <title>cMyQual | Employer Registration</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <!-- FAVICONS -->
    

    <!-- BOOTSTRAP STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css')}}">
    <!-- RESPONSIVE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css')}}">

    <!-- COLORS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors.css')}}">
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css')}}">

<style type="text/css">
.error{color:red !important} 
</style>     
</head>
<body>


    <div id="wrapper">
         @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session()->get('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        
        <form class="candidate-signup-form" action="{{route('employer-signin-post')}}" method="post" onsubmit="return validateform()">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>Employer Sign Up</h3>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="organisation-name"><b>Organization Name</b></label>
                            <input type="text" placeholder="" name="organisation_name" id="org_name" required="">
                        
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="organisation-web"><b>Organization Website (Optional)</b></label>
                            <input type="text" placeholder="" name="organisation_web" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="" name="email" id="email" required="">
                           
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="psw"><b>Password</b></label>
                            <input required="" type="password" placeholder="" name="psw" id="password" >
                            <p class="password-para"><br>Your password must be at least 8 characters long and contain at least 1 lowercase letter, uppercase letter and number.</p>
                    
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="role"><b>Role of Person</b></label>
                            <select name="select" id="select" required="">
                               <!--  <option value="select">Select Role</option> -->
                                <option value="hr">HR</option>
                                <option value="recruiter">Recruiter</option>
                            </select>
                       
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="{{asset('assets/images/sign-registration.jpg')}}" alt="" required="">
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 new_registration">
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

    <script src="{{ asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/countdown.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('assets/js/all.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
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
    email:{
    required:true,
    email:true,
    },
    psw:{
    required:true,
    },
    psw:{
    required:true,
    regx: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/,
    },
    select:{
    required:true,    
    }
    },
    messages:{
    organisation_name:{
    required:'Please enter organisation name',
    },
    organisation_web:{
    required:'Please enter organisation website',
    },
    email:{
    required:'Please enter email id',
    email:'Please enter valide email id',   
    },
    psw:{
    required:'Please enter password', 
    regx:'Please enter valide password',   
    },
    select:{
    required:'Please enter role of person',    
    }    
    });
    </script>   
</body>
</html>
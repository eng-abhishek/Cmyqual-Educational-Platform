<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from psdconverthtml.com/live/edupress/index-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 09:30:49 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png" sizes="16x16">
    <!-- SITE META -->
    <title>cMyQual | login</title>
    <!-- SITE META -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
<style>
.error{
 border-color:red !important;   
}   
.signupbtn.register-btn {
    margin-left: 10px!important;
}
@media(max-width:1024px)
{
    .candidate-signup-form {
    padding:17.5% 0!important;
}
}

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
       
               
        <form class="candidate-signup-form" method="post" action="{{url('check-user-login')}}">
            <div class="container">
            <div class="row">
            <div class="col-lg-12">
                <h3 class="heading1 text-center mt-0">Enter Your Login Details</h3>
               
            </div>
            @csrf
            <div class="col-lg-12">
              
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="uname"><b>Email Id<apan class="textdenger">*</apan>
                  </b></label>
                 <input type="email" placeholder="Enter user id" name="email" required>
                 @error('email')
                 <div class="validate_err" style="font-size: 15px !important;color: red !important;">{{ $message }}</div>
                 @enderror
                </div>

                 <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="number"><b>Password<apan class="textdenger">*</apan></b></label>
                    <input  type="password" placeholder="Enter Password" name="password" required>
                 @error('password')
                 <div style="font-size: 15px !important;color: red !important;" class="validate_err">{{ $message }}</div>
                 @enderror  
                  </div>

                <div class="col-lg-12">
                    <button type="submit" class="signupbtn" name="btnUserLogin">Login</button> 
                    <a href="{{url('user-signup')}}"><button type="button" class="signupbtn register-btn" style="margin-left:80px" name="btnUserLogin">Register</button></a>
                </div>

                @if(session('error'))    
                <div class="col-lg-12">
                    <p class="oops" style="font-size: 15px !important;text-align: center!important;color: red !important;"> Oops! There was a problem:</p>  
                    <p style="font-size: 15px !important;text-align: center!important;color: red !important;">- Email address and password not found.</p>
                    <p class="please-try-again" style="font-size: 15px !important;text-align: center!important;color: red !important;">Please try again or register.</p>
                </div>
                @endif
                 @if(session()->has('failure'))

                    <div class="col-lg-12">
                        <p style="font-size: 15px !important;text-align: center!important;color: red !important;">{{session()->get('failure')}}</p>
                    </div>
                @endif
                
                <div class="col-lg-12 lost-a-detail-col">
                    <p class="lost-a-detail">
                      <a href="javascript:void(0)" data-toggle="modal" data-target="#forgetPassModal">Lost account details?</a>
                    </p>
                    <p class="new">
                        New to CMyQual?
                        <a href="{{url('user-signup')}}">Sign up Now</a>
                    </p>
                </div>

                  <div class="col-lg-12">
                    <h3 class="heading1 text-center mt-0">Login With</h3>
                   
                </div>
               <div class="col-lg-4 col-md-4 col-sm-4 text-center">
               <div class="login-box">
                   <h4><a href="{{route('user-login-google')}}"><img src="{{asset('assets/images/socmed_icon_go.png')}}" style="margin-top:0px" alt=""/> Google</a></h4>
               </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                <div class="login-box">
                    <h4><a href="{{route('user-login-facebook')}}"><img src="{{asset('assets/images/socmed_icon_fb.png')}}" style="margin-top:0px" alt=""/> Facebook</a></h4>
                </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                    <div class="login-box">
                        <h4><a href="{{route('user-login-linkedin')}}"><img src="{{asset('assets/images/socmed_icon_li.png')}}" style="margin-top:0px" alt=""/> Linkedin</a></h4>
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
    
     
<!-- Modal -->
  <!-- Modal -->
  <div class="modal fade" id="forgetPassModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content text-center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <img src="images/invite.jpg" alt="">
          <h4 class="modal-title text-center">Reset your password</h4>
       
        </div>
        <div class="modal-body">
        <div class="space text-center">
        <form method="post" id="mailResetPassword" action="{{url('emailConfirmOTP')}}">    
        <input type="email" name="useremail" id="useremail" placeholder="Please Enter Email Id" style="height: 30px;
    border-radius: 0;
    box-shadow: none;
    background-color: #fff;
    border: 1px solid rgb(62 163 164 / 55%);
    padding: 0 10px;" required>  
    
        <button type="submit" name="btnemailConfirmOTP" id="btnemailConfirmOTP" value="Submit" style="background: #1D9B75!important;
    padding: 3px 70px;
    text-transform: capitalize;
    font-family: 'Lato' ,sans-serif!important;
    border: none;
    color: #fff;
    margin-top: 10px;">Submit</button>
    
    <!--<a href="javascript:void(0)" id="resendOTP" style="display:none;margin:5px 0 -5px 0px;color: #1d9b75;font-style:italic;text-decoration: underline;background-color: white !important" onclick="resendOTP()">Resend OTP</a>-->
 *<p style="font-style:italic;display:none" id="verifyMSG">*Please check the provided email account, you will receive the verification code within 2 minutes.</p>
<br><br>
<input type="number" name="reset_password_otp" id="otpbox" placeholder="Enter Verification Code" style="height: 30px;border-radius: 0;box-shadow: none;
    background-color: #fff;
    border: 1px solid rgb(62 163 164 / 55%);
    padding: 0 5px;display:none;width:171px">
<button  type="button" id="verifyOTP" style="display:none;background: #1D9B75!important;padding: 6px 72px;text-transform: capitalize;font-family: 'Lato' ,sans-serif!important;border: none;color: #fff;margin-top: 10px;">Verify</button>
    <br><br>
 
    <input type="password" name="resetPasswordBox" id="resetPasswordBox" placeholder="Enter new password" style="height: 30px;border-radius: 0;box-shadow: none;
    background-color: #fff;
    border: 1px solid rgb(62 163 164 / 55%);
    padding: 0 10px;display:none">

     <button type="button" id="btnNewpassword" style="display:none;background: #1D9B75!important;
    padding: 3px 48px;
    text-transform: capitalize;
    font-family: 'Lato' ,sans-serif!important;
    border: none;
    color: #fff;
    margin-top: 10px;">New Password</button>
    
    
        @csrf<br>
    
        <!--<a href="#" class="btn btn-primary" type="button" style="cursor:pointer;"></a>-->
        </form>
        </div>
        <div class="modal-list">

        </div>
        </div>
      </div>
      
    </div>
  </div>
    
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
     $(function(){
      $('#signup_popup').fadeOut(6000);
     });  
     
     $('#mailResetPassword').validate({
 errorPlacement: function(){
            return false;  // suppresses error message text
        }
});

$('#btnemailConfirmOTP').on('click',function(){
//emailConfirmOTP

if($('#mailResetPassword').valid()){
 $.ajax({
url:"{{url('emailConfirmOTP')}}",
method:'POST',
data:{email:$('#useremail').val(),'_token':'{{csrf_token()}}'},
success:function(data){
console.log(data);
if(data==505){
alert('We could not find the user with this email address, Please try again.');
$('#otpbox').hide();    
}else if(data==200){
$('#otpbox').show();
$('#verifyOTP').show();
$('#verifyMSG').show();
$('#resendOTP').css({"display": "block"});

}else if(data==404){
alert('Please enter valid otp'); 
$('#resetPasswordBox').hide(); 
}else if(data==202){
$('#resetPasswordBox').show();    
}else{
    
}
}
})   
}
$('#useremail').val('');
return false;
});  
 
 
$('#verifyOTP').on('click',function(){

$.ajax({
url:"{{url('verifyResetPassOTP')}}",
method:'POST',
data:{reset_password_otp:$('#otpbox').val(),'_token':'{{csrf_token()}}'},
success:function(data){
console.log(data);
if(data==404){
alert('Invalid Verification Code, Please try again.'); 
$('#resetPasswordBox').hide(); 
}else if(data==202){
$('#resetPasswordBox').show();    
$('#btnNewpassword').show();
}else{
    
}
}
})
$('#otpbox').val('');    
}); 


$('#btnNewpassword').on('click',function(){
if($('#resetPasswordBox').val().length>=8 && $('#resetPasswordBox').val().length<=15){
    
//var regx= /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

var newpass=$('#resetPasswordBox').val();
//if(regx.test(newpass)){

$.ajax({
url:"{{url('userChangePassword')}}",
method:'POST',
data:{newPassword:$('#resetPasswordBox').val(),'_token':'{{csrf_token()}}'},
success:function(data){
console.log(data);
if(data==606){
alert('Your password change successfully');
window.location.href='';
}else if(data==707){

}else{
    
}
}
})
$('#resetPasswordBox').val('');  

/*}else{

alert('The password must contain 8-15 characters, including uppercase, lowercase, special character and numbers.');
return false;
    
}*/
}else{
alert('The password must contain 8-15 characters.');
return false;
}
}); 
     
   </script>
</body>

<!-- Mirrored from psdconverthtml.com/live/edupress/index-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 09:31:09 GMT -->
</html>
<head><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HZ81K85X5Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HZ81K85X5Z');
</script></head>
<?php
error_reporting(1);
use App\Models\User;
use App\Models\Student;
$id=Auth::user()->id;
$user_data=Student::where('user_id',$id)->first();
?>
<style>
    @media(min-width:1440px)
    {
        .nav.navbar-nav.navbar-right
        {
            margin-top:0px!important;
        }
        .dropdown2 {
    margin-top: -65px!important;
}
.btn.btn-default.sign-in-btn.after-logout-btn {
    margin-top: -10px!important;
}
.normal-header.affix a.navbar-brand img {
    margin-top: -20px!important;
}
a.navbar-brand img {
    margin-top: -20px!important;
}
.normal-header.affix .dropdown2 {
    margin-top: -68px!important;
}

    }


    @media(max-width:1024px)
    {
        .nav.navbar-nav.navbar-right {
    padding-right: 27%;
        }
        .dropdown2 {
    right: 70px;
}
    }

    @media(max-width:768px)
    {
        .btn.btn-default.sign-in-btn.after-logout-btn
        {
            left: -90px!important;
        }
        .profile-pic
        {
            margin-left: -70px!important;
        }
        .drop-list.drop-list2
        {
            right: 20px;
        }
        .drop-list.drop-list2 li.btn.btn-default.sign-in-btn
        {
            margin-left: 50px;
        }
        ul.hover-menu.hover-menu2
        {
            margin-left: -15px!important;
        }
        .dropdown2 {
    right: 20px!important;
}
    }
    @media(max-width:414px)
    {
        ul.dropdown-menu-new
        {
            z-index: 9;
            margin-left: 0!important;
            padding: 5px 0px!important;
            width: 151px!important;
        }
        
    }
.dropdown-new:hover ul.dropdown-menu-new
{
    display: block;
}
ul.dropdown-menu-new
{
    list-style: none;
    border: 1px solid rgb(29 154 117 / 40%);
    border-radius: .25rem;
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 18%);
    background-color: #fff;
    padding: 10px;
    width: 150px;
    position: absolute;
    margin-left: -30px;
    display:none;
}
ul.dropdown-menu-new li
{
    padding-bottom: 5px;
}
ul.dropdown-menu-new li a
{
    color:#198262;
    font-weight: 500;
}
.normal-header .navbar-nav ul.dropdown-menu-new li a:hover {
    background-color: rgb(255 255 255 / 0%)!important;
    color:#333!important;
}
.btn.btn-default.sign-in-btn.after-logout-btn {
    position: absolute!important;
    left: -150px;
}
.sign-in-dropdown-content
{
    right:17px;
}
    @media(min-width:1440px)
{
    .sign-in-main.sign-in-main-new .profile-pic
    {
        margin-top: 0px!important;
        margin-left: -70px!important;
    }
    .sign-in-dropdown-content {
    top: 58px!important;
    right: -75px!important;
    }
    .btn.btn-default.sign-in-btn.after-logout-btn {
    top: 17px!important;
    left: -60px!important;
}
    .drop-list.drop-list2
    {
        top: 0px!important;
        right: 110px!important;
    }
    ul.hover-menu.hover-menu2 {
    margin-left: 20px!important;
    }
    .sign-in-main.sign-in-main-new .profile-pic img
    {
        margin-left: 50px!important;
    }
    li.btn.btn-default.get-start-btn
    {
       bottom: -108px!important;
    }
}

@media(min-width:1920px)
{
    li.btn.btn-default.get-start-btn {
    bottom: -88px!important;
}
.dropdown2 {
    margin-top: -45px!important;
}
.normal-header.affix .dropdown2 {
    margin-top: -48px!important;
}
.btn.btn-default.sign-in-btn.after-logout-btn {
    top: 18px!important;
}
.sign-in-dropdown-content {
    top: 48px!important;
}
.sign-in-main.sign-in-main-new {
    position: fixed!important;
    right: 130px!important;
    top: 10px!important;
}
.drop-list.drop-list2 {
    top: 25px!important;
    right: 270px!important;
}
}

.sign-in-main.sign-in-main-new
{
    position: fixed!important;
}
ul.hover-menu.hover-menu2
{
    margin-left: -38px;
    margin-top: 13px!important;
    width: 100px;
    list-style: none;
    border-radius: 8px!important;
    padding:10px 0px 10px 0px;

}
ul.hover-menu.hover-menu2 li
{
    padding-left:15px;
}
ul.hover-menu.hover-menu2 li:hover , ul.hover-menu.hover-menu2 li a:hover
{
    background: #18b888!important;
    border-radius:0px!important;
}
.drop-list.drop-list2
{
    position: absolute;
    z-index: 9;
    top: 30px;
    right: 60px;
    color: #212121cc!important;
}
.drop-list.drop-list2 li.btn.btn-default.sign-in-btn
{
    background: transparent!important;
    padding: 0px!important;
    color: #212121cc!important;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<header class="header normal-header" data-spy="affix" data-offset-top="197">
            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="container-full">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{url('')}}"><img src="{{asset('assets/images/cmyqual-logo-header.png')}}"></a>
                        </div>
                    

                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">

                             

                                <li><a href="{{url('learners')}}">Learners</a></li> 
                                <li class="dropdown-new"><a href="javascript:void(0)" class="dropdown-toggle-new">Partners <span class="caret"></span></a>

                                <ul class="dropdown-menu-new">
                                <li><a href="{{url('employers')}}">Employers</a></li>
                                <li><a href="{{url('associations')}}">Associations</a></li>
                                <li><a href="{{url('online-learning-partners')}}">Online Learning Partners</a></li>
                                <li><a href="{{url('learning-institutions')}}">Learning Institutions</a></li>
                                <li><a href="{{route('employer-signin')}}">Partner Signup</a></li>   
                            </ul>
                                         <!-- <div class="sign-in-dropdown-content">

                                <a href="{{route('user-login')}}">Life Long Learners</a>
                                <a href="{{url('employer/login')}}">Employers</a>
                                <a href="{{url('partner/login')}}">Learning Partners</a>
                                
                               </div> -->
                                <!-- <li><a href="{{url('associations')}}">Associations</a></li>
                                <li><a href="{{url('learning-institutions')}}">Learning institutions</a></li>
                                <li><a href="{{url('online-learning-partners')}}">Online learning Partners</a></li> -->
                                <li><a href="{{url('about-us')}}">About us</a></li>
                                <li><a href="{{url('sustainability')}}">Sustainability Commitment</a></li>
                                <li><a href="{{url('blog')}}">Blog</a></li>
                                 <li class="dropdown normal-menu has-submenu mobile-get-started-desktop">
                                    <a href="{{url('get-started')}}">Get Started</a>
                                 </li>
                             
                   <div class="sign-in-main2">
                               <!-- <div> -->
                                @if(Auth::user()->id) 
                                <li class="btn btn-default sign-in-btn"><a title="sign in" href="{{url('user/logout')}}">Logout</a></li>
                                
                                @else
                                 <li class="btn btn-default sign-in-btn2"><a title="sign in" href="{{route('user-login')}}">Login</a></li><!---mobile-sign-in-desktop--->
                                <!-- <div class="sign-in-dropdown-content2">
                                <a href="{{route('user-login')}}">Life Long Learners</a>
                                <a href="{{url('employer/login')}}">Employers</a>
                                <a href="{{url('partner/login')}}">Learning Partners</a>
                                </div> -->
                                @endif
                               
                             
                               <!-- </div> -->
</div>
                             </ul>
                         
                            <ul class="nav navbar-nav navbar-right" style="position: absolute;right: 0;">
                                <div class="dropdown2">
                                
                                <li class="dropbtn btn btn-default get-start-btn">
                                    <a title="Get Started" href="{{url('get-started')}}">Get Started</a>
                                </li>
                 
                        <div class="sign-in-main sign-in-main-new"> 
                     
                        @if(Auth::user()->id) 
                       <div class="profile-pic" style="padding-left: 0px;margin-top: 40px;margin-left: -90px;">
                        @if($user_data->photos)

                     
                        @if(!(substr($user_data->photos, 0, 8) == 'https://'))
                        <img style="clip-path: circle(30%);height: auto;width:3.1rem;height: 5rem;width: auto;margin-bottom: -8px;" src="{{asset('public/uploads/user/'.$user_data->photos)}}" width="100" height="100" alt="" class="profile-circle-pic"><!---height: 55px;width: 100px;border-radius: 35%;----->
                        @else
                        <img style="clip-path: circle(30%);height: auto;width:3.1rem;height: 5rem;width: auto;margin-bottom: -8px;" src="{{$user_data->photos}}" width="100" height="100" alt="" class="profile-circle-pic"><!---height: 55px;width: 100px;border-radius: 35%;----->
                        @endif


                        
                        @else
                        <img style="clip-path: circle(30%);height: auto;width:3.1rem;height: 5rem;width: auto;margin-bottom: -8px;" src="{{asset('assets/images/default_user.jpeg')}}" width="100" height="100" alt="" class="profile-circle-pic"><!---height: 55px;width: 100px;border-radius: 35%;----->
                        @endif



                      <div class="dropdown-list dropdwn-list2">           
                         
                                <div class="drop-list drop-list2"><li class="btn btn-default sign-in-btn">{{substr(str_replace(',',' ',$user_data->name),0,12)}}<span class="fa fa-angle-down"></span></li></div>
                                <ul class="hover-menu hover-menu2">
                          <li><a href="{{url('user-profile')}}">My Profile</a></li>
                          <li><a href="{{url('user/edit-profile')}}">Edit Profile</a></li>
                          <li><a href="{{url('user/logout')}}">Logout</a></li>
                        </ul>
                        </div>
                        </div>
                    @else
                             <li class="btn btn-default sign-in-btn after-logout-btn"><a title="sign in" href="{{route('user-login')}}">Login</a></li>
                          <!---mobile-sign-in-desktop--->
                                <!-- <div class="sign-in-dropdown-content">

                                <a href="{{route('user-login')}}">Life Long Learners</a>
                                <a href="{{url('employer/login')}}">Employers</a>
                                <a href="{{url('partner/login')}}">Learning Partners</a>
                                
                               </div> -->
                   @endif

                               </div>                                
                              </ul>
                            </div>
                            <!-- end dropdown -->
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                    <!--/.container-fluid -->
                </nav>
                <!-- end nav -->
            </div>
            <!-- end container -->
        </header>
        <!-- end header -->
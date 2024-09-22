<style>
.notification-dropdown-list
{
    display: inline;
}
.notification-dropdown-list:hover ul.notification-hover-menu
{
    display: block;
}
ul.notification-hover-menu
{
    padding: 0px;

    margin-top: 0px!important;
    position: absolute;
    margin: .125rem 0 0 -90px;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem;
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 18%);
    display: none;
    padding-left: 0;
    max-width: 170px;
    min-width: 170px;
}
ul.notification-hover-menu li{display:block;margin-left: 0;transition:0.5s;padding: 10px 7px 7px 10px;text-align: left;}
ul.notification-hover-menu li:hover{background-color: #1D9B75;color:#fff!important;}
ul.notification-hover-menu li a:hover , ul.notification-hover-menu li i:hover{color:#fff!important;}
ul.notification-hover-menu li a{color: #212529;}
ul.notification-hover-menu li a i{font-size:13px;padding-right: 5px;}
img.profile-circle-pic
{
        margin-bottom: -20px;
}
body.leftmenu #wrapper {
    padding-top: 76px;
}
ul.hover-menu
{
    margin-left:0px;
}

.notification-drop-list span.badge{color: #fff !important;background-color:#1D9B75;position: absolute;top: 2px;
    margin-left: -34px;
    font-size: 10px;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    padding: 3px 0 3px 0;
    margin-left: -36px;
    font-size: 10px;}

img.profile-circle-pic {max-width:100%;padding-top: 0px!important;}
@media(max-width:1024px)
{
    .logout-bar ul li
    {
            margin-left: -5px;
    }
}
@media(max-width:360px)
{
    .profile-pic img {
    max-width: 20%!important;
}
.profile-pic
{
    width:119px;
}
.logout-bar ul
{
    margin-right: -10px;
}
}
@media(max-width:375px)
{
    .col-lg-6.col-md-6.col-sm-4.space {
    margin-top: 0px;
}
.add-field-of-study .btn
{
    margin-top: 25px!important;
    margin-left: 10px;
}
}
@media(max-width:414px)
{
    .profile-pic img {
    max-width: 30%!important;
}
.logout-bar img {
    max-width: 65%;
}
img.profile-circle-pic  {
    max-width: 50%!important;
    margin-top: 0px;
}
.defaultform.updateprofile {
    padding-bottom: 0px;
}
#education .agreemant {
    width: 100%;
    height: 50px;
    margin-top: 3%;
}
.logout-bar
{
        padding: 5px 0 10px 0px;
}
.logout-bar ul li i
{
        font-size: 16px;
}
.add-field-of-study .btn {
    padding: 7px 10px;
    font-size: 11px;
    margin-top: 0px;
}
.col-lg-6.col-md-6.col-sm-4.space
{
    margin-top: 20px;
}
#about , #education{
    padding-top: 30px!important;
}
.defaultform.updateprofile.update2 .col-lg-3.col-md-3.col-sm-3.space:last-child ,.section.education-edit .col-lg-6.col-md-6.col-sm-6{
    margin-top: 20px;
}
.add-field-of-study span
{
    margin-left:0px;
}
select[multiple], select[size] {
    height: 50px!important;
}

}
    
    .logout-bar ul li p
    {
        background: rgb(255 0 0 / 34%);
    padding: 5px 10px;
    margin-right: 10px;
        color: rgba(33, 33, 33, 0.8);
    }
     .logout-bar ul li p a
     {
          color: rgba(33, 33, 33, 0.8);
     }
          .logout-bar ul li p a:hover
     {
          color: rgba(33, 33, 33, 0.8)!important;
     }
 .alert-warning
 {
     margin-right: 20px!important;
    padding: 5px 10px!important;
        margin-bottom: 0!important;
            font-size: 11px;
 }
   .logout-bar img
   {
       padding-top:20px;
   }
   .logout-bar ul
   {
       margin-top:-10px;
   }
</style>
@php //use App\Models\User;
//       use DB;
//     //   $userInfo=User::find(session()->get('user-login-id'));
//       $userInfo=User::find(Auth::user()->id);
//       $userImg=DB::table('students')->where('user_id',$userInfo->id)->get();
@endphp
<!--By shashank-->

@php
    $id = Auth::user()->id;
    $userInfo =  \App\Models\User::find($id);
    $user_data =  \App\Models\Student::where('user_id', $userInfo->id)->first();
    $stuId=$user_data->id;
@endphp

 @php


    $profil_notification = \App\Models\Student::where('is_viewed_user', '!=', 0)->where('id',$stuId)->count();

    $ach_notification = \App\Models\Achivement::where('is_viewed_user', '!=', 0)->where('student_id',$stuId)->count();
    
    $go_notification = \App\Models\Student_goal::where('is_viewed_user', '!=', 0)->where('student_id',$stuId)->count();

    $cp_notification = \App\Models\Cpdlog::where('is_viewed_user', '!=', 0)->where('student_id',$stuId)->count();
  
    $sh_notification = \App\Models\Shared_list::where('is_viewed_user', '!=', 0)->where('student_id',$stuId)->count();
  
    $totalnoti=$ach_notification+$go_notification+$cp_notification+$sh_notification;
    @endphp

<!--By shashank ends here-->
            <div class="logout-bar">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-6">

                  <a href="{{url('')}}"><img src="{{asset('assets/images/cmyqual-logo-header.png')}}" class="img-responsive"></a>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                 <ul>
                 <div class="notification-dropdown-list">
                   <li>
                   <i class="fa fa-bell-o" aria-hidden="true"></i><br>
                   <div class="notification-drop-list"><span>Notifications <span class="badge">{{$profil_notification+$ach_notification+$go_notification+$cp_notification+$sh_notification}}</span> </span></div>
                   <ul class="notification-hover-menu">
                       @if($totalnoti>0)

                          @if($ach_notification>0)
                          <li><a href="{{url('update_achivement_notification')}}"><i class="fa fa-dot-circle-o"></i> {{$ach_notification}} New Achivement</a></li>
                          @endif

                          @if($go_notification>0)
                          <li><a href="{{url('update_goal_notification')}}"><i class="fa fa-dot-circle-o"></i> {{$go_notification}} Goal</a></li>
                          @endif

                           @if($cp_notification>0)
                          <li><a href="{{url('update_cpdlog_notification')}}"><i class="fa fa-dot-circle-o"></i> {{$cp_notification}} New CPD Log</a></li>
                           @endif

                           @if($sh_notification>0)
                          <li><a href="{{url('update_sharedlist_notification')}}"><i class="fa fa-dot-circle-o"></i> {{$sh_notification}} New Shared List</a></li>
                           @endif

                          @if($profil_notification>0)
                          <li><a href="{{url('update_profile_notification')}}"><i class="fa fa-dot-circle-o"></i> {{$profil_notification}} New Profile</a></li>
                          @endif

                         @else
                        <!--  <li><a href="javascript:"><i class="fa fa-dot-circle-o"></i> </a></li> -->
                        @endif  
                   </ul> 
                  </li>
                  </div>
                    @if(Auth::user()->id)
                   <li>
                     
                    <div class="profile-pic" style="padding-left: 35px;">
                     @if($user_data->photos)
                        @if(!(substr($user_data->photos, 0, 8) == 'https://'))
                     <img style="clip-path: circle(30%);height: auto;width:3.1rem;height: 5rem;width: auto;margin-bottom: -8px;" src="{{asset('public/uploads/user/'.$user_data->photos)}}" width="100" height="100" alt="" class="profile-circle-pic"><!---height: 55px;width: 100px;border-radius: 35%;----->
                        @else
                        <img style="clip-path: circle(30%);height: auto;width:3.1rem;height: 5rem;width: auto;margin-bottom: -8px;" src="{{$user_data->photos}}" width="100" height="100" alt="" class="profile-circle-pic"><!---height: 55px;width: 100px;border-radius: 35%;----->
                        @endif
                        @else
                        <img style="clip-path: circle(30%);height: auto;width:3.1rem;height: 5rem;width: auto;margin-bottom: -8px;" src="{{asset('assets/images/default_user.jpeg')}}" width="100" height="100" alt="" class="profile-circle-pic"><!---height: 55px;width: 100px;border-radius: 35%;----->
                        @endif
                      
                      <div class="dropdown-list">
                        <div class="drop-list">{{substr(str_replace(',',' ',$user_data->name),0,12)}} <span class="fa fa-angle-down"></span></div>
                        <ul class="hover-menu">
                          <li><a href="{{url('user-profile')}}">My Profile</a></li><br>
                          <li><a href="{{url('user/edit-profile')}}">Edit Profile</a></li><br>
                          <li><a href="{{url('user/logout')}}">Logout</a></li>
                        </ul>
                      </div>
                    </div>
                   </li>
                   @else @endif
                 </ul>
                </div>
              </div>
            </div>         
            </div>

           
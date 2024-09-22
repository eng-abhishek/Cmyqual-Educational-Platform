<style>
img.profile-circle-pic
{
        margin-bottom: -20px;
}
body.leftmenu #wrapper {
    padding-top: 76px;
}

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
                    
                   <li>
                   <i class="fa fa-bell-o" aria-hidden="true"></i><br>
                   <span>Notifications</span>
                   </li>
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

           
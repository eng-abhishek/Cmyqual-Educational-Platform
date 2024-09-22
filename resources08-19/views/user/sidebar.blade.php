<div id="sidebar-wrapper">

            <a class="navbar-brand with-text"><img src="images/cmyqual-logo.png" class="dashboard-logo"></a>
            <ul class="sidebar-nav">
                <li class="active"><a href="{{url('user-profile')}}">Home <span><i class="fa fa-home" aria-hidden="true"></i></span></a></li>
              
                <li id="active-goal"><a href="{{url('user/goal')}}">Goals <span><i class="fa fa-bullseye" aria-hidden="true"></i></span></a></li>
                <li id="active-achievement"><a href="{{url('user/achievement')}}">Achievements <span><i class="fa fa-trophy"></i></span></a></li>
                <li id="active-log"><a href="{{url('user/cpd-log')}}">CPD Logs <span><i class="fa fa-info-circle" aria-hidden="true"></i></span></a></li>
                <li id="active-list"><a href="{{url('user/shared')}}">Shared Lists<span><i class="fa fa-share-alt"></i></span></a></li>
    @php
    $id = Auth::user()->id;
    $userInfo =  \App\Models\User::find($id);
    $user_data =  \App\Models\Student::where('user_id', $userInfo->id)->first();

@endphp
@if($user_data->work_exp)
                <button class="back-to-sign-in __web-inspector-hide-shortcut__"> <a href="{{url('public/uploads/student_cv/'.$user_data->work_exp)}}" target="_blank"><i>Click to view cv</i></a></button>
@else
@endif 
              
            </ul>

        </div>

<script>
//  $(document).ready(function () {
 
//     $("#menu-sidebar").click(function () {
//         $(".sidebar-nav a").hide();
       
//     });
// });
</script>


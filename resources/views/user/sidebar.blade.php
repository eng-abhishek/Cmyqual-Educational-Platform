<style>
    body.leftmenu #sidebar-wrapper {
    width: 260px;
}
body.leftmenu #wrapper.toggled #sidebar-wrapper
{
    width: 42px !important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .menuopener {
    left: 37px;
}
body.memberprofile .menuopener
{
    margin-left:5px;
}
body.leftmenu .sidebar-nav li a
{
    margin-left: 20px;
}
    #active-goal .fa.fa-info-circle
    {
        position: absolute;
        z-index: 9;
        top: 19px;
        left: 25%;
        font-size: 13px;
    }
    #active-goal .tooltip
    {
        top: -9.6094px!important;
        left: 90px!important;
    }
    #active-goal .tooltip-inner 
    {
    text-align: right;
    width: 128px;
    font-size: 11px;
    padding: 5px 10px 5px 0px;
    border: 0.847222px solid rgba(0, 0, 0, 0.12);
    background-color: #ffffff!important;
    color: #333!important;
    }


    #active-achievement .fa.fa-info-circle
    {
        position: absolute;
        z-index: 9;
        top: 19px;
        left: 47%;
        font-size: 13px;
    }
    #active-achievement .tooltip
    {
        top: -47.6094px!important;
        left: 140px!important;
    }
    #active-achievement .tooltip-inner 
    {
    text-align: right;
    width: auto;
    font-size: 11px;
    padding: 5px 10px 5px 0px;
    border: 0.847222px solid rgba(0, 0, 0, 0.12);
    background-color: #ffffff!important;
    color: #333!important;
    }


    #active-log .fa.fa-info-circle.color-circle
    {
        position: absolute;
        z-index: 9;
        top: 19px;
        left: 35%;
        font-size: 13px;
    }
    #active-log .tooltip {
        top: -139.6094px!important;
        left: 112px!important;
}
    #active-log .tooltip-inner 
    {
    text-align: right;
    width: 110px;
    font-size: 11px;
    padding: 5px 10px 5px 0px;
    border: 0.847222px solid rgba(0, 0, 0, 0.12);
    background-color: #ffffff!important;
    color: #333!important;
    }


    #active-list .fa.fa-info-circle
    {
        position: absolute;
        z-index: 9;
        top: 19px;
        left: 41%;
        font-size: 13px;
    }
    #active-list .tooltip
    {
        top: -46.6094px!important;
        left: 127px!important;
    }
    #active-list .tooltip-inner 
    {
    text-align: right;
    width: 104px;
    font-size: 11px;
    padding: 5px 10px 5px 0px;
    border: 0.847222px solid rgba(0, 0, 0, 0.12);
    background-color: #ffffff!important;
    color: #333!important;
    }
</style>
<div id="sidebar-wrapper">

            <a class="navbar-brand with-text"><img src="images/cmyqual-logo.png" class="dashboard-logo"></a>
            <ul class="sidebar-nav">
                <li class="active"><a href="{{url('user-profile')}}">Home <span><i class="fa fa-home" aria-hidden="true"></i></span></a></li>
               <li id="active-goal"><a href="{{url('user/goal')}}">Goals <span><i class="fa fa-bullseye" aria-hidden="true"></i></span></a> <a href="#" data-toggle="tooltip" data-placement="right" title="Use this tool to set goals or reach out to cMyQual team to set initial goals."><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                <li id="active-achievement"><a href="{{url('user/achievement')}}">Achievements <span><i class="fa fa-trophy"></i></span></a> <a href="#" data-toggle="tooltip" data-placement="right" title="Upload past certificates, licenses, achievements, microcredentials, badges or any other professional documents to this safe and encrypted space."><i class="fa fa-info-circle" aria-hidden="true"></i></a></li> 
                <li id="active-log"><a href="{{url('user/cpd-log')}}">CPD Logs <span><i class="fa fa-info-circle" aria-hidden="true"></i></span></a> <a href="#" data-toggle="tooltip" data-placement="right" title="Add your ongoing professional practice activities such as conferences, Learning and Development hours, sessions delivered, relevant to your current professional role - Its is normally referred to as CPD (Continuous Professional Development) in the UK and CLE (Continuous Learning) in the USA"><i class="fa fa-info-circle color-circle" aria-hidden="true"></i></a></li>
                <li id="active-list"><a href="{{url('user/shared')}}">Shared Lists<span><i class="fa fa-share-alt"></i></span></a> <a href="#" data-toggle="tooltip" data-placement="right" title="This is where you can share the documents or files you want from your cMyQual profile with whomever you wish - colleagues, managers, HR etc"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>

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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script>
//  $(document).ready(function () {
 
//     $("#menu-sidebar").click(function () {
//         $(".sidebar-nav a").hide();
       
//     });
// });
</script>


@extends('user.layout.layout')
@section('title','cMyQual | Goals')
@section('content')
<style>
  @media(max-width:360px)
  {
    .modal-body form .modal-list ul li input#goalname {
    margin-left: 5px!important;
    }
    .box .chart.chart1 span {
    margin-left: -63%!important;
}
#ViewGoalModel .modal-content, #changeStatusModel .modal-content {
    max-width: 42%!important;
}
#getLabelActivity .changestatusModalCheckbox label {
    font-size: 10px!important;
}
  }
  @media(max-width:375px)
  {
    .chart.chart1 span {
    margin-left: -61%!important;
}
.changestatusModalCheckbox label {
    font-size: 11px!important;
}
.modal-body form .modal-list ul li #goalname {
    margin-left: 7px!important;
    width: 74%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper #myModal .modal-content {
    width: 94%!important;
}
.new-figma-goal-page {
    padding: 15px 0px 35px 0px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .chart.chart1 span {
    margin-left: -4%!important;
}
#ViewGoalModel .modal-content, #changeStatusModel .modal-content {
    width: 44%!important;
}
  }

  li#active
  {
    text-decoration: none;
    color: #fff !important;
    background: #fff;
    border-bottom: 2px solid #1D9B75;
    width: 102%;
    font-size: 14px;
    font-weight: 600;
  }
  body.leftmenu .sidebar-nav li.active
  {
    background: transparent;
    border-bottom: none;
  }
span.remove-hover a .fa.fa-eye
{
    padding-top: 14px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice
{
  margin-left:5px!important;
}
input:focus
{
  outline: none !important;
}
span.select2-search.select2-search--inline
{
  display:none;
}
.select2-container--default.select2-container--focus .select2-selection--multiple
{
  border: 1px solid rgb(62 163 164 / 55%)!important;
  border-radius:0px!important;
}
.select2-container--open .select2-dropdown--below
{
  border-right: 1px solid rgb(62 163 164 / 55%)!important;
  border-bottom: 1px solid rgb(62 163 164 / 55%)!important;
  border-left: 1px solid rgb(62 163 164 / 55%)!important;
}
.select2-container--default .select2-selection--multiple
{
  border: 1px solid rgb(62 163 164 / 55%)!important;
  border-radius:0px!important;
  background-color: transparent!important;
}
.select2-container--default .select2-results>.select2-results__options
{
  margin-top: -11px!important;
  background: white;
}
.select2-container--default .select2-results>.select2-results__options
{
  overflow-y:hidden!important;
}
.select2-results
{
  margin-top:-30px!important;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__display
{
  font-size:11px!important;
  padding-bottom: 3px!important;
}
.select2-results
{
  overflow-y: scroll;
    overflow-x: hidden;
    height: 90px;
    border: 1px solid rgb(62 163 164 / 55%);
    padding-top: 10px;
    border-top: none;
}
/* width */
.select2-results::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.select2-results::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
.select2-results::-webkit-scrollbar-thumb {
  background: #888; 
}
.select2-results__option
{
    font-size: 12px!important;
    margin-left: 0!important;
    padding: 5px 0px 5px 5px!important;
}
.select2-container--default .select2-results__option--disabled
{
  margin-left:0px!important;
  font-size: 12px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper #my-profile
{
  padding-top: 70px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .goal-box ul li
{
  width: 22.95%;
}
li.goal-box-border {
    margin-right: -0.88%!important;
}
/* Slideshow container */
.slideshow-container {
  position: relative;

}

/* Slides */
.mySlides {
  display: none;
  padding-top: 100px;
  text-align: left;
  font-family: 'Lato',sans-serif;
  margin-bottom: -80px;
}
.mySlides p
{
  position: absolute;
    display: inline-block;
    z-index: 1;
    top: -30px;
    padding-left: 40%;
    padding-bottom: 0;
    line-height: 0px;
    font-weight: bolder;
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 30%;
  width: auto;
  margin-top: -10px;
  color: #1d9b75;
  font-size: 13px;
  user-select: none;
  font-weight: 700;
  font-family: 'Lato',sans-serif;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 60px;
  border-radius: 3px 0 0 3px;
}

  .goal-box ul{margin-left: -2%;}
.next-step ul li
{
    padding: 0 15px 0 0px;
}
.modal-dialog {
    width: 800px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .box .chart
{
  width: 17%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper
{
  overflow-x: hidden!important;
}
    html{scroll-behavior: smooth;}

@media(min-width:1920px)
{
  body.dashboard-background.leftmenu.memberprofile #wrapper {
    padding-top: 92px!important;
}
#sidebar-wrapper, body.memberprofile .menuopener {
   top: 13px!important;
}
body.leftmenu #sidebar-wrapper
{
  top: 66px!important;
}
body.memberprofile .menuopener {
    margin-top: 20px!important;
}
body.leftmenu .sidebar-nav
{
  margin-top: 20px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .chart.chart1 span {
    font-size: 13px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .box .chart {
  left: -80px!important;
}
}
@media(min-width:1600px)
{
  body.dashboard-background.leftmenu.memberprofile #wrapper {
    padding-top: 80px!important;
}
.goal-box ul li {
    width: 24.8%!important;
}
#sidebar-wrapper , body.memberprofile .menuopener
{
  margin-top:9px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .goal-box ul li {
  max-width: 24.95%!important;
}
}
@media(min-width:1440px)
{
  body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .box .chart {
    margin-left: -250px!important;
}
.goal-box ul li {
    width: 24.65%!important;
}
body.dashboard-background.leftmenu.memberprofile #wrapper {
    padding-top: 72px!important;
}
body.dashboard-background.leftmenu.memberprofile .goal-box ul
{
  margin-left: -1%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .goal-box ul li {
    width: 24.85%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .goal-box ul li {
    width: 24.8%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .chart.chart1 span
{
  font-size: 11px!important;
}

}
   @media(max-width:1024px)
   {
    .add-new-box span
    {
      font-size:11px;
    }
    .new-figma-goal-page p
    {
      top:-20px;
    }
    .change-career span {
    font-size: 13px;
}
#my-profile
    {
      padding: 65px 0 10px 0;
    }
    .goal-box ul li
    {
      width: 24.16%!important;
    }
    li.goal-box-border .icon .fa.fa-check
    {
      margin-left: 7.15%!important;
      margin-top: 0px!important;
    }
    body.leftmenu #wrapper.toggled #page-content-wrapper #my-profile
    {
      padding-left: 60px;
    }
    body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .box .chart {
    width: 22%;
    margin-left: 20px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .goal-box ul li {
    width: 24.45%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper li.goal-box-border .icon .fa.fa-check
{
  margin-left: 8.15%!important;
}
   }

    @media(max-width:768px)
    {
     
#my-profile p
{
  margin-bottom:30px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .chart.chart1 span
{
  margin-left: -17%;
}
.goal-box ul {
    margin-left: -5%;
    padding-left: 5px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .goal-box ul li 
{
  width: 32.21%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper li.goal-box-border .icon .fa.fa-check {
    margin-left: 11.15%!important;
}
.goal-box ul li {
    width: 45.21%!important;
}
li.goal-box-border .icon .fa.fa-check {
    margin-left: 15.15%!important;
}
}
@media(max-width:414px)
{
  #my-profile
  {
    padding-top:40px;
  }
  #my-profile .new-figma-goal-page p {
    padding-left: 40%;
    font-size: 11px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .box .chart {
    width: 44%;
    margin-left: -10px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper li.goal-box-border .icon .fa.fa-check
{
  margin-left: 55.15%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .goal-box ul li {
    width: 96.21%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper #myModal .modal-content
{
  width:96%;
}
.modal-list ul li input[type=checkbox] {
    margin: 4px 5px 0px 5px;
}
.changestatusModalCheckbox {
    padding-left: 0%!important;
}
.changestatusModalCheckbox label
{
  font-size: 12px;
}
.mobile-submit-btn
{
   margin-top:15px!important;
}
li.goal-box-border .icon .fa.fa-check {
   
    margin-left: 54.15%!important;
    position: unset!important;
    margin-top: -50px!important;
}
.progress
{
  margin-top: 40px!important;
}
.icon .fa.fa-bullseye
{
  padding-top:10px;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
    margin-left: -6px!important;
}
#ViewGoalModel .modal-content , #changeStatusModel .modal-content
{
  width: 49%;
}
.goal-box ul li {
    width: 97.21%!important;

}
.modal-list ul {
    padding-left: 0px;
    margin-left: -10px;
    margin-top: 0px;
}
.modal-list ul li #goalname
{
    margin-left: 7px!important;
    width: 77%!important;
}
#cmp_date
{
    margin-left: 0px!important;
    width: 100%!important;
}
.next-step span {
    padding-top: 5px;
}
.chart.chart1 span {
    margin-left: -64%;
}
.goal-box ul li
{
  height:120px;
  margin-left: 3% !important;
}
}
select {
    width: 100%;
    padding: 17px;
    margin: 5px 0 22px 0;
    display: inline-block;
    height: 54px;
    background:transparent !important;
    border:1px solid rgb(62 163 164 / 55%)!important;

}
.select2-selection__rendered{
  margin-left:10px !important;
}
.select2-dropdown{
    left: 0px;
    top: 0px;

}
.select2-search{
 height:25px !important; 
}
.select2.select2-container.select2-container--default{
width:100% !important;

}
.remove-hover a:hover , .remove-hover a:active{
color:black !important;
}
.changestatusModalDiv{
  display: initial;
    margin-left: 8%;
}
.changestatusModalDivTwo{
  display: initial;
    margin-left: 1%;
}
.changestatusModalCheckbox{
      padding-left: 12%;
}
.items
  {
    margin-right: -10%;
    color: grey;
    width: 20px;
    height: 20px;
    line-height: 20px;
    text-align: right;
    float: right;
    font-size: 15px;
    transition: 0.5s;
  }
  .items:hover
  {
    color:red;
  }
  
  .progress-bar{
      background-color: #1D9B75;
  }
  .goal-box ul li{
    display: inline-block;
    padding: 5px 35px;
    height: auto;
    width: 22.85%;
    margin-bottom: 4px;
  }
  .progress{
    margin-bottom: 10px !important;
  }
 li.goal-box-border .icon .fa.fa-check
{
    background-color: #1D9B75;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    line-height: 15px;
    font-size: 10px;
    text-align: center;
    padding: 5px;
    display: block;
    color: #fff;
    margin-left: 9.15%;
    margin-top: -51px;
    position: absolute;
}
#slideId{
margin-left: -38px;
padding-top: 31px;
}
</style>
    <!-- PRELOADER -->
    <!-- <div class="cssload-container">
        <div class="cssload-loader"></div>
    </div> -->
    <!-- end PRELOADER -->

    <!-- **************
    START SITE HERE
    **************** -->
     
@if(Session::has('remove_goal'))
<div id="remove_goal_popup" style="z-index: 999; height: auto; width: 305px; background-color:#1D9B75; position: fixed; top: 38px; text-align: center; vertical-align: sub; left: 1035px; margin-top: 35px; color: rgb(25, 25, 25);">
    <p style="padding-top:5px;
    font-size: 15px;
    color: #fff !important;
    padding-left: 10px;
    font-style: oblique;">{{session()->get('remove_goal')}}</p>
</div>
@endif


    <div id="wrapper">
      @include('user.sidebar')
     
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div class="demo-parallax parallax section looking-photo nopadbot goal-bg" data-stellar-background-ratio="0.5">
                <div class="page-title section nobg">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <div class="title-area pull-left">
                                <!-- <h2>My account</h2>   -->
                                <!---<small>Hello there, this is my profile.</small>--->
                            </div>
                            <!-- /.pull-right -->
                            <div class="pull-right hidden-xs">
                                <div class="bread">
                                    <ol class="breadcrumb">
                                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                        <li><a href="my-profile.php">My Profile</a></li>
                                        <li><a href="#">Goals</a></li>
                                        <!-- <li><a href="">Unfiled Organization</a></li> -->
                                    </ol>
                                </div>
                                <!-- end bread -->
                            </div>
                            <!-- /.pull-right -->
                        </div>
                        <!-- end clearfix -->
                    </div>
                </div>
                <!-- end page-title -->
            </div>

            <div class="section" id="my-profile">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-12">
                      <h4>Goals</h4>
                      <p>Track your progress towards the goals you choose</p>
                    </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="about-widget clearfix">
                                <div class="widget-title">
                                    <!-- <h1 class="heading1">Goals</h1> -->
                                  
                                </div><!-- end title -->
                          
                                    <!-- <div class="col-lg-12">
                                    
                                    </div> -->
<div class="col-lg-12 col-md-12 col-sm-12 new-figma-goal-page">
   <div class="change-career change-career2 goal">
   <div class="col-lg-5 col-md-5 col-sm-12">
   <div class="next-step">
   <h4>Your current goal</h4>

   <span>Next Step:</span>
   
   <h4>Click below to review and update your steps towards completing  your goals</h4>
   <span class="ellipse">
   <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
   </span>
   <div class="slideshow-container">
@if($all_activity[0]->id)
@foreach($all_activity as $all_activityData)
<div class="mySlides">
  <p id="slideId">{{substr($all_activityData->goal_name,0,30)}}</p>
</div>
@endforeach
<a class="prev" onclick="plusSlides(-1)">Previous</a>
<a class="next" onclick="plusSlides(1)">Next</a>
@else
@endif
</div>
   <div class="col-lg-12">
   

   <!-- <ul> -->
   <!-- <li>
   <span><i class="fa fa-check" aria-hidden="true"></i> Completed</span>
   </li> -->
   <!-- <li class="skip">
   <span><i class="fa fa-step-forward" aria-hidden="true"></i> Skip</span>
   </li> -->
   <!-- <li class="skip">
   <span> See all <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
   </li> -->
   <!-- </ul> -->
   </div>
   </div>
   </div>
   <div class="col-lg-7 col-md-7 col-sm-12">
   <div class="box text-center">
    <div class="chart chart1" data-percent="{{$goalPrecentage}}" data-scale-color="#CED6DC"><span>{{$goalPrecentage}}% - Complete</span><canvas height="160" width="160"></canvas></div>
   </div>
   <p>
             {{$quots['quote']}}
     <span>- {{$quots['by']}}</span>
   </p>
   </div>
  
   </div>
</div>
<div class="col-lg-12 goals-border">
<div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
<span class="all-goal">All Goals</span>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
<div class="add-new-box add-new-box1">
   <a href="javascript:void(0)" onclick="addGoal()"><span type="button">+ Add New <i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
</div>
</div>
</div>

  <div class="col-lg-12 goal-box">
    <ul>
    @foreach($stu_goal as $goalOfStudentData)

@php 
                          $string = $goalOfStudentData['goal_name'];
                          $g_id = $goalOfStudentData['id'];
                          
                          $total_activity_count = App\Models\Student_activities::where('goal_id', $g_id)->count();
                          $completed_activity_count = App\Models\Student_activities::where('goal_id', $g_id)->where('status', "Completed")->count();
                          $a = $completed_activity_count*100;
                          if($total_activity_count != 0)
                          {
                            $b = $a/$total_activity_count;
                          }
                          else
                          {
                            $b = 0;  
                          }
                          
                          $now = time(); // or your date as well
                          $your_date = strtotime($goalOfStudentData['created_at']);
                          $datediff = $now - $your_date;
                          $days = round($datediff / (60 * 60 * 24));
                        @endphp


        <li class="goal-box-border">
        <div class="icon">
        <a href="javascript:void(0)" onclick="removeGoal({{$goalOfStudentData['id']}})"><i class="fa fa-trash items"></i></a>
        <i class="fa fa-bullseye" aria-hidden="true"></i>

        <h4>
          {{substr($goalOfStudentData['goal_name'],0,20)}}
        </h4>

        @if($goalOfStudentData['status']==1)      
        <i class="fa fa-check get-a-pay" aria-hidden="true"></i>

       
          <div class="progress" style="height: 5px;margin-top:10px">
          <div class="progress-bar" style="width: {{floor($b)}}%"></div>
          </div>

        <p class="progress-description" style="font-size:12px">
                             {{floor($b)}}% Completed in {{$goalOfStudentData['cmp_all_activirty_in_days']}} Days
        </p>

        @else

       
          <div class="progress" style="height: 5px;margin-top:10px">
          <div class="progress-bar" style="width: {{floor($b)}}%"></div>
          </div>     

          <span class="progress-description" style="font-size:12px">
                                {{floor($b)}}% Completed in {{$days}} Days
          </span>   

        @endif
        <div class="new-chart" data-percent="20" data-scale-color="#CED6DC"><canvas height="10" width="10"></canvas><canvas height="5" width="5"></canvas><canvas height="115" width="115"></canvas></div>
     
        <span class="remove-hover">
        <a href="javascript:void(0)" onclick="editgoal({{$goalOfStudentData['id']}})">Edit</a> 

      <a href="javascript:void(0)" onclick="viewgoal({{$goalOfStudentData['id']}})"><i class="fa fa-eye"></i></a> 

        <a href="javascript:void(0)" onclick="changeStatus({{$goalOfStudentData['id']}})">Change Status</a> 
        </span>
        </div>  
        </li>
    @endforeach
    </ul>
   </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="addGoal">Add Goal</h4>
       
        </div>
        <div class="modal-body">
    
        <form method="post" action="{{url('add-student-goal')}}">
    
        <div class="modal-list">
          @csrf
        <ul>

        <li>
          <label for="goal"><b>Goal Name</b><apan class="textdenger">*</apan></label>
            <input type="text" name="goalname" id="goalname" placeholder="Enter Gaol Name" maxlength="35" minlength="3" style="margin-left: 53px;width: 83%;padding: 5px 10px 5px 10px;border: none;background: #fff;border: 1px solid rgb(62 163 164 / 55%);" required>
            <input type="text" name="editId" id="editId" hidden="">
        </li> 

        <li>
          <label for="goal" class="issued-by"><b>Goal Category</b><apan class="textdenger">*</apan></label>
          <select name="goal_cat_id" id="goal_cat_id" onchange="getUserGoalactivity(this.value)" required>
                    <option value="">Select Goal Category</option>
                 @foreach($goals as $key=>$allGoalsData)
                    <option value="{{$allGoalsData->id}}">{{$allGoalsData->category_name}}</option>
                 @endforeach    
          </select>
        </li> 
        <input type="text" name="editGoalCatId" id="editGoalCatId" hidden="">

        <li>
        <label for="activity" class="issued-by"><b>Goal Activities<apan class="textdenger">*</apan></b></label>
        <select name="activity[]" onchange="activity_check(this.value)" class="form-control js-example-tokenizer" id="getActivity" multiple="true"required>
        <option value="">Select Goal Activities</option>
        </select>
        </li> 

        <li>
        <label for="activity" class="issued-by"><b>Expected Completion Date<apan class="textdenger">*</apan></b></label>
        <input type="date" name="cmp_date" min="{{date('Y-m-d')}}" id="cmp_date" placeholder="Enter Date of complition" style="margin-left: 53px;width: 70%;padding: 5px 10px 5px 10px;border: none;background: #fff;border: 1px solid rgb(62 163 164 / 55%);">
        </li> 
<!-- 
        <li>
        <label for="activity" class="issued-by"><b>Date of <br>complition</b></label>
        <input type="date" name="cmp_date" min="{{date('Y-m-d')}}" id="cmp_date" placeholder="Enter Date of complition" style="margin-left: 53px;width: 83%;padding: 5px 10px 5px 10px;border: none;background: #fff;border: 1px solid rgb(62 163 164 / 55%);">
        </li>  -->
     
        </ul>
       </div>

        <div class="space text-left">
        <!--    <a href="#"  type="button" data-toggle="modal" data-target="#submitModal" style="cursor:pointer;">Submit</a> -->
        <button class="btn btn-primary mobile-submit-btn" type="submit" style="margin-top: 15px;cursor:pointer;background-color: #1D9B75 !important">Submit</button>
        </div>
        </form>
        </div>
        </div>
      </div>
    </div>
  <!--end  Modal -->


 <!-- change status Modal -->
    <div class="modal fade" id="changeStatusModel" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Goal Status </h4>
       
        </div>
        <div class="modal-body">
    
        <form method="post" action="{{url('changeUserActivityUpdateData')}}">
    
        <div class="modal-list">
          @csrf
        <ul>

        <li>
          <label for="goal"><b>Goal Name</b></label>
            <div class="changestatusModalDiv" ></div>
            <input type="text" name="editId" id="editId" hidden="">
        </li> 

        <li>
          <label for="goal" class="issued-by"><b>Goal Category Name</b></label>
            <div class="changestatusModalDivTwo"></div>
        </li> 

        <li>
        <label for="activity" class="issued-by"><b>Goal Activity Status</b></label>
        <div id="getLabelActivity"></div>
        </li> 

        <li>
            <label for="goal"><b>Expected Completion Date</b></label>
            <div id="cmp_date_unice" ></div>
          
        </li>  

        <li>
            <label for="goal"><b>Created At</b></label>
            <div id="created_at_view_date" ></div>
        </li>

        </ul>
       </div>

        <div class="space text-left">
        <!--    <a href="#"  type="button" data-toggle="modal" data-target="#submitModal" style="cursor:pointer;">Submit</a> -->
        <button class="btn btn-primary" type="submit" style="cursor:pointer;background-color: #1D9B75 !important" >Submit</button>
        </div>
        </form>
        </div>
        </div>
      </div>
    </div>
  <!------ end change status Model ---> 


 <!-- change status Modal -->
    <div class="modal fade" id="ViewGoalModel" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">View Goal</h4>
       
        </div>
        <div class="modal-body">
    
        <form method="post" action="{{url('changeUserActivityUpdateData')}}">
    
        <div class="modal-list">
          @csrf
        <ul>

        <li>
          <label for="goal"><b>Goal Name</b></label>
            <div class="changestatusModalDivGO" ></div>
            <input type="text" name="editId" id="editId" hidden="">
        </li> 

        <li>
          <label for="goal" class="issued-by"><b>Goal Category Name</b></label>
            <div class="changestatusModalDivTwoGO"></div>
        </li> 

        <li>
        <label for="activity" class="issued-by"><b>Goal Activity</b></label>
        <div id="getLabelActivityGO"></div>
        </li> 

        <li>
            <label for="goal"><b>Expected Completion Date</b></label>
            <div id="cmp_date_uniceGO" ></div>
        </li>  

        <li>
            <label for="goal"><b>Created At</b></label>
            <div id="created_at_date" ></div>
        </li>

        </ul>
       </div>

        <div class="space text-left">
        <!--    <a href="#"  type="button" data-toggle="modal" data-target="#submitModal" style="cursor:pointer;">Submit</a> -->
<!--         <button class="btn btn-primary" type="submit" style="cursor:pointer;background-color: #1D9B75 !important" >Submit</button> -->
        </div>
        </form>
        </div>
        </div>
      </div>
    </div>
  <!------ end change status Model ---> 




  </div>
  <div class="modal fade" id="submitModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-center">
      
         <button type="button" class="back"><a href=""><i class="fa fa-angle-left" aria-hidden="true"></i> Back</a></button>
        
          <div class="col-lg-12 text-center">
            <img src="images/success-goal.jpg" alt="">
          </div>
          <h4 class="modal-title">Woohoo, you completed your goal!</h4>
          <p class="text-center">You pushed through and the hard work paid off. Take a moment to bask in your glory.You earned this!</p>
        <div class="col-lg-12">
          <span class="span1">4 <br>Weeks to Complete</span>
          <span class="span2">7 <br> Steps Completed</span>
          <div class="form-group">
                            <input type="checkbox" id="agree">
                            <label for="agree">I am happy fo CMYQUAL to share</label>
         </div>
        </div>
    
        </div>
        <div class="modal-body">
        <div class="space text-center">
        <a href="#" class="btn btn-primary share-btn">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
        <a href="goal.php" class="btn btn-primary">Go Back <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        </a>
        </div>
        </div>
        </div>
        
      </div>
      
    </div>
  </div>

@endsection
@section('script')
<script type="text/javascript">

function removeGoal(id){
if(confirm('Are you sure to remove the goal ?')){
$.ajax({
url:'{{url("remove-goal-from-user")}}',
method:'POST',
data:{id:id,'_token':"{{csrf_token()}}"},
success:function(data){
window.location.href="{{url('user/goal')}}";
}
})
}else{
 return false; 
}
}


function editgoal(id){
$('#myModal').modal('show');
$('#addGoal').html('Edit Goal');
$('#goal_cat_id').attr('disabled','disabled');

   $.ajax({
   url:'{{url("getUserGoalEditData")}}',
   method:'POST', 
   data:{id:id,'_token':'{{csrf_token()}}'},
   success:function(data){

   $('#editId').val(data[0].id);   
   $('#goalname').val(data[0].goal_name);
   $('#goal_cat_id').val(data[0].category_id);
   
   $('#editGoalCatId').val(data[0].category_id);
   $('#cmp_date').val(data[0].cmp_date);
   
   $('#getActivity').html(data[1]);
   }
   })
}

function changeStatus(id){
$('#changeStatusModel').modal('show');
  $.ajax({
   url:'{{url("getUserActivityUpdateData")}}',
   method:'POST', 
   data:{id:id,'_token':'{{csrf_token()}}'},
   success:function(data){
   console.log(data); 
   $('#getLabelActivity').html(data[0]);
   $('.changestatusModalDiv').html(data[1]);
   $('.changestatusModalDivTwo').html(data[2]);
   $('#cmp_date_unice').html(data[3]);
   $('#created_at_view_date').html(data[4]);

   }
 })
}

function viewgoal(id){
$('#ViewGoalModel').modal('show');
  $.ajax({
   url:'{{url("getUserActivityUpdateData")}}',
   method:'POST', 
   data:{id:id,'_token':'{{csrf_token()}}'},
   success:function(data){
   console.log(data); 
   $('#getLabelActivityGO').html(data[0]);
   $('.changestatusModalDivGO').html(data[1]);
   $('.changestatusModalDivTwoGO').html(data[2]);
   $('#cmp_date_uniceGO').html(data[3]);
    $('#created_at_date').html(data[4]);
   $('input[type="checkbox"]').css('display','none');
   }
 })
}


$('.barra-nivel').each(function() {
  var valorLargura = $(this).data('nivel');
  var valorNivel = $(this).html("<span class='valor-nivel'>"+valorLargura+"</span>");
    $(this).animate({
        width: valorLargura
    });
});
</script>
    <script type="text/javascript">
    $(function() {

$('#remove_goal_popup').fadeOut(3000);
$(".js-example-tokenizer").select2({
    tags: true,
    tokenSeparators: [',', ' ']
})

    $('.chart').easyPieChart({
      size: 115,
      barColor: "#1D9B75",
      scaleLength: 0,
      lineWidth: 8,
      trackColor: "#cfd8dc",
      lineCap: "circle",
      animate: 2000,
    });
  });
    </script>
    <script type="text/javascript">
    
    $(function() {
    $('new-chart').easyPieChart({
      size: 115,
      barColor: "#1D9B75",
      scaleLength: 0,
      lineWidth: 8,
      trackColor: "#cfd8dc",
      lineCap: "circle",
      animate: 2000,
    });
  });
    </script>
<script>
window.chartColors = {
  red: 'transparent',
  orange: 'tranparent',
//   yellow: 'rgb(255, 205, 86)',
  green: 'rgb(75, 192, 192)',
  blue: '#fff',
//   purple: 'rgb(153, 102, 255)',
//   grey: 'rgb(231,233,237)'
};

var randomScalingFactor = function() {
  return (Math.random() > 0.5 ? 1.0 : 1.0) * Math.round(Math.random() * 25);
};

var line1 = [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), ];

var line2 = [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), ];

var MONTHS = ["1/3", "8/3", "15/3", "22/5"]; //"May", "June", "July", "August", "September", "October", "November", "December"
var config = {
  type: 'line',
  data: {
    labels: MONTHS,
    datasets: [{
      label: "",
      backgroundColor: window.chartColors.red,
      borderColor: window.chartColors.red,
      data: line1,
      fill: false,
    }, {
      label: "",
      fill: false,
      backgroundColor: window.chartColors.blue,
      borderColor: window.chartColors.blue,
      data: line2,
    }]
  },
  options: {
    responsive: true,
    title:{
      display:true,
      text:''
    },
    tooltips: {
      mode: 'index',
      intersect: false,
    },
   hover: {
      mode: 'nearest',
      intersect: true
    },
    scales: {
      xAxes: [{
        display: true,
        scaleLabel: {
          display: true,
          labelString: ''
        }
      }],
      yAxes: [{
        display: true,
        scaleLabel: {
          display: true,
        },
      }]
    }
  }
};

var ctx = document.getElementById("canvas").getContext("2d");
var myLine = new Chart(ctx, config);

var data1 = [
  randomScalingFactor(),
  randomScalingFactor(),
];

// var data2 = [
//   randomScalingFactor(),
//   randomScalingFactor(),
// ];

var ctx = document.getElementById("chart-area").getContext("2d");
var myPie = new Chart(ctx, {
  type: 'pie',
  data: {
        labels: ["FTE", "FTC"],
    datasets: [{
      label: 'Dataset 1',
      data: data1,
      backgroundColor: [
        "",
        ""
      ],
      hoverBackgroundColor: [
        "",
        ""
      ],
      borderWidth: 5,
    }, {
      label: 'Dataset 2',
      data: data2,
      backgroundColor: [
        "",
        ""
      ],
      hoverBackgroundColor: [
        "",
        ""
      ],
      borderWidth: 5,
    }],
  },
  options: {
    title: {
      display: true,
      text: 'Employee Overview',
      fontStyle: 'bold',
      fontSize: 20
    }
  }
});

   function addGoal(){
   $('#myModal').modal('show');
   $('#addGoal').html('Add Goal');
   $('#goal_cat_id').removeAttr('disabled');
   $('#goalname').val('');
   $('#goal_cat_id').val('');
   $('#editId').val('');
   $('#cmp_date').val('');
   //$('#getActivity').val('');
   $('#getActivity').empty();

// var index = $('#').get(0).selectedIndex;
// $('#getActivity option:eq(' + index + ')').remove();

   }

function getUserGoalactivity(id){
$.ajax({
url:"{{url('getUserGoalactivity')}}",
method:'POST',
data:{id:id,'_token':'{{csrf_token()}}'},
success:function(data){
console.log(data);   
$('#getActivity').html(data);

$(".js-example-tokenizer").select2({
    tags: true,
    tokenSeparators: [',', ' '],

})
}
})
}

</script>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

@endsection
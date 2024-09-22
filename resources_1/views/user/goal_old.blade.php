@extends('user.layout.layout')
@section('title','cMyQual | Goals')
@section('content')
<style>
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
@media(min-width:1440px)
{
  body.leftmenu #wrapper.toggled #page-content-wrapper .change-career .box .chart {
    margin-left: -250px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .chart.chart1 span
{
  font-size: 11px!important;
}

}
   

    @media(max-width:768px)
    {
     
#my-profile p
{
  margin-bottom:30px;
}
}
@media(max-width:414px)
{
  #my-profile
  {
    padding-top:40px;
  }
  .new-figma-goal-page p {
    padding-left: 40%;
    font-size: 13px!important;
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
  margin-left: -2% !important;
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
.times
  {
    margin-left: -20%;
    color: grey;
    width: 20px;
    height: 20px;
    line-height: 20px;
    text-align: center;
    font-size: 15px;
    transition:0.5s;
  }
  .times:hover
  {
    color:#1d9b75;
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
    font-style: oblique;">Your goal remove successfully.</p>
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
                                        <li><a href="goal.php">Goals</a></li>
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
   <h4>Attend a Teacher Training Course </h4>
   <span class="ellipse">
   <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
   </span>
   <div class="col-lg-12">
   <ul>
   <li>
   <span><i class="fa fa-check" aria-hidden="true"></i> Completed</span>
   </li>
   <li class="skip">
   <span><i class="fa fa-step-forward" aria-hidden="true"></i> Skip</span>
   </li>
   <li class="skip">
   <span> See all <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
   </li>
   </ul>
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
        <li class="goal-box-border">
        <div class="icon">
        <a href="javascript:void(0)" onclick="removeGoal({{$goalOfStudentData['id']}})"><i class="fa fa-remove items"></i></a>
        <i class="fa fa-bullseye" aria-hidden="true"></i>
        @if($goalOfStudentData['status']==1)      
        <i class="fa fa-check get-a-pay" aria-hidden="true"></i>

          <span class="info-box-number">Progress</span>
          <div class="progress">
          <div class="progress-bar" style="width:100%"></div>
          </div>

        @else

          <span class="info-box-number">Progress</span>
          <div class="progress">
          <div class="progress-bar" style="width:0%"></div>
          </div>        

        @endif
        <div class="new-chart" data-percent="20" data-scale-color="#CED6DC"><canvas height="10" width="10"></canvas><canvas height="5" width="5"></canvas><canvas height="115" width="115"></canvas></div>
        <h4>
          {{substr($goalOfStudentData['goal_name'],0,20)}}
        </h4>
        <span class="remove-hover">
        <a href="javascript:void(0)" onclick="editgoal({{$goalOfStudentData['id']}})">Edit</a> 
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
          <label for="goal"><b>Goal Name</b></label>
            <input type="text" name="goalname" id="goalname" placeholder="Enter Gaol Name" maxlength="35" minlength="3" style="margin-left: 53px;width: 83%;padding: 5px 10px 5px 10px;border: none;background: #fff;border: 1px solid rgb(62 163 164 / 55%);" required>
            <input type="text" name="editId" id="editId" hidden="">
        </li> 

        <li>
          <label for="goal" class="issued-by"><b>Goal Category</b></label>
          <select name="goal_cat_id" id="goal_cat_id" onchange="getUserGoalactivity(this.value)" required>
                    <option value="">Select Goal Category</option>
                 @foreach($goals as $key=>$allGoalsData)
                    <option value="{{$allGoalsData->id}}">{{$allGoalsData->category_name}}</option>
                 @endforeach    
          </select>
        </li> 
        <input type="text" name="editGoalCatId" id="editGoalCatId" hidden="">

        <li>
        <label for="activity" class="issued-by"><b>Goal Activities</b></label>
        <select name="activity[]" onchange="activity_check(this.value)" class="form-control js-example-tokenizer" id="getActivity" multiple="true"required>
        <option value="">Select Goal Activities</option>
         
        </select>
        </li>    
        </ul>
       </div>

        <div class="space text-left">
        <!--    <a href="#"  type="button" data-toggle="modal" data-target="#submitModal" style="cursor:pointer;">Submit</a> -->
        <button class="btn btn-primary" type="submit" style="cursor:pointer;background-color: #1D9B75 !important">Submit</button>
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
   //$('#getActivity').val('');

var index = $('#getActivity').get(0).selectedIndex;
$('#getActivity option:eq(' + index + ')').remove();

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
@endsection
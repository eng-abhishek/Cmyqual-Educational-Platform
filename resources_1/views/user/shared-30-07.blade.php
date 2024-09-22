@extends('user.layout.layout')
@section('title','cMyQual | Shared Lists')
@section('content')
<style>
.chosen-container .chosen-results
{
  overflow-x: hidden!important;
  overflow-y: hidden!important;
  max-height: 90px!important;
  border: 1px solid rgb(62 163 164 / 55%);
}

  .add-new-box span.span1
  {
    padding: 5px 20px;
  }
  .share-achievement-outer span
  {
    padding-left:0px;
    font-size: 11px!important;
  }
  .share-achievement-list-program h5
  {
    padding-top:10px;
  }
  .share-achievement-outer.share-achievement-outer1
  {
    padding: 5px 0 10px 0;
  }
  .shared-logs-assesement.col-lg-12 h5 {
    margin-bottom: 20px;
}
.shared-log-asses-border h5{ margin-bottom: 10px!important;}
#notes {
    margin: 20px 0 0px -4px;
}
  .chosen-container-multi .chosen-choices {
    border: none !important;
    z-index: 1;
    overflow-y: scroll;
    height: 33px!important;
}
.chosen-container-multi .chosen-choices::-webkit-scrollbar {
  width: 3px;
}

/* Track */
.chosen-container-multi .chosen-choices::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
.chosen-container-multi .chosen-choices::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
.chosen-container-multi .chosen-choices::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
    html{scroll-behavior: smooth;}
    .hour-logged
    {
      background:#fff;
    }
    .goals-border
    {
      padding-bottom:25px;
    }
    .tesla-box select
    {
        height:30px;
    }
    span.all-goal
    {
      display: inline-block;
      padding-top: 12px;
    }
    .goals-border
    {
      height:55px;
    }
    .recent-learn 
    {
    padding-top: 0px;
    padding-left: 0;
    padding-right: 0;
    }
    @media(max-width:1024px)
    {
      .recent-learn.new-share {
    margin-top: 0%;
}
    }
    @media(max-width:414px)
    {
        h4.overview-drop
{
    position: absolute;
    z-index: 99;
    top: 70px;
    font-size: 14px!important;
        right: 40px;
}
    }

.modal-content.shared-scroll
{
  overflow-y: scroll;
    overflow-x: hidden;
    height: 550px;
}
/* width */
.modal-content.shared-scroll::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.modal-content.shared-scroll::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
.modal-content.shared-scroll::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
.modal-content.shared-scroll::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
#myModal .close, #editModal .close, #goalModal .close, #shareModal .close
{
    top: -20px;
    right: -15px;
    z-index: 9999;
    position: absolute;
}
.select2{
width:350px !important;
padding-right:20px !important; 
}
.select2-search__field{
width:320px !important;
}

.chosen-container .chosen-results li
{
  text-align: left;
}
.chosen-container
{
  height:35px;
}
.tesla-box input[type=text], .tesla-box input[type=email]
{
  padding: 0.5px 5px 5px 5px;
}
#notes
{
    margin: 5px 0 0px -4px;
    width: 105%;
    padding: 9px 10px 9px 10px;
    border: none;
    background: #fff;
    font-size: 12px;
    max-height: 70px;
    border: 1px solid rgb(62 163 164 / 55%);
}
#notes:focus{outline: none !important;}
.notes-textarea
{
  margin-top:15px;
  padding-bottom: 85px;
}
.shared-logs-assesement.col-lg-4.col-md-4.col-sm-6
{
  padding-left:0px;
}
.shared-logs-assesement.col-md-8.col-sm-8.col-xs-8 input[type=email]
{
  padding: 0.5px 5px 5px 5px;
  border: 1px solid rgb(62 163 164 / 55%)!important;
  width: 100%;
}
.shared-logs-assesement.col-md-8.col-sm-8.col-xs-8
{
    padding-left: 10px;
    padding-right: 0;
}
.add-list-shared-page
{
  margin-top:25px;
}
.shared-logs-assesement.col-lg-12 {
    padding-top: 0px;
    margin-top: -10px;
}
.chosen-container-multi .chosen-choices li.search-field input[type=text] , li.search-choice span
{
  font-size:12px!important;
}
.chosen-container .chosen-results li
{
  font-size:12px!important;
}
</style>
    <!-- end PRELOADER -->

    <!-- ******************************************
    START SITE HERE
    ********************************************** -->
@if(Session::has('remove_shared'))
<div id="update_popup" style="z-index: 999;height: 70px;
    width: 300px;
    background-color:#1D9B75;
    position: fixed;
    top: 33px;
    text-align: center;
    vertical-align: sub;
    left: 1070px;
    margin-top: 35px;
    color: #191919;">
    <p style="padding-top:20px;
    font-size: 15px;
    color: #fff !important;
    padding-left: 10px;
    font-style: oblique;">{{session()->get('remove_shared')}}</p>
</div>
@else

@endif    
       <div id="wrapper">
        <!-- Sidebar -->
       @include('user.sidebar')
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div class="demo-parallax parallax section looking-photo nopadbot share-bg" data-stellar-background-ratio="0.5">
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
                                        <li><a href="shared.php">Shared</a></li>
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
                    

                        <div class="col-md-12 col-sm-12">
                            <div class="about-widget clearfix shared-widget">
                                <div class="widget-title">
                                    <!-- <h1 class="heading1">My Profile</h1> -->
                                   
                                </div><!-- end title -->
                                <div class="row">
                                    
                                </div><!-- end col -->
                                  
    <div class="col-lg-7 col-md-7 col-sm-12">
    <h4>Shared Lists</h4>
    <p>Give access to a selection of your achievements </p>
    <div class="hour-logged">
       <h4 class="overview-drop"><i class="fa fa-caret-down" aria-hidden="true"></i>  Overview</h4>
      <span><h4></h4></span>
      
      <span class="hour-logged">
      <span></span> <span class="last" style="padding-left:38%"> <!-- <i class="fa fa-angle-down" aria-hidden="true"></i> --></span></span>
      <div class="line-chart">
        <canvas id="canvas"></canvas>
      </div>
  </div>
    </div>

</div>
<div class="col-lg-12 goals-border">
<div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
<span class="all-goal">Your Shared Lists</span>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
<div class="add-new-box add-new-box-list" type="button" data-toggle="modal" data-target="#myModal" style="cursor:pointer;">
    <span class="span1">Add New +</span>
</div>
</div>
</div>


    <div class="col-lg-12 recent-learn new-share">
  
    <div class="table-responsive">                
    <table class="table table-bordered">
    <thead>
      <tr class="bg">
        <th>Name Of Company</th>
        <th>Email</th>
        <th>Invite</th>
        <th>View</th>
        <th>Expire Days</th>
        <th>Shared Date</th>
        <th>Remark</th>
    
      </tr> 
    </thead>
    <tbody>
@foreach($listShareInfo as $listShareInfoData)
{{$listShareInfoData->id}}
       <tr>
        <td> <i class="fa fa-user"></i><b>{{$listShareInfoData->company_name}}</b></td>
        <td>{{$listShareInfoData->receiver_email}}</td>
        <td><i class="fa fa-share-alt" aria-hidden="true"></i>{{$listShareInfoData->total_invitation}}</td>
@php

    $totalView=\App\Models\Viewsharedlist::where('shared_id', $listShareInfoData->id)->get()->count();
@endphp
        <td><i class="fa fa-eye" aria-hidden="true"></i> {{$totalView}} Views</td>
        <td>{{$listShareInfoData->expire_date}}</i></td>
        <td>{{date('d-M-Y',strtotime($listShareInfoData->created_at))}}</i></td>
        <td>{{substr($listShareInfoData->remark,0,30)}}</td>
    
       </tr>
@endforeach
    </tbody>
  </table>
  </div>
 </div>


                                </div><!-- end row -->      
                            </div><!-- end widget -->
                        </div><!-- end col -->

               
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
      <!-- Modal content-->
      <div class="modal-content shared-scroll">
      
        <div class="modal-header">
          
          <h4 class="modal-title modal-title1"><i class="fa fa-share-alt"></i> <span style="font-size:13px;color: #333;">Shared List</span></h4>
        </div>

       <form method="post" action="{{url('add-shared-list')}}"> 
        <div class="modal-body">
         @csrf
        <div class="modal-list modal-list-form">
        
        <div class="tesla-box">
            <div class="col-lg-6 col-md-6 text-left">
             <span class="tesla-invite"><i class="fa fa-envelope-o" aria-hidden="true"></i> Invites</span>
            </div>

            <div class="col-lg-6 col-md-6 text-right">
            <span class="tesla-invite tesla-invite1"><i class="fa fa-long-arrow-righ" aria-hidden="true"></i></span>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <label for="create-invite" class="create-invite"><b>Create Invite</b>
            <apan class="textdenger">*</apan></label>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <input type="text" name="company_name" placeholder="company name" required="">
           </div>

           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
           <select name="expireDate" id="select" required="">
                    <option value="30">Expire in 30 Days</option>
                    <option value="20">Expire in 20 Days</option>
                    <option value="10">Expire in 10 Days</option>
                    <option value="5">Expire in 5 Days</option>
          </select>
           </div>

           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
           <label for="sent-invite" class="sent-invite"><b>Sent Invites</b>
           <apan class="textdenger">*</apan></label>
           </div>

           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
           <input type="text" name="receiverInvitationMail" placeholder="joes@gmail.com" required="">
           </div>
           </div>
            <!-- <ul>
                <li>
                <label for="create-invite" class="create-invite"><b>Create Invite</b></label>
                <input type="email" name="email">
                </li>
            </ul> -->
        </div>
<div class="shared-search">
<div class="col-lg-4 col-md-4 col-sm-6">
<h5>Shared Achievements</h5>
</div>

<div class="col-lg-8 col-md-8 col-sm-6 text-right" style="padding-right:0px">

<select class="achivementList" name="achivementList[]" id="select" multiple="true"> 

  <option value="">Select Achivement</option>
  @foreach($achivementInfo as $achivementInfoDropVal)
  <option value="{{$achivementInfoDropVal-id}}">{{$achivementInfoDropVal->achivementName}}</option>
  @endforeach
</select>
<!-- 
<input type="text" id="getAchievement" name="getAchievement" placeholder="Find achievement to add">
 -->
</div>
</div>

<section class="share-achievement-list-program">

@foreach($achivementInfo as $achKey=>$achivementInfoData)


<?php

$t1=\Carbon\Carbon::parse($achivementInfoData->created_at);
$t2=\Carbon\Carbon::now();
$diff=$t2->diff($t1);
if($diff->d>=7){
$week=($diff->d/7)." week";
}else{
$week=$diff->d." days";
}
?>




@if($achKey==0)
<div class="share-achievement-outer">
<div class="col-lg-6 col-md-6 col-sm-6">
    <h5><i class="fa fa-graduation-cap" aria-hidden="true"></i>
          {{$achivementInfoData->achivementName}}</h5>

          <span>{{substr($achivementInfoData->Issued_by,0,20)}} Achieved {{$week}} ago</span>

</div>

<div class="col-lg-6 col-md-6 col-sm-6 text-right">
        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF <a href="{{asset('achivementPDF/'.$achivementInfoData->pdfFile)}}" target="_blank"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
</div>
</div> 
@else
<div class="col-lg-12 share-achievement-outer share-achievement-outer1" style="">
<div class="col-lg-6 col-md-6 col-sm-6">
        <h5><i class="fa fa-graduation-cap" aria-hidden="true"></i>
          {{$achivementInfoData->achivementName}}</h5>
     <span>{{substr($achivementInfoData->Issued_by,0,20)}} Achieved {{$week}} ago</span>

</div>

<div class="col-lg-6 col-md-6 col-sm-6 text-right">
        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF <a href="{{asset('achivementPDF/'.$achivementInfoData->pdfFile)}}" target="_blank"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
</div>
</div>  
@endif
@endforeach
<div class="row" style="padding-top: 14px;">

<div class="col-lg-4 col-md-4 col-sm-6" style="padding: 15px;">
<h5>CPD Logs</h5>
</div>

<div class="col-lg-8 col-md-8 col-sm-6 text-right" style="padding: 15px;">

 <select class="cpdList" name="cpdList[]" id="select" multiple="true">  
  <option value="">Select CPD Logs</option>
  @foreach($logInfo as $logInfoVal)
  <option value="{{$achivementInfoDropVal-id}}">{{$logInfoVal->title}}</option>
  @endforeach
</select>
<!-- 
<input type="text" id="getAchievement" name="getAchievement" placeholder="Find achievement to add">
 -->
</div>
</div>

<div class="shared-logs-assesement col-lg-12 col-md-12 col-sm-12">
  <h5>Shared logs</h5>
@foreach($logInfo as $logInfoData)
<div class="shared-log-asses-border">
  <div class="col-lg-6 col-md-6 col-sm-6">
        <h5><i class="fa fa-graduation-cap" aria-hidden="true"></i>{{$logInfoData->title}}</h5>

<span>
{{date('d-M-Y'),strtotime($logInfoData->date)}}. @if($logInfoData->hours>0) {{$logInfoData->hours}} @else 0 @endif  Hours
 </span>

</div>

<div class="col-lg-6 col-md-6 col-sm-6 text-right">
      <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF <a href="{{asset('cpdLogPDF/'.$logInfoData->pdfFile)}}" target="_blank"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> 
</div>
</div>
@endforeach
</div>

<div class="notes-textarea">
<div class="col-lg-4 col-md-4 col-sm-6" style="padding-left: 0;">
<h5  style="margin-top:12px !important">Remark</h5>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
<textarea placeholder="As part of my job training...min(20) max(350)" minlength="20" maxlength="350" id="notes" name="notes"></textarea>
</div>
</div>

</section>

<div class="space text-left">
            <button class="btn btn-primary add-list-shared-page" type="submit" style="cursor:pointer;background-color: #1D9B75 !important">Add List</button>
        </div>
        </div>
 </form>

        </div>
        
      </div>
      
    </div>

@endsection
@section('script')
<script>
$(function(){
  $('#update_popup').fadeOut(3000);
})
window.onload = function () {
  
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  
  title:{
    text:""
  },
  axisX:{
    interval: 1
  },
  axisY2:{
    interlacedColor: "transparent",
    gridColor: "transparent",
    title: ""
  },
  data: [{
    type: "bar",
    name: "companies",
    axisYType: "secondary",
    color: "#014D65",
    dataPoints: [
  
      { y: 100, label: "Streaming" },
      { y: 105, label: "Stacking" },
      { y: 110, label: "Conferences" },
      { y: 120, label: "Equality and Diversity" },
      { y: 130, label: "Inclusion" },
      { y: 134, label: "Assessment - 32" }
    ]
  }]
});
chart.render();

}
</script>

    <script type="text/javascript">
    
    $(function() {

    $(".achivementList").chosen({
    placeholder_text_multiple: "Select your achivement" //placeholder
    });

    $(".cpdList").chosen({
    placeholder_text_multiple: "Select your logs" //placeholder
    });


    $('.chart').easyPieChart({
      size: 115,
      barColor: "#fff",
      scaleLength: 0,
      lineWidth: 8,
      trackColor: "#3333",
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
  blue: '#48B359',
//   purple: 'rgb(153, 102, 255)',
//   grey: 'rgb(231,233,237)'
};

var randomScalingFactor = function() {
  return (Math.random() > 0.5 ? 1.0 : 1.0) * Math.round(Math.random() * 25);
};

// var line1 = [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), ];

// var line2 = [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), ];


    var lchart_labels1 = <?php echo json_encode($chart_label1) ?>;
    var lchart_data1 = <?php echo json_encode($chart_data1) ?>;
    console.log(lchart_labels1);
    console.log(lchart_data1);


var MONTHS = lchart_labels1; //"May", "June", "July", "August", "September", "October", "November", "December"
var config = {
  type: 'line',
  data: {
    labels: MONTHS,
    datasets: [{
      label: "views",
      fill: false,
      backgroundColor: window.chartColors.blue,
      borderColor: window.chartColors.blue,
      data: lchart_data1,
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
</script>
@endsection
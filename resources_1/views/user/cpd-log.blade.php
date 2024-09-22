@extends('user.layout.layout')
@section('title','cMyQual | CPD Logs')
@section('content')
<style>
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
    html{scroll-behavior: smooth;}
    .recent-learn
    {
      padding-top: 0px;
    padding-left: 0;
    padding-right: 0;
    }
    @media(max-width:1024px)
    {
      .new-figma-recent .col-lg-6.col-md-6.col-sm-12
      {
        height:370px;
      }
      .goals-border
      {
        margin-top:10px;
      }
      .recent-learn.cpd-table {
    margin-top: 0%;
}

    }
@media(max-width:414px)
{
  .new-figma-recent .col-lg-6.col-md-6.col-sm-12 {
    height: auto;
}
.recent-learn
{
    padding-left: 25px;
    padding-right: 15px;
}
.goals-border
{
  width: 90%;
  margin-left: 20px;
}
.team-member-name.cpd-list ul
{
  padding-left: 20px;
}
#my-profile p
{
  padding-left:20px;
}
h4.overview-drop
{
    position: absolute;
    z-index: 99;
    top: -44px;
    font-size: 14px!important;
}
h4.cpd-drop
{
    padding-left: 20px;
    padding-top: 20px;
}
.hour-logged {
    margin-top: 47%;
    margin-bottom: 0;
}
}
@media(max-width:375px)
{
  .team-member-name.cpd-list ul li
  {
    padding:5px 10px;
  }
  .team-member-name.cpd-list ul li.filter-icon
  {
    margin-left:5px;
  }
}
@media(max-width:360px)
{
  h4.overview-drop
  {
    top:-35px;
  }
}
.expDate{
    margin: 5px 0 0px 50px;
    width: 83%;
    padding: 5px 10px 5px 10px;
    background-color: #fff;
    border: 1px solid rgb(62 163 164 / 55%);
     }
     #summary
{
    margin: 5px 0 0px 84px;
    width: 83%;
    padding: 9px 10px 9px 10px;
    border: none;
    background: #fff;
    font-size: 12px;
    max-height: 70px;
    border: 1px solid rgb(62 163 164 / 55%);
} 
.summary-area{position: absolute;} 
#hours:focus
{
  outline: none;
}  
.tag{
    margin: 5px 0 0px 15px !important;
    width: 83% !important;    
}
.error{
 border-color:#ef3f17cc !important;    
}     

</style>

@if(Session::has('remove_cpdlog'))
<div id="remove_achi_popup" style="z-index: 999; height: auto; width: 305px; background-color:#1D9B75; position: fixed; top: 38px; text-align: center; vertical-align: sub; left: 1035px; margin-top: 35px; color: rgb(25, 25, 25);">
    <p style="padding-top:5px;
    font-size: 15px;
    color: #fff !important;
    padding-left: 10px;
    font-style: oblique;">{{session()->get('remove_cpdlog')}}</p>
</div>
@endif
         
        <div id="wrapper">
        <!-- Sidebar -->
         @include('user.sidebar')

        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div class="demo-parallax parallax section looking-photo nopadbot cpd-log-bg" data-stellar-background-ratio="0.5">
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
                                        <li><a href="cpd-log.php">CPD Log</a></li>
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
                            <div class="about-widget clearfix">
                                <div class="widget-title">
                                    <!-- <h1 class="heading1">My Profile</h1> -->
                                   
                                </div><!-- end title -->
                                <div class="row">
                                    
                                  

                                    <div class="col-md-12 col-sm-12">
                                        <div class="team-member-name cpd-list">
                                        <h4 class="cpd-drop">CPD Logs</h4>
                                        <p>Including skills learned , tracking of hours</p>
                                       <!--  <ul style="cursor:pointer;">
                                           <li>
                                           <i class="fa fa-calendar-o" aria-hidden="true"></i> Custom
                                           </li>
                                           <li class="active" onclick="getcpdlogOneMonth('1')">
                                               30 Days
                                           </li>
                                           <li onclick="getcpdlogTwoMonth('2')">
                                               3 Months
                                           </li>
                                           <li onclick="getcpdlogThreeMonth('6')">
                                               6 Months
                                           </li>
                                           <li class="filter-icon">
                                           <i class="fa fa-filter" aria-hidden="true"></i>
                                           </li>
                                       </ul> -->
                                        </div>
                               
                                        <!-- <hr class="invis"> -->
                                    </div><!-- end col -->
                                    <!-- <div class="col-lg-12">
                                    
                                    </div> -->

<div class="col-lg-12 new-figma-recent">

    <div class="col-lg-6 col-md-6 col-sm-12">
    <h4 class="overview-drop"><i class="fa fa-caret-down" aria-hidden="true"></i>  Overview</h4>
    <div class="hour-logged">
    <!--   <span><h4>32 hours logged in past 30 days</h4></span> -->
      
     <!--  <span class="hour-logged"><span>+34%</span> from previous period </span> -->
      <div class="line-chart">
        <canvas id="canvas"></canvas>
        <canvas style="display:none" id="canvas1"></canvas>
        <canvas style="display:none" id="canvas2"></canvas>
        <canvas style="display:none" id="canvas3"></canvas>
      </div>


  </div>
    </div>
<div class="col-lg-6 col-md-6 col-sm-12">
<h4>Tags</h4>
<canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>

</div>
</div>
<div class="col-lg-12 goals-border">
<div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
<span class="all-goal">Your CPD Logs</span>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
<a href="javascript:void(0)" onclick="addCPDlog()"><div class="add-new-box add-new-box1" type="button">
    <span>Add New +</span>
</div></a>
</div>
</div>

    <div class="col-lg-12 recent-learn cpd-table">
    <div class="table-responsive">                
    <table class="table table-bordered">
    <thead>
      <tr class="bg">
        <th>Date</th>
        <th>Title</th>
        <th>Provider</th>
        <th>Standards</th>
        <th>Hours</th>
        <th>Summary</th>
        <th>Notes</th>
        <th>Tags</th>
       <th>Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($cpdLogInfo as $cpdLogInfoData)
      <tr>
        <td><b>{{date('d-m-Y',strtotime($cpdLogInfoData->date))}}</b></td>
        <td>{{$cpdLogInfoData->title}}</td>
        <td>{{$cpdLogInfoData->providers}}</td>
        <td>@if($cpdLogInfoData->stander){{$cpdLogInfoData->stander}} @else N/A @endif</td>
        <td>@if($cpdLogInfoData->hours){{$cpdLogInfoData->hours}} @else N/A @endif</td>
        <td>@if($cpdLogInfoData->summary){{$cpdLogInfoData->summary}} @else N/A @endif</td>
        <td>@if($cpdLogInfoData->notes){{$cpdLogInfoData->notes}} @else N/A @endif</td><td>@if($cpdLogInfoData->tags){{$cpdLogInfoData->tags}} @else N/A @endif</td>
        <td><a href="javascript:void(0)" onclick="editlog({{$cpdLogInfoData->id}})"><i class="fa fa-edit" style="color:#1D9B75!important"></i></a>
        <a href="javascript:void(0)" onclick="removelog({{$cpdLogInfoData->id}})"><i class="fa fa-trash" style="color:#1D9B75!important"></i></a>
        <a href="{{asset('public/cpdLogPDF/'.$cpdLogInfoData->pdfFile)}}" target="_blank"><i class="fa fa-eye" style="color:#1D9B75!important"></i></a>
        </td>
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
         
          <h4 class="modal-title modal-title1" id="AddId"><i class="fa fa-info-circle" aria-hidden="true"></i><span style="font-size:13px;color: #333;"></span> Add CPD Logs</h4>
        </div>
        <div class="modal-body">
     
        <div class="modal-list modal-list-form">
        <form method="post" action="{{url('add-cpd-log')}}" id="cpd-log"> 
         @csrf
         <ul>

            <li>
            <label for="title" class="title"><b>Title<apan class="textdenger">*</apan></b></label>
            <input type="text" id="title" name="title" placeholder="Enter title" maxlength="35" minlength="2" style="margin-left: 53px;" required>
            </li>

            <li>
            <label for="date" class="cpd-date"><b>Date<apan class="textdenger">*</apan></b></label>
            <input type="text" id="date" style="margin-left:49px;" class="expDate" name="date" placeholder = "dd-mm-yyyy" required>
            <input type="text" name="hiddenDate" id="hiddenDate" hidden="">
            </li>
    
            <li>
            <label for="provider" class="provider"><b>Provider<apan class="textdenger">*</apan></b></label>
            <input type="text" placeholder="Organization Name" name="provider" id="provider" maxlength="100" minlength="2" required><!-- <i class="fa fa-pencil-square-o a-pencil pencil1" aria-hidden="true"></i> -->
           </li>
           <li>
            <label for="standard" class="provider"><b>Standards</b></label>
            <input type="text" placeholder="Enter Standards" name="standard" id="standard" maxlength="50" minlength="1"><!-- <i class="fa fa-pencil-square-o a-pencil pencil1" aria-hidden="true"></i> -->
           </li>
          
          <li>
          <label for="hour" class="cpd-hour"><b>Hours</b><apan class="textdenger">*</apan></label>
          <input type="number" placeholder="5 Hours" name="hours" id="hours" maxlength="5" min="0" required=""><!-- <i class="fa fa-pencil-square-o a-pencil pencil1" aria-hidden="true"></i> -->
          </li>

           <li>
           <label for="sumaary" class="summary-area"><b>Summary</b></label>
           <textarea id="summary" name="summary" class="textarea" placeholder="About your log" maxlength="150" minlength="5"></textarea>
           </li>

           <li>
           <label for="notes" class="notes-area"><b>Notes</b></label>
           <textarea id="notes" name="notes" placeholder="Summery" maxlength="150" minlength="5"></textarea>
           </li>
 
          <li>
          <label for="" class="cpd-hour"><b>Tags</b><apan class="textdenger">*</apan></label>
          <input class="tag" type="text" placeholder="Coding" name="tags" id="tags" maxlength="25" minlength="2" required>
          <input type="text" name="editId" id="editId" hidden>
          </li>

        </ul>
        <div class="space text-left">
            <button class="btn btn-primary" type="submit" style="cursor:pointer;background-color: #1D9B75 !important">Add Log</button>
          </div>
        </form> 
        </div>

        </div>     
      </div>
      
    </div>
  
@endsection

@section('script')
<script>

    $("#date").flatpickr({
    dateFormat: "d-m-Y"
    });
    
    $('#cpd-log').validate({
    errorPlacement: function(){
            return false;  // suppresses error message text
        }
});
    
window.onload = function () {

    var lchart_labels = <?php echo json_encode($lchart_label) ?>;
    var lchart_data = <?php echo json_encode($lchart_hours) ?>;
    var bchart_labels = <?php echo json_encode($bchart_label) ?>;
    var bchart_data = <?php echo json_encode($bchart_hours) ?>;
//-------------
    //- BAR CHART -
    //-------------
     var bChartData = {
      //labels  : ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
      labels  : bchart_labels,
      datasets: [
        {
          label               : 'Hours',
          backgroundColor     : '#1D9B75',
          borderColor         : '#1D9B75',
          pointRadius          : false,
          pointColor          : '#1D9B75',
          pointStrokeColor    : '#1D9B75',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#1D9B75',
          //data                : [28, 48, 40, 19, 86, 27, 90]
          data                : bchart_data
        },
      ]
    }
    
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, bChartData)
    var temp0 = barChartData.datasets[0]
    barChartData.datasets[0] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })
}

// window.onload = function () {
  
// var chart = new CanvasJS.Chart("chartContainer", {
//   animationEnabled: true,
  
//   title:{
//     text:""
//   },
//   axisX:{
//     interval: 1
//   },
//   axisY2:{
//     interlacedColor: "transparent",
//     gridColor: "transparent",
//     title: ""
//   },
//   data: [{
//     type: "bar",
//     name: "companies",
//     axisYType: "secondary",
//     color: "#014D65",
//     dataPoints: [
  
//       { y: 100, label: "Streaming" },
//       { y: 105, label: "Stacking" },
//       { y: 110, label: "Conferences" },
//       { y: 120, label: "Equality and Diversity" },
//       { y: 130, label: "Inclusion" },
//       { y: 134, label: "Assessment - 32" }
//     ]
//   }]
// });
// chart.render();


// }
</script>

   
<script>

$(function(){
 $('#remove_achi_popup').fadeOut(3000);

var month=["Jan", "Feb", "March", "April" , "May","June", "July", "August", "September", "October", "November", "December"];
var data=<?php echo json_encode($chartData['chart']['val']); ?>;
var month=<?php echo json_encode($chartData['chart']['mon']); ?>;
var id="canvas";
chart(data,month,id);

})

function chart(data,month,id){
// alert(data);
// alert(month);
// alert(id);

    var lchart_labels = <?php echo json_encode($lchart_label) ?>;
    var lchart_data = <?php echo json_encode($lchart_hours) ?>;
    var bchart_labels = <?php echo json_encode($bchart_label) ?>;
    var bchart_data = <?php echo json_encode($bchart_hours) ?>;
    console.log(lchart_labels);
    console.log(lchart_data);


window.chartColors = {
  red: 'transparent',
  orange: 'tranparent',
//   yellow: 'rgb(255, 205, 86)',
  green: 'rgb(75, 192, 192)',
  blue: '#48B359',
//   purple: 'rgb(153, 102, 255)',
//   grey: 'rgb(231,233,237)'
};

var line1 = lchart_data;

var line2 =  lchart_data;

var MONTHS = lchart_labels; 

var config = {
  type: 'line',
  data: {
    labels: MONTHS,
    

    datasets: [{
    
      label: "CPD LOGS Hrs",
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
           gridLines : {
             display : false,
           }
         }],
         yAxes: [{
           gridLines : {
             display : false,
           }
         }]
       }
  }
};


var ctx = document.getElementById(id).getContext("2d");
var myLine = new Chart(ctx, config);

var line1 = data;

var line2 = data;

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
}

function editlog(id){
$('#AddId').html('Edit CPD Logs');
   
$('input[type="text"]').removeClass('error');
$('input[type="date"]').removeClass('error');
$('input[type="number"]').removeClass('error');  
$.ajax({
url:'{{url('getEditLogData')}}',
method:'POST',
data:{id:id,'_token':'{{csrf_token()}}'},
success:function(data){
console.log(data);   
$('#myModal').modal('show');
$('#title').val(data[0].title);
$('#date').val(data[1]);
$('#hiddenDate').val(data[1]);

$('#provider').val(data[0].providers);
$('#standard').val(data[0].stander);
$('#hours').val(data[0].hours);
$('#summary').val(data[0].summary);
$('#notes').val(data[0].notes);
$('#tags').val(data[0].tags);
$('#editId').val(data[0].id);

}
})
}


function removelog(id){
if(confirm('Are you sure to remove this log !')){
$.ajax({
url:'{{url('removeUserLogData')}}',
method:'POST',
data:{id:id,'_token':'{{csrf_token()}}'},    
success:function(data){
window.location.href='{{url('user/cpd-log')}}'; 
}
})
    
}else{
return false;    
} 

}

function addCPDlog(){
$('input[type="text"]').removeClass('error');
$('input[type="date"]').removeClass('error');
$('input[type="number"]').removeClass('error');  
$('#AddId').html('Add CPD Logs');  
$('#myModal').modal('show');
$('input[type="text"]').val('');
$('input[type="number"]').val('');
$('.textarea').val('');

$('#notes').val('');

}

</script>
@endsection
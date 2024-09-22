@extends('super.layouts.app')
@section('after-style')

@endsection
@section('content') 
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item active">Dashboard</li>
            </ol>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="{{route('employer-list')}}">
               <div class="small-box bg-primary">
                  <div class="inner">
                     <h3>{{$emp}}</h3>
                     <p>Employers</p>
                  </div>
                  <div class="icon">
                     <i class="ion ion-briefcase"></i>
                  </div>
               </div>
            </a>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="{{route('life-long-learner')}}">
               <div class="small-box bg-primary">
                  <div class="inner">
                     <h3>{{$lr}}</h3>
                     <p>Learners</p>
                  </div>
                  <div class="icon">
                     <i class="ion ion-person"></i>
                  </div>
               </div>
            </a>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="{{route('learning-partners')}}">
               <div class="small-box bg-primary">
                  <div class="inner">
                     <h3>{{$lp}}</h3>
                     <p>Learning Partners</p>
                  </div>
                  <div class="icon">
                     <i class="ion ion-clipboard"></i>
                  </div>
               </div>
            </a>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
               <div class="inner">
                  <h3>{{$tot}}</h3>
                  <p>Total Users</p>
               </div>
               <div class="icon">
                  <i class="ion ion-bookmark"></i>
               </div>
               
            </div>
         </div>
         <div class="col-md-6">
            <!-- LINE CHART -->
            <div class="card card-primary">
               <div class="card-header">
                  <h3 class="card-title">Online Users</h3>
               </div>
               <div class="card-body">
                  <div class="chart">
                     <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
               </div>
            </div>
            <!-- /.card -->
         </div>
         <div class="col-md-6">
            
            <!-- DONUT CHART -->
            <div class="card card-primary">
               <div class="card-header">
                  <h3 class="card-title">Types Of Users</h3>
               </div>
               <div class="card-body">
                  <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
               </div>
               <!-- /.card-body -->
            </div>
            <!-- /.card -->

         </div>
         <!-- /.col (LEFT) -->
         <div class="col-md-12">
            
            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
               <div class="card-header">
                  <h3 class="card-title">Direct Chat</h3>
                  <div class="card-tools">
                     <span title="3 New Messages" class="badge badge-primary">3</span>
                     <button type="button" class="btn btn-tool" data-card-widget="collapse">
                     <i class="fas fa-minus"></i>
                     </button>
                     <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                     <i class="fas fa-comments"></i>
                     </button>
                     <button type="button" class="btn btn-tool" data-card-widget="remove">
                     <i class="fas fa-times"></i>
                     </button>
                  </div>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                     <!-- Message. Default to the left -->
                     <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                           <span class="direct-chat-name float-left">Alexander Pierce</span>
                           <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="{{asset('assets/super-admin/dist/img/user1-128x128.jpg')}}" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                           Is this template really for free? That's unbelievable!
                        </div>
                        <!-- /.direct-chat-text -->
                     </div>
                     <!-- /.direct-chat-msg -->
                     <!-- Message to the right -->
                     <div class="direct-chat-msg right">
                        <div class="direct-chat-infos clearfix">
                           <span class="direct-chat-name float-right">Sarah Bullock</span>
                           <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="{{asset('assets/super-admin/dist/img/user3-128x128.jpg')}}" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                           You better believe it!
                        </div>
                        <!-- /.direct-chat-text -->
                     </div>
                     <!-- /.direct-chat-msg -->
                     <!-- Message. Default to the left -->
                     <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                           <span class="direct-chat-name float-left">Alexander Pierce</span>
                           <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="{{asset('assets/super-admin/dist/img/user1-128x128.jpg')}}" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                           Working with AdminLTE on a great new app! Wanna join?
                        </div>
                        <!-- /.direct-chat-text -->
                     </div>
                     <!-- /.direct-chat-msg -->
                     <!-- Message to the right -->
                     <div class="direct-chat-msg right">
                        <div class="direct-chat-infos clearfix">
                           <span class="direct-chat-name float-right">Sarah Bullock</span>
                           <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                           I would love to.
                        </div>
                        <!-- /.direct-chat-text -->
                     </div>
                     <!-- /.direct-chat-msg -->
                  </div>
                  <!--/.direct-chat-messages-->
                  <!-- Contacts are loaded here -->
                  <div class="direct-chat-contacts">
                     <ul class="contacts-list">
                        <li>
                           <a href="#">
                              <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">
                              <div class="contacts-list-info">
                                 <span class="contacts-list-name">
                                 Count Dracula
                                 <small class="contacts-list-date float-right">2/28/2015</small>
                                 </span>
                                 <span class="contacts-list-msg">How have you been? I was...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                           </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                           <a href="#">
                              <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">
                              <div class="contacts-list-info">
                                 <span class="contacts-list-name">
                                 Sarah Doe
                                 <small class="contacts-list-date float-right">2/23/2015</small>
                                 </span>
                                 <span class="contacts-list-msg">I will be waiting for...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                           </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                           <a href="#">
                              <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">
                              <div class="contacts-list-info">
                                 <span class="contacts-list-name">
                                 Nadia Jolie
                                 <small class="contacts-list-date float-right">2/20/2015</small>
                                 </span>
                                 <span class="contacts-list-msg">I'll call you back at...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                           </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                           <a href="#">
                              <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">
                              <div class="contacts-list-info">
                                 <span class="contacts-list-name">
                                 Nora S. Vans
                                 <small class="contacts-list-date float-right">2/10/2015</small>
                                 </span>
                                 <span class="contacts-list-msg">Where is your new...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                           </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                           <a href="#">
                              <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">
                              <div class="contacts-list-info">
                                 <span class="contacts-list-name">
                                 John K.
                                 <small class="contacts-list-date float-right">1/27/2015</small>
                                 </span>
                                 <span class="contacts-list-msg">Can I take a look at...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                           </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                           <a href="#">
                              <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">
                              <div class="contacts-list-info">
                                 <span class="contacts-list-name">
                                 Kenneth M.
                                 <small class="contacts-list-date float-right">1/4/2015</small>
                                 </span>
                                 <span class="contacts-list-msg">Never mind I found...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                           </a>
                        </li>
                        <!-- End Contact Item -->
                     </ul>
                     <!-- /.contacts-list -->
                  </div>
                  <!-- /.direct-chat-pane -->
               </div>
               <!-- /.card-body -->
               <div class="card-footer">
                  <form action="#" method="post">
                     <div class="input-group">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                        <span class="input-group-append">
                        <button type="button" class="btn btn-primary">Send</button>
                        </span>
                     </div>
                  </form>
               </div>
               <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
        
         </div>
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
@section('after-script')
<script>
   $(function () {
     /* ChartJS
      * -------
      * Here we will create a few charts using ChartJS
      */
   
     //--------------
     //- AREA CHART -
     //--------------
   
     // Get context with jQuery - using jQuery's .get() method.
     var labels = <?php echo json_encode($data['label']) ?>;
     var data = <?php echo json_encode($data['count']) ?>; 
     console.log(data);

     var areaChartData2 = {
       labels  : labels,
       datasets: [
         {
           label               : 'Online Users',
           backgroundColor     : '#1D9B75',
           borderColor         : '#1D9B75',
           pointRadius          : true,
           pointColor          : '#3b8bba',
           pointStrokeColor    : 'rgba(60,141,188,1)',
           pointHighlightFill  : 'black',
           pointHighlightStroke: 'rgba(60,141,188,1)',
           data                : data
         },
       ]
     }
   
     var areaChartOptions = {
       maintainAspectRatio : true,
       responsive : true,
       legend: {
         display: true
       },
       scales: {
         xAxes: [{
           gridLines : {
             display : true,
           }
         }],
         yAxes: [{
           gridLines : {
             display : true,
           }
         }]
       }
     }
   
     //-------------
     //- LINE CHART -
     //--------------
     var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
     var lineChartOptions = $.extend(true, {}, areaChartOptions)
     var lineChartData = $.extend(true, {}, areaChartData2)
     lineChartData.datasets[0].fill = false;
     lineChartOptions.datasetFill = false
   
     var lineChart = new Chart(lineChartCanvas, {
       type: 'line',
       data: lineChartData,
       options: lineChartOptions
     })

   
     //-------------
     //- DONUT CHART -
     //-------------
     // Get context with jQuery - using jQuery's .get() method.
     var emp = <?php echo json_encode($emp) ?>;
     var lr = <?php echo json_encode($lr) ?>;
     var lp = <?php echo json_encode($lp) ?>;
     var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
     var donutData        = {
       labels: [
           'Learners',
           'Employers',
           'Partners',
       ],
       datasets: [
         {
           data: [lr,emp,lp],
           backgroundColor : ['#f56954', '#00a65a', '#f39c12'],
         }
       ]
     }
     var donutOptions     = {
       maintainAspectRatio : false,
       responsive : true,
     }
     //Create pie or douhnut chart
     // You can switch between pie and douhnut using the method below.
     new Chart(donutChartCanvas, {
       type: 'doughnut',
       data: donutData,
       options: donutOptions
     })
   

   })
</script>
@endsection
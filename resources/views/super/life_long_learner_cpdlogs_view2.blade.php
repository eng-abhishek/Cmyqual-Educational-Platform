@extends('super.layouts.app') @section('after-style') @endsection @section('content')
<!-- Main content -->
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>View Learner</h1> </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Manage Learner</a></li>
          <li class="breadcrumb-item active">View Learner CPDLog</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
<div class="content mt-2">
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-3">
        @include('super.partials.sec-sidebar')
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">CPD Logs</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('learner-cpdlogs-view-expanded', $stu_data->id)}}">Expand Table</a></li>
                </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="profile">
                  <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
                      <div class="row">
                        <div class="col-6 col-md-6 col-lg-6">
                          <div class="card card-primary">
                             <div class="card-header">
                                <h3 class="card-title">Overview</h3>
                             </div>
                             <div class="card-body">
                                <div class="chart">
                                   <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                             </div>
                             <!-- /.card-body -->
                          </div>
                        </div>
                        <div class="col-md-6">
                          <!-- AREA CHART -->
                          <div class="card card-primary">
                             <div class="card-header">
                                <h3 class="card-title">Tags</h3>
                             </div>
                             <div class="card-body">
                                <div class="chart">
                                   <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                             </div>
                             <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                      </div>
                    </div>
                      <div class="row">
                        <div class="col-12">
                           <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Provider</th>
                                <th>Summary</th>
                                <th>Created at</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($cpd_data as $key => $cpd)
                              <tr>
                                <td>{{$cpd->date}}</td>
                                <td>{{$cpd->title}}</td>
                                <td>{{$cpd->providers}}</td>
                                <td>{{$cpd->summary}}</td>
                                <td>{{$cpd->created_at}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <!-- /.content -->
        <!-- /.card -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div> 
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
     var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
   
     var areaChartData = {
       labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
       datasets: [
         {
           label               : 'Digital Goods',
           backgroundColor     : '#1D9B75',
           borderColor         : '#1D9B75',
           pointRadius          : false,
           pointColor          : '#3b8bba',
           pointStrokeColor    : 'rgba(60,141,188,1)',
           pointHighlightFill  : '#fff',
           pointHighlightStroke: 'rgba(60,141,188,1)',
           data                : [1, 4, 10, 15, 26, 27, 30]
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
   
     // This will get the first returned node in the jQuery collection.
     new Chart(areaChartCanvas, {
       type: 'line',
       data: areaChartData,
       options: areaChartOptions
     })
     
     var lineChartData = {
       labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
       datasets: [
         {
           label               : 'CPD LOGS',
           backgroundColor     : '#1D9B75',
           borderColor         : '#1D9B75',
           pointRadius          : false,
           pointColor          : '#3b8bba',
           pointStrokeColor    : 'rgba(60,141,188,1)',
           pointHighlightFill  : '#fff',
           pointHighlightStroke: 'rgba(60,141,188,1)',
           data                : [1, 4, 0, 1, 26, 7, 30]
         },
       ]
     }
   
     var lineChartOptions = {
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
     var lineChartOptions = $.extend(true, {}, lineChartOptions)
     var lineChartData = $.extend(true, {}, lineChartData)
     lineChartData.datasets[0].fill = false;
     // lineChartData.datasets[1].fill = false;
     lineChartOptions.datasetFill = false
   
     var lineChart = new Chart(lineChartCanvas, {
       type: 'line',
       data: lineChartData,
       options: lineChartOptions
     })

   
     
   

   })
</script>
@endsection
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
                      
                      <!-- /.col (LEFT) -->
                        <div class="col-md-6">
                            <!-- LINE CHART -->
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
                            <!-- /.card -->
                        </div>
                        
                        <div class="col-md-6">
                            <!-- BAR CHART -->
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">Tags</h3>
                              </div>
                              <div class="card-body">
                                <div class="chart">
                                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
                              @forelse($cpd_data as $key => $cpd)
                              <tr>
                                <td>{{date("d M y", strtotime($cpd->date))}}</td>
                                <td>{{$cpd->title}}</td>
                                <td>{{$cpd->providers}}</td>
                                <td>{{$cpd->summary}}</td>
                                <td>{{date("d M y", strtotime($cpd->created_at))}}</td>
                              </tr>
                              @empty
                              <tr><td>No Data Found.</td></tr>
                              @endforelse
                            </tbody>
                          </table>
                          <div class="float-right">{!! $cpd_data->appends(Request::all())->links() !!}</div>    
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

    //-------------
    //- LINE CHART -
    //--------------
    var lchart_labels = <?php echo json_encode($lchart_label) ?>;
    var lchart_data = <?php echo json_encode($lchart_hours) ?>;
    var bchart_labels = <?php echo json_encode($bchart_label) ?>;
    var bchart_data = <?php echo json_encode($bchart_hours) ?>;
    console.log(bchart_labels);
    console.log(bchart_data);

    var lChartData = {
      // labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      labels  : lchart_labels,
      datasets: [
        {
          label               : 'CPD LOGS Hrs',
          borderColor         : '#1D9B75',
          pointRadius          : false,
          pointColor          : '#1D9B75',
          pointStrokeColor    : '#1D9B75',
          pointHighlightFill  : '#1D9B75',
          pointHighlightStroke: '#1D9B75',
          // data                : [8, 8, 0, 9, 6, 7, 0]
          data                : lchart_data
        },
      ]
    }

    var lineChartOption = {
      maintainAspectRatio : false,
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
    
    
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, lineChartOptions)
    var lineChartData = $.extend(true, {}, lChartData)
    lineChartData.datasets[0].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

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

  })
</script>
@endsection
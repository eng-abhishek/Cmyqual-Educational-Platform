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
          <li class="breadcrumb-item active">View Learner Shared List</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
<div class="col-sm-12">
            @if (count($errors) > 0)
          <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session()->get('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          @endif
          @if(session()->has('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session()->get('error') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          @endif
          </div><!-- /.col -->
<div class="content mt-2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">@include('super.partials.sec-sidebar')</div>
      <!-- /.col -->
      <div class="col-md-9">
        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Shared List</a></li>
                </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="profile">
                  <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
                       <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                          <div class="card card-primary">
                             <div class="card-header">
                                <h3 class="card-title">Overview (Past 4 Weeks)</h3>
                             </div>
                             <div class="card-body">
                                <div class="chart">
                                   <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                             </div>
                             <!-- /.card-body -->
                          </div>
                        </div>
                        
                    </div>
                      <div class="row">
                        <div class="col-12">
                           <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Shared Date</th>
                                <th>Company Name</th>
                                <th>Receiver Email</th>
                                <th>Invite</th>
                                <th>View </th>
                                <th>Expiry Days</th>
                                <th>Remark</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($shared_data as $sh)
                              <tr>
                                <td> {{ date("d M y", strtotime($sh->created_at)) }} </td>  
                                <td> {{ $sh->company_name }} </td>
                                <td> {{ $sh->receiver_email }} </td>
                                <td> {{ $sh->invites ? $sh->invites : 'Not Found'  }} </td>
                                <td> {{ $sh->view ? $sh->view." Views" : 'Not Found'  }} </td>
                                <td> {{ $sh->expire_date ? $sh->expire_date." Days" : 'Not Found'}} </td>
                                <td> {{ $sh->remark ? $sh->remark : 'Not Found'  }} </td>
                                <td><a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#addModal{{$sh->id}}"><i class="fas fa-edit"></i>&nbsp;Remark</a></td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="float-right">{!! $shared_data->appends(Request::all())->links() !!}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <!-- /.content -->

                    @foreach($shared_data as $d)
                    <div class="modal fade" id="addModal{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Remark</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form action="{{route('shared-remark-update')}}" method="post">
                                  @csrf
                                  <div class="modal-body">
                                    <input type="hidden" name="sh_id" value="{{$d->id}}">
                                    <label class="form-label">Remark</label>
                                    <input class="form-control" type="text" name="remark" required>
                                  </div>
                                  <div class="modal-footer">
                                      <button class="btn btn-primary">Update</button>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach


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
      
    var lchart_labels = <?php echo json_encode($chart_label) ?>;
    var lchart_data = <?php echo json_encode($chart_data) ?>; 


     var areaChartData = {
       //labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
       labels  : lchart_labels,
       datasets: [
         {
           label               : 'Views',
           backgroundColor     : '#1D9B75',
           borderColor         : '#1D9B75',
           pointRadius          : false,
           pointColor          : '#3b8bba',
           pointStrokeColor    : 'rgba(60,141,188,1)',
           pointHighlightFill  : '#fff',
           pointHighlightStroke: 'rgba(60,141,188,1)',
           data                : lchart_data
         },
       ]
     }
   
     var areaChartOptions = {
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
   
     // This will get the first returned node in the jQuery collection.
     new Chart(areaChartCanvas, {
       type: 'line',
       data: areaChartData,
       options: areaChartOptions
     })
   
     //-------------
     //- LINE CHART -
     //--------------
     var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
     var lineChartOptions = $.extend(true, {}, areaChartOptions)
     var lineChartData = $.extend(true, {}, areaChartData)
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
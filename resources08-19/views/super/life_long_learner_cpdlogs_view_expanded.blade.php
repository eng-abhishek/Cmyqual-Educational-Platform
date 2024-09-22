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
     
      <!-- /.col -->
      <div class="col-md-12">
        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">CPD Logs</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('learner-cpdlogs-view', $stu_data->id)}}">Back</a></li>
                </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="profile">
                  <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
                      <div class="row">
                        
                      </div>
                      <div class="row">
                        <div class="col-12">
                           <table id="example1" class="table table-bordered">
                            <thead>
                              <tr>
                                <th style="width: 10px">Date</th>
                                <th>Title</th>
                                <th>Provider</th>
                                <th>Standards</th>
                                <th>Hours</th>
                                <th>Summary</th>
                                <th>Notes</th>
                                <th>Tags</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($cpd_data as $key => $cpd)
                              <tr>
                                <td>{{$cpd->date}}</td>
                                <td>{{$cpd->title}}</td>
                                <td>{{$cpd->providers}}</td>
                                <td>{{$cpd->stander}}</td>
                                <td>{{$cpd->hours}}</td>
                                <td>{{$cpd->summary}}</td>
                                <td>{{$cpd->notes}}</td>
                                <td>{{$cpd->tags}}</td>
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
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@endsection
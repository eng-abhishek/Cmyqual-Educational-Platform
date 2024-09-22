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
          <li class="breadcrumb-item active">View Learner Achievements</li>
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
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Achievements</a></li>
                </ul>
              <!-- /.card-header -->
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="profile">
                  <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                      <div class="row">
                        <div class="col-12">
                          <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>Achievement </b></td>
                                    <td>{{$ach_data->achivementName ? $ach_data->achivementName : 'Not Found'}}  @if($ach_data->is_approved == 0)<span class="badge badge-pill badge-primary">Not Approved</span>@elseif($ach_data->is_approved == 1)<span class="badge badge-pill badge-primary">Approved</span>@else<span class="badge badge-pill badge-danger">Rejected</span>@endif</td>
                                  </tr>
                                  <tr>
                                    <td><b>Issued on </b></td>
                                    <td>{{$ach_data->Issued ? $ach_data->Issued : 'Not Found'}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Issue by </b></td>
                                    <td>{{$ach_data->Issued_by ? $ach_data->Issued_by : 'Not Found'}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Expiry date </b></td>
                                    <td>{{$ach_data->expires_date ? $ach_data->expires_date : 'Not Found'}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Link </b></td>
                                    <td>{{$ach_data->link_to_course ? $ach_data->link_to_course : 'Not Found'}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Duration </b></td>
                                    <td>{{$ach_data->duration ? $ach_data->duration : 'Not Found'}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Language </b></td>
                                    <td>{{$ach_data->language ? $ach_data->language : 'Not Found'}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Credit marks </b></td>
                                    <td>{{$ach_data->credits_marks ? $ach_data->credits_marks : 'Not Found'}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Notes </b></td>
                                    <td>{{$ach_data->notes ? $ach_data->notes : 'Not Found'}}</td>
                                  </tr>
                                </tbody>
                          </table> 
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                              @php
                                $ext = pathinfo($ach_data->cr_image, PATHINFO_EXTENSION); 
                              @endphp
                              @if($ext == "png" || $ext == "jpg" || $ext == "jpeg")
                                <img class="border border-primary img-square" src="{{asset('public/uploads/achivement/'.$ach_data->cr_image)}}" style="height: 100px; width: 180px;"><br>
                                <a href="{{asset('public/uploads/achivement/'.$ach_data->cr_image)}}" class="text-primary"><b>Click here to view</b></a><br>      
                              @elseif($ext == "pdf" || $ext == "docx" || $ext == "doc")
                                <a href="{{asset('public/uploads/achivement/'.$ach_data->cr_image)}}" target="_blank"><i class="fas fa-file-alt fa-7x"></i><br>{{$ach_data->cr_image}}</a>
                              @else
                                <a href="{{asset('public/uploads/achivement/'.$ach_data->cr_image)}}"><i class="fas fa-file-alt fa-7x"></i><br>{{$ach_data->cr_image}}</a>
                              @endif
                      
                      <div class="text-center mt-5 mb-3">
                        @if($ach_data->is_approved == 0)
                        <a href="{{route('learner-achievements-approve', $ach_data->id)}}" class="btn btn-sm btn-primary">Approve</a>&nbsp;
                        @elseif($ach_data->is_approved == 1)
                        <a href="{{route('learner-achievements-rej', $ach_data->id)}}" class="btn btn-sm btn-danger">Reject</a>&nbsp;
                        @elseif($ach_data->is_approved == 2)
                        <a href="{{route('learner-achievements-approve', $ach_data->id)}}" class="btn btn-sm btn-primary">Approve</a>&nbsp;
                        @endif
                        <a href="{{route('learner-achievements-edit', $ach_data->id)}}" class="btn btn-sm btn-primary">Edit </a>&nbsp;
                        <a href="{{route('learner-achievements-delete', $ach_data->id)}}" class="btn btn-sm btn-danger">Delete </a>
                        <a href="{{route('learner-achievements-view', $stu_data->id)}}" class="btn btn-sm btn-danger">Back </a>
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

@endsection
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
          <li class="breadcrumb-item active">View Learner</li>
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
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Personal Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#education" data-toggle="tab">Education</a></li>
                  <li class="nav-item"><a class="nav-link" href="#work" data-toggle="tab">Work Experience</a></li>
                </ul>
             
              <!-- /.card-header -->
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="profile">
                  <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                      <div class="row">
                        <div class="col-12 col-sm-4">
                          <div class="info-box bg-light">
                            @php
                              $last_access = \App\Models\User::where('id', $stu_data->user_id)->first();
                              if(is_null($last_access->login_at))
                              {
                                $l_a = "Not found";                                                                      
                              }
                              else
                              {
                                $l_a = date('d M Y', strtotime($last_access->login_at));
                              }
                              
                              $total_hrs_data = \App\Models\User::where('id', $stu_data->user_id)->first();
                              if(is_null($total_hrs_data->total_login_hours))
                              {
                                $total_hrs = "Not Found";
                              }
                              else
                              {
                                $tot_arr = explode(',',$total_hrs_data->total_login_hours);
                                $total_hrs = $tot_arr[0]."h ".$tot_arr[1]."m ".$tot_arr[2]."s";
                              }
                            @endphp
                            <div class="info-box-content"> <span class="info-box-text text-center text-muted">Login Hours</span> <span class="info-box-number text-center text-muted mb-0">{{$total_hrs}}</span> </div>
                          </div>
                        </div>
                        
                        <div class="col-12 col-sm-4">
                          <div class="info-box bg-light">
                            <div class="info-box-content"> <span class="info-box-text text-center text-muted">Last Access</span><span class="info-box-number text-center text-muted mb-0">      
                            {{$l_a}}</span></div>
                          </div>
                        </div>
                        <div class="col-12 col-sm-4">
                          <div class="info-box bg-light">
                            <div class="info-box-content"> <span class="info-box-text text-center text-muted">Notification</span> <span class="info-box-number text-center text-muted mb-0">@php
                                                $check2 = \App\Models\Achivement::where('student_id', $stu_data->id)->get();
                                                $count = 0;
                                                if(isset($check2))
                                                {
                                                  foreach($check2 as $check)
                                                  {
                                                    if($check->is_viewed == 0)
                                                    {
                                                      $count++;
                                                    }
                                                  }
                                                }
                                                else
                                                {
                                                   $count = 0; 
                                                }
                                                if($count > 0)
                                                {
                                                 echo $count;
                                                }
                                                else
                                                {
                                                  echo "0";
                                                }
                                                @endphp </span> </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <h3 class="text-primary">Personal Profile</h3>
                          <div class="post">
                            <p>
                              <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <td><b>Name </b></td>
                                    @php
                                       $n = explode(',', $stu_data->name);
                                               $len = count($n);
                                               $name = '';
                                               if($len > 0)
                                               {
                                                 for($i=0; $i<$len; $i++)
                                                 {
                                                    $name = $name." ".$n[$i]; 
                                                 }
                                               }
                                               else
                                               {
                                                 $name = $n[0];
                                               }
                                    @endphp
                                    <td>{{$name ? $name : 'Not Found'}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Email </b></td>
                                    <td>{{$stu_data->email ? $stu_data->email : 'Not Found'}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>DOB </b></td>
                                    <td>{{$stu_data->dob ? date("d M y", strtotime($stu_data->dob)) : 'Not Found'}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Country </b></td>
                                    @php $stu_country = \App\Models\Country::find($stu_data->country); @endphp
                                    <td>{{$stu_country ? $stu_country->country_name : 'Not Found'}}</td>
                                  </tr>
                                  
                                  <tr>
                                    <td><b>Phone </b></td>
                                    <td>{{$stu_data->contact_no ? $stu_data->contact_no : 'Not Found'}}</td>
                                  </tr>
                                  
                                  <tr>
                                    <td><b>Current Employer </b></td>
                                    <td>{{$stu_data->current_employer ? $stu_data->current_employer : 'Not Found'}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Linked </b></td>
                                    <td>{{$stu_data->linkedin_handle ? $stu_data->linkedin_handle : 'Not Found'}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Blog </b></td>
                                    <td>{{$stu_data->blog_url ? $stu_data->blog_url : 'Not Found'}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Portfolio </b></td>
                                    <td>{{$stu_data->portfolio_url ? $stu_data->portfolio_url : 'Not Found'}}</td>
                                  </tr>
                                </tbody>
                              </table>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                      @include('super.partials.about_info')
                      
                      <div class="text-center mt-5 mb-3">
                        <a href="{{route('learner-profile-edit', $stu_data->user_id)}}" class="btn btn-sm btn-primary">Edit Profile</a>
                      </div></div>
                  </div>
                </div>
                <div class="tab-pane" id="education">
                  <div class="col-12">
                    <div class="post clearfix">
                      <table class="table table-bordered">
                        <thead>
                          <tr class="text-primary">
                            <th>#</th>
                            <th>Degree</th>
                            <th>School</th>
                            <th>Field Of Study</th>
                            <th>Year</th>
                            <th>Month</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($edu_data as $key => $edu)
                          <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$edu->degree ? $edu->degree : 'Not Found'}}</td>
                            <td>{{$edu->school ? $edu->school : 'Not Found'}}</td>
                            <td>{{$edu->field_of_study ? $edu->field_of_study : 'Not Found'}}</td>
                            <td>{{$edu->grad_year ? $edu->grad_year : 'Not Found'}}</td>
                            <td>{{$edu->grad_month ? $edu->grad_month : 'Not Found'}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="work">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h4 class="card-title">Uploaded CV</h4>
                    </div>
                    <div class="card-body">
                      <div>
                        <div class="filter-container p-0 row">
                          @if(!empty($stu_data->work_exp))
                          <div class="filtr-item col-sm-2">
                            <a href="{{asset('public/uploads/student_cv/'.$stu_data->work_exp)}}" target="_blank">
                              <i class="fas fa-file-alt fa-7x"></i>{{$stu_data->work_exp}}
                            </a><br>
                            <a class="btn btn-sm btn-primary" href="{{asset('public/uploads/student_cv/'.$stu_data->work_exp)}}" download>Download</a> <a class="btn btn-sm btn-primary" href="{{asset('public/uploads/student_cv/'.$stu_data->work_exp)}}" target="_blank" onclick="window.print()">Print</a>
                          </div>
                          @else
                            Data Not Found
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
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
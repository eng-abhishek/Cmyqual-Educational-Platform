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
          <li class="breadcrumb-item active">View Learner Goals Details</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session()->get('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          @endif

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
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Goal Details</a></li>
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
                                    <td><b>Goal Name</b></td>
                                    <td>{{$goal_details->goal_name}}</td>
                                  </tr>
                                  <tr>
                                    @php
                                      $category = App\Models\Goals_category::find($goal_details->category_id);
                                    @endphp
                                    <td><b>Goal Category</b></td>
                                    <td>{{$category->category_name}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Activities</b></td>
                                    @php
                                      $activities = App\Models\Student_activities::where('goal_id', $goal_details->id)->get();
                                    @endphp
                                    <td>
                                      @forelse($activities as $act)
                                        @php
                                          $ac_name = App\Models\Activities::where('id', $act->activity_id)->select('activity_name', 'id')->first();
                                        @endphp
                                          @if($act->status == "Completed")  
                                            <li>{{$ac_name->activity_name}} <a class="text-danger" href="{{route('learner-activity-incomplete', $act->id)}}">Click here to incomplete</a></li>
                                          @else
                                            <li>{{$ac_name->activity_name}} <a href="{{route('learner-activity-complete', $act->id)}}">Click here to complete</a></li>
                                          @endif
                                      @empty
                                        {{'No Data Found'}}
                                      @endforelse  
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><b>Expected Completion Date </b></td>
                                    <td>{{date("d M Y", strtotime($goal_details->cmp_date))}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Created At </b></td>
                                    <td>{{date("d M Y", strtotime($goal_details->created_at))}}</td>
                                  </tr>
                                </tbody>
                          </table> 
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                      <div class="text-center mt-5 mb-3">
                        <a href="{{route('learner-goals-edit', $goal_details->id)}}" class="btn btn-sm btn-primary">Edit </a>&nbsp;
                        <a href="{{route('learner-goals-delete', $goal_details->id)}}" class="btn btn-sm btn-danger">Delete </a>
                        <a href="{{route('learner-goals-view', $stu_data->id)}}" class="btn btn-sm btn-danger">Back </a>
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
@extends('super.layouts.app') 

@section('after-style') 
<style>
    @keyframes shake {
  0% { transform: skewX(-20deg); }
  5% { transform: skewX(20deg); }
  10% { transform: skewX(-20deg); }
  15% { transform: skewX(20deg); }
  20% { transform: skewX(0deg); }
  100% { transform: skewX(0deg); }  
}
</style>
@endsection 

@section('content')
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
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Achievements</a></li>
                  <li class="nav-item"><a class="nav-link " href="{{route('learner-achievements-add', $stu_data->id)}}" >Add New</a></li>
                </ul>
              <!-- /.card-header -->
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="profile">
                  <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
                      <div class="row">
                        <div class="col-12">
                          <div class="row">
                          
                          @foreach($ach_data as $key => $d)

                          <div class="col-12 col-sm-4">
                          <a href="{{route('learner-achievements-detail', $d->id)}}">
                            <div class="info-box bg-primary">
                              @if($d->achivementType == "edu")
                              <span class="info-box-icon"><i class="fa fa-graduation-cap"></i></span>
                              @else
                              <span class="info-box-icon"><i class="fa fa-trophy"></i></span>
                              @endif
                              <div class="info-box-content">
                                @php $string = $d->achivementName; @endphp
                                <span class="info-box-number">
                                  @if($d->is_viewed == 0)
                                    <span class="badge badge-pill badge-warning text-black float-right" style="animation: .8s shake infinite alternate;">New</span>
                                  @elseif($d->is_approved == 0)
                                    <span class="badge badge-pill badge-warning text-black float-right" style="animation: .8s shake infinite alternate;">Not Approved</span>
                                  @elseif($d->is_approved == 1)
                                    <span class="badge badge-pill badge-info float-right">Approved</span>
                                  @else
                                    <span class="badge badge-pill badge-danger float-right">Rejected</span>
                                  @endif
                                </span>
                                <span class="info-box-number">{{$string ? substr($string, 0, 17) : 'Not found'}}</span>
                                <div class="progress">
                                  <div class="progress-bar" style="width:0%"></div>
                                </div>
                                <span class="progress-description">
                                  Issued On : {{date("M y",strtotime($d->Issued))}}
                                </span>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                          </a>
                          </div>
                          
                          <!-- /.col -->
                          @endforeach

                          </div>
                          <div class="float-right">{!! $ach_data->appends(Request::all())->links() !!}</div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
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
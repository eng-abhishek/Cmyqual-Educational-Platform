@extends('super.layouts.app')

@section('after-style')
@endsection
    
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Life Long Learners List</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item ">Dashboard</li>
               <li class="breadcrumb-item active">Manage Learners</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

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

    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Learners List</h3>
                  <a href="{{route('learner-add')}}" class="btn btn-primary float-sm-right">Add New</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                     <tr>
                                            <th>Sl.no</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Image</th>
                                            <th>Registeration Date</th>
                                            <th>Registeration Mode</th>
                                            <th>Action</th>
                                        </tr>
                    </thead>
                    <tbody>
                                        @foreach($data as $key => $d)
                                        
                                        <tr>
                                            <td>{{$key+1}}</td>
                                             @php
                                               $n = explode(',', $d->name);
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
                                            <td style="">{{$name ? $name : 'Not Found'}}<br>
                                              @php
                                                $check_ach = \App\Models\Achivement::where('student_id', $d->id)->where('is_viewed', 0)->count();
                                                $check_goal = \App\Models\Student_goal::where('student_id', $d->id)->where('is_viewed', 0)->count();
                                                if($check_ach > 0 || $check_goal > 0)
                                                {
                                                  $total=$check_ach+$check_goal;
                                                  if($total > 0)
                                                  {
                                                  echo "<p class='badge badge-pill badge-warning text-black ' style='animation: .8s shake infinite alternate;'>".$total." New Changes</p>";
                                                  }
                                                }
                                                
                                              @endphp
                                            
                                            </td>
                                            <td>{{$d->email}}</td>
                                            @if(!empty($d->photos) )
                                              @if(!empty($d->provider_id))
                                                @if(strpos($d->photos, "http") === 0)
                                                <td><img src="{{ $d->photos }}" class="img-thumbnail" style="height: 70px;width: 70px;"></td>
                                                @else
                                                <td><img src="{{ asset('public/uploads/user/'.$d->photos)}}" class="img-thumbnail" style="height: 70px;width: 70px;"></td>
                                                @endif
                                              @else
                                                <td><img src="{{ asset('public/uploads/user/'.$d->photos)}}" class="img-thumbnail" style="height: 70px;width: 70px;"></td>
                                              @endif
                                            @else
                                            <td><img src="{{ asset('assets/super-admin/user.jpg')}}" class="img-thumbnail" style="height: 70px;width: 70px;"></td>
                                            @endif 
                                            @php 
                                              if($d->country)
                                              {
                                                $stu_country = \App\Models\Country::find($d->country);  
                                              }
                                              else
                                              {
                                                $stu_country = ''; 
                                              } 
                                            @endphp
                                            
                                            <td>{{date('d M y', strtotime($d->created_at))}}</td>
                                            <td>{{$d->provider ? $d->provider : 'Cmyqual'}}</td>
                                            <td><a class="btn btn-sm btn-primary" href="{{route('learner-profile', $d->user_id)}}"><i class="fas fa-eye"></i></a> <a class="btn btn-sm btn-danger mt-0" href="#" data-toggle="modal" data-target="#delModal{{$d->id}}"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        
                                        @endforeach
                    
                    </tbody>
                    <tfoot>
                    <tr>
                                            <th>Sl.no</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Image</th>
                                            <th>Register at</th>
                                            <th>Register With</th>
                                            <th>Action</th>
                                        </tr>
                    </tfoot>
                  </table>

                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
          </div>
      </div>
    </div>

     @foreach($data as $d)
                    <div class="modal fade" id="delModal{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Select "Delete" below if you are sure.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-danger" href="{{route('del-learner', $d->user_id)}}">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

@endsection

@section('after-script')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@endsection
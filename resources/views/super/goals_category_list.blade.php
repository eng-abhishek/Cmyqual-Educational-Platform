@extends('super.layouts.app')

@section('after-style')
@endsection
    
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Goals Category List</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item ">Dashboard</li>
               <li class="breadcrumb-item active">Manage Goals Category</li>
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
                  <h3 class="card-title">Goals Category List</h3>
                  <a class="btn btn-primary float-right" href="{{route('goals-category-add')}}">Add</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                     <tr>
                                            <th>Sl.no</th>
                                            <th>Goal Category</th>
                                            <th>Created at</th>
                                            <th>Updated at</th>
                                            <th>Action</th>
                                        </tr>
                    </thead>
                    <tbody>
                                        @foreach($data as $key => $d)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$d->category_name}}</td>
                                            <td>{{date("d-M-y",strtotime($d->created_at))}}</td>
                                            <td>{{date("d-M-y",strtotime($d->updated_at))}}</td>
                                            <td><a class="btn btn-sm btn-primary" href="{{route('goals-category-edit', $d->id)}}" >Edit</a>&nbsp;<a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delModal{{$d->id}}">Delete</a></td>
                                        </tr>
                                        @endforeach
                    
                    </tbody>
                    <tfoot>
                    <tr>
                                            <th>Sl.no</th>
                                            <th>Goal Category</th>
                                            <th>Created at</th>
                                            <th>Updated at</th>
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
                                    <a class="btn btn-danger" href="{{route('goals-category-del', $d->id)}}">Delete</a>
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
@extends('super.layouts.app')

@section('after-style')
@endsection
     
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Activities</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item ">Dashboard</li>
              <li class="breadcrumb-item">Manage Activities</li>
              <li class="breadcrumb-item active">Add Activities</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-sm-12 offset-sm-3">
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
        		<div class="col-md-6 offset-md-3">
		            <!-- jquery validation -->
		            <div class="card card-primary">
		              <div class="card-header">
		                <h3 class="card-title">Add Activities</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form id="quickForm" action="{{route('activity-add-post')}}" method="post">
		              	@csrf
		                <div class="card-body">
		                  <div class="form-group">
		                    <label for="org_name">Activity Title</label>
                        <input type="text" class="form-control" name="activity_name" id="activity_name">
		                  </div>
                      <div class="form-group">
                        <label for="org_name">Activity Category</label>
                        <select class="form-control" name="category_id">
                          @foreach($category as $d)
                          <option value="{{$d->id}}">{{$d->category_name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
		                <!-- /.card-body -->
		                <div class="card-footer">
		                  <button type="submit" class="btn btn-primary float-right">Submit</button>
                      <a href="{{route('activity-list')}}" class="btn btn-danger float-right mr-1">Cancel</a>
		                </div>
		              </form>
		            </div>
		            <!-- /.card -->
		        </div>
        	</div>
    	</div>
    </div>

@endsection

@section('after-script')
<script>
$(document).ready(function() {

jQuery.validator.addMethod("lettersonly", function(value, element) 
{
return this.optional(element) || /^[a-z|A-Z]+(?: [a-z|A-Z]+)*$/i.test(value);
}, "Letters and single space only please");

  $('#quickForm').validate({
    rules: {
      activity_name: {
      	lettersonly:true,
        required: true,
      	minlength: 2,
      	maxlength: 200
      }
    },
    messages: {
      activity_name: {
      	required: "Please enter activity title",
      	minlength: "Minimum 2 character required",
      	maxlength: "Maximum 200 character allowed"
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});

</script>
@endsection
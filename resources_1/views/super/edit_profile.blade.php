@extends('super.layouts.app')

@section('after-style')
@endsection
    
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Settings</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item ">Dashboard</li>
               <li class="breadcrumb-item active">Settings</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-sm-6 offset-sm-3">
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
		                <h3 class="card-title">Edit Profile</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form id="quickForm" action="{{route('super-profile-post', $id)}}" method="post">
		              	@csrf
		                <div class="card-body">
		                  <div class="form-group">
		                    <label for="name">Name</label>
		                    <input type="text" name="name" value="{{$name}}" class="form-control" id="name">
		                  </div>
		                  <div class="form-group">
		                    <label for="email">Email</label>
		                    <input type="email" name="email" value="{{$email}}" class="form-control" id="email" placeholder="Enter email">
		                  </div>
		                  <div class="form-group">
		                    <label for="cur_pass">Current Password</label>
		                    <input type="password" name="password" class="form-control" id="cur_pass" placeholder="Current Password">
		                  </div>
		                  <div class="form-group">
		                    <label for="new_pass">New Password</label>
		                    <input type="password" name="new_pass" class="form-control" id="new_pass" placeholder="New Password">
		                  </div>

		                  <div class="form-group">
		                    <label for="con_pass">Confirm Password</label>
		                    <input type="password" name="con_pass" class="form-control" id="con_pass" placeholder="Confirm Password">
		                  </div>
		                </div>
		                <!-- /.card-body -->
		                <div class="card-footer">
		                  <button type="submit" class="btn btn-primary float-sm-right">Submit</button>
                      <a href="{{route('super-dashboard')}}" class="btn btn-danger float-right mr-1">Cancel</a>
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
<!-- Validation -->
<script src="{{asset('assets/super-admin/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/super-admin/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script>
$(document).ready(function() {

jQuery.validator.addMethod("lettersonly", function(value, element) 
{
return this.optional(element) || /^[a-z|A-Z]+(?: [a-z|A-Z]+)*$/i.test(value);
}, "Letters and single space only please");

  $('#quickForm').validate({
    rules: {
      name: {
        lettersonly: true,
      	required: true,
      	minlength: 5,
      	maxlength: 20
      },	
      email: {
        required: true,
        email: true,
        minlength: 5,
      	maxlength: 20
      },
      password: {
        required: true,
        minlength: 8,
        maxlength: 15
       },
      new_pass: {
        required: true,
        minlength: 8,
        maxlength: 15
       },
      con_pass: {
        required: true,
        minlength: 8,
        maxlength: 15,
        equalTo: "#new_pass"
       }
    },
    messages: {
      name: {
      	required: "Please enter name",
      	minlength: "Minimum 5 character required",
      	maxlength: "Maximum 20 character allowed"
      },	
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address",
        minlength: "Minimum 5 character required",
      	maxlength: "Maximum 20 character allowed"
      },
      password: {
        required: "Please provide a current password",
        minlength: "Your password must be at least 8 characters long",
        maxlength: "Maximum 15 character allowed"
      },
      new_pass: {
        required: "Please provide a new password",
         minlength: "Your password must be at least 8 characters long",
         maxlength: "Maximum 15 character allowed"
      },
      con_pass: {
        required: "Please confirm password",
        minlength: "Your password must be at least 8 characters long",
        maxlength: "Maximum 15 character allowed"
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
@extends('super.layouts.app')

@section('after-style')
@endsection
    
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Learning Partner</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item ">Dashboard</li>
              <li class="breadcrumb-item">Learning Partner List</li>
              <li class="breadcrumb-item active">Add Learning Partner</li>
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
		                <h3 class="card-title">Add Learning Partner</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form id="quickForm" action="{{route('add-lp-post')}}" method="post">
		              	@csrf
		                <div class="card-body">
		                  <div class="form-group">
		                    <label for="lp_name">Learning Partner Name</label>
                        <input type="text" class="form-control" name="learning_partner_name"  id="lp_name">
		                  </div>

		                  <div class="form-group">
		                    <label for="lp_url">Learning Partner Website Url</label>
                        <input type="url" class="form-control" name="learning_partner_url" id="lp_url"> 
		                  </div>

                      <div class="form-group">
                        <label for="admin_name">Admin Full Name</label>
                        <input type="text" class="form-control" name="admin_name" id="admin_name">
                      </div>

                      <div class="form-group">
                        <label for="admin_role">Admin Role</label>
                        <input type="text" class="form-control" name="admin_role" id="admin_role">
                      </div>

		                  <div class="form-group">
		                    <label for="email">Admin Email</label>
                         <input type="email" class="form-control" name="admin_email" id="admin_email">
		                  </div>

                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username">
                      </div>


		                  <div class="form-group">
		                    <label for="pass">Password</label>
                          <input type="password" class="form-control" name="pass" id="pass">    
		                  </div>

		                </div>
		                <!-- /.card-body -->
		                <div class="card-footer">
		                  <button type="submit" class="btn btn-primary float-right">Submit</button>
                      <a href="{{route('learning-partners')}}" class="btn btn-danger float-right mr-1">Cancel</a>
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

  $('#quickForm').validate({
    rules: {
      learning_partner_name: {
      	required: true,
      	minlength: 2,
      	maxlength: 50
      },

      learning_partner_url: {
        url: true,
        minlength: 2,
        maxlength: 500
      },

      admin_name: {
        required: true,
        minlength: 2,
        maxlength: 50
      },

      admin_role: {
        required: true,
        minlength: 2,
        maxlength: 50
      },
      
      admin_email: {
        required: true,
        email: true,
        minlength: 2,
      	maxlength: 50
      },

      username: {
        required: true,
        minlength: 2,
        maxlength: 50
      },

      pass: {
        minlength: 8,
        maxlength: 15
       }
    },
    messages: {
       learning_partner_name: {
        required: "Please enter learning partner name",
        minlength: "Minimum 2 characters required",
        maxlength: "Maximum 50 characters allowed"
      },

      learning_partner_url: {
        minlength: "Minimum 2 characters required",
        maxlength: "Maximum 500 characters allowed"
      },

      admin_name: {
        required: "Please enter admin name",
        minlength: "Minimum 2 characters required",
        maxlength: "Maximum 50 characters allowed"
      },

      admin_role: {
        required: "Please enter admin role",
        minlength: "Minimum 2 characters required",
        maxlength: "Maximum 50 characters allowed"
      },
      
      admin_email: {
        required: "Please enter admin email",
        minlength: "Minimum 2 characters required",
        maxlength: "Maximum 50 characters allowed"
      },

      username: {
        required: "Please enter username",
        minlength: "Minimum 2 characters required",
        maxlength: "Maximum 50 characters allowed"
      },

      pass: {
        minlength: "Minimum 8 characters required",
        maxlength: "Maximum 15 characters allowed"
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
</script>
@endsection
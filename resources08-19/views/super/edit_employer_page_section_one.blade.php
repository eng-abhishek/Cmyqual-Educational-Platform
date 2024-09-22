@extends('super.layouts.app')

@section('after-style')
@endsection
    
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Section 1</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item ">Dashboard</li>
              <li class="breadcrumb-item">Section 1</li>
              <li class="breadcrumb-item active">Edit Section 1</li>
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
		                <h3 class="card-title">Edit Section 1</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form id="quickForm" action="{{route('update-employer-section-one', $id)}}" method="post" enctype="multipart/form-data">
		              	@csrf
		                <div class="card-body">
		                  <div class="form-group">
		                    <label for="org_name">Heading<apan class="text-danger">*</apan></label>
                        <input type="text" class="form-control" name="heading" value="{{ $data[0]->heading }}" id="org_name">
							<input type="hidden" name="id" value="{{$data[0]->id}}">

						  </div>
		                  <div class="form-group">
		                    <label for="org_url">Paragraph</label>
						<textarea name="para" class="form-control" rows="3" >{{$data[0]->para}}</textarea>

		                  </div>
		                  
						  
						   <div class="form-group">
                        <div class="col-sm-10">
                          <input type="file" name="image" style="display:none" class="form-control" id="file" accept="image/gif, image/jpeg, image/png" >
                        </div>
                      </div>
		                 
		                  
		                </div>
		                <!-- /.card-body -->
		                <div class="card-footer">
		                  <button type="submit" class="btn btn-primary float-right">Submit</button>
                      <a href="{{route('employer-list')}}" class="btn btn-danger float-right mr-1">Cancel</a>
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
return this.optional(element) || /^[a-z|A-Z|0-9]+(?: [a-z|A-Z|0-9]+)*$/i.test(value);
}, "Letters, numbers and spaces only please");

jQuery.validator.addMethod("pwcheck", function(value) {
   return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value)
       && /[a-z]/.test(value)
       && /\d/.test(value) 
}, "Password should contain atleast 1 lower case 1 digit allowed characters: A-Z a-z 0-9 @ * _ - . !");

  $('#quickForm').validate({
    rules: {
      org_name: {
        required: true,
        lettersonly: true,
        minlength: 2,
        maxlength: 50
      },

      org_url: {
        url: true,
        minlength: 5,
        maxlength: 100
      },  
      
      email: {
        required: true,
        email: true,
        minlength: 5,
        maxlength: 50
      },

      pass: {
        required: true,
        pwcheck: true,
        minlength: 8,
        maxlength: 15
       },
      
      role: {

      }
    },
    messages: {
      org_name: {
        required: "Please enter organisation name",
        minlength: "Minimum 2 characters required",
        maxlength: "Maximum 50 characters allowed"
      },

      org_url: {
        url: "Please use this format http://example.com",
        minlength: "Minimum 5 characters required",
        maxlength: "Maximum 100 characters allowed"
      },

      email: {
        required: "Please enter an email address",
        email: "Please enter a vaild email address",
        minlength: "Minimum 5 characters required",
        maxlength: "Maximum 50 characters allowed"
      },

      pass: {
        minlength: "Your password must be at least 8 characters long",
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

  });
</script>
@endsection

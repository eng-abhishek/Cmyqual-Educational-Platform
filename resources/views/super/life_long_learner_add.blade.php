@extends('super.layouts.app')

@section('after-style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<style type="text/css">
  .choices__list--multiple .choices__item {
    background-color: #1D9B75;
    border: 1px solid #1D9B75;
  }
</style>
@endsection
    
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add Learner</h1> </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Manage Learner</a></li>
          <li class="breadcrumb-item active">Add Learner</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
<div class="col-sm-12">
@if (count($errors) > 0)
	        <div class="alert alert-danger alert-dismissible fade show">
	            <strong>Whoops!</strong> There were some problems with your input.<br><br>
	            <ul>
	                @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	                @endforeach
	            </ul>
	             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	            </button>
	        </div>
	        @endif
	        </div>
  <!-- Main content -->
    <div class="content mt-2">
      <div class="container-fluid">
        <div class="row">
         
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Create Learner</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('life-long-learner-list')}}">Back</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="#education" data-toggle="tab">Education</a></li>
                  <li class="nav-item"><a class="nav-link" href="#work" data-toggle="tab">Work Experience</a></li> -->
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  
                  <div class="active tab-pane" id="profile">
                    <form class="form-horizontal" action="{{route('learner-add-post')}}" id="quickForm1" method="post" enctype="multipart/form-data" >
                      @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">First Name<apan class="text-danger">*</apan></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="fname" id="fname">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="lname" id="lname">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Personal Email<apan class="text-danger">*</apan></label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="email" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Password<apan class="text-danger">*</apan></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="password" id="password" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Upload Photo</label>
                        <div class="col-sm-10">
                          <input type="file" name="image" class="form-control" id="file" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Date Of Birth<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                          <input type="date" name="dob" class="form-control" id="dob" min="1990-01-01" max="{{date('Y-m-d')}}" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-10">
                         <select class="form-control" name="country" id="country">
                           <option value="">Please Choose Country</option>
                           @php 
                                $country = \App\Models\Country::get();
                                print_r($country);
                           @endphp
                           @foreach($country as $ct)
                           <option value="{{$ct->id}}">{{$ct->country_name}}</option>
                           @endforeach
                         </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="tel" class="form-control" name="phone" id="phone" >
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Current Employer</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="employer" id="employer" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Linkedin Handle</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="linkedin_handle" id="linkedin_handle" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Blog</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="blog" id="blog">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Portfolio</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="portfolio" id="portfolio" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form> 
                  </div>
                  <!-- /.tab-pane -->

                  
                  </div>

                </div>
                
              </div>
            </div>
            
          </div>
          
        </div>
        
      </div>
@endsection

@section('after-script')
<script type="text/javascript">
$(document).ready(function() {

jQuery.validator.addMethod("lettersonly", function(value, element) 
{
return this.optional(element) || /^[a-z|A-Z|0-9]+(?: [a-z|A-Z|0-9]+)*$/i.test(value);
}, "Letters and single space only please");

jQuery.validator.addMethod("pwcheck", function(value) {
   return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value)
       && /[a-z]/.test(value)
       && /\d/.test(value) 
}, "Password should contain atleast 1 lower case 1 digit allowed characters: A-Z a-z 0-9 @ * _ - . !");

jQuery.validator.addMethod("alphanumeric", function(value, element) {
    return this.optional(element) || /^[a-z0-9\,\s]+$/i.test(value);
}, "Letters, numbers, comma allowed");

$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than 1 MB');


  $('#quickForm1').validate({
    rules: {
      fname: {
        required: true,
        lettersonly: true,
        minlength: 2,
        maxlength: 30
      },

      lname: {
        lettersonly: true,
        minlength: 2,
        maxlength: 30
      },

      email: {
        email: true,
        required: true,
        minlength: 5,
        maxlength: 100
      },

      password: {
        required: true,
        pwcheck: true,
        minlength: 8,
        maxlength: 15
      },
      
     image: {
        extension: "gif|jpg|jpeg|png",
        filesize : 1000 * 1024
      },

      phone: {
        minlength: 10,
        maxlength: 15
      },

      employer: {
        alphanumeric: true,
        minlength: 5,
        maxlength: 100
      },

      linkedin_handle: {
        url: true,
        minlength: 10,
        maxlength: 500
      },

      blog: {
        url: true,
        minlength: 10,
        maxlength: 500
      },

      portfolio: {
        url: true,
        minlength: 10,
        maxlength: 500
      }

    },
    messages: {
       fname: {
        required: "Please enter first name",
        minlength: "Minimum 2 characters required",
        maxlength: "Maximum 30 characters allowed"
      },

      lname: {
        minlength: "Minimum 2 characters required",
        maxlength: "Maximum 30 characters allowed"
      },

      email: {
        email: "Please enter valid email",
        required: "Please enter email",
        minlength: "Minimum 5 characters required",
        maxlength: "Maximum 100 characters allowed"
      },

      password: {
        minlength: "Your password must be at least 8 characters long",
        maxlength: "Maximum 15 characters allowed"
      },
    
      image: {
        extension: "Only gif,jpg,jpeg,png allowed"
      },
            
      phone: {
        minlength: "Minimum 10 digits",
        maxlength: "Maximum 15 digits"
      },

      employer: {
        minlength: "Minimum 5 characters required",
        maxlength: "Maximum 100 characters allowed"
      },

      linkedin_handle: {
        url: "Please use this format http://example.com",
        minlength: "Minimum 10 characters required",
        maxlength: "Maximum 500 characters allowed"
      },

      blog: {
        url: "Please use this format http://example.com",
        minlength: "Minimum 10 characters required",
        maxlength: "Maximum 500 characters allowed"
      },

      portfolio: {
        url: "Please use this format http://example.com",
        minlength: "Minimum 10 characters required",
        maxlength: "Maximum 500 characters allowed"
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
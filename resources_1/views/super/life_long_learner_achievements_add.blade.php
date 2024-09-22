@extends('super.layouts.app')

@section('after-style')

@endsection
    
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add Achievements</h1> </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Manage Learner</a></li>
          <li class="breadcrumb-item active">Add Achievements</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
  <!-- Main content -->
    <div class="content mt-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            @include('super.partials.sec-sidebar')
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link" href="{{route('learner-achievements-view',$stu_data->id)}}" >Achievements</a></li>
                  <li class="nav-item"><a class="nav-link active" href="#">Add New</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  
                  <div class="active tab-pane">
                    <form class="form-horizontal" action="{{route('learner-achievements-add-post')}}" id="quickForm1" method="post" enctype="multipart/form-data">
                      @csrf
                      <input required type="hidden" name="student_id" value="{{$stu_data->id}}">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Achievement Name<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                          <input required type="text" class="form-control" name="name" id="name" minlength="2" maxlength="50">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Upload Certificate</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" name="image" id="file" >
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Issue Date<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                          <input required type="month" class="form-control" name="issued" id="issued">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Expiry Date</label>
                        <div class="col-sm-10">
                          <input  type="month" class="form-control" name="expiry" id="expiry">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Issued By</label>
                        <div class="col-sm-10">
                          <input  type="text" class="form-control" name="issued_by" id="issued_by" minlength="2" maxlength="50">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Link To Course</label>
                        <div class="col-sm-10">
                          <input  type="text" class="form-control" name="link" id="link" minlength="5" maxlength="500">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Duration (hrs)</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="duration" id="duration">
                            @for($i=1;$i<13;$i++)
                            <option value="{{$i}}">{{$i}}</option>
                            @endfor
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Language</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="language" id="language">
                            <option value="English(uk)">English(uk)</option>
                            <option value="English(international)">English(international)</option>
                            <option value="Japanese">Japanese</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Credit</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" name="credit" id="credit" maxlength="10">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Achievement Type</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="type" id="type">
                              <option value="other">Others</option>
                              <option value="edu">Edu</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Note</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="note" id="note" minlength="2" maxlength="300">
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
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection

@section('after-script')

<script>
  $('#quickForm1').validate({
    rules: {
      link: {
        url: true,
        minlength: 5,
        maxlength: 500
      },

      image: {
        extension: "pdf|doc|docx|jpg|jpeg|png|txt"
      }

    },
    messages: {
      link: {
        url: "Please use this format http://example.com",
        minlength: "Minimum 5 characters required",
        maxlength: "Maximum 500 characters allowed"
      },
      image: {
        extension: "Only pdf,doc,docx,jpg,jpeg,png,txt allowed"
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
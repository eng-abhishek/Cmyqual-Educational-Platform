@extends('super.layouts.app')

@section('after-style')
<style>
  .checkbox input:checked + label{
    color: #16B67F;
  }
</style>
@endsection
    
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add Goals</h1> </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Manage Learner</a></li>
          <li class="breadcrumb-item active">Add Goals</li>
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
                  <li class="nav-item"><a class="nav-link" href="{{route('learner-goals-view',$stu_data->id)}}" >Goals</a></li>
                  <li class="nav-item"><a class="nav-link active" href="#">Add New</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  
                  <div class="active tab-pane">
                    <form class="form-horizontal" action="{{route('learner-goals-add-post')}}" id="quickForm1" method="post" enctype="multipart/form-data">
                      @csrf
                      <input required type="hidden" name="student_id" value="{{$stu_data->id}}">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Goal Name</label>
                        <div class="col-sm-10">
                          <input type="hidden" name="student_id" value="{{$stu_data->id}}">
                          <input required type="text" class="form-control" name="goal_name" id="goal_name" minlength="2" maxlength="40" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Goal Category</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="goal_category" id="select" onchange="fetch_data(this);" required>
                            <option value="">Please select category</option>
                            @foreach($category as $d)
                            <option value="{{$d->id}}" data="{{$d->id}}">{{$d->category_name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="form-group row" id="activities">
                        <label for="inputName" class="col-sm-2 col-form-label">Goal Activities</label>
                        <div class="col-sm-10">
                          <div class="icheck-danger d-inline" id="activities2"></div>
                        </div>
                      </div>
                      
                      <div class="form-group row" id="cmp_date">
                        <label for="inputName" class="col-sm-2 col-form-label">Expected Completion Date</label>
                        <div class="col-sm-10">
                        <input class="form-control" type="date" name="cmp_date" min="{{date('Y-m-d')}}" id="cmp_date" placeholder="Enter Date of complition">
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
$(document).ready(function() {
jQuery.validator.addMethod("lettersonly", function(value, element) 
{
return this.optional(element) || /^[a-z|A-Z]+(?: [a-z|A-Z]+)*$/i.test(value);
}, "Letters and single space only please");

  $('#quickForm1').validate({
    rules: {
      goal_name:
      {
        lettersonly: true
      }
    },
    messages: {
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


<script type="text/javascript">
$("#activities").hide();
function fetch_data() {
    var selected = $("option:selected").attr('data');
    // console.log('working '+selected);
    $("#activities").show();
    $.ajax({
        url : 'https://cmyqual.co.uk/get-activities',
        type : 'POST',
        data:{_token:'<?php echo csrf_token() ?>', id:selected},
        success : function(dataResult) {
            console.log(dataResult.activities);
            var len = 0;
            $('#activities2').empty();
            if(dataResult['activities'] != null){
              len = dataResult['activities'].length;
            }
            if(len > 0)
            {
              for(var i=0; i<len; i++)
              {
                 var id = dataResult['activities'][i].id;
                 var name = dataResult['activities'][i].activity_name;
                 var tr_str = "<input type='checkbox' value='"+id+"' name='activity[]' id='checkboxPrimary"+id+"'>&nbsp;<label for='checkboxPrimary'"+id+">"+name+"</label><br>";
                 $("#activities2").append(tr_str);
              }
            }
            else
            {
              var tr_str = "<p>No record found</p>";
              $("#activities2").append(tr_str);
            }
            //var div = $('#activities2').
        },
        error : function(dataResult) {
            console.log(dataResult.activities);
        }
    });
}
</script>



@endsection
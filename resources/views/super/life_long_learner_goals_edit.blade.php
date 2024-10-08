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
        <h1>Edit Goals</h1> </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Manage Learner</a></li>
          <li class="breadcrumb-item active">Edit Goals</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

<div class="col-sm-12">
            
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
                  <li class="nav-item"><a class="nav-link active" href="#">Edit Goal</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  
                  <div class="active tab-pane">
                    <form class="form-horizontal" action="{{route('learner-goals-edit-post')}}" id="quickForm1" method="post" enctype="multipart/form-data">
                      @csrf
                      <input required type="hidden" name="student_id" value="{{$stu_data->id}}">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Goal Name</label>
                        <div class="col-sm-10">
                          <input type="hidden" name="student_id" value="{{$stu_data->id}}">
                          <input type="hidden" name="goal_id" value="{{$goal_data->id}}">
                          <input required type="text" class="form-control" name="goal_name" id="goal_name" minlength="2" maxlength="40" value="{{$goal_data->goal_name}}">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Goal Category</label>
                        <div class="col-sm-10">
                          @if(count($activity_data)>0)
                            @php
                            foreach($category as $d)
                            {
                                if($goal_data->category_id == $d->id)
                                {
                                  $cat_name = $d->category_name; 
                                }
                            }
                            @endphp
                            <input type="hidden" name="goal_category" value="{{$goal_data->category_id}}">
                            <input type="text" class="form-control" value="{{$cat_name}}" disabled>
                          
                          <p class="text-danger">Note: Please remove selected activities to enable category. </p>
                          @else
                          <select class="form-control" name="goal_category" id="select" onchange="fetch_data(this);" required>
                            <option value="">Please select category</option>
                            @foreach($category as $d)
                            <option value="{{$d->id}}" data="{{$d->id}}">{{$d->category_name}}</option>
                            @endforeach
                          </select>
                          @endif
                        </div>
                      </div>

                      <div class="form-group row" id="activities">
                        <label for="inputName" class="col-sm-2 col-form-label">Goal Activities</label>
                        <div class="col-sm-10">
                          @forelse($activity_data as $act)
                            @php
                                $ac_name = App\Models\Activities::where('id',$act->activity_id)->select('activity_name')->first();
                            @endphp
                            <label for="checkboxPrimary">{{$ac_name->activity_name}}</label>&nbsp<a class="nav-icon fas fa-window-close" href="" style="height:18px; width: 10px; color: red;" data-toggle="modal" data-target="#delModal{{$act->id}}"></a>
                            <br>
                          @empty
                            <div id="no_rec">No Record Found</div>
                          @endforelse
                          <div class="icheck-danger d-inline" id="activities2"></div>
                        </div>
                      </div>
                      
                        <div class="form-group row" id="cmp_date">
                        <label for="inputName" class="col-sm-2 col-form-label">Expected Completion Date</label>
                        <div class="col-sm-10">
                        <input class="form-control" type="date" name="cmp_date" min="{{date('Y-m-d')}}" id="cmp_date" value="{{$goal_data->goal_name}}" placeholder="Enter Date of complition">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <a class="btn btn-primary" href="{{route('learner-goals-details', $goal_data->id)}}">Back</a>
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
<!-- modal -->
@foreach($activity_data as $act)
                    <div class="modal fade" id="delModal{{$act->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                    <a class="btn btn-danger" href="{{route('learner-activity-remove', $act->id)}}">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
@endforeach
<!-- modal ends here -->

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
// $("#activities").hide();
function fetch_data() {
    var selected = $("option:selected").attr('data');
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
        },
        error : function(dataResult) {
            console.log('Something went wrong.');
        }
    });
}
</script>



@endsection
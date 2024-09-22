@extends('super.layouts.app')

@section('after-style')

@endsection
    
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Learner</h1> </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Manage Learner</a></li>
          <li class="breadcrumb-item active">Edit Learner</li>
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
          <div class="col-md-3">
            @include('super.partials.sec-sidebar')
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Personal Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#about" data-toggle="tab">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="#education" data-toggle="tab">Education</a></li>
                  <li class="nav-item"><a class="nav-link" href="#work" data-toggle="tab">Work Experience</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  
                  <div class="active tab-pane" id="profile">
                    <form class="form-horizontal" action="{{route('learner-profile-edit-post')}}" id="quickForm1" method="post" enctype="multipart/form-data" >
                      @csrf
                      @php
                        $name = explode(",", $stu_data->name); 
                        if(count($name) > 1)
                        {
                          $fname = $name[0];
                          $lname = $name[1];  
                        }
                        else
                        {
                          $fname = $name[0];
                          $lname = ' '; 
                        }

                         $country = \App\Models\Country::get();
                      @endphp
                      <input type="hidden" name="student_id" value="{{$stu_data->id}}">
                      <input type="hidden" name="user_id" value="{{$stu_data->user_id}}">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">First Name<apan class="text-danger">*</apan></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="fname" id="fname" value="{{$fname}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" value="{{$lname}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Personal Email<apan class="text-danger">*</apan></label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="email" value="{{$stu_data->email}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" maxlength="15" minlength="8" placeholder="Password must be 8 character long">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Upload Photo</label>
                        <div class="col-sm-10">
                          <input type="file" name="image" class="form-control" id="file" accept="image/gif, image/jpeg, image/png" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Date Of Birth<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                          <input type="date" name="dob" class="form-control" id="dob" max = "{{date('Y-m-d')}}" value="{{$stu_data->dob}}" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-10">
                         <select class="form-control" name="country" id="country" >
                           
                            <option value="">Choose Country</option>
                           @foreach($country as $ct)
                            <option value="{{$ct->id}}" @if($stu_data->country == $ct->id){{'selected'}} @endif>{{$ct->country_name}}</option>
                           @endforeach
                         </select>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="tel" class="form-control" name="phone" id="phone" value="{{$stu_data->contact_no}}">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Current Employer</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="employer" id="employer" value="{{$stu_data->current_employer}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Linkedin Handle</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="linkedin_handle" id="linkedin_handle" value="{{$stu_data->linkedin_handle}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Blog</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="blog" id="blog" value="{{$stu_data->blog_url}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Portfolio</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="portfolio" id="portfolio" value="{{$stu_data->portfolio_url}}">
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

                  <div class="tab-pane" id="about">
                    <form class="form-horizontal" action="{{route('learner-profile-edit-about')}}" id="quickForm2" method="post">
                      @csrf
                      <input type="hidden" name="student_id" value="{{$stu_data->id}}">
                      <input type="hidden" name="user_id" value="{{$stu_data->user_id}}">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Biography</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="bio" id="bio" placeholder="Biography" minlength="5" maxlength="500" >{{$stu_data->biography}}</textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Interest</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="interest" id="interest" value="{{$stu_data->interest}}">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <div class="select2-primary">
                          <select class="select2" name="skills[]"  data-dropdown-css-class="select2-primary" style="width: 100%;" multiple="multiple">
                          
                            
                            <option @if(isset($skill_arr) && in_array ('communication', $skill_arr )){{'Selected'}} @endif value="communication" class="bolden">Communication: How well do you communicate?</option>
                            

                            
                            <option @if(isset($skill_arr) && in_array ('listening', $skill_arr)){{'Selected'}} @endif value="listening">Listening</option>
                            

                            
                            <option @if(isset($skill_arr) && in_array ('negotiation', $skill_arr)){{'Selected'}} @endif value="negotiation">Negotiation</option>
                            
                            
                            
                            <option @if(isset($skill_arr) && in_array ('nonverbal communication', $skill_arr)){{'Selected'}} @endif value="nonverbal communication">Nonverbal communication</option>
                            

                            
                            <option @if(isset($skill_arr) && in_array ('presentation', $skill_arr)){{'Selected'}} @endif value="presentation">Presentation</option>
                            

                            
                            <option @if(isset($skill_arr) && in_array ('public speaking', $skill_arr)){{'Selected'}} @endif value="public speaking">Public Speaking</option>
                            

                            
                            <option @if(isset($skill_arr) && in_array ('storytelling', $skill_arr)){{'Selected'}} @endif value="storytelling">Storytelling</option>
                            

                            
                            <option @if(isset($skill_arr) && in_array ('verbal communication', $skill_arr)){{'Selected'}} @endif value="verbal communication">Verbal communication</option>
                            

                            
                            <option @if(isset($skill_arr) && in_array ('visual communication', $skill_arr)){{'Selected'}} @endif value="visual communication">Visual communication</option>
                            

                            
                            <option @if(isset($skill_arr) && in_array ('writing reports', $skill_arr)){{'Selected'}} @endif value="writing reports">Writing reports</option>
                            

                            
                            <option @if(isset($skill_arr) && in_array ('writing skills', $skill_arr)){{'Selected'}} @endif value="writing skills">Writing skills</option>
                            


                            
                            <option @if(isset($skill_arr) && in_array ('critical thinking', $skill_arr)){{'Selected'}} @endif value="critical thinking: able to make informed decisions." class="bolden">Critical Thinking: Able to make informed decisions.</option>
                            

                            
                            <option @if(isset($skill_arr) && in_array ('adaptable', $skill_arr)){{'Selected'}} @endif value="adaptable">Adaptable</option>
                            

                            
                            <option @if(isset($skill_arr) && in_array ('creative', $skill_arr)){{'Selected'}} @endif value="creative">Creative</option>
                            

                            
                            <option @if(isset($skill_arr) && in_array ('critical observation', $skill_arr)){{'Selected'}} @endif value="critical observation">Critical observation</option>
                            

                            
                            <option @if(isset($skill_arr) && in_array ('desire to learn', $skill_arr)){{'Selected'}} @endif value="desire to learn">Desire to learn</option>
                            
                            
                            
                            <option @if(isset($skill_arr) && in_array ('flexible', $skill_arr)){{'Selected'}} @endif value="flexible">Flexible</option>
                            
                            
                            
                            <option @if(isset($skill_arr) && in_array ('innovative', $skill_arr)){{'Selected'}} @endif value="innovative">Innovative</option>
                            
                            
                            
                            <option @if(isset($skill_arr) && in_array ('logical thinking', $skill_arr)){{'Selected'}} @endif value="logical thinking">Logical Thinking</option>
                            
                            
                            
                            <option @if(isset($skill_arr) && in_array ('problem solving', $skill_arr)){{'Selected'}} @endif value="problem solving">Problem solving</option>
                            
                            
                            
                            <option @if(isset($skill_arr) && in_array ('think out of the box', $skill_arr)){{'Selected'}} @endif value="thinks out of the box">Thinks out of the box</option>
                            
                            
                            
                            <option @if(isset($skill_arr) && in_array ('tolerant of change', $skill_arr)){{'Selected'}} @endif value="tolerant of change">Tolerant of change</option>
                            
                            
                            
                            <option @if(isset($skill_arr) && in_array ('leadership', $skill_arr)){{'Selected'}} @endif value="leadership" class="bolden">Leadership: Able to take responsibility</option>
                            
                            
                            
                            <option @if(isset($skill_arr) && in_array ('conflict management', $skill_arr)){{'Selected'}} @endif  value="conflict management">Conflict management</option>
                            
                            
                            
                            <option @if(isset($skill_arr) && in_array ('decision making', $skill_arr)){{'Selected'}} @endif value="decision making">Decision making</option>
                            
                            
                            <option @if(isset($skill_arr) && in_array ('delegation', $skill_arr)){{'Selected'}} @endif value="delegation">Delegation</option>
                            
                            
                            <option @if(isset($skill_arr) && in_array ('facilitation', $skill_arr)){{'Selected'}} @endif value="facilitation">Facilitation</option>
                            
                            
                            <option @if(isset($skill_arr) && in_array ('give clear feedback', $skill_arr)){{'Selected'}} @endif value="give clear feedback">Give clear feedback</option>
                            
                            
                            <option @if(isset($skill_arr) && in_array ('inspire others', $skill_arr)){{'Selected'}} @endif value="inspire others">Inspire others</option>     
                            
                            
                            <option @if(isset($skill_arr) && in_array ('manage difficult conversations', $skill_arr)){{'Selected'}} @endif value="manage difficult conversations">Manage difficult conversations</option>
                            
                            
                            <option @if(isset($skill_arr) && in_array ('mentor/coach', $skill_arr)){{'Selected'}} @endif value="mentor/coach">Mentor/ coach</option>
                            
                            
                            <option @if(isset($skill_arr) && in_array ('resolve issues', $skill_arr)){{'Selected'}} @endif value="resolve issues">Resolve issues</option>


                            
                            <option @if(isset($skill_arr) && in_array ('talent management', $skill_arr)){{'Selected'}} @endif value="talent management">Talent management</option>


                            
                            <option @if(isset($skill_arr) && in_array ('work ethic', $skill_arr)){{'Selected'}} @endif value="work ethic" class="bolden">Work Ethic: Be focused and dedicated</option>

                            
                            <option @if(isset($skill_arr) && in_array ('dedicated/dependable', $skill_arr)){{'Selected'}} @endif value="dedicated/dependable">Dedicated/Dependable</option>

                            
                            <option @if(isset($skill_arr) && in_array ('follows directions', $skill_arr)){{'Selected'}} @endif value="follows directions">Follows directions</option>

                            
                            <option @if(isset($skill_arr) && in_array ('independent', $skill_arr)){{'Selected'}} @endif value="independent">Independent</option>

                            
                            <option @if(isset($skill_arr) && in_array ('meets deadlines', $skill_arr)){{'Selected'}} @endif value="meets deadlines">Meets deadlines</option>

                            
                            <option @if(isset($skill_arr) && in_array ('motivated', $skill_arr)){{'Selected'}} @endif value="motivated">Motivated</option>

                            
                            <option @if(isset($skill_arr) && in_array ('organised', $skill_arr)){{'Selected'}} @endif value="organised">Organised</option>

                            
                            <option @if(isset($skill_arr) && in_array ('perseveres', $skill_arr)){{'Selected'}} @endif value="perseveres">Perseveres</option>

                            
                            <option @if(isset($skill_arr) && in_array ('resilient', $skill_arr)){{'Selected'}} @endif value="resilient">Resilient</option>

                            
                            <option @if(isset($skill_arr) && in_array ('self directed', $skill_arr)){{'Selected'}} @endif value="self directed">Self Directed</option>

                            
                            <option @if(isset($skill_arr) && in_array ('works well under pressure', $skill_arr)){{'Selected'}} @endif value="works well under pressure">Works well under pressure</option>

                            
                            <option @if(isset($skill_arr) && in_array ('teamwork', $skill_arr)){{'Selected'}} @endif value="teamwork" class="bolden">Teamwork: works well with others</option>

                            
                            <option @if(isset($skill_arr) && in_array ('accepts feedback', $skill_arr)){{'Selected'}} @endif value="accepts feedback">Accepts feedback</option>

                            
                            <option @if(isset($skill_arr) && in_array ('collaborates', $skill_arr)){{'Selected'}} @endif value="collaborates">Collaborates</option>

                            
                            <option @if(isset($skill_arr) && in_array ('emotionally intelligent', $skill_arr)){{'Selected'}} @endif value="emotionally intelligent">Emotionally intelligent</option>

                            
                            <option @if(isset($skill_arr) && in_array ('embraces diversity', $skill_arr)){{'Selected'}} @endif value="embraces diversity">Embraces diversity</option>

                            
                            <option @if(isset($skill_arr) && in_array ('empathetic', $skill_arr)){{'Selected'}} @endif value="empathetic">Empathetic</option>

                            
                            <option @if(isset($skill_arr) && in_array ('interpersonal skills', $skill_arr)){{'Selected'}} @endif value="interpersonal skills">Interpersonal skills</option>

                            
                            <option @if(isset($skill_arr) && in_array ('self aware', $skill_arr)){{'Selected'}} @endif value="self aware">Self aware</option>
                            

                            
                            <option @if(isset($skill_arr) && in_array ('team building', $skill_arr)){{'Selected'}} @endif value="team building">Team building</option>
                            

                            
                            <option @if(isset($skill_arr) && in_array ('thrives', $skill_arr)){{'Selected'}} @endif  value="thrives working in a team">Thrives working in a team</option>

                          </select>
                        </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Occupation</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="occupation" id="occupation" value="{{$stu_data->my_occupation}}">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="gender" id="gender">
                            <option value="">Please Select</option>
                            <option value="male" @if($stu_data->gender == 'male'){{'Selected'}}@endif>Male</option>
                            <option value="female" @if($stu_data->gender == 'female'){{'Selected'}}@endif>Female</option>
                           <option value="prefer_not_to_say" @if($stu_data->gender == 'prefer not to say'){{'Selected'}}@endif >Prefer not to say</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Ethinicity</label>
                        <div class="col-sm-10">
                          <div class="select2-primary">
                          <select class="select2" name="ethnicity[]" data-dropdown-css-class="select2-primary" style="width: 100%;" multiple="multiple" >
                            
                            <option @if(isset($ethi_arr) && in_array ('asian', $ethi_arr)){{'Selected'}} @endif value="asian" class="bolden">Asian</option>
                            <option @if(isset($ethi_arr) && in_array ('bangladeshi', $ethi_arr)){{'Selected'}} @endif value="bangladeshi">Bangladeshi</option>
                            <option @if(isset($ethi_arr) && in_array ('british-asian', $ethi_arr)){{'Selected'}} @endif value="british-asian">British-Asian</option>
                            <option @if(isset($ethi_arr) && in_array ('chinese', $ethi_arr)){{'Selected'}} @endif value="chinese">Chinese</option>
                            <option @if(isset($ethi_arr) && in_array ('indian', $ethi_arr)){{'Selected'}} @endif value="indian">Indian</option>
                            <option @if(isset($ethi_arr) && in_array ('pakistani', $ethi_arr)){{'Selected'}} @endif value="pakistani">Pakistani</option>
                            <option @if(isset($ethi_arr) && in_array ('any-other-asian', $ethi_arr)){{'Selected'}} @endif value="any-other-asian">Any other Asian Background</option>

                            <option @if(isset($ethi_arr) && in_array ('Black, African, Caribbean or Black British', $ethi_arr)){{'Selected'}} @endif value="Black, African, Caribbean or Black British" class="bolden">Black, African, Caribbean or Black British</option>
                            <option @if(isset($ethi_arr) && in_array ('african', $ethi_arr)){{'Selected'}} @endif value="african">African</option>
                            <option @if(isset($ethi_arr) && in_array ('african-american', $ethi_arr)){{'Selected'}} @endif value="african-american">African American</option>
                            <option @if(isset($ethi_arr) && in_array ('caribbean', $ethi_arr)){{'Selected'}} @endif value="caribbean">Caribbean</option>
                            <option @if(isset($ethi_arr) && in_array ('any-other-black', $ethi_arr)){{'Selected'}} @endif value="any-other-black">Any other Black, African or Caribbean background</option>

                            <option @if(isset($ethi_arr) && in_array ('latino', $ethi_arr)){{'Selected'}} @endif value="latino" class="bolden">Latino</option>
                            <option @if(isset($ethi_arr) && in_array ('latin-american', $ethi_arr)){{'Selected'}} @endif value="latin-american">Latin American</option>
                            <option @if(isset($ethi_arr) && in_array ('mexican-american', $ethi_arr)){{'Selected'}} @endif value="mexican-american">Mexican-American</option>
                            <option @if(isset($ethi_arr) && in_array ('any other latino background', $ethi_arr)){{'Selected'}} @endif value="any other latino background">Any other latino background</option>

                            <option @if(isset($ethi_arr) && in_array ('mixed', $ethi_arr)){{'Selected'}} @endif value="mixed or multiple ethnic group" class="bolden">Mixed or Multiple ethnic groups</option>
                            <option @if(isset($ethi_arr) && in_array ('caribbean', $ethi_arr)){{'Selected'}} @endif value="caribbean">White and Black Caribbean</option>
                            <option @if(isset($ethi_arr) && in_array ('african', $ethi_arr)){{'Selected'}} @endif value="african">White and Black African</option>
                            <option @if(isset($ethi_arr) && in_array ('white-asian', $ethi_arr)){{'Selected'}} @endif  value="white-asian">White and Asian</option>
                            <option @if(isset($ethi_arr) && in_array ('any-other', $ethi_arr)){{'Selected'}} @endif  value="any-other">Any other Mixed or Multiple ethnic background</option>

                            <option @if(isset($ethi_arr) && in_array ('white', $ethi_arr)){{'Selected'}} @endif value="white" class="bolden">White</option>
                            <option @if(isset($ethi_arr) && in_array ('american', $ethi_arr)){{'Selected'}} @endif value="american">American</option>
                            <option @if(isset($ethi_arr) && in_array ('canadian', $ethi_arr)){{'Selected'}} @endif value="canadian">Canadian</option>
                            <option @if(isset($ethi_arr) && in_array ('european', $ethi_arr)){{'Selected'}} @endif value="european">European</option>
                            <option @if(isset($ethi_arr) && in_array ('english', $ethi_arr)){{'Selected'}} @endif value="english">English, Welsh, Scottish, Northern Irish or British Irish</option>
                            <option @if(isset($ethi_arr) && in_array ('irish', $ethi_arr)){{'Selected'}} @endif value="irish">Irish</option>
                            <option @if(isset($ethi_arr) && in_array ('any', $ethi_arr)){{'Selected'}} @endif value="any">Any other White Background</option>     
                           
                            <option @if(isset($ethi_arr) && in_array ('other', $ethi_arr)){{'Selected'}} @endif value="other ethnic group" class="bolden">Other Ethnic Group</option>
                            <option @if(isset($ethi_arr) && in_array ('arab', $ethi_arr)){{'Selected'}} @endif value="arab">Arab</option>
                            <option @if(isset($ethi_arr) && in_array ('any other ethnic group', $ethi_arr)){{'Selected'}} @endif value="any other ethnic group">Any Other Ethnic Group</option>
                            <option @if(isset($ethi_arr) && in_array ('prefer not to say', $ethi_arr)){{'Selected'}} @endif value="prefer not to say" class="bolden">Prefer Not to Say</option>

                          </select>
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Additional Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="additional_email" id="additional_email" value="{{$stu_data->additional_email}}">
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

                  <div class="tab-pane" id="education">
                    <form class="form-horizontal" action="{{route('learner-profile-edit-edu')}}" method="post">
                     @csrf
                      <input type="hidden" name="student_id" value="{{$stu_data->id}}">
                      <input type="hidden" name="user_id" value="{{$stu_data->user_id}}"> 
                        
                      @foreach($edu_data as $key => $edu)
                      <div id="add{{$edu->id}}">
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">School</label>
                          <div class="col-sm-10">
                            <input type="hidden" name="id[]" value="{{$edu->id}}">
                            <input type="text" class="form-control" name="school[]" id="school" minlength="2" maxlength="100" value="{{$edu->school}}" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Grad Year</label>
                          <div class="col-sm-10">
                            <select class="form-control" name="grad_year[]">
                              <option value="">Please select Year</option>
                              @for($i=1980; $i<=2021; $i++ ) 
                               <option @if($edu->grad_year == $i){{'Selected'}}@endif value="{{$i}}">{{$i}}</option>
                              @endfor   
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Grad Month</label>
                          <div class="col-sm-10">
                            <select class="form-control" name="grad_month[]" id="grad_month">
                              <option value="">Please select month</option>
                              <option  @if($edu->grad_month == 'Jan'){{'Selected'}}@endif value="Jan">Jan</option>
                              <option  @if($edu->grad_month == 'Feb'){{'Selected'}}@endif value="Feb">Feb</option>
                              <option  @if($edu->grad_month == 'Mar'){{'Selected'}}@endif value="Mar">Mar</option>
                              <option  @if($edu->grad_month == 'Apr'){{'Selected'}}@endif value="Apr">Apr</option>      
                              <option  @if($edu->grad_month == 'May'){{'Selected'}}@endif value="May">May</option>
                              <option  @if($edu->grad_month == 'Jun'){{'Selected'}}@endif value="Jun">Jun</option>
                              <option  @if($edu->grad_month == 'jul'){{'Selected'}}@endif value="jul">Jul</option>
                              <option  @if($edu->grad_month == 'aug'){{'Selected'}}@endif value="aug">Aug</option>
                              <option  @if($edu->grad_month == 'sep'){{'Selected'}}@endif value="sep">Sep</option>
                              <option  @if($edu->grad_month == 'oct'){{'Selected'}}@endif value="oct">Oct</option>
                              <option  @if($edu->grad_month == 'nov'){{'Selected'}}@endif value="nov">Nov</option>
                              <option  @if($edu->grad_month == 'dec'){{'Selected'}}@endif value="dec">Dec</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Degree</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="degree[]" id="degree" value="{{$edu->degree}}" minlength="2" maxlength="100" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Field of Study</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="field_of_study[]" id="field_of_study" value="{{$edu->field_of_study}}" minlength="2" maxlength="100" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-10 col-sm-2">
                            <p class="float-right btn btn-danger deletedb" data-pointid="{{$edu->id}}" >Delete</p>
                          </div>
                        </div>
                        <hr>
                      </div>
                    @endforeach
                    <div id="add_div"></div>

                    @if(count($edu_data) != 0)
                      <div class="form-group row">
                        <div class="offset-sm-10 col-sm-2">
                          <p id="add" class="btn btn-primary" >Add Field Of Study</p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    @else
                    <div id="add_div"></div>
                    <div id="remove_div">
                      <div class="form-group row">
                        <label class="text-center">{{'Not Found!'}}</label>
                      </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-10 col-sm-2">
                          <p id="add" class="btn btn-primary">Add Field Of Study</p>
                        </div>
                    </div>
                    <div id="submit" style="display: none;">
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </div>
                   @endif  
                    </form>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="work">
                   
                    <form class="form-horizontal upload-form" action="{{route('learner-profile-edit-work')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="student_id" value="{{$stu_data->id}}">
                      <input type="hidden" name="user_id" value="{{$stu_data->user_id}}">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">CV Upload</label>
                        <div class="col-sm-8">
                          <input type="File" class="form-control upload-file" name="cv" id="cv" placeholder="cv" accept=".xlsx,.xls,.doc,.docx,.ppt,.pptx,.txt,.pdf" data-max-size="1000000">
                          <span id="cv_err" class="text-danger"></span>    
                        </div>
                        <div class="col-sm-2">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                     @if($stu_data->work_exp != '')
                     <div>
                      <a href="{{asset('public/uploads/student_cv/'.$stu_data->work_exp)}}" target="_blank"><i class="fas fa-file-alt fa-7x"></i></a><br>
                      {{$stu_data->work_exp}}
                      @else
                      <div>No Data Found</div>
                      @endif
                    </div>
                  </div>

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
<script type="text/javascript">

$("#add").click(function(e){
  e.preventDefault();
  var i = Math.floor(Math.random() * 10);
  var node = "<div id='add"+ i +"'><div class='form-group row'><label for='inputEmail' class='col-sm-2 col-form-label'>School</label><div class='col-sm-10'><input type='hidden' name='id[]'> <input type='text' class='form-control' name='school[]' id='school' minlength='2' maxlength='100' required></div></div><div class='form-group row'><label for='inputEmail' class='col-sm-2 col-form-label'>Grad Year</label><div class='col-sm-10'><select class='form-control' name='grad_year[]' required><option value=''>Please select year</option>@for($i=1980; $i<=2021; $i++ )<option value='{{$i}}'>{{$i}}</option>@endfor</select></div></div><div class='form-group row'><label for='inputEmail' class='col-sm-2 col-form-label'>Grad Month</label><div class='col-sm-10'><select class='form-control' name='grad_month[]' required><option value=''>Please select month</option><option value='Jan'>Jan</option><option value='Feb'>Feb</option><option value='Mar'>Mar</option><option value='Apr'>Apr</option><option value='May'>May</option><option value='Jun'>Jun</option><option value='jul'>Jul</option><option value='aug'>Aug</option><option value='sep'>Sep</option><option value='oct'>Oct</option><option value='nov'>Nov</option><option value='dec'>Dec</option></select></div></div><div class='form-group row'><label for='inputEmail' class='col-sm-2 col-form-label'>Degree</label><div class='col-sm-10'><input type='text' class='form-control' name='degree[]' id='degree' pattern='[^\s]+' minlength='2' maxlength='100' required></div></div><div class='form-group row'><label for='inputEmail' class='col-sm-2 col-form-label'>Field of Study</label><div class='col-sm-10'><input type='text' class='form-control' name='field_of_study[]' pattern='[^\s]+' id='field_of_study' minlength='2' maxlength='100' required></div></div><div class='form-group row'><div class='offset-sm-10 col-sm-2'><div class='float-right btn btn-danger' onclick='myfunction("+ i +")' id='hide'>Remove</div></div></div><hr></div>";
  //console.log("Append function Running"+i);
  $("#remove_div").hide();
  $('#submit').show();
  $("#add_div").append(node);
});

function myfunction(i) {
  // console.log("Remove function working");
  var id = "#add"+i;
  $(id).remove();
  if($("#add_div").children() = 0)
  return false;
}

</script>

<script>
$(function(){
    var fileInput = $('.upload-file');
    var maxSize = fileInput.data('max-size');
    $('.upload-form').submit(function(e){
        if(fileInput.get(0).files.length){
            var fileSize = fileInput.get(0).files[0].size; // in bytes
            if(fileSize>maxSize){
                //alert('file size is more then' + maxSize + ' bytes');
                $('#cv_err').html('file size is more then 1mb.')
                return false;
            }else{
                alert('file size is correct- '+fileSize+' bytes');
            }
        }else{
            //alert('choose file, please');
            $('#cv_err').html('choose file, please')
            return false;
        }

    });
});
</script>

<script>
$(document).ready(function() {
    $('.select2').select2(
    {
      placeholder: "Please Select"
    })

});
</script>

<script>
$(document).ready(function() {

jQuery.validator.addMethod("lettersonly", function(value, element) 
{
return this.optional(element) || /^[a-z|A-Z|0-9]+(?: [a-z|A-Z|0-9]+)*$/i.test(value);
}, "Letters and single space only please");

jQuery.validator.addMethod("mailonly", function(value, element) 
{
return this.optional(element) || /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i.test(value);
}, "Enter valid email");

jQuery.validator.addMethod("alphanumeric", function(value, element) {
    return this.optional(element) || /^[a-z0-9\,\s]+$/i.test(value);
}, "Letters, numbers, comma allowed");

jQuery.validator.addMethod("phone", function(value, element) {
    return this.optional(element) || /[0-9\-\(\)\s]+/i.test(value);
}, "Valid phone number please");

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
        // pwcheck: true
      },
    
    image: {
        extension: "gif|jpg|jpeg|png",
        filesize : 1000 * 1024
      },
    
      phone: {
        phone: true,  
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

  $('#quickForm2').validate({
    rules: {
      interest: {
        alphanumeric: true,
        minlength: 2,
        maxlength: 300
      },
      occupation: {
        alphanumeric: true,
        minlength: 2,
        maxlength: 300
      },
      additional_email: {
        mailonly: true,
        minlength: 2,
        maxlength: 100
      }
    },
    messages: {
      interest: {
        minlength: "Minimum 2 characters",
        maxlength: "Maximum 300 characters"
      },
      occupation: {
        minlength: "Minimum 2 characters",
        maxlength: "Maximum 300 characters"
      },
      additional_email: {
        minlength: "Minimum 2 characters",
        maxlength: "Maximum 100 characters"
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


  $('#quickForm3').validate({
    rules: {
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

<script>
  $(".deletedb").click(function(ev){
    var id = $(this).attr("data-pointid");
    console.log("delete working");
    console.log("id:"+id);
    $.ajax({
            type: "POST",
            data: { "_token": "{{ csrf_token() }}", "id":id },
            url: "{{ route('learner-profile-delete-edu') }}",
            success: function (data) {
                $('#add'+id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
});
</script>

@endsection
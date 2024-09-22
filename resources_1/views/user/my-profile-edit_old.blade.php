@extends('user.layout.layout')
@section('title','cMyQual | Edit Profile')
@section('content')
<style>

h5#exampleModalLabel
{
  font-weight:600;
  font-size: 18px;
}
#basicExampleModal .modal-header 
{
    padding: 25px 15px 15px 15px;
}
#basicExampleModal .modal-header .close {
    margin-top: -40px;
}

#basicExampleModal .modal-body
{
  padding: 45px 15px 45px 15px;
}
.now-left {width: 15%;}
.not-now-right {border: 1px solid rgb(25 130 98 / 55%);
    background: transparent;
    color: #333!important;
    font-weight: 500;
    margin-left: 10px;}
    .not-now-right:hover
    {
      color:#fff!important;
    }
    #basicExampleModal .modal-dialog
    {
      margin: 16% auto;
    }
@media(min-width:1600px)
{
    body.leftmenu #wrapper {
        margin-top: 12px!important;
}
}
@media(min-width:1920px)
{
    body.leftmenu #wrapper {
    margin-top: 25px!important;
}
body.memberprofile .menuopener {
    margin-top: 0px!important;
    height: 50px!important;
    line-height: 50px!important;
}
}
body.leftmenu #wrapper {
    padding-top: 68px!important;
}    
.chosen-container-multi .chosen-choices {
    border: none !important;
    z-index: 1;
    overflow-y: scroll;
    height: 31px!important;
}
.chosen-container-multi .chosen-choices::-webkit-scrollbar {
  width: 3px;
}

/* Track */
.chosen-container-multi .chosen-choices::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
.chosen-container-multi .chosen-choices::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
.chosen-container-multi .chosen-choices::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

/*    form.cmxform label.error, label.error
    {
        margin-bottom: 0px;
    font-size: 11px;
    margin-top: 0px;
    }
    body.leftmenu #wrapper {
    padding-top: 48px!important;
}*/

@media(max-width:414px)
{
    #per-info {
    padding-top: 10%;
}

}
@media(max-width:375px)
{
    .add-field-of-study.add-field-of-study2 h1{height:0px!important;}
    .col-lg-6.col-md-6.col-sm-4.space {
    margin-top: -10px!important;
}
}

.addMoreEduAppendDiv .col-lg-3.col-md-3.col-sm-4, #removeRow1 .col-lg-3.col-md-3.col-sm-4 , #removeRow2 .col-lg-3.col-md-3.col-sm-4 
,#removeRow3 .col-lg-3.col-md-3.col-sm-4 , #removeRow4 .col-lg-3.col-md-3.col-sm-4
,#removeRow5 .col-lg-3.col-md-3.col-sm-4 , #removeRow6 .col-lg-3.col-md-3.col-sm-4
,#removeRow7 .col-lg-3.col-md-3.col-sm-4 , #removeRow8 .col-lg-3.col-md-3.col-sm-4
,#removeRow9 .col-lg-3.col-md-3.col-sm-4 , #removeRow10 .col-lg-3.col-md-3.col-sm-4
,#removeRow11 .col-lg-3.col-md-3.col-sm-4 , #removeRow12 .col-lg-3.col-md-3.col-sm-4
,#removeRow13 .col-lg-3.col-md-3.col-sm-4 , #removeRow14 .col-lg-3.col-md-3.col-sm-4
,#removeRow15 .col-lg-3.col-md-3.col-sm-4 , #removeRow16 .col-lg-3.col-md-3.col-sm-4
,#removeRow17 .col-lg-3.col-md-3.col-sm-4 , #removeRow18 .col-lg-3.col-md-3.col-sm-4
,#removeRow19 .col-lg-3.col-md-3.col-sm-4 , #removeRow20 .col-lg-3.col-md-3.col-sm-4
,#removeRow21 .col-lg-3.col-md-3.col-sm-4 , #removeRow22 .col-lg-3.col-md-3.col-sm-4
,#removeRow23 .col-lg-3.col-md-3.col-sm-4 , #removeRow24 .col-lg-3.col-md-3.col-sm-4
,#removeRow25 .col-lg-3.col-md-3.col-sm-4 , #removeRow26 .col-lg-3.col-md-3.col-sm-4
,#removeRow27 .col-lg-3.col-md-3.col-sm-4 , #removeRow28 .col-lg-3.col-md-3.col-sm-4
,#removeRow29 .col-lg-3.col-md-3.col-sm-4 , #removeRow30 .col-lg-3.col-md-3.col-sm-4
,#removeRow31 .col-lg-3.col-md-3.col-sm-4 , #removeRow32 .col-lg-3.col-md-3.col-sm-4
{
    margin-top:0px!important;
}

/#education .col-lg-6.col-md-6.col-sm-4 , #education .col-lg-3.col-md-3.col-sm-4/
/{/
/*    width:33.3333333333%;*/
/}/

body.leftmenu #wrapper {
    padding-top: 61px;
}

body.leftmenu .sidebar-nav li
{
    margin-left:0;
}
label.fos {
    margin-left: 0px;
}
ul.hover-menu li
{
    margin-left:10px;
}
#work-experience
{
    padding-top:0px;
}
.space.Oxford
{
        padding-top: 20px;
}

.defaultform .form-control.art {
    margin-left: 0px;
    width: 100%;
}
.updateprofile .form-control {
    margin-bottom: 0px;
}
#about
{
    padding-top:0!important;
}

.updateprofile .form-control {
    margin-bottom: 5px;
}
.defaultform.updateprofile.update2 .col-md-4, .defaultform.updateprofile.update2 .col-md-3
{
        margin-top: 20px;
}
     html{scroll-behavior: smooth;}
     select
     {
        margin: 5px 0 10px 0;
     }
     .expDate{
    margin: 5px 0 0px 50px;
    width: 83%;
    padding: 5px 10px 5px 10px;
    background-color: #fff;
    border: 1px solid rgb(62 163 164 / 55%);
     }
     form.cmxform label.error, label.error
    {
    margin-bottom: 0px;
    font-size: 11px;
    margin-top: 0px;
    }


    @media(max-width:1024px)
    {
        .defaultform.updateprofile.update2
        {
            padding-top: 50px;
        }
    }
    @media(max-width:414px)
    {
        .defaultform.updateprofile
        {
            padding-top: 20px;
            margin-bottom: -80px;
        }

    h5#exampleModalLabel
{
  font-weight:600;
  font-size: 18px;
}
#basicExampleModal .modal-header 
{
    padding: 25px 15px 15px 15px;
}
#basicExampleModal .modal-header .close{
    margin-top: -40px;
}

#basicExampleModal .modal-body
{
  padding: 45px 15px 45px 15px;
}
.now-left {width: 15%;}
.not-now-right {border: 1px solid rgb(25 130 98 / 55%);
    background: transparent;
    color: #333!important;
    font-weight: 500;
    margin-left: 10px;}
    .not-now-right:hover
    {
      color:#fff!important;
    }
</style>

<body class="dashboard-background leftmenu memberprofile">
    <div id="wrapper">

@error('StudentCv')
<div id="error_popup" style="z-index: 999; height: auto; width: 305px; background-color:rgb(231, 100, 59); position: fixed; top: 38px; text-align: center; vertical-align: sub; left: 1035px; margin-top: 35px; color: rgb(25, 25, 25);">

    <p style="padding-top:5px;
    font-size: 15px;
    color: #fff !important;
    padding-left: 10px;
    font-style: oblique;">{{ $message }}</p>
</div>
@enderror

@error('userImg')
<div id="error_popup" style="z-index: 999; height: auto; width: 305px; background-color: rgb(231, 100, 59); position: fixed; top: 38px; text-align: center; vertical-align: sub; left: 1035px; margin-top: 35px; color: rgb(25, 25, 25);">
    <p style="padding-top:5px;
    font-size: 15px;
    color: #fff !important;
    padding-left: 10px;
    font-style: oblique;">{{ $message }}</p>
</div>
@enderror



        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <a class="navbar-brand with-text"><img src="{{asset('assets/images/cmyqual-logo.png')}}" class="dashboard-logo"></a>
            <ul class="sidebar-nav">
                <li class="active"><a href="#per-info">Personal Info <span><i class="fa fa-info-circle" aria-hidden="true"></i></span></a></li>
                <li><a href="#about">About Me <span><i class="fa fa-user" aria-hidden="true"></i></span></a></li>
                <li><a href="#education">Education <span><i class="fa fa-graduation-cap" aria-hidden="true"></i></span></a></li>
                <li><a href="#work-experience">Work Experience <span><i class="fa fa-briefcase" aria-hidden="true"></i></span></a></li>
            </ul>
        </div>
        <!-- #sidebar-wrapper -->

        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div class="demo-parallax parallax section looking-photo nopadbot profile-bg" data-stellar-background-ratio="0.5">
                <div class="page-title section nobg">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <div class="title-area pull-left">
                                <h2>Edit Profile</h2>
                            </div>
                            <!-- /.pull-right -->
                            <div class="pull-right hidden-xs">
                                <div class="bread">
                                <ol class="breadcrumb">
                                        <li><a href="{{url('')}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                        <li><a href="{{url('user/profile')}}"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a></li>
                                        <li><a href="JavaScript:void(0);">Edit Profile</a></li>
                                       
                                    </ol>
                                </div>
                                <!-- end bread -->
                            </div>
                            <!-- /.pull-right -->
                        </div>
                        <!-- end clearfix -->
                    </div>
                </div>
                <!-- end page-title -->
            </div>

            <form name="editStuForm" method="post" action="{{url('update-student-detail')}}" id="editStuForm" enctype="multipart/form-data" class="defaultform updateprofile update2">
       
            <div class="section personal-info education-edit" id="per-info">
                <div class="container-fluid">
                    <div class="row">
                       @csrf
                        <div class="col-md-12">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="widget-title">
                                <h3>Personal Information</h3> 
                            </div><!-- end title -->
                            </div>
                       
                         <div class="col-lg-12 agreemant">
                         
                            </div>

                           <div class="personal-cover">
                               <div class="col-lg-4 col-md-4 col-sm-4 space">
                                    <label>First Name<apan class="textdenger">*</apan> </label>
                                    <input type="text" value="{{$fname}}" class="form-control" placeholder="" name="f_name" required="">    
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 space">
                                    <label>Last Name </label>
                                    <input type="text" value="{{$lname}}" class="form-control" placeholder="" name="l_name">    
                                </div>
                               
                                <div class="col-lg-4 col-md-4 col-sm-4 space">
                                    <label>Personal Email<apan class="textdenger">*</apan> </label>
                                    <input type="email" value="{{$email}}"class="form-control" placeholder="" name="personal_email" required="" readonly="">    
                                </div>
                                
                            </div>
                                
                                <div class="personal-cover">

                                <div class="col-lg-3 col-md-3 col-sm-3 space photo-upload">
                                    <label>Photo Upload </label><br>
                                    <div class="fileUpload fileUpload2">
                                    <input type="file" name="userImg" class="upload" onchange="document.getElementById('profileImg').src = window.URL.createObjectURL(this.files[0])" accept="image/gif, image/jpeg, image/png">
                                      
                                       <input type="text" name="oldUserImg" value="{{$userFulInfo->photos}}" hidden="">
                                    
                                    <span>Upload</span>
                                    </div> 
                                    @if($userFulInfo->photos)
                                    <img id="profileImg" src="{{asset('public/uploads/user/'.$userFulInfo->photos)}}" style="width:30px;height:30px;margin-top: -25px;margin-left: 10px;border-radius:50%">   
                                  
                                    @else
                                    <img id="profileImg" src="{{asset('assets/images/default_user.jpeg')}}" style="width:30px;height:30px;margin-top: -25px;margin-left: 10px;border-radius:50%">   
                                    
                                    @endif
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 space">
                                <label>Contact No<apan class="textdenger">*</apan> </label>
                                <input type="text" name="contact_no" id="contactNo" placeholder="" class="form-control" value="{{$userFulInfo->contact_no}}" data-input required="">
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 space">
                                <label>Date of Birth<apan class="textdenger">*</apan> </label>
                               <!--  <input type="date" id="basicDate" name="dob" class="form-control" value="{{$userFulInfo->dob}}"  required=""> -->
                                <input type="text" name="dob" id="editbasicDate" placeholder="Please select Date Time" class="form-control" value="{{date('d-m-Y',strtotime($userFulInfo->dob))}}" data-input required="">
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 space">
                                    <label class="">Country<apan class="textdenger">*</apan> </label>
                                    <select name="country" required="">
                        <option value="">Select country</option>
                        @foreach($country as $countryData)
                        <option value="{{$countryData->id}}" @php if($userFulInfo->country==$countryData->id){ echo"selected"; }else{ }@endphp>{{$countryData->country_name}}</option>
                        @endforeach
                        </select>
                                </div>
                         </div>
                          <div class="personal-cover">
                                <div class="col-lg-3 col-md-3 col-sm-3 space">
                                    <label>Current Employer </label>
                                    <input type="text" name="current_employe" class="form-control" placeholder="" value="{{$userFulInfo->current_employer}}">    
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 space">
                                    <label>Linkedin Handle </label>
                                    <input type="url" name="linkedin" placeholder="" name="blog" value="{{$userFulInfo->linkedin_handle}}" class="web-url">    
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 space">
                                    <label>Your Blog </label>
                                    <input type="url" value="{{$userFulInfo->blog_url}}" placeholder="" name="blog" value="{{$userFulInfo->blog_url}}" class="web-url">   
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 space">
                                    <label>Your Portfolio/Website </label>
                                    <input type="url" value="{{$userFulInfo->portfolio_url}}" placeholder="" value="{{$userFulInfo->portfolio_url}}" name="portfolio" class="web-url">   
                                </div>
                </div>


                        </div><!-- end col -->

 
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
            <div class="section personal-info education-edit" id="about">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="widget-title">
                                <h3>About Me</h3> 
                            </div><!-- end title -->
                            </div>
                          
                            <div class="col-lg-12 agreemant">
                         
                            </div>

                         <!--    <form class="defaultform updateprofile update2"> -->
                                <div class="col-lg-12 space">
                                <label>Biography</label><br>
                                <textarea id="biography" name="biography" rows="4" cols="50">{!! $userFulInfo->biography!!}</textarea>
  
                                </div>
                                 <div class="personal-cover2">
                                <div class="col-lg-6 col-md-6 col-sm-6 space">
                                    <label>Interest</label>
                                    <input type="text" value="{{$userFulInfo->interest}}" name="interest" class="form-control" placeholder="">    
                                </div>

                 <div class="col-lg-6 col-md-6 col-sm-6 space">
                    <label for="my-skill">My Skills</label>
                   
                    <select class="multipleChosenforskill" name="skill[]" id="select1" multiple="true" required>
                    <option value="" disabled >Select Skill</option>

                    @if($skill[0]->id)

                    @foreach($skill as $skillData) 

                    <option disabled @php if($skillData->skill=='communication'){ echo"selected";}else{ }@endphp value="communication" class="bolden" >Communication: How well do you communicate?</option>

                    @endforeach

                    @foreach($skill as $skillData) 
                    <option @php if($skillData->skill=='listening'){ echo"selected";}else{ }@endphp value="listening">Listening</option>
                    @endforeach   

                     @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='negotiation'){ echo"selected";}else{ }@endphp value="negotiation">Negotiation</option>
                    @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='nonverbal_communication'){ echo"selected";}else{ }@endphp value="nonverbal_communication">Nonverbal communication</option>
                    @endforeach

                    @foreach($skill as $skillData)
                    <option  @php if($skillData->skill=='presentation'){ echo"selected";}else{ }@endphp value="presentation">Presentation</option>
                    @endforeach

                   @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='public_speaking'){ echo"selected";}else{ }@endphp value="public_speaking">Public Speaking</option>
                     @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='storytelling'){ echo"selected";}else{ }@endphp value="storytelling">Storytelling</option>
                    @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='verbal_communication'){ echo"selected";}else{ }@endphp value="verbal_communication">Verbal communication</option>
                    @endforeach

                      @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='visual_communication'){ echo"selected";}else{ }@endphp value="visual_communication">Visual communication</option>
                    @endforeach

                                    
                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='writing_reports'){ echo"selected";}else{ }@endphp value="writing_reports">Writing reports</option>
                    @endforeach

                     @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='writing_skills'){ echo"selected";}else{ }@endphp value="writing skills">Writing skills</option>
                     @endforeach
                
                    @foreach($skill as $skillData)
                    <option disabled @php if($skillData->skill=='critical thinking: able to make informed decisions.'){ echo"selected";}else{ }@endphp value="critical thinking: able to make informed decisions." class="bolden">Critical Thinking: Able to make informed decisions.</option>
                    @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='adaptable'){ echo"selected";}else{ }@endphp value="adaptable">Adaptable</option>
                    @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='creative'){ echo"selected";}else{ }@endphp value="creative"> Creative</option>
                    @endforeach
                    
                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='critical_observation'){ echo"selected";}else{ }@endphp value="critical_observation">Critical observation</option>
                    @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='desire to learn'){ echo"selected";}else{ }@endphp value="desire to learn">Desire to learn</option>
                    @endforeach                    

                    @foreach($skill as $skillData)
                    <option @php if($userFulInfo->my_skills=='flexible'){ echo"selected";}else{ }@endphp value="flexible">Flexible</option>
                    @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='innovative'){ echo"selected";}else{ }@endphp value="innovative">Innovative</option>
                    @endforeach
                    
                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='logical thinking'){ echo"selected";}else{ }@endphp value="logical thinking">Logical Thinking</option>
                    @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='problem solving'){ echo"selected";}else{ }@endphp value="problem solving">Problem solving</option>
                    @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='thinks out of the box'){ echo"selected";}else{ }@endphp value="thinks out of the box">Thinks out of the box</option>
                     @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='tolerant of change'){ echo"selected";}else{ }@endphp value="tolerant of change">Tolerant of change</option>
                     @endforeach
                    
                    @foreach($skill as $skillData)
                    <option disabled @php if($skillData->skill=='leadership'){ echo"selected";}else{ }@endphp value="leadership" class="bolden">Leadership: Able to take responsibility</option>
                   @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='conflict management'){ echo"selected";}else{ }@endphp value="conflict management">Conflict management</option>
                     @endforeach
                    
                     @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='decision making'){ echo"selected";}else{ }@endphp value="decision making">Decision making</option>
                    @endforeach

                     @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='delegation'){ echo"selected";}else{ }@endphp value="delegation">Delegation</option>
                    @endforeach

                     @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='facilitation'){ echo"selected";}else{ }@endphp value="facilitation">Facilitation</option>
                     @endforeach

                     @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='give clear feedback'){ echo"selected";}else{ }@endphp value="give clear feedback">Give clear feedback</option>
                     @endforeach
                    
                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='inspire others'){ echo"selected";}else{ }@endphp value="inspire others">Inspire others</option>     
                    @endforeach

                   @foreach($skill as $skillData)
                    <option  @php if($skillData->skill=='manage difficult conversations'){ echo"selected";}else{ }@endphp value="manage difficult conversations">Manage difficult conversations</option>
                    @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='mentor/ coach'){ echo"selected";}else{ }@endphp value="mentor/ coach">Mentor/ coach</option>
                    @endforeach

                   @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='resolve issues'){ echo"selected";}else{ }@endphp value="resolve issues">Resolve issues</option>
                    @endforeach

                   @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='talent management'){ echo"selected";}else{ }@endphp value="talent management">Talent management</option>
                    @endforeach

                   @foreach($skill as $skillData)
                    <option disabled @php if($skillData->skill=='work ethic'){ echo"selected";}else{ }@endphp value="work ethic" class="bolden">Work Ethic: Be focused and dedicated</option>
                   @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($userFulInfo->skill=='dedicated/dependable'){ echo"selected";}else{ }@endphp value="dedicated/dependable">Dedicated/Dependable</option>
                     @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='follows directions'){ echo"selected";}else{ }@endphp value="follows directions">Follows directions</option>
                    @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='independent'){ echo"selected";}else{ }@endphp value="independent">Independent</option>
                    @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='meets deadlines'){ echo"selected";}else{ }@endphp value="meets deadlines">Meets deadlines</option>
                     @endforeach

                     @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='motivated'){ echo"selected";}else{ }@endphp value="motivated">Motivated</option>
                     @endforeach

                     @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='organised'){ echo"selected";}else{ }@endphp value="organised">Organised</option>
                     @endforeach
                    
                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='perseveres'){ echo"selected";}else{ }@endphp value="perseveres">Perseveres</option>
                    @endforeach

                     @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='resilient'){ echo"selected";}else{ }@endphp value="resilient">Resilient</option>
                    @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='self directed'){ echo"selected";}else{ }@endphp value="self directed">Self Directed</option>
                      @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='works well under pressure'){ echo"selected";}else{ }@endphp value="works well under pressure">Works well under pressure</option>
                     @endforeach

                    @foreach($skill as $skillData)
                    <option disabled @php if($skillData->skill=='teamwork'){ echo"selected";}else{ }@endphp value="teamwork" class="bolden">Teamwork: works well with others</option>
                    @endforeach
                   
                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='accepts feedback'){ echo"selected";}else{ }@endphp value="accepts feedback">Accepts feedback</option>
                    @endforeach
                    
                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='collaborates'){ echo"selected";}else{ }@endphp value="collaborates">Collaborates</option>
                      @endforeach

                   @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='emotionally intelligent'){ echo"selected";}else{ }@endphp value="emotionally intelligent">Emotionally intelligent</option>
                    @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='embraces diversity'){ echo"selected";}else{ }@endphp value="embraces diversity">Embraces diversity</option>
                    @endforeach
                    
                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='empathetic'){ echo"selected";}else{ }@endphp value="empathetic">Empathetic</option>
                    @endforeach

                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='interpersonal skills'){ echo"selected";}else{ }@endphp value="interpersonal skills">Interpersonal skills</option>
                    @endforeach
                    
                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='self aware'){ echo"selected";}else{ }@endphp value="self aware">Self aware</option>
                    @endforeach
                    
                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='team building'){ echo"selected";}else{ }@endphp value="team building">Team building</option>
                    @endforeach
 
                    @foreach($skill as $skillData)
                    <option @php if($skillData->skill=='thrives working in a team'){ echo"selected";}else{ }@endphp value="thrives working in a team">Thrives working in a team</option>
                    @endforeach
                    
                    @else 


                <option  value="communication" disabled class="bolden">Communication: How well do you communicate?</option>

                <option value="listening">Listening</option>

                <option  value="negotiation">Negotiation</option>

                <option value="nonverbal_communication">Nonverbal communication</option>

                <option  value="presentation">Presentation</option>

                <option  value="public_speaking">Public Speaking</option>

                <option  value="storytelling">Storytelling</option>

                <option  value="verbal_communication">Verbal communication</option>

                <option  value="visual_communication">Visual communication</option>

                <option  value="writing_reports">Writing reports</option>

                <option  value="writing skills">Writing skills</option>

                <option disabled value="critical thinking: able to make informed decisions." class="bolden">Critical Thinking: Able to make informed decisions.</option>

                <option  value="adaptable">Adaptable</option>


                <option  value="creative"> Creative</option>


                <option value="critical_observation">Critical observation</option>

                <option  value="desire to learn">Desire to learn</option>

                <option  value="flexible">Flexible</option>

                <option  value="innovative">Innovative</option>

                <option  value="logical thinking">Logical Thinking</option>

                <option  value="problem solving">Problem solving</option>

                <option  value="thinks out of the box">Thinks out of the box</option>

                <option  value="tolerant of change">Tolerant of change</option>

                <option disabled value="leadership" class="bolden">Leadership: Able to take responsibility</option>

                <option  value="conflict management">Conflict management</option>

                <option value="decision making">Decision making</option>

                <option  value="delegation">Delegation</option>

                <option  value="facilitation">Facilitation</option>

                <option  value="give clear feedback">Give clear feedback</option>

                <option  value="inspire others">Inspire others</option>     

                <option  value="manage difficult conversations">Manage difficult conversations</option>

                <option  value="mentor/ coach">Mentor/ coach</option>

                <option  value="resolve issues">Resolve issues</option>

                <option value="talent management">Talent management</option>

                <option  disabled value="work ethic" class="bolden">Work Ethic: Be focused and dedicated</option>

                <option  value="dedicated/dependable">Dedicated/Dependable</option>

                <option  value="follows directions">Follows directions</option>

                <option  value="independent">Independent</option>

                <option  value="meets deadlines">Meets deadlines</option>

                <option  value="motivated">Motivated</option>

                <option  value="organised">Organised</option>

                <option  value="perseveres">Perseveres</option>

                <option  value="resilient">Resilient</option>

                <option value="self directed">Self Directed</option>

                <option  value="works well under pressure">Works well under pressure</option>


                <option  disabled value="teamwork" class="bolden">Teamwork: works well with others</option>

                <option value="accepts feedback">Accepts feedback</option>

                <option value="collaborates">Collaborates</option>

                <option value="emotionally intelligent">Emotionally intelligent</option>

                <option value="embraces diversity">Embraces diversity</option>

                <option  value="empathetic">Empathetic</option>


                <option value="interpersonal skills">Interpersonal skills</option>

                <option value="self aware">Self aware</option>

                <option value="team building">Team building</option>

                <option value="thrives working in a team">Thrives working in a team</option>

                    @endif

                    
                  </select>
                  <span class="content"> Please identify your top skills and anything not on the list, please add it to your biography
                  </span>
                  </div>
</div>
<div class="personal-cover">
                <div class="col-lg-6 col-md-6 col-sm6 space">
                                    <label>My Occupation </label>
                                    <input type="text" name="occupation" class="form-control" placeholder="" value="{{$userFulInfo->my_occupation}}">    
                </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 space">
                    <label for="gender">Gender</label>
                    <select name="gender">
                    <option value="">Select Gender</option>
                    <option @php if($userFulInfo->gender=='male'){ echo"selected";}else{ }@endphp value="male">Male</option>
                    <option @php if($userFulInfo->gender=='female'){ echo"selected";}else{ }@endphp value="female">Female</option>
                    <option @php if($userFulInfo->gender=='prefer not to say'){ echo"selected";}else{ }@endphp value="prefer not to say">Prefer not to say</option>
                    </select>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-12">
                   <div class="col-lg-6 col-md-6 col-sm-6 space">
                    <label for="ethnicity">Ethnicity</label>
                    
                    <select class="multipleChosenforethy" id="select" multiple="true" name="ethnicity[]" >
                    @if($ethnicity[0]->id)
                    <option disabled value="">Select Ethnicity</option>
                    @foreach($ethnicity as $ethnicityData)
                    <option disabled @php if($ethnicityData->ethnicity=='asian'){ echo"selected";}else{ }@endphp value="asian" class="bolden">Asian</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='bangladeshi'){ echo"selected";}else{ }@endphp value="bangladeshi">Bangladeshi</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='british-asian'){ echo"selected";}else{ }@endphp value="british-asian">British-Asian</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='chinese'){ echo"selected";}else{ }@endphp value="chinese">Chinese</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='indian'){ echo"selected";}else{ }@endphp value="indian">Indian</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='pakistani'){ echo"selected";}else{ }@endphp value="pakistani">Pakistani</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='any-other-asian'){ echo"selected";}else{ }@endphp value="any-other-asian">Any other Asian Background</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option disabled @php if($ethnicityData->ethnicity=='Black, African, Caribbean or Black British'){ echo"selected";}else{ }@endphp value="Black, African, Caribbean or Black British" class="bolden">Black, African, Caribbean or Black British</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='african'){ echo"selected";}else{ }@endphp value="african">African</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='african-american'){ echo"selected";}else{ }@endphp value="african-american">African American</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='caribbean'){ echo"selected";}else{ }@endphp value="caribbean">Caribbean</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='any-other-black'){ echo"selected";}else{ }@endphp value="any-other-black">Any other Black, African or Caribbean background</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option disabled @php if($ethnicityData->ethnicity=='latino'){ echo"selected";}else{ }@endphp value="latino" class="bolden">Latino</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData) 
                    <option @php if($ethnicityData->ethnicity=='latin-american'){ echo"selected";}else{ }@endphp value="latin-american">Latin American</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData) 
                    <option @php if($ethnicityData->ethnicity=='mexican-american'){ echo"selected";}else{ }@endphp value="mexican-american">Mexican-American</option>

                    @endforeach

                    @foreach($ethnicity as $ethnicityData) 
                    <option @php if($ethnicityData->ethnicity=='any other latino background'){ echo"selected";}else{ }@endphp value="any other latino background">Any other latino background</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData) 
                    <option disabled @php if($ethnicityData->ethnicity=='mixed or multiple ethnic group'){ echo"selected";}else{ }@endphp value="mixed or multiple ethnic group" class="bolden">Mixed or Multiple ethnic groups</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='caribbean'){ echo"selected";}else{ }@endphp value="caribbean">White and Black Caribbean</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='african'){ echo"selected";}else{ }@endphp value="african">White and Black African</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='white-asian'){ echo"selected";}else{ }@endphp value="white-asian">White and Asian</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='any-other'){ echo"selected";}else{ }@endphp value="any-other">Any other Mixed or Multiple ethnic background</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option disabled @php if($ethnicityData->ethnicity=='white'){ echo"selected";}else{ }@endphp value="white" class="bolden">White</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='american'){ echo"selected";}else{ }@endphp value="american">American</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)
                    <option @php if($ethnicityData->ethnicity=='canadian'){ echo"selected";}else{ }@endphp value="canadian">Canadian</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData)     
                    <option @php if($ethnicityData->ethnicity=='european'){ echo"selected";}else{ }@endphp value="european">European</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData) 
                    <option @php if($ethnicityData->ethnicity=='english,welsh,scottish,northen irish or british irish'){ echo"selected";}else{ }@endphp value="english,welsh,scottish,northen irish or british irish">English, Welsh, Scottish, Northern Irish or British Irish</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData) 
                    <option @php if($ethnicityData->ethnicity=='irish'){ echo"selected";}else{ }@endphp value="irish">Irish</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData) 
                    <option @php if($ethnicityData->ethnicity=='any'){ echo"selected";}else{ }@endphp value="any">Any other White Background</option>     
                    @endforeach

                    @foreach($ethnicity as $ethnicityData) 
                    <option disabled @php if($ethnicityData->ethnicity=='other ethnic group'){ echo"selected";}else{ }@endphp value="other ethnic group" class="bolden">Other Ethnic Group</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData) 
                    <option @php if($ethnicityData->ethnicity=='arab'){ echo"selected";}else{ }@endphp value="arab">Arab</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData) 
                    <option @php if($ethnicityData->ethnicity=='any other ethnic group'){ echo"selected";}else{ }@endphp value="any other ethnic group">Any Other Ethnic Group</option>
                    @endforeach

                    @foreach($ethnicity as $ethnicityData) 
                    <option disabled @php if($ethnicityData->ethnicity=='prefer not to say'){ echo"selected";}else{ }@endphp value="prefer not to say" class="bolden">Prefer Not to Say</option>
                  
                    @endforeach

                    @else

                         <option disabled value="">Select Ethnicity</option>

                         <option disabled value="asian" class="bolden">Asian</option>

                         <option  value="bangladeshi">Bangladeshi</option>

                         <option  value="british-asian">British-Asian</option>

                         <option  value="chinese">Chinese</option>

                         <option  value="indian">Indian</option>

                         <option  value="pakistani">Pakistani</option>

                         <option  value="any-other-asian">Any other Asian Background</option>

                         <option disabled value="Black, African, Caribbean or Black British" class="bolden">Black, African, Caribbean or Black British</option>

                         <option  value="african">African</option>

                         <option value="african-american">African American</option>

                         <option  value="caribbean">Caribbean</option>

                         <option  value="any-other-black">Any other Black, African or Caribbean background</option>

                         <option disabled value="latino" class="bolden">Latino</option>

                         <option  value="latin-american">Latin American</option>

                         <option  value="mexican-american">Mexican-American</option>

                         <option  value="any other latino background">Any other latino background</option>


                         <option disabled value="mixed or multiple ethnic group" class="bolden">Mixed or Multiple ethnic groups</option>

                         <option  value="caribbean">White and Black Caribbean</option>

                         <option  value="african">White and Black African</option>

                         <option  value="white-asian">White and Asian</option>

                         <option  value="any-other">Any other Mixed or Multiple ethnic background</option>

                         <option disabled value="white" class="bolden">White</option>

                         <option value="american">American</option>

                         <option  value="canadian">Canadian</option>

                         <option value="european">European</option>

                         <option value="english,welsh,scottish,northen irish or british irish">English, Welsh, Scottish, Northern Irish or British Irish</option>

                         <option  value="irish">Irish</option>

                         <option value="any">Any other White Background</option>     

                         <option disabled value="other ethnic group" class="bolden">Other Ethnic Group</option>

                         <option value="arab">Arab</option>

                         <option value="any other ethnic group">Any Other Ethnic Group</option>

                         <option  disabled value="prefer not to say" class="bolden">Prefer Not to Say</option>

                        @endif
                        </select> </div>  
                    
                        <div class="col-lg-6 col-md-6 col-sm-6 space Additional Email">
                        <label for="additional">Additional Email</label><br>
                        <input value="{{$userFulInfo->additional_email}}" type="email" placeholder="" name="other_email" class="additional-email">
                        </div>
                        </div>
                                
                             
                       <!--      </form> -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
        

            <div class="section education-edit" id="education">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="widget-title">
                            <h3>Education</h3> 
                            </div><!-- end title -->
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                     <!--        <button type="button" class="btn btn-default"><i class="fa fa-linkedin-square" aria-hidden="true"></i> Update with Linkedin</button> -->
                            </div>

                            <div class="col-lg-12 agreemant">
                            <div class="form-group">
                            <div class="add-field-of-study add-field-of-study2">
                               <button type="button" id="addMoreEdu" class="btn defaultAdd">+ Add Field of Study</button>
                               </div>
                            </div>
                            </div>

                            <div class="defaultform updateprofile eduDetails">

                            <div id="appendDBdiv">
                             @php
                             if(($edu_details[0]->id)){
                             @endphp
                           
                             @php
                             foreach ($edu_details as $key => $eduValue){
                              @endphp
                              <div id="removeRowDB{{$eduValue->id}}" class="rowDiv">
                              <div class="col-lg-6 col-md-6 col-sm-4 space Oxford">
                                    <label>School </label>
                                    <input type="text" class="form-control" placeholder="Oxford Brookes University" value="{{$eduValue->school}}" name="school[]" maxlength="100">    
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-4 space">
                                    <label>Grad Year </label>
                                    <input type="number" value="{{$eduValue->grad_year}}"  maxlength="4" name="gradeYera[]" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" placeholder="2020" minlength="2">    
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-4 space">
                                    <label>Grad Month </label>
                                    <input type="number" value="{{$eduValue->grad_month}}" maxlength="2" name="gradeMonth[]" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  minlength="1" class="form-control" placeholder="12">    
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 space">
                                    <label>Degree </label>
                                    <input type="text" class="form-control" value="{{$eduValue->degree}}" minlength="2" maxlength="100" placeholder="Senior Fellowship" name="degree[]">    
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 space">
                                    <label class="fos">Field of Study </label>
                                    <input type="text" value="{{$eduValue->field_of_study}}" name="fieldOfStudy[]" maxlength="100" minlength="2" class="form-control art" placeholder="Arts">    
                                </div>
                    
                               <div class="col-lg-6 text-left">
                               <div class="add-field-of-study">
                               <span><a href="javascript:void(0)" id="remobe-db-row{{$key}}" onclick="removedbRow(@php echo $eduValue->id;@endphp)"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove this Degree</a></span>
                               </div>
                               </div>


                               <div class="col-lg-6 text-right">
                               <div class="add-field-of-study add-field-of-study2">
                               <h1 style="height:50px"></h1>
                               </div>
                               </div>
                            </div>
                                 @php } 
                                  @endphp
                           
                               @php   }else{                           
                                 @endphp
                                <div calss="removeRow0" class="addMoreEduAppendDiv">
                                <div class="col-lg-6 col-md-6 col-sm-4 space">
                                    <label>School </label>
                                    <input type="text" class="form-control" placeholder="Oxford Brookes University" name="school[]" minlength="2" maxlength="100">    
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-4 space">
                                    <label>Grad Year </label>
                                    <input type="number" value="{{$eduValue->grad_year}}"  maxlength="4" name="gradeYera[]" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" placeholder="2020">    
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-4 space">
                                    <label>Grad Month </label>
                                    <input type="number" value="{{$eduValue->grad_month}}" maxlength="2" name="gradeMonth[]" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  minlength="1"class="form-control" placeholder="12">    
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 space">
                                    <label>Degree </label>
                                    <input type="text" class="form-control" value="{{$eduValue->degree}}" minlength="2" maxlength="100" placeholder="Senior Fellowship" name="degree[]">    
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 space">
                                    <label class="fos">Field of Study </label>
                                    <input type="text" name="fieldOfStudy[]" minlength="2" class="form-control art" placeholder="Arts" maxlength="100" style="margin-left: 0!important;
    width: 100%!important;">    
                                </div>
                               
                

@php
                               }
@endphp

    </div>

                               </div>

   <div class="col-lg-6 text-left">
                               <div class="add-field-of-study">
                               
                               </div>
                               </div>

                               <div class="col-lg-6 text-right">
                             <!--   <div class="add-field-of-study add-field-of-study2">
                               <button type="button" id="addMoreEdu" class="btn defaultAdd">+ Add Field of Study</button>
                               </div> -->
                               </div>
                           

                               <hr class="invis"> 
                            </div>

                             <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                           <!--  <button type="button" class="btn btn-default"><i class="fa fa-linkedin-square" aria-hidden="true"></i> Update with Linkedin</button> -->
                            </div>
                            <br>
                            <div class="col-lg-12 agreemant">

                            <div class="form-group agree-degree-label">
                            <div class="form-group">
                            <input type="checkbox" id="agreeDegree" onchange="checkDegree()" name="degreeStatus">

                            <label for="agreeDegree">I do not have a degree</label>
                            </div>
                            </div>


                        </div><!-- end col -->

 
                    </div><!-- end row -->
                </div><!-- end container -->
                            <div class="section education-edit" id="work-experience">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="widget-title">
                                <h3>Work Experience</h3> 
                            </div><!-- end title -->
                            </div>
               
                            <div class="col-lg-12 col-md-12 col-sm-12 space photo-upload">
                            <label>CV Upload </label><br>
                            <input type="file" accept=".xlsx,.xls,.doc,.docx,.ppt,.pptx,.txt,.pdf" class="upload" name="StudentCv" style="border:none;">       
                                     
                             @error('StudentCv')
                             <div class="validate_err" style="color:red">{{ $message }}</div>
                               @enderror
                              @if($userFulInfo->work_exp) 
                                <a href="{{url('public/uploads/student_cv/'.$userFulInfo->work_exp)}}" target="_blank"><span>View</span></a>
                                  <input type="text" hidden class="upload" name="OldCVStudent" value="{{$userFulInfo->work_exp}}">
                                @endif
                               </div>

                                <div class="col-lg-12">
                                <div class="space clearfix">
                                <button type="submit" name="btnEdit" class="btn btn-primary" style="background-color:#3ea3a4!important;border-radius: 8px!important;">Update Profile</button>
                                </div>
                               </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>

            </div><!-- end section -->      

        <!-- end page-content-wrapper -->
@endsection
@section('script')
<script>
$("#editbasicDate").flatpickr({
    dateFormat: "d-m-Y",
    maxDate: new Date(),
});

    $(document).ready(function(){
  //Chosen
    
    $('#error_popup').fadeOut(10000);

    $('#basicExampleModal').modal('show');

      $(".multipleChosenforskill").chosen({
      placeholder_text_multiple: "select your skill" //placeholder
    });

  $(".multipleChosenforethy").chosen({
      placeholder_text_multiple: "select your ethnicity" //placeholder
    });


  $('#update_popup').fadeOut(6000);
  $('.defaultRemove').hide();
 
  $(".multipleChosen").chosen({
      placeholder_text_multiple: "select your skill" //placeholder
    });
})

   function checkDegree(){
   if($('#agreeDegree').is(':checked')){
    $('.eduDetails').hide();
    $('#addMoreEdu').hide();
    $('.form-control').prop('required',false);
 
   }else{
    $('.eduDetails').show();
    $('#addMoreEdu').show();
    $('.form-control').prop('required',true);
   }
   }
   
   var j=1;
   $('#addMoreEdu').on('click',function(){

   $('#appendDBdiv').append('<div id="removeRow'+j+'"><div class="col-lg-6 col-md-6 col-sm-4 space"><label>School </label><input type="text" minlength="2" maxlength="100" class="form-control" placeholder="Oxford Brookes University" name="school[]"></div><div class="col-lg-3 col-md-3 col-sm-4 space"><label>Grad Year </label><input type="number" minlength="2" name="gradeYera[]" maxlength="4" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" placeholder="2020"></div><div class="col-lg-3 col-md-3 col-sm-4 space"><label>Grad Month </label><input type="number" minlength="1" name="gradeMonth[]" maxlength="2" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" placeholder="12"></div><div class="col-lg-6 col-md-6 col-sm-6 space"><label>Degree </label><input type="text" minlength="2" class="form-control" maxlength="100" placeholder="Senior Fellowship" name="degree[]"></div><div class="col-lg-6 col-md-6 col-sm-6 space"><label class="fos">Field of Study </label><input type="text" minlength="2" maxlength="100" name="fieldOfStudy[]" class="form-control art" placeholder="Arts"></div><div class="col-lg-6 text-left defaultRemove"><div class="add-field-of-study"><span><a href="javascript:void(0)" class="" onclick="removeAppRow('+j+')"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove this Degree</a></span></div></div><div class="col-lg-6 text-right"><div class="add-field-of-study add-field-of-study2"><h1 style="height:50px"></h1></div></div>');
 j++;
   
   });
   

function removedbRow(eve){
$('#removeRowDB'+eve).remove();
$.ajax({
     url:"{{url('remove-edu-student-row')}}",
     method:'POST',
     data:{'_token':"{{csrf_token()}}",id:eve},
     success:function(response){

     }
    });
}

function removeAppRow(eve){
$('#removeRow'+eve).remove();
}
</script>

<script type="text/javascript">

$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than {0} MB');


 $('#editStuForm').validate({
  rules:{
  f_name:{
  minlength:2,
  maxlength:30,
  required:true,
  },
  l_name:{
  minlength:2,
  maxlength:30, 
  },
  personal_email:{
  required:true,
  email:true,
  maxlength:100, 
  },
  dob:{
  required:true,  
  },
  country:{
  required:true,  
  },
  current_employe:{
  minlength:2,
  maxlength:100,
  },
  linkedin:{
  maxlength:500,
  },
  blog:{
  maxlength:500,  
  },
  portfolio:{
  maxlength:500,
  },
  biography:{
  minlength:5,
  maxlength:500,   
  },
  interest:{
  minlength:2,
  maxlength:300,       
//   required:true, 
  },
  skill:{
  required:true, 
  },
  occupation:{
   minlength:2,
  maxlength:300, 
  },
  gender:{
  //required:true,  
  },
  ethnicity:{
   
  },
  other_email:{
  maxlength:100,
  email:true,  
  },
  school:{
  minlength:2,
  maxLength:100,
  },
  gradeYera:{
  
  },
  gradeMonth:{

  },
  degree:{

  minlength:2,

  },
  fieldOfStudy:{

   minlength:2, 
  },
    contact_no:{
  //  required:true,
    minlength:10,
    maxlength:15,
    // remote:{
    // url: "<?php echo url('check-student-contactno');?>",
    // type: "post",
    // data:{mobile:$('#mob-num').val(),"_token":'{{csrf_token()}}'},
    //         }  
    },
    StudentCv:{
      filesize : 1000 * 1024
    }, 
  },
  messages:{
  f_name:{
  required:'Please enter first name',
  
  },

  personal_email:{
  required:'Please enter email id',
  email:'Please enter valide email id',  
  },
  dob:{
  required:'Please enter DOB',  
  },
  country:{
  required:'Please select country',
   },
  current_employe:{
  
  },
    contact_no:{
   required:'Please enter contact no',
   //remote:'This contact no already exists. Please enter another one.',
   },   
  linkedin:{

  },
  blog:{

  },
  portfolio:{
 
  },
  biography:{

  },
  interest:{
 
  },
  skill:{
  required:'Please select your skill',
  },
  occupation:{

  },
  gender:{

  },
  ethnicity:{
   
  },
  other_email:{

  },  
  school:{

  },
  gradeYera:{

  },   
  gradeMonth:{
 
  },
  degree:{

  },
  fieldOfStudy:{
   
  },
  StudentCv:{
  filesize :'File size must be less than 1 MB',
    },  
  }  
 });  
</script>
@endsection
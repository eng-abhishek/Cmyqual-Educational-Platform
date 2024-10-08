@extends('user.layout.layout')
@section('title','cMyQual | Edit Profile')
@section('content')
<style>
body.leftmenu #wrapper .container-fluid {
    max-width: 100%;
    padding-left: 50px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .container-fluid
{
    padding-left: 90px!important;
}
.fa.fa-info-circle
  {
    font-size:15px;
    color:#1D9B75;
  }
  .tooltip-arrow
  {
    border-right-color:#1D9B75!important;
    border-left-color: #1D9B75!important;
  }
  .tooltip-inner
{
    min-width: 500px;
    padding: 13px 10px;
    font-size: 13px;
    text-align: center;
    border: 0.847222px solid rgba(0, 0, 0, 0.12);
    background-color: #ffffff!important;
    color:#333!important;
}

@media(min-width:1440px)
{
    label#userImg-error {
    margin-left: -110px!important;
    }
    body.leftmenu #wrapper .container-fluid
    {
        padding-left: 70px!important;
    }
}
@media(min-width:1600px)
{
    label#userImg-error {
    margin-left: -150px!important;
    width: 50%!important;
    }
    body.leftmenu #wrapper.toggled #page-content-wrapper label#userImg-error {
    margin-left: -170px!important;}
}

@media(min-width:1920px)
{
    label#userImg-error {
    margin-left: -180px!important;
    }
    body.leftmenu #wrapper.toggled #page-content-wrapper label#userImg-error {
    margin-left: -200px!important;
}
}
body.leftmenu #wrapper.toggled #page-content-wrapper label#userImg-error {
    margin-left: -150px;
    width: 50%;
}
.fileUpload
{
    width:100%!important;
}

label#userImg-error
{
    margin-left: -100px;
    width: 60%;
    line-height: 15px;
    text-align: left;
}
.fileUpload span{
    background: #FF9800;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
    color: #fff;
    display: block;
    padding: 5px 10px!important;
    margin-left: -4.5%;
    overflow: hidden;
    padding: 0;
    position: relative;
    text-align: center;
    width: 80px;
    cursor: pointer;
}
.fileUpload span:hover, .fileUpload span:active, .fileUpload span:focus {
  background: #1D9B75;
  cursor: pointer;
}
.personal-cover
{
    display: -webkit-inline-box;
    display: inline-block;
    width: 100%;
}
.form-group.agree-degree-label label{margin-left:15px;}
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

@media(min-width:1440px)
{
    body.dashboard-background.leftmenu.memberprofile #wrapper {
    padding-top: 73px!important;
}
.menuopener {
    height: 52px!important;
    line-height: 52px!important;
    width: 50px !important;
    margin-top: -1px!important;
}
.logout-bar ul {
    margin-top: 0px!important;
}
}
@media(min-width:1600px)
{
    body.dashboard-background.leftmenu.memberprofile #wrapper {
    padding-top: 81px!important;
}
.logout-bar ul {
    margin-top: 0px!important;
}
}
@media(min-width:1920px)
{
    body.dashboard-background.leftmenu.memberprofile #wrapper {
    padding-top: 93px!important;
}
.logout-bar ul {
    margin-top: 5px!important;
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
.chosen-container
{
    padding: 0 0px
}   
.chosen-container-multi .chosen-choices {
    border: none !important;
    /* z-index: 1;
    overflow-y: scroll;
    height: 50px!important; */
}
ul.chosen-choices
{
    z-index: 999;
    max-height: 110px!important;
    overflow-y: scroll!important;
}
ul.chosen-choices::-webkit-scrollbar {
  width: 3px;
}

/* Track */
ul.chosen-choices::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
ul.chosen-choices::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
ul.chosen-choices::-webkit-scrollbar-thumb:hover {
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
    padding-top: 0%;
}
body.leftmenu #wrapper .container-fluid
{
    padding-left: 20px!important;
}
.personal-cover2 .fa.fa-info-circle
{
   float:right;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .widget-title .fa.fa-info-circle {
    margin-right: 40%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper #profileImg {
    margin-left: 35%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .container-fluid
{
    padding-right:50px;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .widget-title .tooltip-inner {
    min-width: 145px!important;
    margin-left: -90px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .personal-cover2 .tooltip-inner
{
    margin-left: 60px!important;
}
.widget-title .tooltip.right
{
    left: 55%!important;
}
.widget-title .tooltip-inner {
    min-width: 165px!important;
    margin-left: -110px!important;
}
.widget-title .tooltip.right {
    top: 0px!important;
}
.personal-cover2 .tooltip.left
{
    left: -8.094px!important;
    top: 0px!important;
}
.personal-cover2 .tooltip-inner
{
    min-width: 230px!important;
}
.widget-title .fa.fa-info-circle {
    margin-right: 45%!important;
}
body.dashboard-background.leftmenu.memberprofile #wrapper {
        padding-top: 90px!important;
    }
  
}
@media(max-width:360px)
{
    img#profileImg {
    margin-left: 35%!important;
}
.personal-cover2 .tooltip-inner
{
    margin-left: 115px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper #addMoreEdu
{
    margin-left: 0px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper #education .widget-title {
    margin-left: -55%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .form-group.agree-degree-label {
    margin-right: 50%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper #work-experience .col-lg-12.col-md-12.col-sm-12, body.leftmenu #wrapper.toggled #page-content-wrapper #btnEdit {
    margin-left: -55%;
}
}
@media(max-width:375px)
{
    .add-field-of-study.add-field-of-study2 h1{height:0px!important;}
    .col-lg-6.col-md-6.col-sm-4.space {
    margin-top: -10px!important;
}
.personal-cover2 .tooltip.left {
    left: -58.094px!important;
    top: 0px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .widget-title .tooltip.right {
    top: 0px!important;
    left: 20%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .widget-title .fa.fa-info-circle {
    margin-right: 30%!important;
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
        .personal-cover2 .tooltip-inner
        {
             min-width: 370px;
             margin-left: 130px;
        }
        body.leftmenu #wrapper.toggled #page-content-wrapper .container-fluid {
        padding-left: 10px!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .personal-cover2 .tooltip-inner {
    min-width: 170px;
    margin-left: 300px;
}
        .widget-title .tooltip.right
        {
            top: -40px!important;
            left: 60%!important;
        }
        .widget-title .fa.fa-info-circle
        {
            float: right;
    margin-top: 27px;
    margin-right: 40%;
        }
        .widget-title .tooltip-inner
        {
            min-width:370px;
        }
        #profileImg
        {
            margin-left: 15%!important;
        }
        .fileUpload span
        {
            margin-left: -10px;
            width: 80px;
        }
        .defaultform.updateprofile.update2 .col-md-4, .defaultform.updateprofile.update2 .col-md-3
        {
            width:100%;
        }
        label#userImg-error {
    margin-left: -77px;
    width: 58%;
        }
        body.leftmenu #wrapper.toggled #page-content-wrapper label#userImg-error {
    margin-left: -107px;
        }
        label#contactNo-error
        {
            font-size: 10.43px;
        }
        body.leftmenu #wrapper {
    padding-top: 65px!important;
}
    }
    @media(max-width:768px)
    {
        label#userImg-error {
    margin-left: -103px;
        }
        .widget-title .tooltip.right {
    top: -50px!important;
    left: 85%!important;
}
        label.tab-country {
    margin-top: 0px!important;
}

#profileImg {
    margin-left: 25%!important;
}
.personal-cover2.mobile-interest .col-sm-6 
{
    width:100%;
}
.defaultform.updateprofile.eduDetails .col-lg-6.col-md-6.col-sm-4.space
{
    width:100%;
}
        body.leftmenu #wrapper.toggled #page-content-wrapper label#userImg-error {
    margin-left: -157px;
        }
    }
    @media(max-width:414px)
    {
        .defaultform.updateprofile
        {
            padding-top: 20px;
            margin-bottom: -80px;
        }
        body.leftmenu #wrapper.toggled #page-content-wrapper #education .container-fluid
        {
            padding-left: 100px!important;
        }
        body.leftmenu #wrapper.toggled #page-content-wrapper #education .widget-title
        {
            margin-left: -40%!important;
        }
        body.leftmenu #wrapper.toggled #page-content-wrapper .add-field-of-study.add-field-of-study2
        {
            margin-left: -47%;
        }
        body.leftmenu #wrapper.toggled #page-content-wrapper .form-group.agree-degree-label
        {
            margin-right: 40%;
        }
        body.leftmenu #wrapper.toggled #page-content-wrapper #work-experience .col-lg-12.col-md-12.col-sm-12
        {
            margin-left: -40%;
        }
        body.leftmenu #wrapper.toggled #page-content-wrapper #btnEdit
        {
            margin-left: -40%;
            margin-top: 0px;
        }
        body.leftmenu #wrapper.toggled #page-content-wrapper .container-fluid {
    padding-left: 0px!important;
}
        label#userImg-error {
    margin-left: -163px;
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
    @media(max-width:375px)
    {
        label#userImg-error {
    margin-left: -143px;
        }
        .defaultform.updateprofile
        {
            padding-top: 50px;
    margin-bottom: -60px;
        }
        body.leftmenu #wrapper.toggled #page-content-wrapper #education .widget-title {
    margin-left: -50%!important;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .add-field-of-study.add-field-of-study2 {
    margin-left: -60%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper .form-group.agree-degree-label {
    margin-right: 45%;
}
body.leftmenu #wrapper.toggled #page-content-wrapper #work-experience .col-lg-12.col-md-12.col-sm-12 , body.leftmenu #wrapper.toggled #page-content-wrapper #btnEdit {
    margin-left: -50%;
}
    }
</style>

<body class="dashboard-background leftmenu memberprofile">
    <div id="wrapper">

@error('StudentCv')
<div id="error_popup" style="z-index: 999; height: auto; width: 305px; background-color: rgb(231, 100, 59); position: fixed; top: 38px; text-align: center; vertical-align: sub; left: 1035px; margin-top: 35px; color: rgb(25, 25, 25);">

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
                                 <h3>Personal Information <a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Why we ask you for this information? Data entered into required fields (*) are for security and verification purposes only. cMyQual  will not share this information with any other parties
"><i class="fa fa-info-circle" aria-hidden="true"></i></a></h3> 
                               
                            </div><!-- end title -->
                            </div>
                       
                         <div class="col-lg-12 agreemant" style="padding-bottom:0px;">
                         
                            </div>

                              <div class="personal-cover2">
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
                                   <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Avoid providing a work email, as this might change when you change organisations"><i class="fa fa-info-circle" aria-hidden="true"></i></a>

                                    <input type="email" value="{{$email}}"class="form-control" placeholder="" name="personal_email" required="" readonly="">    
                                </div>
                                </div>
                         
                                
                                <div class="personal-cover">

                                <div class="col-lg-3 col-md-3 col-sm-3 space photo-upload">
                                    <label style="display:block;">Photo Upload </label>
                                    
                                    <div class="fileUpload fileUpload2" style="background-color:transparent;">

                               <span style="">Upload</span>

                                    <input type="file" name="userImg" class="upload" onchange="document.getElementById('profileImg').src = window.URL.createObjectURL(this.files[0])" accept="image/gif, image/jpeg, image/png">

                                     <input type="text" name="oldUserImg" value="{{$userFulInfo->photos}}" hidden="">
                                     </div> 

                                        @if($userFulInfo->photos)
                                        @if(!(substr($userFulInfo->photos, 0, 8) == 'https://'))
                                          <img id="profileImg" src="{{asset('public/uploads/user/'.$userFulInfo->photos)}}" style="width:50px; height:50px ;margin-top: -55px;margin-left: 50%;border-radius:50%;position: absolute;">
                                            @else
                                          <img id="profileImg" src="{{$userFulInfo->photos}}" style="width:50px; height:50px ;margin-top: -55px;margin-left: 50%;border-radius:50%;position: absolute;">
                                            @endif
                                          @else
                                         <img id="profileImg" src="{{asset('assets/images/default_user.jpeg')}}" style="width:50px;height:50px;margin-top: -55px;margin-left: 50%;border-radius:50%;position: absolute;">
                                          @endif
                                        </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 space">
                                <label>Contact No<apan class="textdenger">*</apan> </label>
                                <input type="text" name="contact_no" id="contactNo" placeholder="" class="form-control" value="{{$userFulInfo->contact_no}}" data-input required="">
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 space">
                                <label>Date of Birth<apan class="textdenger">*</apan> </label>
                               <!--  <input type="date" id="basicDate" name="dob" class="form-control" value="{{$userFulInfo->dob}}"  required=""> -->
<?php 
if(empty($userFulInfo->dob)){
$dob='';
}else{
$dob=date('d-m-Y',strtotime($userFulInfo->dob));
}
?>                              
                                <input type="text" name="dob" id="editbasicDate" placeholder="Please select Date Time" class="form-control" value="{{$dob}}" data-input required="">
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 space">
                                    <label class="tab-country">Country<apan class="textdenger">*</apan> </label>
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
                               <h3>About Me  <a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Why we ask you for this additional, optional information? The following fields will enable the cMyQual coaches and team to offer tailored career solutions such as goals, links to courses, or suggestions for future career trajectories."><i class="fa fa-info-circle" aria-hidden="true"></i></a></h3>   

                            </div><!-- end title -->
                            </div>
                          
                            <div class="col-lg-12 agreemant">
                         
                            </div>

                         <!--    <form class="defaultform updateprofile update2"> -->
                                <!-- <div class="col-lg-12 space">
                                <label>Biography</label><br>
                                <textarea id="biography" name="biography" rows="4" cols="50">{!! $userFulInfo->biography!!}</textarea>
  
                                </div> -->

                                 <div class="personal-cover2 mobile-interest">
                                <div class="col-lg-6 col-md-6 col-sm-6 space">
                                    <label>Interests</label>
                                    <input type="text" value="{{$userFulInfo->interest}}" name="interest" class="form-control" placeholder="">    
                                </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 space">
                    <label for="my-skill">My Skills</label>
                   
                    <select class="multipleChosenforskill" name="skill[]" id="select1" multiple="true" required>
                   
                            <option  value="" disabled="">-- select skill --</option>
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
                  <span class="content"> Please identify your top skills and anything not on the list, please add it to your biography
                  </span>
                  </div>
</div>
<div class="personal-cover2">
                <div class="col-lg-6 col-md-6 col-sm6 space">
                                    <label>My Occupation </label>
                                    <input type="text" name="occupation" class="form-control" placeholder="" value="{{$userFulInfo->my_occupation}}">    
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 space Additional Email">
                        <label for="additional">Additional Email</label><br>
                        <input value="{{$userFulInfo->additional_email}}" type="email" placeholder="" name="other_email" class="additional-email">
                        </div>
              <!--       <div class="col-lg-6 col-md-6 col-sm-6 space">
                    <label for="gender">Gender</label>
                    <select name="gender">
                    <option value="">Select Gender</option>
                    <option @php if($userFulInfo->gender=='male'){ echo"selected";}else{ }@endphp value="male">Male</option>
                    <option @php if($userFulInfo->gender=='female'){ echo"selected";}else{ }@endphp value="female">Female</option>
                    <option @php if($userFulInfo->gender=='prefer not to say'){ echo"selected";}else{ }@endphp value="prefer not to say">Prefer not to say</option>
                    </select>
                    </div> -->

                    </div>
                    </div>

                    <!------ <div class="col-md-12"> ------->
                <!--    <div class="col-lg-6 col-md-6 col-sm-6 space">
                    <label for="ethnicity">Ethnicity</label>
                    
                    <select class="multipleChosenforethy" id="select" multiple="true" name="ethnicity[]" >
                            <option  value="" disabled="">-- select ethnicity --</option>
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
                            <option @if(isset($ethi_arr) && in_array ('prefer not to say', $ethi_arr)){{'Selected'}} @endif value="prefer not to say">Prefer Not to Say</option>

                          </select>

                      </div>   -->
                    
                        <!---- <div class="col-lg-6 col-md-6 col-sm-6 space Additional Email">
                        <label for="additional">Additional Email</label><br>
                        <input value="{{$userFulInfo->additional_email}}" type="email" placeholder="" name="other_email" class="additional-email">
                        </div> ----->
                      <!------ </div> ------>
                                
                             
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
                                    <input type="text" class="form-control" placeholder="Enter school name" value="{{$eduValue->school}}" name="school[]" maxlength="100">    
                              </div>

                                <div class="col-lg-3 col-md-3 col-sm-4 space">
                                    <label>Grad Year </label>
                                    <input type="number" value="{{$eduValue->grad_year}}"  maxlength="4" name="gradeYera[]" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" placeholder="Enter grad year" minlength="2">    
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-4 space">
                                    <label>Grad Month </label>
                                    
                                    <select class="form-control" name="gradeMonth[]" id="grad_month">
                              <option value="">Please select month</option>
                              <option  @if($eduValue->grad_month == 'Jan'){{'Selected'}}@endif value="Jan">Jan</option>
                              <option  @if($eduValue->grad_month == 'Feb'){{'Selected'}}@endif value="Feb">Feb</option>
                              <option  @if($eduValue->grad_month == 'Mar'){{'Selected'}}@endif value="Mar">Mar</option>
                              <option  @if($eduValue->grad_month == 'Apr'){{'Selected'}}@endif value="Apr">Apr</option>      
                              <option  @if($eduValue->grad_month == 'May'){{'Selected'}}@endif value="May">May</option>
                              <option  @if($eduValue->grad_month == 'Jun'){{'Selected'}}@endif value="Jun">Jun</option>
                              <option  @if($eduValue->grad_month == 'jul'){{'Selected'}}@endif value="jul">Jul</option>
                              <option  @if($eduValue->grad_month == 'aug'){{'Selected'}}@endif value="aug">Aug</option>
                              <option  @if($eduValue->grad_month == 'sep'){{'Selected'}}@endif value="sep">Sep</option>
                              <option  @if($eduValue->grad_month == 'oct'){{'Selected'}}@endif value="oct">Oct</option>
                              <option  @if($eduValue->grad_month == 'nov'){{'Selected'}}@endif value="nov">Nov</option>
                              <option  @if($eduValue->grad_month == 'dec'){{'Selected'}}@endif value="dec">Dec</option>
</select>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 space">
                                    <label>Degree </label>
                                    <input type="text" class="form-control" value="{{$eduValue->degree}}" minlength="2" maxlength="100" placeholder="" name="degree[]">    
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 space">
                                    <label class="fos">Field of Study </label>
                                    <input type="text" value="{{$eduValue->field_of_study}}" name="fieldOfStudy[]" maxlength="100" minlength="2" class="form-control art" placeholder="">    
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
                                    <input type="text" class="form-control" placeholder="Enter school name" name="school[]" minlength="2" maxlength="100">    
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-4 space">
                                    <label>Grad Year </label>
                                    <input type="number" value="{{$eduValue->grad_year}}"  maxlength="4" name="gradeYera[]" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" placeholder="Enter grad year">    
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-4 space">
                                    <label>Grad Month </label>

<select class="form-control" name="gradeMonth[]" id="grad_month">
<option value="">Please select month</option>
<option value="Jan">Jan</option>
<option  value="Feb">Feb</option>
<option value="Mar">Mar</option>
<option value="Apr">Apr</option>      
<option  value="May">May</option>
<option  value="Jun">Jun</option>
<option  value="jul">Jul</option>
<option  value="aug">Aug</option>
<option  value="sep">Sep</option>
<option value="oct">Oct</option>
<option value="nov">Nov</option>
<option value="dec">Dec</option>
</select>

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 space">
                                    <label>Degree </label>
                                    <input type="text" class="form-control" value="{{$eduValue->degree}}" minlength="2" maxlength="100" placeholder="" name="degree[]">    
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 space">
                                    <label class="fos">Field of Study </label>
                                  <input type="text" name="fieldOfStudy[]" minlength="2" class="form-control art" placeholder="" maxlength="100" style="margin-left: 0!important;width: 100%!important;">    
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
                            <div class="col-lg-12 agreemant new-agreemant">

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
               
<!--                             <div class="col-lg-12 col-md-12 col-sm-12 space photo-upload">
                            <label>CV Upload </label><br>
                            <input type="file" accept=".xlsx,.xls,.doc,.docx,.ppt,.pptx,.txt,.pdf" class="upload" name="StudentCv" style="border:none;">       
                                     
                             @error('StudentCv')
                             <div class="validate_err" style="color:red">{{ $message }}</div>
                              @enderror
                             </div>
 -->

                              <div class="col-lg-12 col-md-12 col-sm-12 space photo-upload">
                                    <label>CV Upload </label><br>
                                    <div class="fileUpload2">
                                    <input type="file" accept=".xlsx,.xls,.doc,.docx,.ppt,.pptx,.txt,.pdf" style="border:none !important" class="upload" name="StudentCv">
                             @error('StudentCv')
                             <div class="validate_err" style="color:red">{{ $message }}</div>
                              @enderror

                                    </div> 
                           @if($userFulInfo->work_exp) 
                                <a href="{{url('public/uploads/student_cv/'.$userFulInfo->work_exp)}}" target="_blank"><span><i>Click to view</i></span></a>
                                  <input type="text" hidden class="upload" name="OldCVStudent" value="{{$userFulInfo->work_exp}}">
                            @endif
                            </div>



                                <div class="col-lg-12">
                                <div class="space clearfix">
                                <button type="submit" name="btnEdit" class="btn btn-primary" id="btnEdit" style="background-color:#3ea3a4!important;border-radius: 8px!important;">Update Profile</button>
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

   $('#appendDBdiv').append('<div id="removeRow'+j+'"><div class="col-lg-6 col-md-6 col-sm-4 space"><label>School </label><input type="text" minlength="2" maxlength="100" class="form-control" placeholder="Enter school name" name="school[]"></div><div class="col-lg-3 col-md-3 col-sm-4 space"><label>Grad Year </label><input type="number" minlength="2" name="gradeYera[]" maxlength="4" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" placeholder="Enter grad year"></div><div class="col-lg-3 col-md-3 col-sm-4 space"><label>Grad Month </label><select class="form-control" name="gradeMonth[]" id="grad_month"><option value="">Please select month</option><option value="Jan">Jan</option><option  value="Feb">Feb</option><option value="Mar">Mar</option><option value="Apr">Apr</option><option  value="May">May</option><option  value="Jun">Jun</option><option  value="jul">Jul</option><option  value="aug">Aug</option><option  value="sep">Sep</option><option value="oct">Oct</option><option value="nov">Nov</option><option value="dec">Dec</option></select></div><div class="col-lg-6 col-md-6 col-sm-6 space"><label>Degree </label><input type="text" minlength="2" class="form-control" maxlength="100" placeholder="" name="degree[]"></div><div class="col-lg-6 col-md-6 col-sm-6 space"><label class="fos">Field of Study </label><input type="text" minlength="2" maxlength="100" name="fieldOfStudy[]" class="form-control art" placeholder=""></div><div class="col-lg-6 text-left defaultRemove"><div class="add-field-of-study"><span><a href="javascript:void(0)" class="" onclick="removeAppRow('+j+')"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove this Degree</a></span></div></div><div class="col-lg-6 text-right"><div class="add-field-of-study add-field-of-study2"><h1 style="height:50px"></h1></div></div>');
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
  userImg:{
    filesize : 1000*1024,
  },
  StudentCv:{
  filesize : 1000*1024,
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
    } 
  },
  messages:{
  f_name:{
  required:'Please enter first name',
  
  },
  userImg:{
    filesize :'File size must be less than 1 MB',
  },
  StudentCv:{
  filesize :'File size must be less than 1 MB',
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
   
  } 
  }  
 });  


// $('#btnEdit').on('click',function(){
// alert();
// $('#editStuForm').validate({
//   rules:{
//   "school[]":"required",
//   "gradeYera[]":"required",
//   "degree[]":"required",
//   "fieldOfStudy[]":"required",
//   "gradeMonth[]":"required",
//   }
//   })

// })


</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>


@endsection
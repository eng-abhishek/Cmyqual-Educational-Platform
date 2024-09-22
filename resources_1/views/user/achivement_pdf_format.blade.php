<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png" sizes="16x16">
	<title> cMyQual | Achivement PDF</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<h1 style="text-align:center;">My Achievement</h1>
<table class="table bordered" border="1" align="center" style="padding-top:20px">
<tr><td>Title</td> : <td>{{$achivementInfo->achivementName}}</td></tr>	

<tr><td>Issue Date</td> : <td>{{$achivementInfo->Issued}}</td></tr>	

<tr><td>Expire Date</td> : <td> @if($achivementInfo->expires_date) {{$achivementInfo->expires_date}} @else N/A @endif</td></tr>	

<tr><td>Issue By</td> : <td>@if($achivementInfo->Issued_by) {{$achivementInfo->Issued_by}} @else N/A @endif</td></tr>	

<tr><td>Course Link</td> : <td>

@if($achivementInfo->link_to_course) {{$achivementInfo->link_to_course}} @else N/A @endif

</td></tr>	

<tr><td>Language</td> : <td>
@if($achivementInfo->language) {{$achivementInfo->language}} @else N/A @endif
</td></tr>	


<tr><td>How long did it take?</td> : <td>
@if($achivementInfo->duration) {{$achivementInfo->duration}} @else N/A @endif</td></tr>	

<tr><td>Credits </td> : <td>
@if($achivementInfo->credits_marks) {{$achivementInfo->credits_marks}} @else N/A @endif
</td></tr>	

<tr><td>Achievement Type </td> : <td>
@if($achivementInfo->achivementType)

@if($achivementInfo->achivementType=='edu')
Education
@else
Other
@endif

 @else N/A @endif
</td></tr>	
<tr><td>Certificate </td> : <td>
<?php 

if($achivementInfo->cr_image){

$str=$achivementInfo->cr_image;
$arr=explode('.',$str);

if($arr[1]=='jpg' || $arr[1]=='png' || $arr[1]=='svg' || $arr[1]=='gif' || $arr[1]=='jpeg'){
?>
<img style="width:120px;height:70px" src="{{asset('public/uploads/achivement/'.$achivementInfo->cr_image)}}">

<?php
}else{

$link= asset('public/uploads/achivement/'.$achivementInfo->cr_image);
}
?>
<a href="{{$link}}" target="_blank">{{$link}}</a>
 <?php
}else{ echo "N/A"; }
?> 
</td></tr>	

<tr><td>Notes </td> : <td>
@if($achivementInfo->notes) 
{{$achivementInfo->notes}}
 @else N/A @endif
</td></tr>	

</table>
</body>
</html>
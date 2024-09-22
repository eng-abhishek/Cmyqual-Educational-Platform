<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png" sizes="16x16">
	<title> cMyQual | CPD Log PDF</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<h1 style="text-align:center;">My CPD LOG</h1>
<table class="table bordered" border="1" align="center" style="padding-top:20px">

<tr><td>Date</td> : <td>{{date('d-m-Y',strtotime($cpdLogsInfo->date))}}</td></tr>

<tr><td>Title</td> : <td>@if($cpdLogsInfo->title){{$cpdLogsInfo->title}} @else N/A @endif</td></tr>	

<tr><td>Provider</td> : <td>@if($cpdLogsInfo->providers){{$cpdLogsInfo->providers}} @else N/A @endif</td></tr>	

<tr><td>Standards</td> : <td>@if($cpdLogsInfo->stander){{$cpdLogsInfo->stander}} @else N/A @endif</td></tr>	

<tr><td>Hours</td> : <td>@if($cpdLogsInfo->hours){{$cpdLogsInfo->hours}} @else N/A @endif</td></tr>

<tr><td>Notes</td> : <td>@if($cpdLogsInfo->notes){{$cpdLogsInfo->notes}} @else N/A @endif</td></tr>

<tr><td>Summary</td> : <td>@if($cpdLogsInfo->summary){{$cpdLogsInfo->summary}} @else N/A @endif</td></tr>

<tr><td>Tag</td> : <td>@if($cpdLogsInfo->tags){{$cpdLogsInfo->tags}} @else N/A @endif</td></tr>	
</table>
</body>
</html>
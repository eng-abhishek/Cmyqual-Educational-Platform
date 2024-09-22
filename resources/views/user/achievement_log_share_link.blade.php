<!DOCTYPE html>
<html lang="en">
<head>
  <title>cMyQual | Share Profile</title>
  <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png" sizes="16x16">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    h1{font-size: 25px;}
    body
    {
    background-image: url(https://cmyqual.co.uk/assets/images/supercharge-bg.png);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    }
.container
{
    background-color: #fff;
    box-shadow: 0 0.5rem 2rem rgb(0 0 0 / 18%);
    padding: 10px 40px 10px 40px;
}
.table thead th  {
    vertical-align: bottom;
    border-bottom: 1px solid rgb(0 0 0 / 33%);
}
.table-bordered td, .table-bordered th
{
    border: 1px solid rgb(0 0 0 / 33%);
}
.table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 1px;
}
img{width: 13%;}
</style>
<body>
@if($achivementInfo[0]->id)  
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="{{url()}}" target="_blank"><img src="https://cmyqual.co.uk/assets/images/cmyqual-logo-header.png" alt=""></a>
        </div>
        <div class="col-lg-12">
            <h1 class="text-center">Achievement</h1>
        </div>
        <div class="col-lg-12 pt-3">
          @foreach($achivementInfo as $infoval)
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Title</th>
                    <td>@if($infoval->achivementName) {{$infoval->achivementName}} @else N/A @endif</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Issue Date</th>
                    <td>@if($infoval->Issued) {{$infoval->Issued}} @else N/A  @endif </td>
                  </tr>
                  <tr>
                    <th>Expire Date</th>
                    <td>@if($infoval->expires_date) {{$infoval->expires_date}} @else N/A @endif</td>
                  </tr>
                </tbody>
                <thead>
                    <tr>
                      <th>Issue By</th>
                      <td>@if($infoval->Issued_by) <a href="{{$infoval->Issued_by}}" target="_blank">{{$infoval->Issued_by}}</a> @else N/A @endif</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>Course Link</th>
                      <td>@if($infoval->link_to_course) <a href="{{$infoval->link_to_course}}" target="_blank">{{$infoval->link_to_course}}</a> @else N/A @endif</td>
                    </tr>
                    <tr>
                      <th>Language</th>
                      <td>@if($infoval->language) {{$infoval->language}} @else N/A @endif</td>
                    </tr>
                   <tr>
                      <th>How long did it take?</th>
                      <td>@if($infoval->duration) {{$infoval->duration}} @else N/A @endif</td>
                   </tr> 

                   <tr>
                      <th>Credits </th>
                      <td>@if($infoval->credits_marks) {{$infoval->credits_marks}} @else N/A @endif</td>
                   </tr> 

                    <tr>
                      <th>Achievement Type</th>
                      <td>
@if($infoval->achivementType)

@if($infoval->achivementType=='edu')
Educational
@else
Other
@endif
 @else N/A @endif

                      </td>
                   </tr> 

                   <tr>
                      <th>Certificate</th>
                      <td>
<?php 
if($infoval->cr_image){
$str=$infoval->cr_image;
$arr=explode('.',$str);

if($arr[1]=='jpg' || $arr[1]=='png' || $arr[1]=='svg' || $arr[1]=='gif' || $arr[1]=='jpeg'){
?>
<img style="width:50px;height:50px" src="{{asset('public/uploads/achivement/'.$infoval->cr_image)}}">

<?php
}else{

$link= asset('public/uploads/achivement/'.$infoval->cr_image);
}
?>
<a href="{{$link}}" target="_blank">{{$link}}</a>
 <?php
}else{ echo "N/A"; }
?> 

                      </td>
                   </tr>

                   <tr>
                      <th>Notes</th>
                      <td>@if($infoval->notes) {{$infoval->notes}} @else N/A @endif</td>
                   </tr>  
                  </tbody>
              </table>
@endforeach
        </div>
    </div>
</div>
@else
@endif

@if($LOGInfo[0]->id)
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">CPD Logs</h1>
        </div>
        <div class="col-lg-12 pt-3">
                @foreach($LOGInfo as $logInfo)
            <table class="table table-bordered">
                <thead>
                  <tr>


                    <th>Date</th>
                    <td>@if($logInfo->date) {{date('d-m-Y',strtotime($logInfo->date))}} @else N/A @endif</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Title</th>
                    <td>@if($logInfo->title) {{$logInfo->title}} @else N/A @endif</td>
                  </tr>
                  <tr>
                    <th>Provider</th>
                    <td>@if($logInfo->providers) {{$logInfo->providers}} @else N/A @endif </td>
                  </tr>
                  <tr>
                    
                    <th>Standards</th>
                    <td>@if($logInfo->stander) {{$logInfo->stander}} @else N/A @endif</td>
                  </tr>
                </tbody>
                <thead>
                    <tr>
                      <th>Hours</th>
                      <td>@if($logInfo->hours) {{$logInfo->hours}} @else N/A @endif</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>Notes</th>
                      <td>@if($logInfo->notes) {{$logInfo->notes}} @else N/A @endif</td>
                    </tr>
                    <tr>
                      <th>Summary</th>
                      <td>@if($logInfo->summary) {{$logInfo->summary}} @else N/A @endif</td>
                    </tr>
                    <tr>
                      
                      <th>Tag</th>
                      <td>@if($logInfo->tags) {{$logInfo->tags}} @else N/A @endif</td>
                    </tr>
                  </tbody>
              </table>
              @endforeach
        </div>
    </div>
</div>
@else
@endif
</body>
</html>
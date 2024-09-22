    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
    <script src="{{asset('assets/js/all.js')}}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js'></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" class="__web-inspector-hide-shortcut__"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
function approvedEmail(){
$('#emailVerifyModal').modal('show');
}  
</script>
   
<!-- Modal -->
  <!-- Modal -->
  <div class="modal fade" id="emailVerifyModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content text-center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <img src="images/invite.jpg" alt="">
          <h4 class="modal-title text-center">Spread the word and get a free career consultation</h4>
          <p class="text-center">Invite a friend of colleague to CMyQual and you both get a coaching session with our own career experts.</p>
        </div>
        <div class="modal-body">
        <div class="space text-center">
        <form method="post" action="{{url('verifyEmail')}}">    
        <input type="text" name="otp" placeholder="please enter verification code" style="height: 30px;
    border-radius: 0;
    box-shadow: none;
    background-color: #fff;
    border: 1px solid rgb(62 163 164 / 55%);
    padding: 0 10px;">  
        @csrf<br>
        <but ton type="submit" name="btnsendmail" value="Invite" style="background: #1D9B75!important;
    padding: 3px 70px;
    text-transform: capitalize;
    font-family: 'Lato' ,sans-serif!important;
    border: none;
    color: #fff;
    margin-top: 10px;">Invite</button>
        <!--<a href="#" class="btn btn-primary" type="button" style="cursor:pointer;"></a>-->
        </form>
        </div>
        <div class="modal-list">

        </div>
        </div>
      </div>
    </div>
  </div>

@php
    $id = Auth::user()->id;
    $userInfo =  \App\Models\User::find($id);
    $user_data =  \App\Models\Student::where('user_id', $userInfo->id)->first();
@endphp

@if($user_data->profile_update_popup_status=='0')
<!-- onLoad Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="margin: 16% auto;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Please Complete Your Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <button type="button" class="btn btn-default now-left" data-dismiss="modal">Now</button>
      <a href="{{url('destroy-complete-profile-popup-session')}}"><button type="button" class="btn btn-default not-now-right">Not Now</button></a>
      </div>
     
    </div>
  </div>
</div>
<!-- onLoad Modal -->
@else
@endif


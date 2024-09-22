<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use App\Models\Student;
use App\Models\User;
use App\Models\Student_skill;
use App\Models\Shared_list;
use App\Models\Quotes;
use App\Models\Achivement;
use App\Models\Cpdlog;
use App\Models\Goals_category;
use App\Models\Activities;
use App\Models\Student_ethnicity;
use App\Models\Student_goal;
use App\Models\Student_activities;
use App\Models\Country;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Validator;
use Hash;
use Auth;
use DB;
use App;
use Mail;


error_reporting(1);
class UserController extends Controller
{

 public function login_post(Request $request)
    {

        $validator = Validator::make($request->all(),[

            'email' => 'required|email|max:60|min:3',
            'password' => 'required|min:8|max:16'
        ]);

        if($validator->fails()){
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        $credentials = $request->only('email','password');


        $presents = User::where('email', '=', $request->email)->first();
        if(!$presents->provider_id)
        {
            if(Auth::attempt($credentials))
            {
                if(Auth::user()->role_id == 2)
                {
                $id = Auth::user()->id;
                $now = Carbon::now();
                $user = DB::table('users')
                  ->where('id', $id)
                  ->update(['is_login' => 1, 'login_at' => $now]);

                $login_data = DB::table('login_data')->insert(
                    ['user_id' => $id, 'login_date' => $now]
                );  
                  
                return redirect()->route('user-profile');
                }
                else
                {
                    Session::flush();
                    Auth::logout();
                    return redirect()->route('user-login')->withError('You are not authorised to access this page.');
                }
            }
            else
            {
                return redirect()->route('user-login')->withError('You have entered invalid credentials');
            }
        }
        else
        {
            $provider = $presents->provider;
            return redirect()->route('user-login')->with('failure','This Email is registered with '.$provider.'. Please login with '.$provider.".");
        }        
    }

    public function signup(){
    $data['country']=Country::all();    
    return view('user.student_signin',$data);
    }

    public function login(){
    return view('user.login');
    }

    public function userprofile(){
    // by shashank
    $id=Auth::user()->id; 

    $getInfoStudent=Student::where('user_id',$id)->orderBy('id','DESC')->get(); 
    $array=Quotes::all()->toArray();
    $k=array_rand($array);
    $data['quotes'] =$array[$k];
    $data['userInfo']=$getInfoStudent[0];
    $studentId=$getInfoStudent[0]->id;

    $allStuGoal=DB::table('student_activities')->select('*')->join('student_goals','student_goals.id','=','student_activities.goal_id')->get()->count();

   $allStuGoal=Student_activities::where('student_id',$studentId)->get()->count();

   $allCmpStuGoal=Student_activities::where('student_id',$studentId)->where('status','Completed')->get()->count();
   
   if($allCmpStuGoal>0){ 

    $goalPrecentage=floor(($allCmpStuGoal/$allStuGoal)*100);

    if($goalPrecentage>0){
    $data['goalPrecentage']=$goalPrecentage;
    }else{
    $data['goalPrecentage']=0;
    }
   }else{ 
    $data['goalPrecentage']=0;
   }

    $data['achivementInfo']=Achivement::orderBy('id','DESC')->where('student_id',$getInfoStudent[0]->id)->take(3)->get();

    $data['sharedListInfo']=Shared_list::where('student_id',$getInfoStudent[0]->id)->orderBy('id','DESC')->take(3)->get();

    $data['logInfo']=Cpdlog::where('student_id',$getInfoStudent[0]->id)->orderBy('id','DESC')->take(3)->get();

    $data['totalCount']=count($data['achivementInfo']);

    $data['levelOne']=Achivement::where('student_id',$getInfoStudent[0]->id)->where('achivementLavel',1)->get(['achivementLavel','achivementName','achivementType']);

    $data['levelTwo']=Achivement::where('student_id',$getInfoStudent[0]->id)->where('achivementLavel',2)->get(['achivementLavel','achivementName','achivementType']);

    $data['levelThree']=Achivement::where('student_id',$getInfoStudent[0]->id)->where('achivementLavel',3)->get(['achivementLavel','achivementName','achivementType']);

    $data['levelFour']=Achivement::where('student_id',$getInfoStudent[0]->id)->where('achivementLavel',4)->get(['achivementLavel','achivementName','achivementType']);

    $data['levelFive']=Achivement::where('student_id',$getInfoStudent[0]->id)->where('achivementLavel',5)->get(['achivementLavel','achivementName','achivementType']);

    $data['levelSix']=Achivement::where('student_id',$getInfoStudent[0]->id)->where('achivementLavel',6)->get(['achivementLavel','achivementName','achivementType']);

    return view('user.my-profile',$data);
    }

    public function user_goal(){
    $array=Quotes::all()->toArray();
    $k=array_rand($array);
    $data['quots'] =$array[$k];
    $data['goals']=Goals_category::all();


    $authId=Auth::user()->id;
    $studentId=Student::where('user_id',$authId)->first()->id;

    $data['goalOfStudent']=Student_goal::where('student_id',$studentId)->get()->toArray();

    $goalId=$data['goalOfStudent'][0]->id;
    


    foreach ($data['goalOfStudent'] as $key => $goalValue){

    $allCmpTask=Student_activities::where('goal_id',$goalValue['id'])->where('status','Completed')->count();
     
    $allTask=Student_activities::where('goal_id',$goalValue['id'])->count();
   
    if($allCmpTask==$allTask){
    $status=1;
    }else{
    $status=0; 
    }
    $data['stu_goal'][]=$goalValue;
    $data['stu_goal'][$key]['status']=$status;

    }
    
    $allStuGoal=DB::table('student_activities')->select('*')->join('student_goals','student_goals.id','=','student_activities.goal_id')->get()->count();

   $allStuGoal=Student_activities::where('student_id',$studentId)->get()->count();

   $allCmpStuGoal=Student_activities::where('student_id',$studentId)->where('status','Completed')->get()->count();
   
   if($allCmpStuGoal>0){

    $goalPrecentage=floor(($allCmpStuGoal/$allStuGoal)*100);

    if($goalPrecentage>0){
    $data['goalPrecentage']=$goalPrecentage;
    }else{
    $data['goalPrecentage']=0;
    }
   }else{ 
    $data['goalPrecentage']=0;
   } 
    return view('user.goal',$data);
    }

    public function  getUserGoalactivity(Request $req){

    $activity=Activities::where('category_id',$req->id)->get();
    $output='';
    $output.='<select name="activity[]" class="multipleChosenforethy" multiple="true">';
    foreach($activity as $activityData){
    $output.='<option value="'.$activityData->id.'">'.$activityData->activity_name.'</option>';
    }
    $output.='</select>';
    return $output;
    }

    public function user_shared(){
    $id=Auth::user()->id;
    $frUserInfo=User::find($id);
    $getInfoStudent=Student::where('user_id',$frUserInfo->id)->orderBy('id','DESC')->get();
    $studentId=$getInfoStudent[0]->id;


    $data['achivementInfo']=DB::table('achivements')->where('student_id',$studentId)->orderBy('id','DESC')->get();
    $data['logInfo']=DB::table('cpd_logs')->where('student_id',$studentId)->orderBy('id','DESC')->get();
    $data['listShareInfo']=Shared_list::where('student_id',$studentId)->get();

    return view('user.shared',$data);
    }

    public function user_cpd_log(){
    $id=Auth::user()->id;
    $userInfo=User::find($id);
    $userFulInfo=DB::table('students')->where('user_id',$userInfo->id)->get();
    $cpdLogInfo=DB::table('cpd_logs')->where('student_id',$userFulInfo[0]->id)->get();  
   $chart=array();


 $uid=Auth::User()->id;
 $usID=Student::where('user_id',$uid)->first();
 $uId=$usID->id;

 $sql="select MONTHNAME(date) as month,sum(hours) as logId from cpd_logs where month(date)=month(now())-1 and student_id=".$uId." ";
$sql2=DB::select($sql);



$sql3['chart']['val'][]=$sql2[0]->logId>0 ? number_format($sql2[0]->logId):0;
$sql3['chart']['mon'][]=$sql2[0]->month;

return view('user.cpd-log',['cpdLogInfo'=>$cpdLogInfo,'chartData'=>$sql3]);
    }


function get_one_month_log(Request $req){
 $uid=Auth::User()->id;
 $usID=Student::where('user_id',$uid)->first();
 $uId=$usID->id;

 $sql="select MONTHNAME(date) as month,sum(hours) as logId from cpd_logs where month(date)=month(now())-1 and student_id=".$uId." ";
$sql2=DB::select($sql);

$sql3['chart']['val'][]=$sql2[0]->logId>0 ? number_format($sql2[0]->logId):0;
$sql3['chart']['mon'][]=$sql2[0]->month;

return $sql3;
}

function get_two_month_log(Request $req){
 $uid=Auth::User()->id;
 $usID=Student::where('user_id',$uid)->first();
 $uId=$usID->id;

 $sql="select MONTHNAME(date) as month,sum(hours) as logId from cpd_logs where month(date)=month(now())-3 and student_id=".$uId." ";
$sql2=DB::select($sql);

$sql3['chart']['val'][]=$sql2[0]->logId>0 ? number_format($sql2[0]->logId):0;
$sql3['chart']['mon'][]=$sql2[0]->month;
return $sql3;
}

function get_six_month_log(Request $req){
 $uid=Auth::User()->id;
 $usID=Student::where('user_id',$uid)->first();
 $uId=$usID->id;

 $sql="select MONTHNAME(date) as month,sum(hours) as logId from cpd_logs where month(date)=month(now())-6 and student_id=".$uId." ";
$sql2=DB::select($sql);

$sql3['chart']['val'][]=$sql2[0]->logId>0 ? number_format($sql2[0]->logId):0;
$sql3['chart']['mon'][]=$sql2[0]->month;

return $sql3;
}


    public function user_achivement(){
    $id=Auth::user()->id;
    $frUserInfo=User::find($id);
    $getInfoStudent=Student::where('user_id',$frUserInfo->id)->orderBy('id','DESC')->get();

    $userInfo=User::find($id);
    $userFulInfo=DB::table('students')->where('user_id',$userInfo->id)->get();

    $data['achivementInfo']=DB::table('achivements')->where('student_id',$userFulInfo[0]->id)->get();
    
    $data['toalUserLevelAchivement']=DB::table('achivements')->where('student_id',$userFulInfo[0]->id)->get()->count();

    $data['totalCount']=count($data['achivementInfo']);

    $data['levelOne']=Achivement::where('student_id',$getInfoStudent[0]->id)->where('achivementLavel',1)->get(['achivementLavel','achivementName','achivementType']);

    $data['levelTwo']=Achivement::where('student_id',$getInfoStudent[0]->id)->where('achivementLavel',2)->get(['achivementLavel','achivementName','achivementType']);

    $data['levelThree']=Achivement::where('student_id',$getInfoStudent[0]->id)->where('achivementLavel',3)->get(['achivementLavel','achivementName','achivementType']);

    $data['levelFour']=Achivement::where('student_id',$getInfoStudent[0]->id)->where('achivementLavel',4)->get(['achivementLavel','achivementName','achivementType']);

    $data['levelFive']=Achivement::where('student_id',$getInfoStudent[0]->id)->where('achivementLavel',5)->get(['achivementLavel','achivementName','achivementType']);

    $data['levelSix']=Achivement::where('student_id',$getInfoStudent[0]->id)->where('achivementLavel',6)->get(['achivementLavel','achivementName','achivementType']);

    return view('user.achievement',$data);
    }
   
    public function edit_profile(){
    $id=Auth::user()->id;
    $userInfo=User::find($id);
    $userFulInfo=DB::table('students')->where('user_id',$userInfo->id)->get();
    
    $name=explode(',',$userFulInfo[0]->name);
    
    $fname=$name[0];
    $lname=$name[1];  

    $skill=Student_skill::where('student_id',$userFulInfo[0]->id)->get();
    $ethnicity=Student_ethnicity::where('student_id',$userFulInfo[0]->id)->get();
    $country=Country::all();    
    $eduDetail=DB::table('edu_details_students')->where('student_id',$userFulInfo[0]->id)->get();
    return view('user.my-profile-edit',['country'=>$country,'fname'=>$fname,'lname'=>$lname,'email'=>$userInfo->email,'userFulInfo'=>$userFulInfo[0],'edu_details'=>$eduDetail,'total_edu_data'=>count($eduDetail),'skill'=>$skill,'ethnicity'=>$ethnicity]);    


    }

        public function add_student(Request $req){

        if(session()->get('otpSignUP')==$req->otp){
     
        $user_f_name=session()->get('user_f_name');
        $user_l_name=session()->get('user_l_name');
        $mail_name=$user_f_name.' '.$user_l_name;  
        $email=session()->get('user_email');
        $pwd=session()->get('user_pwd');

        $add_user=new User;
        $add_user->name=$user_f_name.','.$user_l_name;  
        $add_user->email=$email;
        $add_user->role_id=2;
        $add_user->deleted = 0;
        $add_user->provider = "Cmyqual Credentials";
        $add_user->password=Hash::make($pwd);
        $add_user->save();

        $add_student=new Student;

        if($req->term_condition_status=='on'){
        $add_student->term_condition_status=1;
        }
       
        $add_student->name=$user_f_name.','.$user_l_name;  
        $add_student->user_id=$add_user->id;
        
        $jsonVal=array('email'=>$email,'password'=>$pwd);
        if($add_student->save()){

        if(Auth::attempt($jsonVal))
        {
        if(Auth::user()->role_id == 2)
        {
        $id = Auth::user()->id;
        $now = Carbon::now();
        $user = DB::table('users')
        ->where('id', $id)
        ->update(['is_login' => 1, 'login_at' => $now]);

        session()->forget('user_f_name');
        session()->forget('user_l_name');

        session()->forget('user_email');
        session()->forget('user_pwd');
        
        //session()->put('cmp_profile_popup','cmp_profile');  

        // $data=array('name'=>$mail_name);
        
        // $mail = Mail::send('user.mail.user_signup_mail_new', $data, function($message) use ($email) {
        // $message->to($email)->subject('cMyQual Registration');
        // $message->from('shashankchaudhary.quantumit@gmail.com','cMyQual');
        // });

        return 800;
        //return redirect()->route('user-profile');
        }
        else
        {
        Session::flush();
        Auth::logout();
        //return redirect()->route('user-login')->withError('You are not authorised to access this page.');
        }
        }
        else
        {
     //   return redirect()->route('user-login')->withError('You have entered invalid credentials');
        }
        Session::flash('success_msg','You are successfully registered');
        }else{
        Session::flash('success_msg','Something went wrong');
        }
        return 200;
        }else{
        return 401;  
        }
        return redirect(url('user-login'));
        }

        function desCmpProSession(){
        $id=Auth::user()->id;
        $getInfoStudent=Student::where('user_id',$id)->first();
        $getInfoStudent->profile_update_popup_status=1;
        $getInfoStudent->update();
        return redirect(url('user-profile'));
        }

        function verifySendEmailOTP(Request $req){

        session()->put('user_f_name',$req->f_name);
        session()->put('user_l_name',$req->l_name);
        session()->put('user_email',$req->email);
        session()->put('user_pwd',$req->pwd);

        $otp=random_int(100000,999999);   
        $email = $req->input('email');
        $data = array('otp'=>$otp);
        session()->put('otpSignUP',$otp);
        return $otp;

        // $mail = Mail::send('user.mail.user_signup_email_verification_new', $data, function($message) use ($email) {
        // $message->to($email)->subject('cMyQual OTP');
        // $message->from('shashankchaudhary.quantumit@gmail.com','cMyQual');
        // });
    }

     function verifyEmail($vrifyemail){
     $email=User::get('email')->toArray();
     $useremail=array();
     foreach ($email as $emaildata){
     $useremail[]=md5($emaildata['email']);
     }
     if(in_array($vrifyemail,$useremail)){
     $userInfo=DB::select('SELECT * FROM `users` WHERE md5(`email`)="'.$vrifyemail.'"');
     
     User::where('id',$userInfo[0]->id)->update(['email_verified_status'=>'1']);
     }
     return redirect(url('user-profile'));
    }



public function checkStudentEmail(Request $request){

 $email=$request->input('email');
 $userEmail=User::where('email',$email)->where('role_id',2)->get();
 if($userEmail[0]->id){
  echo"false";
 }else{
  echo"true";
}
}


public function update_studentDetails(Request $request){

$validator=Validator::make($request->all(),[
'StudentCv' => 'mimes:xlsx,xls,doc,docx,ppt,pptx,txt,pdf|max:1024',
'userImg' => 'mimes:jpg,jpeg,png,svg|max:512',
'contact_no' => 'required|string|min:10|max:15',
'f_name'=>'required|min:2|max:30',
]);

  if($validator->fails()){
       return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

$name=$request->f_name.','.$request->l_name;
$id=Auth::user()->id;
$frUserInfo=User::find($id);

$getInfoStudent=Student::where('user_id',$frUserInfo->id)->get();
$infoStudent=Student::find($getInfoStudent[0]->id);

$frUserInfo->name=$name;
$frUserInfo->email=$request->input('personal_email');
$frUserInfo->update();

 
 Session::forget('cmp_profile_popup');


Student_skill::where('student_id',$getInfoStudent[0]->id)->delete();

Student_ethnicity::where('student_id',$getInfoStudent[0]->id)->delete();

for($i=0;$i<count($request->input('skill'));$i++){
 $myskill=new Student_skill;
 $myskill->student_id=$getInfoStudent[0]->id;
 $myskill->skill=$request->input('skill')[$i];
 $myskill->save();
 }

for($j=0;$j<count($request->input('ethnicity'));$j++){
 $myethnicity=new Student_ethnicity;
 $myethnicity->student_id=$getInfoStudent[0]->id;
 $myethnicity->ethnicity=$request->input('ethnicity')[$j];
 $myethnicity->save();
 }

$infoStudent->name=$name;

$infoStudent->contact_no=$request->contact_no;

$infoStudent->dob=date('Y-m-d',strtotime($request->input('dob')));
$infoStudent->country=$request->input('country');

$infoStudent->current_employer=$request->input('current_employe');

$infoStudent->linkedin_handle=$request->input('linkedin');

$infoStudent->blog_url=$request->input('blog');
$infoStudent->portfolio_url=$request->input('portfolio');
$infoStudent->biography=$request->input('biography');


$infoStudent->my_occupation=$request->input('occupation');

$infoStudent->gender=$request->input('gender');

$infoStudent->profile_update_status=1;
$infoStudent->profile_update_popup_status=1;

$infoStudent->interest=$request->input('interest');

$infoStudent->additional_email=$request->input('other_email');


    if($request->file('userImg')){
         $request->validate([
        'userImg' => 'image|mimes:jpeg,png,jpg,gif,svg',
                         ]); 
       
        $imageName = time().'.'.$request->userImg->extension();
        $infoStudent->photos=$imageName;
        $request->userImg->move(public_path('uploads/user'), $imageName);
        }else{  
        $infoStudent->photos=$request->input('oldUserImg');
           }

    if($request->file('StudentCv')){
         $request->validate([
        'StudentCv' => 'mimes:jpeg,png,jpg,pdf,docx',
                         ]); 
       
        $CVName = time().'.'.$request->StudentCv->extension();
        $infoStudent->work_exp=$CVName;
        $request->StudentCv->move(public_path('uploads/student_cv'), $CVName);
       }else{
        $infoStudent->work_exp=$request->input('OldCVStudent');
           }

$infoStudent->save();

$studentId=$getInfoStudent[0]->id;

if($request->degreeStatus){

DB::delete('delete from edu_details_students where student_id ="'.$studentId.'"');

}else{

DB::delete('delete from edu_details_students where student_id ="'.$studentId.'"');

for($i=0;$i<count($request->input('school'));$i++){
$eduData=array(
   'student_id'=>$studentId,
   'school'=>$request->input('school')[$i],
   'grad_year'=>$request->input('gradeYera')[$i],
   'grad_month'=>$request->input('gradeMonth')[$i],
   'degree'=>$request->input('degree')[$i],   
   'field_of_study'=>$request->input('fieldOfStudy')[$i],     
             );
 DB::table('edu_details_students')->insert($eduData);

 }
 }
  

    Session::flash('profile_update_msg','Your profile has updated successfully.');


if($getInfoStudent[0]->profile_update_status=='1'){

}else{
        // $email = $request->input('personal_email');
        // $data = array('link'=>"https://cmyqual.co.uk/");
        
        // $mail = Mail::send('user.mail.complete_profile_mail_new', $data, function($message) use ($email) {
        // $message->to($email)->subject('cMyQual complete Profile');
        // $message->from('shashankchaudhary.quantumit@gmail.com','cMyQual');
        // });
}

    return redirect(url('user-profile'));
}


    public function add_user_achivement(Request $req){

     $validator=Validator::make($req->all(),[
     'acchiCertificate' =>'mimes:jpeg,png,xlsx,xls,doc,docx,ppt,pptx,txt,pdf',
     ]);

     if($validator->fails()){
       return redirect()->back()->withErrors($validator)->withInput();
     }

    $id=Auth::user()->id;
    $frUserInfo=User::find($id);
    $getInfoStudent=Student::where('user_id',$frUserInfo->id)->get();
    $infoStudent=Student::find($getInfoStudent[0]->id);
    $studentId=$getInfoStudent[0]->id;

       if($req->acchiCertificate){
        $imageName = time().'.'.$req->acchiCertificate->extension();
        $req->acchiCertificate->move(public_path('uploads/achivement'),$imageName);
        }elseif($req->OldImg){
        $imageName=$req->OldImg;
        }else{

        }

if(isset($req->expires)){
$expDate=$req->input('expDate');
}else{
$expDate='';
}

if(isset($req->achivePosition)){
$achLevel=$req->input('achivementName');
}else{
$achLevel=0;
}

if(isset($req->credits_status)){
$crMarks=$req->input('cratitsInp');
}else{
$crMarks=0;
}


    $achiveData=array(
   'student_id'=>$studentId,
   'achivementName'=>$req->input('NameOfAchivement'),
   'Issued'=>$req->input('start-date'),
   'Issued_by'=>$req->input('issuedBy'),
   'duration'=>$req->input('duration'),   
   'language'=>$req->input('language'), 
   'notes'=>$req->input('notes'),
   'link_to_course'=>$req->input('course_url'),
   'expires_date'=>$expDate,
   'credits_marks'=>$crMarks,
   'achivementLavel'=>$achLevel,
   'achivementType'=>$req->input('achType'),
   'cr_image'=>$imageName,
             );
// echo"<pre>";
// print_r($achiveData);
// die;
    if($req->editId){

    $achivementTblDB=DB::table('achivements')->where('id',$req->editId)->update($achiveData);    
    $id=$req->editId;
    }else{
    
    $achivementTblDB=DB::table('achivements')->insertGetId($achiveData);
    $id=$achivementTblDB;
    } 

    $this->generateAchivementPDF($id);


    if($req->input('redirectId')=='1'){
    return redirect(url('user-profile'));
    }else{
    return redirect(url('user/achievement'));
    }
    
    }

    public function add_cpd_log(Request $req){

    $id=Auth::user()->id;
    $frUserInfo=User::find($id);
    $getInfoStudent=Student::where('user_id',$frUserInfo->id)->get();
    $infoStudent=Student::find($getInfoStudent[0]->id);
    $studentId=$getInfoStudent[0]->id;
  
   $logData=array(
   'student_id'=>$studentId,
   'date'=> date('Y-m-d', strtotime($req->input('date'))),
   'title'=>$req->input('title'),
   'providers'=>$req->input('provider'),
   'stander'=>$req->input('standard'),  
   'hours'=>$req->input('hours'), 
   'summary'=>$req->input('summary'),
   'notes'=>$req->input('notes'),
   'tags'=>$req->input('tags'),
             );
  
    if($req->editId){
        
    Cpdlog::where('id',$req->editId)->update($logData);    
        
    }else{
    $logId=DB::table('cpd_logs')->insertGetId($logData);
    }
        
    $this->generateCPDLogPDF($logId);  
    return redirect(url('user/cpd-log'));
    }


    public function generateAchivementPDF($achiveId){
    $achivementDBtbl=DB::table('achivements')
    ->where('id',$achiveId)
    ->get();
    $data['achivementInfo']=$achivementDBtbl[0];
    $pdfname = 'achivement'.$achiveId.'.pdf';
    $pdf=App::make('dompdf.wrapper');
    $achivementDBtblUpdate=DB::table('achivements')
    ->where('id',$achiveId)
    ->update(['pdfFile'=>$pdfname]);

    return $pdf->loadView('user.achivement_pdf_format',$data)->save(public_path().'/achivementPDF/'.$pdfname)->stream('hkd.pdf');
    }

    public function generateCPDLogPDF($logId){
    $cpdLogsDBtbl=DB::table('cpd_logs')
    ->where('id',$logId)
    ->get();
    $data['cpdLogsInfo']=$cpdLogsDBtbl[0];
    $pdfname = 'cpdLog'.$logId.'.pdf';
    $pdf=App::make('dompdf.wrapper');
    $cpdLogDBtblUpdate=DB::table('cpd_logs')
    ->where('id',$logId)
    ->update(['pdfFile'=>$pdfname]);

    return $pdf->loadView('user.cpd_log_pdf_format',$data)->save(public_path().'/cpdLogPDF/'.$pdfname)->stream('hkd.pdf');
    }

    public function add_shared_list(Request $req){

    $id=Auth::user()->id;    
    $frUserInfo=User::find($id);
    $getInfoStudent=Student::where('user_id',$frUserInfo->id)->get();
    $addShared=new Shared_list;
    $addShared->student_id=$getInfoStudent[0]->id;
    $addShared->sender_email=$req->email;
    $addShared->receiver_email=implode(',',$req->receiverInvitationMail);
    $addShared->achievement_id=implode(',',$req->achivementList);
    $addShared->log_id=implode(',',$req->cpdList);
    $addShared->save();
    return redirect(url('user/shared'));
    }

    public function checkAchivementLevel(Request $req){ 
    $id=Auth::user()->id;
    $frUserInfo=User::find($id);
    $getInfoStudent=Student::where('user_id',$frUserInfo->id)->get();    
    $achivementType=Achivement::where(['student_id'=>$getInfoStudent[0]->id,'achivementLavel'=>$req->input('level')])->get();
    if($achivementType[0]->id){
    return "1";
    }else{
    return "0";
    }
    }
    
    public function checkStudentMobileNo(Request $request){
    // return $request->input();
    
    $contact=$request->input('contact_no');
    $userContactNo=Student::where('contact_no',$contact)->get();
    if($userContactNo[0]->id){
    echo"false";
    }else{
    echo"true";
    }
    }

    public function add_student_goal(Request $req){
    $i= 0;
    $j=(int)$i;
    $id=Auth::user()->id;
    $frUserInfo=User::find($id);
    $getInfoStudent=Student::where('user_id',$frUserInfo->id)->get();

    if($req->editId){
    $stuGoal=Student_goal::find($req->editId);
    $catId=$req->editGoalCatId;
    }else{
    $catId=$req->goal_cat_id; 
    $stuGoal=new Student_goal;
    
    }

    $goatStud=Student_goal::where('student_id',$getInfoStudent[0]->id)->get();
    $goalId=$goatStud[0]->id;
    $stuGoal->student_id=$getInfoStudent[0]->id;
    $stuGoal->goal_name=$req->goalname;
    $stuGoal->category_id=$catId;
    $stuGoal->save();
    $goalOfStuId=$stuGoal->id; 
   
    Student_activities::where('goal_id',$goalOfStuId)->delete();

    while ($j<count($req->activity)){
    $goalstudent=new Student_activities;
    $goalstudent->goal_id=$goalOfStuId; 
    $goalstudent->category_id=$req->goal_cat_id;
    $goalstudent->activity_id=$req->activity[$j];
    $goalstudent->student_id=$getInfoStudent[0]->id;
    $goalstudent->status='Incomplete';
    $j++; 
    $goalstudent->save();
    }

    return redirect(url('user/goal')); 
    }


    public function getUserGoalEditData(Request $req){
    $goalStu=array();
    $gaolInfo=Student_goal::where('id',$req->input('id'))->get();
    $activityInfo=Student_activities::where('goal_id',$req->input('id'))->where('status','Incomplete')->get('activity_id');
    

    $activityOfStu=array();
    foreach ($activityInfo as $key => $activityInfoData){
     $activityOfStu[]=$activityInfoData['activity_id'];
    }
     
    $allActivity=Activities::where('category_id',$gaolInfo[0]->category_id)->get()->toArray();

    $getAllCmpActvity=Student_activities::where('goal_id',$req->input('id'))->where('status','Completed')->pluck('activity_id')->toArray();


    $output='';
    $output.='<select name="activity[]" onchange="activity_check(this.value)" class="form-control js-example-tokenizer" id="getActivity" multiple="true"required><option disabled value="">Select Goal Activities</option>';

    foreach($allActivity as $allActivitydata){
     if(in_array($allActivitydata['id'],$activityOfStu)){

     $output.='<option selected id="id'.$allActivitydata['id'].'" value="'.$allActivitydata['id'].'">'.$allActivitydata['activity_name'].'</option>';
     
     }else{
      
     if(in_array($allActivitydata['id'],$getAllCmpActvity)){

 $output.='<option id="id'.$allActivitydata['id'].'" disabled value="'.$allActivitydata['id'].'">'.$allActivitydata['activity_name'].'</option>';


     }else{

 $output.='<option id="id'.$allActivitydata['id'].'" value="'.$allActivitydata['id'].'">'.$allActivitydata['activity_name'].'</option>';
     } 
     }
     }
     $output.='</select>';

    $goalStu[0]=$gaolInfo[0];
    $goalStu[1]=$output;
    return $goalStu; 
    }

    public function getUserActivityUpdateData(Request $req){

    $gaolInfo=Student_goal::where('id',$req->input('id'))->get();
    $gaol_cat_id=$gaolInfo[0]->category_id;
    $gaolCatInfo=Goals_category::where('id',$gaol_cat_id)->get()->first();

    $gaol_name=$gaolInfo[0]->goal_name;
    $actionName=$gaolCatInfo->category_name;

    $activityInfo=DB::table('student_activities')->select('student_activities.id as id','activities.activity_name','student_activities.activity_id')->join('activities','student_activities.activity_id','=','activities.id')->where('student_activities.goal_id',$req->input('id'))->get();

    $completeActivityInfo=Student_activities::where('goal_id',$req->input('id'))->where('status','Completed')->get();


    $activityOfStu=array();
    foreach ($completeActivityInfo as $key => $completeActivityInfoData){
     $activityOfStu[]=$completeActivityInfoData->activity_id;
    }
    
     $output1='';
     $onclick='';
     $gaolId=$req->input('id');
     $alloutput=array();

    $output1.='<input type="text" hidden name="goalId" id="goalId" value="'.$gaolId.'" >';
    foreach ($activityInfo as $key => $activityInfoData){

      $id="goalStatus".$activityInfoData->id;
    
      $output1.='<div class="changestatusModalCheckbox">';

    
      if(in_array($activityInfoData->activity_id,$activityOfStu)){
       $output1.='<input type="checkbox" id="'.$id.'"  value="'.$activityInfoData->id.'" checked="checked" name="activity[]"><label>'.$activityInfoData->activity_name.'</label>';
      }else{

      $output1.='<input type="checkbox" id="'.$id.'"  value="'.$activityInfoData->id.'" name="activity[]"><label>'.$activityInfoData->activity_name.'</label>';

      }
    
    $output1.='</div>';
    }
    $alloutput[0]=$output1;
    $alloutput[1]=$gaol_name;
    $alloutput[2]=$actionName;
    return $alloutput;
    }

   public function changeUserActivityUpdateData(Request $req){ 

    $id=Auth::user()->id;
    $frUserInfo=User::find($id);
    $getInfoStudent=Student::where('user_id',$frUserInfo->id)->get();

    $allstudentAct=Student_activities::where('goal_id',$req->input('goalId'))->get()->toArray();

   foreach ($allstudentAct as $allstudentActData) {
   if(in_array($allstudentActData['id'],$req->activity)){
    
    $array=array(
          'status'=>'Completed'
                );
    Student_activities::where('id',$allstudentActData['id'])->update($array);  
    }else{
   
        $array=array(
          'status'=>'Incomplete'
                );
    Student_activities::where('id',$allstudentActData['id'])->update($array);
    }
    }
    return redirect(url('user/goal'));
    }


    public function remove_edu_student_row(Request $req){
    DB::table('edu_details_students')->where('id',$req->id)->delete();
    }

    public function getEditLogData(Request $req){
    $cpdLog=Cpdlog::find($req->input('id'));

    //return $cpdLog->toArray();

    $date=date("d-m-y",strtotime($cpdLog->date));
    $arr[0]=$cpdLog->toArray();
    $arr[1]=$date; 
    return $arr;
    }
    
    public function removeUserLogData(Request $req){
    Cpdlog::where('id',$req->input('id'))->delete();
    }
    

    
    public function sendInvite(Request $req){

        $email = $req->input('email');
        $data = array('link'=>"https://cmyqual.co.uk/");
        
        $mail = Mail::send('user.mail.invitation_mail_new', $data, function($message) use ($email) {
        $message->to($email)->subject('cMyQual Invitation');
        $message->from('shashankchaudhary.quantumit@gmail.com','cMyQual');
        });

        return redirect(url('user-profile'));

       
    }
    
    public function emailConfirmOTP(Request $req){
        
    $userEmail=User::where('email',$req->input('email'))->where('role_id',2)->get();
    if($userEmail[0]->id){
        $otp=mt_rand(1000,9999);
        session()->put('reset_pass_otp',$otp);
        session()->put('reset_pass_email',$req->input('email'));
        
        // $email = $req->input('email');
        // $data = array('otp'=>$otp);
        
        // $mail = Mail::send('user.mail.user_signup_email_verification_new', $data, function($message) use ($email) {
        // $message->to($email)->subject('cMyQual OTP');
        // $message->from('shashankchaudhary.quantumit@gmail.com','cMyQual');
        // });

    return 200;
    }else{
    return 505; 
    }
    }
    
    
    public function verifyResetPassOTP(Request $req){

    if($req->reset_password_otp==session()->get('reset_pass_otp')){        
    return 202;
    }else{
    return 404;    
    }   
    }
    
    public function userChangePassword(Request $req){
    
    $userEmail=User::where('email',session()->get('reset_pass_email'))->get();
    $userPass=User::find($userEmail[0]->id);
    $userPass->password=Hash::make($req->newPassword);
    $userPass->save(); 
    session()->forget('reset_pass_email');
    session()->forget('reset_pass_otp');
    return 606;
    }

   public function editStudentAchivement(Request $req){
    
    $achiveInfo=[];
    $achiveInfo[0]=Achivement::find($req->input('id'))->toArray();
    $achiveInfo[1]=$achiveInfo[0]['Issued'];
    $achiveInfo[2]=$achiveInfo[0]['expires_date'];
    return $achiveInfo;
   }

    public function checkUserAchivementLevel(Request $req){
    $id=Auth::user()->id;
    $frUserInfo=User::find($id);
    $getInfoStudent=Student::where('user_id',$frUserInfo->id)->get();

    $achivementLevel=Achivement::where('student_id',$getInfoStudent[0]->id)->where('achivementLavel',$req->input('level'))->first();

    if($achivementLevel){
    return 202;
    }else{
    return 101;
    }
    }


    public function user_logout()
    {
        $id = Auth::user()->id;    
        $user = User::find($id);
        $user->is_login = 0;

        $t1 = Carbon::parse($user->login_at);
        $t2 = Carbon::now();
        $diff = $t2->diff($t1);
        $time[] = $diff->h;
        $time[] = $diff->i;
        $time[] = $diff->s;
        
        if(is_null($user->total_login_hours)){
            $t=implode(',', $time);
            $t4 = $t;
        }else{
            $current_total = $user->total_login_hours;
            $current = explode(',', $current_total);
            $len = count($current);
            for ($i=0; $i < $len; $i++) { 
                $current[$i] = $current[$i] + $time[$i];
            }
            $t4 = implode(',', $current); 
        }

        $user->total_login_hours = $t4;
        $user->save();

        Auth::logout();
        Session::flush();
        return redirect()->route('user-login');
    }
}
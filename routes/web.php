<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('clear-cache', function() {
    Artisan::call('cache:clear');
    dd("Cache Clear All");
});

Route::get('config-cache', function() {
    Artisan::call('config:cache');
    dd("Cache Clear All");
});

Route::get('/', [App\Http\Controllers\WebController::class, 'index']);
Route::get('employer-signin', [App\Http\Controllers\WebController::class, 'employer_registration'])->name('employer-signin');
Route::post('employer-signin-post', [App\Http\Controllers\WebController::class, 'employer_registration_post'])->name('employer-signin-post');
Route::get('l-p-signin', [App\Http\Controllers\WebController::class, 'l_p_registration'])->name('l-p-signin');
Route::post('l-p-signin-post', [App\Http\Controllers\WebController::class, 'l_p_registration_post'])->name('l-p-signin-post');
Route::get('associations', [App\Http\Controllers\WebController::class, 'association'])->name('associations');
Route::get('employers', [App\Http\Controllers\WebController::class, 'employer'])->name('employers');
Route::get('learning-institutions', [App\Http\Controllers\WebController::class, 'learning_institutions'])->name('learning-institutions');
Route::get('online-learning-partners', [App\Http\Controllers\WebController::class, 'online_learning_partner'])->name('online-learning-partners');

Route::get('learners', [App\Http\Controllers\WebController::class, 'learner'])->name('learners');

Route::get('privacy-policy', [App\Http\Controllers\WebController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('terms-conditions', [App\Http\Controllers\WebController::class, 'terms_conditions'])->name('terms-conditions');
Route::get('about-us', [App\Http\Controllers\WebController::class, 'about_us'])->name('about-us');
Route::get('sustainability', [App\Http\Controllers\WebController::class, 'sustainability'])->name('sustainability');

Route::get('blog', [App\Http\Controllers\WebController::class, 'blog'])->name('blog');
Route::get('blog-details', [App\Http\Controllers\WebController::class, 'blog_details'])->name('blog-details');
Route::get('get-started', [App\Http\Controllers\WebController::class, 'getStarted'])->name('get-started');

Route::post('check-student-email',  [App\Http\Controllers\UserController::class, 'checkStudentEmail'])->name('check-student-email');
Route::post('check-student-contactno',  [App\Http\Controllers\UserController::class, 'checkStudentMobileNo'])->name('check-student-contactno');

// Route::get('user/login',  [App\Http\Controllers\UserController::class, 'login'])->name('user-login');

Route::get('user-signup',[App\Http\Controllers\UserController::class, 'signup'])->name('user-signup');
Route::post('add-student',[App\Http\Controllers\UserController::class, 'add_student'])->name('add-student');
Route::get('super-forget', [App\Http\Controllers\SuperController::class, 'forget_view'])->name('super-forget');
Route::post('super-forget-post', [App\Http\Controllers\SuperController::class, 'forget_pass'])->name('super-forget-post');

Route::group(['middleware' => ['superLoginAuth']],function(){
	Route::get('super/login',  [App\Http\Controllers\SuperController::class, 'login'])->name('super-login');
	Route::post('super-login-post',  [App\Http\Controllers\SuperController::class, 'login_post'])->name('super-login-post');
});

Route::group(['middleware' => ['superBasicAuth']],function(){
	
	Route::get('super-dashboard',  [App\Http\Controllers\SuperController::class, 'dashboard'])->name('super-dashboard');
	Route::get('notifications',  [App\Http\Controllers\SuperController::class, 'notification'])->name('notifications'); 
	Route::get('super-profile',  [App\Http\Controllers\SuperController::class, 'edit_profile'])->name('super-profile');
	Route::post('super-profile-post/{id}',  [App\Http\Controllers\SuperController::class, 'profile_post'])->name('super-profile-post');
	Route::get('super/logout',  [App\Http\Controllers\SuperController::class, 'logout'])->name('super-logout');

	
	Route::get('employer-list',  [App\Http\Controllers\SuperController::class, 'employer_list'])->name('employer-list');
	Route::get('employer-page-manage',  [App\Http\Controllers\SuperController::class, 'employer_page_manage'])->name('employer-page-manage');
	Route::get('employer-page-manage-two',  [App\Http\Controllers\SuperController::class, 'employer_page_manage_two'])->name('employer-page-manage-two');
	Route::get('employer-page-manage-three',  [App\Http\Controllers\SuperController::class, 'employer_page_manage_three'])->name('employer-page-manage-three');
	Route::get('employer-page-manage-four',  [App\Http\Controllers\SuperController::class, 'employer_page_manage_four'])->name('employer-page-manage-four');
	Route::get('add-employer', [App\Http\Controllers\SuperController::class, 'add_employer'])->name('add-employer');
	Route::post('add-employer-post', [App\Http\Controllers\SuperController::class, 'add_employer_post'])->name('add-employer-post');
	Route::get('del-employer/{id}', [App\Http\Controllers\SuperController::class, 'delete_employer'])->name('del-employer');
	Route::get('edit-employer/{id}', [App\Http\Controllers\SuperController::class, 'Employer_edit'])->name('edit-employer');
	Route::get('edit-employer-page-section-one/{id}', [App\Http\Controllers\SuperController::class, 'Edit_employer_page_section_one'])->name('edit-employer-page-section-one');
	Route::get('edit-employer-page-section-two/{id}', [App\Http\Controllers\SuperController::class, 'Edit_employer_page_section_two'])->name('edit-employer-page-section-two');
	Route::get('edit-employer-page-section-three/{id}', [App\Http\Controllers\SuperController::class, 'Edit_employer_page_section_three'])->name('edit-employer-page-section-three');
	Route::get('edit-employer-page-section-four/{id}', [App\Http\Controllers\SuperController::class, 'Edit_employer_page_section_four'])->name('edit-employer-page-section-four');
	Route::post('update-employer/{id}', [App\Http\Controllers\SuperController::class, 'Employer_edit_post'])->name('update-employer');
	Route::post('update-employer-section-one/{id}', [App\Http\Controllers\SuperController::class, 'Edit_employer_page_section_one_edit_post'])->name('update-employer-section-one');
	Route::post('update-employer-section-two/{id}', [App\Http\Controllers\SuperController::class, 'Edit_employer_page_section_two_edit_post'])->name('update-employer-section-two');
	Route::post('update-employer-section-three/{id}', [App\Http\Controllers\SuperController::class, 'Edit_employer_page_section_three_edit_post'])->name('update-employer-section-three');
	Route::post('update-employer-section-four/{id}', [App\Http\Controllers\SuperController::class, 'Edit_employer_page_section_four_edit_post'])->name('update-employer-section-four');


	Route::get('learning-partners',  [App\Http\Controllers\SuperController::class, 'learning_partners_list'])->name('learning-partners');
	Route::get('del-lp/{id}', [App\Http\Controllers\SuperController::class, 'delete_lp'])->name('del-lp');
	Route::get('add-lp', [App\Http\Controllers\SuperController::class, 'add_lp'])->name('add-lp');
	Route::post('add-lp-post', [App\Http\Controllers\SuperController::class, 'add_lp_post'])->name('add-lp-post');
	Route::get('edit-lp/{id}', [App\Http\Controllers\SuperController::class, 'lp_edit'])->name('edit-lp');
	Route::post('update-lp/{id}', [App\Http\Controllers\SuperController::class, 'lp_edit_post'])->name('update-lp');


	Route::get('life-long-learner-list',  [App\Http\Controllers\SuperController::class, 'learner_list'])->name('life-long-learner-list');
	Route::get('learner-profile/{id}', [App\Http\Controllers\SuperController::class, 'learner_profile'])->name('learner-profile');
	Route::get('learner-profile-edit/{id}', [App\Http\Controllers\SuperController::class, 'learner_profile_edit'])->name('learner-profile-edit');
	Route::post('learner-profile-edit-post', [App\Http\Controllers\SuperController::class, 'learner_profile_edit_post'])->name('learner-profile-edit-post');
	Route::post('learner-profile-edit-about', [App\Http\Controllers\SuperController::class, 'learner_profile_edit_about'])->name('learner-profile-edit-about');
	Route::post('learner-profile-edit-work', [App\Http\Controllers\SuperController::class, 'learner_profile_edit_work'])->name('learner-profile-edit-work');
	Route::post('learner-profile-edit-edu', [App\Http\Controllers\SuperController::class, 'learner_profile_edit_edu'])->name('learner-profile-edit-edu');
	Route::post('learner-profile-delete-edu',[App\Http\Controllers\SuperController::class, 'learner_profile_delete_edu'])->name('learner-profile-delete-edu');
	
	Route::get('learner-add', [App\Http\Controllers\SuperController::class, 'learner_add'])->name('learner-add');
	Route::post('learner-add-post',[App\Http\Controllers\SuperController::class, 'learner_add_post'])->name('learner-add-post');
	Route::get('del-learner/{id}', [App\Http\Controllers\SuperController::class, 'delete_learner'])->name('del-learner');
	Route::post('learner-profile-add-post', [App\Http\Controllers\SuperController::class, 'learner_profile_add_post'])->name('learner-profile-add-post');
	Route::post('learner-profile-add-about', [App\Http\Controllers\SuperController::class, 'learner_profile_add_about'])->name('learner-profile-add-about');
	Route::post('learner-profile-add-work', [App\Http\Controllers\SuperController::class, 'learner_profile_add_work'])->name('learner-profile-add-work');
	Route::post('learner-profile-add-edu', [App\Http\Controllers\SuperController::class, 'learner_profile_add_edu'])->name('learner-profile-add-edu');

	Route::get('learner-achievements-view/{id}', [App\Http\Controllers\SuperController::class, 'learner_achievements_view'])->name('learner-achievements-view');
	Route::get('learner-achievements-detail/{id}', [App\Http\Controllers\SuperController::class, 'learner_achievements_details'])->name('learner-achievements-detail');
	Route::get('learner-achievements-add/{id}', [App\Http\Controllers\SuperController::class, 'learner_achievements_add'])->name('learner-achievements-add');
	Route::post('learner-achievements-add-post', [App\Http\Controllers\SuperController::class, 'learner_achievements_add_post'])->name('learner-achievements-add-post');
	Route::get('learner-achievements-edit/{id}', [App\Http\Controllers\SuperController::class, 'learner_achievements_edit'])->name('learner-achievements-edit');
	Route::post('learner-achievements-edit-post', [App\Http\Controllers\SuperController::class, 'learner_achievements_edit_post'])->name('learner-achievements-edit-post');
	Route::get('learner-achievements-delete/{id}', [App\Http\Controllers\SuperController::class, 'learner_achievements_delete'])->name('learner-achievements-delete');
	Route::get('learner-achievements-approve/{id}', [App\Http\Controllers\SuperController::class, 'learner_achievements_approve'])->name('learner-achievements-approve');
	Route::get('learner-achievements-rej/{id}', [App\Http\Controllers\SuperController::class, 'learner_achievements_reject'])->name('learner-achievements-rej'); 

	Route::get('learner-goals-view/{id}', [App\Http\Controllers\SuperController::class, 'learner_goals_view'])->name('learner-goals-view');
	Route::get('learner-goals-add/{id}', [App\Http\Controllers\SuperController::class, 'learner_goals_add'])->name('learner-goals-add');
	Route::post('learner-goals-add-post', [App\Http\Controllers\SuperController::class, 'learner_goals_add_post'])->name('learner-goals-add-post');
	Route::get('learner-goals-details/{id}', [App\Http\Controllers\SuperController::class, 'learner_goals_details'])->name('learner-goals-details');
	Route::get('learner-goals-delete/{id}', [App\Http\Controllers\SuperController::class, 'learner_goals_delete'])->name('learner-goals-delete');
	Route::get('learner-goals-edit/{id}', [App\Http\Controllers\SuperController::class, 'learner_goals_edit'])->name('learner-goals-edit');
	Route::post('learner-goals-edit-post', [App\Http\Controllers\SuperController::class, 'learner_goals_edit_post'])->name('learner-goals-edit-post');
	Route::get('learner-activity-remove/{id}', [App\Http\Controllers\SuperController::class, 'learner_activity_remove'])->name('learner-activity-remove');
	Route::get('learner-activity-complete/{id}', [App\Http\Controllers\SuperController::class, 'learner_activity_complete'])->name('learner-activity-complete');
	Route::get('learner-activity-incomplete/{id}', [App\Http\Controllers\SuperController::class, 'learner_activity_incomplete'])->name('learner-activity-incomplete');


	Route::get('learner-cpdlogs-view/{id}', [App\Http\Controllers\SuperController::class, 'learner_cpdlogs_view'])->name('learner-cpdlogs-view');
	Route::get('learner-cpdlogs-view-expanded/{id}', [App\Http\Controllers\SuperController::class, 'learner_cpdlogs_view_expanded'])->name('learner-cpdlogs-view-expanded');
	Route::get('learner-sharedlist-view/{id}', [App\Http\Controllers\SuperController::class, 'learner_sharedlist_view'])->name('learner-sharedlist-view');
	// Route::get('learner-achievements/{id}', [App\Http\Controllers\SuperController::class, 'learner_achievements'])->name('learner-achievements');
	Route::post('shared-remark-update', [App\Http\Controllers\SuperController::class, 'shared_reamrk_update'])->name('shared-remark-update');
	
	
	Route::get('quotes-list', [App\Http\Controllers\SuperController::class, 'quotes_list'])->name('quotes-list');
	Route::get('quote-add', [App\Http\Controllers\SuperController::class, 'quotes_add'])->name('quote-add');
	Route::post('quote-add-post', [App\Http\Controllers\SuperController::class, 'quotes_add_post'])->name('quote-add-post');
	Route::get('quote-edit/{id}', [App\Http\Controllers\SuperController::class, 'quotes_edit'])->name('quote-edit');
	Route::post('quote-edit-post/{id}', [App\Http\Controllers\SuperController::class, 'quotes_edit_post'])->name('quote-edit-post');
	Route::get('quote-del/{id}', [App\Http\Controllers\SuperController::class, 'quotes_delete'])->name('quote-del');
	
	Route::get('goals-category-list', [App\Http\Controllers\SuperController::class, 'goals_category_list'])->name('goals-category-list');
	Route::get('goals-category-add', [App\Http\Controllers\SuperController::class, 'goals_category_add'])->name('goals-category-add');
	Route::post('goals-category-add-post', [App\Http\Controllers\SuperController::class, 'goals_category_add_post'])->name('goals-category-add-post');
	Route::get('goals-category-edit/{id}', [App\Http\Controllers\SuperController::class, 'goals_category_edit'])->name('goals-category-edit');
	Route::post('goals-category-edit-post/{id}', [App\Http\Controllers\SuperController::class, 'goals_category_edit_post'])->name('goals-category-edit-post');
	Route::get('goals-category-del/{id}', [App\Http\Controllers\SuperController::class, 'goals_category_delete'])->name('goals-category-del');

	Route::get('activity-list', [App\Http\Controllers\SuperController::class, 'activity_list'])->name('activity-list');
	Route::get('activity-add', [App\Http\Controllers\SuperController::class, 'activity_add'])->name('activity-add');
	Route::post('activity-add-post', [App\Http\Controllers\SuperController::class, 'activity_add_post'])->name('activity-add-post');
	Route::get('activity-edit/{id}', [App\Http\Controllers\SuperController::class, 'activity_edit'])->name('activity-edit');
	Route::post('activity-edit-post/{id}', [App\Http\Controllers\SuperController::class, 'activity_edit_post'])->name('activity-edit-post');
	Route::get('activity-del/{id}', [App\Http\Controllers\SuperController::class, 'activity_delete'])->name('activity-del');
	Route::post('get-activities', [App\Http\Controllers\SuperController::class, 'get_activities'])->name('get-activities');

});

Route::get('user-login-google',[App\Http\Auth\LoginController::class, 'redirectToGoogle'])->name('user-login-google');

Route::get('user-login-google-callback',[App\Http\Auth\LoginController::class, 'handleGoogleCallback'])->name('user-login-google-callback');
Route::get('user-login-facebook',[App\Http\Auth\LoginController::class, 'redirectToFacebook'])->name('user-login-facebook');
Route::get('user-login-facebook-callback',[App\Http\Auth\LoginController::class, 'handleFacebookCallback'])->name('user-login-facebook-callback'); 
Route::get('user-login-linkedin',[App\Http\Auth\LoginController::class, 'redirectToLinkedin'])->name('user-login-linkedin'); 
Route::get('user-login-linkedin-callback',[App\Http\Auth\LoginController::class, 'handleLinkedinCallback'])->name('user-login-linkedin-callback');

Route::group(['middleware' => ['userLoginAuth']],function(){
Route::get('user-login',[App\Http\Controllers\UserController::class, 'login'])->name('user-login');
Route::post('check-user-login',[App\Http\Controllers\UserController::class, 'login_post'])->name('check-user-login');
Route::post('emailConfirmOTP',[App\Http\Controllers\UserController::class,'emailConfirmOTP'])->name('emailConfirmOTP');
Route::post('verifyResetPassOTP',[App\Http\Controllers\UserController::class,'verifyResetPassOTP'])->name('verifyResetPassOTP');
Route::post('userChangePassword',[App\Http\Controllers\UserController::class,'userChangePassword'])->name('userChangePassword');

Route::post('verify-send-email-otp',[App\Http\Controllers\UserController::class,'verifySendEmailOTP'])->name('verify-send-email-otp');

Route::post('user-signup-at-email-verification',[App\Http\Controllers\UserController::class,'add_student'])->name('user-signup-at-email-verification');

Route::get('email-verification',[App\Http\Controllers\UserController::class,'emailVerification'])->name('email-verification');

Route::post('resend-otp',[App\Http\Controllers\UserController::class,'resend_otp'])->name('resend-otp');

});


Route::group(['middleware' => ['userBasicAuth']],function(){
Route::get('user-profile',[App\Http\Controllers\UserController::class, 'userprofile'])->name('user-profile');
Route::get('user/logout',[App\Http\Controllers\UserController::class, 'user_logout'])->name('logout');
Route::get('user/education-details',[App\Http\Controllers\UserController::class, 'user_profile_education_details'])->name('education-details');
Route::get('user/goal',[App\Http\Controllers\UserController::class, 'user_goal'])->name('user-goal');
Route::get('user/shared',[App\Http\Controllers\UserController::class, 'user_shared'])->name('user-goal');
Route::get('user/cpd-log',[App\Http\Controllers\UserController::class, 'user_cpd_log'])->name('cpd-log');
Route::get('user/achievement',[App\Http\Controllers\UserController::class, 'user_achivement'])->name('achievement');
Route::get('user/edit-profile',[App\Http\Controllers\UserController::class, 'edit_profile'])->name('edit-profile');
Route::post('update-student-detail',[App\Http\Controllers\UserController::class,'update_studentDetails'])->name('update-student-detail');

Route::post('add-user-achivement',[App\Http\Controllers\UserController::class,'add_user_achivement'])->name('add-user-achivement');

Route::post('add-cpd-log',[App\Http\Controllers\UserController::class,'add_cpd_log'])->name('add-cpd-log');

Route::post('add-shared-list',[App\Http\Controllers\UserController::class,'add_shared_list'])->name('add-shared-list');

Route::post('check-achivement-level',[App\Http\Controllers\UserController::class,'checkAchivementLevel'])->name('check-achivement-level');

Route::post('add-student-goal',[App\Http\Controllers\UserController::class,'add_student_goal'])->name('add-student-goal');

Route::post('remove-edu-student-row',[App\Http\Controllers\UserController::class,'remove_edu_student_row'])->name('remove-edu-student-row');

Route::post('getEditLogData',[App\Http\Controllers\UserController::class,'getEditLogData'])->name('getEditLogData');

Route::post('removeUserLogData',[App\Http\Controllers\UserController::class,'removeUserLogData'])->name('removeUserLogData');

Route::post('sendInvite',[App\Http\Controllers\UserController::class,'sendInvite'])->name('sendInvite');


Route::post('editStudentAchivement',[App\Http\Controllers\UserController::class,'editStudentAchivement'])->name('editStudentAchivement');

Route::post('checkUserAchivementLevel',[App\Http\Controllers\UserController::class,'checkUserAchivementLevel'])->name('checkUserAchivementLevel');


Route::post('getUserGoalactivity',[App\Http\Controllers\UserController::class,'getUserGoalactivity'])->name('getUserGoalactivity');

Route::post('getUserGoalEditData',[App\Http\Controllers\UserController::class,'getUserGoalEditData'])->name('getUserGoalEditData');

Route::post('getUserActivityUpdateData',[App\Http\Controllers\UserController::class,'getUserActivityUpdateData'])->name('getUserActivityUpdateData');

Route::post('changeUserActivityUpdateData',[App\Http\Controllers\UserController::class,'changeUserActivityUpdateData'])->name('changeUserActivityUpdateData');

Route::get('destroy-complete-profile-popup-session',[App\Http\Controllers\UserController::class,'desCmpProSession'])->name('destroy-complete-profile-popup-session');


Route::post('get-one-month-log',[App\Http\Controllers\UserController::class,'get_one_month_log'])->name('get-one-month-log');

Route::post('get-two-month-log',[App\Http\Controllers\UserController::class,'get_two_month_log'])->name('get-two-month-log');

Route::post('get-six-month-log',[App\Http\Controllers\UserController::class,'get_six_month_log'])->name('get-six-month-log');

Route::post('remove-goal-from-user',[App\Http\Controllers\UserController::class,'removeGoalFromUser'])->name('remove-goal-from-user');

Route::post('remove-achievement-from-user',[App\Http\Controllers\UserController::class,'removeAchievementFromUser'])->name('remove-achievement-from-user');

Route::get('update_cpdlog_notification',[App\Http\Controllers\UserController::class,'update_cpdlog_notification'])->name('update_cpdlog_notification');

Route::get('update_goal_notification',[App\Http\Controllers\UserController::class,'update_goal_notification'])->name('update_goal_notification');

Route::get('update_achivement_notification',[App\Http\Controllers\UserController::class,'update_achivement_notification'])->name('update_achivement_notification');

Route::get('update_sharedlist_notification',[App\Http\Controllers\UserController::class,'update_sharedlist_notification'])->name('update_sharedlist_notification');

Route::get('update_profile_notification',[App\Http\Controllers\UserController::class,'update_profile_notification'])->name('update_profile_notification');

Route::get('download_pdf/{id}',[App\Http\Controllers\UserController::class,'download_pdf'])->name('download_pdf');

Route::get('download_pdf2/{id}',[App\Http\Controllers\UserController::class,'download_pdf2'])->name('download_pdf2');

Route::post('getCPDExcelData',[App\Http\Controllers\UserController::class,'getCPDExcelData'])->name('getCPDExcelData');

Route::post('getAchiveExcelData',[App\Http\Controllers\UserController::class,'getAchiveExcelData'])->name('getAchiveExcelData');

});

Route::get('email-view/{id}',[App\Http\Controllers\UserController::class,'get_achievement_log'])->name('email-view');



Route::group(['middleware' => ['employerLoginAuth']],function()
{
	Route::get('employer/login',[App\Http\Controllers\EmployerController::class, 'login'])->name('employer-login');
	Route::post('employer-login-post',[App\Http\Controllers\EmployerController::class, 'login_post'])->name('employer-login-post');
});

Route::group(['middleware' => ['employerBasicAuth']],function()
{
	Route::get('employer/profile',[App\Http\Controllers\EmployerController::class, 'dashboard'])->name('employer-profile');
   	Route::get('employer/logout',[App\Http\Controllers\EmployerController::class, 'logout'])->name('employer-logout');
});

Route::group(['middleware' => ['partnerLoginAuth']],function()
{
	Route::get('partner/login',[App\Http\Controllers\PartnerController::class, 'login'])->name('partner-login');
	Route::post('partner-login-post',[App\Http\Controllers\PartnerController::class, 'login_post'])->name('partner-login-post');
});

Route::group(['middleware' => ['partnerBasicAuth']],function()
{
	Route::get('partner/profile',[App\Http\Controllers\PartnerController::class, 'dashboard'])->name('partner-profile');
   	Route::get('partner/logout',[App\Http\Controllers\PartnerController::class, 'logout'])->name('employer-logout');
});	


            @php
              $user_check = \App\Models\User::find($stu_data->user_id);
              if(!empty($stu_data->photos) )
              {
                if(!empty($user_check->provider_id))
                {
                    if(strpos($stu_data->photos, "http") === 0)
                    {
                        $img = $stu_data->photos;  
                    }
                    else
                    {
                        $img = asset("public/uploads/user/".$stu_data->photos);  
                    }
                }
                else
                {
                  $img = asset("public/uploads/user/".$stu_data->photos);
                }
              }
              else
              {
                  $img = asset('assets/super-admin/user.jpg');
              }
              $ac = \App\Models\Achivement::where(['student_id' => $stu_data->id])->count();
              $go = \App\Models\Student_goal::where(['student_id' => $stu_data->id])->count();
              $cpd = \App\Models\Cpdlog::where(['student_id' => $stu_data->id])->count();
              $shl = \App\Models\Shared_list::where(['student_id' => $stu_data->id])->count();
            @endphp
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="{{$img}}" alt="User profile picture" style="width: 100px; height: 100px;">         
            </div>
            @php
                                       $n = explode(',', $stu_data->name);
                                               $len = count($n);
                                               $name = '';
                                               if($len > 0)
                                               {
                                                 for($i=0; $i<$len; $i++)
                                                 {
                                                    $name = $name." ".$n[$i]; 
                                                 }
                                               }
                                               else
                                               {
                                                 $name = $n[0];
                                               }
                                    @endphp
            <h3 class="profile-username text-center">{{$name ? $name : 'Not Found'}}</h3>
            <p class="text-muted text-center">Life Long Learner</p>
            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item"> <a class="active" href="{{route('learner-profile', $stu_data->user_id)}}"><b>Profile</b></a> </li>
              <li class="list-group-item"> <a class="" href="{{route('learner-achievements-view', $stu_data->id)}}"><b>Achievements</b></a> 
                                                @php
                                                $check2 = \App\Models\Achivement::where('student_id', $stu_data->id)->get();
                                                $count1 = 0;
                                                if(isset($check2))
                                                {
                                                  foreach($check2 as $check)
                                                  {
                                                    if($check->is_viewed == 0)
                                                    {
                                                      $count1++;
                                                    }
                                                  }
                                                }
                                                else
                                                {
                                                   $count1 = 0; 
                                                }
                                                if($count1 > 0)
                                                {
                                                 echo "<span class='badge badge-pill badge-warning text-black float-right' style='animation: .8s shake infinite alternate;'>".$count1." New Added</span>";
                                                }
                                                else
                                                {
                                                  echo "<a class='float-right'>".$ac."</a>";
                                                }
                                                @endphp 
                                                </li>
              
                                                @php
                                                $st_activity_count = \App\Models\Student_activities::where('student_id', $stu_data->id)->count();
                                                $st_completed_activity_count = \App\Models\Student_activities::where('student_id', $stu_data->id)->where('status', "Completed")->count();
                                                $st_completed = $st_completed_activity_count*100;
                                                if($st_completed == 0)
                                                {
                                                    $goal_percent = 0;
                                                }
                                                else{
                                                    $goal_percent = $st_completed/$st_activity_count;
                                                }
                                                if($goal_percent == 0)
                                                {
                                                    $goal_percent1 = 0;
                                                }
                                                else
                                                {
                                                    $goal_percent1 = round($goal_percent, 2);
                                                }
                                                @endphp
              <li class="list-group-item"> <a class="" href="{{route('learner-goals-view', $stu_data->id)}}"><b>Goals</b> <a class="float-right">@php
                                                $check3 = \App\Models\Student_goal::where('student_id', $stu_data->id)->get();
                                                $count2 = 0;
                                                if(isset($check3))
                                                {
                                                  foreach($check3 as $check33)
                                                  {
                                                    if($check33->is_viewed == 0)
                                                    {
                                                      $count2++;
                                                    }
                                                  }
                                                }
                                                else
                                                {
                                                   $count2 = 0; 
                                                }
                                                if($count2 > 0)
                                                {
                                                 echo "<span class='badge badge-pill badge-warning text-black float-right' style='animation: .8s shake infinite alternate;'>".$count2." New Added</span>";
                                                }
                                                else
                                                {
                                                  echo "<a class='float-right'>".$go."</a>";
                                                }
                                                @endphp </a><span class="text-primary">({{$goal_percent1}}%)</span> </li>
              
              <li class="list-group-item"> <a class="" href="{{route('learner-cpdlogs-view', $stu_data->id)}}"><b>Cpd Logs</b> <a class="float-right">@php
                                                $check4 = \App\Models\Cpdlog::where('student_id', $stu_data->id)->get();
                                                $count4 = 0;
                                                if(isset($check4))
                                                {
                                                  foreach($check4 as $check44)
                                                  {
                                                    if($check44->is_viewed == 0)
                                                    {
                                                      $count4++;
                                                    }
                                                  }
                                                }
                                                else
                                                {
                                                   $count4 = 0; 
                                                }
                                                if($count4 > 0)
                                                {
                                                 echo "<span class='badge badge-pill badge-warning text-black float-right' style='animation: .8s shake infinite alternate;'>".$count4." New Added</span>";
                                                }
                                                else
                                                {
                                                  echo "<a class='float-right'>".$cpd."</a>";
                                                }
                                                @endphp</a> </li>
              
              <li class="list-group-item"> <a class="" href="{{route('learner-sharedlist-view', $stu_data->id)}}"><b>Shared Lists</b> <a class="float-right">@php
                                                $check5 = \App\Models\Shared_list::where('student_id', $stu_data->id)->get();
                                                $count5 = 0;
                                                if(isset($check5))
                                                {
                                                  foreach($check5 as $check55)
                                                  {
                                                    if($check55->is_viewed == 0)
                                                    {
                                                      $count5++;
                                                    }
                                                  }
                                                }
                                                else
                                                {
                                                   $count5 = 0; 
                                                }
                                                if($count5 > 0)
                                                {
                                                 echo "<span class='badge badge-pill badge-warning text-black float-right' style='animation: .8s shake infinite alternate;'>".$count5." New Added</span>";
                                                }
                                                else
                                                {
                                                  echo "<a class='float-right'>".$shl."</a>";
                                                }
                                                @endphp</a> </li>
            </ul> 
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
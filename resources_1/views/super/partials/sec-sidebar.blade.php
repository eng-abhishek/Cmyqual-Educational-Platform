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
                                                @endphp </a> </li>
              
              <li class="list-group-item"> <a class="" href="{{route('learner-cpdlogs-view', $stu_data->id)}}"><b>Cpd Log</b> <a class="float-right">{{$cpd ? $cpd : '0'}}</a> </li>
              
              <li class="list-group-item"> <a class="" href="{{route('learner-sharedlist-view', $stu_data->id)}}"><b>Shared List</b> <a class="float-right">{{$shl ? $shl : '0'}}</a> </li>
            </ul> 
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
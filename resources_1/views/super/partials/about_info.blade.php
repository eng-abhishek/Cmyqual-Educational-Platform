                      @php
                      if(!empty($stu_data->biography))
                      { $bio = substr($stu_data->biography, 0, 100); }
                      else
                      { $bio = 'Not found'; }
                      $stu_ethnicity = \App\Models\Student_ethnicity::where('student_id', $stu_data->id)->get(); 
                      $skills = \App\Models\Student_skill::where('student_id', $stu_data->id)->get();
                      @endphp
                      <h4 class="text-primary">About</h4>
                      <h4 class="text-md text-primary"><i class="fas fa-atlas text-primary"></i>&nbsp;Bio</h4>
                      <p class="text-muted">{{$bio}}</p>
                      <br>
                      <div>
                        <h4 class="text-md text-primary"><i class="fas fa-envelope-square text-primary"></i>&nbsp;Additional Email
                          <p class="d-block text-muted">{{$stu_data->additional_email ? $stu_data->additional_email : 'Not Found'}}</p>
                        </h4>
                        <h4 class="text-md text-primary"><i class="fas fa-flag text-primary"></i>&nbsp;Ethnicity
                          @forelse($stu_ethnicity as $stu_eth)
                          <li><a class="btn-link text-secondary">{{$stu_eth->ethnicity ? $stu_eth->ethnicity : 'Not Found'}}</a></li>
                          @empty
                          <li><a class="btn-link text-secondary">{{'Not Found'}}</a></li>
                          @endforelse
                        </h4>
                        <h4 class="text-md text-primary mt-2"><i class="fas fa-venus-mars text-primary"></i>&nbsp;Gender
                          <p class="d-block text-muted">{{$stu_data->gender ? $stu_data->gender : 'Not Found'}}</p>
                        </h4>
                        <h4 class="text-md text-primary"><i class="fas fa-lightbulb text-primary"></i>&nbsp;Interests
                          <p class="d-block text-muted">{{$stu_data->interest ? $stu_data->interest : 'Not Found'}}</p>
                        </h4>
                        <h4 class="text-md text-primary"><i class="fas fa-briefcase text-primary"></i>&nbsp;Occupation
                          <p class="d-block text-muted">{{$stu_data->my_occupation ? $stu_data->my_occupation : 'Not Found'}}</p>
                        </h4> 
                      </div>
                      <h4 class="text-md text-primary"><i class="far fa-fw fa-star text-primary"></i>&nbsp;Skills
                          @forelse($skills as $key => $skill)
                            <li ><a class="btn-link text-secondary">{{$skill->skill}}</a></li>
                            @if($key > 5)
                              break;
                            @endif
                          @empty
                            <li ><a class="btn-link text-secondary">Not Found</a></li>
                          @endforelse
                      </h4>
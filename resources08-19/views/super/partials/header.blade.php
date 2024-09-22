  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" id="collps" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        <a class="nav-link" id="uncollps" data-widget="pushmenu" href="#" role="button" style="display: none;"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    @php
    $ach_notification = \App\Models\Achivement::where('is_viewed', '!=', 1)->count();
    $go_notification = \App\Models\Student_goal::where('is_viewed', '!=', 1)->count();
    $cp_notification = \App\Models\Cpdlog::where('is_viewed', '!=', 1)->count();
    $sh_notification = \App\Models\Shared_list::where('is_viewed', '!=', 1)->count();
    @endphp

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">{{$ach_notification+$go_notification+$cp_notification+$sh_notification}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Notifications</span>
          <div class="dropdown-divider"></div>

          <a href="{{route('notifications')}}" class="dropdown-item">
            <i class="fas fa-dot-circle mr-2"></i> {{$ach_notification}} New Achievements
          </a>

          <a href="{{route('notifications')}}" class="dropdown-item">
            <i class="fas fa-dot-circle mr-2"></i> {{$go_notification}} New Goals
          </a>
          
          <a href="{{route('notifications')}}" class="dropdown-item">
            <i class="fas fa-dot-circle mr-2"></i> {{$cp_notification}} New CPD logs
          </a>
          
          <a href="{{route('notifications')}}" class="dropdown-item">
            <i class="fas fa-dot-circle mr-2"></i> {{$sh_notification}} New Shared list
          </a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
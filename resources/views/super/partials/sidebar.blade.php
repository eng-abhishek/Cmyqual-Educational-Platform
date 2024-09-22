  <aside class="main-sidebar sidebar-primary elevation-4">
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img id="logo" src="{{asset('assets/images/cmyqual-logo-header.png')}}" alt="Logo" style="height: 50px; width: 160px; border-radius: 5px; margin-left: -18px;">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>
	  
	  
	  

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('super-dashboard')}}" class="nav-link text-success">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
		  
		  
		  
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link text-success">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Manage CMS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
			
              <li class="nav-item">
                <a href="{{route('employer-page-manage')}}" class="nav-link text-success">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Page Section 1</p>
                </a>
              </li>
			  
			  <li class="nav-item">
                <a href="{{route('employer-page-manage-two')}}" class="nav-link text-success">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Page Section 2</p>
                </a>
              </li>
			  
			  <li class="nav-item">
                <a href="{{route('employer-page-manage-three')}}" class="nav-link text-success">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Page Section 3</p>
                </a>
              </li>
			  
			   <li class="nav-item">
                <a href="{{route('employer-page-manage-four')}}" class="nav-link text-success">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Page Section 4</p>
                </a>
              </li>
			  
             
            </ul>
          </li>
		  
          <li class="nav-item">
            <a href="{{route('employer-list')}}" class="nav-link text-success">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
               Manage Employers
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('life-long-learner-list')}}" class="nav-link text-success">
              <i class="nav-icon fas fa-user"></i>
              <p>
              Manage Learners
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('learning-partners')}}" class="nav-link text-success">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Manage Partners
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('quotes-list')}}" class="nav-link text-success">
              <i class="nav-icon fas fa-quote-right"></i>
              <p>
                Manage Quotes
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{route('goals-category-list')}}" class="nav-link text-success">
              <i class="nav-icon fas fa-bullseye"></i>
              <p>
                Manage Goals Category
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('activity-list')}}" class="nav-link text-success">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Manage Activities
              </p>
            </a>
          </li>

         <!--  <li class="nav-item">
            <a href="" class="nav-link text-success">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Manage CMS
              </p>
            </a>
          </li>
 -->
          <li class="nav-item">
            <a href="{{route('super-profile')}}" class="nav-link text-success">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('super-logout')}}" class="nav-link text-success">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
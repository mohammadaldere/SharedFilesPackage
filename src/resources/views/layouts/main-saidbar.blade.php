
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      @include('component-pages.top-side-par')
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      @include('component-pages.top-header')
     
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
                <a href="{{route('admin-dashboard')}}" class="nav-link {{ request()->is('admin/dashboard') || request()->is('admin/dashboard/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
                </a>
          </li>
          <li class="nav-item">
              <a href="{{route('profile-info')}}" class="nav-link {{ request()->is('admin/personal-info') || request()->is('admin/personal-info/*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-id-card"></i>  
                <p>
                  Profile Info
                </p>
              </a>
          </li> 
          <li class="nav-item">
              <a href="{{route('website-info')}}" class="nav-link {{ request()->is('admin/website-info') || request()->is('admin/website-info/*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-info-circle"></i>
                <p>
                  Website  Info
                </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{route('user.index')}}" class="nav-link {{ request()->is('admin/module') || request()->is('admin/module/*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Users
                </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{route('role.index')}}" class="nav-link {{ request()->is('admin/video') || request()->is('admin/video/*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-th"></i>
                <p>
                  Roles
                </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{URL('admin/module')}}" class="nav-link {{ request()->is('admin/module') || request()->is('admin/module/*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-th"></i>
                <p>
                  Module
                </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{URL('admin/video')}}" class="nav-link {{ request()->is('admin/video') || request()->is('admin/video/*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-th"></i>
                <p>
                  Video
                </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="#" onclick="getElementById('logout-form').submit()" class="nav-link">
                  <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
                  <p>Logout</p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="post">
                  @csrf 
              </form>
          </li>
        </ul>
    </div>
    <!-- /.sidebar -->
  </aside>

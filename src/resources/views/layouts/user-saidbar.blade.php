
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
              <a href="{{route('profile-info-user')}}" class="nav-link {{ request()->is('admin/personal-info') || request()->is('admin/personal-info/*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-id-card"></i>  
                <p>
                  Profile Info
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

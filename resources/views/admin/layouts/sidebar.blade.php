<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{url('backend/dist/img/Unico-Global-Logo.png')}}" alt="Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Unico Global</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{url('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Company name</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
            <li class="nav-item">
            <a href="#" class="nav-link active">
               <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('post.index')}}" class="nav-link">
                <i class="fas fa-blog" style="margin-left: 12px;padding-left:12px;"></i>
                <p style="padding-left:10px">Posts</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('category.index')}}" class="nav-link">
                 <i class="fas fa-check-double" style="margin-left: 12px;padding-left:12px;"></i>
                <p style="padding-left:10px">Categories</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="{{route('tag.index')}}" class="nav-link">
                <i class="fas fa-tags" style="margin-left: 12px;padding-left:12px;"></i>
                <p style="padding-left:10px">Tag</p>
              </a>
            </li> 
            <li class="nav-item">
            <a href="{{route('user.index')}}" class="nav-link">
              <i class="fas fa-user" style="margin-left: 12px;padding-left:12px;"></i>
                <p style="padding-left:10px">Users</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="{{route('role.index')}}" class="nav-link">
                <i class="fas fa-boxes" style="margin-left: 12px;padding-left:12px;"></i>

                  <p style="padding-left:10px">Roles</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="{{route('permission.index')}}" class="nav-link">
                  <i class="fas fa-boxes" style="margin-left: 12px;padding-left:12px;"></i>
                    <p style="padding-left:10px">Permission</p>
                  </a>
                </li> 
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

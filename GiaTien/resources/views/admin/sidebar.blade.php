
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="{{asset('/template/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/template/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Danh muc
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{asset('/admin/menu/add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Them Danh Muc</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('/admin/menu/list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sach danh muc</p>
                </a>
              </li>
            </ul>
          </li>      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->

      <!-- /.sidebar-product -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-store-alt"></i>
              <p>
                S???n ph???m
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{asset('/admin/products/add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Th??m s???n ph???m</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('/admin/products/list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh s??ch s???n ph???m</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Slider
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{asset('/admin/sliders/add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Them Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('/admin/sliders/list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh s??ch Slider</p>
                </a>
              </li>
            </ul>
          </li>  
          
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                ????n H??ng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{asset('/admin/customers')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh S??ch ????n H??ng</p>
                </a>
              </li>
              
            </ul>
          </li> 
        </ul>
      </nav>

    </div>
    <!-- /.sidebar -->
  </aside>

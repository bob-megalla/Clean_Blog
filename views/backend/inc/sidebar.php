<?php $_SESSION['username'] ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo
        <a href="index3.html" class="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="Logo" width="50px" height="50px" class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a> -->

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
      <div class="info">

        <a href="#" class="d-block"><?= strtoupper($settings['site_name']) ?> ||
          <?= strtoupper($_SESSION['username']) ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
        <!-- START DASHBOARD -->
        <li class="nav-item">
          <a href="<?= '?admin=dashboard'?>" class="nav-link <?= activeAdminLink($active_id,0); ?>">
     
            <i class="nav-icon fas fa-home"></i>
            <p>
              DASHBOARD
            </p>
          </a>
        </li>
        <!-- END DASHBOARD -->
         <!-- START POSTS -->
        <li class="nav-item">
          <a href="<?= '?admin=posts'?>" class="nav-link <?= activeAdminLink($active_id,1); ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              POSTS
            </p>
          </a>
        </li>
        <!-- END POSTS -->
            <!-- START MESSAGES -->
        <li class="nav-item">
          <a href="<?= '?admin=messages'?>" class="nav-link <?= activeAdminLink($active_id,2); ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              MESSAGES
            </p>
          </a>
        </li>
        <!-- END MESSAGES -->
       
               <!-- START CATEGORIES -->
        <li class="nav-item">
          <a href="<?= '?admin=categories'?>" class="nav-link <?= activeAdminLink($active_id,3); ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              CATEGORIES
            </p>
          </a>
        </li>
        <!-- END CATEGORIES -->

               <!-- START SETTINGS -->
               <li class="nav-item">
          <a href="<?= '?admin=settings'?>" class="nav-link <?= activeAdminLink($active_id,5); ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              SETTINGS
            </p>
          </a>
        </li>
        <!-- END CATEGORY -->
                <!-- START USERS -->
        <li class="nav-item">
          <a href="<?= '?admin=users'?>" class="nav-link <?= activeAdminLink($active_id,4); ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              USERS
            </p>
          </a>
        </li>
        <!-- END USERS -->


        <!-- <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Starter Pages
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Active Page</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Inactive Page</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Simple Link
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
              </li> -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
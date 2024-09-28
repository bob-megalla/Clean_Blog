<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= '?admin=dashboard'; ?>" class="nav-link">Home</a>

    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= '?admin=logout' ?>" class="nav-link">Logout</a>
    </li>
  </ul>



  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
     <!-- Messages Dropdown Menu -->
     <li class="nav-item">
      <a class="nav-link"  href="<?= '?admin=logout' ?>">
        <i class="fa fa-unlock-alt" title="Sign out"></i>
      </a>
    </li>
    <!-- Messages Dropdown Menu -->
    <li class="nav-item">
      <a class="nav-link" target="_blank" rel="noopener noreferrer" href="<?= '?page=home' ?>">
        <i class="fa fa-globe" title="Go To WebSite"></i>
      </a>
    </li>
  
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>

      <?php $unreaded_messages = getAll('messages',where:"WHERE `is_readed` = 0"); ?>
        <?php if (count($unreaded_messages) < 1) :?>
          <span class="badge badge-warning navbar-badge"></span>
          <?php else: ?>
        <span class="badge badge-warning navbar-badge"><?=count($unreaded_messages)?></span>
        <?php endif; ?>

      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header"><?=count($unreaded_messages)?> Messages</span>
        <div class="dropdown-divider"></div>

        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> <?=count($unreaded_messages)?> New Message
        </a>
        <div class="dropdown-divider"></div>
        <a href="<?="?admin=messages"?>" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>

  </ul>
</nav>
<!-- /.navbar -->
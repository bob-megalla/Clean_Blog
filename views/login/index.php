
<?php require_once('views/login/inc/header.php')?>
<?php require_once(BASE_PATH .'views/login/inc/header.php')?>
<?php if(!isset($_SESSION['user_id'])):?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b><?=strtoupper( $setting['site_name'])?></b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"></p>

      <form action="controllers/auth/LoginCheck.php" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Enter Your Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Enter Your Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
           
          </div>
          <!-- /.col -->
          <div class="col-8">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <div class="col-2">
           
          </div>
          <!-- /.col -->
        </div>
      </form>
      <?php 
      if(isset($_SESSION['errors'])){
        require_once('views/errors/error.php');
      }
      unset($_SESSION['errors']);
      unset($_SESSION['success']);
      ?>
  </div>
</div>
<?php else:
  header("Location: ?admin=dashboard" );
  ?>
  
<?php endif; ?>
<!-- /.login-box -->

<?php require_once(BASE_PATH .'views/login/inc/footer.php')?>


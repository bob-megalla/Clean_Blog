<?php
if (!empty($_SESSION['user_id'])): ?>
    <?php require_once(BASE_PATH . 'views/backend/inc/header.php') ?>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <?php require_once(BASE_PATH . 'views/backend/inc/navbar.php') ?>
            <?php require_once(BASE_PATH . 'views/backend/inc/sidebar.php') ?>



            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Settings</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="<?= '?admin=dashboard' ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Edit Settings</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Settings</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <?php
                                    if (isset($_SESSION['errors'])) {
                                        require_once('views/errors/error.php');
                                    }
                                    unset($_SESSION['errors'])
                                        ?>

<?php
                                    if (isset($_SESSION['success'])) {
                                        require_once('views/errors/success.php');
                                    }
                                    unset($_SESSION['success'])
                                        ?>

                                    <form method="POST" Action="<?= '?admin=store-settings' ?>">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="site_name">site_name</label>
                                                <input type="text" class="form-control" id="site_name" name="site_name" value="<?= $settings['site_name'] ?>"
                                                    placeholder="Enter site_name">
                                                    <input type="text" class="form-control" style="display:none" name="id" value="<?= $settings['id'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="logo">logo</label>
                                                <input type="text" class="form-control" id="logo" name="logo" value="<?= $settings['logo'] ?>"
                                                    placeholder="Enter logo">
                                            </div>
                                            <div class="form-group">
                                                <label for="home_title">Home Title</label>
                                                <input type="text" class="form-control" id="home_title" name="home_title" value="<?= $settings['home_title'] ?>"
                                                    placeholder="Enter Home Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="about_title">About Title</label>
                                                <input type="text" class="form-control" id="about_title" name="about_title" value="<?= $settings['about_title'] ?>"
                                                    placeholder="Enter About Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_title">Content Title</label>
                                                <input type="text" class="form-control" id="contact_title" name="contact_title" value="<?= $settings['contact_title'] ?>"
                                                    placeholder="Enter About Content">
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="facebook">Facebook Link</label>
                                                <input type="text" class="form-control" id="facebook" name="facebook" value="<?= $settings['facebook'] ?>"
                                                    placeholder="Enter Facebook Link">
                                            </div>
                                            <div class="form-group">
                                                <label for="linkedin">LinkedIn Link</label>
                                                <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?= $settings['linkedin'] ?>"
                                                    placeholder="Enter LinkedIn Link">
                                            </div>
                                            <div class="form-group">
                                                <label for="github">github Link</label>
                                                <input type="text" class="form-control" id="github" name="github" value="<?= $settings['github'] ?>"
                                                    placeholder="Enter github Link">
                                            </div>
                                            <div class="form-group">
                                                <label for="about_content">About Content</label>
                                                <textarea class="form-control" id="about_content" name="about_content" rows="3" placeholder="Enter Small Description"><?= $settings['about_content'] ?></textarea>
                               
                                            </div>

                                           
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
</div>
            <?php require_once(BASE_PATH . 'views/backend/inc/footer.php') ?>

        <?php else:
    header("location:" . $_SERVER['HTTP_REFERER']);
    ?>
        <?php endif; ?>
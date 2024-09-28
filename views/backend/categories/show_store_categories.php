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
                                <h1 class="m-0 text-dark">ADD Category</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="<?= '?admin=dashboard' ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item "><a href="<?= '?admin=categories' ?>">All Categories</a></li>
                                    <li class="breadcrumb-item active">Add New Category</li>
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
                                        <h3 class="card-title">Add New Category</h3>
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
                                   

                                    <form method="POST" Action="<?= '?admin=store_category' ?>">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="name">Category Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Enter Category Name">
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
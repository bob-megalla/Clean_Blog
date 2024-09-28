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
                                <h1 class="m-0 text-dark">Edit POST</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="<?= '?admin=dashboard' ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item "><a href="<?= '?admin=posts' ?>">All Posts</a></li>
                                    <li class="breadcrumb-item active">Edit New Post</li>
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
                                        <h3 class="card-title">Edit Post</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <?php
                                    if (isset($_SESSION['errors'])) {
                                        require_once('views/errors/error.php');
                                    }
                                    unset($_SESSION['errors'])
                                        ?>

                                    <form method="POST" Action="<?= '?admin=save-edit-post' ?>">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" id="title" name="title" value="<?= $Selected_Post['title'] ?>"
                                                    placeholder="Enter Title">
                                                    <input type="text" class="form-control" style="display:none" name="id" value="<?= $Selected_Post['id'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Content">Content</label>
                                                <input type="text" class="form-control" id="content" name="content" value="<?= $Selected_Post['content'] ?>"
                                                    placeholder="Enter Content">
                                            </div>
                                            <div class="form-group">
                                                <label for="small_desc">Description</label>
                                                <textarea class="form-control" id="small_desc" name="small_desc" rows="3" placeholder="Enter Small Description"><?= $Selected_Post['small_desc'] ?></textarea>
                               
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <?php if($Selected_Post['status'] == 'active'): ?>
                                                    <option selected value="<?= $Selected_Post['status'] ?>">Active</option>
                                                    <option  value="not_active">Not Active</option>
                                                    <?php else: ?>
                                                    <option selected class="text-danger" value="<?= $Selected_Post['status'] ?>"> Not Active</option>
                                                    <option  value="active">Active</option>
                                                    <?php endif; ?>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>User Created</label>
                                                <select class="form-control" name="user_id">
                                                    <?php $Selected_user = getRow('users',$Selected_Post['user_id']);?>
                                                    <?php if(!empty($Selected_user)):?>
                                                        <option selected value="<?= $Selected_Post['user_id'] ?>"><?= $Selected_user['name'] ?></option>
                                                    <?php foreach ($AllUsers as $users): ?>
                                                        <option value="<?= $users['id'] ?>"><?= $users['name'] ?></option>
                                                    <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <?php foreach ($AllUsers as $users): ?>
                                                        <option value="<?= $users['id'] ?>"><?= $users['name'] ?></option>
                                                    <?php endforeach; ?>  
                                                    <?php endif;?>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control" name="category_id">
                                                    <?php $Selected_cat = getRow('categories',$Selected_Post['category_id']);?>
                                                    <?php if(!empty($Selected_cat)): ?>
                                                        <option selected value="<?= $Selected_Post['category_id'] ?>"><?= $Selected_cat['name'] ?></option>
                                                    <?php foreach ($AllCategories as $cat): ?>
                                                        <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                                                    <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <?php foreach ($AllCategories as $cat): ?>
                                                        <option value="<?= $Selected_Post['id'] ?>"><?= $cat['name'] ?></option>
                                                    <?php endforeach; ?> 
                                                    <?php endif; ?>

                                                </select>
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
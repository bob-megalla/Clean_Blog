<?php require_once(BASE_PATH . "views/frontend/inc/header.php"); ?>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <div class="post-preview">
                <h2 class="post-title"><?= $post['title']; ?></h2>
                <h5 class="post-subtitle"> <?php echo $post['content']; ?></h5>
                <div>
                    <?= $post['small_desc']; ?>
                </div>
                <hr>
                <p class="post-meta">
                    Category Are
                    <?php $cat_name = getAll(table_name: 'categories', fileds: 'name', limit: "LIMIT 1", where: 'WHERE id=' . $post['category_id']) ?>
                    <a href="#!"><?= $cat_name['0']['name'] ?></a>
                    on
                    <?php echo date("F d, Y", strtotime($post['created_at'])); ?>
                </p>
            </div>
            <hr class="my-4" />

            <!-- Divider-->

            <!-- Pager-->
        </div>
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
        <div class="bg-white border mt-4 mb-4" id="product_query">
            <div class="p-3 p-sm-4">
                <h3 class="fs-16 fw-700 mb-0">
                    <span> WRITE A NEW COMMENT </span>
                </h3>
            </div>

            <!-- Login & Register -->

            <!-- Query Submit -->
            <div class="query form px-3 px-sm-4">
                <form action="<?= '?page=add_comment' ?>" method="POST">
                    <input type="text" name="id" style="display:none" value="<?= $_GET['id']; ?>"
                        class="form-control">
                    <div class="form-group border mt-4 mb-4">
                        <input type="text" name="name" value="" class="form-control" placeholder="WRITE HERE YOUR NAME">
                    </div>
                    <div class="form-group border mt-4 mb-4">
                        <textarea class="form-control rounded-0" rows="3" cols="40" name="comment"
                            placeholder="WRITE HERE YOUR COMMENT ..." style="resize: none;"></textarea>

                    </div>
                    <button type="submit" class="btn btn-sm w-150px btn-primary rounded-0">SEND COMMENT</button>
                </form>
            </div>

            <!-- Own Queries -->

            <!-- Others Queries -->
            <div class="queries-area my-4 mb-0 px-3 px-sm-4">
                <div class="py-3">
                    <h3 class="fs-16 fw-700 mb-0">
                        <span>ALL COMMENTS (<?= count($result) ?>)</span>
                    </h3>
                </div>
                <?php if (empty($result)): ?>
                    <!-- Product queries -->
                    <p>No Comments Yet ,,,</p>
                <?php else: ?>
                    <?php foreach ($result as $query): ?>
                        <li class="media list-group-item d-flex px-3 px-md-4 border-0">
                            <!-- Review User Image -->

                            <div class="media-body text-left">
                                <!-- Review User Name -->
                                <h3 class="fs-15 fw-600 mb-0"> <?= $query['name'] ?>
                                </h3>
                                <!-- Review Date -->
                                <div class="opacity-60 mb-1">
                                    <?= date('d F Y' , strtotime($query['created_at'])) ?>
                                </div>
                                <!-- Review Comment -->
                                <p class="comment-text mt-2 fs-14">
                                    <?= $query['comment'] ?>
                                </p>
                                <!-- Review Images -->

                            </div>
                        </li>
                    <?php endforeach; ?>

                <?php endif; ?>


            </div>
        </div>
    </div>
</div>
<?php require_once(BASE_PATH . "views/frontend/inc/footer.php"); ?>
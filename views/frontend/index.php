<?php require_once (BASE_PATH . "views/frontend/inc/header.php"); ?>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <?php foreach($posts as $post): ?>
                    <div class="post-preview">
                        <a href="<?php echo url('index.php?page=post&id='.$post['id']); ?>">
                            <h2 class="post-title"><?= $post['title']; ?></h2>
                            <h3 class="post-subtitle"><?= $post['small_desc']; ?></h3>
                        </a>
                        <p class="post-meta">
                            Category Are
                            <?php $cat_name = getAll(table_name: 'categories',fileds: 'name',limit: "LIMIT 1",where: 'WHERE id='. $post['category_id'])?>
                            <a href="#!"><?= $cat_name['0']['name']?></a>
                            on 
                            <?php echo date("F d, Y",strtotime($post['created_at'])); ?>
                        </p>
                    </div>
                    <hr class="my-4" />
                    <?php endforeach; ?>
                    <!-- Divider-->
             
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="<?php echo url("index.php?page=posts"); ?>">All Posts →</a></div>
                </div>
            </div>
        </div>
<?php require_once(BASE_PATH . "views/frontend/inc/footer.php"); ?>

<?php require_once (BASE_PATH . "views/frontend/inc/header.php"); ?>
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
                                <?php $cat_name = getAll(table_name: 'categories',fileds: 'name',limit: "LIMIT 1",where: 'WHERE id='. $post['category_id'])?>
                            <a href="#!"><?= $cat_name['0']['name']?></a>
                                on 
                                <?php echo date("F d, Y",strtotime($post['created_at'])); ?>
                            </p>
                        </div>
                        <hr class="my-4" />
            
                    <!-- Divider-->
             
                    <!-- Pager-->
                </div>
            </div>
        </div>
        <?php require_once (BASE_PATH . "views/frontend/inc/footer.php"); ?>


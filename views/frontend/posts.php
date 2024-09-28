<?php require_once (BASE_PATH . "views/frontend/inc/header.php"); ?>

        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7 text-center">
                    <?php foreach($categories as $category): ?>
                        <a href="<?php echo url("index.php?page=posts&category=".$category['id']); ?>" class="border p-2 mx-2  <?php echo activeLink($active_id,$category['id']) ?>"> <?php echo $category['name']; ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                     <?php if(count($posts)): ?>
                        <?php foreach($posts as $post): ?>
                        <div class="post-preview">
                            <a href="<?php echo url('index.php?page=post&id='.$post['id']); ?>">
                                <h2 class="post-title"><?= $post['title']; ?></h2>
                                <h3 class="post-subtitle"><?= $post['small_desc']; ?></h3>
                            </a>
                            <p class="post-meta">
                                Category
                                <a href="#!"><?php echo $post['name']; ?></a>
                                on 
                                <?php echo date("F d, Y",strtotime($post['created_at'])); ?>
                            </p>
                        </div>
                        <hr class="my-4" />
                    <?php endforeach; ?>
                    <?php else: ?>
                        <h3 class="text-center border p-3 my-3 text-info">No Posts Found</h3>
                    <?php endif; ?>
                    <!-- Divider-->
             
                    <!-- Pager-->
                </div>
            </div>
        </div>
        <?php require_once (BASE_PATH . "views/frontend/inc/footer.php"); ?>



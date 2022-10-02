<?php include_once 'incuser/navbar.php'?>
        <!-- content -->
<div class="container">
<section class="bg-light py-5">
        <div class="container">
         <di>
         <h1>All Posts</h1>
         <div class="container mb-4">
    <div class="row">
        <?php foreach($data as $items):;?>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <a href="<?php echo URL_MAIN.'index/blog/'.$items['id']?>">
                        <img class="card-img-top" src="<?php echo ($items['img_cover'] != null ? URL_IMGADM.$items['img_cover'] : URL_NOIMG)?>" alt="">
                    </a>
                    <ul class="list-inline mt-3">
                        <li class="list-inline-item"><i class="fas fa-user"></i> <?php echo $items['f_name'].' '. $items['l_name']?></li>
                        <li class="list-inline-item"><i class="far fa-clock"></i> <?php echo $items['create_at']?></li>
                    </ul>
                    <hr>
                    <p class="lead"><?php echo  substr($items['post_content'], 0, 90).' ....'?></p>
                    <a class="btn btn-outline-dark my-2" href="<?php echo URL_MAIN.'index/blog/'.$items['id']?>" role="button">Read more...</a>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
         </div>
          
        </div>
 </section>
</div>

       
    <?php include_once 'incuser/footer.php'?>
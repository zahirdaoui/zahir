<?php include_once 'incuser/navbar.php'?>
     <!-- slider -->
        <div style="background: url(<?php echo URL_MAIN.'userfront/images/tech-head.jpg';?>);background-size:cover;" class="jumbotron bg-cover text-white">
        <div class="container py-5 text-center">
            <h1 class="display-4 font-weight-bold">Everything you need is here</h1>
            <p class="font-italic mb-0">The love of sharing knowledge drives us to do our best to enjoy the most important topics</p>
            <p class="font-italic">Snippe by
                <a href="allblogs.html" class="text-white">
                    <u>our articles</u>
                </a>
            </p>
            <a href="<?php echo URL_MAIN.'index/allblogs'?>" role="button" class="btn btn-primary px-5">See All Blogs</a>
        </div>
    </div>
    <!-- end slider -->

        <!-- content -->
        <div class="container">

        
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card borderless-card">
                        <div class="profile-card">
                            <img class="img-fluid" src="<?php echo URL_MAIN.'userfront/images/android.jpg';?>" alt="">
                            <div class="card-block">
                                <h3>Andoid</h3>
                                <p>A variety of topics in various fields</p>
                                <a href="<?php echo URL_MAIN.'blogby/posts_catagory/android';?>" class="btn btn-info ">Show more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card borderless-card">
                        <div class="profile-card">
                            <img class="img-fluid" src="<?php echo URL_MAIN.'userfront/images/windows.jpg';?>" alt="">
                            <div class="card-block">
                                <h3>Windows</h3>
                                <p>World news in your hands now</p>
                                <a href="<?php echo URL_MAIN.'blogby/posts_catagory/windows';?>" class="btn btn-info ">Show more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card borderless-card">
                        <div class="profile-card">
                            <img class="img-fluid" src="<?php echo URL_MAIN.'userfront/images/news.jpg';?>" alt="">
                            <div class="card-block">
                                <h3>News</h3>
                                <p>We share with you the latest technical topics</p>
                                <a href="<?php echo URL_MAIN.'blogby/posts_catagory/windows';?>" class="btn btn-info">Show more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- content carst categoy blog-->
<div class="container">
<section class="bg-light py-5">
        <div class="container">
         <di>
         <h1>Android</h1>
         <div class="container mb-4">
    <div class="row">
        <?php foreach($data['android'] as $items):;?>
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

<div class="container">
<section class="bg-light py-5">
        <div class="container">
          <h1>Windows</h1>
          <div class="container mb-4">
    <div class="row">
    <?php foreach($data['windows'] as $items):;?>
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
      </section>
</div>
<div class="container">
<section class="bg-light py-5">
        <div class="container">
         <di>
         <h1>News</h1>
         <div class="container mb-4">
         <?php foreach($data['windows'] as $items):;?>
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
 <!-- end content -->
       
    <?php include_once 'incuser/footer.php'?>
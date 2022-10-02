<?php include 'incadmin/navbar.php'?>

<div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Welcome to the dashboard</h2>
                                    <a class="au-btn au-btn-icon au-btn--blue" href="<?php echo URL_MAIN?>admin/blog/add">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
Add New Blog</a>
                                </div>
                            </div>
                        </div>
                        <di class="row m-t-25">
                            <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-bookmark"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $data['countPosts'];?></h2>
                                                <span>Total active blogs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-twitch"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $data['countComment'];?></h2>
                                                
                                                <span>Total Comments</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <h2 class="title-1 m-b-25">All Blogs</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Post Title</th>
                                                <th>date</th>
                                                <th class="text-right">Status comments</th>
                                                <th class="text-right">show</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data['allBlog'] as $item):?>
                                            <tr>
                                                <td><?php echo $item['id']?></td>
                                                <td><?php echo $item['post_title']?></td>
                                                <td><?php echo $item['create_at']?></td>
                                                <td class="text-right"><?php echo ($item['status_comment'] == 1 ? "active":"Disabled");?></td>
                                                <td class="text-right"><a type="button" class="btn btn-success text-white">Show</a></td>
                                            </tr>
                                         

                                         <?php endforeach; ?>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100398</td>
                                                <td>toyota</td>
                                                <td class="text-right">casablanca</td>
                                                <td class="text-right"><a type="button" class="btn btn-success text-white"> Show</a></td>
                                            </tr>
                                        
                                         
                                       
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
<?php include 'incadmin/footer.php'?>
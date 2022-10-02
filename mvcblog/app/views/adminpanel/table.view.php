<?php include 'incadmin/navbar.php'?>
                        <h3 class="text-center mb-5">all blogs you can edit, delete or view</h3>        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <form class="form-header pb-5" action="" method="POST">
                                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search By tag..." />
                                            <button class="au-btn--submit" type="submit">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected" disabled>Choose category</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select multiple class="form-control" id="exampleFormControlSelect2">
                                            <option selected="selected" disabled>Choose tag</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter btn-success">
                                            <i class="zmdi zmdi-filter-list"></i>filtres</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a class="au-btn au-btn-icon au-btn--green au-btn-- text-white" href="<?php echo URL_MAIN?>admin/blog/add">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
Add A new Blog</a>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>pictur</th>
                                                <th>Title</th>
                                                <th>Id</th>
                                                <th>date</th>
                                                <th>Comment</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data['allBlog'] as $item):?>
                                                
                                                <tr class="tr-shadow">
                                                <td><img src="<?php echo ($item['img_cover'] != null ? URL_IMGADM.$item['img_cover'] : URL_NOIMG)?>" width="50px" height="50px"></td>
                                                <td>
                                                    <span class="block-email"><?php echo $item['post_title']?></span>
                                                </td>
                                                <td class="desc"><?php echo $item['id']?></td>
                                                <td>55555555</td>
                                                <td>
                                                    <span class="status--process"><?php echo $item['create_at']?></span>
                                                </td>
                                                <td><?php echo ($item['status_comment'] == 1 ? "active":"Disabled");?></td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Show">
                                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="<?php echo URL_MAIN.'admin/blog/edit/'.$item['id']?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="<?php echo URL_MAIN.'admin/index/deletepost/'.$item['id']?>" class="item" data-toggle="tooltip" data-placement="top" title="Trush">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>

                                         <?php endforeach; ?>
                                            <tr class="tr-shadow">
                                                <td>ford</td>
                                                <td>
                                                    <span class="block-email">for festa</span>
                                                </td>
                                                <td class="desc">2022</td>
                                                <td>55555555</td>
                                                <td>
                                                    <span class="status--process">12-10-2022</span>
                                                </td>
                                                <td>$679.00</td>
                                                <td>zahir daoui</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Show">
                                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                        </a>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Trush">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
<?php include 'incadmin/footer.php'?>
<?php include 'incadmin/navbar.php'?>
<div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Add</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Categories</h3>
                                        </div>
                                        <hr>
                                        <form action="<?php echo URL_MAIN?>admin/category_tags/addcategorier" method="POST" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Categories Name</label>
                                                <input id="inputIsInvalid" value="<?php echo $data['cate_name'];?>" name="cate_name" class="<?php echo (!empty($data['cate_name_err']) ? 'is-invalid':'')?> form-control" type="text" placeholder="inter your categories">
                                                
                                                <small class="text-danger<?php echo (!empty($data['cate_name_err']) ? '':' d-none')?>"><?php echo $data['cate_name_err']?> </small>
                                               
                                            </div>
            
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                                                    
                                                    
                                                    Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                            <div class="card">
                                    <div class="card-header">Add</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Tags</h3>
                                        </div>
                                        <hr>
                                        <form action="<?php echo URL_MAIN?>admin/category_tags/addtag" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Tags Name</label>
                                                <input id="inputIsInvalid" value="<?php echo $data['tag_name'];?>" name="tagname" class="<?php echo (!empty($data['tag_name_err']) ? 'is-invalid':'')?> form-control" type="text" placeholder="inter your name">
                                                
                                             <small class="text-danger<?php echo (!empty($data['tag_name_err']) ? '':' d-none')?>"><?php echo $data['tag_name_err']?> </small>
                                            </div>
            
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                                                    
                                                    
                                                    Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
</div>
<div class="section__content section__content--p30">
                    <div class="container-fluid">     
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div class="table-data__tool">
                                <div class="table-responsive table-responsive-data2">
                                    <h3 class="text-center py-5">Category list</h3>
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>content</th>
                                                
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($data['datacate'] as $items) :?>
                                            <tr class="tr-shadow">
                                                <td> <?php echo $items['id']?></td>
                                                <td><?php echo $items['content']?></td>
                                                
                                                <td>
                                                <div class="table-data-feature">
                                                        <a href="<?php echo URL_MAIN."admin/category_tags/edit/".$items['id']?>" class="item" data-toggle="tooltip" data-placement="top" title="edit">
                                                         <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="<?php echo URL_MAIN."admin/category_tags/deletecategory/".$items['id']?>" class="item" data-toggle="tooltip" data-placement="top" title="delete">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                        <?php endforeach;?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div class="table-data__tool">
                                <div class="table-responsive table-responsive-data2">
                                    <h3 class="text-center py-5">list Tags</h3>
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>nom</th>
                                                <th>Last Update</th>
                                                <th>Number Blogs</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data['datatag'] as $items) :?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $items['name']?></td>
                                                <td>
                                                    <span class="block-email">zahirdaoui.com</span>
                                                </td>
                                                <td class="desc">0657582022</td>    
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="<?php echo URL_MAIN."admin/category_tags/edittag/".$items['id']?>" class="item" data-toggle="tooltip" data-placement="top" title="edit">
                                                         <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a class="item" href="<?php echo URL_MAIN."admin/category_tags/deletetg/".$items['id']?>" data-toggle="tooltip" data-placement="top" title="delete">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php endforeach;?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
<?php include 'incadmin/footer.php'?>
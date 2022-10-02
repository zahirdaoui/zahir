<?php include 'incadmin/navbar.php'?>
<div class="section__content section__content--p30">
                    <div class="container-fluid">     
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div class="table-data__tool">
                                <div class="table-responsive table-responsive-data2">
                                    <h3 class="text-center py-5">admin list in web sete</h3>
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>Pictures</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data['admins'] as $items): ?>
                                        
                                    
                                            <tr class="tr-shadow">
                                                <td> <img src="<?php echo ($items['img'] ? URL_IMGADM.$items['img'] : URL_NOIMG )?>" width="50px" height="50px" alt="John Doe" /></td>
                                                <td>zahir</td>
                                                <td>
                                                    <span class="block-email"><?php echo $items['email'];?></span>
                                                </td>
                                                <td class="desc"><?php echo ($items['mobile'] ? $items['mobile'] : 'empty');?></td>
                                                <td>
                                                    <span class="status--process">active</span>
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="<?php echo URL_MAIN.'admin/users/editadmins/'. $items['id']?>" class="item" data-toggle="tooltip" data-placement="top" title="Édit">
                                                          <i class="fa fa-pencil" aria-hidden="true"></i>

                                                        </a>
                                                        </a>
                                                       <a href="<?php echo URL_MAIN.'admin/users/delete/'. $items['id']?>" class="item" data-toggle="tooltip" data-placement="top" title="delete">
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
                                    <h3 class="text-center py-5">user login list</h3>
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <td>picture</td>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data['users'] as $items): ?>
                                        
                                    
                                        <tr class="tr-shadow">
                                            <td> <img src="<?php echo URL_IMGDATA.'notfound/noimage.jpg'?>" width="50px" height="50px" alt="John Doe" /></td>
                                            <td>zahir</td>
                                            <td>
                                                <span class="block-email"><?php echo $items['email'];?></span>
                                            </td>
                                            <td>
                                            <span class="status--process">attend</span>
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <a href="<?php echo URL_MAIN.'admin/users/switchadmin/'. $items['id']?>" class="item" data-toggle="tooltip" data-placement="top" title="Accept">
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                    </a>
                                                       <a href="<?php echo URL_MAIN.'admin/users/delete/'. $items['id']?>" class="item" data-toggle="tooltip" data-placement="top" title="delete">
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
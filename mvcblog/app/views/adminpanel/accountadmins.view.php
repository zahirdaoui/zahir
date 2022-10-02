<?php include 'incadmin/navbar.php'?>
<div class="">
<div class="card">
                            <div class="card-header text-center">
                                <strong>Edit Account Admins</strong> 
                            </div>
                            <div class="card-body card-block">
                                <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">First Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" name="f_name" placeholder="First Name" id="inputIsInvalid" value="<?php echo $data['f_name']?>" class="<?php echo (!empty($data['f_name_err']) ? 'is-invalid':'')?> form-control au-input au-input--full">
                                            <small class="form-text text-danger<?php echo (!empty($data['f_name_err']) ? '':' d-none')?>"><?php echo $data['f_name_err']?> </small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Last Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text"  name="l_name" placeholder="enter your Last Name" id="inputIsInvalid" value="<?php echo $data['l_name']?>" class="<?php echo (!empty($data['l_name_err']) ? 'is-invalid':'')?> form-control au-input au-input--full">
                                            <small class="form-text text-danger<?php echo (!empty($data['l_name_err']) ? '':' d-none')?>"><?php echo $data['l_name_err']?> </small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Phone</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="phone" name="mobile" placeholder="enter your number Phone" value="<?php echo $data['mobile']?>" class="<?php echo (!empty($data['mobile_err']) ? 'is-invalid':'')?> form-control au-input au-input--full">
                                            <small class="form-text text-danger<?php echo (!empty($data['mobile_err']) ? '':' d-none')?>"><?php echo $data['mobile_err']?> </small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Email</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="email" id="email" name="email" placeholder="email" value="<?php echo $data['email']?>" class="<?php echo (!empty($data['email_err']) ? 'is-invalid':'')?> form-control au-input au-input--full">
                                            <small class="form-text text-danger<?php echo (!empty($data['email_err']) ? '':' d-none')?>"><?php echo $data['email_err']?> </small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Select Role</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                        <select class="form-control" id="exampleFormControlSelect1" name="role">
                                          <option value="1" <?php echo ($data['roleuser'] == 'admin'? 'selected' : '')?>>Admin</option>
                                          <option value="2" <?php echo ($data['roleuser'] == 'user'? 'selected' : '')?>>User</option>
                                        </select>
                                            <small class="form-text text-danger<?php echo (!empty($data['email_err']) ? '':' d-none')?>"><?php echo $data['email_err']?> </small>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Password</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                            <small class="form-text text-danger<?php echo (!empty($data['password_err']) ? '':' d-none')?>"><?php echo $data['password_err']?> </small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Confirm Password</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" id="confpassword" name="confpassword" placeholder="Confirm  your Password" class="form-control">
                                            <small class="form-text text-danger<?php echo (!empty($data['Cpassword_err']) ? '':' d-none')?>"><?php echo $data['Cpassword_err']?> </small>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-multiple-input" class=" form-control-label">Select Photo</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="file-multiple-input" name="imageadmin" class="form-control-file">
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                <button type="submit" class="btn btn-success btn-sm">
                                    Save
                                </button>
                            </div>
                                </form>
                            </div>
                          
                        </div>
<?php include 'incadmin/footer.php'?>
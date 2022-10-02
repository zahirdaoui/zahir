<?php include 'incadmin/navbar.php'?>
<div class="">
                        <div class="card">
                            <div class="card-header text-center">
                                <strong>M'y Account </strong> 
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">First Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="nom" name="nom" placeholder="First Name" class="form-control">
                                            <small class="form-text text-muted">This is a help text</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Last Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="prénom" id="prénom" name="modelVoiture" placeholder="Last Name" class="form-control">
                                            <small class="form-text text-muted">This is a help text</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Phone</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control">
                                            <small class="form-text text-muted">This is a help text</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Email</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="email" id="email" name="email" placeholder="email" class="form-control">
                                            <small class="form-text text-muted">This is a help text</small>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Password</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                            <small class="form-text text-muted">This is a help text</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Confirm Password</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" id="confpassword" name="confpassword" placeholder="Confirm Password" class="form-control">
                                            <small class="form-text text-muted">This is a help text</small>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-multiple-input" class=" form-control-label">Select Photo</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="file-multiple-input" name="file-multiple-input" class="form-control-file">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-success btn-sm">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
<?php include 'incadmin/footer.php'?>
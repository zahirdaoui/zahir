<?php include 'incadmin/navbar.php'?>

<div class="">
                        <div class="card">
                            <div class="card-header text-center">
                                <strong> Add a Blog</strong> 
                            </div>
                            <div class="card-body card-block">
                                <form action="<?php echo URL_MAIN?>admin/blog/add" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Blog Title</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input id="inputIsInvalid" value="<?php echo $data['blog_title'];?>" class="<?php echo (!empty($data['blog_title_err']) ? 'is-invalid':'')?> form-control" type="text" name="blog_title" placeholder="inter your title blog">
                                            <small class="text-danger<?php echo (!empty($data['blog_title_err']) ? '':' d-none')?>"><?php echo $data['blog_title_err']?> </small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Choose category</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="category" name="select" id="select" class="form-control">
                                                <option value="0" disabled selected>please select</option>
                                                <?php foreach($data['categorydata'] as $items): ?>
                                                <option value="<?php echo $items['id'];?>"><?php echo $items['content']  ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <small class="text-danger<?php echo (!empty($data['category_err']) ? '':' d-none')?>"><?php echo $data['category_err']?> </small>
                                        </div>
                                    </div>
                                
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Add and separate tags with (|)</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input id="inputIsInvalid" value="<?php echo $data['tags'];?>" class="<?php echo (!empty($data['tags_err']) ? 'is-invalid':'')?> form-control" type="text" name="tags" placeholder="inter your title blog">
                                            <small class="text-danger<?php echo (!empty($data['tags_err']) ? '':' d-none')?>"><?php echo $data['tags_err']?> </small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">must tags used</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <button class="btn btn-primary">show tags must tags used</button>
                                            <a href="">html</a> | <a href="">html</a> | <a href="">html</a>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">comments status</label>
                                        </div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="radionbtn" class="form-check-label ">
                                                        <input type="radio" id="radionbtn" name="comment_state" value="1" class="form-check-input">Enabled
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radionbtn2" class="form-check-label ">
                                                        <input type="radio" id="radionbtn2" name="comment_state" value="2" class="form-check-input">Disable
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">the description </label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea id="inputIsInvalid" value="<?php echo $data['content'];?>" class="<?php echo (!empty($data['contnet_err']) ? 'is-invalid':'')?> form-control" type="text" name="content" placeholder="inter your title blog"></textarea>
                                            <small class="text-danger<?php echo (!empty($data['content_err']) ? '':' d-none')?>"><?php echo $data['content_err']?> </small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-multiple-input" class=" form-control-label">select a picture</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="imageCover" accept="image/x-png,image/jpeg" name="blog_img" class="form-control-file">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fa-solid fa-plus"></i> save
                                </button>
                                </form>
                            </div>
                            <div class="card-footer">
                                
                            </div>
                        </div>
                    </div>
<?php include 'incadmin/footer.php'?>
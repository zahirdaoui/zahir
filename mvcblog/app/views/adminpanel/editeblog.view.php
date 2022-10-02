<?php include 'incadmin/navbar.php'?>

<div class="">
                        <div class="card">
                            <div class="card-header text-center">
                                <strong> Add a Blog</strong> 
                            </div>
                            <div class="card-body card-block">
                                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Blog Title</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input id="inputIsInvalid" value="<?php echo $data['post']["post_title"];?>" class="<?php echo (!empty($data['blog_title_err']) ? 'is-invalid':'')?> form-control" type="text" name="blog_title" placeholder="inter your title blog">
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
                                                <option value="<?php echo $items['id'];?>" <?php echo ($items['content'] == $data['category_post'] ? 'selected':'') ?> ><?php echo $items['content']  ?></option>
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
                                            <input id="inputIsInvalid" value="<?php echo $data['tags_use'];?>" class="<?php echo (!empty($data['tags_err']) ? 'is-invalid':'')?> form-control" type="text" name="tags" placeholder="inter your tags...">
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
                                                        <input type="radio" id="radionbtn" name="comment_state" value="1" <?php echo ($data['post']["status_comment"] == 1 ? "checked" : ''); ?> class="form-check-input">Enabled
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radionbtn2" class="form-check-label ">
                                                        <input type="radio" id="radionbtn2" name="comment_state" value="2" <?php echo ($data['post']["status_comment"] == 2 ? "checked" : ''); ?> class="form-check-input">Disable
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
                                            <textarea id="inputIsInvalid" class="<?php echo (!empty($data['contnet_err']) ? 'is-invalid':'')?> form-control" type="text" name="content" placeholder="inter your title blog"><?php echo $data['post']["post_content"];?></textarea>
                                            <small class="text-danger<?php echo (!empty($data['content_err']) ? '':' d-none')?>"><?php echo $data['content_err']?> </small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-multiple-input" class=" form-control-label">change a picture</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="imageCover" accept="image/x-png,image/jpeg" name="blog_img" class="form-control-file">
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <img src="<?php echo ($data['post']['img_cover'] != null ? URL_IMGADM.$data['post']['img_cover'] : URL_NOIMG)?>" width="200px" height="200px">
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
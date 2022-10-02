<?php include 'incadmin/navbar.php'?>
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Edit</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Categories</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="POST" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Categories Name</label>
                                                <input id="inputIsInvalid" value="<?php echo $data["current_category"];?>" name="cate_name" class="<?php echo (!empty($data['cate_name_err']) ? 'is-invalid':'')?> form-control" type="text" placeholder="inter your categories">
                                                
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
                            
</div>

<?php include 'incadmin/footer.php'?>
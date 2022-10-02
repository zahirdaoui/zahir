<?php include 'incadmin/navbar.php'?>
<div class="">
                            <div class="">
                                    <div class="card">
                                        <div class="card-header">Edit Comment</div>
                                        <div class="card-body card-block">
                                            <form action="" method="post" class="">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" id="username2" name="username2" placeholder="Username" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <textarea type="text" id="comment" name="comment" placeholder="Comment" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                                            <option value="0" disabled>status of comment</option>
                                                            <option value="1">Acceptance</option>
                                                            <option value="1">Refusal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <a href="#">blog title</a>
                                                    </div>
                                                </div>
                                                <div class="form-actions form-group text-center">
                                                    <button type="submit" class="btn btn-success btn-sm">save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- DATA TABLE -->
                                    <div class="table-data__tool">
                                        <div class="table-data__tool-left">
                                            <form class="form-header pb-5" action="" method="POST">
                                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Id , Title, tag..." />
                                                <button class="au-btn--submit" type="submit">
                                                <i class="fa fa-search" aria-hidden="true"></i>
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
                                    </div>
                                    <div class="table-responsive table-responsive-data2">
                                        <table class="table table-data2">
                                            <thead>
                                                <tr>
                                                    <th>Pictur</th>
                                                    <th>Title</th>
                                                    <th>Id</th>
                                                    <th>comments</th>
                                                    <th>Status</th>
                                                    <th>Email</th>
                                                    <th>UserName</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
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
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
                        </div>

<?php include 'incadmin/footer.php'?>
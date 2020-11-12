<?php require_once 'header.php'; ?>
<!--main content start-->
<section class="wrapper">
    <!-- category_add area -->
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <section class="panel">
                <header class="panel-heading">
                    Add user
                </header>
                <div class="panel-body">
                    <div class="form">
                        <form class="form-validate form-horizontal" name="form1" id="add_user_form" method="Post"
                              action="<?= APP_PATH ?>/user/postAddUser">
                            <input type="hidden" name="token" id="token" value="<?= $token ?>"/>
                            <div class="form-group ">
                                <label for="fullname" class="control-label col-lg-2">Name<span
                                            class="required"></span></label>
                                <div class="col-lg-4">
                                    <input class=" form-control" required minlength="3" id="name" name="name"
                                           type="text"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="address" class="control-label col-lg-2">Surname<span
                                            class="required"></span></label>
                                <div class="col-lg-4">
                                    <input class=" form-control" required="" minlength="3" id="surname"
                                           name="surname" type="text"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="email" class="control-label col-lg-2">Email</label>
                                <div class="col-lg-4">
                                    <input class="form-control " required="" id="email" name="email" type="email"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="phone" class="control-label col-lg-2">Phone</label>
                                <div class="col-lg-4">
                                    <input class="form-control " required="" id="phone" name="phone" type="number"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" id="send" type="submit">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<!--main content end-->
<?php require_once 'footer.php'; ?>




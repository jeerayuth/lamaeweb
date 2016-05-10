<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Login</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index.php"></a></li>
        </ul>
    </div><!--/container-->
</div>

<!--=== Content Part ===-->
<div class="container content">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <?=$this->session->flashdata('msgerr')?>
            <form method="post" action="<?php echo base_url('user/validlogin') ?>" class="reg-page">
                <div class="reg-header">
                    <h2>สมาชิกเข้าสู่ระบบ</h2>
                </div>

                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" placeholder="Username" class="form-control" name="username">
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" placeholder="Password" class="form-control" name="password">
                </div>

                <div class="row">
                    <div class="col-md-6 checkbox">
                        <label><input type="checkbox"> Stay signed in</label>
                    </div>
                    <div class="col-md-6">
                        <button class="btn-u pull-right" type="submit">Login</button>
                    </div>
                </div>

            </form>
        </div>
    </div><!--/row-->
</div><!--/container-->
<!--=== End Content Part ===-->
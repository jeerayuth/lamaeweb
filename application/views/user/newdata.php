<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">ฟอร์มสมัครสมาชิกใหม่</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index.php"></a></li>
        </ul>
    </div><!--/container-->
</div>


<!--=== Content Part ===-->
<div class="container content">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <?= $this->session->flashdata('msgerr') ?>
            <form role="form" action="<?php echo base_url('user/register'); ?>" method="post">
                <div class="reg-header">
                    <h2>สมัครสมาชิก</h2>
                    <p>สำหรับเจ้าหน้าที่ภายในหน่วยงานเท่านั้น</p>
                </div>

                <label>ชื่อ-สกุล</label> <span class="color-red">*</span>
                <input type="text" name="display_name" class="form-control margin-bottom-20">

                <label>อีเมล์ <span class="color-red">*</span></label>
                <input type="text" name="email" class="form-control margin-bottom-20">

                <label>ชื่อผู้ใช้ <span class="color-red">*</span></label>
                <input type="text" name="username" class="form-control margin-bottom-20">

                <div class="row">
                    <div class="col-sm-6">
                        <label>รหัสผ่าน <span class="color-red">*</span></label>
                        <input type="password" name="password" class="form-control margin-bottom-20">
                    </div>
                    <div class="col-sm-6">
                        <label>ยืนยันรหัสผ่าน <span class="color-red">*</span></label>
                        <input type="password" name="cpassword" class="form-control margin-bottom-20">
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-6 checkbox">
                        <label>

                        </label>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button class="btn-u" type="submit">ลงทะเบียน</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!--/container-->
<!--=== End Content Part ===-->




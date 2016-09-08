<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ผู้ใช้งาน
            <small>
                จัดการข้อมูลผู้ใช้งานเว็บไซต์
            </small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('member'); ?>">
                    <i class="fa fa-dashboard">
                    </i>หน้าแรก
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('member'); ?>">
                    ผู้ใช้งาน
                </a>
            </li>
            <li class="active">
                เพิ่มข้อมูลใหม่
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    เพิ่มข้อมูล
                </h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open_multipart("", array("class" => "form-vertical")) ?>
            <div class="box-body">


                <div class="form-group">
                    <label for="exampleInputEmail1">
                        ชื่อ-สกุล
                    </label>
                    <input type="text" id="display_name" class="form-control" name="display_name" value="<?php echo isset($row->display_name) ? $row->display_name : '' ?>">
                    <?php echo form_error("display_name"); ?>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">
                        อีเมล์
                    </label> 
                    <input type="text" id="email" class="form-control" name="email" value="<?php echo isset($row->email) ? $row->email : '' ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">
                        ชื่อล็อกอิน
                    </label> 
                    <input type="text" id="username" class="form-control" name="username" value="<?php echo isset($row->username) ? $row->username : '' ?>">
                    <?php echo form_error("username"); ?>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">
                        รหัสผ่าน
                    </label> 
                    <input type="text" id="password" class="form-control" name="password" value="<?php echo isset($row->password) ? $row->password : '' ?>">
                    <?php echo form_error("password"); ?>
                </div>
                
                
                <div class="form-group">
                    <label>
                        สถานะ
                    </label>
                    <?php echo form_dropdown("visible", array(1 => "เปิดการใช้งาน", 0 => "ปิดการใช้งาน"), isset($row->visible) ? $row->visible : '', 'class="form-control"'); ?>
                </div>

            </div><!-- /.box-body -->

            <div class="box-footer">
                <button class="btn btn-primary" type="submit">
                    <i class="fa fa-fw fa-save">
                    </i>บันทึกข้อมูล
                </button>
                <a class="btn btn-danger" href="<?php echo base_url('member'); ?>" role="button">
                    <i class="fa fa-fw fa-close">
                    </i>ยกเลิก
                </a>
            </div>
            </form>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

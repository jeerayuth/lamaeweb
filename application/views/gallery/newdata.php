<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            แกลอรี่ภาพ
            <small>
                จัดการแกลอรี่ภาพ
            </small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('gallery'); ?>">
                    <i class="fa fa-dashboard">
                    </i>หน้าแรก
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('gallery'); ?>">
                    แกลอรี่
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
            <form role="form" action="<?php echo base_url('gallery/postdata'); ?>" method="post" enctype="multipart/form-data">
                <div class="box-body">

                    <div class="form-group">
                        <label for="title">
                            ชื่อเรื่อง
                        </label> <?php echo $this->session->flashdata('err_title'); ?>
                        <input type="text" id="title" class="form-control" name="title" value="<?php echo $this->session->flashdata('title'); ?>">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            ภาพประกอบ
                        </label> <?php echo $this->session->flashdata('err_filename'); ?>
                        <input type="file" name="userfile" id="userfile" >
                    </div>
                    <div class="form-group">
                        <label>
                            รายละเอียด
                        </label>
                        <textarea rows="3" class="form-control" id="description" name="description"><?php echo $this->session->flashdata('description'); ?></textarea>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-fw fa-save">
                        </i>บันทึกข้อมูล
                    </button>
                    <a class="btn btn-danger" href="<?php echo base_url('gallery'); ?>" role="button">
                        <i class="fa fa-fw fa-close">
                        </i>ยกเลิก
                    </a>
                </div>
            </form>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

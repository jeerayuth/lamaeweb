<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            หมวดหมู่เอกสาร
            <small>
                หมวดหมู่เอกสารจัดการแบ่งแยกเอกสารออกเป็นหมวด
            </small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('categorie'); ?>">
                    <i class="fa fa-dashboard">
                    </i>หน้าแรก
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('categorie'); ?>">
                    หมวดหมู่เอกสาร
                </a>
            </li>
            <li class="active">
                <?php echo $result->name ?>
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    แก้ไขข้อมูล
                </h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url('categorie/postdata'); ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $result->id ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            ชื่อหมวดหมู่
                        </label> <?php echo $this->session->flashdata('error_name') ?>
                        <input type="text" id="name" class="form-control" name="name" value="<?php echo $result->name ?>">
                    </div>
                    <div class="form-group">
                        <label>
                            รายละเอียด
                        </label>

                        <input type="text" id="description" class="form-control" name="description" value="<?php echo $result->description ?>">

                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-fw fa-save">
                        </i>บันทึกข้อมูล
                    </button>
                    <a class="btn btn-danger" href="<?php echo base_url('categorie'); ?>" role="button">
                        <i class="fa fa-fw fa-close">
                        </i>ยกเลิก
                    </a>
                </div>
            </form>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
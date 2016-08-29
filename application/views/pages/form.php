<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            เพจเว็บไซต์
            <small>
                จัดการเพจเว็บไซต์
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
                    เพจเว็บไซต์
                </a>
            </li>
            <li class="active">
                เพิ่มหน้าเพจใหม่
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    เพิ่มเพจ
                </h3>
            </div><!-- /.box-header -->
            <!-- form start -->

            <?php echo form_open_multipart("", array("class" => "form-vertical")) ?>
            <div class="box-body">

                <div class="form-group">
                    <label for="title">
                        ชื่อเพจ
                    </label>
                    <input type="text" name="name" id="name" value="<?php echo isset($row->name) ? $row->name : '' ?>" class="form-control">
                    <?php echo form_error("name"); ?>
                </div>
             
                <div class="form-group">
                    <label>
                        รายละเอียด
                    </label>
                    <textarea rows="3" class="form-control" id="details" name="details"><?php echo isset($row->details) ? $row->details : '' ?></textarea>
                </div>

                <div class="form-group">
                    <label>
                        สถานะ
                    </label>
                    <?php echo form_dropdown("visible", array(1 => "เผยแพร่", 0 => "ไม่เผยแพร่"), isset($row->visible) ? $row->visible : '', 'class="form-control"'); ?>
                </div>

            </div><!-- /.box-body -->

            <div class="box-footer">
                <button class="btn btn-primary" type="submit">
                    <i class="fa fa-fw fa-save">
                    </i>บันทึกข้อมูล
                </button>
                <a class="btn btn-danger" href="<?php echo base_url('pages'); ?>" role="button">
                    <i class="fa fa-fw fa-close">
                    </i>ยกเลิก
                </a>
            </div>
            </form>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

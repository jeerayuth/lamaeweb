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

            <?php echo form_open_multipart("", array("class" => "form-vertical")) ?>
            <div class="box-body">

                <div class="form-group">
                    <label for="title">
                        ชื่อเรื่อง
                    </label>
                    <input type="text" name="title" id="title" value="<?php echo isset($row->title) ? $row->title : '' ?>" class="form-control">
                    <?php echo form_error("title"); ?>
                </div>


                <div class="form-group">
                    <label for="filename">
                        ภาพตัวอย่าง
                    </label>
                    <div>
                        <img src="<?php echo base_url(); ?>assets/gallery_uploads/<?php echo isset($row->thumbnail) ? $row->thumbnail : 'default.jpg' ?>" alt="Image 1">  
                    </div>                       
                    <div><input type="file" name="filename" id="filename"></div>
                    <?php echo form_error("filename"); ?>
                </div>
                <div class="form-group">
                    <label>
                        รายละเอียด
                    </label>
                    <textarea rows="3" class="form-control" id="description" name="description"><?php echo isset($row->description) ? $row->description : '' ?></textarea>
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
                <a class="btn btn-danger" href="<?php echo base_url('gallery'); ?>" role="button">
                    <i class="fa fa-fw fa-close">
                    </i>ยกเลิก
                </a>
            </div>
            </form>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

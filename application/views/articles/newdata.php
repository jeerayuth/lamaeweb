<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            บทความ-คลังความรู้
            <small>
                จัดการบทความต่างๆให้ตรงตามหมวดหมู่ เพื่อความง่ายต่อการเข้าถึงของผู้ใช้งาน
            </small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('news'); ?>">
                    <i class="fa fa-dashboard">
                    </i>หน้าแรก
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('articles'); ?>">
                    บทความ
                </a>
            </li>
            <li class="active">
                เพิ่มบทความใหม่
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
            <form role="form" action="<?php echo base_url('articles/postdata'); ?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            หมวดหมู่บทความ
                        </label> <?php echo $this->session->flashdata('err_categorie_id'); ?>
                        <select class="form-control" name="news_categorie_id">
                            <option value="">
                                เลือกหมวดหมู่
                            </option>
                            <?php
                            foreach ($results as $result) {
                                ?>
                                <option value="<?php echo $result->id; ?>">
                                    <?php echo $result->name; ?>
                                </option>
                            <?php }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            หัวข้อประกาศ
                        </label> <?php echo $this->session->flashdata('err_topic'); ?>
                        <input type="text" id="topic" class="form-control" name="topic" value="<?php echo $this->session->flashdata('topic'); ?>">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            อัพโหลดไฟล์เอกสารแนบ
                        </label> <?php echo $this->session->flashdata('err_filename'); ?>
                        <input type="file" name="userfile" id="userfile" >
                    </div>
                    <div class="form-group">
                        <label>
                            รายละเอียด
                        </label>
                        <?php echo form_textarea(array('name' => 'description', 'id' => 'description', 'value' => '', 'class' => "ckeditor")); ?>
                        <!--<textarea rows="8" class="form-control" id="description" name="description" ><?php //echo $this->session->flashdata('description');  ?></textarea>-->
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-fw fa-save">
                        </i>บันทึกข้อมูล
                    </button>
                    <a class="btn btn-danger" href="<?php echo base_url('articles'); ?>" role="button">
                        <i class="fa fa-fw fa-close">
                        </i>ยกเลิก
                    </a>
                </div>
            </form>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

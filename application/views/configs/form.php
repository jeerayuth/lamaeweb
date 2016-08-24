<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ข้อมูลพื้นฐานหน่วยงาน
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('configs/update'); ?>">
                    <i class="fa fa-dashboard">
                    </i>หน้าแรก
                </a>
            </li>
            <li class="active">
                ตั้งค่าพื้นฐาน
            </li>
        </ol>
    </section>

    <!-- Top menu -->
    <?php echo $this->session->flashdata('msginfo'); ?>
    <!-- Main content -->
    <section class="content"
             <!-- Your Page Content Here -->
             <div class="box box-primary">         
            <div class="box-header with-border">
                <small>
                    จัดการข้อมูลพื้นฐานหน่วยงาน
                </small>
                </h3>
            </div><!-- /.box-header -->
            <!-- form start -->

            <?php echo form_open_multipart("", array("class" => "form-vertical")) ?>
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">หน่วยงาน</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">โลโก้</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">ผู้อำนวยการ</a></li>
                    
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title">
                                    ชื่อหน่วยงาน
                                </label>
                                <input type="text" name="name" id="name" value="<?php echo isset($row->name) ? $row->name : '' ?>" class="form-control">
                                <?php echo form_error("name"); ?>
                            </div>

                            <div class="form-group">
                                <label for="title">
                                    ที่อยู่
                                </label>
                                <input type="text" name="address" id="address" value="<?php echo isset($row->address) ? $row->address : '' ?>" class="form-control">
                                <?php echo form_error("address"); ?>
                            </div>

                            <div class="form-group">
                                <label for="title">
                                    เบอร์โทรศัพท์
                                </label>
                                <input type="text" name="telephone" id="telephone" value="<?php echo isset($row->telephone) ? $row->telephone : '' ?>" class="form-control">
                                <?php echo form_error("telephone"); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="title">
                                    แฟก์
                                </label>
                                <input type="text" name="fax" id="fax" value="<?php echo isset($row->fax) ? $row->fax : '' ?>" class="form-control">
                                <?php echo form_error("fax"); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="title">
                                    อีเมล์
                                </label>
                                <input type="text" name="email" id="email" value="<?php echo isset($row->email) ? $row->email : '' ?>" class="form-control">
                                <?php echo form_error("email"); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="title">
                                    facebook
                                </label>
                                <input type="text" name="facebook" id="facebook" value="<?php echo isset($row->facebook) ? $row->facebook : '' ?>" class="form-control">
                                <?php echo form_error("facebook"); ?>
                            </div>
                        </div><!-- /.box-body -->

                    </div>

                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="filename">
                                        ภาพตัวอย่าง
                                    </label>
                                    <div>
                                        <img src="<?php echo base_url(); ?>assets/configs_uploads/<?php echo isset($row->filename) ? $row->filename : 'default.png' ?>" alt="Image 1">  
                                    </div>
                                    <p/>
                                    <div><input type="file" name="filename" id="filename"></div>
                                    <p class="text-danger">
                                        ชื่อไฟล์ภาพต้องเป็นภาษาอังกฤษหรือตัวเลขเท่านั้น (ขนาดภาพไม่เกิน 1024 x 768)
                                    </p>
                                    <?php echo form_error("filename"); ?>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div role="tabpanel" class="tab-pane" id="messages">

                        <div class="box-body">
                            <div class="form-group">
                                <label for="filename">
                                    ภาพตัวอย่าง
                                </label>
                                <div>
                                    <img src="<?php echo base_url(); ?>assets/configs_uploads/<?php echo isset($row->doctor_photo) ? $row->doctor_photo : 'default.png' ?>" alt="Image 1">  
                                </div>  
                                <p/>
                                <div><input type="file" name="doctor_photo" id="doctor_photo"></div>
                                <p class="text-danger">
                                    ชื่อไฟล์ภาพต้องเป็นภาษาอังกฤษหรือตัวเลขเท่านั้น (ขนาดภาพไม่เกิน 1024 x 768)
                                </p>
                                <?php echo form_error("doctor_photo"); ?>

                            </div>

                            <div class="form-group">
                                <label for="title">
                                    ชื่อ-สกุล
                                </label>
                                <input type="text" name="director_name" id="director_name" value="<?php echo isset($row->director_name) ? $row->director_name : '' ?>" class="form-control">
                                <?php echo form_error("director_name"); ?>
                            </div>

                            <div class="form-group">
                                <label for="title">
                                    ตำแหน่ง
                                </label>
                                <input type="text" name="director_position" id="director_position" value="<?php echo isset($row->director_position) ? $row->director_position : '' ?>" class="form-control">
                                <?php echo form_error("director_position"); ?>
                            </div>
                        </div><!-- /.box-body -->
                    </div>


                </div>


                <div class="box-footer">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-fw fa-save">
                        </i>บันทึกข้อมูล
                    </button>
                    <a class="btn btn-danger" href="<?php echo base_url('configs/update'); ?>" role="button">
                        <i class="fa fa-fw fa-close">
                        </i>ยกเลิก
                    </a>
                </div>

            </div>
            </form>


        </div>


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->



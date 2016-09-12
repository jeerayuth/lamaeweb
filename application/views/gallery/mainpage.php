
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            แกลอรี่รูปภาพ
            <small>แกลอรี่รูปภาพสำหรับอัพโหลดภาพกิจกรรมต่างๆ</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active">แกลอรี่รูปภาพ</li>
        </ol>
    </section>
    <!-- Top menu -->

    <?php echo $this->session->flashdata('msginfo'); ?>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">จัดการแกลอรี่รูปภาพ</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6">

                            <a class="btn btn-default" href="" role="button"><i class="fa fa-fw fa-refresh"></i> รายการกิจกรรม</a>
                            <a class="btn btn-info" href="<?php echo base_url('gallery/newdata'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มภาพกิจกรรมใหม่</a>
                        </div>
                        <div class="col-sm-6">
                            <div id="" class="dataTables_filter">
                                <form action="" method="GET" name="search">
                                    <label>ค้นหา</label>:<input type="search" name="keyword" class="form-control input-sm" placeholder="ระบุชื่อกิจกรรม"></label>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th  tabindex="0"  rowspan="1" colspan="1" style="width: 20%;">&nbsp;</th>
                                        <th  tabindex="0" rowspan="1" colspan="1">รายละเอียด</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width:  60px;">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>                                 	
                                    <?php foreach ($query as $row): ?>

                                        <tr >
                                            <td>
                                                <div class="thumbnail">
                                                    <?php $thumbnail = empty($row->thumbnail) ? $row->filename : $row->thumbnail; ?>
                                                    <img width="200px" src="<?php echo base_url(); ?>assets/gallery_uploads/<?php echo $thumbnail; ?>" alt="Image 1">
                                                </div>

                                            </td>
                                            <td>
                                                <?php echo $row->title; ?>
                                                <div>จำนวนผู้ชม <?php echo $row->view; ?></div>
                                               
                                                <div>สร้างเมื่อ <?php echo $row->created_date; ?></div>

                                            </td>
                                            <td>
                                                <a class="btn btn-info btn-xs" href="<?php echo site_url("gallery/manage_photo/" . $row->id) ?>" role="button" target="_blank"><i class="fa fa-fw fa-plus"></i> เพิ่มภาพ</a>
                                                <a href="<?php echo site_url("gallery/update/" . $row->id) ?>" class="btn btn-info btn-xs"  role="button"><i class="fa fa-fw fa-edit"></i> แก้ไข</a>
                                                <a href="<?php echo site_url('gallery/confrm/' . $row->id); ?>" class="btn btn-danger btn-xs" role="button"><i class="fa fa-fw fa-trash"></i> ลบข้อมูล</a>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>

                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Total <?php echo $results; ?> entries</div>
                        </div>
                        <div class="col-sm-7">
                            <div id="example1_paginate" class="dataTables_paginate paging_simple_numbers">
                                <?php echo $links; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->          
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


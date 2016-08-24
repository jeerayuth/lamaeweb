
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            สไลด์โชว์
            <small>สไลด์โชว์ภาพสำหรับอัพโหลดภาพเพื่อนำเสนอภาพลักษณ์หน่วยงาน</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active">สไลด์โชว์</li>
        </ol>
    </section>
    <!-- Top menu -->

    <?php echo $this->session->flashdata('msginfo'); ?>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">จัดการสไลด์โชว์รูปภาพ</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6">

                            <a class="btn btn-default" href="" role="button"><i class="fa fa-fw fa-refresh"></i> รายการสไลด์โชว์</a>
                            <a class="btn btn-info" href="<?php echo base_url('slideshow/newdata'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มภาพสไลด์โชว์ใหม่</a>
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
                                        <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 70%;">&nbsp;</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">รายละเอียด</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>                                 	
                                    <?php foreach ($query as $row): ?>

                                        <tr >
                                            <td>
                                                <div class="thumbnail">                          
                                                    <img width = "40%" height="25%" src="<?php echo base_url(); ?>assets/slideshow_uploads/<?php echo $row->filename; ?>" alt="Image 1">
                                                </div>

                                            </td>
                                            <td>
                                                <?php echo $row->title; ?>                  
                                                <div>สร้างเมื่อ <?php echo $row->created_date; ?></div>
                                                <div>แสดงผลลำดับที่ <?php echo $row->order; ?></div>
                                                 <div>สถานะ <?php echo $row->visible; ?></div>
                                                  <a href="<?php echo site_url("slideshow/update/" . $row->id) ?>" class="btn btn-info btn-xs"  role="button"><i class="fa fa-fw fa-edit"></i> แก้ไข</a>
                                                <a href="<?php echo site_url('slideshow/confrm/' . $row->id); ?>" class="btn btn-danger btn-xs" role="button"><i class="fa fa-fw fa-trash"></i> ลบข้อมูล</a>

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


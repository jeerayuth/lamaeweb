<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ผู้ใช้งาน
            <small>จัดการผู้ใช้งานเว็บไซต์</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('member'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active">ผู้ใช้งาน</li>
        </ol>
    </section>
    <!-- Top menu -->
    <?php echo $this->session->flashdata('msginfo'); ?>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">ตารางข้อมูล</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-8">
                            <a class="btn btn-default" href="<?php echo base_url('member'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> รายชื่อผู้ใช้</a>
                            <a class="btn btn-info" href="<?php echo base_url('member/newdata'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มผู้ใช้ใหม่</a>


                        </div>
                        <div class="col-sm-4">
                            <div id="" class="dataTables_filter">
                                <form action="" method="GET" name="search">
                                    <label>ค้นหา</label>:<input type="search" name="keyword" class="form-control input-sm" placeholder="ระบุขื่อผู้ใช้งาน"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">                                     
                                        <th  tabindex="0"  rowspan="1" colspan="1" >ชื่อล็อกอิน</th>                                                
                                        <th  tabindex="0"  rowspan="1" colspan="1" >ชื่อ-สกุล</th>
                                        <th tabindex="0"  rowspan="1" colspan="1" >อีเมล์</th>

                                        <th  tabindex="0" rowspan="1" colspan="1" style="width:  80px;">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($query as $row): ?>                                                               
                                        <tr role="row">                  

                                            <td><?php if($row->visible!=0){ echo $row->username;}else{echo '<strike>'.$row->username.'</strike>';} ?></td>
                                            <td><?php if($row->visible!=0){echo $row->display_name;}else{ echo '<strike>'.$row->display_name.'</strike>';} ?></td>
                                            <td><?php if($row->visible!=0){echo $row->email;}else{echo '<strike>'.$row->email.'</strike>';} ?></td>
                                            <td>
                                                <a class="btn btn-primary btn-xs" href="<?php echo base_url('member/update/' . $row->id); ?>" role="button"><i class="fa fa-fw fa-edit"></i> แก้ไขข้อมูล</a>                               
                                              
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
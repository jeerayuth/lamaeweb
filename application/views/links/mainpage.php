<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            จัดการระบบลิงค์เว็บไซต์
            <small>จัดการระบบลิงค์เว็บไซต์</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  base_url('pages'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active">ลิงค์เว็บไซต์</li>
        </ol>
    </section>
    <!-- Top menu -->
    <?php echo $this->session->flashdata('msginfo'); ?>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">จัดการลิงค์เว็บไซต์</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6">
                           
                            <a class="btn btn-default" href="<?php echo  base_url('links'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                            <a class="btn btn-info" href="<?php echo base_url('links/newdata'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มลิงค์ใหม่</a>
                        </div>
                        <div class="col-sm-6">
                            <div id="" class="dataTables_filter">
                            <form action="" method="GET" name="search">
                            	<label>ค้นหา</label>:<input type="search" name="keyword" class="form-control input-sm" placeholder="ค้นหา"></label>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th  tabindex="0"  rowspan="1" colspan="1" style="width: 30%;">ชื่อหน่วยงาน</th>                               
                                         <th  tabindex="0"  rowspan="1" colspan="1" style="width: 50%;">ลิงค์เว็บไซต์</th>
                                       <th  tabindex="0" rowspan="1" colspan="1" style="width: 100px;">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($query as $row): ?>  
                                        <tr role="row">
                                            <td>
                                            <?php echo  $row->name; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo  $row->link; ?>" target="_blank"><?php echo  $row->link; ?></a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-xs" href="<?php echo base_url('links/edit/' . $row->id); ?>" role="button"><i class="fa fa-fw fa-edit"></i> แก้ไขข้อมูล</a>
                                                   <?php
                                                $userData = $this->session->all_userdata();
                                                if ($userData["permission"] == 2) {
                                                    ?>
                                            	<a class="btn btn-danger btn-xs" href="<?php echo  base_url('links/confrm/'.$row->id); ?>" role="button"><i class="fa fa-fw fa-trash"></i> ลบข้อมูล</a>
                                                 <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                      <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Total <?php echo  $results; ?> entries</div>
                        </div>
                        <div class="col-sm-7">
                            <div id="example1_paginate" class="dataTables_paginate paging_simple_numbers">
                              
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
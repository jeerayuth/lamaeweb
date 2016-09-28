<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            เอกสาร
            <small>จัดการเอกสารต่างๆให้ตรงตามหมวดหมู่ เพื่อความง่ายต่อการเข้าถึงของผู้ใช้งาน</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('document'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active">เอกสาร</li>
        </ol>
    </section>
    <!-- Top menu -->
    <?php echo $this->session->flashdata('msginfo'); ?>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">จัดการเอกสารดาวน์โหลด</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-8">
                            <a class="btn btn-default" href="<?php echo base_url('document'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> รายการไฟล์</a>
                            <a class="btn btn-info" href="<?php echo base_url('document/newdata'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มไฟล์</a>
                           
                               <?php
                        $userData = $this->session->all_userdata();
                        if ($userData["permission"] == 2) { ?>
                            <a class="btn btn-info" href="<?php echo base_url('categorie'); ?>" role="button"><i class="fa fa-fw fa-info-circle"></i> รายการหมวดหมู่</a>
                            
                          
                            <a class="btn btn-info" href="<?php echo base_url('categorie/newdata'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มหมวดหมู่</a>
   <?php
                        }
                        ?>
                            
                        </div>
                        <div class="col-sm-4">
                            <div id="" class="dataTables_filter">
                                <form action="" method="GET" name="search">
                                    <label>ค้นหา</label>:<input type="search" name="keyword" class="form-control input-sm" placeholder="ระบุหัวข้อเอกสาร"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th  tabindex="0"  rowspan="1" colspan="1" style="width: 70px;">รหัสเอกสาร</th>
                                        <th  tabindex="0"  rowspan="1" colspan="1" style="width: 200px;">ชื่อเอกสาร</th>             
                                        <th  tabindex="0"  rowspan="1" colspan="1" style="width: 100px;">แหล่งเก็บ</th>                               
                                        <th  tabindex="0"  rowspan="1" colspan="1" style="width: 100px;">หมวดหมู่</th>
                                        <th  tabindex="0"  rowspan="1" colspan="1" style="width: 100px;">ผู้ชม</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width:  80px;">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($query as $row): ?>  
                                        <tr role="row">
                                            <td>
                                                <?php echo $row->document_code; ?>
                                            </td>
                                            <td>
                                                    <a href="<?php echo base_url('document/edit/' . $row->id); ?>"><?php echo $row->topic; ?></a>
                                                    <br/>สร้างโดย: <?php echo $row->display_name;?><br/>
                                                    แก้ไขล่าสุด: <?php echo date('d/m/Y', strtotime($row->modified_date)); ?>
                                                    <div>
                                                    <a class="btn btn-info btn-xs" target="_blank" href="<?php echo base_url('assets/doc_uploads/' . $row->filename); ?>" role="button"><i class="fa fa-fw  fa-file-text"></i> ไฟล์เอกสาร</a>
                                                    </div>
                                            </td>
                               
                                            <td><?php echo $row->store; ?></td>
                                      
                                            <td><?php echo $row->name; ?></td>
                                            <td><?php echo $row->view; ?></td>
                                            <td>
                                                <a class="btn btn-info btn-xs" href="<?php echo base_url('document/edit/' . $row->id); ?>" role="button"><i class="fa fa-fw fa-edit"></i> แก้ไขข้อมูล</a>
                                                     <?php
                                                $userData = $this->session->all_userdata();
                                                if ($userData["permission"] == 2) {
                                                    ?>
                                                <a class="btn btn-danger btn-xs" href="<?php echo base_url('document/confrm/' . $row->id); ?>" role="button"><i class="fa fa-fw fa-trash"></i> ลบข้อมูล</a>
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
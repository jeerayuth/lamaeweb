<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ข่าวสาร
            <small>จัดการข่าวสารต่างๆให้ตรงตามหมวดหมู่ เพื่อความง่ายต่อการเข้าถึงของผู้ใช้งาน</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('news'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active">ข่าวสาร</li>
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
                            <a class="btn btn-default" href="<?php echo base_url('news'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> รายการข่าวสาร</a>
                            <a class="btn btn-info" href="<?php echo base_url('news/newdata'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข่าวใหม่</a>
                            <a class="btn btn-info" href="<?php echo base_url('news_categorie'); ?>" role="button"><i class="fa fa-fw fa-info-circle"></i> รายการหมวดหมู่</a>
                            <a class="btn btn-info" href="<?php echo base_url('news_categorie/newdata'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มหมวดหมู่</a>

                        </div>
                        <div class="col-sm-4">
                            <div id="" class="dataTables_filter">
                                <form action="" method="GET" name="search">
                                    <label>ค้นหา</label>:<input type="search" name="keyword" class="form-control input-sm" placeholder="ระบุขื่อข่าวสาร"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">                                     
                                        <th  tabindex="0"  rowspan="1" colspan="1" >เรื่อง</th>                                                
                                        <th  tabindex="0"  rowspan="1" colspan="1" style="width: 100px;">สร้างโดย</th>
                                        <th  tabindex="0"  rowspan="1" colspan="1" style="width: 100px;">หมวดหมู่</th>
                                        <th  tabindex="0"  rowspan="1" colspan="1" style="width: 100px;">ผู้ชม</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width:  80px;">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($query as $row): ?>                                                               
                                        <tr role="row">                  
                                            <td>
                                                <div><a href="<?php echo base_url('news/edit/' . $row->id); ?>"><?php echo $row->topic; ?></a></div>
                                                <div>อัพเดตล่าสุด <?php echo $row->modified_date; ?></div>
                                                <div>
                                                    <a class="btn btn-info btn-xs" target="_blank" href="<?php echo base_url('assets/news_uploads/' . $row->filename); ?>" role="button"><i class="fa fa-fw  fa-file-text"></i> เอกสารแนบ</a>
                                                </div>
                                            </td>                                 
                                            <td><?php echo $row->display_name; ?></td>
                                            <td><?php echo $row->name; ?></td>
                                            <td><?php echo $row->view; ?></td>
                                            <td>
                                                <a class="btn btn-primary btn-xs" href="<?php echo base_url('news/edit/' . $row->id); ?>" role="button"><i class="fa fa-fw fa-edit"></i> แก้ไขข้อมูล</a>                               
                                                <a class="btn btn-danger btn-xs" href="<?php echo base_url('news/confrm/' . $row->id); ?>" role="button"><i class="fa fa-fw fa-trash"></i> ลบข้อมูล</a>
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
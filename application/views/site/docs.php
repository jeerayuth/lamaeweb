<div class="col-md-9">


  <div class="magazine-news">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><font color="red">เอกสารดาวน์โหลด</font>
                        <span class="badge pull-right"></span>
                    </div>
                    <!-- Table -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th align="center">วันที่อัพโหลดล่าสุด</th>
                                <th>ชื่อรายการโหลด</th>
                                <th>ประเภท</th>
                                <th>จำนวนผู้เข้าชม</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $row) { ?>
                                <tr>
                                    <td>#</td>
                                    <td><img src="<?php echo base_url(); ?>assets/images/date.png">  <?php echo date('d/m/Y', strtotime($row->modified_date)); ?></td>
                                    <td><a target="_blank" href="<?php echo site_url('site'); ?>/read_doc/<?php echo $row->id; ?>"><?php echo $row->topic; ?></a></td>
                                    <td><?php echo $row->name; ?></td>
                                    <td><?php echo $row->view; ?></td>
                                   <!-- <td><span class="label rounded label-success">1</span></td>-->
                                 
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    

 
</div>
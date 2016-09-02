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
                                <th>จำนวนครั้ง</th>
                                <th align="center">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $row) { ?>
                                <tr>
                                    <td>#</td>
                                    <td><img src="<?php echo base_url(); ?>assets/images/date.png">  <?php echo date('d/m/Y', strtotime($row->modified_date)); ?></td>
                                    <td><?php echo $row->topic; ?></td>
                                    <td><?php //echo $row->name; ?></td>
                                    <td><?php //echo $row->download; ?></td>
                                   <!-- <td><span class="label rounded label-success">1</span></td>-->
                                    <td>
                                        <span class="label pull-right rounded btn-primary">                              
                                            <a target="_blank" href="<?php echo base_url('assets/doc_uploads/' . $row->filename); ?>" role="button"> <img src="<?php echo base_url(); ?>assets/images/load2.png"> ดาวน์โหลด</a>
                                        </span>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    

 
</div>
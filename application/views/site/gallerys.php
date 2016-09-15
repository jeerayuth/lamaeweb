<div class="col-md-9">


  <div class="magazine-news">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><font color="red">ภาพกิจกรรม</font>
                        <span class="badge pull-right"></span>
                    </div>
                    <!-- Table -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>ชื่อกิจกรรม</th>
                                <th>วันที่อัพโหลด</th>
                                <th>อัพโหลดโดย</th>
                                <th>จำนวนผู้เข้าชม</th>
                                <th align="center">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $row) { ?>
                                <tr>
                                    <td>
                                        
                                        <?php $thumbnail = empty($row->thumbnail) ? $row->filename : $row->thumbnail; ?>
                                                    <img width="120px" src="<?php echo base_url(); ?>assets/gallery_uploads/<?php echo $thumbnail; ?>" alt="Image 1">
                                    </td>

                                    <td><a target="_blank" href="<?php echo site_url('site'); ?>/read_gallery/<?php echo $row->id; ?>"><?php echo $row->title; ?></a></td>
                                    <td><?php echo $row->created_date; ?></td>
                                    <td><?php echo $row->display_name; ?></td>
                                    <td><?php echo $row->view; ?></td>
                           
                       
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                    
                    <br/>
                </div>
            </div>
        </div>
    </div>
    

 
</div>
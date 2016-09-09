<div class="col-md-9">


    <div><h3>เรื่อง: <?php echo $result->topic ;?></h3></div>
    <div>โดย: <?php echo $result->display_name ;?></div>
    <div>วันที่อัพโหลดไฟล์: <?php echo $result->created_date ;?></div>
    <div>ปรับปรุงข้อมูลล่าสุด: <?php echo $result->modified_date ;?></div>
    <div>จำนวนผู้เข้าชม: <?php echo $result->view ;?></div>
    
    <div><h4>อธิบายเกี่ยวกับไฟล์ที่บริการโหลด : </h4></div>
    <div><?php echo $result->description;?></div>
    <div>[<a target="_blank" href="<?php echo base_url('assets/doc_uploads/' . $result->filename); ?>">ดาวน์โหลดไฟล์แนบ</a>]</div>

</div>
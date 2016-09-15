<style type="text/css">
    table { 
        border-spacing: 10px;
        border-collapse: separate;

        body{font:12px/1.2 Verdana, sans-serif; padding:0 10px;}
        a:link, a:visited{text-decoration:none; color:#416CE5; border-bottom:1px solid #416CE5;}
        h2{font-size:13px; margin:15px 0 0 0;}

    }

</style>

<div class="col-md-9">

    <div class="panel panel-info" style="padding:15px;border-top-width:2px; border-right-width:2px; border-bottom-width:2px; border-left-width:2px;">
        <div><h3>เรื่อง: <?php echo $result->title; ?></h3></div>
        <div>โดย: <?php echo $result->display_name; ?></div>
        <div>จำนวนผู้เข้าชม: <?php echo $result->view; ?></div>
        <div>วันที่โพสต์: <?php echo $result->created_date; ?></div>
        <div>ปรับปรุงข้อมูลล่าสุด: <?php echo $result->modified_date; ?></div>
        <div><?php echo $result->description; ?></div>
    </div>  

    <center>
    <table border="0" >
        <tr>
            <td colspan = "4">
                <h3>คลิกที่ภาพเพื่อดูภาพแบบ slide show</h3>
            </td>
        </tr>
        <tr>

            <?php
            $intRows = 0;
            ?>

            <?php foreach ($result_sub as $row): ?>
                <?php
                echo "<td>";
                $intRows++;
                ?>
            <center>
                <a href="<?php echo base_url(); ?>assets/gallery_sub_uploads/<?php echo $row->url; ?>" class="galery" title="<?php echo $row->url; ?>">
                    <img  width = "150" height="120" src ="<?php echo base_url(); ?>assets/gallery_sub_uploads/<?php echo $row->url; ?>" />
                </a>
            </center>
            <?php
            echo"</td>";
            if (($intRows) % 4 == 0) {
                echo"</tr>";
            }
            ?>

        <?php endforeach; ?>
        </tr></table>
    </center>

</div>


<script type="text/javascript">

    window.onload = function () {
        $(".galery").colorbox({rel: 'galery',slideshow:true,transition:"none", width:"75%", height:"75%"});
    }

</script>



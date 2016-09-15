<style type="text/css">
    table { 
        border-spacing: 15px;
        border-collapse: separate;
    }

 
    .photo {  
        margin: -10px;  
        position: relative;  
        width: 180px;  
        height: 130px;  
        float: left;  
    }  
    .photo img {  
        background: #fff;  
        border: solid 1px #ccc;  
        padding: 4px;  
    }  
    .photo span {  
        width: 20px;  
        height: 18px;  
        display: block;  
        position: absolute;  
        top: 12px;  
        left: 12px;  
       // background: url(images/digg-style.gif) no-repeat;  
    }  
    .photo a {  
        text-decoration: none;  
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
                    <h5>คลิกที่ภาพเพื่อดูภาพแบบ slide show</h5>
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
                    <div class="photo ">  
                    <a href="<?php echo base_url(); ?>assets/gallery_sub_uploads/<?php echo $row->url; ?>" class="galery" title="<?php echo $row->url; ?>">
                        <img  width = "150" height="120" src ="<?php echo base_url(); ?>assets/gallery_sub_uploads/<?php echo $row->url; ?>" />
                    </a>
                    </div>
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
        $(".galery").colorbox({rel: 'galery', slideshow: true, transition: "none", width: "75%", height: "75%"});
    }

</script>



 <?php
        // Load Model
        $CI = & get_instance();
          // config ต่างๆ
        $this->load->model('Configs_model', 'configs');
        
          $configs = $CI->configs->find(1);
     ?>

<div class="col-md-9">

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">ติดต่อเรา</h1>
        </div>
    </div><!--/breadcrumbs-->


    <div class="container content">
        <div class="row margin-bottom-60">
            <div class="col-md-5 col-sm-5">
                <!-- Google Map -->
                <div id="map" class="height-450">
                    <iframe src="<?php echo $configs->google_map; ?>" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
  
                <!-- End Google Map -->
            </div>
            <div class="col-md-7 col-sm-7">

                <!-- Contacts -->
                <h3>ที่อยู่ติดต่อ</h3>
                <ul class="list-unstyled who">
                    <li><a href="#"><i class="fa fa-home"></i><?php echo $configs->name; ?>, <br/><?php echo $configs->address; ?></i></a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i><?php echo $configs->email; ?></a></li>
                    <li><a href="#"><i class="fa fa-phone"></i><?php echo $configs->telephone; ?></a></li>
                    <li><a href="#"><i class="fa fa-globe"></i><?php echo $configs->website; ?></a></li>
                </ul>

                <hr>

                <!-- Business Hours -->
              <!--  <h3>เบอร์โทรติดต่อภายในหน่วยงาน</h3>
                <ul class="list-unstyled">
                    <li><strong>Monday-Friday:</strong> 10am to 8pm</li>
                    <li><strong>Saturday:</strong> 11am to 3pm</li>
                    <li><strong>Sunday:</strong> Closed</li>
                </ul>
                -->
                
            </div>
        </div>

      
    </div><!--/container-->
    <!--=== End Content Part ===-->


</div>


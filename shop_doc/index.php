
  <?php
  ob_start();
  session_start();
  if(isset($_SESSION["id"])){
  include_once "headerafter.php";
}
else
    include_once "headerbefore.php";
  ?>

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Best quality
                                pillow</h1>
                            <p>Seamlessly empower fully researched 
                                growth strategies and interoperable internal</p>
                            <a href="product_list.php" class="btn_1">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_img">
            <img src="img/banner.png" alt="#" class="img-fluid">
            <img src="img/banner_pattern.png " alt="#" class="pattern_img img-fluid">
        </div>
    </section>
    <hr>
    
    <!-- banner part start-->

    <!-- categories list start-->
    <section class="single_product_list"style="padding: 190px 190px 50px">
       
        <div class="container">
            <div class="title" >
                <div style="padding-left: 120px; margin-left: 200px;"><h2 style="color: #6b4d69">Categories</h2></div>
              <br> <hr style="margin-right: 234px;">
            </div> 
            <br>
           <div class="row" >
           <?php
                include_once "classes/categories.php";
                $cat=new categories();
                $rs=$cat->GetAll();
              while($row=mysqli_fetch_assoc($rs))
              {
            ?>
                <div class="col-lg-4 col-md-6" style="margin-bottom: 25px;">
                    <div class="item">
                   <a href="single-product.html">  <center><h3  style="color: #cc6ec4"> <?php echo($row["catname"]); ?> </h3><center></a>
                      <a href="single-product.html">  <img src="image/catimg/<?php echo($row["cat.no"]); ?>.jpg" alt="img" class="img-fluid" width="360" hight="252"></a>

                  
                    </div>
                </div>
                <?php
              }
                ?>
            </div>
            
        </div>
    </section>
    <!-- categories list end-->


    <!-- trending item start-->
    <section class="single_product_list" style="padding: 190px 190px 50px">
       
       <div class="container">
           <div class="title" >
           <div style="padding-left: 120px; margin-left: 200px;"><h2 style="color: #6b4d69">Tranding Items</h2></div>
              <br> <hr style="margin-right: 234px;">
            </div> 
            <div class="row" >
           
            <?php
                include_once "classes/products.php";
                $pro=new products();
                $rs=$pro->GetAll();
              while($row=mysqli_fetch_assoc($rs))
              {
            ?>
                <div class="col-lg-4 col-md-6" style="margin-bottom: 25px;">
                    <div class="item">
                   <a href="single-product.html"> <img src="image/proimg/<?php echo($row["prono"]); ?>.jpg" alt="img" class="img-fluid" style="width:300px;"></a>
                    
                   <a href="single-product.html"> <center><h3  style="color: #cc6ec4">   <?php echo($row["proname"]); ?> </h3></center></a> </h3>
                   <span style="color: #cc6ec4">LE<?php echo($row["proprice"]); ?>  </span>/ <a href="#"  style="color: #6b4d69">Buy Now</a>
                      
                    </div>
                </div>
                <?php
              }
                ?>
            </div>
            
        </div>
    </section>
    <!-- trending item end-->

    <!-- client review part here -->
    <section class="client_review">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="client_review_slider owl-carousel">
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="img/client.png" alt="#">
                            </div>
                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                            <h5>- Micky Mouse</h5>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="img/client_1.png" alt="#">
                            </div>
                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                            <h5>- Micky Mouse</h5>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="img/client_2.png" alt="#">
                            </div>
                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                            <h5>- Micky Mouse</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client review part end -->


    <!-- feature part here -->
    <section class="feature_part section_padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="feature_part_tittle">
                        <h3>Credibly innovate granular
                        internal or organic sources
                        whereas standards.</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_content">
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_1.svg" alt="#">
                        <h4>Credit Card Support</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_2.svg" alt="#">
                        <h4>Online Order</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_3.svg" alt="#">
                        <h4>Free Delivery</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_4.svg" alt="#">
                        <h4>Product with Gift</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature part end -->

    <!-- subscribe part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>Get promotions & updates!</h2>
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                        <div class="subscribe_form">
                            <input type="email" placeholder="Enter your mail">
                            <a href="#" class="btn_1">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe part end -->

    <?php 
    include_once "contact.php";
    ?>

  <?php
  include_once "footer.php";
  ?>

    
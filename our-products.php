 <?php 
 include_once('admin/php/function.php');

 include_once('php/header.php');


 $select = $mysqli->prepare("SELECT * FROM product order by id DESC");
 $select->execute();
 $selects = $select->get_result();

 ?>

 <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/18.jpg');height: 100px;">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>Shop</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shop</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Shop Area Start ##### -->
  <section class="shop-area section-padding-0-100">
    <div class="container">

      <div class="row">
        <!-- Shop Filters -->
        <div class="col-12">
          <div class="shop-filters mb-30 d-flex align-items-center justify-content-between">
            <!-- Product Show -->
            <div class="product-show">
              <h6>Showing 1–2 of 12 results</h6>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Shop Sidebar Area -->
        <div class="col-12 col-md-4 col-lg-3">
         
          <!-- Single Widget Area -->
          <div class="single-widget-area">
            <!-- Title -->
            <h5 class="widget-title">Price</h5>
            <!-- Cata List -->
            <ul class="cata-list shop-page">
              <li><a href="#">#0.00 - #10.00</a></li>
              <li><a href="#">#10.00 - #50.00</a></li>
              <li><a href="#">#50.00 - #100.00</a></li>
              <li><a href="#">#100.00+</a></li>
            </ul>
          </div>

          <!-- Single Widget Area -->
          <div class="single-widget-area">
            <!-- Title -->
            <h5 class="widget-title">Tags</h5>
            <!-- Tags -->
            <ul class="famie-tags">
              <li><a href="#">All product</a></li>
              <li><a href="#">Freshy Fruit</a></li>
              <li><a href="#">Sweet Corn</a></li>
              <li><a href="#">Chicken</a></li>
              <li><a href="#">Organic</a></li>
              <li><a href="#">Meat</a></li>
            </ul>
          </div>
        </div>
        <!-- Shop Products Area -->
        <div class="col-12 col-md-8 col-lg-9">
          <div class="row">
            <?php
             while ($row = $selects->fetch_array()) { ?>
              <!-- Single Product Area -->
              <div class="col-12 col-sm-6 col-lg-3">
                <a href="product.php?p_id=<?php echo $row['id']; ?>">
                  <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Product Thumbnail -->
                    <div class="product-thumbnail">
                      <img src="img/product/<?php echo $row['file']; ?>" alt="" style="height: 200px;">
                      <!-- Product Tags -->
                      <span class="product-tags">Hot</span>
                    </div>
                    <!-- Product Description -->
                    <div class="product-desc text-center pt-4">
                      <a href="#" class="product-title"><?php echo $row['name']; ?></a>
                    </div>
                  </div>
                </a>
              </div>
            <?php  }
             ?>
          </div>
          <!-- Pagination -->
          <nav>
            <ul class="pagination mb-0 mt-50">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </section>
  <!-- ##### Shop Area End ##### -->



 <?php 
 include_once('php/footer.php');

 ?>
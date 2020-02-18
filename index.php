<?php 
 include_once('admin/php/function.php');

 include_once('php/header.php');

 $select = $mysqli->prepare("SELECT * FROM product order by id DESC LIMIT 4");
 $select->execute();
 $selects = $select->get_result();

 ?>
  <!-- ##### Hero Area Start ##### -->
  <div class="hero-area">
    <div class="welcome-slides owl-carousel">

      <!-- Single Welcome Slides -->
      <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/1.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-10">
              <div class="welcome-content">
                <h2 data-animation="fadeInUp" data-delay="200ms">The hearth of the farm is the true center of our universe.</h2>
                <<!-- p data-animation="fadeInUp" data-delay="400ms">Mauris vestibulum dolor nec lacinia facilisis. Fusce interdum sagittis volutpat. Praesent eget varius ligula, malesuada eleifend purus. Aenean euismod est at mauris mollis ultricies.
                  Morbi arcu mi, dictum eu luala, dapibus
                  interdum mollis.</p> -->
                <a href="#" class="btn famie-btn mt-4" data-animation="bounceInUp" data-delay="600ms">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Welcome Slides -->
      <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/7.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-10">
              <div class="welcome-content">
                <h2 data-animation="fadeInDown" data-delay="200ms">The hearth of the farm is the true center of our universe.</h2>
                <!-- <p data-animation="fadeInDown" data-delay="400ms">Mauris vestibulum dolor nec lacinia facilisis. Fusce interdum sagittis volutpat. Praesent eget varius ligula, malesuada eleifend purus. Aenean euismod est at mauris mollis ultricies.
                  Morbi arcu mi, dictum eu luala, dapibus
                  interdum mollis.</p> -->
                <a href="#" class="btn famie-btn mt-4" data-animation="bounceInDown" data-delay="600ms">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- ##### Hero Area End ##### -->

  <!-- ##### Famie Benefits Area Start ##### -->
  <section class="famie-benefits-area section-padding-100-0 pb-5">
    <div class="container">

      <div class="row justify-content-center">
        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="100ms">
            <img src="img/core-img/digger.png" alt="">
            <h5>Best Services</h5>
          </div>
        </div>

        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="300ms">
            <img src="img/core-img/windmill.png" alt="">
            <h5>Farm Experiences</h5>
          </div>
        </div>

        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="500ms">
            <img src="img/core-img/cereals.png" alt="">
            <h5>100% Natural</h5>
          </div>
        </div>

        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="700ms">
            <img src="img/core-img/tractor.png" alt="">
            <h5>Farm Equipment</h5>
          </div>
        </div>

        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="900ms">
            <img src="img/core-img/sunrise.png" alt="">
            <h5>Organic food</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Famie Benefits Area End ##### -->

  <!-- ##### Our Products Area Start ##### -->
  <section class="our-products-area section-padding-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center">
            <p>Featured Products</p>
            <h2><span>Our Product</span> Are Highest Quality</h2>
            <img src="img/core-img/decor2.png" alt="">
          </div>
        </div>
      </div>

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
      <div class="row">
        <div class="col-12">
          <div class="gotoshop-btn text-center wow fadeInUp" data-wow-delay="900ms">
            <a href="our-products.php" class="btn famie-btn">Go to Store</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Our Products Area End ##### -->

  <!-- ##### Newsletter Area Start ##### -->
  <section class="newsletter-area section-padding-100 bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/8.jpg');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="newsletter-content">
            <!-- Section Heading -->
            <div class="section-heading white text-center">
              <p>What we do</p>
              <h2><span>Our Produce</span> Is Mainstay For Us</h2>
              <img src="img/core-img/decor2.png" alt="">
            </div>
            <p class="text-white mb-50 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at diam convallis ligula cursus bibendum sed at enim. Class aptent taciti sociosqu ad litora torquent conubia nostra, per inceptos
              himenaeos.</p>
          </div>
        </div>
      </div>
      <!-- Newsletter Form -->
      <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Enter your email">
            <button type="submit" class="btn famie-btn">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Newsletter Area End ##### -->

  <!-- ##### Testimonial Area Start ##### -->
  <section class="testimonial-area bg-img bg-overlay section-padding-100 jarallax" style="background-image: url('img/bg-img/15.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Testimonial Slides -->
          <div class="testimonial-slides owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide">
              <!-- Testimonial Text -->
              <div class="testi-text d-flex">
                <div class="quote-icon">
                  <img src="img/core-img/quote.png" alt="">
                </div>
                <h5>"Thank you for your organic products. My children like your products and they use for breakfast. We are loving the pure milk, freshly fruit and of course our staple, Brown Rice Bread. Your Gluten Free breads truly make me feel
                  lighter and uplifted. It's the only bread I plan to eat for the rest of my life. I will use them for many years."</h5>
              </div>
              <!-- Testimonial Thumbnail Name -->
              <div class="testimonial-thumbnail-name d-flex align-items-center">
                <div class="testimonial-thumbnail">
                  <img src="img/bg-img/16.jpg" alt="">
                </div>
                <div class="testimonial-name">
                  <h5>Mrs Lara Sullivan</h5>
                  <h6>Customer</h6>
                </div>
              </div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide">
              <!-- Testimonial Text -->
              <div class="testi-text d-flex">
                <div class="quote-icon">
                  <img src="img/core-img/quote.png" alt="">
                </div>
                <h5>"Thank you for your organic products. My children like your products and they use for breakfast. We are loving the pure milk, freshly fruit and of course our staple, Brown Rice Bread. Your Gluten Free breads truly make me feel
                  lighter and uplifted. It's the only bread I plan to eat for the rest of my life. I will use them for many years."</h5>
              </div>
              <!-- Testimonial Thumbnail Name -->
              <div class="testimonial-thumbnail-name d-flex align-items-center">
                <div class="testimonial-thumbnail">
                  <img src="img/bg-img/16.jpg" alt="">
                </div>
                <div class="testimonial-name">
                  <h5>Ajoy Das</h5>
                  <h6>Client</h6>
                </div>
              </div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide">
              <!-- Testimonial Text -->
              <div class="testi-text d-flex">
                <div class="quote-icon">
                  <img src="img/core-img/quote.png" alt="">
                </div>
                <h5>"Thank you for your organic products. My children like your products and they use for breakfast. We are loving the pure milk, freshly fruit and of course our staple, Brown Rice Bread. Your Gluten Free breads truly make me feel
                  lighter and uplifted. It's the only bread I plan to eat for the rest of my life. I will use them for many years."</h5>
              </div>
              <!-- Testimonial Thumbnail Name -->
              <div class="testimonial-thumbnail-name d-flex align-items-center">
                <div class="testimonial-thumbnail">
                  <img src="img/bg-img/16.jpg" alt="">
                </div>
                <div class="testimonial-name">
                  <h5>Akash Khan</h5>
                  <h6>Customer</h6>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Testimonial Area End ##### -->
>


 <?php 
 include_once('php/footer.php');

 ?>
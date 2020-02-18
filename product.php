 <?php 
 include_once('admin/php/function.php');
 
 include_once('php/header.php');




 if (isset($_GET['p_id'])) {
   $select = $mysqli->prepare("SELECT * FROM product WHERE id = ?");
   $select->bind_param('i', $_GET['p_id']);
   $select->execute();
   $selects = $select->get_result();
   $res = $selects->fetch_assoc();
 }else{ ?>
   <script type="text/javascript"> window.location = "./" </script>
<?php }

 ?>
 <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/18.jpg');height: 100px;">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>Order Products</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Order Product</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Shop Area Start ##### -->
  <section class="shop-area section-padding-0-100">
    <div class="container">

      <div class="row">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body text-center">
              <img src="img/product/<?php echo $res['file']; ?>" style="width: 70%;height: 350px;" class="card-img">
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Product Details</h5>
            </div>
            <div class="card-body">
              <h2><span>Name: </span><?php echo $res['name']; ?></h2>
              <h4><span>Mobile: </span><?php echo $res['phone']; ?></h4>
              <h5><span>Address: </span><?php echo $res['address']; ?></h5>
              <span>Description: </span><p class="text-left"><?php echo $res['description']; ?>.</p>
              <!-- <form method="POST">
                <?php 

                  if (isset($_POST['orderProduct'])) {
                      $orderFrom = $_POST['orderFrom'];
                      $orderPhone = $_POST['orderPhone'];
                      $orderQty = $_POST['orderQty'];
                      $orderDescription = $_POST['orderDescription'];
                      $orderName = $_POST['orderName'];
                      $orderPrice = $_POST['orderPrice'];

                      $insert = $mysqli->prepare("INSERT INTO ordertable( orderFrom, orderPhone, orderDescription, orderProduct, orderQuantity, orderPrice) VALUES (?,?,?,?,?,?)");
                      $insert->bind_param("ssssis", $orderFrom, $orderPhone, $orderDescription, $orderName, $orderQty, $orderPrice);
                      if ($insert->execute()) { ?>
                        <div class="alert alert-success">
                          <p>Order Recieved</p>
                        </div>
                      <?php }else{ ?>
                        <div class="alert alert-danger">
                          <p>PAn error occured.......</p>
                        </div>
                      <?php }   
                  }
                  

                ?>
                <div class="form-group">
                  <label>Enter Full Name</label>
                  <input type="text" name="orderFrom" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Enter Mobile Number</label>
                  <input type="text" name="orderPhone" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Enter Quantity</label>
                  <input type="number" name="orderQty" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Order Description</label>
                  <textarea class="form-control" name="orderDescription" required></textarea>
                </div>
                <input type="hidden" name="orderName" value="<?php echo $res['name']; ?>">
                <input type="hidden" name="orderPrice" value="<?php echo $res['price']; ?>">
                <input type="hidden" name="orderProduct">
                
                
                
                <div class="form-group">
                  <button type="submit" class="btn btn-outline-success btn-block">Submit Order</button>
                </div>
              </form> -->
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- ##### Shop Area End ##### -->



 <?php 
 include_once('php/footer.php');

 ?>
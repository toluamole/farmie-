<?php
 include_once('php/function.php');
 logged_in();
 include_once('php/header.php');

 $select = $mysqli->prepare("SELECT * FROM product order by id DESC");
 $select->execute();
 $selects = $select->get_result();
 ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Products</h1>
      </div>

      <!-- Content Row -->
      <div class="row">
        <?php

         while ($row = $selects->fetch_array()) { ?>
          <!-- Each Product -->
          <div class="col-md-3 mb-4">
            <div class="card border-left-primary shadow h-100">
              <div class="card-body">
                <img src="../img/product/<?php echo $row['file']; ?>" style="height: 200px;" class="card-img img-fluid"> 
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2 mt-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?php echo $row['name']; ?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Each Product --> 
        <?php  }
         ?>
    
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- End of Main Content -->
<?php 
include_once('php/footer.php');
?>
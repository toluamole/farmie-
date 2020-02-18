<?php
 include_once('php/function.php');
 logged_in();
 include_once('php/header.php');





if (isset($_GET['edit']) && !empty($_GET['edit'])) {
  $select = $mysqli->prepare("SELECT * FROM product WHERE id = ? LIMIT 1");
  $select->bind_param("i", $_GET['edit']);
  $select->execute();
  $ress = $select->get_result();
  $rowss = $ress->fetch_assoc();
  // print_r($rowss);
}


 if (isset($_POST['addProduct'])) {
    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $productPhone = $_POST['productPhone'];
    $productAddress = $_POST['productAddress'];

    if (!empty($productName) && !empty($productDescription)) {
        $productImage    = $_FILES['productImage']['name'];
        $productImageTmp = $_FILES['productImage']['tmp_name'];
        $uploadImg = move_uploaded_file($productImageTmp, "../img/product/".$productImage );
        if ($uploadImg) {
          $insertImg = $mysqli->prepare("INSERT INTO product SET name = ?, phone = ?, address = ?, description = ?, file = ?");
          $insertImg->bind_param("sssss", $productName, $productPhone, $productAddress, $productDescription, $productImage);
          if ($insertImg->execute()) { ?>
            <div class="alert alert-success">
              <p>Product Uploaded</p>
            </div>
         <?php }else{ ?>
            <div class="alert alert-danger">
              <p>An error Occured</p>
            </div>
         <?php }
        }
    }
 }
 

 if (isset($_POST['updateProduct'])) {
    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $productPhone = $_POST['productPhone'];
    $productAddress = $_POST['productAddress'];

     $insertImg = $mysqli->prepare("UPDATE product SET name = ?, phone = ?, address = ?, description = ?, file = ? WHERE id = ?");
        $insertImg->bind_param("sssssi", $productName, $productPhone, $productAddress, $productDescription, $productImage, $_POST['updateProduct']);
        if ($insertImg->execute()) { ?>
          <div class="alert alert-success">
            <p>Product Uploaded</p>
          </div>
       <?php }else{ ?>
          <div class="alert alert-danger">
            <p>An error Occured</p>
          </div>
       <?php }
 }

 ?>


    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Products</h1>
      </div>

      <!-- Content Row -->
      <div class="row offset-2">
      	<div class="col-md-10  p-3">
      		<div class="card">
      			<div class="card-header">
      				<h6>Add Product</h6>
      			</div>
      			<div class="card-body">
      				<form method="POST"  enctype="multipart/form-data">
      					<div class="form-group">
      						<label>Enter Product Name</label>
      						<input type="text" name="productName" class="form-control" value="<?php if ($rowss['name']){
                    echo $rowss['name'];
                  } ?>">
      					</div>
                <div class="form-group">
                  <label>Enter Phone Number</label>
                  <input type="number" name="productPhone" class="form-control" value="<?php if ($rowss['phone']){
                    echo $rowss['phone'];
                  } ?>">
                </div>
                <div class="form-group">
                  <label>Enter Address</label>
                  <textarea class="form-control" name="productAddress"><?php if ($rowss['address']){
                    echo $rowss['address'];
                  } ?></textarea>
                </div>
      					<div class="form-group">
      						<label>Enter Product Description</label>
      						<textarea class="form-control" name="productDescription"><?php if ($rowss['description']){
                    echo $rowss['description'];
                  } ?></textarea>
      					</div>
                <?php if (!isset($_GET['edit'])) { ?>
                  <div class="form-group">
                    <label>Choose Product Image</label>
                    <input type="file" name="productImage" class="form-control">
                  </div>
                  <input type="hidden" name="addProduct">
                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-block">Submit Product</button>
                  </div>
                <?php }else{ ?>
                  <input type="hidden" name="updateProduct" value="<?php if ($rowss['id']){
                    echo $rowss['id'];
                  } ?>">

                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-block">Update Product</button>
                  </div>
                <?php }?>
      				</form>
      			</div>
      		</div>
      	</div>    
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- End of Main Content -->
<?php 
include_once('php/footer.php');
?>
<?php
 include_once('php/function.php');
 logged_in();
 include_once('php/header.php');

 if (isset($_POST['addPlant'])) {
    $PlantName = $_POST['PlantName'];
    $BotanicalName = $_POST['BotanicalName'];
    $PlantingSeason = $_POST['PlantingSeason'];
    $SoilType = $_POST['SoilType'];
    $PlantingRequirements = $_POST['PlantingRequirements'];
    $Kingdom = $_POST['Kingdom'];
    $Phylum = $_POST['Phylum'];
    $Class = $_POST['Class'];
    $Family = $_POST['Family'];
    $Species = $_POST['Species'];
    if (!empty($PlantName) && !empty($BotanicalName)) {
         $insertImg = $mysqli->prepare("INSERT INTO plants SET  PlantName = ?, BotanicalName = ?, PlantingSeason = ?, SoilType = ?, PlantingRequirements = ?, Kingdom = ?, Phylum = ?, Class = ?, Family = ?, Species = ?");
          $insertImg->bind_param("ssssssssss", $PlantName, $BotanicalName, $PlantingSeason, $SoilType, $PlantingRequirements, $Kingdom, $Phylum, $Class, $Family, $Species);
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
      						<label>Plant Name</label>
      						<input type="text" name="PlantName" class="form-control">
      					</div>
                <div class="form-group">
                  <label>Botanical Name</label>
                  <input type="text" name="BotanicalName" class="form-control">
                </div>
                <div class="form-group">
                  <label>Planting Season</label>
                  <input type="text" name="PlantingSeason" class="form-control">
                </div>
                <div class="form-group">
                  <label>Soil Type</label>
                  <input type="text" name="SoilType" class="form-control">
                </div>
                <div class="form-group">
                  <label>Planting Requirements</label>
                  <input type="text" name="PlantingRequirements" class="form-control">
                </div>
                <div class="form-group">
                  <label>Kingdom</label>
                  <input type="text" name="Kingdom" class="form-control">
                </div>
                <div class="form-group">
                  <label>Phylum</label>
                  <input type="text" name="Phylum" class="form-control">
                </div>
                <div class="form-group">
                  <label>Class</label>
                  <input type="text" name="Class" class="form-control">
                </div>
                <div class="form-group">
                  <label>Family</label>
                  <input type="text" name="Family" class="form-control">
                </div>
                <div class="form-group">
                  <label>Species</label>
                  <input type="text" name="Species" class="form-control">
                </div>
                <input type="hidden" name="addPlant">
      					<div class="form-group">
      						<button type="submit" class="btn btn-outline-primary btn-block">Submit Product</button>
      					</div>
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
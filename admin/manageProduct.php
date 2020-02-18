<?php
 include_once('php/function.php');
 logged_in();
 include_once('php/header.php');

 $select = $mysqli->prepare("SELECT * FROM product order by id DESC");
 $select->execute();
 $selects = $select->get_result();

 if (isset($_GET['delte'])) {
   $del = $mysqli->prepare("DELETE FROM product WHERE id = ?");
   $del->bind_param("i", $_GET['delte']);
   if ($del->execute()) { ?>
     <script type="text/javascript"> window.location = "./manageProduct.php" </script>
   <?php }
  }
 ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Products</h1>
      </div>

      <!-- Content Row -->
      <div class="row table-responsive">
        <table class="table">
          <thead>
            <th>S/N</th>
            <th>Pooduct Name</th>
            <th>Product Phone</th>
            <th>Product Address</th>
            <th>product Description</th>
            <th>Action</th>
          </thead>
          <tbody>
            
         <?php
         $i = 1;
         while ($row = $selects->fetch_array()) { ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['address']; ?>s</td>
            <td><?php echo $row['description']; ?></td>
            <td>
              <a href="addProduct.php?edit=<?php echo $row['id']; ?>">
                <button class="btn btn-outline-primary btn-sm">Edit</button>
              </a>
              <a href="?delte=<?php echo $row['id']; ?>">
                  <button class="btn btn-outline-danger btn-sm">Delete</button>
              </a>
            </td>
          </tr>
        <?php  $i++; }
         ?>
         </tbody>
        </table>

      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- End of Main Content -->
<?php 
include_once('php/footer.php');
?>
<?php
 include_once('php/function.php');
 logged_in();
 include_once('php/header.php');

 $select = $mysqli->prepare("SELECT * FROM ordertable WHERE status = 1 order by id");
 $select->execute();
 $res = $select->get_result();

 ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ordered Products</h1>
      </div>

      <!-- Content Row -->
      <div class="row offset-0">
      	<div class="card col-md-12">
      		<div class="card-body table-responsive">
      			<table class="table table-strips">
      				<thead>
      					<tr>
      						<th>S/N</th>
      						<th>Order From</th>
      						<th>Order Phone</th>
      						<th>Order Description</th>
      						<th>Products</th>
      						<th>Quantity</th>
      						<th>Prices</th>
      					</tr>
      				</thead>
      				<tbody>
      					 <?php $i = 1;
                  while ($row = $res->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['orderFrom']; ?></td>
                      <td><?php echo $row['orderPhone']; ?></td>
                      <td><?php echo $row['orderDescription']; ?></td>
                      <td><?php echo $row['orderProduct']; ?></td>
                      <td><?php echo $row['orderQuantity']; ?></td>
                      <td>#<?php echo number_format($row['orderPrice'], 2); ?></td>
                    </tr>
                <?php  $i++;}
                ?>
      				</tbody>
      			</table>
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
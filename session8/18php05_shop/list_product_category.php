<?php include 'header.php';?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	<?php 
	// ket noi database
	include 'config/connect.php';
	$sql = "SELECT * FROM product_categories";
	$result = mysqli_query($connect, $sql);
	?>
	<div class="row">
	    <div class="col-md-12">
	      <div class="box">
	        <div class="box-header with-border">
	          <h3 class="box-title">Product category list</h3>
	        </div>
	        <!-- /.box-header -->
	        <div class="box-body">
	          <table class="table table-bordered">
	            <tr>
	              <th>ID</th>
	              <th>Name</th>
	              <th style="width: 100px">Action</th>
	            </tr>
	            <?php 
	            	if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						$id = $row['id'];
	            ?>
		            <tr>
		              <td><?php echo $id;?></td>
		              <td><?php echo $row['name']?></td>
		              <td>
		              <a href="#"><button type="button" class="btn btn-block btn-info">EDIT</button></a> <a href="#"><button type="button" class="btn btn-block btn-danger">DELETE</button></a>
		               </td>
		            </tr>
		          <?php
		      		}
				} else {
					echo "No product category";
				}
				?>
	          </table>
	        </div>
	      </div>
	    </div>
	</div>
</div>

<?php include 'footer.php';?>
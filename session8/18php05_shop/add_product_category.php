<?php 
// ket noi database
include 'config/connect.php';
include 'function.php';
if (isset($_POST['add_category'])) {
	$name = $_POST['name'];
	$sql = "INSERT INTO product_categories(name) 
				VALUES('$name')";
	mysqli_query($connect, $sql);
	// chuyen trang
	redirectPage('list_product_category.php');
}
?>
<?php include 'header.php';?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add product category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" name="AddCategory" action="#" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                	<input type="submit" name="add_category" value="Add category" class="btn btn-block btn-primary">
                </div>
              </div>
            </form>
         </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include 'footer.php';?>
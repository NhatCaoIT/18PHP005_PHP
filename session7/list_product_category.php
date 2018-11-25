<a href="add_product_category.php">Add product category</a>
<br>
<?php 
// ket noi database
include 'config/connect.php';
$sql = "SELECT * FROM product_categories";
$result = mysqli_query($connect, $sql);
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$id = $row['id'];
		echo $row['id'].'-'.$row['name'];
		echo "<a href='delete_product_category.php?idDelete=$id'>DELETE</a>";
		echo " | <a href='edit_product_category.php?idEdit=$id'>EDIT</a>";
		echo "<br>";
	}
} else {
	echo "No product category";
}
?>
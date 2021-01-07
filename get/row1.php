<?php 
	
include "koneksi.php";


 $result = mysqli_query($conn, "SELECT * FROM tbl_customer_order") or die(mysqli_error());

 $data = mysqli_num_rows($result);

echo "$data";



 ?>
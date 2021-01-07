<?php 
	
include "koneksi.php";


 $result = mysqli_query($conn, "SELECT * FROM tbl_user") or die(mysqli_error());

 $data = mysqli_num_rows($result);

echo "$data";



 ?>
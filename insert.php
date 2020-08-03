<?php 
include 'connect.php';
$bb_name = $_POST['book_name'];
  // $iv_id = isset($_POST['book_name']) ? $_POST['book_name'] : '';
$q = mysqli_query($db,"insert into invoice(book_name)values('$bb_name')");

?>

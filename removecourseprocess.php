<?php
  require_once('dbconnect.php');
  $connect = mysqli_connect( HOST, USER, PASS, DB ) or die("Can not connect");

  if(isset($_GET['id']) && isset($_GET['sem']) && !empty($_GET['id']) && !empty($_GET['sem'])){
	  	$id = $_GET['id'];
	  	$sem = $_GET['sem'];

	  	$result = mysqli_query($connect, "DELETE FROM croos_module WHERE $id =course_id and $sem = semester") or die("Can not execute query");
  }
?>

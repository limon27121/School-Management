<?php
  require_once('dbconnect.php');
  $connect = mysqli_connect( HOST, USER, PASS, DB ) or die("Can not connect");

  if(isset($_GET['id']) && isset($_GET['dep']) && isset($_GET['sem']) && !empty($_GET['id']) && !empty($_GET['dep']) && !empty($_GET['sem'])){
	  	$id = $_GET['id'];
	  	$dep = $_GET['dep'];
	  	$sem = $_GET['sem'];

	  	$result = mysqli_query($connect, "INSERT INTO croos_module (course_id, dep, semester) VALUES ('$id','$dep','$sem')") or die("Can not execute query");
  }
?>
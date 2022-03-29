<?php
  require_once('dbconnect.php');
  $connect = mysqli_connect( HOST, USER, PASS, DB ) or die("Can not connect");

  if(isset($_GET['course_id']) && isset($_GET['teacher_id']) && !empty($_GET['course_id']) && !empty($_GET['teacher_id'])){
	  	$course_id = $_GET['course_id'];
	  	$teacher_id = $_GET['teacher_id'];

	  	$result = mysqli_query($connect, "UPDATE cross_module SET teacher_id = $teacher_id WHERE course_id = $course_id") or die("Can not execute query");
  }
?>
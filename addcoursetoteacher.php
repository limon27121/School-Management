<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add course to a Teacher</title>
</head>
<body>
<div style="text-align: center;">
	<form action="addcoursetoteacherprocess.php" method="GET">
		<label>Course Id</label><br>
		<input type="number" name="course_id"><br>
		<label>Teacher Id</label><br>
		<input type="number" name="teacher_id"><br>
		<input type="submit" value="Add">
	</form>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Remove Course</title>
</head>
<body>
	<div style="text-align:center;">
		<form action="removecourseprocess.php" method="GET">
			<label>Course Id</label><br>
			<input type="number" name="id"><br>
			<label>Semester</label><br>
			<input type="number" name="sem"><br>
			<input type="submit" value="Delete">
		</form>
	</div>
</body>
</html>
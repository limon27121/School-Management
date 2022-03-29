<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Course Form</title>
</head>
<body>
	<div style="text-align:center;">
		<form action="createcourseprocess.php" method="GET">
			<label>Course Id</label><br>
			<input type="number" name="id"><br>
			<label>Department</label><br>
			<input type="text" name="dep"><br>
			<label>Semester</label><br>
			<input type="number" name="sem"><br>
			<input type="submit" name="submit">
		</form>
	</div>
</body>
</html>
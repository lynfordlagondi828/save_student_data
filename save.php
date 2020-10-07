<?php
	
	require_once 'DB_Functions.php';
	$database = new DB_Functions();

	if (isset($_POST['submit'])) {
		# code...

		$student_full_name = trim($_POST["student_full_name"]);


		$database->save_student_data($student_full_name);
		echo "data added..";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
</head>
<body>
	<form method="post">
		<label>Student Name</label>
	<input type="text" name="student_full_name">
	<button name="submit">Save</button>
	</form>
	
</body>
</html>
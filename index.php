<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic CRUD with PHP OOP</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<?php
	
	if(isset($_POST['submit'])){
		$name = $_POST['name'];		
		$email = $_POST['email'];		
		$cell = $_POST['cell'];		
		$uname = $_POST['uname'];		
		if (empty($name) || empty($email) || empty($cell) || empty($uame)) {
			$msg = '<p class:"alert alert-danger" > All fields are required </p>';
		}

	}
	
	
	
	?>
	
	<h1 class="display-4 text-center pt-3">Basic CRUD With OOP</h1>
	<div class="wrap ">
		<a class="btn btn-primary" href="studenttable.php">Student Table</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Add New Students</h2>
				<?php
				if (isset($msg)) {
					echo $msg;
				}
				
				?>
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" type="text" name="name">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" type="email" name="email">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input class="form-control" type="text" name="cell">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input class="form-control" type="text" name="uname">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Add" name="submit">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
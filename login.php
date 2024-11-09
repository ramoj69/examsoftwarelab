<?php  
require_once 'core/models.php'; 
require_once 'core/dbConfig.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | My Application</title>
	
	<style>
		/* Reset some default styling */
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			font-family: Arial, sans-serif;
			background-color: #f0f2f5;
		}
		.container {
			width: 300px;
			padding: 20px;
			background-color: #f3a46b;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			border-radius: 8px;
			text-align: center;
		}
		.container h1 {
			margin-bottom: 20px;
			font-size: 1.8em;
			color: #333;
		}
		.message {
			color: red;
			margin-bottom: 10px;
			font-size: 1em;
		}
		.form-group {
			margin-bottom: 15px;
			text-align: left;
		}
		label {
			display: block;
			margin-bottom: 5px;
			font-size: 1em;
			color: #333;
		}
		input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 10px;
			font-size: 1em;
			border: 1px solid #ccc;
			border-radius: 4px;
		}
		.btn-submit {
			width: 100%;
			padding: 12px;
			font-size: 1.1em;
			color: #fff;
			background-color: #007bff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		.btn-submit:hover {
			background-color: #0056b3;
		}
		.register-link {
			margin-top: 15px;
			display: block;
			font-size: 0.9em;
			color: #007bff;
			text-decoration: none;
		}
		.register-link:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php if (isset($_SESSION['message'])) { ?>
			<div class="message"><?php echo $_SESSION['message']; ?></div>
		<?php } unset($_SESSION['message']); ?>
		
		<h1>Login Now!</h1>
		<form action="core/handleForms.php" method="POST">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" id="username" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" required>
			</div>
			<button type="submit" name="loginUserBtn" class="btn-submit">Login</button>
		</form>
		<a href="register.php" class="register-link">Don't have an account? Register here</a>
	</div>
</body>
</html>

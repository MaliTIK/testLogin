<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration</title>
	<style>
		body {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		h2 {
			margin: 0 0 20px 0;
			text-align: center;
		}

		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			border: 2px solid #ccc;
			border-radius: 10px;
			padding: 20px;
			box-shadow: 0 0 10px #ccc;
			margin-bottom: 20px;
			width: 80%;
			max-width: 500px;
		}

		label {
			margin-bottom: 10px;
			font-weight: bold;
		}

		input[type="email"], input[type="password"], input[type="tel"], select {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
			font-family: inherit;
			box-sizing: border-box;
		}

		input[type="submit"], button {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			font-family: inherit;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover, button:hover {
			background-color: #3e8e41;
		}

		button {
			background-color: transparent;
			color: #4CAF50;
			border: none;
			cursor: pointer;
			margin-top: 20px;
			transition: color 0.3s ease;
		}

		button:hover {
			color: #3e8e41;
		}
	</style>
</head>
<body>
	<h2>Login or Register</h2>
	<form id="login-form" method="post" action="test.php">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<input type="submit" value="Login">
		<button type="button" id="register-btn">Register</button>
	</form>

	<form id="register-form" style="display: none;" method="post" action="test.php">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<label for="phone">Phone Number:</label>
		<select id="phone" name="phone">
			<option value="+355">Albania (+355)</option>
			<option value="+1">USA (+1)</option>
			<option value="+44">UK (+44)</option>
			<option value="+81">Japan (+81)</option>
			<!-- add more phone number flags

		</select>
		
		<input type="tel" id="phone-number" name="phone-number" pattern="[0-9]{9}" required>
		<input type="submit" value="Register">
		<button type="button" id="login-btn">Login</button>
	</form>

	<script>
		const loginForm = document.getElementById('login-form');
		const registerForm = document.getElementById('register-form');
		const registerBtn = document.getElementById('register-btn');
		const loginBtn = document.getElementById('login-btn');

		registerBtn.addEventListener('click', () => {
			loginForm.style.display = 'none';
			registerForm.style.display = 'block';
		});

		loginBtn.addEventListener('click', () => {
			loginForm.style.display = 'block';
			registerForm.style.display = 'none';
		});
	</script>

</body>
</html>



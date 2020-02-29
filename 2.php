<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<br/>
	<br/>
	<center></center>	
	<br/>
	
	<br/>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{7,20}$"/>
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"/>
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	
</body>
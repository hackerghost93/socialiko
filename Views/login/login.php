<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Socialiko</title>

	</head>
	<body>
		<a href="<?=URL.'/login/sign_up' ?>">Sign up</a>
		<form action="login/run" method="post">
			<label>
				Sign in
			</label>
			<br/>
			<hr/>
			<label>
				Email:
			</label>
			<input type="text" name="email" default=""/>
			<br/>
			<label>
				Password:
			</label>
			<input type="password" name="password" default=""/>
			<br/>
			<input type="submit"/>
		</form>
	</body>
</html>

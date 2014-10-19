<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>2. periood 3. praktikum</title>
	<style>

		input{
			width:150px;
			float:right;
		}
		input[type=submit]{
			width:100px;
			float:left;
			margin-top:10px;
		}
		form{
			width:300px;
		}
		span{
			padding-right:10px;
			float:left;
		}
	</style>
</head>
<body>
	<form name="loginform" action="form_processing.php" method="post">
		<span>Kasutajanimi:</span>
			<input type="text" name="username">
		<br>
		<span>Parool:</span>
			<input type="password" name="password">
		<br>
			<input type="submit" value="Saada">
	</form>
</body>
</html>
	
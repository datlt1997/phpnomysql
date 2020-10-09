<!DOCTYPE html>
<html>
<head>
	<title></title>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			body{
				width: 600px;
				margin:0 auto;
			}
		</style>
	</head>
</head>
<body>
	<form method="post">
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">

		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" name="password">
		</div>
		<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1" name="rememberme" value="remember_me">
			<label class="form-check-label" for="exampleCheck1" >Remember me</label>
		</div>
		<button name="action" value="check_login" type="submit" class="btn btn-primary">Login</button>
		<?php if(!empty($error_message)){?>
		<p class="error"><?php echo htmlspecialchars($error_message); ?></p>
		<?php } ?>
	</form>
</body>
</html>
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
	</head>
</head>
<body>
	<div class="container">
		<a href="?action=logout"><button>LOGOUT</button></a>
		<h1>LIST OF USER</h1>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>email:</th>
						<th>Password</th>
						<th>Phone</th>
						<th>Avatar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($list_user as $key => $value): ?> 
						<tr>
							<td><?php echo 1+$key++; ?></td>
							<td><?php echo $value->get_email(); ?></td>
							<td><?php echo $value->get_password(); ?></td>
							<td><?php echo $value->get_phone(); ?></td>
							<td><?php echo $value->get_avatar();; ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
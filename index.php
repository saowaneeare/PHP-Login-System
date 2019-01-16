<?php 
	
	define('CONFIG', true);
	require_once "inc/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css" >
</head>

<body>	

	<div class="uk-section uk-container">

		<?php 
			echo "Hell World Today is :";
			echo date ("y m d");
		?>
		<p>
			<a href="login.php"> Login </a>
			<a href="register.php"> Register </a>

	</div>

<?php require_once "inc/header.php"; ?>

	
</body>

</html>
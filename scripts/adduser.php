<?php

	$host = 'localhost';
	$username = 'root';
	$pass = '';
	$dbname = 'cheapomail_db';

	$id =$_POST['ID'];
	$fname =$_POST['firstname'];
	$lname =$_POST['lastname'];
	$uname =$_POST['username'];
	$password =$_POST['password'];

	$digest =md5($password);
	
	$passwordregex ='/^(?=.*[A-Zaz])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/i';

	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username,$pass);

	echo '<head> <link rel="stylesheet" type="text/css" href="../styles/new_user.css"> </head>
	<div class="body"></div>
	<p>Hello Admin, The cheapomail user has been succesfully added</p>';

	$conn->exec("INSERT INTO user(id, firstname, lastname, username, password)
		VALUES('$id','$fname','$lname','$uname','$digest')");
?>
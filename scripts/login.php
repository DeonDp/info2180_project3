<?php
  session_start();

  $host = 'localhost';
  $username = 'root';
  $pass = '';
  $dbname = 'cheapomail_db';
 
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username,$pass);

	if(isset($_POST['ID'])) {

	  	$id=$_POST['ID'];
	    $password=$_POST['password'];

	    $stmt =$conn->query("SELECT * FROM user");
	    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	    foreach ($results as $row) {
	      if($id ==$row['id']) {
	        $digest =$row['password'];
	        break;
	      }
	    }
	    if( md5($password)==$digest) {
          header("Location: ../message.html");
      	}
      	else{
      		header("Location: ../login.html");
      	}
    }
?>
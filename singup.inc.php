<?php

if(isset($_POST['register.php'])) {
	

	$us_nombre = $_POST['us_nombre'];
	$us_apellido = $_POST['us_apellido'];
	$us_mail = $_POST['us_mail'];
	$us_contrasenia = $_POST['us_contrasenia'];
	$us_dni = $_POST['us_dni']
	$us_tel = $_POST['us_tel']


	if(empty($us_nombre)|| empty($us_apellido) ||empty($us_mail) || empty($us_contrasenia) || empty($us_dni) || empty($us_tel)){

		header("Location../singup.php?error=emptyfields&uid=".$us_nombre."&email=".$us_mail);
		exit();
	}
	
	else if(!filter_var($us_mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/")){
		header("Location../signup.php?error=invalidmailuid");
		exit();
	}

	else if(!filter_var($us_mail, FILTER_VALIDATE_EMAIL)){
		header("Location../singup.php?error=invalidmail&uid=".$us_nombre);
		exit();
	}

	else if(!preg_match("/^[a-zA-Z0-9]*$/")){
		header("Location../singup.php?error=invaliduid&uid=".$us_mail);
		exit();
	}

	else{
		mysqli_stmt_bind_param($stmt, "s", $us_nombre); 

		mysqli_stmt_execute($stmt); 

		mysqli_stmt_store_result($stmt); 

		$resultCheck = mysqli_stmt_num_rows($stmt);

	if($resultCheck > 0){

			header("Location../login.php?error=usertaken&mail=".$us_mail);
		exit();
		}
	else {
		
		$sql = "INSERT INTO users (uidUsers,mailUsers,pwdUsers) VALUES (?, ?, ?)";
		$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location../login.php?error=sqlerror");
		exit();
		}
		else {
			$hashedPwd = password_hash($us_contrasenia, PASSWORD_DEFAULT); 

		mysqli_stmt_bind_param($stmt, "sss", $us_nombre,$us_mail,$hashedPwd);
		mysqli_stmt_execute($stmt);
		header("Location../login.php?signup=success");
		exit();	

				}
	
			}
		}

	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn); 
}
	else{
		header("Location../login.php");
		exit();	
	
}
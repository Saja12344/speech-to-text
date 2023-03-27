<?php
include_once("./db.php");
session_start();
if(isset($_POST['prof'])) {
    
    $name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

    $sql2 = "SELECT * FROM `users` WHERE `email`='$email' and `type` = '1'";
	$resultset = mysqli_query($con, $sql2) or die("database error:". mysqli_error($con));
	$row = mysqli_fetch_assoc($resultset);

    if(!$row['email']){	
		$sql1 = "INSERT INTO users(`name`, `email`, `password`, `type`) VALUES ('$name', '$email', '$password', '1')";
		mysqli_query($con, $sql1) or die("database error:". mysqli_error($con)."qqq".$sql1);
        echo '<script type="text/javascript"> alert("Added Seccessfully!"); window.location.href="../admin/index.php";</script>';  // alert message
	}
    else {				
	    echo "<script>
            alert('This professor is already exist!');
            window.location.href='../admin/add_prof.php';
            </script>";

	}
}

else if(isset($_POST['user'])) {
    
    $name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

    $sql2 = "SELECT * FROM `users` WHERE `email`='$email' and `type` = '0'";
	$resultset = mysqli_query($con, $sql2) or die("database error:". mysqli_error($con));
	$row = mysqli_fetch_assoc($resultset);

    if(!$row['email']){	
		$sql1 = "INSERT INTO users(`name`, `email`, `password`, `type`) VALUES ('$name', '$email', '$password', '0')";
		mysqli_query($con, $sql1) or die("database error:". mysqli_error($con)."qqq".$sql1);
        echo '<script type="text/javascript"> alert("Added Seccessfully!"); window.location.href="../admin/index.php";</script>';  // alert message
	}
    else {				
	    echo "<script>
            alert('This user is already exist!');
            window.location.href='../admin/add_user.php';
            </script>";

	}
}

else if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

    $sql2 = "SELECT * FROM users WHERE email='$email'  and password='$password'";
	$resultset = mysqli_query($con, $sql2) or die("database error:". mysqli_error($con));
	$row = mysqli_fetch_assoc($resultset);

    if($row['email']){	
        if($row['type'] == '0'){
            $_SESSION['email']= $email;
            $_SESSION['login']='user';
            echo '<script type="text/javascript"> alert("Login Seccessfully!"); window.location.href="../user/index.php"; localStorage.setItem("userlogin", "true");</script>';  // alert message
        }

        else if($row['type'] == '1'){
            $_SESSION['email']= $email;
            $_SESSION['login']='professor';
            echo '<script type="text/javascript"> alert("Login Seccessfully!"); window.location.href="../professor/index.php"; localStorage.setItem("userlogin", "true");</script>';  // alert message
        }

        else{
            $_SESSION['email']=$email;
            $_SESSION['login']='admin';
            echo '<script type="text/javascript"> alert("Login Seccessfully!"); window.location.href="../admin/index.php"; localStorage.setItem("userlogin", "true");</script>';  // alert message
        }
       
	}
    else {				
	    echo "<script>
            alert('This user is not exist!');
            window.location.href='../login.php';
            </script>";

	}
}
?>
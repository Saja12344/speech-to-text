<?php
include_once("./db.php");
session_start();
if(isset($_POST['save'])) {
    $title=$_POST['title'];
    $translate =$_FILES["translate"]["name"];
    $lecture = $translate;
    $slide = $_FILES["slide"]["name"];
    $sql2 = "SELECT * FROM `lectures` WHERE `title`='$title'";
	$resultset = mysqli_query($con, $sql2) or die("database error:". mysqli_error($con));
	$row = mysqli_fetch_assoc($resultset);

    if(!$row['title']){	
		$sql1 = "INSERT INTO lectures(`title`, `lecture`,`slide`) VALUES ('$title', '$lecture','$slide')";
        mysqli_query($con, $sql1) or die("database error:". mysqli_error($con)."qqq".$sql1);
        
        $last_id = $con->insert_id;
        if (!file_exists('../lectures/' . $last_id)) {
            mkdir('../lectures/'. $last_id, 0777, true);
        }
        $dst1 = '../lectures/' . $last_id . '/' . $slide;
        $dst2 = '../lectures/' . $last_id . '/' . $translate;
       
        $filetmp1 = $_FILES['slide']['tmp_name'];
        $filetmp2 = $_FILES['translate']['tmp_name'];

        move_uploaded_file($filetmp1, $dst1);
        move_uploaded_file($filetmp2, $dst2);

        return print('<script type="text/javascript"> alert("Added Seccessfully!");
         window.location.href="../professor/index.php";</script>');  // alert message
	}
    else {				
	    echo "<script>
            alert('This lecture is already exist!');
            window.location.href='../professor/vw.php';
            </script>";

	}
}

?>
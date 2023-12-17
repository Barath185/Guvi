<?php 
include("config.php");

if(isset($_POST['save_reg']))
{
	$name = mysqli_real_escape_string($db, $_POST['name']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
    $contact = mysqli_real_escape_string($db, $_POST['contact']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);
	
    if($name == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
	
    $query = "INSERT INTO db (name,username,dob,contact,age,pass) VALUES('$name','$username','$dob','$contact','$age','$pass')";
    $query_run = mysqli_query($db, $query);

       if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Details Registered Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Details Not Registered'
        ];
        echo json_encode($res);
        return;
    }
	
}


	  
?>

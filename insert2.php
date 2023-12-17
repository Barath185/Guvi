<?php 
include("config.php");

if(isset($_POST['edit_reg']))
{

	$username = mysqli_real_escape_string($db, $_POST['inputUsername']);
	$name = mysqli_real_escape_string($db, $_POST['inputName']);
    $age = mysqli_real_escape_string($db, $_POST['inputAge']);
    $orgname = mysqli_real_escape_string($db, $_POST['inputOrgName']);
    $orgloc = mysqli_real_escape_string($db, $_POST['inputLocation']);
    $mail = mysqli_real_escape_string($db, $_POST['inputEmailAddress']);
    $dob = mysqli_real_escape_string($db, $_POST['inputBirthday']);
    if($name == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
	
    $query = "UPDATE db SET name='$name', age='$age', orgname='$orgname', orgloc='$orgloc', mail='$mail', dob='$dob' WHERE username='$username'";
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
            'message' => 'Details Not Register'
        ];
        echo json_encode($res);
        return;
    }
	
}


	  
?>
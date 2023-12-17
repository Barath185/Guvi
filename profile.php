<?php
   include("config.php");
   include("session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guvi-Profile</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
$sel = "SELECT * From db WHERE username='$s'";
$query = mysqli_query($db,$sel);
$resul=mysqli_fetch_assoc($query);

?>


<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="save">
      <div class="modal-body">
      <div class="mb-3">
            <label class="small mb-1" for="inputUsername">Username</label>
            <input class="form-control" name="inputUsername" id="inputUsername" type="text" value="<?php echo $resul['username'];?>" >
        </div>
        <div class="row gx-3 mb-3">
            <div class="col-md-6">
                <label class="small mb-1" for="inputName">Name</label>
                <input class="form-control" name="inputName" id="inputName" type="text" value="<?php echo $resul['name'];?>">
            </div>
            <div class="col-md-6">
                <label class="small mb-1" for="inputAge">Age</label>
                <input class="form-control" name="inputAge" id="inputAge" type="text" value="<?php echo $resul['age'];?>" >
            </div>
        </div>
        <div class="row gx-3 mb-3">
            <div class="col-md-6">
                <label class="small mb-1" for="inputOrgName">Organization name</label>
                <input class="form-control" name="inputOrgName" id="inputOrgName" type="text" value="<?php echo $resul['orgname'];?>">
            </div>
            <div class="col-md-6">
                <label class="small mb-1" for="inputLocation">Location</label>
                <input class="form-control" name="inputLocation" id="inputLocation" type="text" value="<?php echo $resul['orgloc'];?>" >
            </div>
        </div>
        <div class="mb-3">
            <label class="small mb-1" for="inputEmailAddress">Email address</label>
            <input class="form-control" name="inputEmailAddress" id="inputEmailAddress" type="email" value="<?php echo $resul['mail'];?>">
        </div>
        <div class="row gx-3 mb-3">
            <div class="col-md-6">
                <label class="small mb-1" for="inputPhone">Phone number</label>
                <input disabled class="form-control" name="inputPhone" id="inputPhone" type="tel" value="<?php echo $resul['contact'];?>" >
            </div>
            <div class="col-md-6">
                <label class="small mb-1" for="inputBirthday">Birthday</label>
                <input class="form-control" name="inputBirthday" id="inputBirthday" type="text" name="birthday" value="<?php echo $resul['dob'];?>">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  data-toggle="modal" id="save" name="save" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="mx-auto col-10 col-md-8 col-lg-6">
    <div class="card mb-4 mb-xl-0">
        <div class="card-header" style="text-align:center;">Profile</div>
            <div class="card-body text-center">
                <img class="img-account-profile rounded-circle mb-2" src="profile.jpg" alt="">
            </div>
            <div style="text-align:center;">
            <a class="btn btn-dark" href="logout.php">logout</a>
            </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="small mb-1" for="inputUsername">Username</label>
                    <input disabled class="form-control" name="inputUsername" id="inputUsername" type="text" placeholder="<?php echo $resul['username'];?>" >
                </div>
                <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                        <label class="small mb-1" for="inputName">Name</label>
                        <input disabled class="form-control" name="inputName" id="inputName" type="text" placeholder="<?php echo $resul['name'];?>">
                    </div>
                    <div class="col-md-6">
                        <label class="small mb-1" for="inputAge">Age</label>
                        <input disabled class="form-control" name="inputAge" id="inputAge" type="text" placeholder="<?php echo $resul['age'];?>" >
                    </div>
                </div>
                <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                        <label class="small mb-1" for="inputOrgName">Organization name</label>
                        <input disabled class="form-control" name="inputOrgName" id="inputOrgName" type="text" placeholder="<?php echo $resul['orgname'];?>">
                    </div>
                    <div class="col-md-6">
                        <label class="small mb-1" for="inputLocation">Location</label>
                        <input disabled class="form-control" name="inputLocation" id="inputLocation" type="text" placeholder="<?php echo $resul['orgloc'];?>" >
                    </div>
                </div>
                <div class="mb-3">
                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                    <input disabled class="form-control" name="inputEmailAddress" id="inputEmailAddress" type="email" placeholder="<?php echo $resul['mail'];?>">
                </div>
                <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                        <label class="small mb-1" for="inputPhone">Phone number</label>
                        <input disabled class="form-control" name="inputPhone" type="tel" id="inputPhone" type="tel" placeholder="<?php echo $resul['contact'];?>" >
                    </div>
                    <div class="col-md-6">
                        <label class="small mb-1" for="inputBirthday">Birthday</label>
                        <input disabled class="form-control" name="inputBirthday" id="inputBirthday" type="text" name="birthday" placeholder="<?php echo $resul['dob'];?>">
                    </div>
                </div>
                  <!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#updateModal">Update Details</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
$(document).on('submit', '#save', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("edit_reg", true);

            console.log(formData);
            $.ajax({
                type: "POST",
                url: "insert2.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 200){

                        $('#errorMessage').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        location.reload();
                        
                        $('#save')[0].reset();
                        

                    }else if(res.status == 500) {
						$('#errorMessage').addClass('d-none');
                        $('#reg')[0].reset();
                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        window.location.href='profile.php';
                    }
                }
            });
            

        });	

</script>

</body>
</html>
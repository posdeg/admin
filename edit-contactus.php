<?php
$message="";
require_once('logics/dbconnection.php');
$queryusers=mysqli_query($conn,"SELECT * FROM contactus WHERE no ='".$_GET['id']."'");


while($fetchusercontact=mysqli_fetch_array($queryusers))
{
	$id = $fetchusercontact['no'];
	$firstnames = $fetchusercontact['firstname'];
    $lastnames = $fetchusercontact['lastname'];
	$phonenumbers = $fetchusercontact['phonenumber'];
	$emails = $fetchusercontact['email'];
    $createdat = $fetchusercontact['created-at'];
	$message=$fetchusercontact['message']
}

//update user records

if(isset ($_POST['update-records']))
{
	//fetch form data
	$fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
	$phoneno = $_POST['phonenumber'];
	$emailfm = $_POST['email'];
    $create = $_POST['created-at'];
	$messages = $_POST['message']
	
	//update records
	$updateQuery= mysqli_query($conn, "UPDATE contactus SET firstname='$fname', lastname='$lname', phonenumber='$phoneno', email='$emailfm', gender='$genderform',  WHERE no='".$_GET['id']."'");
		
	if($updateQuery)
	{
		$message= "Data update";
	}
	else{
		$message= "error occured".mysqli_error($conn);
	}
}


?>

<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>

	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>


	</div>
	<div class="main-content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">
                            <h4>Edit Contact Us</h4>
							<span><?php echo $message?></span>
                        </div>
						<div class="card-body">
							<form action="edit-enrollment.php?id=<?php echo $id ?>" method="POST">
								<div class="row">
									<div class="mb-3 col-lg-6 col-md-6 col-sm-12">
										<label for="fullname" class="form-label">First Name</label>
										<input type="text" class="form-control" name="firstname" value="<?php echo$firstnames?>"placeholder="Enter your first name">
									</div>
									<div class="mb-3 col-lg-6 col-md-6 col-sm-12">
										<label for="lastname" class="form-label">Last Name </label>
										<input type="text" class="form-control" name="lastname" value="<?php echo$lastnames?>" placeholder="Enter your last name">
									</div>
								</div>
                                <div class="row">
									<div class="mb-3 col-lg-6 col-md-6 col-sm-12">
										<label for="phonenumber" class="form-label">Phone Number</label>
										<input type="tell" class="form-control" name="phonenumber" value="<?php echo$phonenumbers?>"placeholder="+2547...">
									</div>
									<div class="mb-3 col-lg-6 col-md-6 col-sm-12">
										<label for="email" class="form-label">Email </label>
										<input type="email" class="form-control" name="email" value="<?php echo$emails?>" placeholder="Enter your email">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<button type="submit"  name= "update-records"class="btn btn-primary">Update records</button>
									</div>
								</div>
        					</form>
                    	</div>
                    </div>

                </div>
            </div>
			
		</div>	
	</div>
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>
<?php
$server = "localhost";
$username="root";
$password="";
$database="web2";
$message=""; 

require_once('logics/dbconnection.php');

if(isset ($_POST['update-records']))
{
    $name=$_POST['fullname'];
	$phone=$_POST['phonenumber'];
	$email=$_POST['email'];
	$gender=$_POST['gender'].mysqli_error($conn);
	$course=$_POST['course'].mysqli_error($conn);

	//update records
	$insertData = mysqli_query( $conn, "INSERT INTO
    enrollment(fullname,phonenumber,email,gender,course)
    VALUES('$name','$phone','$email','$gender','$course')");
    
	if($insertData)
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
                            <h4>Edit Student</h4>
							<span><?php echo $message?></span>
                        </div>
						<div class="card-body">
							<form method="POST">
								<div class="row">
									<div class="mb-3 col-lg-6 col-md-6 col-sm-12">
										<label for="fullname" class="form-label">Full name</label>
										<input type="text" class="form-control" name="fullname" value=""placeholder="Enter your full name">
									</div>
									<div class="mb-3 col-lg-6 col-md-6 col-sm-12">
										<label for="phonenumber" class="form-label">Phone </label>
										<input type="tel" class="form-control"name="phonenumber"value="" placeholder="+2547...">
									</div>
								</div>
								<div class="row">
									<div class="mb-3 col-lg-6 col-md-6 col-sm-12">
										<label for="email" class="form-label">Email address</label>
										<input type="email" class="form-control" name="email" value="" placeholder="Please enter your email">
									</div>
									<div class="mb-3 col-lg-6 col-md-6 col-sm-12">
										<label for="gender" class="form-label">What's your gender</label>
										<select name="gender" class="form-control" aria-label="default select example">
											<option > </option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
									
									<div class="mb-3 col-lg-6">
									<label for="preffered-course" class="form-label">Preffered Course</label>
										<select name="course" class="form-control multiplchose_questiontypes" id="selector">
											<option value="" > </option>
											<option value="web design">web design</option>
											<option value="cyber security">cyber security</option>
											<option value="android development">android development</option>

										</select>
									</div>
									<p>You agree by providing your information you understand all our data privacy and protection policy outlined in our Terms & condition and the privacy policy statement.</p>
    								<input type="checkbox" name="agreement" id="Agree terms and conditions">Agree terms and conditions </input>    
								</div>
								<div class="row">
									<div class="col-lg-6">
										<button type="submit"  name= "update-records" class="btn btn-primary">Update records</button>
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
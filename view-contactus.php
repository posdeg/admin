<?php
require_once('logics\dbconnection.php');
$sqlFetchData=mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."'");

while($fetchContactus = mysqli_fetch_array($sqlFetchData))
{
    $Firstname = $fetchContactus['firstname'];
	$Lastname = $fetchContactus['lastname'];
    $phoneno = $fetchContactus['phonenumber'];
    $emailacc = $fetchContactus['email'];
    $createdAt= $fetchContactus['created-at'];
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <div class="card-title">Personal Information</div>
                        </div>
                            <div class="card-body">
                                <div class="list-group">
                                    <div class="list-group-item">First name <span class="float-right badge badge-info"><?php echo $Firstname?></span></div>
                                    <div class="list-group-item">Last Name<span class="float-right badge badge-secondary"><?php echo $Lastname?></span></div>
                                    <div class="list-group-item">Phone Number<span class="float-right badge badge-danger"><?php echo $phoneno?></span></div>
                                    <div class="list-group-item">Email<span class="float-right badge badge-danger"><?php echo $emailacc?></span></div>
                                    <div class="list-group-item">Created At<span class="float-right badge badge-danger"><?php echo $createdAt?></span></div>
                                </div>
                            </div>
                         </div>
                </div>
            </div>
			
		</div>	
	</div>
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>
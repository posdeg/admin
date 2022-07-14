<?php
//database connection
require_once('logics\dbconnection.php');
$sqlFetchStudents=mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."'");

while($fetchStudentsRecords = mysqli_fetch_array($sqlFetchStudents))
{
    $Fullname = $fetchStudentsRecords['fullname'];
    $phone= $fetchStudentsRecords['phonenumber'];
    $email = $fetchStudentsRecords['email'];
    $giender= $fetchStudentsRecords['gender'];
    $course= $fetchStudentsRecords['course'];
    $createdAt= $fetchStudentsRecords['created_at'];
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
                                    <div class="list-group-item">Full Name <span class="float-right badge badge-info"><?php echo $Fullname?></span></div>
                                    <div class="list-group-item">Email<span class="float-right badge badge-secondary"><?php echo $email?></span></div>
                                    <div class="list-group-item">Phone Number<span class="float-right badge badge-danger"><?php echo $phone?></span></div>
                                </div>
                            </div>
                         </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <div class="card-title">Personal Information</div>
                        </div>
                            <div class="card-body">
                                <div class="list-group">
                                    <div class="list-group-item">Gender <span class="float-right badge badge-info"><?php echo $giender?></span></div>
                                    <div class="list-group-item">Course<span class="float-right badge badge-secondary"><?php echo $course?></span></div>
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
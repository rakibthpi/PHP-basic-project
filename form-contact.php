<?php 

$st_name = $_POST['st_name'];
$st_roll = $_POST['st_roll'];
$st_reg = $_POST['st_reg'];
$st_address = $_POST['st_adress'];
$st_massage = $_POST['massage'];
$st_submit = $_POST['submit'];
if (isset($_POST['submit'])) {
	if (empty($st_name)) {
		$error = "Name is Required";
		header('location:contact.php?error');
	}
	else{
		$success = "Successfull your requertment";
		header('location:contact.php?success');
	}
}

?>
<?php require_once("./includes/session.php") ?>
<?php require_once("./includes/dbconnection.php") ?>
<?php require_once("./includes/functions.php") ?>

<?php
if (isset($_POST['submit'])) {

	$name = $_POST["name"];
    $password = $_POST["password"];

	$query  = "INSERT INTO admin (";
	$query .= " name ,";
    $query .= " password ";
	$query .= ") VALUES (";
	$query .= "  '{$name}','{$password}'";
	$query .= ")";
	$result = mysqli_query($dbconn, $query);

	if ($result) {
        $_SESSION["message"] = "Admin created";
		redirect_to("index.php");
	} else {
		$_SESSION["message"] = "Admin creation failed";
		redirect_to("new_admin.php");
	}
    } else {
    redirect_to("index.php");
    }
?>


<?php if(isset($dbconn)){mysqli_close($dbconn);} ?>

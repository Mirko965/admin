<?php require_once("./includes/dbconnection.php") ?>
<?php require_once("./includes/functions.php") ?>

<?php
if (isset($_POST['submit'])) {

	$name = $_POST["name"];

	$query  = "INSERT INTO admin (";
	$query .= "  name";
	$query .= ") VALUES (";
	$query .= "  '{$name}'";
	$query .= ")";
	$result = mysqli_query($dbconn, $query);

	if ($result) {
        echo "Admin created";
		redirect_to("index.php");
	} else {
		 echo "Admin creation failed";
		redirect_to("new_admin.php");
	}
    } else {
    redirect_to("index.php");
    }
?>


<?php if(isset($dbconn)){mysqli_close($dbconn);} ?>

<?php require_once("./includes/session.php") ?>
<?php require_once("./includes/dbconnection.php") ?>
<?php require_once("./includes/functions.php") ?>
<?php require_once("./includes/validation_functions.php") ?>

<?php
if (isset($_POST['submit'])) {

$required_fields = array("name", "password");
validate_presences($required_fields);

$fields_with_max_lengths = array("name" => 8);
validate_max_lengths($fields_with_max_lengths);

if(empty($errors))  {

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
        //redirect_to("new_admin.php");
	}
}
    } else {

    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <article class="main">
        <section class="content">

        <form action="new_admin.php" method="post">
                <?php echo message(); ?>
                 <?php echo form_errors($errors); ?>
            <p>Name:
                <input type="text" name="name" value=""  >
            </p>
            <p>Password:
                <input type="password" name="password" value=""  >
            </p>
            <input type="submit" name="submit" value="create new admin" />
        </form>
            <br>
            <p><a href="index.php">Cancel</a></p>
        </section>
        </article>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

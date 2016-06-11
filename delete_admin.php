<?php require_once("./includes/dbconnection.php") ?>
<?php require_once("./includes/functions.php") ?>
<?php require_once("./includes/session.php") ?>

<?php
$admin = find_admin_by_id($_GET["id"]);

if(!$admin){
    redirect_to("index.php");
}

$id = $admin["id"];
$query = "DELETE FROM admin WHERE id = {$id}";
$result = mysqli_query($dbconn,$query);
if($result && mysqli_affected_rows($dbconn)){
     $_SESSION["message"] = "Admin deleted";
    redirect_to("index.php");
} else {
    $_SESSION["message"] = "Admin deletion failed";
   redirect_to("index.php");
}
?>

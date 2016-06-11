<?php require_once("./includes/dbconnection.php") ?>
<?php require_once("./includes/functions.php") ?>

<?php
$admin = find_admin_by_id($_GET["id"]);

if(!$admin){
    redirect_to("index.php");
}

$id = $admin["id"];
$query = "DELETE FROM admin WHERE id = {$id}";
$result = mysqli_query($dbconn,$query);
if($result && mysqli_affected_rows($dbconn)){
    redirect_to("index.php");
} else {
   redirect_to("index.php");
}
?>

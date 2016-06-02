<?php require_once("./includes/dbconnection.php") ?>
<?php require_once("./includes/functions.php") ?>

<?php
  $admin = find_admin_by_id($_GET["id"]);
  if (!$admin) {
    // admin ID was missing or invalid or
    // admin couldn't be found in database
    redirect_to("index.php");
  }

  $id = $admin["id"];
  $query = "DELETE FROM admin WHERE id = {$id} LIMIT 1";
  $result = mysqli_query($dbconn, $query);

  if ($result && mysqli_affected_rows($dbconn) == 1) {
    // Success

    redirect_to("index.php");
  } else {
    // Failure

    redirect_to("index.php");
  }

?>

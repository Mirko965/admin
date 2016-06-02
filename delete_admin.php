<?php require_once("./includes/dbconnection.php") ?>
<?php require_once("./includes/functions.php") ?>

<?php
  $current_admin = find_admin_by_id($_GET["admin"]);
  if (!$current_admin) {
    redirect_to("index.php");
  }

  $id = $current_admin["id"];
  $query = "DELETE FROM admin WHERE id = {$id} LIMIT 1";
  $result = mysqli_query($dbconn, $query);

  if ($result && mysqli_affected_rows($dbconn) == 1) {
    // Success
    redirect_to("index.php");
  } else {
    // Failure
    redirect_to("index.php?admin={$id}");
  }

?>

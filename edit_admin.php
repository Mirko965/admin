<?php require_once("./includes/session.php") ?>
<?php require_once("./includes/dbconnection.php") ?>
<?php require_once("./includes/functions.php") ?>

<?php
//$adm//in_id = $_GET["id"];
//$query = "SELECT * FROM admin WHERE id = $admin_id ";
//$result = mysqli_query($dbconn,$query);
//if($admin = mysqli_fetch_assoc($result)){
//    return $admin;
//}else{
//    null;
//}

 $admin = find_admin_by_id($_GET["id"]);

if(isset($_POST['submit'])){

$id = $admin["id"];
$name = $_POST["name"];
$password = $_POST["password"];
$query = "UPDATE admin SET name = '{$name}', password = '{$password}' WHERE id = {$id} ";
$result = mysqli_query($dbconn,$query);
if($result && mysqli_affected_rows($dbconn) == 1 ){
    $_SESSION["message"] = "Admin updated";
    redirect_to("index.php");
}else{
    $_SESSION["message"] = "Admin update failed";
}
}else{

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
        <form action="edit_admin.php?id=<?php echo $admin["id"];?>" method="post">
            <p>Name:
                <input type="text" name="name" value="<?php echo htmlentities($admin["name"]); ?>"  >
            </p>
            <p>Password:
                <input type="password" name="password" value="<?php echo $admin["password"]?>"  >
            </p>
            <input type="submit" name="submit" value="edit" />
        </form>
            <br>
            <p><a href="index.php">Cancel</a></p>
        </section>
        </article>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

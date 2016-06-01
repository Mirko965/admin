<?php require_once("./includes/dbconnection.php") ?>
<?php require_once("./includes/functions.php") ?>
<?php
$admin_set = find_all_admins();
?>
<?php
use PhpSolutions\File\Upload;
// set the maximum upload size in bytes
$max = 51200;
if (isset($_POST['upload'])) {
// define the path to the upload folder
$destination = 'C:/upload_test/';
require_once '../administrator/Uploads/PhpSolutions/File/Upload.php';
    try {
      $loader = new Upload($destination);
      $loader->upload();
      $result = $loader->getMessages();
    } catch (Exception $e) {
      echo $e->getMessage();
    }
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
            <div class="upload">
                <h2>Upload files</h2>
                <?php
                if (isset($result)) {
                   echo '<ul>';
                   foreach ($result as $message) {
                   echo "<li>$message</li>";
                }
                echo '</ul>';
                }
                ?>
            <form action="" method="post" enctype="multipart/form-data" id="uploadImage">
              <p>
                <label for="image">Upload image:</label>
                  <input type="hidden" name="MAX_FILE_SIZE" value="<?= $max; ?>">
                <input type="file" name="image" id="image">
              </p>
              <p>
                 <input type="submit" name="upload" id="upload" value="Upload">
              </p>
            </form>
            </div>
            <div class="sql">
                <h2>Databases contact</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <?php while($admin = mysqli_fetch_assoc($admin_set)){ ?>
                    <tr>
                    <td><?php  echo $admin["name"]; ?></td>
                    <td><a href="edit_admin.php">edit</a></td>
                    <td><a href="delete_admin.php">delete</a></td>
                    <?php } ?>
                    </tr>
                </table>
                <a href="index.php">cancel</a>
            </div>
          </section>
        </article>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

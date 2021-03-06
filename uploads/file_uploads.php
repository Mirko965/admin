<?php
use PhpSolutions\File\Upload;
// set the maximum upload size in bytes
$max = 51200;
if (isset($_POST['upload'])) {
// define the path to the upload folder
$destination = 'C:/upload_test/';
require_once '../Uploads/PhpSolutions/File/Upload.php';
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

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

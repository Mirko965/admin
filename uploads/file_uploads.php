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
         <form action="" method="post" enctype="multipart/form-data" id="uploadImage">
           <p>
             <label for="image">Upload image:</label>
             <input type="file" name="image" id="image">
           </p>
           <p>
              <input type="submit" name="upload" id="upload" value="Upload">
           </p>
         </form>
        <pre>
        <?php
        if (isset($_POST['upload'])) {
        print_r($_FILES);
        }
        ?>
        </pre>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

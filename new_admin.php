<?php require_once("./includes/session.php") ?>
<?php require_once("./includes/dbconnection.php") ?>
<?php require_once("./includes/functions.php") ?>

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
        <form action="create_new_admin.php" method="post">
            <p>Name:
                <input type="text" name="name" value=""  >
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

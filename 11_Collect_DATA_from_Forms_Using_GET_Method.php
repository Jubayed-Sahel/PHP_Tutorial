$_GET Method is used to fetch data from the url parameters
<br>
<br>
<br>


<!--  When to Use $_GET & $_POST Method  
  
$_GET Method is visible to everyone But $_POST Method is not, so we can send passwords and all through Post Method.
in $_GET Method url we cant pass lengthy parameters , so we can use $_POST Method here.
Sensitive data should be passed through $_POST Method.

-->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <a href="<?php  echo $_SERVER['PHP_SELF']  ?> ?subject=PHP">CLICK ME</a>         <!--  Adding (?subject=PHP) with the file path so that we can fetch later.

    <?php
    echo "<br><br>";
    echo "This is ".$_GET['subject']." tutorial" ;



    ?>
</body>
</html>
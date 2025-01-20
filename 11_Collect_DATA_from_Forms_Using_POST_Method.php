// USING POST METHOD TO Collect the form DATA.
<br>
<BR>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

        <input type="text" name="fname" placeholder="First Name" autocomplete= "off">
        <br><br>
        <input type="text" name="lname" placeholder="Last Name" autocomplete= "off">
        <br><br>
        <button type="submit">Submit</button>


        <?php

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $first_name = $_POST['fname'];
                $last_name = $_POST['lname'];
                echo "<br><br>";
                echo $first_name;
                echo $last_name;
            }




        ?>







    </form>
</body>
</html>
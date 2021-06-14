<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 8.1</title>
    </head>
    <body >
        <?php
            // Start the session
            session_start();
            // Set session variables
            $_SESSION["lastname"] = "Fricotin";
            $_SESSION["firstname"] = "Bibi";
            $_SESSION["age"] = 10;
            // close the session
            session_write_close();
        ?>
        <a href="tst.php">Go On</a>
     </body>
</html>
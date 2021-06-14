<?php
    // Start the session
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 8.1 TST</title>
    </head>
    <body >
        <h1>Server Part</h1>
        <p>lastname: <?= $_SESSION["lastname"] ?></p>
        <p>firstname: <?= $_SESSION["firstname"] ?></p>
        <p>age: <?= $_SESSION["age"] ?></p>
    </body>
</html>
<?php
    // Close the session
    session_write_close();
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted name from the form
    $name = $_POST['name'];

    // Create a new player entry with a score of 0
    $playerEntry = $name . ', 0' . PHP_EOL;

    // Append the player entry to the players.txt file
    file_put_contents('players.txt', $playerEntry, FILE_APPEND | LOCK_EX);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Confirmation</title>
    <!--<meta http-equiv="refresh" content="3;url=login.php">-->
</head>
<body>
    <h1>Thank you for registering!</h1>
    <p>Now you can go back and login.</p>
    <p><a href = "login.php"> Click Here</a></p>
    <?php
    // Redirect to index.php after 3 seconds
    //header("Refresh: 3; url=login.php");
    ?>
</body>
</html>

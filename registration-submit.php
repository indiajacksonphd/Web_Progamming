<!DOCTYPE html>
<html>
<head>
  <title>Jeopardy Game</title>
  <link rel="stylesheet" type="text/css" href="register_login.css?v=<?php echo time(); ?>">
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted name from the form
    $name = $_POST['name'];

    // Create a new player entry with a score of 0
    $playerEntry = $name . ', 0' . PHP_EOL;
    $visitedEntry = $name . ', category_point' . PHP_EOL;

    // Append the player entry to the players.txt file
    file_put_contents('players.txt', $playerEntry, FILE_APPEND | LOCK_EX);
    file_put_contents('visited.txt', $visitedEntry, FILE_APPEND | LOCK_EX);
}
?>
    <div  class = "group_names">
    <h1>Thank you for registering!</h1>
    <p>Now you can go back and login.</p>
    <p><a href = "login.php"> Click Here</a></p>
</div>
</body>
</html>

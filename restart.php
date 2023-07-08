<?php
require_once 'score_keeper.php';

session_start(); // Start the session

$_SESSION['score'] = 0;

$_SESSION['currentVisitedList'] = array();

// Retrieve the player's name using the getName() function
$playerName = getName();

// Reset the player's score to 0 in the players.txt file
$playersData = file('players.txt');
foreach ($playersData as &$line) {
    $playerInfo = explode(',', $line);
    $name = trim($playerInfo[0]);

    if ($name === $playerName) {
        $line = $playerName . ',0' . PHP_EOL; // Set the score to 0
        break;
    }
}
file_put_contents('players.txt', implode('', $playersData));

// Redirect to the desired page after restart
header("Location: index.php");
exit();
?>


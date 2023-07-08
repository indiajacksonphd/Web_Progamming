<?php
session_start();

// Check if the score session variable is set
if (!isset($_SESSION['score'])) {
  // If not set, initialize it to 0
  $_SESSION['score'] = 0;
}

// Function to add points to the score
function addPoints($points) {
  $_SESSION['score'] += $points;
}

// Function to subtract points from the score
function subtractPoints($points) {
  $_SESSION['score'] -= $points;
}

function getScore() {
  session_start();
  return isset($_SESSION['score']) ? $_SESSION['score'] : 0;
}

function getName() {
  session_start();
  return isset($_SESSION['username']) ? $_SESSION['username'] : '';
}

function updateScore($username, $newScore)
{
    $file = file('players.txt'); // Read the lines of the file into an array
    $updatedFile = '';

    foreach ($file as $line) {
        $playerInfo = explode(',', $line); // Split the line by comma to get player information
        $name = trim($playerInfo[0]); // Get the player name

        if ($name === $username) {
            $line = $name . ', ' . $newScore . "\n";
        }

        $updatedFile .= $line;
    }

    file_put_contents('players.txt', $updatedFile); // Write the updated contents back to the file
}

function getLeaderboard()
{
    $file = file('players.txt'); // Read the lines of the file into an array
    $leaderboard = [];

    foreach ($file as $line) {
        $playerInfo = explode(',', $line); // Split the line by comma to get player information
        $name = trim($playerInfo[0]); // Get the player name
        $score = trim($playerInfo[1]); // Get the player score

        $leaderboard[$name] = $score;
    }

    // Sort the leaderboard array in descending order of scores
    arsort($leaderboard);

    return $leaderboard;
}

function updateVisited($username, $category, $point)
{
    $filePath = 'visited.txt';

    // Read the current contents of the file
    $lines = file($filePath);

    // Find the line containing the player's name
    foreach ($lines as $index => $line) {
        $playerInfo = explode(',', $line);
        if (trim($playerInfo[0]) === $username) {
            $playerInfo[0] = rtrim($playerInfo[0]) . ', ' . $category . '_' . $point;
            $lines[$index] = implode(',', $playerInfo);
            break;
        }
    }

    // Write the updated contents back to the file
    file_put_contents($filePath, implode('', $lines));
}

?>

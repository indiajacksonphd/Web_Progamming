<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Retrieve the submitted username
    $username = $_GET['name'];
    
    // Validate the username (you may need to replace this with your own validation logic)
    if (!empty($username)) {
        // If the username is provided, check if it exists in players.txt
        $file = file('players.txt'); // Read the lines of the file into an array
        
        foreach ($file as $line) {
            $playerInfo = explode(',', $line); // Split the line by comma to get player information
            $name = trim($playerInfo[0]); // Get the player name
            $score = trim($playerInfo[1]); // Get the player score
            
            if ($name === $username) {
                // If the player is found, store their information in session variables
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['score'] = $score;
                
                break; // Exit the loop since we found the player
            }
        }
        
        if (isset($_SESSION['username'])) {
            // If the player is found, redirect to index.php
            header('Location: index.php');
            exit;
        } else {
            // If the player is not found, show an error message
            echo 'Invalid username.';
        }
    } else {
        // If the username is not provided, show an error message
        echo 'Please enter a username.';
    }
}
?>

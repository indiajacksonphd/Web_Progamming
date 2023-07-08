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

                
                // Load the visited.txt file into a session variable
                $visitedFile = file('visited.txt'); // Read the lines of the file into an array
                
                foreach ($visitedFile as $line) {
                    $playerData = explode(',', $line);
                    $playerName = trim($playerData[0]);
                    
                    if ($playerName === $username) {
                        // Assign the visited list of the player to the session variable
                        $_SESSION['visitedList'] = isset($playerData[1]) ? array_slice($playerData, 1) : array();
                        $_SESSION['currentVisitedList'] = isset($playerData[1]) ? array_slice($playerData, 1) : array();
                        break;
                    }
                }
                header('Location: index.php');
                exit;
            }
        }
       echo 'Invalid username.';
    }
}
?>

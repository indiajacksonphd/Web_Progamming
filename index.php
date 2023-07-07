<!DOCTYPE html>
<html>
<head>
  <title>Jeopardy Game</title>
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

  <div class="container_1">
    
    
    <div class="left-div">
      <?php include 'index-content.php'; ?>
    </div>


    <div class="right-div">
    <!-- NEW -->
      <div class = "right-top">
      <!-- Display name and the current score -->
        <div class="names_score">
          <img src = "user_1.png" alt = "">
          <div class="score">Name: <?php echo $getName; ?></div>
          <div class="score">Score: <?php echo $score; ?></div>
        </div>

      <!-- Display the leaderboard -->
        <div class="leaderboard">
          <h2>Leaderboard</h2>
          <ol>
            <?php
              $leaderboard = getLeaderboard();
              foreach ($leaderboard as $name => $score) {
                echo '<li>' . $name . ': ' . $score . '</li>';
              }
            ?>
          </ol>
        </div>
      </div>

      <div class = "right-bottom">
        <?php
          // Check if the category and point parameters are present in the URL
          if (isset($_GET['category']) && isset($_GET['point'])) {
            $category = $_GET['category'];
            $point = $_GET['point'];
            $question = $_GET['question'];
            $choicesString = $_GET['choices'];

            // Convert the choices string back to an array
            $choices = explode('|', $choicesString);
            $correctAnswer = $_GET['answer'];

            echo $question . "<p>";
          } else {
            echo "Choose a Category!";
          }
        ?>

        <div class="choices-container" >
          <form action="answer.php" method="POST">
            <?php foreach ($choices as $choice) : ?>
              <div class="choice">
                <button type="submit" name="answer" value="<?php echo $choice; ?>">
                  <?php echo $choice; ?>
                </button>
              </div>
            <?php endforeach; ?>
            <input type="hidden" name="category" value="<?php echo $category; ?>">
            <input type="hidden" name="point" value="<?php echo $point; ?>"> 
          </form>
        </div>

        <?php
          if (isset($_GET['category'], $_GET['point'], $_GET['result'], $_GET['correctAnswer'])) {
            $category = $_GET['category'];
            $point = $_GET['point'];
            $result = $_GET['result'];
            $correctAnswer = $_GET['correctAnswer'];

            if ($result == 'correct') {
              
              echo '<div class="result correct">Correct! Well done. You win ' . $point . ' points.</div><br> Please choose again!';
            } else if ($result == 'incorrect'){
              echo '<div class="result incorrect">Incorrect! The correct answer is ' . $correctAnswer . ' You lose ' . $point . ' points.</div><br> Please choose again!';
            } 
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>

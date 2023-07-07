<!DOCTYPE html>
<html>
<head>
  <title>Jeopardy Game</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Jeopardy Game</h1>
    <?php
    require_once 'score_keeper.php';
    require_once 'question.php';
    
    // Retrieve the submitted answer, category, and point
    $selectedAnswer = $_POST['answer'];
    $category = $_POST['category'];
    $point = $_POST['point'];

    // Retrieve the correct answer for the given category and point
    $correctAnswer = $questions[$category][$point]['answer'];

    // Check if the selected answer is correct
    $isCorrect = ($selectedAnswer === $correctAnswer);

    // Display the result
    if ($isCorrect) {
      $result = 'correct';
      addPoints($point);
      $username = getName();
      $newScore = getScore();
      updateScore($username, $newScore);
    } else {
      $result = 'incorrect';subtractPoints($point);
      $username = getName();
      $newScore = getScore();
      updateScore($username, $newScore);
    }

    header('Location: index.php?category=' . urlencode($category) . '&point=' . urlencode($point) . '&result=' . urlencode($result) . '&correctAnswer=' . urlencode($correctAnswer));
    exit;

    // Update the score for the current user
    $username = getName();
    $newScore = getScore();
    updateScore($username, $newScore);
    ?>
    <div class="back-link">
      <a href="index.php">Back to Game</a>
    </div>
  </div>
</body>
</html>

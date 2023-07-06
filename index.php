<!DOCTYPE html>
<html>
<head>
  <title>Jeopardy Game</title>
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
  <div class="container_1">
    <!--<h1>Jeopardy Game</h1>-->
    
    <div class="top-div">
      <?php include 'index-content.php'; ?>
    </div>
    <div class="bottom-div">
  <!-- NEW -->
      <!-- Display name and the current score -->
      <div class="names_score">
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
    <?php
// Check if the category and point parameters are present in the URL
// && isset($_GET['question']) && isset($_GET['choices']) && isset($_GET['answer'])
if (isset($_GET['category']) && isset($_GET['point'])) {
  $category = $_GET['category'];
  $point = $_GET['point'];
  $question = $_GET['question'];
  $choicesString = $_GET['choices'];
  // Convert the choices string back to an array
  $choices = explode('|', $choicesString);

 // $choices = $_GET['choices'];
  $correctAnswer = $_GET['answer'];

  // Use the category and point values to display the information
  echo "Category: " . $category . "<p>";
  echo "Point: " . $point . "<p>";
  echo "Question: " . $question . "<p>";
  echo "Answer: " . $answer . "<p>";

  // Iterate over the choices and generate buttons
  //foreach ($choices as $choice) {
    //echo '<div class="choice">';
    //echo '<button>' . $choice . '</button>';
    //echo '</div>';
  //}
  

  //echo "Choices: " . $choices . "<br>";
  //echo "A: " . $choices . "<br>";

  // You can perform further operations based on the category and point values
  // For example, you can retrieve the question and choices associated with the given category and point
  // and display them on the page
  // $question = $questions[$category][$point]['question'];
  // $choices = $questions[$category][$point]['choices'];
  // $answer = $questions[$category][$point]['answer'];
} else {
  echo "No category or point specified.";
}
?>

<div class="choices-container">
  <!--<form action="index.php" method="POST">-->
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
 //if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  //// Check if the form has been submitted
  //if (isset($_POST['selected_answer'], $_POST['category'], $_POST['point'])) {
    //// Retrieve the selected answer, category, and point
    //$selectedAnswer = $_POST['selected_answer'];
    //$category = $_POST['category'];
    //$point = $_POST['point'];

    //echo "Selectd Answer: " . $selectedAnswer . "<p>"; 

    //// Retrieve the correct answer for the given category and point
    ////$correctAnswer = $questions[$category][$point]['answer'];

    //// Compare the selected answer with the correct answer
    //$isCorrect = ($selectedAnswer === $correctAnswer);

    //if ($isCorrect) {
      //echo 'Correct!';
    //} else {
      //echo 'Incorrect!';
    //}
  //}
//}
    //// Redirect the user to answer.php with the selected answer and relevant parameters
    //$redirectUrl = 'answer.php?category=' . urlencode($category) . '&point=' . urlencode($point) . '&question=' . urlencode($question) . '&selectedAnswer=' . urlencode($selectedAnswer);
    //header('Location: ' . $redirectUrl);
    //exit;
  //}
  if (isset($_GET['category'], $_GET['point'], $_GET['result'], $_GET['correctAnswer'])) {
    $category = $_GET['category'];
    $point = $_GET['point'];
    $result = $_GET['result'];
    $correctAnswer = $_GET['correctAnswer'];
    // Use the retrieved values as needed
    // ...

    //echo "Result: " . $result . "<p>";

    if ($result == 'correct') {
      
      echo '<div class="result correct">Correct! Well done. You win ' . $point . ' points.</div>';
      //addPoints($point);
    } else if ($result == 'incorrect'){
      //$result = 'incorrect';
      echo '<div class="result incorrect">Incorrect! The correct answer is ' . $correctAnswer . ' You lose ' . $point . ' points.</div>';
      //subtractPoints($point);
    }
  }
  

?>

      <?php //include 'question.php'; ?>

   <!--   <div class="question-container">
  <div class="question"><?php //echo $question; ?></div>
</div>-->



    </div>
  </div>
</body>
</html>

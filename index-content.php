<!DOCTYPE html>
<html>
<head>
  <title>Jeopardy Game</title>
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
<?php
// Include the score_keeper.php file
require_once 'score_keeper.php';
require_once 'index.php';

// Get the current score
$score = getScore();
$getName = getName();

session_start(); // Start the session
  

// Initialize the visited list as an empty array if it doesn't exist in the session
if (!isset($_SESSION['currentVisitedList'])) {
    $_SESSION['currentVisitedList'] = array();
}

// Check if the category and point parameters are present in the URL
if (isset($_GET['category']) && isset($_GET['point'])) {
  $category = $_GET['category'];
  $point = $_GET['point'];
  $link = $category . '_' . $point;

  if (!in_array($link, $_SESSION['currentVisitedList'])) {
    // Add the hyperlink to the currentVisitedList
    $_SESSION['currentVisitedList'][] = $link;
  }

}
?>




<div class="container">


    <div class="grid-container">
      <div class="category">Movies</div>
      <div class="category">Sports</div>
      <div class="category">History</div>
      <div class="category">Science</div>
      <div class="category">SciFi</div>
      <div class="category">TV Shows</div>

      <!-- Points 200 -->

      <div class="question-point">
        <?php if (!in_array('Movies_200', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=Movies&point=200&return_to=index.php">$200</a>   
        <?php endif; ?>
      </div>

      <div class="question-point">
        <?php if (!in_array('Sports_200', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=Sports&point=200&return_to=index.php">$200</a>
        <?php endif; ?>
      </div>

      <div class="question-point">
        <?php if (!in_array('History_200', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=History&point=200&return_to=index.php">$200</a>
        <?php endif; ?>
      </div>


      <div class="question-point">
        <?php if (!in_array('Science_200', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=Science&point=200&return_to=index.php">$200</a>
        <?php endif; ?>
      </div>
      
      <div class="question-point">
        <?php if (!in_array('SciFi_200', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=SciFi&point=200&return_to=index.php">$200</a>
        <?php endif; ?>
      </div>
      <div class="question-point">
        <?php if (!in_array('TV_200', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=TV&point=200&return_to=index.php">$200</a>
        <?php endif; ?>
      </div>
      
      <!-- Points 400 -->
      <div class="question-point">
        <?php if (!in_array('Movies_400', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=Movies&point=400&return_to=index.php">$400</a>
        <?php endif; ?>
      </div>

      <div class="question-point">
        <?php if (!in_array('Sports_400', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=Sports&point=400&return_to=index.php">$400</a>
        <?php endif; ?>
      </div>
      <div class="question-point">
        <?php if (!in_array('History_400', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=History&point=400&return_to=index.php">$400</a>
        <?php endif; ?>
      </div>
      <div class="question-point">
      <?php if (!in_array('Science_400', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=Science&point=400&return_to=index.php">$400</a>
        <?php endif; ?>
      </div>
      
      <div class="question-point">
      <?php if (!in_array('SciFi_400', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=SciFi&point=400&return_to=index.php">$400</a>
        <?php endif; ?>
      </div>
      <div class="question-point">
      <?php if (!in_array('TV_400', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=TV&point=400&return_to=index.php">$400</a>
        <?php endif; ?>
      </div>
      
      <!-- Points 600 -->
      <div class="question-point">
      <?php if (!in_array('Movies_600', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=Movies&point=600&return_to=index.php">$600</a>
        <?php endif; ?>
      </div>
      <div class="question-point">
      <?php if (!in_array('Sports_600', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=Sports&point=600&return_to=index.php">$600</a>
        <?php endif; ?>
      </div>
      <div class="question-point">
      <?php if (!in_array('History_600', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=History&point=600&return_to=index.php">$600</a>
        <?php endif; ?>
      </div>
      <div class="question-point">
        <?php if (!in_array('Science_600', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=Science&point=600&return_to=index.php">$600</a>
        <?php endif; ?>
      </div>
      
      <div class="question-point">
        <?php if (!in_array('SciFi_600', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=SciFi&point=600&return_to=index.php">$600</a>
        <?php endif; ?>
      </div>
      <div class="question-point">
        <?php if (!in_array('TV_600', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=TV&point=600&return_to=index.php">$600</a>
        <?php endif; ?>
      </div>
      
      <!-- Points 800 -->
      <div class="question-point">
        <?php if (!in_array('Movies_800', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=Movies&point=800&return_to=index.php">$800</a>
        <?php endif; ?>
      </div>
      <div class="question-point">
        <?php if (!in_array('Sports_800', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=Sports&point=800&return_to=index.php">$800</a>
        <?php endif; ?>
      </div>
      <div class="question-point">
        <?php if (!in_array('History_800', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=History&point=800&return_to=index.php">$800</a>
        <?php endif; ?>
      </div>
      <div class="question-point">
        <?php if (!in_array('Science_800', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=Science&point=800&return_to=index.php">$800</a>
        <?php endif; ?>
      </div>
      
      <div class="question-point">
        <?php if (!in_array('SciFi_800', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=SciFi&point=800&return_to=index.php">$800</a>
        <?php endif; ?>
      </div>
      <div class="question-point">
        <?php if (!in_array('TV_800', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=TV&point=800&return_to=index.php">$800</a>
        <?php endif; ?>
      </div>
      
      <!-- Points 1000 -->
      <div class="question-point">
        <?php if (!in_array('Movies_1000', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=Movies&point=1000&return_to=index.php">$1000</a>
        <?php endif; ?>
      </div>
      <div class="question-point">
        <?php if (!in_array('Sports_1000', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=Sports&point=1000&return_to=index.php">$1000</a>
        <?php endif; ?>
      </div>
      <div class="question-point">
        <?php if (!in_array('History_1000', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=History&point=1000&return_to=index.php">$1000</a>
        <?php endif; ?>
      </div>
      <div class="question-point">
        <?php if (!in_array('Science_1000', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=Science&point=1000&return_to=index.php">$1000</a>
        <?php endif; ?>
      </div>
      
      <div class="question-point">
        <?php if (!in_array('SciFi_1000', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=SciFi&point=1000&return_to=index.php">$1000</a>
        <?php endif; ?>
      </div>

      <div class="question-point">
        <?php if (!in_array('TV_1000', $_SESSION['currentVisitedList'])): ?>
        <a href="question.php?category=TV&point=1000&return_to=index.php">$1000</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
      </body>
      </html>

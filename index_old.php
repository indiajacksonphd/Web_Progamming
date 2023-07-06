<!DOCTYPE html>
<html>
<head>
  <title>Jeopardy Game</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

   <div class="container_1">
    <div class="top">
      <!-- Content for the top div -->
    
        <div class="container">
          <h1>Jeopardy Game</h1>

          <div class="grid-container">
            <div class="category">Movies</div>
            <div class="category">Sports</div>
            <div class="category">History</div>
            <div class="category">Science</div>
            <div class="category">TV Shows</div>
            <div class="category">SciFi Conventions</div>

            <!-- Points 200 -->
            <div class="question-point">
              <a href="question.php?category=Movies&point=200">200</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=Sports&point=200">200</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=History&point=200">200</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=Science&point=200">200</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=TV%20Shows&point=200">200</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=SciFi%20Conventions&point=200">200</a>
            </div>
            
           <!-- Points 400 -->
            <div class="question-point">
              <a href="question.php?category=Movies&point=400">400</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=Sports&point=400">400</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=History&point=400">400</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=Science&point=400">400</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=TV%20Shows&point=400">400</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=SciFi%20Conventions&point=400">400</a>
            </div>
            

            <!-- Points 600 -->
            <div class="question-point">
              <a href="question.php?category=Movies&point=600">600</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=Sports&point=600">600</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=History&point=600">600</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=Science&point=600">600</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=TV%20Shows&point=600">600</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=SciFi%20Conventions&point=600">600</a>
            </div>


            <!-- Points 800 -->
            <div class="question-point">
              <a href="question.php?category=Movies&point=800">800</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=Sports&point=800">800</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=History&point=800">800</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=Science&point=800">800</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=TV%20Shows&point=800">800</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=SciFi%20Conventions&point=800">800</a>
            </div>
            

            <!-- Points 1000 -->
            <div class="question-point">
              <a href="question.php?category=Movies&point=1000">1000</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=Sports&point=1000">1000</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=History&point=1000">1000</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=Science&point=1000">1000</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=TV%20Shows&point=1000">1000</a>
            </div>
            <div class="question-point">
              <a href="question.php?category=SciFi%20Conventions&point=1000">1000</a>
            </div>

          </div>
        </div>


    </div>
    <div class="bottom">
      <!-- Content for the bottom div -->
      <?php include 'question.php';?>
    </div>
  </div>




</body>
</html>

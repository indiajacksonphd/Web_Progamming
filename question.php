<!DOCTYPE html>
<html>
<head>
  <title>Jeopardy Game</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="container">
    <?php
    // Define the questions
    $questions = [
      'Movies' => [
        200 => [
          'question' => 'This is the highest grossing film of all time.',
          'choices' => ['What is Avatar?', 'What is Avengers: Endgame?', 'What is Titanic?'],
          'answer' => 'What is Avengers: Endgame?'
        ],
        400 => [
          'question' => 'Which actor played the character Tony Stark in Iron Man?',
          'choices' => ['Robert Downey Jr.', 'Chris Evans', 'Chris Hemsworth'],
          'answer' => 'Robert Downey Jr.'
        ],
        600 => [
            'question' => 'This movie is based on a Marvel Comics character who can shrink in size and control ants.',
            'choices' => ['What is Ant-Man?', 'What is Spider-Man: Homecoming?', 'What is Black Panther?'],
            'answer' => 'What is Ant-Man?'
        ],
        800 => [
            'question' => 'This film directed by Christopher Nolan features a team of thieves who perform heists using dream-sharing technology.',
            'choices' => ['What is Inception?', 'What is Interstellar?', 'What is The Dark Knight?'],
            'answer' => 'What is Inception?'
        ],
        1000 => [
            'question' => 'This movie franchise follows the adventures of a group of dinosaurs brought back to life through genetic engineering.',
            'choices' => ['What is Jurassic Park?', 'What is Jaws?', 'What is E.T. the Extra-Terrestrial?'],
            'answer' => 'What is Jurassic Park?'
        ],
      ],
      
      'Sports' => [
        200 => [
            'question' => 'This sport uses a small ball and a racquet to hit it over a net.',
            'choices' => ['What is tennis?', 'What is basketball?', 'What is golf?'],
            'answer' => 'What is tennis?'
        ],
        400 => [
            'question' => 'This athlete won 23 Olympic gold medals in swimming.',
            'choices' => ['Who is Michael Phelps?', 'Who is Usain Bolt?', 'Who is Simone Biles?'],
            'answer' => 'Who is Michael Phelps?'
        ],
        600 => [
            'question' => 'This sport is known as "The Beautiful Game" and is played with a round ball.',
            'choices' => ['What is soccer?', 'What is baseball?', 'What is hockey?'],
            'answer' => 'What is soccer?'
        ],
        800 => [
            'question' => 'This team won the most Super Bowl championships in NFL history.',
            'choices' => ['Who are the New England Patriots?', 'Who are the Green Bay Packers?', 'Who are the Pittsburgh Steelers?'],
            'answer' => 'Who are the Pittsburgh Steelers?'
        ],
        1000 => [
            'question' => 'This sport is played on ice and involves shooting a rubber disk into the opponent\'s net.',
            'choices' => ['What is ice hockey?', 'What is figure skating?', 'What is curling?'],
            'answer' => 'What is ice hockey?'
        ],
      ],

      'History' => [
        200 => [
            'question' => 'This city was the capital of the Roman Empire.',
            'choices' => ['What is Rome?', 'What is Athens?', 'What is Alexandria?'],
            'answer' => 'What is Rome?'
        ],
        400 => [
            'question' => 'This historical event marked the end of World War II in Europe.',
            'choices' => ['What is the Battle of Stalingrad?', 'What is D-Day?', 'What is the Battle of Midway?'],
            'answer' => 'What is D-Day?'
        ],
        600 => [
            'question' => 'This famous civil rights leader gave the "I Have a Dream" speech.',
            'choices' => ['Who is Malcolm X?', 'Who is Rosa Parks?', 'Who is Martin Luther King Jr.?'],
            'answer' => 'Who is Martin Luther King Jr.?'
        ],
        800 => [
            'question' => 'This ancient civilization built the Great Wall of China.',
            'choices' => ['What is the Aztec Empire?', 'What is the Inca Empire?', 'What is the Qin Dynasty?'],
            'answer' => 'What is the Qin Dynasty?'
        ],
        1000 => [
            'question' => 'This historical figure led the Bolshevik Revolution in Russia.',
            'choices' => ['Who is Vladimir Lenin?', 'Who is Joseph Stalin?', 'Who is Leon Trotsky?'],
            'answer' => 'Who is Vladimir Lenin?'
        ],
      ],

      'Science' => [
        200 => [
            'question' => 'This is the smallest unit of matter.',
            'choices' => ['What is an atom?', 'What is a molecule?', 'What is a cell?'],
            'answer' => 'What is an atom?'
        ],
        400 => [
            'question' => 'This theory states that all living organisms are composed of cells.',
            'choices' => ['What is the theory of evolution?', 'What is the theory of relativity?', 'What is the cell theory?'],
            'answer' => 'What is the cell theory?'
        ],
        600 => [
            'question' => 'This natural satellite orbits the Earth.',
            'choices' => ['What is the Sun?', 'What is the Moon?', 'What is Mars?'],
            'answer' => 'What is the Moon?'
        ],
        800 => [
            'question' => 'This force holds the planets in orbit around the Sun.',
            'choices' => ['What is gravity?', 'What is magnetism?', 'What is centrifugal force?'],
            'answer' => 'What is gravity?'
        ],
        1000 => [
            'question' => 'This famous scientist developed the theory of general relativity.',
            'choices' => ['Who is Isaac Newton?', 'Who is Albert Einstein?', 'Who is Galileo Galilei?'],
            'answer' => 'Who is Albert Einstein?'
        ],
      ],

      'TV Shows' => [
        200 => [
            'question' => 'This TV show follows the lives of six friends living in New York City.',
            'choices' => ['What is Friends?', 'What is The Office?', 'What is Breaking Bad?'],
            'answer' => 'What is Friends?'
        ],
        400 => [
            'question' => 'This TV show features a high school chemistry teacher turned methamphetamine producer.',
            'choices' => ['What is Friends?', 'What is The Office?', 'What is Breaking Bad?'],
            'answer' => 'What is Breaking Bad?'
        ],
        600 => [
            'question' => 'This TV show is set in the fictional town of Hawkins and features a group of kids encountering supernatural events.',
            'choices' => ['What is Stranger Things?', 'What is The Big Bang Theory?', 'What is Game of Thrones?'],
            'answer' => 'What is Stranger Things?'
        ],
        800 => [
            'question' => 'This TV show revolves around a group of office employees working at Dunder Mifflin Paper Company.',
            'choices' => ['What is Friends?', 'What is The Office?', 'What is Breaking Bad?'],
            'answer' => 'What is The Office?'
        ],
        1000 => [
            'question' => 'This TV show is based on the book series "A Song of Ice and Fire" by George R.R. Martin.',
            'choices' => ['What is Friends?', 'What is The Office?', 'What is Game of Thrones?'],
            'answer' => 'What is Game of Thrones?'
        ],
      ],

      'SciFi Conventions' => [
        200 => [
            'question' => 'This sci-fi convention is held annually in San Diego, California.',
            'choices' => ['What is Comic-Con?', 'What is Dragon Con?', 'What is Star Trek Convention?'],
            'answer' => 'What is Comic-Con?'
        ],
        400 => [
            'question' => 'This science fiction franchise features a time-traveling alien known as The Doctor.',
            'choices' => ['What is Star Wars?', 'What is Doctor Who?', 'What is Battlestar Galactica?'],
            'answer' => 'What is Doctor Who?'
        ],
        600 => [
            'question' => 'This sci-fi convention is known for its extravagant costumes and showcases various fandoms.',
            'choices' => ['What is Worldcon?', 'What is Dragon Con?', 'What is Star Trek Convention?'],
            'answer' => 'What is Dragon Con?'
        ],
        800 => [
            'question' => 'This popular sci-fi franchise features a conflict between the Jedi and the Sith.',
            'choices' => ['What is Star Trek?', 'What is Star Wars?', 'What is The Matrix?'],
            'answer' => 'What is Star Wars?'
        ],
        1000 => [
            'question' => 'This sci-fi convention is one of the oldest and largest in the world, held in various locations.',
            'choices' => ['What is Worldcon?', 'What is Comic-Con?', 'What is Dragon Con?'],
            'answer' => 'What is Worldcon?'
        ],
      ]
    ];

    // Get the category and point from the URL
    if (isset($_GET['category']) && isset($_GET['point'])) {
    $category = $_GET['category'];
    $point = $_GET['point'];
    $question = $questions[$category][$point]['question'];
    $choices = $questions[$category][$point]['choices'];
    $answer = $questions[$category][$point]['answer'];

    // Convert the choices array to a string representation
    $choicesString = implode('|', $choices);

    //$question = $_GET['question'];
    //$choices = $_GET['choices'];
    // Retrieve the question for the given category and point
    
    // Redirect the user back to index.php with the desired parameters
    header('Location: index.php?category=' . urlencode($category) . '&answer=' . urlencode($answer) . '&point=' . urlencode($point) . '&question=' . urlencode($question)  . '&choices=' . urlencode($choicesString)); //. '&answer=' . urlencode($answer)); //. '&choices=' . urlencode($choices));// . '&question=' . urlencode($question) . '&choices=' . urlencode($choices) . '&answer=' . urlencode($answer));
    //header('Location: index.php?question=' . urlencode($question) . '&choices=' . urlencode($choices) . '&answer=' . urlencode($answer));
    exit; // Make sure to exit the script after the redirect
    }
    $question = $questions[$category][$point]['question'];
    $choices = $questions[$category][$point]['choices'];
    $answer = $questions[$category][$point]['answer'];
    
    ?>

    <div class="question-container">
      <div class="question"><?php echo $question; ?></div>
    </div>

    <div class="choices-container">
      <?php foreach ($choices as $choice) : ?>
        <div class="choice">
          <form action="answer.php" method="POST">
            <input type="hidden" name="category" value="<?php echo $category; ?>">
            <input type="hidden" name="point" value="<?php echo $point; ?>">
            <button type="submit" name="answer" value="<?php echo $choice; ?>">
              <?php echo $choice; ?>
            </button>
          </form>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>

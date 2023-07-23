let seconds = 0;
let minutes = 0;
let timerInterval;
let state = 1;
let game = document.querySelector("#game");
let noOfMoves = document.querySelector("#counter").innerText;
noOfMoves = isNaN(noOfMoves) ? 0 : noOfMoves;


// Listens for click on game cells
game.addEventListener("click", function(e) {
  if (state == 1) {
    // Enables sliding animation
    game.className = "animate";
    moveToEmptyCell(e.target, 1);
    console.log("It Clicked");
  }
});

// Listens for click on control buttons
document.getElementById("solve").addEventListener("click", puzzleOne);
document.getElementById("solve").addEventListener("click", puzzleTwo);
document.getElementById("solve").addEventListener("click", puzzleThree);
document.getElementById("solve").addEventListener("click", puzzleFour);
document.getElementById("solve").addEventListener("click", puzzleFive);
document.getElementById("shuffle").addEventListener("click", shuffle);

function startTimer() {
  timerInterval = setInterval(updateTimerDisplay, 1000);
}

function stopTimer() {
  clearInterval(timerInterval);
}

function resetTimer() {
  stopTimer();
  seconds = 0;
  minutes = 0;
}

function updateTimerDisplay() {
  seconds++;
  if (seconds === 60) {
    seconds = 0;
    minutes++;
  }

  let secondsFormatted = seconds < 10 ? `0${seconds}` : seconds;
  let minutesFormatted = minutes < 10 ? `0${minutes}` : minutes;
  document.getElementById("timer").innerText = `${minutesFormatted}:${secondsFormatted}`;
}

  // Builds the 4 by 4 Puzzle for Arthur Morgan from Red Dead Redemption..
  function puzzleOne() {
    document.getElementById("timer").innerText = "00:00";
    
    if (state == 0) {
      return;
    }
    game.innerHTML = ""; // Clear the game area
    let n = 1;
    for (let i = 0; i < 4; i++) {
      for (let j = 0; j < 4; j++) {
        let cell = document.createElement("span"); // create one cell
        cell.id = `cell-${i}-${j}`; // 'cell-' + i + '-' + j; give id to the cell
        cell.style.left = j * 100 + 1 * j + 1 + "px"; // position of the cell from left
        cell.style.top = i * 100 + 1 * i + 1 + "px"; // position of the cell from the top
        if (n <= 15) {
          cell.classList.add("number");
          cell.classList.add(`piece_1-${n}`); 
          cell.innerHTML = (n++).toString();
        } else {
          cell.className = "empty";
        }
        game.appendChild(cell);
      }
    }
     resetMoves();

    
    resetTimer();
    setTimeout(function () {
      shuffle();
      startTimer();
    }, 2000);
    
  }
   // Builds the 4 by 4 Puzzle for Chun Li from Street Fighter..
   function puzzleTwo() {
    document.getElementById("timer").innerText = "00:00";
    if (state == 0) {
      return;
    }
    game.innerHTML = ""; // Clear the game area
    let n = 1;
    for (let i = 0; i < 4; i++) {
      for (let j = 0; j < 4; j++) {
        let cell = document.createElement("span"); // create one cell
        cell.id = `cell-${i}-${j}`; //'cell-' + i + '-' + j; give id to the cell
        cell.style.left = j * 100 + 1 * j + 1 + "px"; // position of the cell from left
        cell.style.top = i * 100 + 1 * i + 1 + "px"; // position of the cell from the top
        if (n <= 15) {
          // numberCell
          cell.classList.add("number");
          cell.classList.add(`piece_2-${n}`);  
          cell.innerHTML = (n++).toString();

        } else {
          // emptyCell
          cell.className = "empty";
        }
        game.appendChild(cell);
      }
    }
    resetMoves();
    resetTimer();
   
    setTimeout(function () {
      shuffle();
      startTimer();
    }, 2000); 
  }

    // Builds the 4 by 4 Puzzle for Mario from Super Mario Bros franchise..
  function puzzleThree() {
    document.getElementById("timer").innerText = "00:00";
    if (state == 0) {
      return;
    }
    game.innerHTML = ""; // Clear the game area
    let n = 1;
    for (let i = 0; i < 4; i++) {
      for (let j = 0; j < 4; j++) {
        let cell = document.createElement("span"); // create one cell
        cell.id = `cell-${i}-${j}`; //'cell-' + i + '-' + j; give id to the cell
        cell.style.left = j * 100 + 1 * j + 1 + "px"; // position of the cell from left
        cell.style.top = i * 100 + 1 * i + 1 + "px"; // position of the cell from the top
        if (n <= 15) {
          // numberCell
          cell.classList.add("number");
          cell.classList.add(`piece_3-${n}`);  
          cell.innerHTML = (n++).toString();

        } else {
          // emptyCell
          cell.className = "empty";
        }
        game.appendChild(cell);
      }
    }
    resetMoves();
    resetTimer();
    setTimeout(function () {
      shuffle();
      startTimer();
    }, 2000);
  }

    // Builds the 4 by 4 Puzzle for Link from Legend of Zelda franchise..
  function puzzleFour() {
    document.getElementById("timer").innerText = "00:00";
    if (state == 0) {
      return;
    }
    game.innerHTML = ""; // Clear the game area
    let n = 1;
    for (let i = 0; i < 4; i++) {
      for (let j = 0; j < 4; j++) {
        let cell = document.createElement("span"); // create one cell
        cell.id = `cell-${i}-${j}`; //'cell-' + i + '-' + j; give id to the cell
        cell.style.left = j * 100 + 1 * j + 1 + "px"; // position of the cell from left
        cell.style.top = i * 100 + 1 * i + 1 + "px"; // position of the cell from the top
        if (n <= 15) {
          // numberCell
          cell.classList.add("number");
          cell.classList.add(`piece_4-${n}`);  
          cell.innerHTML = (n++).toString();

        } else {
          // emptyCell
          cell.className = "empty";
        }
        game.appendChild(cell);
      }
    }
    resetMoves();
    resetTimer();
    setTimeout(function () {
      shuffle();
      startTimer();
    }, 2000);
  }

    // Builds the 4 by 4 Puzzle for MegaMan from MegaMan franchise..
  function puzzleFive() {
    document.getElementById("timer").innerText = "00:00";
    if (state == 0) {
      return;
    }
    game.innerHTML = ""; // Clear the game area
    let n = 1;
    for (let i = 0; i < 4; i++) {
      for (let j = 0; j < 4; j++) {
        let cell = document.createElement("span"); // create one cell
        cell.id = `cell-${i}-${j}`; //'cell-' + i + '-' + j; give id to the cell
        cell.style.left = j * 100 + 1 * j + 1 + "px"; // position of the cell from left
        cell.style.top = i * 100 + 1 * i + 1 + "px"; // position of the cell from the top
        if (n <= 15) {
          // numberCell
          cell.classList.add("number");
          cell.classList.add(`piece_5-${n}`);  
          cell.innerHTML = (n++).toString();

        } else {
          // emptyCell
          cell.className = "empty";
        }
        game.appendChild(cell);
      }
    }
    resetMoves();
    resetTimer();
    setTimeout(function () {
      shuffle();
      startTimer();
    }, 2000);
  }

  // shuffles the board
  function shuffle() {
    if (state == 0) {
      return;
    }
    state = 0;
    let previousCell;
    let i = 1;
    let interval = setInterval(function() {
      if (i <= 150) {
        let adjacent = grabAdjacentCell(grabEmptyCell());
        if (previousCell) {
          for (let j = adjacent.length - 1; j >= 0; j--) {
            if (adjacent[j].innerHTML == previousCell.innerHTML) {
              adjacent.splice(j, 1);
            }
          }
        }
        // Gets random adjacent cell and memorizes it for the next iteration
        previousCell = adjacent[randomGenerator(0, adjacent.length - 1)];
        moveToEmptyCell(previousCell, 0);
        i++;
      } else {
        clearInterval(interval);
        state = 1;
      }
    }, 5);
     resetMoves();
  }


  function resetMoves() {
    noOfMoves = 0;
    document.getElementById("counter").innerText = noOfMoves;
  }

  function moveToEmptyCell(cell, playingOrShuffling) {
    // Checks if selected cell has number
    if (cell.className != "empty") {
      // Tries to get empty adjacent cell
      let emptyCell = grabEmptyAdjacentCell(cell);
      
      if (emptyCell) {
        if (playingOrShuffling === 1) {
             noOfMoves++;
             document.getElementById("counter").innerText = noOfMoves;
        }
        // There is empty adjacent cell..
        // styling and id of the number cell
        let tempCell = { style: cell.style.cssText, id: cell.id };
        // Exchanges id and style values
        cell.style.cssText = emptyCell.style.cssText;
        cell.id = emptyCell.id;
        emptyCell.style.cssText = tempCell.style;
        emptyCell.id = tempCell.id;

        if (state == 1) {
          // Checks the order of numbers
          solvedState();
        }
      }
    }
  }

  // find cell by row and column
  function grabCell(row, col) {
    return document.getElementById(`cell-${row}-${col}`);
  }

  // finds the empty cell.
  function grabEmptyCell() {
    return game.querySelector(".empty");
  }

  // Finds empty adjacent cell if it exists.
  function grabEmptyAdjacentCell(cell) {
    // Gets all adjacent cells
    let adjacent = grabAdjacentCell(cell);

    // Searches for empty cell
    for (let i = 0; i < adjacent.length; i++) {
      if (adjacent[i].className == "empty") {
        return adjacent[i];
      }
    }

    

    // Empty adjacent cell was not found..
    return false;
  }

  // Finds all adjacent cells
  function grabAdjacentCell(cell) {
    let id = cell.id.split("-");

    // Gets cell position indexes
    let row = parseInt(id[1]);
    let col = parseInt(id[2]);

    let adjacent = [];

    // Gets all possible adjacent cells
    if (row < 3) {
      adjacent.push(grabCell(row + 1, col)); // right
    }
    if (row > 0) {
      adjacent.push(grabCell(row - 1, col)); // left
    }
    if (col < 3) {
      adjacent.push(grabCell(row, col + 1)); // top
    }
    if (col > 0) {
      adjacent.push(grabCell(row, col - 1)); // bottom
    }
    return adjacent;
  }

  // Checks if the order of numbers is correct and we get solved-state..
  function solvedState() {
    // Checks if the empty cell is in correct position
    if (grabCell(3, 3).className != "empty") {
      return;
    }

    let n = 1;
    // Goes through all cells and checks numbers
    for (let i = 0; i < 4; i++) {
      for (let j = 0; j < 4; j++) {
        if (n <= 15 && grabCell(i, j).innerHTML != n.toString()) {
          // Order is not correct
          return;
        }
        n++;
      }
    }
    // Puzzle is solved, offers to shuffle it
    startCongrats(), shuffle();
  }

  //  random number generator
  function randomGenerator(from, to) {
    return Math.floor(Math.random() * (to - from + 1)) + from;
  }


function startCongrats() {
  document.getElementById("overlay-2").style.display = "block";
}

function endCongrats() {
  document.getElementById("overlay-2").style.display = "none";
}

   function Sound(source, volume, loop) {
    this.audio = new Audio(source);
    this.audio.volume = volume;
    this.audio.loop = loop;
    this.init = function (volume, loop) {
      this.audio.volume = volume;
      this.audio.loop = loop;
    };
  }

  var sound = new Sound("https://lgphycloudlogs1.s3.amazonaws.com/link.mp3", 0.5, true);
  function playSound() {
      sound.audio.play();
  }

  function stopSound() {
    sound.audio.pause();
    sound.audio.currentTime = 0;
  }  
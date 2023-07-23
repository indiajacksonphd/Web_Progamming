  let seconds = 0;
  let minutes = 0;
  let timerInterval;
  let state = 1;
  let game2 = document.querySelector("#game2");
  let noOfMoves = document.querySelector("#counter").innerText;
  noOfMoves = isNaN(noOfMoves) ? 0 : noOfMoves;
  // Listens for click on game cells
  game2.addEventListener("click", function(e) {
    if (state == 1) {
      // Enables sliding animation
      game2.className = "animate";
      moveToEmptyCell(e.target, 1);
    }
  });

  // Listens for click on control buttons
  document.getElementById("solve").addEventListener("click", puzzleSix);
  document.getElementById("solve").addEventListener("click", puzzleSeven);
  document.getElementById("solve").addEventListener("click", puzzleEight);
  document.getElementById("solve").addEventListener("click", puzzleNine);
  document.getElementById("solve").addEventListener("click", puzzleTen);
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
  
    // Builds the 3 by 3 Puzzle for Arthur Morgan from Red Dead Redemption..
    function puzzleSix() {
      document.getElementById("timer").innerText = "00:00";
      
      if (state == 0) {
        return;
      }
      game2.innerHTML = ""; // Clear the game area
      let n = 1;
      for (let i = 0; i < 3; i++) {
        for (let j = 0; j < 3; j++) {
          let cell = document.createElement("span"); // create one cell
          cell.id = `cell-${i}-${j}`; //'cell-' + i + '-' + j; give id to the cell
          cell.style.left = j * 100 + 1 * j + 1 + "px"; // position of the cell from left
          cell.style.top = i * 100 + 1 * i + 1 + "px"; // position of the cell from the top
          if (n <= 8) {
            // numberCell
            cell.classList.add("number");
            cell.classList.add(`piece_6-${n}`); 
            cell.innerHTML = (n++).toString();
  
          } else {
            // emptyCell
            cell.className = "empty";
          }
          game2.appendChild(cell);
        }
      }
       restMoves();
  
      
      resetTimer();
      setTimeout(function () {
        shuffle();
        startTimer();
      }, 2000);
      
    }
     // Builds the 3 by 3 Puzzle for Chun Li from Street Fighter..
     function puzzleSeven() {
      document.getElementById("timer").innerText = "00:00";
      if (state == 0) {
        return;
      }
      game2.innerHTML = ""; // Clear the game area
      let n = 1;
      for (let i = 0; i < 3; i++) {
        for (let j = 0; j < 3; j++) {
          let cell = document.createElement("span"); // create one cell
          cell.id = `cell-${i}-${j}`; //'cell-' + i + '-' + j; give id to the cell
          cell.style.left = j * 100 + 1 * j + 1 + "px"; // position of the cell from left
          cell.style.top = i * 100 + 1 * i + 1 + "px"; // position of the cell from the top
          if (n <= 8) {
            // numberCell
            cell.classList.add("number");
            cell.classList.add(`piece_7-${n}`);  
            cell.innerHTML = (n++).toString();
  
          } else {
            // emptyCell
            cell.className = "empty";
          }
          game2.appendChild(cell);
        }
      }
      restMoves();
      resetTimer(); 
      setTimeout(function () {
        shuffle();
        startTimer();
      }, 2000);
      
    }
  
      // Builds the 3 by 3 Puzzle for Mario from Super Mario Bros franchise..
    function puzzleEight() {
      document.getElementById("timer").innerText = "00:00";
      if (state == 0) {
        return;
      }
      game2.innerHTML = ""; // Clear the game area
      let n = 1;
      for (let i = 0; i < 3; i++) {
        for (let j = 0; j < 3; j++) {
          let cell = document.createElement("span"); // create one cell
          cell.id = `cell-${i}-${j}`; //'cell-' + i + '-' + j; give id to the cell
          cell.style.left = j * 100 + 1 * j + 1 + "px"; // position of the cell from left
          cell.style.top = i * 100 + 1 * i + 1 + "px"; // position of the cell from the top
          if (n <= 8) {
            // numberCell
            cell.classList.add("number");
            cell.classList.add(`piece_8-${n}`);  
            cell.innerHTML = (n++).toString();
  
          } else {
            // emptyCell
            cell.className = "empty";
          }
          game2.appendChild(cell);
        }
      }
       restMoves();
     resetTimer();
      setTimeout(function () {
        shuffle();
        startTimer();
      }, 2000);
    }
  
      // Builds the 3 by 3 Puzzle for Link from Legend of Zelda franchise..
    function puzzleNine() {
      document.getElementById("timer").innerText = "00:00";
      if (state == 0) {
        return;
      }
      game2.innerHTML = ""; // Clear the game area
      let n = 1;
      for (let i = 0; i < 3; i++) {
        for (let j = 0; j < 3; j++) {
          let cell = document.createElement("span"); // create one cell
          cell.id = `cell-${i}-${j}`; //'cell-' + i + '-' + j; give id to the cell
          cell.style.left = j * 100 + 1 * j + 1 + "px"; // position of the cell from left
          cell.style.top = i * 100 + 1 * i + 1 + "px"; // position of the cell from the top
          if (n <= 8) {
            // numberCell
            cell.classList.add("number");
            cell.classList.add(`piece_9-${n}`);  
            cell.innerHTML = (n++).toString();
  
          } else {
            // emptyCell
            cell.className = "empty";
          }
          game2.appendChild(cell);
        }
      }
       restMoves();
      resetTimer();
      setTimeout(function () {
        shuffle();
        startTimer();
      }, 2000);
    }
  
      // Builds the 3 by 3 Puzzle for MegaMan from MegaMan franchise..
    function puzzleTen() {
      document.getElementById("timer").innerText = "00:00";
      if (state == 0) {
        return;
      }
      game2.innerHTML = ""; // Clear the game area
      let n = 1;
      for (let i = 0; i < 3; i++) {
        for (let j = 0; j < 3; j++) {
          let cell = document.createElement("span"); // create one cell
          cell.id = `cell-${i}-${j}`; //'cell-' + i + '-' + j; give id to the cell
          cell.style.left = j * 100 + 1 * j + 1 + "px"; // position of the cell from left
          cell.style.top = i * 100 + 1 * i + 1 + "px"; // position of the cell from the top
          if (n <= 8) {
            // numberCell
            cell.classList.add("number");
            cell.classList.add(`piece_10-${n}`);  
            cell.innerHTML = (n++).toString();
  
          } else {
            // emptyCell
            cell.className = "empty";
          }
          game2.appendChild(cell);
        }
      }
       restMoves();
      resetTimer();
      setTimeout(function () {
        shuffle();
        startTimer();
      }, 2000);
    }
  
    // shuffle the game
    function shuffle() {
      if (state == 0) {
        return;
      }
      game2.removeAttribute("class"); // remove animation..
      state = 0;
      let previousCell;
      let i = 1;
      let interval = setInterval(function() {
        if (i <= 150) {
          let adjacent = grabAdjacentCells(grabEmptyCell());
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
       restMoves();
    }
  
  
    function restMoves() {
      noOfMoves = 0;
      document.getElementById("counter").innerText = noOfMoves;
    }
  
    // Shifts number cell to the empty cell
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
  
    // Gets specific cell by row and column.
    function grabCell(row, col) {
      return document.getElementById(`cell-${row}-${col}`);
    }
  
    // get the empty cell.
    function grabEmptyCell() {
      return game2.querySelector(".empty");
    }
  
    // Gets empty adjacent cell if it exists.
    function grabEmptyAdjacentCell(cell) {
      // Gets all adjacent cells
      let adjacent = grabAdjacentCells(cell);
  
      // Searches for empty cell
      for (let i = 0; i < adjacent.length; i++) {
        if (adjacent[i].className == "empty") {
          return adjacent[i];
        }
      }
  
      
  
      // Empty adjacent cell was not found..
      return false;
    }
  
    // Gets all adjacent cells
    function grabAdjacentCells(cell) {
      let id = cell.id.split("-");
  
      // Gets cell position indexes
      let row = parseInt(id[1]);
      let col = parseInt(id[2]);
  
      let adjacent = [];
  
      // Gets all possible adjacent cells
      if (row < 2) {
        adjacent.push(grabCell(row + 1, col)); // right
      }
      if (row > 0) {
        adjacent.push(grabCell(row - 1, col)); // left
      }
      if (col < 2) {
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
      if (grabCell(2, 2).className != "empty") {
        return;
      }
  
      let n = 1;
      // Goes through all cells and checks numbers
      for (let i = 0; i < 3; i++) {
        for (let j = 0; j < 3; j++) {
          if (n <= 8 && grabCell(i, j).innerHTML != n.toString()) {
            // Order is not correct
            return;
          }
          n++;
        }
      }
      // Puzzle is solved, offers to shuffle it
      startCongrats(), shuffle();
    }
  
    // Generates random number
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
  
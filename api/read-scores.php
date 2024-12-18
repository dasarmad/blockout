<?php
  include_once '../config/Database.php';
  include_once '../models/Scoreboard.php';
  include_once '../php/datetime.php';

  // Instantiate DB & Connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate Scoreboard Object
  $scoreboard = new Scoreboard($db);

  // Set Properties
  $scoreboard->gameSetPattern = '%'.$_POST['setValue'].'%';
  $scoreboard->gamePitPattern = '%'.$_POST['pitValue'].'%';
  $scoreboard->gameLevelPattern = '%'.$_POST['levelValue'].'%';

  // Get All Scores
  $result = $scoreboard->read();

  // If There's More Than One Row
  if($result->rowCount()) {
    $firstRow = true; // Variable for Identifying the First Row
    $countRow = 1; // Variable for Counting Row

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      if($firstRow) {
        echo '<div class="sb-row first-row">';
        $firstRow = false;
      } else {
        echo '<div class="sb-row">';
      }

      // Getting All Values
      $playerName = $row['playerName'];
      $gameSet = $row['gameSet'];
      $gamePit = $row['gamePit'];
      $gameLevel = $row['gameLevel'];
      $playerScore = $row['playerScore'];

      $dateTime = new DatetimeConversion($row['playedAt']);
      $date = $dateTime->getDate();
      $time = $dateTime->getTime();
      $playedAt = "$date at ".substr($row['playedAt'], 11, 5);

      $countryName = $row['countryName'];
      $ipAddress = $row['ipAddress'];

      // Preparing for the DOM
      echo '<span class="sb-col rank">
          <span class="circle">'.$countRow.'</span>
        </span>
        <span class="sb-col player">'.$playerName.'</span>
        <span class="sb-col set">'.$gameSet.'</span>
        <span class="sb-col pit">'.$gamePit.'</span>
        <span class="sb-col level">'.$gameLevel.'</span>
        <span class="sb-col score">'.$playerScore.'</span>
        <span class="sb-col played-at">'.$playedAt.'</span>
        <span class="sb-col country">'.$countryName.'</span>
        <span class="sb-col ip-address">
          <a href="location.php?ipAddress='.$ipAddress.'">'.$ipAddress.'</a>
        </span>
      </div>';

      $countRow++;
    }
  }
?>
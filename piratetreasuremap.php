<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirate Treasure Map</title>
</head>
<body>
</body>
<?php
    $clue = "find the hidden treasure at the golden island";
    echo $clue."<br>";
    $find = "golden";
    $replace = "mystic";
    $result = str_replace($find,$replace,$clue);
    echo strtoupper($result);
?>
</html>
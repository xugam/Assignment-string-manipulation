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
    echo $clue;
    $arr = explode(" ",$clue);
    echo "<br>";
    $i=0;
    foreach ($arr as $key => $value) {
        if($value=="golden"){
            $arr[$i] = "mystic";
        }
        $i++;
    }
    $result = implode(" ",$arr);
    echo strtoupper($result);
?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Enchanted Spell Check</title>
</head>
<body>
</body>
<?php
    $spell = "   ABRACADABRA   ";
    $result = trim($spell);
    $result = strtolower($result);
    echo "The spell is :".$result."<br>";
    if($result=="abracadabra"){
        echo "The spell is correct.";
    }
    else{
        echo "The world is in danger";
    }
?>
</html>
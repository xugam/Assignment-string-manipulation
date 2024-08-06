<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fantasy Character Name Generator</title>
</head>
<body>
</body>
<?php
    $name = "Gandalf,Aragorn,Legolas";
    $arr = explode(",",$name);
    $n=0;
    foreach ($arr as $key => $value) {
        $arr[$n] = strtolower($value);
        $n++;
    }
    $result = implode("*",$arr);
    echo $result;
?>
</html>
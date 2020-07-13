<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

if(isset($_POST['temperature'])){

    $temperature = $_POST['temperature'];
    $units = $_POST['units'];

    if($units == "C"){
        $result = $temperature * 9 / 5 + 32;
    } else {
        $result = ($temperature - 32) *5 / 9;
    }

    echo "The converted temp is $result";
}
?>
</body>
</html>
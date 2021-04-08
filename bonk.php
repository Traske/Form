<?php
    if(isset($_POST['submit'])){
        $fNum = $_POST['firstNumber'];
        $sNum = $_POST['secondNumber'];
        if(empty($fNum) && is_numeric($fNum)){
            $fNum="första nummret är tomt";
        };
        if(empty($sNum) && is_numeric($sNum)){
            $sNum="andra numret är tomt";
        };
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokument</title>
</head>
<body>
<?php 
    if(isset($_POST['submit'])){
        echo $result = number_format($fNum * $sNum, 2);
    }
?>
</body>
</html>
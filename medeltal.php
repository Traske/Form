<?php
    if(isset($_POST['submit'])){
        $medeltal = $_POST['medeltal'];

        $exmedel = explode(",", $medeltal);

        $result = 0;
        
        $length = count($exmedel);

        for ($i=0; $i < sizeof($exmedel); $i++) { 
            $exmedel[$i] = (int)$exmedel[$i];
            $result = $result + $exmedel[$i];
        }
        $result = $result/sizeof($exmedel);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medeltal</title>
</head>
<body>
<?php 
    echo number_format($result, 2);
?>
</body>
</html>
<?php 
    if(isset($_POST['submit'])){
        $monthnumber = $_POST['month'];
    }
    if ($monthnumber == 1) {
        $monthnumber = str_replace(1, "Januari", $monthnumber);
    } elseif ($monthnumber == 2) {
        $monthnumber = str_replace(2, "Februari", $monthnumber);
    } else {
        $monthnumber = str_replace(3, "Mars", $monthnumber);

        $monthnumber = str_replace(4, "April", $monthnumber);

        $monthnumber = str_replace(5, "Maj", $monthnumber);

        $monthnumber = str_replace(6, "Juni", $monthnumber);

        $monthnumber = str_replace(7, "Juli", $monthnumber);

        $monthnumber = str_replace(8, "Augusti", $monthnumber);

        $monthnumber = str_replace(9, "Semptember", $monthnumber);

        $monthnumber = str_replace(10, "Oktober", $monthnumber);

        $monthnumber = str_replace(11, "November", $monthnumber);

        $monthnumber = str_replace(12, "December", $monthnumber);
    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Month</title>
</head>
<body>
<?php if(isset($_POST['submit'])){
        echo $monthnumber;
        }?>
</body>
</html>
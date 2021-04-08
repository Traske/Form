<?php 
    if(isset($_POST['submit'])){
        $fixText = $_POST['fixText'];
        $lenght = strlen($fixText);
    }
    $fixText = str_replace("a", "A", $fixText);

    $fixText = str_replace("e", "E", $fixText);

    $fixText = str_replace("i", "I", $fixText);

    $fixText = str_replace("o", "O", $fixText);

    $fixText = str_replace("u", "U", $fixText);

    $fixText = str_replace("y", "Y", $fixText);

    $fixText = str_replace("å", "Å", $fixText);

    $fixText = str_replace("ä", "Ä", $fixText);

    $fixText = str_replace("ö", "Ö", $fixText);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fixText</title>
</head>
<body>
<?php if(isset($_POST['submit'])){
    echo '<div style = "width:400px;">'.nl2br($fixText)."</div>".
     "<br>är $lenght långt";
        }?>
</body>
</html>
<?php 
    if(isset($_GET['submit'])){

        $username = $_GET['username'];

        $comment = $_GET['comment'];

        $age = $_GET['age'];
        
        if(empty($username)){
            $username="username";
        }
        if(empty($comment)){
            $comment="comment";
        }
        if(empty($age)){
            $comment="ja vet int";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(isset($_GET['submit'])){
        echo "ditt namn e $username o du e $comment o ditt datum e $age";
        }?>
</body>
</html>
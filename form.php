<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpform</title>
</head>
<body>
   
    <form action="welcome.php" method="get">
        <p><label for="username">Skriv användarnamn: </label>
            <input type="text" name="username" id="username">
        </p>

        <p><label for="comment"></label>
            <textarea name="comment" id="comment" rows="5" cols="40" placeholder="Skriv en kommentar"></textarea>
        </p>

        <p><label for="age">Skriv din ålder</label>
            <input type="date" name="age" id="age">
        </p>
        <button type="submit" name="submit">Skicka</button>
        
    </form>
    
    <form action="square.php" method="post">

        <p><label for="firstNumber">Skriv ett nummer: </label>
            <input type="number" name="firstNumber" id="firstNumber">
        </p>

        <p><label for="secondNumber">Skriv ett nummer: </label>
            <input type="number" name="secondNumber" id="secondNumber">
        </p>

        <button type="submit" name="submit">Skicka</button>
    </form>
    
    <form action="medeltal.php" method="post">

        <p><label for="firstNumber">Skriv flera nummror med ett , mellan dom: </label>
            <input type="text" name="medeltal" id="medeltal">
        </p>

        <button type="submit" name="submit">Skicka</button>

    </form>
    
    <form action="fixText.php" method="post">

        <p><label for="fixText"></label>
            <textarea name="fixText" id="fixText" rows="5" cols="40" placeholder="Skriv något fint till mig"></textarea>
        </p>

        <button type="submit" name="submit">Skicka</button>

    </form>
   
    <form action="month.php" method="post">

        <p><label for="number"></label>
            <input type="number" name="month" id="month" max="12">
        </p>

        <button type="submit" name="submit">Skicka</button>

</form>
</body>
</html>
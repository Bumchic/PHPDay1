<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <h1>input radius</h1>
    <br>
    <input type="text" name="input">
    <input type="submit" name="submitbtn">
    </form>
    
    <?php
        if(isset($_POST["submitbtn"]))
        {
            $number = $_POST["input"];
            echo $number * $number * pi();
        }
    ?>
</body>
</html>
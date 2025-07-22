<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <h1>input word</h1>
    <br>
    <input type="text" name="input">
    <input type="submit" name="submitbtn">
    </form>
    
    <?php
        if(isset($_POST["submitbtn"]))
        {
            $string = $_POST["input"];
            $stringrev = [];
            for($i = strlen($string) -1; $i>= 0; $i--)
            {
                $stringrev[] = $string[$i];
            }
            EchoArray($stringrev);
        }
        function EchoArray($string)
        {
            $lim = sizeof($string);
            foreach($string as $char)
            {
                echo $char;
            }
        }
    ?>
</body>
</html>
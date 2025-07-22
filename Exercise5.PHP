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
            $vowel = ['a', 'i', 'u', 'e', 'o'];
            $count = 0;
            $string = $_POST["input"];
            for($i =0; $i<strlen($string); $i++)
            {
                if(in_array($string[$i], $vowel))
                {
                    $count++;
                }
            }
            echo $count;
        }
    ?>
</body>
</html>
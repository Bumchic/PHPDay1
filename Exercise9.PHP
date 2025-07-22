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
            $result = 1;
            $number = strval($_POST["input"]);
            if(CheckPalindrome($number))
            {
                echo "Is palindrome";
            }else{
                echo "not palindrome";
            }

        }
        function CheckPalindrome($num)
        {
            $len = strlen($num) - 1;
            for($i=0; $i<$len/2; $i++)
            {
                if($num[$i] != $num[$len - $i])
                {
                    return false;
                }
            }
            return true;
        }
    ?>
</body>
</html>
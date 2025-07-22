<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <h1>input number for fibonacci</h1>
    <br>
    <input type="number" name="input">
    <input type="submit" name="submitbtn">
    </form>
    
    <?php
        if(isset($_POST["submitbtn"]))
        {
            $number = $_POST["input"];
            fibosequence($number);
        }
        function fibosequence($number)
        {
            $lastnum = 0;
            $curnum = 1;
            for($i = 0; $i <= $number; $i++)
            {
                echo $curnum.  ' ';
                $a = $lastnum;
                $lastnum = $curnum;
                $curnum = $a + $curnum;
            }
        }
    ?>
</body>
</html>
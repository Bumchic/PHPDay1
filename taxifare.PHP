<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>input kilometer</H1>
    <form action="" method="post">
        <input type="text" name="km" id="">
        <input type="submit" name="btnsend">
    </form>
    <?php
    if(isset($_POST["btnsend"]))
    {
        $distance = $_POST['km'];
        if($distance < 1)
        {
            echo $distance * 15000;
        }else if($distance < 6)
        {
            echo $distance * 12000;
        }else if($distance >= 6)
        {
            if($distance > 140)
            {
                echo ($distance * 90000) - (($distance * 90000) * 0.12);
            }else
            {
                echo ($distance * 90000);
            }
        }
        
    }
    ?>
</body>
</html>
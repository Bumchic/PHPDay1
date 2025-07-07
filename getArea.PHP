<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <H1>input num</H1>
    </div>
    <form action="" method="post">
        <div>
            <input type="text" name="input">
        </div>
        <div>
            <input type="submit" value="send" name="btnsend">
        </div>
    </form>
    <?php
    if(isset($_POST['btnsend']))
    {
        $inputArray = explode(',', $_POST['input']);
        $max = $inputArray[0];
        for($i =0; $i<count($inputArray); $i++)
        {
            if($max < $inputArray[$i])
            {
                $max = $inputArray[$i];
            }
        }
        echo $max;
    }
    ?>
</body>
</html>
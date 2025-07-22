<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <h1>input triangle side</h1>
    <br>
    <div><label for="input1">side 1</label>
    <input type="number" name="input" id="input1" value="0"></div>
    <div><label for="input2">side 2</label>
    <input type="number" name="input2" id="input2" value="0"></div>
    <div><label for="input3">side 3</label>
    <input type="number" name="input3" id="input3" value="0"></div>
    
    
    
    <input type="submit" name="submitbtn">
    </form>
    
    <?php
        if(isset($_POST["submitbtn"]))
        {
            $num1 = $_POST["input"] ?? 0;
            $num2 = $_POST["input2"] ?? 0;
            $num3 = $_POST["input3"]  ?? 0;
            
            echo $num1 + $num2 + $num3;
        }
    ?>
</body>
</html>
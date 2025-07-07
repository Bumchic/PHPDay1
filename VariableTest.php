<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>input name</H1>
    <form action="" method="post">
        <input type="text" name="name">
        <input type="submit" value="send" name='btnsend'>
    </form>
    <?php
    if(isset($_POST['btnsend']))
    {
            $name = $_POST['name'];
            echo '<h2>welcome '. $name.'</h2>';
    }
    ?>
</body>
</html>

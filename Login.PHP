<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <H1>Login</H1>
                <form action="" method="post">
                    <div>
                    <h2>UserName:</h2>
                    <input type="text" name="userName">
                    <h2>Password:</h2>
                    <input type="password" name="password">
                    </div>
                    <div>
                    <input type="submit" name="btnsubmit">
                    </div>
                </form>
        </div>
        <div class="col">
            <H3>Your age: 
            <?php
                echo date("Y") - 2004
            ?>
            </H3>
        </div>
    </div>

</div>
    
        <?php
    $DBUserName = 'Admin';
    $DBPass = '123';
    if(isset($_POST['btnsubmit']))
    {
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        if($userName == $DBUserName && $password == $DBPass)
        {
            header ("Location: HelloWorldTest.PHP");
        }else{
            echo ('<h2>Invalid username or password </h2>');
        }
    }
    ?>
</body>
</html>
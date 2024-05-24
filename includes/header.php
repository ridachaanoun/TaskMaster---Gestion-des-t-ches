<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <p class="tms">Task Management System</p>

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <?php if(isset($_COOKIE["username"])) {
                        echo "hello " . $_COOKIE["username"];
                    }?>
                </a>
            </li>
            <li class="nav-item">
                <a id="logout" class="nav-link" href="">log out</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="log-in/log_in.php">log in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="sign-up/sign-up.php">sign up</a>
            </li>
        </ul>
    </header>


</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/loG-in.css">
</head>
<body>
    <main>
        <section>
        
            <!-- this is form -->
            <form action="log-in.php" method="post">
            <p class="log-in">Log in</p>
            <?php
                if(isset($_GET['error'])) {?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

                <label  for="email">Email</label>
                <input  type="email" id="email" name="email">
                <label  for="password">Password</label>
                <input  type="password" name="pass">
                <input class="submit" type="submit" value="Log in" name="add">
                <a href="../sign-up/sign-up.php">sign up </a>
            </form>
        </section>
    </main>
</footer>
</body>
</html>
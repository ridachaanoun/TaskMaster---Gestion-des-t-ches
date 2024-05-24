<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Sing-up.css">
</head>
<body>
    <main>
        <section>
            <img class="welcome" src="../img/images.jpeg" alt="">
           
            <form action="signUp.php" method="post">
                <p class="log-in">Sign Up</p>
            <?php
                if(isset($_GET['error'])) {?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

                <label  for="username">Username</label>
                <input  type="text" id="username" name="username">
                <label  for="email">Email</label>
                <input  type="email" id="email" name="email">
                <label  for="password">Password</label>
                <input  type="password" name="pass">
                <input  class="submit"type="submit" value="Sign Up" name="add">
                <a href="../log-in/log_in.php">log in</a>
            </form>
        </section>
    </main>
 </body>
</html>
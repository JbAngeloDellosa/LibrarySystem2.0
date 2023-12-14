<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="design.css">
    </head>
    <body class="body1">

        <section>
        <form action="validate.php" method="POST">
            <h1>Login</h1>
                <?php
                if(isset($_GET['message'])) { ?>
                <div class = "message"> <?php echo $_GET['message']; ?></div>
                <?php } ?>
            <div class = username>
            <label for=""><strong>Username:</strong></label>
            <input type = "text" name = "Uname" required>
            <p class="error username-error"></php>
            </div>
                    
            <div class = pass>
            <label for=""><strong>Password:</strong></label>
            <input type = "text" name = "pass" required>
            </div>
            
            <div class = submit>
            <input class="submit" type="submit">
            </div>
        </form>
        </section>
        <div class="error"></div>
    </body>
</html>

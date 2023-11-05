<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/login.css">
</head>

<body>
    <div class="home">
        <div>
            <h1>Please sign in.</h1>
            <form action="select.php" method="post">
                <div class="area">

                    <div><label for="">Username :</label></div>
                    <div><input type="text" name="username" id="" autofocus placeholder="Username"></div>
                    <br><br>
                    <div><label for="">Password :</label></div>
                    <div><input type="password" name="password" id="" placeholder="Password"></div>
                    <div>
                        <p>Your Student ID is the email address you used to sign up to our platform</p>
                    </div>
                    <br>
                    <div><button>Log in</button></div>
                    <br><br>
                    <div><a href="signup.php">Not registered? Sign up here!</a></div>

                </div>
            </form>
        </div>
        <div>
            <h2>Welcome back! Happy Learning 📚</h2>
        </div>
    </div>
</body>

</html>
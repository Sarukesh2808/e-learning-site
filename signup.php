<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/signup.css">
</head>

<body>

    <h1 style="text-align:center;">Create your Stduent ID</h1>
    <form action="insert.php" method="post">
        <div class="formarea">
            <div>
                <p>One Student ID is all you need to access all e-learning material. Register with your college mail id.</p>
            </div>


            <div><label for="">Username : </label>
                <input type="text" name="username" id="u" autofocus placeholder="A short username">
            </div>
            <div><label for="">Email : </label>
                <input type="email" name="email" id="e" placeholder="Your office mail" value="@gmail.com">
            </div>

            <div><label for="">Password : </label>
                <input type="password" name="password" id="p" placeholder="A strong password">
            </div>
            <div><label for="">Qualification : </label>
                <!-- <input type="text" name="qual" id="" placeholder="Your current degree"> -->
                <select name="qual" id="">

                    <option value="B.Tech">B.Tech</option>
                    <option value="B.A">B.A</option>
                    <option value="M.Tech">M.tech</option>
                    <option value="12th Pass">12th</option>
                </select>
            </div>
            <div><input type="submit" value="Sign up now!" onclick="return validate()"></div>
            <div><a style="text-align:center;" href="login.php">Exisiting user? Go here to login.</a></div>
        </div>

    </form>

    <script src="script.js"></script>
</body>

</html>
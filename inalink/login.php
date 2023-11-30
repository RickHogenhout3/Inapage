<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="icon" type="image-x-icon" href="img/Screenshot_2023-11-15_124317-removebg-preview.png">
    <title>Inalink</title>
</head>
<body background="img/inalink.png" style="background-size: cover; background-attachment: fixed;">
    <?php include 'header.php' ?> <br>
    <div class="wrapper">
        <section class="form signup container">
            <header class="welcome text-center mb-4">Welcome to Inalink</header>
            <form action="#" method="post">
                <div class="field input">
                    <label for="emailOrUsername">Email or Username</label>
                    <input type="text" name="emailOrUsername" placeholder="Email or Username" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
                <p class="welcome">No account yet? Then please <a href="signup.php">signup</a></p>
            </form>
        </section>
    </div>
</body>
</html>

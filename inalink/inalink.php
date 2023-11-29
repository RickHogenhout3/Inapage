<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gmr.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdjns.cloudfare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="icon" type="image-x-icon" href="img/Screenshot_2023-11-15_124317-removebg-preview.png">
    <title>Inalink</title>
</head>
<body background="img/inalink.png" style="background-size: cover;
            background-attachment: fixed;">
    <?php include 'header.php' ?> <br>
    <div class="wrapper">
        <section class="form signup" >
            <header>Welcome to Inalink</header>
            <form action="#">
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name" required>
                    </div>
                    <div class="field input">
                        <label for="password">password</label>
                        <input type="password" placeholder="password" required>
                    </div>
                    <div class="field input">
                        <label>Confirm password</label>
                        <input type="password" placeholder="Confirm password" required>
                    </div>
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                </div>
            </form>
        </section>
    </div>
    </div>
</body>
</html>
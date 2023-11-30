<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="icon" type="image-x-icon" href="img/Screenshot_2023-11-15_124317-removebg-preview.png">
    <title>Inalink</title>
</head>
<body background="img/inalink.png" style="background-size: cover; background-attachment: fixed;">
    <?php include 'header.php' ?> <br>
    <section class="form signup container">
        <header>
            <img src="avatars/Someoka_Ryugo_adult_avatar.png" alt="">
            <div class="details">
                <span>Someoka Ryugo</span>
                <p>active now</p>
            </div>
            <a href="logout.php">
                <span class="logout">Logout</span>
            </a>
        </header>
        <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
    </div>
    </section>
    
</body>
</html>

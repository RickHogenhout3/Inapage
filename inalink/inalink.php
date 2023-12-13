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
    <section class="users form signup container">
        <header class="d-flex">
            <img class="profilepic" src="avatars/Someoka_Ryugo_adult_avatar.png" alt="">
            <div class="details">
                <span style="font-weight: bold;">Someoka Ryugo</span>
                <p>active now</p>
            </div>
            <div class="ml-auto">
                <a href="logout.php">
                    <button class="btn btn-dark btn-lg">Logout</button>
                </a>
            </div>
        </header>
        <div class="search d-flex">
    <div class="input-group">
        <input class="form-control mr-sm-2 search-input" type="text" placeholder="Enter a name...">
        <button class="btn btn-success" type="button"><i class="fas fa-search"></i></button>
    </div>
</div>

<div class="chats-container" style="max-height: 450px; overflow-y: auto;">
        <div class="user-list d-flex align-items-center">
            <a href="" class="d-flex align-items-center w-100">
                <img src="avatars/Afuro_Terumi_adult_avatar.png" alt="">
                <div class="details ml-2 flex-grow-1">
                    <span>Afuro Terumi</span>
                    <p>text message</p>
                </div>
                <div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </div>
            </a>
        </div>
       <div class="user-list d-flex align-items-center">
        <a href="" class="d-flex align-items-center w-100">
            <img src="avatars/Endou_Mamoru_adult_avatar.png" alt="">
            <div class="details ml-2 flex-grow-1">
                <span>Endou Mamoru</span>
                <p>text message</p>
            </div>
            <div>
                <div class="status-dot"><i class="fas fa-circle"></i></div>
            </div>
        </a>
       </div>
</div>
        <!-- Repeat the user-list divs as needed -->
    </section>
    <script src="script/users.js"></script>
</body>
</html>

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
            <form action="#">
                <div class="row">
                    <div class="col-md-6">
                        <div class="field input">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="field input">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" required>
                        </div>
                    </div>
                </div>
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" placeholder="Username" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="field input">
                        <label>Select Avatar</label>
                        <div class="avatar-container">
                            <img src="avatars/Endou_Mamoru_avatar.png" alt="Avatar 1" class="avatar" onclick="selectAvatar('avatar1.jpg', this)">
                            <img src="avatars/Gouenji_Shuuya_avatar.png" alt="Avatar 3" class="avatar" onclick="selectAvatar('avatar3.jpg', this)">
                            <img src="avatars/Kazemaru_Ichirouta_avatar.png" alt="Avatar 5" class="avatar" onclick="selectAvatar('avatar5.jpg', this)">
                            <img src="avatars/Kabeyama_Heigorou_avatar.png" alt="Avatar 12" class="avatar" onclick="selectAvatar('avatar12.jpg', this)">
                            <img src="avatars/Someoka_Ryugo_avatar.png" alt="Avatar 13" class="avatar" onclick="selectAvatar('avatar13.jpg'), this">
                            <img src="avatars/Kidou_Yuuto_avatar.png" alt="Avatar 6" class="avatar" onclick="selectAvatar('avatar6.jpg', this)">
                            <img src="avatars/Fubuki_Shirou_avatar.png" alt="Avatar 2" class="avatar" onclick="selectAvatar('avatar2.jpg', this)">
                            <img src="avatars/Tachimukai_Yuuki_avatar.png" alt="Avatar 4" class="avatar" onclick="selectAvatar('avatar4.jpg'), this">
                            <img src="avatars/Tsunami_Jousuke_avatar.png" alt="Avatar 14" class="avatar" onclick="selectAvatar('avatar14.jpg', this)">
                            <img src="avatars/Zaizen_Touko_avatar.png" alt="Avatar 15" class="avatar" onclick="selectAvatar('avatar15.jpg'), this">
                            <img src="avatars/Kiyama_Hiroto_avatar.png" alt="Avatar 7" class="avatar" onclick="selectAvatar('avatar7.jpg', this)">
                            <img src="avatars/Utsunomiya_Toramaru_avatar.png" alt="Avatar 16" class="avatar" onclick="selectAvatar('avatar16.jpg'), this">
                            <img src="avatars/Fudou_Akio_avatar.png" alt="Avatar 17" class="avatar" onclick="selectAvatar('avatar17.jpg'), this">
                            <img src="avatars/Sakuma_Jirou_avatar.png" alt="Avatar 18" class="avatar" onclick="selectAvatar('avatar18.jpg'), this"> 
                            <img src="avatars/Genda_Koujirou_avatar.png" alt="Avatar 19" class="avatar" onclick="selectAvatar('avatar19.jpg'), this">
                            <img src="avatars/Afuro_Terumi_avatar.png" alt="Avatar 22" class="avatar" onclick="selectAvatar('avatar22.jpg'), this"><br>
                            <img src="avatars/Matsukaze_Tenma_avatar.png" alt="Avatar 8" class="avatar" onclick="selectAvatar('avatar8.jpg', this)">
                            <img src="avatars/Shindou_Takuto_avatar.png" alt="Avatar 9" class="avatar" onclick="selectAvatar('avatar9.jpg', this)">
                            <img src="avatars/Tsurugi_Kyousuke_avatar.png" alt="Avatar 10" class="avatar" onclick="selectAvatar('avatar10.jpg', this)">
                            <img src="avatars/Nishizono_Shinsuke_avatar.png" alt="Avatar 20" class="avatar" onclick="selectAvatar('avatar20.jpg', this)">
                            <img src="avatars/Kirino_Ranmaru_avatar.png" alt="Avatar 21" class="avatar" onclick="selectAvatar('avatar21.jpg', this)">
                            <img src="avatars/Nishiki_Ryouma_avatar.png" alt="Avatar 23" class="avatar" onclick="selectAvatar('avatar23.jpg', this)">
                            <img src="avatars/Sangoku_Taichi_avatar.png" alt="Avatar 24" class="avatar" onclick="selectAvatar('avatar24.jpg'), this">
                            <img src="avatars/Tsurugi_Yuuichi_avatar.png" alt="avatar 11" class="avatar" onclick="selectAvatar('avatar11.jpg', this)">
                        </div>
                        <input type="hidden" name="selected_avatar" id="selected_avatar">
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                <p class="welcome">already have an account? then please <a href="login.php">login</a></p>
                </div>
            </form>
        </section>
    </div>

    <script>
        function selectAvatar(avatar, element) {
            // Reset all avatars to remove the selection indicator
            var avatars = document.querySelectorAll('.avatar');
            avatars.forEach(function (avatarElement) {
                avatarElement.classList.remove('avatar-selected');
            });

            // Set the selected avatar
            document.getElementById('selected_avatar').value = avatar;

            // Add the selection indicator to the clicked avatar
            element.classList.add('avatar-selected');
        }
    </script>
</body>
</html>

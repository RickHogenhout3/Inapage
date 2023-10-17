<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image-x-icon" href="img/set/img_logo.png">
    <title>INAZUMA ELEVEN: Victory Road</title>
    
    <script>
        function toggleLanguageOptions(event) {
            event.preventDefault();
            const languageOptions = document.getElementById('language-options');
            languageOptions.classList.toggle('active');
        }
    </script>
    <style>
        img {
    max-width: 100%;
    height: auto;
}
        /* Background image for screens smaller than 750px */
        @media screen and (max-width: 750px) {
            img {
    max-width: 100%;
    height: auto;
}

            .background-image {
                background-image: url('img/set/mobile/bg_visual_sp.jpg'); /* Set the background image */
                background-size: cover; /* Ensure image covers the entire element */
                background-repeat: no-repeat; /* Prevent image from repeating */
                background-position: center; /* Center the background image */
                height: 102vw;
                position: relative;
            }

            .roh {
                display: block; /* Display the logo image */
                margin: 0 auto; /* Center the logo image horizontally */
                height: 150px;
                width: auto;
            }

            .vision {
                content: url('img/set/mobile/bnr_vision_sp.png'); /* Set the vision image */
                width: auto;
                height: 300px;
            }

            h1 h3{
                height: 30px;
                width: auto;
            }
            .trailer{
                width: auto;
                height: 200px;
            }

            /* Override Bootstrap classes to stack the two rows */
            .stack-rows {
                flex-direction: column;
            }

            /* Override Bootstrap classes to stack images in the .movie-image div */
            .stack-images {
                flex-direction: column;
            }
    .movie-image {
        background-image: url('img/set/mobile/bg_movie_sp.jpg'); /* Set the background image */
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    .mappa {
        height: auto;
        width: 80%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .blog {
        height: auto;
        width: 80%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .trailer {
        margin-top: 149px;
        margin-left: 1px;
        height: auto;
        width: 88%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .news{
        margin-top: 0px;
        width: 100%;
        text-align: center;
    }
    .story-image{
        background-image: url('img/set/mobile/bg_story_sp.jpg'); /* Set the background image */
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
}
    </style>
</head>

<body style="background-color: #000; background-image:none;">
    <?php include 'header.php';?>

    <div class="background-image">
        <img class="roh" src="img/set/img_logo.png" alt="inazuma">
        <div class="news">
            <p>
            <h1>A brand new Inazuma Eleven game, returning to its roots!</h1>
        <h3>Play through Story Mode with a new protagonist, and meet all characters from the series' long history in Chronicle Mode!</h3>
            </p>
        </div>
    </div>

    <div class="movie-image">
        <ul>
        <li style="background: none;">
        <img src="img/set/img_movie_pv_vision.png" alt="trailer" class="trailer">
        </li>
        </ul>
        <ul style="background: none;">
        <div class="container stack-images">
            <li style="background:none;">
            <img class="blog" src="img/set/img_bnr_blog.png" alt="blog">
            </li>
            <li style="background:none;">
            <img class="mappa" src="img/set/img_bnr_mappa.png" alt="mappa">
            </li>
        </div>
    </ul>
    </div>

    <div class="story-image">
        rknkdntgkr
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php include 'footer.php';?>

</body>
</html>

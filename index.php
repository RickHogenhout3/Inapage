<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
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
        .news .text-content {
        position: absolute;
        top: 90px;
        right: 0px;
        color: white;
        text-align: right;
        font-size: 16px; /* Set an initial font size */
    }

    .visual{
                width: 57%;
                text-align: right;
                position: absolute;
                right: 5%;
            }
        img {
    max-width: 100%;
    height: auto;
}
.unmei-images {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.main {
    margin-bottom: 10px; /* Adjust this margin as needed to control the vertical spacing */
    margin-left: -360px;
    width: 1940px;
}

.unmei-images,
.endo-images {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px; /* Adjust margin as needed */
}


.endo-images {
    display: flex;
    flex-direction: column;
    position: relative; /* Set the parent container to a relative position */
}

.character {
    position: relative;
    z-index: 0; /* Ensure character is on top */
}

.antagosnist {
    position: absolute; /* Position the antagonist absolutely within the parent container */
    bottom: -260px; /* Adjust the overlap by changing this value */
    right: 50px; /* Adjust the left position if needed */
}


.character {
    margin-bottom: 10px; /* Adjust this margin as needed to control the vertical spacing between images */
    margin-right: -360px;
    width: 1940px;
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

            .visual{
                height: 30%;
                width: auto;
                text-align: center;
                position: static;
            }

            .roots{
                height: 30%;
                width: auto;
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
            .news {
                z-index:1;
    margin-top: -150px; /* Add margin to separate the text from the images */
    width: 100%;
    
}
.news .text-content {
    text-align: center;
            position: static; /* Remove position: absolute */
        }

.movie-image {
    background-image: url('img/set/mobile/bg_movie_sp.jpg');
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

/* Ensure that the images within .movie-image do not exceed the available space */
.movie-image img {
    max-width: 100%; /* Ensure images within .movie-image do not exceed their container width */
    height: auto;
}

/* You may need to further adjust styles as per your design requirements */

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
        margin-left: 1px;
        height: auto;
        width: 88%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .story-image{
        background-image: url('img/set/mobile/bg_story_sp.jpg'); /* Set the background image */
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    .mc{
        content: url('img/set/mobile/img_chara01_sp.png');
    
    }
    .antagosnist{
        content: url('img/set/mobile/img_chara02_sp.png');
    }
}
    </style>
</head>

<body style="background-color: #000; background-image:none;">
    <?php include 'header.php';?>

    <div class="stupid">
    <div class="background-image">
    <img class="roh" src="img/set/img_logo.png" alt="inazuma">
</div>

<div class="yellow-line"></div>


    <div class="movie-image">
    <div class="news">
    <div class="text-content">
                    <h1 class="roots">A brand new Inazuma Eleven game, returning to its roots!</h1>
                    <h3 class="visual">Play through Story Mode with a new protagonist, and meet all characters from the series' long history in Chronicle Mode!</h3>
                </div>
    </div>
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
    <div style="background-color: blue;">
        <div style="color: yellow; font: bold 20px/1.5 Helvetica, Verdana, sans-serif; background-color: blue; display: inline-block; margin-left:10%">INAZUMA ELEVEN: <br> Victory Road</div>
        <div style="color: yellow; font: bold 39px/1.5 Helvetica, Verdana, sans-serif; background-color: blue; display: inline-block; width:40%; height:auto;">TWO MODES</div>
    </div>
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <div class="unmei-images">
            <img class="main" src="img/set/bg_chara01.png" alt="unmei">
            <img class="mc" src="img/set/pc/img_chara01_pc.png" alt="unmei">
        </div>
        <div style="text-align: center;">
            <p class="story-mode">Verhaal Modus</p>
            <img src="img/text/tit_story_pc.png" alt="Inazuma Eleven">
            <p class="verhaal">Een jongen die verlangt naar een wereld zonder voetbal.</p>
            <p class="unmei">Unmei Sasanami</p>
            <p class="verhaal">Een voetbalmonster dat boven op de wereld staat.</p>
            <p class="haru">Haru Endo</p>
            <p class="verhalen">Hun ontmoeting markeert <br> het begin van een prachtig verhaal. <br> <br>
                Dankzij de vrienden die hij ontmoette op Nagumohara Junior High, <br> slaagt Unmei erin zijn passie voor voetbal te herwinnen. <br> Samen, proberen ze de verwaarloosde voetbalclub nieuw leven in te blazen. <br><br>
                Zullen ze in staat zijn om Raimon Junior High, <br> de regerende kampioenen, omver te werpen?
                <h2 class="about">Een underdogverhaal <br> over het overwinnen van <br> ontberingen, groei en het uitdagen <br> van de allersterksten!</h2>
                <p class="new-eleven">Dat is <br> de nieuwe Inazuma Eleven!</p>
        </div>
        <div class="endo-images">
        <img class="character" src="img/set/bg_chara02.png" alt="endo">
            <img class="antagosnist" src="img/set/pc/img_chara02_pc.png" alt="endo">
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>

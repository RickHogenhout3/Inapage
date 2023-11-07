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

.chronicle-image {
    /* Voeg de gewenste marge onderaan toe om de sectie naar beneden te verplaatsen */
    margin-top: 1500px; /* Pas de marge aan zoals gewenst */
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
    overflow: hidden;
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
    .mc {
        content: url('img/set/mobile/img_chara01_sp.png');
        width: 200px;
        height: auto;
        margin-left: 60px;
    }

    .main {
        position: absolute;
        z-index: -1;
        margin-bottom: 340px;
        margin-left: 70px;

        /* Stel de initiële hoogte en breedte in */
        width: 50%; /* Begin met 50% van de container breedte */
        height: 50%; /* Begin met 50% van de container hoogte */

        /* Beperk de maximale grootte van het element */
        max-width: 900px; /* Maximale breedte */
        max-height: 300px; /* Maximale hoogte */

        /* Behoud de aspect ratio (verhouding tussen hoogte en breedte) */
        aspect-ratio: 9 / 3; /* Bijv. voor een verhouding van 3:1 (300px hoog, 900px breed) */

        /* Voorkom dat het element buiten zijn container valt */
        overflow: hidden;
    }

    .antagosnist {
        content: url('img/set/mobile/img_chara02_sp.png');
        width: auto;
        height: 320px;
        position: absolute;
        margin-right: 0px;
        margin-bottom: 330px;
    }

    .character {
    position: absolute; /* Plaats het element absoluut binnen de container */
    z-index: -2; /* Zorg dat het element naar de achtergrond wordt verplaatst */
    margin-bottom: 0;
    margin-right: 0;
    width: auto;
    height: auto;
    max-width: 100%; /* Maximale breedte is de breedte van de container */
    max-height: 100%; /* Maximale hoogte is de hoogte van de container */
    aspect-ratio: 9 / 3; /* Behoud de aspect ratio indien nodig */
    overflow: hidden; /* Voorkom dat het element buiten de container valt */
    order: 2;
    top: 0; /* Zet de positie aan de bovenkant van de container */
    right: 0; /* Zet de positie aan de rechterkant van de container */
}


    .unmei-images {
        position: absolute;
        order: 1; /* Plaats unmei-images links */
        left: -90px;
    }

    .endo-images {
        order: 3; /* Plaats endo-images rechts */
    }



    .story-image {
        flex-direction: column;
        align-items: center;
    }
  

    .unmei-images,
    .endo-images {
        flex-direction: row;
        align-items: center;
        justify-content: space-between; /* Zorg voor ruimte tussen de elementen */
        margin-top: 2000px;
        order: 2;
    }

    #carouselExampleIndicators {
        position: relative;
        top: auto;
        bottom: 0;
        transform: translateX(-50%);
        left: 50%;
        max-height: 50vh; /* Set a maximum height for the carousel, adjust as needed */
        overflow: hidden; 
    }
    .chronicle-image{
        background-image: url("img/set/mobile/bg_chronicle_sp.jpg");
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
                <div id="video-modal" class="modal">
                    <div class="modal-content">
                        <span id="close-video-button" class="close-button" onclick="closeVideoModal()">&times;</span>
                        <iframe id="video-frame" width="560" height="315" style="background:transparent;" src="https://www.youtube.com/embed/KkRQsURQjH4?rel=0&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <img src="img/set/img_movie_pv_vision.png" alt="trailer" class="trailer-image" id="trailer-image" onclick="openVideoModal()">
            </li>
        </ul>

        <ul style="background: none;">
        <div class="container stack-images">
            <li style="background:none;">
            <img class="blog" src="img/set/img_bnr_blog.png" alt="blog">
            </li>
            <li style="background:none;">
            <a href="#mappa"><img class="mappa" src="img/set/img_bnr_mappa.png" alt="mappa"></a>
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
    
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3" ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4" ></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/set/img_slide_story01.jpg" alt="Introduce" style="width: 100%;">
            </div>
            <div class="carousel-item">
                <img src="img/set/img_slide_story02.jpg" alt="Story" style="width: 100%;">
            </div>
            <div class="carousel-item">
                <img src="img/set/img_slide_story03.jpg" alt="Chronicle" style="width: 100%;">
            </div>
            <div class="carousel-item">
                <img src="img/set/img_slide_story04.jpg" alt="Chronicle" style="width: 100%;">
            </div>
            <div class="carousel-item">
                <img src="img/set/img_slide_story05.jpg" alt="Chronicle" style="width: 100%;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>

    <div class="chronicle-image">
    <p class="story-mode">Chronical modus</p>
    <h1>Neem het op tegen het verleden van Inazuma Eleven!</h1>
    <p class="characters">Inclusief meer dan 4500 personages <br> uit het verleden van de serie! <br> Elke speler zal <br> zijn opwachting maken!</p>
    <div class="text-container">
        <span class="include">*Inclusief characters van verschillende versies, releases en seizoenskaarten.</span>
    </div> <br>
    <div class="text-container">
        <span class="exclude">*Exclusief characters van sommige collaboraties, etc.</span>
    </div>
    <div>
        <img src="img/set/img_chronicle01.jpg" alt="vs"  class="zoomable-image" style="height:175px;">
        <img src="img/set/icn_mg.png" alt="oke" style="position: absolute; margin-left:-34px; margin-top:8.6%;">
    </div>
</div>

<div class="chronicle2">
<div class="container">
    <div class="row">
        <!-- Eerste kolom in de eerste rij -->
        <div class="col-md-6">
            <img src="img/set/bg_chronicle_list.png" alt="list">
            <img src="img/set/img_chronicle02.jpg" alt="victory" class="zoomable-image" style=" position:absolute; left:45px; top:30px; border: 3px solid yellow; height:auto; width: 83%;">
            <img src="img/set/icn_mg.png" alt="oke" style="position: absolute; left: 84.5%; top: 49.5%;">
            <p class="v" style="text-align: center; color: orange; font: bold 16px/1.5 Helvetica, Verdana, sans-serif; text-shadow: 0 0 5px black; position:absolute; top:64.5%; left:49%;">Victory</p>
            <p class="caravan" style="text-align: center; position:absolute; top:59%; left:9%;">A brand new caravan <br> <a style="color: yellow">De Inazuma V Caravan</a> <br> kan reizen door tijd om de hele <br> geschiedenis van Inazuma te beleven!</p>
        </div>
        <!-- Tweede kolom in de eerste rij -->
        <div class="col-md-6">
        <div class="column">
            <img src="img/set/bg_chronicle_list.png" alt="list">
            <img src="img/set/img_chronicle03.jpg" alt="victory" class="zoomable-image" style="position: absolute; top: 6%; right: 8%; border: 3px solid yellow; height:auto; width: 83%; ">
            <img src="img/set/icn_mg.png" alt="oke" style="position: absolute; right: 8%; top: 50%;">
            <p class="routes" style="position: absolute; top: 58%; right: 63px; text-align: center;">Doorkruis <br> <a style="color: yellow">de Chronicle Competition Routes</a> <br> om te vechten tegen teams uit <br> het verleden in Inazuma History Town!</p>
            <p class="points" style="position: absolute; top: 90%; right: 59px; text-align: center;">Als je deze wedstrijden wint, verdien je de Bond Stars van de personages!</p>
        </div>
    </div>
    
    </div>
    <div class="row">
        <!-- Eerste kolom in de tweede rij -->
        <div class="col-md-6">
            <div class="column">
                <img src="img/set/bg_chronicle_list.png" alt="list">
                <img src="img/set/img_chronicle04.jpg" alt="victory"  class="zoomable-image" style="position:absolute; top:5%; left:8%; border: 3px solid yellow; width: 83%;">
                <img src="img/set/icn_mg.png" alt="oke" style="position: absolute; left: 85%; top: 49%;">
                <p class="universe" style="position:absolute; top:60%; right:9%; text-align: center;">Je kunt nieuwe personages ontgrendelen <br> door Bond Stars te gebruiken in <br> <a style="color: yellow">the Player's Universe!</a></p>
            </div>
        </div>
        <!-- Tweede kolom in de tweede rij -->
        <div class="col-md-6">
            <div class="column">
                <img src="img/set/bg_chronicle_list.png" alt="list">
                <img src="img/set/img_chronicle05.jpg" alt="victory"  class="zoomable-image" style="position:absolute; top:5%; left:8%; border: 3px solid yellow; width: 83%;">
                <img src="img/set/icn_mg.png" alt="oke" style="position: absolute; right: 9.5%; top: 49%;">
                <p class="alley" style="position: absolute; top:60%; left:12%; text-align: center;">Ontgrendelde personages verschijnen <br> in <a style="color: yellow">de Bond Alley!</a> <br> voldoen aan de vereisten van <br> het Bond Netwerk, <br> ze kunnen je bondgenoot worden!</p>
            </div>
        </div>
    </div>
</div>

  <div class="free-style" style="background-color: #00165e; width:100%; height:55%">
<p class="playing" style="text-align: center;">Speel hoe je wilt in freestyle play!</p>
<img src="img/set/bg_battle01.jpg" alt="battle">
<img src="img/set/bg_battle02.jpg" alt="soccer">
</div>

<div class="container" id="mappa">
    <div class="row">
        <div class="col-md-6">
            <div class="mappa">
                <p class="animation" style="color: #fff; font: bold 24px/1.5 Helvetica, Verdana, sans-serif;">ANIMATION</p>
                <p class="produced" style="color:white; font: bold 24px/1.5 Helvetica, Verdana, sans-serif;">Animation Geproduceerd door MAPPA!</p>
                <p class="in-game" style="color: darkcyan; font: bold 15px/1.5 Helvetica, Verdana, sans-serif;">De in-game cut-scenes en andere animatie werden <br> geproduceerd in samenwerking met de animatiestudio <br> MAPPA. <br>
                    De game bevat meer uren aan volledige animatie <br> dan ooit, waardoor het verhaal wordt verhoogd en <br> het nog dramatischer en leuker wordt!</p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="img/set/bg_mappa.jpg" alt="mappa">
        </div>
    </div>
</div>

<div class="image-overlay" id="image-overlay">
    <button id="close-button" class="close-button">X</button>
    <img id="zoomed-image" src="" alt="Zoomed Image">
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
<?php include 'footer.php';?>
</body>
</html>

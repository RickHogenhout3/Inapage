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
</head>
<body>
   <?php include 'header.php'; ?>

    <p class="background-image">
        <img src="img/set/img_logo.png" alt="Victory Road" style="position: absolute; left:11%">
        <h3 style="position:absolute; left:40%; top:10%">Een gloednieuwe Inazuma Eleven game, Keert terug naar zijn roots!</h3>
        <p class="visual" style="position:absolute; left:60%; top:15%">Speel door Verhaal MOdus met een nieuw hoofdpersoon,</p>
        <p class="visual" style="position:absolute; left:47%; top:18%">en ontmoet alle characters van de series' lange verleden in Chronicle Modus!</p>
    </p>

    <p class="movie-image">
        <img src="img/set/img_movie_pv_vision.png" alt="trailer" class="trailer" style="position: absolute; left:10%; top:100%;">
        <img src="img/set/img_bnr_blog.png" alt="blog" style="position: absolute; left:60%; top:98%">
        <img src="img/set/img_bnr_mappa.png" alt="mappa" style="position: absolute; left:60%; top:126%">
    </p>

    <img src="img/set/tit_select_mode_pc.png" alt="modes" style="position: absolute; left:3%; top:150%;">

    <div class="story-image">
        <p class="story-mode" style="position: absolute; left:18%; top:170%;">Verhaal Modus</p>
        <img src="img/text/tit_story_pc.png" alt="Inazuma Eleven" style="position: absolute; left:16%; top:180%;">
        <img src="img/set/bg_chara01.png" alt="unmei" style="position: absolute; left:-14%; top:192%;">
        <img src="img/set/img_chara01_pc.png" alt="unmei" style="position: absolute; left:8%; top:251%;">
        <img src="img/set/bg_chara02.png" alt="endo" style="position: absolute; right:-14%; top:220%;">
        <img src="img/set/img_chara02_pc.png" alt="endo" style="position: absolute; right:7%; top:248%;">
        <p class="verhaal" style="position: absolute; left:37%; top:200%;">Een jongen die verlangt naar een wereld zonder voetbal.</p>
        <p class="unmei" style="position: absolute; left:40%; top:205%;">Unmei Sasanami</p>
        <p class="verhaal" style="position: absolute; left:37%; top:215%;">Een voetbalmonster dat boven op de wereld staat.</p>
        <p class="haru" style="position: absolute; left:45%; top:220%;">Haru Endo</p>
        <p class="verhalen" style="position: absolute; left:32%; top:230%; text-align: center;">Hun ontmoeting markeert <br> het begin van een prachtig verhaal. <br> <br>
        Dankzij de vrienden die hij ontmoette op Nagumohara Junior High, <br> slaagt Unmei erin zijn passie voor voetbal te herwinnen. <br> Samen, proberen ze de verwaarloosde voetbalclub nieuw leven in te blazen. <br><br>
        Zullen ze in staat zijn om Raimon Junior High, <br> de regerende kampioenen, omver te werpen?
        <h2 class="about" style="position: absolute; left:34%; top:270%; text-align: center;" >Een underdogverhaal <br> over het overwinnen van <br> ontberingen, groei en het uitdagen <br> van de allersterksten!</h2>

        <p class="new-eleven" style="position: absolute; left:38%; top:300%; text-align: center;">Dat is <br> de nieuwe Inazuma Eleven!</p>

        
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="position: absolute; left: 8%; top: 325%;">
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

    <div class="chronicle-image">
    <p class="story-mode" style="position: absolute; left:18%; top:5%;">Chronical modus</p>
    <h1 style="position:absolute; left:18%; top:15%">Neem het op tegen het verleden van Inazuma Eleven!</h1>
    <img src="img/text/tit_chronicle_pc.png" alt="oof" style="position:absolute; left:28%; top:5%">
    <p class="characters" style="position:absolute; left:15%; top:28%">Inclusief meer dan 4500 personages <br> uit het verleden van de serie! <br> Elke speler zal <br> zijn opwachting maken!</p>
    <div class="text-container" style="position:absolute; left:15%; top:63%">
        <span class="include">*Inclusief characters van verschillende versies, releases en seizoenskaarten.</span>
    </div>
    <div class="text-container" style="position:absolute; left:15%; top:65%">
        <span class="exclude">*Exclusief characters van sommige collaboraties, etc.</span>
    </div>
    <div style="position:absolute; left:16%; top:71%; border: 3px solid rgb(1, 163, 101);">
        <img src="img/set/img_chronicle01.jpg" alt="vs" style="height:175px;">
        <img src="img/set/icn_mg.png" alt="oke" style="position: absolute; right: 0; bottom: 0;">
    </div>
</div>
<div class="chronicle2">
  <div class="row" style="position: absolute; left: 15%; top:10%"> 
    <img src="img/set/bg_chronicle_list.png" alt="list">
    <img src="img/set/img_chronicle02.jpg" alt="victory" style="border: 3px solid yellow; position: absolute; top: 31%; left: 25%; transform: translate(-50%, -50%); width:43%">
    <img src="img/set/icn_mg.png" alt="oke" style="position: absolute; left: 43.5%; top: 49%;">
    <p class="v" style="position:absolute; top:68%; left:24%; text-align: center;color:orange; font: bold 16px/1.5 Helvetica, Verdana, sans-serif;text-shadow: 0 0 5px black;">Victory</p>
    <p class="caravan" style="position:absolute; top:63%; left:3%; text-align: center;">A brand new caravan <br> <a style="color:yellow">De Inazuma V Caravan</a> <br> kan reizen door tijd om de hele <br> geschiedenis van Inazuma te beleven!</p>
    <div class="column">
      <img src="img/set/bg_chronicle_list.png" alt="list">
      <img src="img/set/img_chronicle03.jpg" alt="victory" style="border: 3px solid yellow; position: absolute; top: 31%; left: 75%; transform: translate(-50%, -50%); width:43%">
      <img src="img/set/icn_mg.png" alt="oke" style="position: absolute; right: 3.5%; top: 49%;">
      <p class="routes" style="position:absolute; top:61%; right:4%; text-align: center;">Doorkruis <br> <a style="color:yellow">de Chronicle Competition Routes</a> <br> om te vechten tegen teams uit <br> het verleden in Inazuma History Town!</p>
      <p class="points" style="position:absolute; top:90%; right:3%; text-align: center;">Als je deze wedstrijden wint, verdien je de Bond Stars van de personages!</p>
    </div>
  </div>
  <div class="row" style="position: absolute; left:15%; top:75%">
    <div class="column">
      <img src="img/set/bg_chronicle_list.png" alt="list">
      <img src="img/set/img_chronicle04.jpg" alt="victory" style="border: 3px solid yellow; position: absolute; top: 31%; left: 25%; transform: translate(-50%, -50%); width:43%">
      <img src="img/set/icn_mg.png" alt="oke" style="position: absolute; left: 43.5%; top: 49%;">
      <p class="universe" style="position: absolute; left: 3%; top: 63%; text-align: center;">Je kunt nieuwe personages ontgrendelen <br> door Bond Stars te gebruiken in <br> <a style="color:yellow">the Player's Universe!</a></p>
    </div>
    <div class="column">
      <img src="img/set/bg_chronicle_list.png" alt="list">
      <img src="img/set/img_chronicle05.jpg" alt="victory" style="border: 3px solid yellow; position: absolute; top: 31%; left: 75%; transform: translate(-50%, -50%); width:43%">
      <img src="img/set/icn_mg.png" alt="oke" style="position: absolute; right: 3.5%; top: 49%;">
      <p class="alley" style="position: absolute; right: 4%; top: 61%; text-align: center;">Ontgrendelde personages verschijnen <br> in <a style="color:yellow">de Bond Alley!</a> <br> voldoen aan de vereisten van <br> het Bond Netwerk, <br> ze kunnen je bondgenoot worden!</p>
    </div>
  </div>
  <div class="free-style" style="background-color: #00165e; position:absolute; top:150%; width:100%; height:55%">
<p class="playing" style="text-align: center;">Speel hoe je wilt in freestyle play!</p>
<img src="img/set/bg_battle01.jpg" alt="battle">
<img src="img/set/bg_battle02.jpg" alt="soccer">
</div>
<div class="mappa">
    <img src="img/set/bg_mappa.jpg" alt="mappa" style="position: absolute; right:0%">
    <p class="animation" style="color: #fff; position:absolute; left:10%; top:10%; font: bold 24px/1.5 Helvetica, Verdana, sans-serif;">ANIMATION</p>
    <img style="position: absolute; left:10%; top:20%;" src="img/set/img_logo_mappa.png" alt="mappa">
    <p class="produced" style="color:white; position:absolute; left:10%; top:40%; font: bold 24px/1.5 Helvetica, Verdana, sans-serif;">Animation Geproduceerd door MAPPA!</p>
    <p class="in-game" style="color:darkcyan; position:absolute; left:10%; top:50%; font: bold 15px/1.5 Helvetica, Verdana, sans-serif;">De in-game cut-scenes en andere animatie werden <br> geproduceerd in samenwerking met de animatiestudio <br> MAPPA. <br>
De game bevat meer uren aan volledige animatie <br> dan ooit, waardoor het verhaal wordt verhoogd en <br> het nog dramatischer en leuker wordt!</p>
</div>
<?php include('footer.php'); ?>
</div>
</body>
</html>
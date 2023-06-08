<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image-x-icon" href="img/set/img_logo.png">
    <title>INAZUMA ELEVEN: Victory Road</title>
    <style>
        h3 {
        color: yellow;
        font-weight: bold;
        text-shadow: 0 0 5px blue;
        }
        h1 {
        color: yellow;
        font-weight: bold;
        text-shadow: 0 0 5px blue;
        }
        .visual {
            color: lightskyblue;
            text-shadow: 2px 2px #000;
            font: bold 20px/1.5 Helvetica, Verdana, sans-serif;
        }
        header {
            background: #000;
            color: #fff;
            height: 48px;
        }

        .background-image {
            background-image: url("img/set/bg_visual_pc.jpg");
            /* Additional CSS properties for the background */
            background-repeat: no-repeat;
            background-size: cover;
            height: 660px;
        }
        
        body {
            background-color: #000;
            overflow-x: hidden;
        }
        
        .movie-image {
            background-image: url("img/set/bg_movie_pc.jpg");
            /* Additional CSS properties for the background */
            background-repeat: no-repeat;
            background-size: cover;
            height: 420px;
        }
        
        .story-image {
            background-image: url("img/set/bg_story_pc.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 810px;
        }
        
        .story-mode {
            color: yellow;
            background: rgba(0, 0, 0, 0.5);
            font: bold 30px/1.5 Helvetica, Verdana, sans-serif;
        }
        .verhaal{
            color: lightcyan;
            text-shadow: 2px 2px #000;
            font: bold 20px/1.5 Helvetica, Verdana, sans-serif;
        }
        .verhalen{
            text-align: center;
            position: absolute;
            left: 40%;
            transform: translateX(-10%);
            color: lightcyan;
            text-shadow: 2px 2px #000;
            font: bold 20px/1.5 Helvetica, Verdana, sans-serif;
        }
        .unmei{
            color: lightskyblue;
            background: #00165e;
            font: bold 40px/1.5 Helvetica, Verdana, sans-serif;
        }
        .unmei::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: rgb(70, 215, 217);
        }
        .haru{
            color: rgb(54, 233, 34);
            background: #00165e;
            font: bold 40px/1.5 Helvetica, Verdana, sans-serif;
        }
        .haru::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: rgb(70, 215, 217);
        }
        .language-bar {
            position: absolute;
            left: 80%;
            top: 2%;
            display: flex;
            align-items: center;
        }
        .language-bar img {
            width: 24px;
            height: 24px;
            margin-right: 4px;
        }
        .language-bar ul {
            display: none;
            margin-left: 4px;
        }
        .language-bar ul.active {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
        li{
            background-color: #000;
            color: #fff;
            list-style: none;
        }
        .about{
            color: white;
            font: bold 30px/1.5 Helvetica, Verdana, sans-serif;
        }
        .new-eleven{
            color: yellow;
            font: bold 30px/1.5 Helvetica, Verdana, sans-serif;
        }
        .chronicle-image {
            background-image: url("img/set/bg_chronicle_pc.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 650px;
            width: 1700px;
            left: -120px;
            position: absolute;
            top: 425%;
        }
        .characters {
            color: greenyellow;
            font-weight: bold;
            text-shadow: 0 0 5px black;
            font-size: 37px;
        }
        .text-container {
    position: relative;
    display: inline-block;
}

.include::before,
.include::after,
.exclude::before,
.exclude::after {
    content: "[";
    font-size: 20px;
}

.include::after,
.exclude::after {
    content: "]";
}

.include::before,
.exclude::before {
    position: absolute;
    left: -20px;
}

.include::after {
    position: absolute;
    right: -20px;
}

.exclude::before,
.exclude::after {
    top: 2px;
}
.chronicle2 {
    background-image: url("img/set/bg_fix_pc.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: absolute;
    top: 513%;
    width: 100%;
    height: 110%;
    overflow-y: auto;
    overflow-x: hidden;
}
.row {
    display: flex;
    justify-content: center;
    position: sticky;
  }

  .caravan{
            color: lightskyblue;
            font: bold 26px/1.5 Helvetica, Verdana, sans-serif;
            text-shadow: 0 0 5px black;
        }
        .routes{
            color: lightskyblue;
            font: bold 24px/1.5 Helvetica, Verdana, sans-serif;
            text-shadow: 0 0 5px black;
        }
        .routes::after {
  content: "";
  display: block;
  width: 100%;
  height: 3px;
  background-color: blue;
  margin-top: 5px;
}
    .points{
            color: lightgoldenrodyellow;
            font: bold 14px/1.5 Helvetica, Verdana, sans-serif;
            text-shadow: 0 0 5px black;
        }
        .universe{
            color: lightskyblue;
            font: bold 28px/1.5 Helvetica, Verdana, sans-serif;
            text-shadow: 0 0 5px black;
        }
        .alley{
            color: lightskyblue;
            font: bold 24px/1.5 Helvetica, Verdana, sans-serif;
            text-shadow: 0 0 5px black;
        }
        .playing{
            color: yellow;
            font: bold 24px/1.5 Helvetica, Verdana, sans-serif;
            text-shadow: 0 0 5px black;
        }
        .mappa{
            background-color: #0f131e;
            background-size: cover;
            width: 100%; height: 54.5%;
            position: absolute;
            top: 210%;
        }
        footer{
            background: #212121;
            color: #fff;
            position: absolute;
            top: 300%;
            width: 100%;
            height: 100%;
        }
    </style>
    <script>
        function toggleLanguageOptions(event) {
            event.preventDefault();
            const languageOptions = document.getElementById('language-options');
            languageOptions.classList.toggle('active');
        }
    </script>
</head>
<body>
    <header>
        <img src="img/set/img_logo_l5.png" style="width:250px;height:25px;position:absolute;left:7%;top:2%" alt="l5">
        <div class="language-bar">
            <a href="https://twitter.com/InazumaSeries">
                <img src="img/set/btn_twitter.png" alt="tweet">
            </a>
            |
            <img src="img/set/icn_language.png" alt="world" onclick="toggleLanguageOptions(event)">
            <p onclick="toggleLanguageOptions(event)">Nederlands</p>
            <ul id="language-options">
                <li>
                    <a href="https://www.inazuma.jp/victory-road/"><p style="color: #fff;">日本語</p></a>
                </li>
                <li>
                    <a href="https://www.inazuma.jp/victory-road/en/"><p style="color: #fff;">English</p></a>
                </li>
            </ul>
        </div>
    </header>

    <p class="background-image">
        <img src="img/set/img_logo.png" alt="Victory Road" style="position: absolute; left:11%">
        <h3 style="position:absolute; left:40%; top:10%">A brand new Inazuma Eleven game, returning to its roots!</h3>
        <p class="visual" style="position:absolute; left:60%; top:15%">Play through Story Mode with a new protagonist,</p>
        <p class="visual" style="position:absolute; left:45%; top:18%">and meet all characters from the series' long history in Chronicle Mode!</p>
    </p>

    <p class="movie-image">
        <img src="img/set/img_movie_pv_vision.png" alt="trailer" class="trailer" style="position: absolute; left:10%; top:100%;">
        <img src="img/set/img_bnr_blog.png" alt="blog" style="position: absolute; left:60%; top:98%">
        <img src="img/set/img_bnr_mappa.png" alt="mappa" style="position: absolute; left:60%; top:126%">
    </p>

    <img src="img/set/tit_select_mode_pc.png" alt="modes" style="position: absolute; left:3%; top:150%;">

    <div class="story-image">
        <p class="story-mode" style="position: absolute; left:18%; top:170%;">Story Mode</p>
        <img src="img/text/tit_story_pc.png" alt="Inazuma Eleven" style="position: absolute; left:16%; top:180%;">
        <img src="img/set/bg_chara01.png" alt="unmei" style="position: absolute; left:-14%; top:192%;">
        <img src="img/set/img_chara01_pc.png" alt="unmei" style="position: absolute; left:8%; top:251%;">
        <img src="img/set/bg_chara02.png" alt="endo" style="position: absolute; right:-14%; top:220%;">
        <img src="img/set/img_chara02_pc.png" alt="endo" style="position: absolute; right:7%; top:248%;">
        <p class="verhaal" style="position: absolute; left:37%; top:200%;">A boy who yearns for a world without soccer.</p>
        <p class="unmei" style="position: absolute; left:40%; top:205%;">Unmei Sasanami</p>
        <p class="verhaal" style="position: absolute; left:37%; top:215%;">A soccer monster who stands atop of the world.</p>
        <p class="haru" style="position: absolute; left:45%; top:220%;">Haru Endo</p>
        <p class="verhalen" style="position: absolute; left:37%; top:230%; text-align: center;">Their encounter marks <br> the start of a magnificent tale. <br> <br>
        Thanks to the friends he met at Nagumohara Junior High, <br> Unmei manages to regain his passion for soccer. <br> Together, they try to revive the neglected soccer club. <br><br>
        Will they be able to topple Raimon Junior High, <br> the reigning champions?
        <h2 class="about" style="position: absolute; left:37%; top:270%; text-align: center;" >An underdog story <br> about overcoming hardships, <br> growth and challenging <br> the very strongest!</h2>

        <p class="new-eleven" style="position: absolute; left:40%; top:300%; text-align: center;">That is <br> the new Inazuma Eleven!</p>

        
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
    <p class="story-mode" style="position: absolute; left:18%; top:5%;">Chronical mode</p>
    <h1 style="position:absolute; left:18%; top:15%">Face Off Against Inazuma Eleven's Past!</h1>
    <img src="img/text/tit_chronicle_pc.png" alt="oof" style="position:absolute; left:13%; top:5%">
    <p class="characters" style="position:absolute; left:15%; top:28%">Including over 4500 characters <br> from the series' past! <br> Every single player will be <br> making an appearance!</p>
    <div class="text-container" style="position:absolute; left:15%; top:63%">
        <span class="include">*Includes characters from different versions, releases, and season passes.</span>
    </div>
    <div class="text-container" style="position:absolute; left:15%; top:65%">
        <span class="exclude">*Excluding characters from some collaborations, etc.</span>
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
    <p class="caravan" style="position:absolute; top:63%; left:6%; text-align: center;">A brand new caravan <br> <a style="color:yellow">The Inazuma V Caravan</a> <br> can travle through time to <br> obeserve all of Inazuma history!</p>
    <div class="column">
      <img src="img/set/bg_chronicle_list.png" alt="list">
      <img src="img/set/img_chronicle03.jpg" alt="victory" style="border: 3px solid yellow; position: absolute; top: 31%; left: 75%; transform: translate(-50%, -50%); width:43%">
      <img src="img/set/icn_mg.png" alt="oke" style="position: absolute; right: 3.5%; top: 49%;">
      <p class="routes" style="position:absolute; top:61%; right:6%; text-align: center;">Traverse  <br> <a style="color:yellow">the Chronicle Competition Routes</a> <br> to battle against teams of past <br> the past in Inazuma History Town!</p>
      <p class="points" style="position:absolute; top:90%; right:6%; text-align: center;">Winning these matches earns you the characters' Bond Stars!</p>
    </div>
  </div>
  <div class="row" style="position: absolute; left:15%; top:75%">
    <div class="column">
      <img src="img/set/bg_chronicle_list.png" alt="list">
      <img src="img/set/img_chronicle04.jpg" alt="victory" style="border: 3px solid yellow; position: absolute; top: 31%; left: 25%; transform: translate(-50%, -50%); width:43%">
      <img src="img/set/icn_mg.png" alt="oke" style="position: absolute; left: 43.5%; top: 49%;">
      <p class="universe" style="position: absolute; left: 6%; top: 63%; text-align: center;">You can unlock new characters <br> by using Bond Stars in <br> <a style="color:yellow">the Player's Universe!</a></p>
    </div>
    <div class="column">
      <img src="img/set/bg_chronicle_list.png" alt="list">
      <img src="img/set/img_chronicle05.jpg" alt="victory" style="border: 3px solid yellow; position: absolute; top: 31%; left: 75%; transform: translate(-50%, -50%); width:43%">
      <img src="img/set/icn_mg.png" alt="oke" style="position: absolute; right: 3.5%; top: 49%;">
      <p class="alley" style="position: absolute; right: 7%; top: 61%; text-align: center;">Unlocked characters will appear <br> in <a style="color:yellow">the Bond Alley!</a> <br> fulfill the requirements of <br> the bond network, <br> they can become your ally!</p>
    </div>
  </div>
  <div class="free-style" style="background-color: #00165e; position:absolute; top:150%; width:100%; height:55%">
<p class="playing" style="text-align: center;">Play the way you want in freestyle play!</p>
<img src="img/set/bg_battle01.jpg" alt="battle">
<img src="img/set/bg_battle02.jpg" alt="soccer">
</div>
<div class="mappa">
    <img src="img/set/bg_mappa.jpg" alt="mappa" style="position: absolute; right:0%">
    <p class="animation" style="color: #fff; position:absolute; left:10%; top:10%; font: bold 24px/1.5 Helvetica, Verdana, sans-serif;">ANIMATION</p>
    <img style="position: absolute; left:10%; top:20%;" src="img/set/img_logo_mappa.png" alt="mappa">
    <p class="produced" style="color:white; position:absolute; left:10%; top:40%; font: bold 24px/1.5 Helvetica, Verdana, sans-serif;">Animation Produced by MAPPA!</p>
    <p class="in-game" style="color:darkcyan; position:absolute; left:10%; top:50%; font: bold 15px/1.5 Helvetica, Verdana, sans-serif;">The in-game cut-scenes and other animation were <br> produced in collaboration with the animation studio <br> MAPPA. <br>
The game features more hours of full-blown animation <br> than ever, elevating the story, and <br> making it even more dramatic and enjoyable!</p>
</div>
<footer>
<table style="margin-right: 20px;">
<div style="display: flex; justify-content: center;">
  <table style="position: absolute; top:0%; left:23%;">
    <tr>
      <td>Title:</td>
      <td>INAZUMA ELEVEN: Victory Road</td>
    </tr>
    <tr>
      <td>Genre:</td>
      <td>Collection and Simulation Soccer RPG</td>
    </tr>
    <tr>
      <td>Supported Platforms:</td>
      <td>Nintendo Switch／PlayStation®4／iOS／Android</td>
    </tr>
    <tr>
      <td>Release Date:</td>
      <td>Coming in 2023</td>
    </tr>
  </table>

  <table style="position: absolute; top:0%; right:23%;">
    <tr>
      <td>Price:</td>
      <td>undecided</td>
    </tr>
    <tr>
      <td>Rating:</td>
      <td>Review pending</td>
    </tr>
    <tr>
      <td>Design/Production:</td>
      <td>LEVEL-5 Inc.</td>
    </tr>
  </table>
  
<img src="img/set/bnr_vision_pc.png" alt="vision" style="position: absolute; bottom: 30%; left:50%">
<img src="img/set/img_logo_l5_f.png" alt="lvl5" style="position: absolute; bottom: 10%; height: 45px; width: 100px; left:50%">
</div>
</footer>
</div>
</body>
</html>
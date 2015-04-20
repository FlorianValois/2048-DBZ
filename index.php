<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>2048 DBZ, affrontes la puissance des supers saiyans</title>

  <link href="style/main.css" rel="stylesheet" type="text/css">
  <link href="style/custom.css" rel="stylesheet" type="text/css">
  <link rel="apple-touch-icon" href="meta/apple-touch-icon.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  
<meta property="og:url" content="http://www.florian-valois.com/2048dbz/" />
<meta property="og:title" content="2048 DBZ, affrontes la puissance des supers saiyans" />
<meta property="og:description" content="2048 DBZ, affrontes la puissance des supers saiyans. Joins les nombres afin d'obtenir le plus puissant des supers guerriers!" />
<meta property="og:image" content="http://www.florian-valois.com/2048dbz/images/2048dbz_logo.png" />

  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
    <audio preload="auto" id="pow1"><source src="son/meleemiss3.mp3" type="audio/mp3"></audio>
    <audio preload="auto" id="pow2"><source src="son/teleport.mp3" type="audio/mp3"></audio>
    <audio preload="auto" id="pow3"><source src="son/weakpunch.mp3" type="audio/mp3"></audio>
    <audio preload="auto" id="pow4"><source src="son/mediumpunch.mp3" type="audio/mp3"></audio>
  <div class="container">
    <div class="heading">
      <h1 class="title"><a href="http://2048dbz.com" title="2048DBZ"><img src="images/2048dbz_logo.png" alt="2048DBZ Logo" /></a></h1>
    </div>    
    <div class="game-container">
      <div class="game-message">
        <p></p>
        <div class="lower">
	        <a class="keep-playing-button">Continuer</a>
          <a class="retry-button">Recommencer</a>
        </div>
      </div>
      <div class="grid-container">
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>

      </div>
      <div class="tile-container">
      </div>
        <div class="scores-container">
            <div class="score-container">0</div>
        </div>
    </div>
    <div style="text-align:center;">
    <object type="application/x-shockwave-flash" data="dewplayer-rect.swf" width="240" height="20" id="dewplayermultirect" name="dewplayermultirect">
        <param name="movie" value="dewplayer-rect.swf" />
        <param name="flashvars" value="volume=20&autoreplay=true&mp3=
        son/dragon_ball_z_1er_opening.mp3|
        son/dragon_ball_z_2eme_opening.mp3|
        son/theme_debut_episode.mp3|
        son/theme_vegeta.mp3|
        son/theme_freezer.mp3|
        son/theme_combat_01.mp3|
        son/theme_cell.mp3|
        son/theme_combat_02.mp3|
        son/theme_boubou.mp3|
        son/theme_combat_03.mp3|
        son/theme_genkidama.mp3|
        son/theme_shenron.mp3
        " />
    </object>
    </div>
        
        <strong class="important">2048DBZ</strong>, créé par <a href="http://www.florian-valois.com" target="_blank" title="Florian Valois">Florian Valois</a>.<br/>
        D'après le jeu <strong class="important">2048</strong>, créé par <a href="https://github.com/gabrielecirulli/2048" target="_blank">Gabriele Cirulli</a>.
        
    <div id="sharer">
      <div class="fb-like" data-href="http://www.florian-valois.com/2048dbz/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div><br/><br/>
      <a href="https://twitter.com/share" class="twitter-share-button" data-lang="fr" data-text="Découvrez le célèbre jeu 2048 aux couleurs de Dragon Ball Z" data-via="Florian_Valois" data-hashtags="2048DBZ">Tweeter</a><br/><br/>
      <a href="https://twitter.com/Florian_Valois" class="twitter-follow-button" data-dnt="true">@Florian_Valois</a>
    </div>
  </div>

  <script src="js/animframe_polyfill.js"></script>
  <script src="js/keyboard_input_manager.js"></script>
  <script src="js/html_actuator.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/tile.js"></script>
  <script src="js/local_score_manager.js"></script>
  <script src="js/game_manager.js"></script>
  <script src="js/application.js"></script>
  <script src="js/custom.js"></script>
  
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=171679206203916";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-42122545-2', 'Florian-valois.com');
  ga('send', 'pageview');
</script>

</body>
</html>

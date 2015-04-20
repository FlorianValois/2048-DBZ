// Création des variables de son pour les flèches
var sounds = {
   37 : 'pow1', // key 'GAUCHE'
   38 : 'pow4', // key 'HAUT'
   39 : 'pow3', // key 'DROIT'
   40 : 'pow2', // key 'BAS'
};

document.getElementById('pow1').volume=0.1;
document.getElementById('pow2').volume=0.1;
document.getElementById('pow3').volume=0.1;
document.getElementById('pow4').volume=0.1;

document.onkeydown = function(e) {
    var soundId = sounds[e.keyCode];
        soundId.volume = 0.1;
    if (soundId) document.getElementById(soundId).play();
    else console.log("key not mapped : code is", e.keyCode);
}
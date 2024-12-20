let isPlaying = false; // Variable d'état pour la lecture
let audioPlayer = document.getElementById('audioPlayer');
let audioSource = document.getElementById('audioSource');
let playButton = document.getElementById('playButton');
let slider = document.getElementById('slider');
let progressBar = document.getElementById('progressBar');
let currentPath = ''; // Variable pour garder une trace du chemin actuel de la musique

// Fonction pour gérer la lecture de la musique
function playMusic(path) {
  // Si la musique change, mettez à jour la source et commencez à jouer depuis le début
  if (currentPath !== path) {
    currentPath = path; // Mémoriser le chemin de la musique
    audioSource.src = path; // Mettre à jour la source de la musique
    audioPlayer.load(); // Charger la nouvelle musique
    slider.value = 0; // Réinitialiser le slider au début (si c'est une nouvelle musique)
    audioPlayer.play(); // Démarrer la lecture
    playButton.classList.remove('bx-play');
    playButton.classList.add('bx-pause');
    isPlaying = true;
  } else {
    // Si la même musique est en cours de lecture, on la met en pause ou la reprend
    if (isPlaying) {
      audioPlayer.pause();
      playButton.classList.remove('bx-pause');
      playButton.classList.add('bx-play');
      isPlaying = false;
    } else {
      audioPlayer.play();
      playButton.classList.remove('bx-play');
      playButton.classList.add('bx-pause');
      isPlaying = true;
    }
  }
}

// Mettre à jour la durée maximale du slider une fois la musique prête
audioPlayer.onloadedmetadata = function () {
  slider.max = audioPlayer.duration; // Définir la valeur max du slider
};

// Synchronisation du slider avec la musique
audioPlayer.ontimeupdate = function () {
  slider.value = audioPlayer.currentTime; // Mettre à jour le slider avec la position actuelle
  progressBar.style.width = `${(audioPlayer.currentTime / audioPlayer.duration) * 100}%`; // Barre de progression
};

// Lorsque l'utilisateur déplace le slider
slider.oninput = function () {
  audioPlayer.currentTime = slider.value; // Changer la position de la musique en fonction du slider
};

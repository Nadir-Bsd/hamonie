const playPause = document.querySelector("#playButton");
const slider = document.querySelector("#slider");

let count = 0; // Initialisation du compteur
let intervalId = null; // Variable pour stocker l'ID de l'intervalle

playPause.addEventListener("click", handlePlayPause);

function handlePlayPause(event) {
  // Vérifier l'état actuel de l'icône et changer l'icône en conséquence
  if (event.target.classList.contains("bx-play")) {
    event.target.classList.remove("bx-play");
    event.target.classList.add("bx-pause");

    // Démarrer l'intervalle si ce n'est pas déjà en cours
    if (!intervalId) {
      intervalId = setInterval(() => {
        count++;
        slider.style.width = count + "%";
        console.log(count);

        // Arrêter l'intervalle lorsque count atteint 100
        if (count >= 100) {
          clearInterval(intervalId);
          count = 0;
          intervalId = null;
          event.target.classList.remove("bx-pause");
          event.target.classList.add("bx-play");
        }
      }, 100);
    }
  } else if (event.target.classList.contains("bx-pause")) {
    event.target.classList.remove("bx-pause");
    event.target.classList.add("bx-play");

    // Arrêter l'intervalle lorsqu'on passe en pause
    if (intervalId) {
      clearInterval(intervalId);
      intervalId = null;
    }
  }
}

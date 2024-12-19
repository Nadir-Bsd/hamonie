// Sélection des éléments nécessaires
const musicPlayer = document.getElementById('musicPlayer');
const musicImage = document.getElementById('musicImage');

// Fonction pour extraire deux couleurs dominantes
function getTwoDominantColors(image) {
    const canvas = document.createElement('canvas');
    const ctx = canvas.getContext('2d');

    // S'assurer que l'image est complètement chargée
    if (!image.complete) return [{ r: 127, g: 127, b: 127 }, { r: 200, g: 200, b: 200 }];

    canvas.width = image.naturalWidth || image.width;
    canvas.height = image.naturalHeight || image.height;

    ctx.drawImage(image, 0, 0, canvas.width, canvas.height);

    const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
    const { data } = imageData;

    const colorBuckets = [
        { r: 0, g: 0, b: 0, count: 0 }, // Couleur dominante 1
        { r: 0, g: 0, b: 0, count: 0 }, // Couleur dominante 2
    ];

    // Parcourir les pixels
    for (let i = 0; i < data.length; i += 4) {
        const r = data[i];
        const g = data[i + 1];
        const b = data[i + 2];

        // Ajouter aux deux buckets (on peut raffiner l'algo pour clusterisation si besoin)
        if (r + g + b < 384) { // Plus sombre
            colorBuckets[0].r += r;
            colorBuckets[0].g += g;
            colorBuckets[0].b += b;
            colorBuckets[0].count++;
        } else { // Plus clair
            colorBuckets[1].r += r;
            colorBuckets[1].g += g;
            colorBuckets[1].b += b;
            colorBuckets[1].count++;
        }
    }

    // Calculer les moyennes des deux buckets
    return colorBuckets.map(bucket => ({
        r: Math.floor(bucket.r / bucket.count) || 127,
        g: Math.floor(bucket.g / bucket.count) || 127,
        b: Math.floor(bucket.b / bucket.count) || 127,
    }));
}

// Mettre à jour le dégradé du player
function updateMusicPlayerGradient() {
    const [color1, color2] = getTwoDominantColors(musicImage);

    // Appliquer un dégradé linéaire avec les deux couleurs
    musicPlayer.style.background = `linear-gradient(135deg, rgb(${color1.r}, ${color1.g}, ${color1.b}), rgb(${color2.r}, ${color2.g}, ${color2.b}))`;
}

// Écouter l'événement "load" sur l'image pour changer le dégradé
musicImage.addEventListener('load', updateMusicPlayerGradient);

// Appeler la fonction directement au cas où l'image est déjà chargée
if (musicImage.complete) {
    updateMusicPlayerGradient();
}

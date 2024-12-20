<?php
include_once("../../backend/database/connectionDataBase.php");

$sql = "SELECT 
            music.*, 
            artist.name AS artist_name, 
            image.name AS image_name 
        FROM `music` 
        JOIN artist ON music.id_artist = artist.id
        JOIN image ON music.id_image = image.id
        WHERE music.id = 6";

try {
    $stmt = $pdo->query($sql);
    $musics = $stmt->fetchAll(PDO::FETCH_ASSOC); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat

} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../styles/end.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/fond.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="../js/playPause.js"></script>
    <script defer src="../js/boxicons.js"></script>
    <script defer src="../js/colorChange.js"></script>
</head>

<body class="flex flex-col h-screen justify-end">


    <?php
    if (!empty($musics)) {
        $music = reset($musics); // Récupère la première musique
    ?>
       <section id="musicPlayer" class="h-20 flex items-center justify-evenly bg-red-500">
    <div id="imageDyn" class="bg-gray-500 w-16 h-16">
                <img id="musicImage" src="../img/<?php echo htmlspecialchars($music['image_name']); ?>.jpg" alt="Cover Image" class="w-full h-full object-cover">
            </div>
            <div class="text-white">
                <p class="font-semibold"><?= htmlspecialchars($music['title']); ?></p>
                <p class="text-sm"><?= htmlspecialchars($music['artist_name']); ?></p>
            </div>
            <i id="playButton" class='bx bx-md bx-play' style='color:#ffffff' onclick="playMusic('../music/<?php echo htmlspecialchars($music['path']); ?>')"></i>
            <audio id="audioPlayer" class="hidden">
                <source id="audioSource" type="audio/mp3">
            </audio>
            <div class="absolute bottom-10 w-full">

                <div class="relative bottom-2 w-full h-1 bg-gray-400 rounded">
                    <div
                        id="progressBar"
                        class="absolute top-0 left-0 h-full bg-red-500 rounded"
                        style="width: 0%"></div>
                    <input
                        id="slider"
                        type="range"
                        min="0"
                        max="100"
                        value="0"
                        class="absolute inset-0 w-full h-full opacity-0 appearance-none cursor-pointer" />
                </div>

            </div>
        </section>

    <?php
    } else {
        echo "<p>Aucune musique disponible.</p>";
    }
    ?>
    <footer class="h-12 bg-emerald-green bg-opacity-25 flex justify-evenly items-center py-2">
        <div class="flex flex-col items-center justify-center text-sm text-white">
            <box-icon name='home-alt' color="#ECECEC"></box-icon>
            <p>Accueil</p>
        </div>
        <div class="flex flex-col items-center justify-center text-sm text-white">
            <box-icon name='search-alt-2' color='#ffffff'></box-icon>
            <p>Rechercher</p>
        </div>
        <div class="flex flex-col items-center justify-center text-sm text-white">
            <box-icon name='library' color='#ffffff'></box-icon>
            <p>Bibliothèque</p>
        </div>
    </footer>

</body>

</html>
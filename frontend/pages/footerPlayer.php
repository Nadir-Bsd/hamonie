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




    <section id="musicPlayer" class="h-20  flex items-center justify-evenly bg-red-500">
        <div id="imageDyn" class="bg-gray-500 w-16 h-16">
            <img id="musicImage" src="../img/currentsAlbum.jpg" alt="Cover Image" class="w-full h-full object-cover">
        </div>
        <div class="text-white">
            <p class="font-semibold">Titre de la musique</p>
            <p class="text-sm">Nom de l'artiste</p>
        </div>

        <i id="playButton" class='bx bx-md bx-play' style='color:#ffffff'></i>

        <div class="absolute bottom-10 w-full">

            <div>
                <input class="w-[100%] appearance-none outline-none range-xl h-[2px] bg-gray-400" type="range" name="slider" id="slider" min="0" max="100" value="0" style="width: 0%">
            </div>
        </div>


    </section>
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
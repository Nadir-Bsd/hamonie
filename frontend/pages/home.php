<?php
include_once "../../backend/process/user/userHome.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../styles/end.css">

    <!-- Pour le fond étoilé :  -->
    <link rel="stylesheet" href="../styles/fond.css">

    <!-- Pour les icônes -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- Le site pour récupérer les icones : 
    https://boxicons.com/ -->

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="text-white">
    <!-- Les étoiles de fond :  -->
    <header class="m-7">
        <div class="flex justify-end align-middle gap-6">
            <img src="../img/Logo.png" alt="Icon settings" class="w-8">
            <i class="bx bxs-cog text-white w-8 h-8 text-2xl hover:text-bright-orange transition duration-300"></i>
        </div>
    </header>


    <section class="m-3">
        <!------------------------ PLAYLISTS ---------------------------------------------------------------------------------------->
        <article class="mb-7">
            <h1 class="text-white font-roboto font-semibold text-3xl mb-10">Vos playlists</h1>
            <!-- Conteneur scrollable -->
            <div class="flex flex-row gap-5 overflow-x-auto scrollbar-hide">
                <?php foreach ($playlists as $playlist) { ?>
                    <div class="flex flex-col gap-1 items-center snap-start w-[130px] shrink-0">
                        <div>
                            <img src="../img/Icones/Annexe - mise en page/Playlist.png" alt=""
                                class="w-[130px] h-[130px] object-cover aspect-square">
                        </div>
                        <h5 class="truncate text-ellipsis overflow-hidden whitespace-nowrap w-[130px] text-center">
                            <?= htmlspecialchars($playlist['title']) ?>
                        </h5>
                    </div>
                <?php } ?>
            </div>
        </article>

        <!------------------------ ARTISTES ---------------------------------------------------------------------------------------->
        <article class="mb-7">
            <h1 class="text-white font-roboto font-semibold text-3xl mb-10">Vos artistes</h1>
            <!-- Conteneur scrollable -->
            <div class="flex gap-5 overflow-x-auto scrollbar-hide">
                <?php foreach ($artists as $artist) { ?>
                    <div class="flex flex-col gap-1 items-center snap-start w-[130px] shrink-0">
                        <div>
                            <img src="<?= htmlspecialchars($artist['artist_image']) ?>" alt=""
                                class="w-[130px] h-[130px] object-cover rounded-full">
                        </div>
                        <h5 class="truncate text-ellipsis overflow-hidden whitespace-nowrap w-[130px] text-center">
                            <?= htmlspecialchars($artist['name']) ?>
                        </h5>
                    </div>
                <?php } ?>
            </div>
        </article>

        <!------------------------ MUSIQUE ---------------------------------------------------------------------------------------->
    
    </section>

    
    <div id="stars"></div>
</body>

</html>
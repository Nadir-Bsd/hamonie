<?php
session_start();

?>

<!-- recupe 
 image playlist 
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <button></button>
        <nav>
            <div>
                <label for="playlistSearchBar"><img src="" alt="image d'une loupe"></label>
                <input type="search" name="playlistSearchBar">
            </div>
            <input type="submit">
        </nav>
        <!-- img de la playlist -->
        <div><img src="<?= $_SESSION['playlist']['image'] ?>" alt=""></div>
    </header>

    <main>
        <?php foreach ($_SESSION['playlistMusic'] as $music) { ?>
        <div>
            <img src="<?= $music['musicImage'] ?>" alt="image de la musique <?= $music['musicTitle'] ?>">
            <div>
                <h5><?= $music['musicTitle'] ?></h5>
                <p><?= $music['artistName'] ?></p>
            </div>
        </div>
        <?php } ?>
    </main>
    <footer></footer>
    
</body>
</html>
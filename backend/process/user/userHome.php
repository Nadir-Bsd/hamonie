<?php
include_once __DIR__ . '/../../dataBase/connectionDataBase.php';

session_start();

// Simuler un utilisateur connecté pour le test
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = [
        'id' => 1
    ];
}

// Récupérer l'ID de l'utilisateur connecté
$userId = $_SESSION['user']['id'];
var_dump($userId);

// ---------------------- Playlist
$sqlPlaylists = "SELECT playlist.id, playlist.title 
                FROM playlist 
                WHERE playlist.id_user = :userId;";

try {
    // Préparer la requête avec un paramètre nommé
    $stmt = $pdo->prepare($sqlPlaylists);
    $stmt->execute(['userId' => $userId]);
    $playlists = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // var_dump($playlists);

} catch (PDOException $error) {
    echo "Erreur lors de la requête : " . $error->getMessage();
}

// ---------------------- Artist
$sqlArtists = "SELECT DISTINCT artist.id, artist.name, image.path AS artist_image
               FROM artist
               LEFT JOIN image ON artist.id_image = image.id
               JOIN music ON artist.id = music.id_artist
               JOIN playlist_music ON playlist_music.id_music = music.id
               WHERE playlist_music.id_playlist IN (
                   SELECT id FROM playlist WHERE id_user = :userId
               )
               LIMIT 0, 25;";

try {
    $stmt = $pdo->prepare($sqlArtists);
    $stmt->execute(['userId' => $userId]);
    $artists = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // var_dump($artists);

} catch (PDOException $error) {
    echo "Erreur lors de la requête : " . $error->getMessage();
}


// ---------------------- Music
$sqlMusics = "SELECT music.id, music.title, music.duration, image.path AS music_image 
                FROM music JOIN playlist_music 
                ON playlist_music.id_music = music.id 
                LEFT JOIN image ON music.id_image = image.id 
                WHERE playlist_music.id_playlist IN 
                (SELECT id FROM playlist WHERE id_user = :userId
               )
               LIMIT 0, 25;";

try {
    $stmt = $pdo->prepare($sqlMusics);
    $stmt->execute(['userId' => $userId]);
    $sqlMusics = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($sqlMusics);

} catch (PDOException $error) {
    echo "Erreur lors de la requête : " . $error->getMessage();
}

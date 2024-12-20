<?php
include_once '../../dataBase/connectionDataBase.php';

session_start();

if (!isset($_SESSION['user'])) {
    // header('Location: ../../../frontend/pages/home.php');
    // exit;
}


// Récupérer l'ID de l'utilisateur connecté : 
$userId = $_SESSION['user']['id'];

var_dump($userId);


// Simuler un utilisateur a supprimer : 
$_SESSION['user'] = [
    'id' => 1
];






// //**********************************************************************
// *************************************************************************
// ****************************************************** Mes requêtes SQL : 

// ---------------------- Playlist 
$sqlPlaylists = "SELECT playlist.id, playlist.title 
                FROM playlist 
                WHERE playlist.id_user = '$userId';";

try {
    $stmt = $pdo->query($sqlPlaylists);
    $sqlPlaylists = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($sqlPlaylists);

} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}

// ---------------------- Artist
$sqlArtists = "SELECT DISTINCT artist.id, artist.name, image.path AS artist_image
               FROM artist
               LEFT JOIN image ON artist.id_image = image.id
               JOIN music ON artist.id = music.id_artist
               JOIN playlist_music ON playlist_music.id_music = music.id
               WHERE playlist_music.id_playlist IN (
                   SELECT id FROM playlist WHERE id_user = ?
               )
               LIMIT 0, 25;";

try {
    $stmt = $pdo->query($sqlPlaylists);
    $sqlPlaylists = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($sqlPlaylists);

} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}               

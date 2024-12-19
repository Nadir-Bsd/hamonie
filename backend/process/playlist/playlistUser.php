<?php
include_once '../../dataBase/connectionDataBase.php';


// a recuperer dans la session
$id_playlist = '1';
$playlist_name;

$stmt = $pdo->prepare('SELECT music.title, image.path, artist.name FROM music 
JOIN playlist_music ON music.id = playlist_music.id_music
JOIN artist ON artist.id = music.id_artist
JOIN image ON image.id = music.id_image 
WHERE playlist_music.id_playlist = :id_playlist');

$stmt->execute([
    ':id_playlist' => $id_playlist,
]);

$musics = $stmt->fetchAll(PDO::FETCH_ASSOC);

session_start();

foreach ($musics as $music) {
    $infosMusic[] = [
        "artistName"=>$music["name"],
        "musicName"=>$music["title"],
        "musicImage"=>$music["path"],
    ];
}

$_SESSION['playlistMusic'] = $infosMusic;

header("location: ../../frontend/pages/playlist.php");
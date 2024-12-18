<?php
include_once '../../dataBase/connectionDataBase.php';


// a recuperer dans la session
$id_playlist = '1';
$artistName;

$stmt = $pdo->prepare('SELECT music.title, image.path FROM music 
JOIN playlist_music ON music.id = playlist_music.id_music 
JOIN image ON image.id = music.id_image 
WHERE playlist_music.id_playlist = :id_playlist');

$stmt->execute([
    ':id_playlist' => $id_playlist,
]);


$music_playlist = $stmt->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['listMusic'] = [
    "musicName"=>$music_playlist[0]["title"],
    "musicImage"=>$music_playlist[0]["path"],
    // get artist
    "musicArtist"=>$_SESSION[0][""],
];

var_dump($music_playlist[0]);
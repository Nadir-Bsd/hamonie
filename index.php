<?php

require_once './backend/abstractDbManager.php';

$sql = "SELECT * FROM `music` WHERE 1;";
try {
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat

} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmonie</title>
    <link href="./frontend/styles/end.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-b from-dark-blue to-medium-blue h-[100vh] w-[100vw]">
    <main class="h-full flex justify-center items-center text-center">
        <div class="flex flex-col items-center">
            <img class="w-[200px] md:w-[300px]" src="./frontend/img/Logo.svg" alt="Logo Harmonie">
            <h1 class="text-white text-4xl w-[80%] mt-12 md:text-6xl md:w-[99%] md:mt-16">Bienvenue sur Harmonie</h1>
            <div class="flex md:flex-row flex-col mt-12 md:mt-24 justify-center gap-10">
                <a class="bg-emerald-green text-3xl rounded-full px-4 py-4 text-white hover:bg-dark-blue" href="./frontend/pages/connexion.php">S'enregistrer</a>
                <a class="bg-emerald-green text-3xl rounded-full px-4 py-4 text-white hover:bg-dark-blue" href="./frontend/pages/connexion.php">Se connecter</a>
            </div>
        </div>
    </main>


</body>

</html>
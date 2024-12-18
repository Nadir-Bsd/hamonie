<?php

require_once __DIR__ . '/../../backend/abstractDbManager.php';

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
    <link href="../styles/end.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-b from-dark-blue to-medium-blue h-[100vh] w-[100vw]">
    <!-- Enregistrement -->
    <main class="flex justify-center flex-col items-center">
        <h2 class="text-white text-6xl mt-24 font-bold">S'enregistrer</h2>
        <section class="flex justify-center items-center mt-24 text-white w-[50%]" id="inscription">
            <form class="flex gap-4 flex-col text-2xl" action="" method="post">
                <div class="grid grid-cols-2 grid-rows-2 items-center gap-x-52 gap-y-12">

                    <div class="flex flex-col ">
                        <label for="email">Votre email: </label>
                        <input class="text-black bg-[#777777] rounded-lg py-2" type="mail" name="email" id="email">
                    </div>
                    <div class="flex flex-col ">
                        <label for="password">Votre mot de passe: </label>
                        <input class="text-black bg-[#777777] rounded-lg py-2" type="password" name="password" id="password">
                    </div>
                    <div class="flex flex-col ">
                        <label for="confirmEmail">Confirmer email: </label>
                        <input class="text-black bg-[#777777] rounded-lg py-2" type="mail" name="confirmEmail" id="confirmEmail">
                    </div>
                    <div class="flex flex-col ">
                        <label for="confirmPassword">Confirmer mot de passe: </label>
                        <input class="text-black bg-[#777777] rounded-lg py-2" type="password" name="confirmPassword" id="confirmPassword">
                    </div>
                </div>

                <label for="username">Votre nom d'utilisateur: </label>
                <input class="text-black bg-[#777777] rounded-lg py-2" type="text" name="username" id="username">

                <input class="bg-emerald-green text-3xl rounded-full px-4 py-4 mt-12 cursor-pointer text-white hover:bg-dark-blue" type="submit" value="Créer un compte">
                
            </form>

        </section>
    </main>
</body>

</html>
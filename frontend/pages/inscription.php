<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmonie</title>
    <link href="../styles/end.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/fond.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class=" h-[100vh] w-[100vw]">
    <!-- Enregistrement -->
    <main class="flex justify-center flex-col items-center">
        <h2 class="text-white text-4xl mt-10 md:text-6xl md:mt-24 font-bold">S'enregistrer</h2>
        <section class="flex justify-center items-center mt-10 md:mt-24 text-white w-[50%]" id="inscription">

            <form class="flex gap-4 flex-col text-xl" action="../../backend/process/connections/userInscription.php" method="post">
                <div class="md:grid grid-cols-2 grid-rows-2 items-center gap-x-52 gap-y-12">

                    <div class="flex flex-col ">
                        <label for="email">Votre email: </label>
                        <input class="text-white bg-[#777777] rounded-lg py-2" type="text" name="email" 
                        id="email">
                    </div>

                    <div class="flex flex-col ">
                        <label for="confirmEmail">Confirmer email: </label>
                        <input class="text-white bg-[#777777] rounded-lg py-2 y-" type="text" name="confirmEmail" id="confirmEmail">
                    </div>

                    <div class="flex flex-col ">
                        <label for="password">Votre mot de passe: </label>
                        <input class="text-white bg-[#777777] rounded-lg py-2" type="password" name="password" id="password">
                    </div>

                    <div class="flex flex-col ">
                        <label for="confirmPassword">Confirmer mot de passe: </label>
                        <input class="text-white bg-[#777777] rounded-lg py-2" type="password" name="confirmPassword" id="confirmPassword">
                    </div>

                </div>

                <label for="username">Votre nom d'utilisateur: </label>
                <input class="text-white bg-[#777777] rounded-lg py-2" type="text" name="username" id="username">

                <input class="bg-emerald-green text-3xl rounded-full px-4 py-4 mt-12 cursor-pointer text-white hover:bg-dark-blue" type="submit" value="Créer un compte">

            </form>
            <?php if (isset($_GET['err']) && $_GET['err'] == 1) {
                echo '<p class="absolute x-0 top-6 bg-red-700">Merci de ne pas supprimer les champs</p>';
            }


            if (isset($_GET['err']) && $_GET['err'] == 2) {
                echo '<p class="absolute x-0 top-6 bg-red-700">Merci de remplir tout les champs</p>';
            }
            if (isset($_GET['err']) && $_GET['err'] == 3) {
                echo '<p class="absolute x-0 top-6 bg-red-700">La longueur max des champs est de 50 caractères</p>';
            }
            if (isset($_GET['err']) && $_GET['err'] == 4) {
                echo '<p class="absolute x-0 top-6 bg-red-700">Vérifier que les mots de passe soient les mêmes et que les emails soient les mêmes</p>';
            }
            if (isset($_GET['err']) && $_GET['err'] == 5) {
                echo '<p class="absolute x-0 top-6 bg-red-700">Mail non valide</p>';
            }

            ?>
        </section>
    </main>
    <div id="stars">
    </div>

</body>

</html>
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
            <form class="flex gap-4 flex-col text-xl" action="" method="post">
                <div class="md:grid grid-cols-2 grid-rows-2 items-center gap-x-52 gap-y-12">

                    <div class="flex flex-col ">
                        <label for="email">Votre email: </label>
                        <input class="text-white bg-[#777777] rounded-lg py-2" type="mail" name="email" id="email">
                    </div>
                    <div class="flex flex-col ">
                        <label for="confirmEmail">Confirmer email: </label>
                        <input class="text-white bg-[#777777] rounded-lg py-2" type="mail" name="confirmEmail" id="confirmEmail">
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

        </section>
    </main>
    <div id="stars">
    </div>
</body>

</html>
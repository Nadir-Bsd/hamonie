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

<body class="bg-gradient-to-b from-dark-blue to-medium-blue h-[100vh] w-[100vw]">
    <!-- Enregistrement -->
    <main class="flex justify-start flex-col items-center h-[99vh]">
        <h2 class="text-white text-4xl mt-10 md:text-6xl md:mt-24 font-bold">Se connecter</h2>
        <section class="flex justify-center h-[99%] items-center mt-10 md:mt-24 text-white w-[50%] " id="inscription">
            <form class="flex gap-4 flex-col text-xl md:text-4xl" action="../../backend/process/connections/userConnection.php" method="post">
                <div class="md:flex-row md:justify-between md:gap-12 md:flex">
                    <div class="md:flex md:flex-col">
                        <label for="email">Entrez votre mail: </label>
                        <input class="text-white bg-[#777777] rounded-lg py-2 md:mt-12" type="text" name="email" id="email">
                    </div>
                    <div class="md:flex md:flex-col mt-10 md:mt-0">
                        <label for="password">Entrez votre mot de passe: </label>
                        <input class="text-white bg-[#777777] rounded-lg py-2 md:mt-12" type="password" name="password" id="password">
                    </div>
                </div>
                <input class="bg-emerald-green text-3xl rounded-full px-4 py-4 mt-12 cursor-pointer text-white hover:bg-dark-blue" type="submit" value="Connexion">
            </form>
        </section>
    </main>
    <div id="stars">
    </div>
</body>

</html>
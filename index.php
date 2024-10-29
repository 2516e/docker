<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours docker</title>
    <link rel="shortcut icon" href="/docker-mark-white.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #0A0B14;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #e0e0e0;
            font-family: poppins;
        }

        .container {
            display: flex;
            width: 100vw;
        }

        /* Style du conteneur de formulaire */
        .form-container {

            padding: 25px 35px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            width: 30%;
        }

        .form-container h2 {
            text-align: center;
            color: #396bb2;
            /* Bleu clair */
            margin-bottom: 20px;
        }

        /* Style des champs de formulaire */
        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            color: #d53232;
            /* Rouge clair */
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 2px solid #396bb2;
            /* Bleu */
            background-color: #333;
            color: #e0e0e0;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-color: #e57373;
            /* Rouge clair */
        }

        /* Bouton de soumission */
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #396bb2;
            /* Bleu */
            border: none;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #e57373;
            /* Rouge clair */
        }


        .character {
            width: 70%;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2>Formulaire</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom">
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse mail</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="age">Âge</label>
                        <input type="number" id="age" name="age" min="1">
                    </div>
                    <div class="form-group">
                        <label for="sexe">Sexe</label>
                        <select id="sexe" name="sexe">
                            <option value="">Sélectionnez...</option>
                            <option value="femme">Femme</option>
                            <option value="homme">Homme</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                    <button type="submit" class="submit-btn">Envoyer</button>
                </div>
                <div class="error">
                    <?php if (!empty($error)) echo $error; ?>
                </div>
            </form>
        </div>


        <div class="character">
            <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.35/build/spline-viewer.js"></script>
            <spline-viewer url="https://prod.spline.design/q6xEqM1lq5NUQddM/scene.splinecode"></spline-viewer>
        </div>
    </div>
</body>

</html>

<?php

$firstName = $lastName = $gender = $email = $age = "";
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['prenom']) || empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['age']) || empty($_POST['sexe'])) {
        $error = 'Veuillez completer tout les champs';
    } else {
        $firstName = $_POST['prenom'];
        $lastName = $_POST['nom'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['sexe'];
    }
}

?>
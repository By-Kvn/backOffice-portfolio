<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back-Office Kevin</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="container">
        <h1>🛠 Back Office Kevin 👨🏽‍💻</h1>
        <article class="grid">
        <div>
            <hgroup>
                <h2>Log-In</h2>
                <h3>Connectez-vous à votre compte Admin</h3>
            </hgroup>
            <form method="POST" action="login.php">
                <div class="left-section">
                    <label for="Username">
                        Username
                        <input type="text" aria-label="Username" name="username" placeholder="Username" required>
                    </label>
                    <label for="Password">
                        Password
                        <input type="password" aria-label="Password" name="password" placeholder="Password" required>
                    </label>
                    <fieldset>
                        <label for="switch">
                            <input type="checkbox" id="switch" name="switch" role="switch">
                            Se souvenir de moi
                        </label>
                    </fieldset>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
            <div>
                <div id="form-photo">
                    <img src="img/justin-buisson-picture.jpeg" alt="pièces d'un batiment vide">
                </div>
            </div>
    </article>
    <footer>
       <!-- <a target="_blank" href="https://kevinlabatte.fr/"><img id="kl-front-logo" src="img/KL FRONT PNG.png" alt="Logo de Kl.front un K et un L" srcset=""></a>
        <span>Coded by Kl.front</span>-->
    </footer>
    </main>
</body>
</html>
<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //var_dump($_POST); // pour afficher toutes les valeurs POST
        $username = $_POST['username'];
        $password = $_POST['password'];
        // Vérifier si les identifiants sont valides
        if ($username === 'admin' && $password === 'kevin') {
            // Stocker les informations de connexion dans la session
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            // Rediriger vers la page d'accueil
            header('Location:accueil.html');
            exit;
        } else {
            echo '<h2>Nom d\'utilisateur ou mot de passe incorrect. Vous n\'êtes pas l\'admin</h2>';
           // header('Location:index.php');
        }
    }
?> 
<?php
/*
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)  {
        header('Location:index.php');
        exit;
    }
    */?>
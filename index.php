<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoLogement - Plateforme de Location</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <h1 class="logo">LoLogement</h1>
            <ul class="nav-links">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="logements/list.php">Logements</a></li>
                <?php if (isLoggedIn()): ?>
                    <li><a href="dashboard.php">Tableau de bord</a></li>
                    <li><a href="logout.php">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="login.php">Connexion</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <h2>Trouvez votre logement idéal</h2>
            <p>Découvrez les meilleures propriétés à louer</p>
            <a href="logements/list.php" class="btn btn-primary">Parcourir les logements</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 LoLogement. Tous droits réservés.</p>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
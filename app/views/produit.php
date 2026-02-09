<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit - E-commerce</title>
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="/" class="logo">E-Varotra</a>
                <ul class="menu">
                    <li><a href="/">Accueil</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="product-detail">
            <img src="/assets/images/<?= $produits["image"] ?>" width="300" alt="Produit <?= $produits["id"] ?>">
            <div class="info">
                <h1><?= $produits["nom"] ?></h1>
                <p><?= $produits["description"] ?></p>
                <p><strong>Prix :</strong> <?= $produits["prix"] ?>Ar</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 E-Varotra</p>
    </footer>
</body>
</html>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= isset($title) ? $title : 'Échange d\'objets' ?></title>
    <!-- Bootstrap CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light text-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">ÉchangeObj</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="/listings">Objets</a></li>
                    <li class="nav-item"><a class="nav-link" href="/profile">Mon profil</a></li>
                    <li class="nav-item"><a class="btn btn-outline-light ms-lg-3" href="/login">Connexion</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        <?php if (isset($flash)): ?>
            <div class="alert alert-info" role="alert"><?= htmlspecialchars($flash) ?></div>
        <?php endif; ?>
        <?= $content ?? '' ?>
    </main>

    <footer class="mt-5 py-4 bg-dark text-light">
        <div class="container text-center">
            <small>© <?= date('Y') ?> ÉchangeObj — Un projet de démonstration</small>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/auth.js"></script>
</body>

</html>
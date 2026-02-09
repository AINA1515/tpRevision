<?php $title = 'Accueil - ÉchangeObj';
ob_start(); ?>
<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-3 text-center">
        <h1 class="display-6">Donnez. Récupérez. Partagez.</h1>
        <p class="lead">Plateforme simple pour échanger des objets entre voisins.</p>
        <a class="btn btn-primary btn-lg me-2" href="/listings">Voir les objets</a>
        <a class="btn btn-outline-secondary btn-lg" href="/register">S'inscrire</a>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Facile</h5>
                <p class="card-text">Publiez en quelques clics et trouvez des objets près de chez vous.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Sûr</h5>
                <p class="card-text">Profils vérifiés et échanges responsables.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Local</h5>
                <p class="card-text">Favorisez l'économie circulaire dans votre quartier.</p>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean();
include __DIR__ . '/layout.php'; ?>
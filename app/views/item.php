<?php $title = ($item['title'] ?? 'Objet') . ' - ÉchangeObj';
ob_start(); ?>
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-5">
      <img src="<?= htmlspecialchars($item['image'] ?? '/assets/img/placeholder.png') ?>" class="img-fluid rounded-start h-100 object-fit-cover" alt="<?= htmlspecialchars($item['title']) ?>">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h3 class="card-title"><?= htmlspecialchars($item['title'] ?? '') ?></h3>
        <p class="text-muted">Publié par <?= htmlspecialchars($item['owner_name'] ?? 'Anonyme') ?> — <?= htmlspecialchars($item['location'] ?? '') ?></p>
        <p class="card-text"><?= nl2br(htmlspecialchars($item['description'] ?? '')) ?></p>
        <div class="mt-3">
          <button class="btn btn-primary" id="contactOwner">Contacter</button>
          <a class="btn btn-outline-secondary" href="/listings">Retour</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $content = ob_get_clean();
include __DIR__ . '/layout.php'; ?>
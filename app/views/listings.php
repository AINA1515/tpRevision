<?php $title = 'Objets - ÉchangeObj';
ob_start(); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Objets disponibles</h2>
  <a class="btn btn-primary" href="/listings/new">Publier un objet</a>
</div>

<div id="items" class="row g-3">
  <?php if (!empty($items)): foreach ($items as $item): ?>
      <div class="col-sm-6 col-md-4">
        <div class="card h-100">
          <img src="<?= htmlspecialchars($item['image'] ?? '/assets/img/placeholder.png') ?>" class="card-img-top" alt="<?= htmlspecialchars($item['title']) ?>">
          <div class="card-body">
            <h5 class="card-title"><a href="/listings/<?= $item['id'] ?>"><?= htmlspecialchars($item['title']) ?></a></h5>
            <p class="card-text text-muted"><?= htmlspecialchars($item['location'] ?? 'Inconnu') ?></p>
          </div>
        </div>
      </div>
    <?php endforeach;
  else: ?>
    <p>Aucun objet trouvé. Soyez le premier à publier !</p>
  <?php endif; ?>
</div>

<?php $content = ob_get_clean();
include __DIR__ . '/layout.php'; ?>
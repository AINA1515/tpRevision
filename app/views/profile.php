<?php $title = 'Mon profil - ÉchangeObj'; ob_start(); ?>
<div class="row">
  <div class="col-md-4">
    <div class="card mb-3">
      <div class="card-body">
        <h4><?= htmlspecialchars($user['name'] ?? 'Utilisateur') ?></h4>
        <p class="text-muted"><?= htmlspecialchars($user['email'] ?? '') ?></p>
      </div>
    </div>
  </div>
  <div class="col-md-8">
    <h5>Mes publications</h5>
    <div class="row g-3">
      <?php if (!empty($items)): foreach ($items as $item): ?>
        <div class="col-12">
          <div class="card">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div>
                <h6 class="mb-0"><?= htmlspecialchars($item['title']) ?></h6>
                <small class="text-muted"><?= htmlspecialchars($item['status'] ?? '') ?></small>
              </div>
              <div>
                <a href="/listings/<?= $item['id'] ?>" class="btn btn-sm btn-outline-primary">Voir</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; else: ?>
        <p>Vous n'avez pas encore publié d'objet.</p>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php $content = ob_get_clean(); include __DIR__ . '/layout.php'; ?>

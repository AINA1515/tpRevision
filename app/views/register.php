<?php $title = 'Inscription - ÉchangeObj';
ob_start(); ?>
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card shadow-sm">
      <div class="card-body">
        <h3 class="card-title mb-3">Créer un compte</h3>
        <form id="registerForm" action="/register" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="name" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Avatar</label>
            <input type="file" class="form-control" name="avatar" accept="image/*">
          </div>

          <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password" required minlength="6">
          </div>
          <div class="d-flex gap-2">
            <button class="btn btn-primary" type="submit">S'inscrire</button>
            <a href="/login" class="btn btn-outline-secondary">Déjà un compte ?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $content = ob_get_clean();
include __DIR__ . '/layout.php'; ?>
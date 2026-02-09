<?php $title = 'Connexion - ÉchangeObj'; ob_start(); ?>
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card shadow-sm">
      <div class="card-body">
        <h3 class="card-title mb-3">Connexion</h3>
        <form id="loginForm" action="/login" method="post">
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password" required>
          </div>
          <div class="d-flex gap-2">
            <button class="btn btn-primary" type="submit">Se connecter</button>
            <a href="/register" class="btn btn-outline-secondary">Créer un compte</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $content = ob_get_clean(); include __DIR__ . '/layout.php'; ?>

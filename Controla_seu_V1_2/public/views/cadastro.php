<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Criar Conta</title>
  <meta name="description" content="Crie sua conta no Controla$EU." />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href=../assets/favicon_io/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="styles.css" />
  <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="page-auth d-flex flex-column min-vh-100">

  <!-- Nav -->
  <?php
  require_once "header_login.php";
  ?>
  <main class="flex-grow-1 d-flex align-items-center py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-5">
          <div class="card shadow-card border-0 rounded-4 fade-up p-4 p-md-5">
            <div class="text-center mb-4">
              <h2 class="section-title mb-2 fs-2">Criar conta</h2>
              <p class="text-muted">Junte-se ao Controla$EU e comece a organizar suas finanças hoje mesmo.</p>
            </div>

            <form>
              <div class="mb-3">
                <label for="email" class="form-label fw-semibold">E-mail</label>
                <input type="email" class="form-control form-control-lg rounded-3" id="email"
                  placeholder="seu@email.com" required>
              </div>
              <div class="mb-4">
                <label for="password" class="form-label fw-semibold">Senha</label>
                <input type="password" class="form-control form-control-lg rounded-3" id="password"
                  placeholder="Mínimo 8 caracteres" required>
              </div>
              <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="terms" required>
                <label class="form-check-label text-muted small" for="terms">
                  Eu concordo com os <a href="#" class="text-primary text-decoration-none">Termos de Uso</a> e a <a
                    href="#" class="text-primary text-decoration-none">Política de Privacidade</a>.
                </label>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-lg">Criar minha conta</button>
              </div>

              <div class="text-center mt-4 text-muted small">
                Já tem uma conta? <a href="login.php" class="text-primary fw-semibold text-decoration-none">Faça
                  login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="site-footer mt-auto border-top-0">
    <div class="container">
      <div class="footer-bottom-content border-top-0 pt-4 pb-4">
        <span>© 2026 Controla$EU. Todos os direitos reservados.</span>
        <span>Feito com 💙 no Brasil</span>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>
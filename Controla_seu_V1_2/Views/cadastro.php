<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Criar Conta - Controla$EU</title>
  <meta name="description" content="Crie sua conta no Controla$EU." />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/favicon_io/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css" />
  <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="page-auth d-flex flex-column min-vh-100">

  <?php require_once "header_login.php"; ?>
  <main class="flex-grow-1 d-flex align-items-center py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-5">
          <div class="card shadow-card border-0 rounded-4 fade-up p-4 p-md-5">
            <div class="text-center mb-4">
              <h2 class="section-title mb-2 fs-2">Criar conta</h2>
              <p class="text-muted">Junte-se ao Controla$EU e comece a organizar suas financas hoje mesmo.</p>
            </div>

            <?php if (isset($erro)): ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i data-lucide="alert-circle" class="icon-sm me-1"></i> <?= htmlspecialchars($erro) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
            <?php endif; ?>

            <form method="POST" action="index.php?controle=AuthController&metodo=cadastrar">
              <div class="mb-3">
                <label for="nome" class="form-label fw-semibold">Nome completo</label>
                <input type="text" name="nome" class="form-control form-control-lg rounded-3" id="nome" placeholder="Seu nome" required>
              </div>
              <div class="mb-3">
                <label for="cpf" class="form-label fw-semibold">CPF</label>
                <input type="text" name="cpf" class="form-control form-control-lg rounded-3" id="cpf" placeholder="000.000.000-00" required>
              </div>
              <div class="mb-3">
                <label for="data_nascimento" class="form-label fw-semibold">Data de nascimento</label>
                <input type="date" name="data_nascimento" class="form-control form-control-lg rounded-3" id="data_nascimento" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label fw-semibold">E-mail</label>
                <input type="email" name="email" class="form-control form-control-lg rounded-3" id="email" placeholder="seu@email.com" required>
              </div>
              <div class="mb-3">
                <label for="telefone" class="form-label fw-semibold">Telefone</label>
                <input type="text" name="telefone" class="form-control form-control-lg rounded-3" id="telefone" placeholder="(14) 99999-9999" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Senha</label>
                <input type="password" name="senha" class="form-control form-control-lg rounded-3" id="password" placeholder="Minimo 6 caracteres" required>
              </div>
              <div class="mb-4">
                <label for="confirmar_senha" class="form-label fw-semibold">Confirmar senha</label>
                <input type="password" name="confirmar_senha" class="form-control form-control-lg rounded-3" id="confirmar_senha" placeholder="Repita a senha" required>
              </div>

              <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="terms" required>
                <label class="form-check-label text-muted small" for="terms">
                  Eu concordo com os <a href="#" class="text-primary text-decoration-none">Termos de Uso</a> e a <a href="#" class="text-primary text-decoration-none">Politica de Privacidade</a>.
                </label>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-lg">Criar minha conta</button>
              </div>

              <div class="text-center mt-4 text-muted small">
                Ja tem uma conta? <a href="index.php?controle=AuthController&metodo=login" class="text-primary fw-semibold text-decoration-none">Faça login</a>
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
        <span>&copy; 2026 Controla$EU. Todos os direitos reservados.</span>
        <span>Feito com 💙 no Brasil</span>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>

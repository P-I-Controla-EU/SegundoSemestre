<!DOCTYPE html>
<?php
require_once "header_login.php";
?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Controla$EU</title>
    <meta name="description" content="Controle receitas, despesas, orçamentos e metas em um só lugar. O app de finanças pensado para a nova geração." />
    <meta property="og:title" content="Controla$EU — Sua vida financeira sob controle" />
    <meta property="og:description" content="Organize seu dinheiro, bata metas e construa o seu futuro com o Controla$EU." />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/favicon_io/favicon.ico">
    <!-- Import Font (Sora/Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Custom CSS (Vanilla, No Tailwind) -->
    <link rel="stylesheet" href="styles.css" />

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

  <main>
    <!-- How It Works -->
    <section id="como" class="security-section section-padding" style="min-height: calc(100vh - 4rem - 300px);">
      <div class="container">
        <div class="section-header text-center fade-up">
          <span class="section-label">Como funciona</span>
          <h2 class="section-title">Do caos ao controle em 4 passos.</h2>
        </div>
        <div class="row g-4 mt-5">
          <div class="col-md-6 col-lg-3">
            <div class="security-card fade-up">
              <div class="step-number text-gradient">01</div>
              <h3 class="security-card-title">Crie sua conta</h3>
              <p class="security-card-desc">Cadastro rápido para começar a controlar.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="security-card fade-up" style="transition-delay: 0.08s;">
              <div class="step-number text-gradient">02</div>
              <h3 class="security-card-title">Organize suas categorias</h3>
              <p class="security-card-desc">Personalize categorias de receitas e despesas do seu jeito.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="security-card fade-up" style="transition-delay: 0.16s;">
              <div class="step-number text-gradient">03</div>
              <h3 class="security-card-title">Defina metas e orçamentos</h3>
              <p class="security-card-desc">Programe metas e orçamentos mensais — o Controla$EU acompanha por você.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="security-card fade-up" style="transition-delay: 0.24s;">
              <div class="step-number text-gradient">04</div>
              <h3 class="security-card-title">Acompanhe e evolua</h3>
              <p class="security-card-desc">Receba notificações inteligentes e veja seu progresso.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid row g-4">
        <div class="col-lg-3 col-sm-6">
          <a href="index.html" class="logo-link">
            <img src="assets/logo.png" alt="Controla$EU" class="logo-img-small" />
            <span class="logo-text text-dark">Controla$EU</span>
          </a>
          <p class="footer-desc">A gestão financeira inteligente para a nova geração.</p>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h4 class="footer-title">Produto</h4>
          <ul class="footer-links">
            <li><a href="index.html#recursos">Recursos</a></li>
            <li><a href="planos.html">Planos</a></li>
            <li><a href="index.html#faq">Segurança</a></li>
            <li><a href="como-funciona.html">Mobile</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h4 class="footer-title">Empresa</h4>
          <ul class="footer-links">
            <li><a href="quem-somos.php">Sobre</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Carreiras</a></li>
            <li><a href="#">Imprensa</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h4 class="footer-title">Suporte</h4>
          <ul class="footer-links">
            <li><a href="#">Central de ajuda</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="#">Status</a></li>
            <li><a href="#">Privacidade</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="footer-bottom-content">
          <span>© 2026 Controla$EU. Todos os direitos reservados.</span>
          <span>Feito com 💙 no Brasil</span>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>

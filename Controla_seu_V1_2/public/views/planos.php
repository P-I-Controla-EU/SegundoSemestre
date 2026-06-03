<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Planos</title>
  <meta name="description" content="Escolha o plano ideal do Controla$EU para organizar suas finanças." />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/favicon_io/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css" />
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

  <!-- Nav -->
  <?php
  require_once "header_login.php";
  ?>

  <main>
    <!-- Plans -->
    <section id="planos" class="security-section section-padding" style="min-height: calc(100vh - 4rem - 300px);">
      <div class="container">
        <div class="section-header text-center fade-up">
          <span class="section-label">Planos</span>
          <h2 class="section-title">Escolha o plano que mais combina com você.</h2>
          <p class="section-subtitle-center security-subtitle mx-auto">Comece de graça. Faça upgrade quando quiser. Cancele quando precisar.</p>
        </div>

        <div class="row g-4 mt-5">
          <!-- Starter -->
          <div class="col-lg-4 col-md-6">
            <div class="plan-card security-card fade-up">
              <h3 class="plan-title text-white">Starter</h3>
              <p class="plan-desc security-card-desc">Para começar a organizar sua vida financeira.</p>
              <div class="plan-price-wrapper">
                <span class="plan-price text-white">R$ 35</span>
                <span class="plan-period text-white-70">/mês</span>
              </div>
              <ul class="plan-features text-white">
                <li><i data-lucide="x" class="icon-sm" color="#fc1c03"></i><span>Sem integrações bancárias</span></li>
                <li><i data-lucide="check" class="icon-sm color-success"></i><span>Controle manual de contas e cartões</span></li>
                <li><i data-lucide="check" class="icon-sm color-success"></i><span>Criação de categorias personalizadas</span></li>
                <li><i data-lucide="check" class="icon-sm color-success"></i><span>Notificações de contas a pagar</span></li>
              </ul>
              <a href="cadastro.html" class="btn btn-white plan-btn">Assinar Starter<i data-lucide="arrow-right" class="icon-sm"></i></a>
            </div>
          </div>

          <!-- Plus -->
          <div class="col-lg-4 col-md-6">
            <div class="plan-card plan-featured gradient-primary shadow-glow scale-up fade-up" style="transition-delay: 0.08s;">
              <span class="plan-badge">MAIS POPULAR</span>
              <h3 class="plan-title text-white">Plus</h3>
              <p class="plan-desc text-white-80">Para quem quer ir além e bater metas maiores.</p>
              <div class="plan-price-wrapper">
                <span class="plan-price text-white">R$ 45</span>
                <span class="plan-period text-white-70">/mês</span>
              </div>
              <ul class="plan-features text-white">
                <li><i data-lucide="check" class="icon-sm text-white"></i><span>Tudo do Starter</span></li>
                <li><i data-lucide="check" class="icon-sm text-white"></i><span>Até 3 contas integradas</span></li>
                <li><i data-lucide="check" class="icon-sm text-white"></i><span>Relatórios avançados de transações</span></li>
                <li><i data-lucide="check" class="icon-sm text-white"></i><span>Integrações bancárias</span></li>
                <li><i data-lucide="check" class="icon-sm text-white"></i><span>Conexões com contas <strong>Pessoa Física</strong></span></li>
              </ul>
              <a href="cadastro.html" class="btn btn-white plan-btn">
                Assinar Plus <i data-lucide="arrow-right" class="icon-sm"></i>
              </a>
            </div>
          </div>

          <!-- Pro -->
          <div class="col-lg-4 col-md-6 mx-auto">
            <div class="plan-card security-card fade-up" style="transition-delay: 0.16s;">
              <h3 class="plan-title text-white">Pro</h3>
              <p class="plan-desc security-card-desc">Para freelas, MEIs e pequenas empresas.</p>
              <div class="plan-price-wrapper">
                <span class="plan-price text-white">R$ 65</span>
                <span class="plan-period text-white-70">/mês</span>
              </div>
              <ul class="plan-features text-white">
                <li><i data-lucide="check" class="icon-sm color-success"></i><span>Tudo do Starter</span></li>
                <li><i data-lucide="check" class="icon-sm color-success"></i><span>Tudo do Plus</span></li>
                <li><i data-lucide="check" class="icon-sm color-success"></i><span>Múltiplas contas integradas</span></li>
                <li><i data-lucide="check" class="icon-sm color-success"></i><span>Conexões com contas <strong>Pessoa Física</strong> e <strong>Pessoa Jurídica</strong></span></li>
              </ul>
              <a href="cadastro.html" class="btn btn-white plan-btn">
                Assinar Pro <i data-lucide="arrow-right" class="icon-sm"></i>
              </a>
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
            <li><a href="quem-somos.html">Sobre</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Carreiras</a></li>
            <li><a href="#">Imprensa</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h4 class="footer-title">Suporte</h4>
          <ul class="footer-links">
            <li><a href="#">Central de ajuda</a></li>
            <li><a href="contato.html">Contato</a></li>
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

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contato</title>
  <meta name="description" content="Entre em contato com a equipe do Controla$EU." />

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
<?php
require_once "header_login.php";
?>


  <!-- Nav -->

  <main>
    <!-- Contato -->
    <section id="contato" class="security-section section-padding" style="min-height: calc(100vh - 4rem - 300px);">
      <div class="container">
        <div class="section-header text-center fade-up">
          <span class="section-label">Contato</span>
          <h2 class="section-title"><span class="text-gradient">Fale</span> conosco.</h2>
          <p class="section-subtitle-center security-subtitle mx-auto">Tem alguma dúvida, sugestão ou precisa de ajuda? Nossa equipe está pronta para te atender.</p>
        </div>

        <div class="row g-4 mt-5">
          <div class="col-lg-3 col-sm-6">
            <a href="mailto:controlaseu.suporte@gmail.com" class="security-card contact-card fade-up text-center text-sm-start d-block text-decoration-none">
              <div class="icon-box gradient-primary shadow-glow mx-auto mx-sm-0">
                <i data-lucide="mail" class="icon-md text-white"></i>
              </div>
              <h3 class="security-card-title">E-mail</h3>
              <p class="security-card-desc">Envie um e-mail para nossa equipe. Respondemos em até 24h.</p>
              <p class="contact-value">controlaseu.suporte@gmail.com</p>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a href="#" class="security-card contact-card fade-up text-center text-sm-start d-block text-decoration-none" style="transition-delay: 0.08s;">
              <div class="icon-box gradient-primary shadow-glow mx-auto mx-sm-0">
                <i data-lucide="message-square" class="icon-md text-white"></i>
              </div>
              <h3 class="security-card-title">Chat no app</h3>
              <p class="security-card-desc">Converse em tempo real com nosso suporte direto no aplicativo.</p>
              <p class="contact-value">Disponível 24/7</p>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a href="tel:14997145101" class="security-card contact-card fade-up text-center text-sm-start d-block text-decoration-none" style="transition-delay: 0.16s;">
              <div class="icon-box gradient-primary shadow-glow mx-auto mx-sm-0">
                <i data-lucide="phone" class="icon-md text-white"></i>
              </div>
              <h3 class="security-card-title">Telefone</h3>
              <p class="security-card-desc">Ligue para falar com um atendente de segunda a sexta.</p>
              <p class="contact-value">(14) 997145101</p>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a href="#" class="security-card contact-card fade-up text-center text-sm-start d-block text-decoration-none" style="transition-delay: 0.24s;">
              <div class="icon-box gradient-primary shadow-glow mx-auto mx-sm-0">
                <i data-lucide="map-pin" class="icon-md text-white"></i>
              </div>
              <h3 class="security-card-title">Endereço</h3>
              <p class="security-card-desc">Nosso escritório fica no coração de São Paulo.</p>
              <p class="contact-value">R. Frei Galvão - Jardim Pedro Ometto, Jaú - SP</p>
            </a>
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
            <li><a href="como_funciona.php">Mobile</a></li>
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

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quem somos?</title>
  <meta name="description" content="Saiba mais sobre a missão, visão e valores do Controla$EU." />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/favicon_io/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css" />
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

  <?php require_once "header_login.php"; ?>

  <main>
    <section id="sobre" class="security-section section-padding" style="min-height: calc(100vh - 4rem - 300px);">
      <div class="container">
        <div class="section-header text-center fade-up">
          <span class="section-label">Sobre nós</span>
          <h2 class="section-title">O Controla$EU nasceu para <span class="text-gradient">democratizar</span> a educação financeira.</h2>
          <p class="section-subtitle-center security-subtitle mx-auto">Somos um time de jovens que acredita que organizar o dinheiro não precisa ser chato ou complicado.</p>
        </div>
        
        <div class="row g-4 mt-5">
          <div class="col-lg-4 col-md-6">
            <div class="security-card fade-up">
              <div class="icon-box gradient-primary shadow-glow">
                <i data-lucide="heart" class="icon-md"></i>
              </div>
              <h3 class="security-card-title">Missão</h3>
              <p class="security-card-desc">Empoderar jovens brasileiros a tomarem decisões financeiras conscientes, reduzindo a barreira de entrada para uma vida financeira saudável.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="security-card fade-up" style="transition-delay: 0.08s;">
              <div class="icon-box gradient-primary shadow-glow">
                <i data-lucide="rocket" class="icon-md"></i>
              </div>
              <h3 class="security-card-title">Visão</h3>
              <p class="security-card-desc">Ser a plataforma de gestão financeira mais amada pelos jovens do Brasil até 2030, com mais de 5 milhões de usuários ativos.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <div class="security-card fade-up" style="transition-delay: 0.16s;">
              <div class="icon-box gradient-primary shadow-glow">
                <i data-lucide="shield-check" class="icon-md"></i>
              </div>
              <h3 class="security-card-title">Valores</h3>
              <p class="security-card-desc">Transparência, simplicidade e segurança em primeiro lugar. Acreditamos que tecnologia boa é tecnologia que qualquer um consegue usar.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-5 pt-5 border-top border-secondary border-opacity-25">
        <div class="section-header text-center fade-up">
          <span class="section-label">Nosso Time</span>
          <h2 class="section-title">Conheça as pessoas por trás do app.</h2>
        </div>
        
        <div class="row g-4 mt-4">
          <div class="col-lg-4 col-md-6">
            <div class="security-card text-center fade-up">
              <img src="https://ui-avatars.com/api/?name=Lucas+Silva&background=5e78ff&color=fff&size=128" alt="Lucas Silva" class="rounded-circle mb-3 mx-auto" style="width: 80px; height: 80px; object-fit: cover;">
              <h3 class="security-card-title mt-0">Lucas Silva</h3>
              <p class="security-card-desc mb-0">Fundador & CEO. Desenvolvedor Full Stack apaixonado por finanças e novas tecnologias.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="security-card text-center fade-up" style="transition-delay: 0.08s;">
              <img src="https://ui-avatars.com/api/?name=Mariana+Costa&background=1bb2f4&color=fff&size=128" alt="Mariana Costa" class="rounded-circle mb-3 mx-auto" style="width: 80px; height: 80px; object-fit: cover;">
              <h3 class="security-card-title mt-0">Mariana Costa</h3>
              <p class="security-card-desc mb-0">Co-fundadora & CTO. Especialista em segurança de dados e infraestrutura em nuvem.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <div class="security-card text-center fade-up" style="transition-delay: 0.16s;">
              <img src="https://ui-avatars.com/api/?name=Thiago+Mendes&background=0b5ed7&color=fff&size=128" alt="Thiago Mendes" class="rounded-circle mb-3 mx-auto" style="width: 80px; height: 80px; object-fit: cover;">
              <h3 class="security-card-title mt-0">Thiago Mendes</h3>
              <p class="security-card-desc mb-0">Designer de Produto. Responsável por deixar a experiência do usuário simples e bonita.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid row g-4">
        <div class="col-lg-3 col-sm-6">
          <a href="index.php?controle=InicioController&metodo=inicio" class="logo-link">
            <img src="assets/logo.png" alt="Controla$EU" class="logo-img-small" />
            <span class="logo-text text-dark">Controla$EU</span>
          </a>
          <p class="footer-desc">A gestão financeira inteligente para a nova geração.</p>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h4 class="footer-title">Produto</h4>
          <ul class="footer-links">
            <li><a href="index.php?controle=InicioController&metodo=recursos">Recursos</a></li>
            <li><a href="index.php?controle=InicioController&metodo=planos">Planos</a></li>
            <li><a href="index.php?controle=InicioController&metodo=inicio">Segurança</a></li>
            <li><a href="index.php?controle=InicioController&metodo=comoFunciona">Mobile</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h4 class="footer-title">Empresa</h4>
          <ul class="footer-links">
            <li><a href="index.php?controle=InicioController&metodo=quemSomos">Sobre</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Carreiras</a></li>
            <li><a href="#">Imprensa</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h4 class="footer-title">Suporte</h4>
          <ul class="footer-links">
            <li><a href="#">Central de ajuda</a></li>
            <li><a href="index.php?controle=InicioController&metodo=contato">Contato</a></li>
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
  <script src="js/script.js"></script>
</body>
</html>

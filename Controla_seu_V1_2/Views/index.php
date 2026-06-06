<!DOCTYPE html>
<html lang="pt-BR">
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
  <link rel="stylesheet" href="css/styles.css" />

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>


  <?php
  require_once "header_login.php";
  ?>

  <main>
    <!-- Hero -->
    <section id="top" class="hero-section hero-glow">
      <div class="container hero-container row mx-auto">
        <div class="hero-content fade-up col-lg-6">
          <h1 class="hero-title">
            Sua vida financeira <span class="text-gradient">sob controle</span>, sem complicação.
          </h1>
          <p class="hero-subtitle">
            O Controla$EU ajuda jovens a organizarem receitas, despesas, orçamentos e metas em um único lugar — bonito, rápido e seguro.
          </p>
          <div class="hero-buttons">
            <a href="index.php?controle=AuthController&metodo=cadastro" class="btn btn-primary btn-lg shadow-glow">
              Criar conta grátis <i data-lucide="arrow-right" class="icon-sm"></i>
            </a>
            <a href="index.php?controle=InicioController&metodo=comoFunciona" class="btn btn-outline btn-lg">
              Ver como funciona
            </a>
          </div>
          <div class="hero-features mt-4">
            <div class="hero-feature-item"><i data-lucide="shield-check" class="icon-sm color-success"></i> 2FA + criptografia</div>
            <div class="hero-feature-item"><i data-lucide="check" class="icon-sm color-success"></i> 7 dias grátis</div>
          </div>
        </div>

        <div class="hero-image-wrapper fade-in col-lg-6 mt-5 mt-lg-0">
          <div class="hero-image-glow"></div>
          <div class="hero-image-container">
            <img src="assets/hero-user.jpg" alt="Jovem usando o app Controla$EU" class="hero-image" />
          </div>

          <!-- Floating cards -->
          <div class="floating-card card-left float-card-1 d-none d-md-block">
            <div class="floating-card-header">
              <span>Saldo do mês</span>
              <i data-lucide="trending-up" class="icon-sm color-success"></i>
            </div>
            <div class="floating-card-amount">R$ 1.325,90</div>
            <div class="floating-card-trend">+10% vs mês passado</div>
          </div>

          <div class="floating-card card-right float-card-2 d-none d-md-block">
            <div class="floating-card-header-icon">
              <div class="icon-box-small gradient-primary">
                <i data-lucide="target" class="icon-sm"></i>
              </div>
              <div class="floating-card-meta">
                <div class="meta-title">Meta Viagem</div>
                <div class="meta-subtitle">R$ 4.200 / R$ 6.000</div>
              </div>
            </div>
            <div class="progress-bar-bg">
              <div class="progress-bar-fill w-70 gradient-sky"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- LogoStrip -->
    <div class="logo-strip">
      <div class="container strip-container">
        <span class="strip-item">Fácil de Usar</span>
        <span class="strip-item">Dados criptografados</span>
        <span class="strip-item">Suporte 24/7</span>
      </div>
    </div>

    <!-- Features -->
    <section id="recursos" class="section-padding">
      <div class="container">
        <div class="section-header fade-up text-center text-lg-start">
          <span class="section-label">Recursos</span>
          <h2 class="section-title">Tudo que você precisa para dominar o seu dinheiro.</h2>
          <p class="section-subtitle mx-auto mx-lg-0">Ferramentas pensadas para quem está começando a vida financeira — sem jargão, sem planilha.</p>
        </div>

          <div class="row g-4 mt-4">
            <div class="col-md-6 col-lg-4">
              <div class="feature-card fade-up">
                <div class="icon-box gradient-primary shadow-glow">
                  <i data-lucide="wallet" class="icon-md"></i>
                </div>
                <h3 class="card-title">Receitas & Despesas</h3>
                <p class="card-desc">Registre tudo em segundos com categorias personalizadas e relatórios automáticos.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="feature-card fade-up" style="transition-delay: 0.05s;">
                <div class="icon-box gradient-primary shadow-glow">
                  <i data-lucide="pie-chart" class="icon-md"></i>
                </div>
                <h3 class="card-title">Orçamento mensal</h3>
                <p class="card-desc">Defina seu limite por categoria e veja como você gasta seu dinheiro.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="feature-card fade-up" style="transition-delay: 0.10s;">
                <div class="icon-box gradient-primary shadow-glow">
                  <i data-lucide="target" class="icon-md"></i>
                </div>
                <h3 class="card-title">Metas inteligentes</h3>
                <p class="card-desc">Crie metas de economia ou investimento e acompanhe o progresso em tempo real.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="feature-card fade-up" style="transition-delay: 0.15s;">
                <div class="icon-box gradient-primary shadow-glow">
                  <i data-lucide="bell" class="icon-md"></i>
                </div>
                <h3 class="card-title">Notificações úteis</h3>
                <p class="card-desc">Avisos de contas a pagar, metas atingidas e orçamento estourado.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="feature-card fade-up" style="transition-delay: 0.20s;">
                <div class="icon-box gradient-primary shadow-glow">
                  <i data-lucide="line-chart" class="icon-md"></i>
                </div>
                <h3 class="card-title">Saldo por período</h3>
                <p class="card-desc">Veja seu saldo positivo ou negativo em qualquer intervalo de datas.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="feature-card fade-up" style="transition-delay: 0.25s;">
                <div class="icon-box gradient-primary shadow-glow">
                  <i data-lucide="shield-check" class="icon-md"></i>
                </div>
                <h3 class="card-title">Segurança 2FA</h3>
                <p class="card-desc">Autenticação de dois fatores e criptografia ponta a ponta dos seus dados.</p>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- Security -->
    <section class="security-section section-padding">
      <div class="container row mx-auto align-items-center g-5">
        <div class="fade-up col-lg-5 text-center text-lg-start">
          <span class="section-label color-sky">Segurança</span>
          <h2 class="section-title">Seu dinheiro <span class="text-gradient">blindado</span> dos dois lados.</h2>
          <p class="section-subtitle security-subtitle mx-auto mx-lg-0">
            Construímos o Controla$EU com os mesmos padrões de segurança usados por bancos digitais. Sua privacidade vem primeiro.
          </p>
        </div>
        <div class="col-lg-7">
          <div class="row g-4">
            <div class="col-md-6">
              <div class="security-card fade-up">
                <div class="icon-box-small gradient-sky">
                  <i data-lucide="lock" class="icon-sm text-white"></i>
                </div>
                <h3 class="security-card-title">Criptografia ponta a ponta</h3>
                <p class="security-card-desc">Seus dados protegidos em trânsito e em repouso.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="security-card fade-up" style="transition-delay: 0.07s;">
                <div class="icon-box-small gradient-sky">
                  <i data-lucide="shield-check" class="icon-sm text-white"></i>
                </div>
                <h3 class="security-card-title">Autenticação 2FA</h3>
                <p class="security-card-desc">Login e transações com dupla verificação obrigatória.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="security-card fade-up" style="transition-delay: 0.14s;">
                <div class="icon-box-small gradient-sky">
                  <i data-lucide="credit-card" class="icon-sm text-white"></i>
                </div>
                <h3 class="security-card-title">Pagamentos seguros</h3>
                <p class="security-card-desc">Gateway com idempotência e confirmação automática.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="security-card fade-up" style="transition-delay: 0.21s;">
                <div class="icon-box-small gradient-sky">
                  <i data-lucide="smartphone" class="icon-sm text-white"></i>
                </div>
                <h3 class="security-card-title">Multiplataforma</h3>
                <p class="security-card-desc">Funciona no Chrome, Firefox, Edge e no seu celular.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="section-padding">
      <div class="container container-sm">
        <div class="section-header text-center fade-up">
          <span class="section-label">Dúvidas frequentes</span>
          <h2 class="section-title">Tudo que você precisa saber.</h2>
        </div>
        <div class="faq-list mt-5">
          <details class="faq-item fade-up">
            <summary class="faq-summary">
              Como começo?
              <span class="faq-icon">+</span>
            </summary>
            <p class="faq-desc">Ao criar uma conta no nosso site, serão disponibilizados 7 dias grátis para que você comece a manusear suas finanças.</p>
          </details>
          <details class="faq-item fade-up" style="transition-delay: 0.05s;">
            <summary class="faq-summary">
              Meus dados bancários estão seguros?
              <span class="faq-icon">+</span>
            </summary>
            <p class="faq-desc">Utilizamos criptografia ponta a ponta e autenticação de dois fatores. Nunca compartilharemos seus dados com terceiros ou pediremos sua senha.</p>
          </details>
          <details class="faq-item fade-up" style="transition-delay: 0.10s;">
            <summary class="faq-summary">
              Posso usar como MEI ou pessoa jurídica?
              <span class="faq-icon">+</span>
            </summary>
            <p class="faq-desc">Sim. O plano Pro foi pensado para freelancers, MEIs e pequenas empresas com necessidades de gestão financeira.</p>
          </details>
          <details class="faq-item fade-up" style="transition-delay: 0.15s;">
            <summary class="faq-summary">
              Posso cancelar minha assinatura quando quiser?
              <span class="faq-icon">+</span>
            </summary>
            <p class="faq-desc">Sim! Você pode cancelar sua assinatura a qualquer momento.</p>
          </details>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section id="cadastro-cta" class="section-padding pt-0">
      <div class="container container-md">
        <div class="cta-box gradient-primary shadow-glow fade-up">
          <div class="cta-glow-overlay"></div>
          <div class="cta-content">
            <h2 class="cta-title text-white">Pronto pra colocar sua vida financeira nos eixos?</h2>
            <p class="cta-subtitle text-white-80">Cadastre-se agora e ganhe 30 dias de plano Plus gratuito.</p>
            <a href="index.php?controle=AuthController&metodo=cadastro" class="btn btn-white btn-lg mt-4">
              Criar conta grátis <i data-lucide="arrow-right" class="icon-sm"></i>
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
            <a href="index.php?controle=InicioController&metodo=inicio" class="logo-link">
            <img src="assets/logo.png" alt="Controla$EU" class="logo-img-small" />
            <span class="logo-text text-dark">Controla$EU</span>
          </a>
          <p class="footer-desc">A gestão financeira inteligente para a nova geração.</p>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h4 class="footer-title">Produto</h4>
          <ul class="footer-links">
            <li><a href="#recursos">Recursos</a></li>
            <li><a href="index.php?controle=InicioController&metodo=planos">Planos</a></li>
            <li><a href="#faq">Segurança</a></li>
            <li><a href="index.php?controle=InicioController&metodo=comoFunciona">Mobile</a></li>
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

document.addEventListener('DOMContentLoaded', () => {
  // Inicializar ícones do Lucide
  lucide.createIcons();

  // Configurar Intersection Observer para animações de fade up/in
  const observerOptions = {
    root: null,
    rootMargin: '-80px 0px',
    threshold: 0
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target); // Anima apenas uma vez
      }
    });
  }, observerOptions);

  // Observar todos os elementos com fade-up ou fade-in
  const animatedElements = document.querySelectorAll('.fade-up, .fade-in');
  animatedElements.forEach(el => observer.observe(el));
});

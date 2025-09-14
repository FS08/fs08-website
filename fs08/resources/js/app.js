import './bootstrap';

// Simple mobile menu toggle
document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('menuToggle');
  const panel = document.getElementById('mobileMenu');
  if (btn && panel) {
    btn.addEventListener('click', () => {
      const isHidden = panel.classList.contains('hidden');
      panel.classList.toggle('hidden', !isHidden);
      btn.setAttribute('aria-expanded', String(isHidden));
    });
  }

  // (hover preview removed by request)
});

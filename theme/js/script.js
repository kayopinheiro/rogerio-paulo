/**
 * script.js — Rogério Paulo | Psicoterapia & Psicanálise
 * Navbar scroll, menu mobile, FAQ accordion, WhatsApp flutuante.
 */

(function () {
  'use strict';

  /* ==========================================================
     NAVBAR — SCROLL (transparent → scrolled)
  ========================================================== */
  const header = document.querySelector('.site-header');

  function handleNavbarScroll() {
    if (!header) return;
    if (window.scrollY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }

  if (header) {
    window.addEventListener('scroll', handleNavbarScroll, { passive: true });
    handleNavbarScroll(); // aplica estado inicial
  }


  /* ==========================================================
     NAVBAR — NAV LINK ATIVO (destaca a página atual)
  ========================================================== */
  const navLinks = document.querySelectorAll('.site-nav a, .site-nav-mobile a:not(.btn-primary)');
  const currentPath = window.location.pathname.replace(/\/$/, '') || '/';

  navLinks.forEach(function (link) {
    const href = link.getAttribute('href');
    if (!href) return;
    const linkPath = href.replace(/\/$/, '') || '/';
    if (linkPath === currentPath) {
      link.classList.add('active');
      link.setAttribute('aria-current', 'page');
    }
  });


  /* ==========================================================
     MENU MOBILE — HAMBURGER TOGGLE
  ========================================================== */
  const hamburger  = document.querySelector('.hamburger');
  const mobileMenu = document.querySelector('.site-nav-mobile');

  function openMenu() {
    mobileMenu.classList.add('open');
    hamburger.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    mobileMenu.classList.remove('open');
    hamburger.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function () {
      const isOpen = mobileMenu.classList.contains('open');
      isOpen ? closeMenu() : openMenu();
    });

    // Fecha ao clicar em qualquer link do menu mobile
    mobileMenu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', closeMenu);
    });

    // Fecha ao pressionar Escape
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
        closeMenu();
        hamburger.focus();
      }
    });

    // Fecha ao clicar fora do menu
    document.addEventListener('click', function (e) {
      if (
        mobileMenu.classList.contains('open') &&
        !mobileMenu.contains(e.target) &&
        !hamburger.contains(e.target)
      ) {
        closeMenu();
      }
    });
  }


  /* ==========================================================
     FAQ — ACCORDION
  ========================================================== */
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(function (item) {
    const btn    = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');

    if (!btn || !answer) return;

    // Atributos de acessibilidade
    const answerId    = 'faq-answer-' + Math.random().toString(36).slice(2, 7);
    const questionId  = 'faq-question-' + Math.random().toString(36).slice(2, 7);

    btn.setAttribute('id', questionId);
    btn.setAttribute('aria-controls', answerId);
    btn.setAttribute('aria-expanded', 'false');

    answer.setAttribute('id', answerId);
    answer.setAttribute('role', 'region');
    answer.setAttribute('aria-labelledby', questionId);

    btn.addEventListener('click', function () {
      const isOpen = item.classList.contains('open');

      // Fecha todos os outros itens
      faqItems.forEach(function (other) {
        if (other !== item && other.classList.contains('open')) {
          other.classList.remove('open');
          other.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
        }
      });

      // Alterna o item clicado
      if (isOpen) {
        item.classList.remove('open');
        btn.setAttribute('aria-expanded', 'false');
      } else {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
      }
    });

    // Navegação por teclado: setas cima/baixo entre itens
    btn.addEventListener('keydown', function (e) {
      const allBtns = Array.from(document.querySelectorAll('.faq-question'));
      const idx     = allBtns.indexOf(btn);

      if (e.key === 'ArrowDown') {
        e.preventDefault();
        const next = allBtns[idx + 1];
        if (next) next.focus();
      }

      if (e.key === 'ArrowUp') {
        e.preventDefault();
        const prev = allBtns[idx - 1];
        if (prev) prev.focus();
      }
    });
  });


  /* ==========================================================
     WHATSAPP FLUTUANTE — LINK DINÂMICO
  ========================================================== */
  const whatsappPhone   = '5511915713774';
  const whatsappMessage = encodeURIComponent('Olá, Rogério! Gostaria de agendar uma sessão.');
  const whatsappUrl     = 'https://wa.me/' + whatsappPhone + '?text=' + whatsappMessage;

  const whatsappBtn = document.querySelector('.whatsapp-float');

  if (whatsappBtn) {
    whatsappBtn.setAttribute('href', whatsappUrl);
    whatsappBtn.setAttribute('target', '_blank');
    whatsappBtn.setAttribute('rel', 'noopener noreferrer');
    whatsappBtn.setAttribute('aria-label', 'Conversar pelo WhatsApp');
  }


  /* ==========================================================
     BLOG — CARREGAR MAIS POSTS (AJAX)
  ========================================================== */
  const loadMoreBtn = document.querySelector('.blog-load-more');

  if (loadMoreBtn && typeof rpAjax !== 'undefined') {
    const grid = document.querySelector('.grid-3col');

    loadMoreBtn.addEventListener('click', function () {
      const btn       = this;
      const page      = parseInt(btn.dataset.page, 10) + 1;
      const max       = parseInt(btn.dataset.max, 10);
      const categoria = btn.dataset.categoria || '';

      btn.disabled    = true;
      btn.textContent = 'Carregando…';

      const formData = new FormData();
      formData.append('action',    'load_more_posts');
      formData.append('nonce',     rpAjax.nonce);
      formData.append('page',      page);
      formData.append('categoria', categoria);

      fetch(rpAjax.url, { method: 'POST', body: formData })
        .then(function (res) { return res.json(); })
        .then(function (data) {
          if (data.success && data.data.html) {
            // Injeta os novos cards no grid
            const temp = document.createElement('div');
            temp.innerHTML = data.data.html;
            const newCards = temp.querySelectorAll('.card-post');

            newCards.forEach(function (card) {
              // Aplica fade-in nos novos cards
              card.classList.add('fade-in');
              grid.appendChild(card);
              requestAnimationFrame(function () {
                card.classList.add('is-visible');
              });
            });

            btn.dataset.page = page;

            if (!data.data.has_more) {
              // Sem mais posts: esconde o botão
              btn.closest('.blog-load-more-wrap').style.display = 'none';
            } else {
              btn.disabled    = false;
              btn.textContent = 'Carregar mais';
            }
          } else {
            btn.closest('.blog-load-more-wrap').style.display = 'none';
          }
        })
        .catch(function () {
          btn.disabled    = false;
          btn.textContent = 'Carregar mais';
        });
    });
  }


  /* ==========================================================
     SCROLL SUAVE — ÂNCORAS INTERNAS (#)
  ========================================================== */
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      const targetId = anchor.getAttribute('href');
      if (targetId === '#') return;

      const target = document.querySelector(targetId);
      if (!target) return;

      e.preventDefault();

      const navbarHeight = header ? header.offsetHeight : 0;
      const targetTop    = target.getBoundingClientRect().top + window.scrollY - navbarHeight - 24;

      window.scrollTo({ top: targetTop, behavior: 'smooth' });
    });
  });


  /* ==========================================================
     ANIMAÇÃO DE ENTRADA — SEÇÕES (IntersectionObserver)
  ========================================================== */
  if ('IntersectionObserver' in window) {
    const fadeEls = document.querySelectorAll(
      '.card-service, .card-post, .card-publication, .section-header, .grid-2col'
    );

    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );

    fadeEls.forEach(function (el) {
      el.classList.add('fade-in');
      observer.observe(el);
    });
  }

})();

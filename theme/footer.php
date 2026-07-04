<!-- ============================================================
     FOOTER
============================================================ -->
<footer class="site-footer" aria-label="Rodapé">
  <div class="container">

    <div class="site-footer-grid">

      <!-- Coluna 1 — Brand -->
      <div class="footer-brand">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Rogério Paulo — Página inicial">
          <img
            src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/logo-horizontal-footer.svg' ); ?>"
            alt="Rogério Paulo"
            width="160"
            height="40"
            loading="lazy"
            decoding="async"
          >
        </a>
        <p>Psicólogo e Psicanalista. Especialista em saúde do homem e psicanálise winnicottiana. Atendimento online para todo o Brasil.</p>
      </div>

      <!-- Coluna 2 — Navegação -->
      <div class="footer-col">
        <p class="footer-col-title">Navegação</p>
        <ul class="footer-nav-list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Boas-vindas</a></li>
          <li><a href="<?php echo esc_url( home_url( '/quem-sou' ) ); ?>">Quem Sou</a></li>
          <li><a href="<?php echo esc_url( home_url( '/o-que-faco' ) ); ?>">O Que Faço</a></li>
          <li><a href="<?php echo esc_url( home_url( '/publicacoes' ) ); ?>">Publicações</a></li>
          <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
        </ul>
      </div>

      <!-- Coluna 3 — Contato -->
      <div class="footer-col">
        <p class="footer-col-title">Contato</p>
        <ul class="footer-contact-list">
          <li>
            <a href="https://wa.me/5511915713774" target="_blank" rel="noopener noreferrer">
              11 91571 3774
            </a>
          </li>
          <li>
            <a href="mailto:rogeriopaulopsi@gmail.com">
              rogeriopaulopsi@gmail.com
            </a>
          </li>
          <li>Av. Paulista 1106, sala 01<br>Bela Vista, São Paulo-SP<br>CEP 01310-914</li>
        </ul>
      </div>

    </div>

    <!-- Bottom bar -->
    <div class="site-footer-bottom">
      <small>© 2026 ANTONIO ROGERIO PAULO DE SOUSA LTDA — CNPJ 57.986.734/0001-09</small>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

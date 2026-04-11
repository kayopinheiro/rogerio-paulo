<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ============================================================
     HEADER / NAVBAR
============================================================ -->
<header class="site-header" id="site-header">
  <div class="container">

    <!-- Logo -->
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="Rogério Paulo — Página inicial">
      <img
        src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/horizontal-branco.svg' ); ?>"
        alt="Rogério Paulo"
        width="240"
        height="44"
        loading="eager"
        decoding="async"
      >
    </a>

    <!-- Nav Desktop -->
    <nav aria-label="Navegação principal">
      <ul class="site-nav">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Boas-vindas</a></li>
        <li><a href="<?php echo esc_url( home_url( '/quem-sou' ) ); ?>">Quem Sou</a></li>
        <li><a href="<?php echo esc_url( home_url( '/o-que-faco' ) ); ?>">O Que Faço</a></li>
        <li><a href="<?php echo esc_url( home_url( '/publicacoes' ) ); ?>">Publicações</a></li>
        <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
      </ul>
    </nav>

    <!-- CTA Desktop -->
    <div class="site-header-cta">
      <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Gostaria de agendar uma sessão.' ); ?>"
         class="btn-primary btn-sm"
         target="_blank"
         rel="noopener noreferrer">
        Agendar sessão
      </a>
    </div>

    <!-- Hamburger Mobile -->
    <button
      class="hamburger"
      aria-label="Abrir menu"
      aria-expanded="false"
      aria-controls="site-nav-mobile"
      type="button"
    >
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
    </button>

  </div>
</header>

<!-- Menu Mobile -->
<nav id="site-nav-mobile" class="site-nav-mobile" aria-label="Navegação mobile">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Boas-vindas</a>
  <a href="<?php echo esc_url( home_url( '/quem-sou' ) ); ?>">Quem Sou</a>
  <a href="<?php echo esc_url( home_url( '/o-que-faco' ) ); ?>">O Que Faço</a>
  <a href="<?php echo esc_url( home_url( '/publicacoes' ) ); ?>">Publicações</a>
  <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a>
  <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Gostaria de agendar uma sessão.' ); ?>"
     class="btn-primary"
     target="_blank"
     rel="noopener noreferrer">
    Agendar sessão
  </a>
</nav>

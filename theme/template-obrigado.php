<?php
/**
 * Template Name: Obrigado
 *
 * Página de confirmação pós-agendamento — Rogério Paulo | Psicoterapia & Psicanálise
 * robots: noindex, nofollow — configurar no Yoast SEO
 *
 * @package rogerio-paulo
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<!-- ============================================================
     SEÇÃO 1 — CONFIRMAÇÃO
     Bloco: full-width centralizado | fundo --color-bg-section
============================================================ -->
<section
  class="section section--alt obrigado-section"
  aria-labelledby="sec-obrigado-titulo"
  style="min-height: calc(100svh - 72px); display: flex; align-items: center;"
>
  <div class="container">
    <div class="obrigado-inner">

      <!-- Ícone decorativo -->
      <div class="obrigado-icon" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
          <polyline points="22 4 12 14.01 9 11.01"/>
        </svg>
      </div>

      <h1 id="sec-obrigado-titulo">Mensagem recebida.</h1>

      <p>
        Obrigado por dar esse passo. Em breve entro em contato para conversarmos e agendarmos sua sessão inicial.
      </p>

      <p>
        Enquanto isso, fique à vontade para conhecer um pouco mais sobre minha abordagem e minha trajetória.
      </p>

      <div class="btn-group obrigado-actions">
        <a href="<?php echo esc_url( home_url( '/o-que-faco' ) ); ?>" class="btn-secondary">
          Conhecer o trabalho →
        </a>
        <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn-link">
          Ler o blog →
        </a>
      </div>

    </div>
  </div>
</section>


<!-- WhatsApp flutuante -->
<a class="whatsapp-float" href="#" aria-label="Conversar pelo WhatsApp">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
  </svg>
</a>

<?php get_footer(); ?>

<?php
/**
 * Template Name: Publicações
 *
 * Página Publicações — Rogério Paulo | Psicoterapia & Psicanálise
 *
 * @package rogerio-paulo
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<!-- ============================================================
     SEÇÃO 1 — HERO
     Fundo: --color-bg-footer
============================================================ -->
<section class="page-hero" aria-label="Publicações de Rogério Paulo">
  <div class="container">

    <span class="overline" style="color: var(--color-primary-mid);">Produção acadêmica</span>
    <h1>Pesquisa, escrita e reflexão.</h1>
    <p class="lead">
      Além da clínica, Rogério é pesquisador e autor de capítulos em obras coletivas sobre psicanálise winnicottiana, saúde do homem e amadurecimento emocional.
    </p>

  </div>
</section>


<!-- ============================================================
     SEÇÃO 2 — GRID DE PUBLICAÇÕES
     Bloco: 1 coluna | capa esquerda + texto direita | loop CPT publicacoes
============================================================ -->
<section class="section section--white" aria-labelledby="sec-publicacoes-lista-titulo">
  <div class="container">

    <div class="section-header">
      <span class="overline">Capítulos</span>
      <h2 id="sec-publicacoes-lista-titulo">Publicações</h2>
    </div>

    <div style="margin-top: var(--space-12);">

      <?php if ( false ) : ?>
        <!-- CPT loop reservado para quando as publicações forem cadastradas via admin -->
      <?php else : ?>

        <!-- Fallback estático — 5 publicações cadastradas no SPEC -->
        <?php
        $base_pub = get_stylesheet_directory_uri() . '/assets/';
        $publicacoes_estaticas = [
            [
                'img'      => $base_pub . 'pub-1.avif',
                'alt'      => 'Capa — Winnicott Seminários Mineiros: Ambiente e Holding',
                'ref'      => 'IN Mediadora, 2021.',
                'titulo'   => 'Winnicott Seminários Mineiros: Ambiente e Holding',
                'desc'     => 'Obra coletiva que reúne seminários sobre a teoria winnicottiana do ambiente e holding — conceitos centrais para a compreensão do amadurecimento emocional.',
                'download' => '',
                'compra'   => 'https://inmeditora.com.br/produto/winnicott-seminarios-mineiros/',
            ],
            [
                'img'      => $base_pub . 'pub-2.avif',
                'alt'      => 'Capa — A Clínica Social: Percurso e Perspectivas',
                'ref'      => 'Instituto de Psicologia da Universidade de São Paulo — Projeto APOIAR, 2022.',
                'titulo'   => 'A Clínica Social: Percurso e Perspectivas',
                'desc'     => 'Obra coletiva sobre a clínica social winnicottiana e o atendimento psicológico em contextos de vulnerabilidade, reunindo pesquisas do Projeto APOIAR Online.',
                'download' => 'https://www.rogeriopaulopsi.com.br/_files/ugd/4ada22_eaf9f450d4024047a4018cd35e1ae952.pdf',
                'compra'   => '',
            ],
            [
                'img'      => $base_pub . 'pub-3.avif',
                'alt'      => 'Capa — Adolescência: Desafios, Sofrimento e Esperança',
                'ref'      => 'Instituto de Psicologia da Universidade de São Paulo, 2021.',
                'titulo'   => 'Adolescência: Desafios, Sofrimento e Esperança',
                'desc'     => 'As transformações contemporâneas têm provocado mudanças significativas nos modos de ser e exercer a função adolescente na atualidade, à luz da teoria winnicottiana.',
                'download' => 'https://www.rogeriopaulopsi.com.br/_files/ugd/4ada22_55a8b9b82e04425a93769f258e3e69bc.pdf',
                'compra'   => '',
            ],
            [
                'img'      => $base_pub . 'pub-4.avif',
                'alt'      => 'Capa — O Gesto Espontâneo em 90 Trabalhos',
                'ref'      => 'Expressão Gráfica e Editora, 2019.',
                'titulo'   => 'O Gesto Espontâneo em 90 Trabalhos',
                'desc'     => 'Coletânea que reúne 90 trabalhos orientados pelo olhar winnicottiano sobre o gesto espontâneo, a criatividade e o verdadeiro self na clínica psicanalítica contemporânea.',
                'download' => '',
                'compra'   => 'https://www.amazon.com.br/Gesto-Espont%C3%A2neo-Em-90-Trabalhos/dp/8542014820',
            ],
        ];
        ?>

        <?php foreach ( $publicacoes_estaticas as $pub ) : ?>
          <article class="card-publication">
            <img
              src="<?php echo esc_url( $pub['img'] ); ?>"
              alt="<?php echo esc_attr( $pub['alt'] ); ?>"
              class="card-publication-cover"
              loading="lazy"
            >
            <div class="card-publication-body">
              <p class="card-publication-ref"><?php echo esc_html( $pub['ref'] ); ?></p>
              <h3><?php echo esc_html( $pub['titulo'] ); ?></h3>
              <p><?php echo esc_html( $pub['desc'] ); ?></p>
              <div class="card-publication-actions">
                <?php if ( $pub['download'] ) : ?>
                  <a href="<?php echo esc_url( $pub['download'] ); ?>"
                     class="btn-primary btn-sm"
                     target="_blank"
                     rel="noopener noreferrer">
                    Baixar
                  </a>
                <?php endif; ?>
                <?php if ( $pub['compra'] ) : ?>
                  <a href="<?php echo esc_url( $pub['compra'] ); ?>"
                     class="btn-secondary btn-sm"
                     target="_blank"
                     rel="noopener noreferrer">
                    Comprar
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </article>
        <?php endforeach; ?>

      <?php endif; ?>

    </div>

  </div>
</section>


<!-- ============================================================
     SEÇÃO 3 — CTA
     Fundo: --color-bg-footer
============================================================ -->
<section class="section-cta" aria-labelledby="sec-cta-publicacoes-titulo">
  <div class="container">

    <h2 id="sec-cta-publicacoes-titulo">Quer conhecer mais sobre a abordagem winnicottiana?</h2>

    <p>
      Conheça os grupos de estudo e aprofunde-se nos fundamentos teóricos que guiam o trabalho clínico de Rogério Paulo.
    </p>

    <a href="<?php echo esc_url( home_url( '/o-que-faco#grupo-estudos' ) ); ?>" class="btn-primary btn-lg">
      Conhecer o Grupo de Estudos →
    </a>

  </div>
</section>


<!-- WhatsApp flutuante -->
<a class="whatsapp-float" href="#" aria-label="Conversar pelo WhatsApp">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
  </svg>
</a>

<?php get_footer(); ?>

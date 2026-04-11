<?php
/**
 * Template Name: Home
 *
 * Página inicial — Rogério Paulo | Psicoterapia & Psicanálise
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
     Referência: screenshot/Mindwise Psychology Template Preview.png
============================================================ -->
<section class="hero" aria-label="Apresentação principal">

  <div
    class="hero-bg"
    style="background-image: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/bg_hero.png' ); ?>');"
    role="img"
    aria-label="Rogério Paulo, psicólogo e psicanalista"
  ></div>

  <div class="hero-overlay" aria-hidden="true"></div>

  <div class="container">
    <div class="hero-content">

      <span class="overline" style="color: var(--color-primary-mid);">Psicoterapia & Psicanálise</span>
      <h1>Você chegou até aqui por algum <span style="color: var(--color-primary-mid); font-weight: var(--fw-medium); font-style: italic;">motivo.</span></h1>

      <p class="lead">
        Algo dentro de você pede escuta. Este é um espaço seguro para cuidar de si de forma autêntica, profunda e real.
      </p>

      <div class="btn-group">
        <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Gostaria de agendar uma sessão.' ); ?>"
           class="btn-primary"
           target="_blank"
           rel="noopener noreferrer">
          Agendar minha sessão →
        </a>
        <a href="<?php echo esc_url( home_url( '/quem-sou' ) ); ?>" class="btn-ghost">
          Quero saber mais sobre o Rogério
        </a>
      </div>

    </div>
  </div>

</section>


<!-- ============================================================
     SEÇÃO 2 — APRESENTAÇÃO RÁPIDA
     Referência: screenshot/Mindwise Psychology Counseling Template Preview (1).png — about
============================================================ -->
<section class="section section--white" aria-labelledby="sec-apresentacao-titulo">
  <div class="container">
    <div class="grid-2col grid-2col--img-left">

      <div class="col-img">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/foto-rogerio-psicologo.jpg' ); ?>"
          alt="Rogério Paulo — psicólogo e psicanalista"
          width="580"
          height="520"
          loading="lazy"
        >
      </div>

      <div class="col-text">
        <span class="overline">Sobre mim</span>
        <h2 id="sec-apresentacao-titulo">Olá, sou Rogério Paulo.</h2>

        <p>
          Sou cearense, 40+, psicólogo e psicanalista com mais de 10 anos de experiência. Trabalho com homens e mulheres adultos online, com foco na psicanálise winnicottiana — uma abordagem que valoriza o amadurecimento emocional e a escuta profunda do ser humano.
        </p>
        <p>
          Minha prática parte de um lugar simples: acredito que você só consegue se cuidar de verdade na relação com alguém de forma autêntica. Na sessão inicial, você será recebido com cuidado e presença.
        </p>

        <a href="<?php echo esc_url( home_url( '/quem-sou' ) ); ?>" class="btn-link">
          Conheça minha trajetória →
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     SEÇÃO 3 — SERVIÇOS (3 cards)
     Referência: screenshot/Mindwise Psychology Counseling Template Preview (1).png — services
============================================================ -->
<section class="section section--alt" aria-labelledby="sec-servicos-titulo">
  <div class="container">

    <div class="section-header section-header--center">
      <span class="overline">O que faço</span>
      <h2 id="sec-servicos-titulo">Por onde você quer começar?</h2>
    </div>

    <div class="grid-3col" style="margin-top: var(--space-12);">

      <!-- Card 1 -->
      <article class="card-service">
        <div class="card-service-icon" aria-hidden="true">🧠</div>
        <h3>Terapia e Análise Online</h3>
        <p>Sessões individuais com escuta ativa, diagnóstico e acompanhamento psicanalítico. Um espaço só seu.</p>
        <a href="<?php echo esc_url( home_url( '/o-que-faco#terapia' ) ); ?>" class="btn-link">
          Saiba mais →
        </a>
      </article>

      <!-- Card 2 -->
      <article class="card-service">
        <div class="card-service-icon" aria-hidden="true">🤝</div>
        <h3>Grupo Terapêutico para Homens</h3>
        <p>Um espaço seguro para refletir sobre masculinidade, emoções, paternidade e relações. Gratuito e com vagas limitadas.</p>
        <a href="<?php echo esc_url( home_url( '/o-que-faco#grupo-homens' ) ); ?>" class="btn-link">
          Saiba mais →
        </a>
      </article>

      <!-- Card 3 -->
      <article class="card-service">
        <div class="card-service-icon" aria-hidden="true">📖</div>
        <h3>Grupo de Estudos Winnicottiano</h3>
        <p>Para profissionais e estudantes da saúde. Discussões sobre psicanálise winnicottiana e amadurecimento pessoal.</p>
        <a href="<?php echo esc_url( home_url( '/o-que-faco#grupo-estudos' ) ); ?>" class="btn-link">
          Saiba mais →
        </a>
      </article>

    </div>
  </div>
</section>


<!-- ============================================================
     SEÇÃO 4 — CITAÇÃO WINNICOTT
============================================================ -->
<section class="section-quote" aria-label="Citação de Donald Winnicott">
  <div class="container">

    <blockquote>
      "A vida de um indivíduo saudável é caracterizada tanto por medos, sentimentos conflituosos, dúvidas e frustrações como por características positivas."
      <cite>Donald Winnicott</cite>
    </blockquote>

    <p>É daqui que trabalhamos — da vida real, não de uma ideia idealizada de saúde.</p>

  </div>
</section>


<!-- ============================================================
     SEÇÃO 5 — PUBLICAÇÕES EM DESTAQUE
     Referência: screenshot/Mindwise Psychology Counseling Template Preview (3).png — blog
     Loop: CPT publicacoes — limit 3
============================================================ -->
<section class="section section--white" aria-labelledby="sec-publicacoes-titulo">
  <div class="container">

    <div class="section-header">
      <span class="overline">Pesquisa</span>
      <h2 id="sec-publicacoes-titulo">Pesquisa e Reflexão</h2>
      <p>Além da clínica, Rogério é pesquisador e autor de capítulos em livros sobre psicanálise winnicottiana.</p>
    </div>

    <?php
    $publicacoes = new WP_Query( [
        'post_type'      => 'publicacoes',
        'posts_per_page' => 3,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    ] );
    ?>

    <?php if ( $publicacoes->have_posts() ) : ?>
      <div class="grid-3col" style="margin-top: var(--space-12);">
        <?php while ( $publicacoes->have_posts() ) : $publicacoes->the_post(); ?>
          <article class="card-post">

            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'medium', [
                  'class'   => 'card-post-img',
                  'loading' => 'lazy',
                  'alt'     => esc_attr( get_the_title() ),
              ] ); ?>
            <?php else : ?>
              <div class="card-post-img-placeholder" aria-hidden="true">Capa da publicação</div>
            <?php endif; ?>

            <div class="card-post-body">
              <span class="tag tag-green">Publicação</span>
              <h3><?php the_title(); ?></h3>
              <div class="btn-group" style="margin-top: auto; padding-top: var(--space-3);">
                <?php
                $link_download = get_post_meta( get_the_ID(), 'link_download', true );
                $link_compra   = get_post_meta( get_the_ID(), 'link_compra', true );
                ?>
                <?php if ( $link_download ) : ?>
                  <a href="<?php echo esc_url( $link_download ); ?>"
                     class="btn-primary btn-sm"
                     target="_blank"
                     rel="noopener noreferrer">
                    Baixar
                  </a>
                <?php endif; ?>
                <?php if ( $link_compra ) : ?>
                  <a href="<?php echo esc_url( $link_compra ); ?>"
                     class="btn-secondary btn-sm"
                     target="_blank"
                     rel="noopener noreferrer">
                    Comprar
                  </a>
                <?php endif; ?>
              </div>
            </div>

          </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    <?php else : ?>
      <!-- Fallback estático com capas reais — formato lista -->
      <?php $base_pub = get_stylesheet_directory_uri() . '/assets/'; ?>
      <div style="margin-top: var(--space-12);">

        <article class="card-publication">
          <img src="<?php echo esc_url( $base_pub . 'pub-1.avif' ); ?>"
               alt="Capa — Winnicott Seminários Mineiros: Ambiente e Holding"
               class="card-publication-cover" loading="lazy">
          <div class="card-publication-body">
            <p class="card-publication-ref">IN Mediadora, 2021.</p>
            <h3>Winnicott Seminários Mineiros: Ambiente e Holding</h3>
            <p>Obra coletiva que reúne seminários sobre a teoria winnicottiana do ambiente e holding — conceitos centrais para a compreensão do amadurecimento emocional.</p>
            <div class="card-publication-actions">
              <a href="https://inmeditora.com.br/produto/winnicott-seminarios-mineiros/"
                 class="btn-secondary btn-sm" target="_blank" rel="noopener noreferrer">Comprar</a>
            </div>
          </div>
        </article>

        <article class="card-publication">
          <img src="<?php echo esc_url( $base_pub . 'pub-2.avif' ); ?>"
               alt="Capa — A Clínica Social: Percurso e Perspectivas"
               class="card-publication-cover" loading="lazy">
          <div class="card-publication-body">
            <p class="card-publication-ref">Instituto de Psicologia da Universidade de São Paulo — Projeto APOIAR, 2022.</p>
            <h3>A Clínica Social: Percurso e Perspectivas</h3>
            <p>Obra coletiva sobre a clínica social winnicottiana e o atendimento psicológico em contextos de vulnerabilidade, reunindo pesquisas do Projeto APOIAR Online.</p>
            <div class="card-publication-actions">
              <a href="https://www.rogeriopaulopsi.com.br/_files/ugd/4ada22_eaf9f450d4024047a4018cd35e1ae952.pdf"
                 class="btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Baixar</a>
            </div>
          </div>
        </article>

        <article class="card-publication">
          <img src="<?php echo esc_url( $base_pub . 'pub-3.avif' ); ?>"
               alt="Capa — Adolescência: Desafios, Sofrimento e Esperança"
               class="card-publication-cover" loading="lazy">
          <div class="card-publication-body">
            <p class="card-publication-ref">Instituto de Psicologia da Universidade de São Paulo, 2021.</p>
            <h3>Adolescência: Desafios, Sofrimento e Esperança</h3>
            <p>As transformações contemporâneas têm provocado mudanças significativas nos modos de ser e exercer a função adolescente na atualidade, à luz da teoria winnicottiana.</p>
            <div class="card-publication-actions">
              <a href="https://www.rogeriopaulopsi.com.br/_files/ugd/4ada22_55a8b9b82e04425a93769f258e3e69bc.pdf"
                 class="btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Baixar</a>
            </div>
          </div>
        </article>

      </div>
    <?php endif; ?>

    <div style="margin-top: var(--space-10); text-align: center;">
      <a href="<?php echo esc_url( home_url( '/publicacoes' ) ); ?>" class="btn-link">
        Ver todas as publicações →
      </a>
    </div>

  </div>
</section>


<!-- ============================================================
     SEÇÃO 6 — BLOG (posts recentes)
     Loop: posts WordPress — limit 3
============================================================ -->
<section class="section section--alt" aria-labelledby="sec-blog-titulo">
  <div class="container">

    <div class="section-header">
      <span class="overline">Blog</span>
      <h2 id="sec-blog-titulo">Reflexões sobre saúde mental masculina</h2>
      <p>Textos que nascem da prática clínica e do cotidiano do homem contemporâneo.</p>
    </div>

    <?php
    $posts_recentes = new WP_Query( [
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    ] );
    ?>

    <?php if ( $posts_recentes->have_posts() ) : ?>
      <div class="grid-3col" style="margin-top: var(--space-12);">
        <?php while ( $posts_recentes->have_posts() ) : $posts_recentes->the_post(); ?>
          <article class="card-post">

            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'medium', [
                  'class'   => 'card-post-img',
                  'loading' => 'lazy',
                  'alt'     => esc_attr( get_the_title() ),
              ] ); ?>
            <?php else : ?>
              <div class="card-post-img-placeholder" aria-hidden="true">Imagem do post</div>
            <?php endif; ?>

            <div class="card-post-body">
              <?php
              $categories = get_the_category();
              if ( $categories ) :
              ?>
                <span class="tag tag-green"><?php echo esc_html( $categories[0]->name ); ?></span>
              <?php endif; ?>

              <h3>
                <a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;">
                  <?php the_title(); ?>
                </a>
              </h3>

              <p><?php echo wp_trim_words( get_the_excerpt(), 18, '…' ); ?></p>

              <a href="<?php the_permalink(); ?>" class="btn-link">
                Ler artigo →
              </a>
            </div>

          </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    <?php else : ?>
      <!-- Fallback enquanto não há posts publicados -->
      <div class="grid-3col" style="margin-top: var(--space-12);">
        <?php
        $posts_fallback = [
            [ 'cat' => 'Masculinidade', 'title' => 'Masculinidade Saudável',          'excerpt' => 'O que significa ser um homem saudável na contemporaneidade?' ],
            [ 'cat' => 'Winnicott',     'title' => 'Identidade em Winnicott',          'excerpt' => 'Como Winnicott compreende a construção do verdadeiro self.' ],
            [ 'cat' => 'Paternidade',   'title' => 'Paternidade em Winnicott',         'excerpt' => 'A figura paterna na teoria winnicottiana do amadurecimento.' ],
        ];
        foreach ( $posts_fallback as $post_fb ) :
        ?>
          <article class="card-post">
            <div class="card-post-img-placeholder" aria-hidden="true">Imagem do post</div>
            <div class="card-post-body">
              <span class="tag tag-green"><?php echo esc_html( $post_fb['cat'] ); ?></span>
              <h3><?php echo esc_html( $post_fb['title'] ); ?></h3>
              <p><?php echo esc_html( $post_fb['excerpt'] ); ?></p>
              <span class="btn-link">Ler artigo →</span>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <div style="margin-top: var(--space-10); text-align: center;">
      <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn-link">
        Ler todos os artigos →
      </a>
    </div>

  </div>
</section>


<!-- ============================================================
     SEÇÃO 7 — CTA FINAL
     Referência: screenshot/Mindwise Psychology Counseling Template Preview (1).png — CTA
============================================================ -->
<section class="section-cta" aria-labelledby="sec-cta-titulo">
  <div class="container">

    <h2 id="sec-cta-titulo">Pronto para dar o próximo passo?</h2>

    <p>
      A construção da relação terapêutica começa já na primeira sessão. Agende agora e venha descobrir o que é possível quando você decide se cuidar de verdade.
    </p>

    <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Gostaria de agendar uma sessão.' ); ?>"
       class="btn-primary btn-lg"
       target="_blank"
       rel="noopener noreferrer">
      Agendar minha sessão →
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

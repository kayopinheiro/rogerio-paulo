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
      <h1>Que bom que você chegou <span style="color: var(--color-primary-mid); font-weight: var(--fw-medium); font-style: italic;">até mim.</span></h1>

      <p class="lead">
        Algo dentro de você pede escuta e cuidado especializado. Este é um ambiente seguro para cuidar do seu amadurecimento emocional, ou de quem você ama, de forma autêntica, profunda e real.
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
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/sobre-mim.avif' ); ?>"
          alt="Rogério Paulo — psicólogo e psicanalista"
          width="580"
          height="520"
          loading="lazy"
        >
      </div>

      <div class="col-text">
        <span class="overline">Sobre mim</span>
        <h2 id="sec-apresentacao-titulo">Olá, sou Antônio Rogério Paulo de Sousa.</h2>

        <p>
          Sou psicólogo, formado pela Unifanor | Wyden (CRP 06/194006), especialista em Psicologia em Saúde pelo CRP-SP, psicanalista winnicottiano e pesquisador no LABÔ – Laboratório de Comportamento e Mídia, vinculado à Fundação São Paulo (PUC-SP), no grupo de pesquisa "A crise do amadurecimento na contemporaneidade". Também sou membro da organização internacional Illuman Español nos Estados Unidos e facilitador de Grupos Terapêuticos de Homens no Instituto Indivíduo Saudável-IS.
        </p>
        <p>
          Tenho mais de 10 anos de experiência clínica e 25 anos de trabalho social, sendo o último psicoterapeuta voluntário no Projeto APOIAR-Online, vinculado ao Instituto de Psicologia da Universidade de São Paulo – USP.
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

    <div class="grid-4col" style="margin-top: var(--space-12);">

      <!-- Card 1 -->
      <article class="card-service">
        <div class="card-service-icon" aria-hidden="true">🧠</div>
        <h3>Terapia e Análise Online</h3>
        <p>Sessões individuais para mulheres e homens adultos.</p>
        <a href="<?php echo esc_url( home_url( '/o-que-faco#terapia' ) ); ?>" class="btn-link">
          Saiba mais →
        </a>
      </article>

      <!-- Card 2 -->
      <article class="card-service">
        <div class="card-service-icon" aria-hidden="true">📖</div>
        <h3>Grupo de Estudos (Donald Winnicott e Richard Rohr)</h3>
        <p>Dois grupos de estudos voltados para profissionais de saúde e pessoas que atuam no cuidado e desenvolvimento do ser humano.</p>
        <a href="<?php echo esc_url( home_url( '/o-que-faco#grupo-estudos' ) ); ?>" class="btn-link">
          Saiba mais →
        </a>
      </article>

      <!-- Card 3 -->
      <article class="card-service">
        <div class="card-service-icon" aria-hidden="true">🤝</div>
        <h3>Grupo Terapêutico de Homens</h3>
        <p>Um ambiente de escuta e fala para homens adultos de forma presencial em São Paulo e Online.</p>
        <a href="<?php echo esc_url( home_url( '/o-que-faco#grupo-homens' ) ); ?>" class="btn-link">
          Saiba mais →
        </a>
      </article>

      <!-- Card 4 -->
      <article class="card-service">
        <div class="card-service-icon" aria-hidden="true">🔬</div>
        <h3>Pesquisa (i)maturidade Masculina</h3>
        <p>Uma pesquisa interdisciplinar voltada a pessoas interessadas em se aprofundar no amadurecimento do homem ao longo da vida.</p>
        <a href="<?php echo esc_url( home_url( '/o-que-faco#pesquisa' ) ); ?>" class="btn-link">
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
      "A vida de um indivíduo saudável é caracterizada tanto por medos e conflitos quanto por aspectos positivos."
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

    <div class="section-header section-header--full">
      <span class="overline">Pesquisa</span>
      <h2 id="sec-publicacoes-titulo">Pesquisa e Reflexão</h2>
      <p>Leia minhas publicações: artigos, textos e reflexões construídos a partir da minha prática clínica, atuação social, experiência na condução de grupos terapêuticos e participação em seminários e congressos. São textos acadêmicos, capítulos de livros e artigos que refletem meu compromisso com o estudo do cuidado emocional, da saúde mental e dos processos de amadurecimento humano, buscando contribuir para o diálogo entre teoria, prática e experiência.</p>
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
            <p class="card-publication-ref">IMN Editora, 2023.</p>
            <h3>Winnicott Seminários Mineiros: Ambiente e Holding</h3>
            <p>Este livro reúne alguns dos trabalhos apresentados no XVI Encontro Brasileiro sobre o Pensamento de Donald W. Winnicott (Ambiente e Holding), realizado em Belo Horizonte-MG, na modalidade on-line. Psicólogos e Psicanalistas de todo o Brasil expuseram da forma mais completa possível essas relações, com a clínica e as dificuldades para o manejo dos estragos causados por um ambiente falho em fornecer holding para se alcançar o sentimento pleno de existir.</p>
            <div class="card-publication-actions">
              <a href="https://inmeditora.com.br/produto/winnicott-seminarios-mineiros/"
                 class="btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Comprar</a>
            </div>
          </div>
        </article>

        <article class="card-publication">
          <img src="<?php echo esc_url( $base_pub . 'pub-2.avif' ); ?>"
               alt="Capa — A Clínica Social: Percurso e Perspectivas"
               class="card-publication-cover" loading="lazy">
          <div class="card-publication-body">
            <p class="card-publication-ref">Instituto de Psicologia da Universidade de São Paulo, 2022.</p>
            <h3>A Clínica Social: Percurso e Perspectivas</h3>
            <p>Este e-book reúne os trabalhos, reflexões atuais e experiências clínicas apresentados na 20ª Jornada APOIAR, um espaço de diálogo, intercâmbio e produção de conhecimento voltado à Saúde Mental e à Psicologia Clínica Social. Esta edição possui um significado especial por celebrar os 20 anos do Projeto APOIAR, vinculado ao Instituto de Psicologia da Universidade de São Paulo (IPUSP), reconhecendo sua importante contribuição para a pesquisa, a formação de profissionais e o cuidado em saúde mental.</p>
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
            <p class="card-publication-ref">Instituto de Psicologia da Universidade de São Paulo, 2023.</p>
            <h3>Adolescência: Desafios, Sofrimento e Esperança</h3>
            <p>Este e-book reúne reflexões e estudos sobre os desafios da adolescência no contexto contemporâneo, com especial atenção aos impactos observados após a pandemia. Temas como sofrimento emocional, depressão, ansiedade, vulnerabilidades e esperança são abordados a partir da prática clínica, da pesquisa e da experiência de profissionais dedicados à saúde mental. Uma leitura voltada a pais, educadores, profissionais da saúde e a todos que desejam compreender melhor os desafios e as possibilidades de cuidado com os adolescentes na atualidade.</p>
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

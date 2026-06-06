<?php
/**
 * Template Name: Blog
 *
 * Página Blog — Rogério Paulo | Psicoterapia & Psicanálise
 *
 * @package rogerio-paulo
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Paginação
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

// Filtro por categoria via GET
$cat_slug   = isset( $_GET['categoria'] ) ? sanitize_text_field( $_GET['categoria'] ) : '';
$cat_object = $cat_slug ? get_category_by_slug( $cat_slug ) : null;
$cat_id     = $cat_object ? $cat_object->term_id : 0;

// Se o slug foi passado mas não existe como categoria no WP, força query vazia
$cat_not_found = $cat_slug && ! $cat_id;

$query_args = [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 9,
    'paged'          => $paged,
    'orderby'        => 'date',
    'order'          => 'DESC',
];

if ( $cat_not_found ) {
    // Categoria não existe no WP → retorna zero posts
    $query_args['post__in'] = [ 0 ];
} elseif ( $cat_id ) {
    $query_args['cat'] = $cat_id;
}

$blog_query = new WP_Query( $query_args );

// Categorias para o filtro
$categorias = [
    'masculinidade' => 'Masculinidade',
    'winnicott'     => 'Winnicott',
    'saude-mental'  => 'Saúde Mental',
    'paternidade'   => 'Paternidade',
    'psicanalise'   => 'Psicanálise',
];

get_header();
?>

<!-- ============================================================
     SEÇÃO 1 — HERO
     Referência: screenshot/Mindwise Psychology Counseling Template Preview (5).png — blog hero
============================================================ -->
<section class="page-hero" aria-label="Blog de Rogério Paulo">
  <div class="container">

    <span class="overline" style="color: var(--color-primary-mid);">Blog</span>
    <h1>Fique por dentro.</h1>
    <p class="lead">
      Um espaço mais pessoal onde compartilho reflexões, histórias, experiências e pensamentos que surgem dos encontros da vida, da prática clínica, da espiritualidade, da cultura e do cotidiano. São textos escritos de forma mais livre e autoral, destinados a quem aprecia refletir sobre o ser humano, suas relações, desafios e possibilidades de amadurecimento.
    </p>

  </div>
</section>


<!-- ============================================================
     SEÇÃO 2 — GRID DE POSTS
     Referência: screenshot/Mindwise Psychology Counseling Template Preview (5).png — blog grid
============================================================ -->
<section class="section section--white" aria-labelledby="sec-blog-lista-titulo">
  <div class="container">

    <!-- Filtro por categoria -->
    <nav class="blog-filter" aria-label="Filtrar por categoria">
      <a href="<?php echo esc_url( get_permalink() ); ?>"
         class="blog-filter-btn <?php echo ! $cat_slug ? 'active' : ''; ?>">
        Todos
      </a>
      <?php foreach ( $categorias as $slug => $label ) : ?>
        <a href="<?php echo esc_url( add_query_arg( 'categoria', $slug, get_permalink() ) ); ?>"
           class="blog-filter-btn <?php echo $cat_slug === $slug ? 'active' : ''; ?>">
          <?php echo esc_html( $label ); ?>
        </a>
      <?php endforeach; ?>
    </nav>

    <!-- Grid de posts -->
    <?php if ( $blog_query->have_posts() ) : ?>

      <div class="grid-3col" style="margin-top: var(--space-10);" id="sec-blog-lista-titulo">

        <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>

          <article class="card-post" id="post-<?php the_ID(); ?>">

            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                <?php the_post_thumbnail( 'medium_large', [
                    'class'   => 'card-post-img',
                    'loading' => 'lazy',
                    'alt'     => esc_attr( get_the_title() ),
                ] ); ?>
              </a>
            <?php else : ?>
              <div class="card-post-img-placeholder" aria-hidden="true">Imagem do post</div>
            <?php endif; ?>

            <div class="card-post-body">

              <?php
              $cats = get_the_category();
              if ( $cats ) :
              ?>
                <span class="tag tag-green"><?php echo esc_html( $cats[0]->name ); ?></span>
              <?php endif; ?>

              <h3>
                <a href="<?php the_permalink(); ?>"
                   style="color: inherit; text-decoration: none;"
                   aria-label="<?php echo esc_attr( 'Ler: ' . get_the_title() ); ?>">
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

      <!-- Carregar mais -->
      <?php if ( $blog_query->max_num_pages > 1 ) : ?>
        <div class="blog-load-more-wrap">
          <button
            class="btn-secondary blog-load-more"
            data-page="1"
            data-max="<?php echo esc_attr( $blog_query->max_num_pages ); ?>"
            data-categoria="<?php echo esc_attr( $cat_slug ); ?>"
            aria-label="Carregar mais artigos"
          >
            Carregar mais
          </button>
        </div>
      <?php endif; ?>

    <?php elseif ( $cat_slug ) : ?>

      <!-- Nenhum post encontrado para o filtro ativo -->
      <div class="blog-empty" style="margin-top: var(--space-10);">
        <p class="blog-empty-icon" aria-hidden="true">📭</p>
        <h3>Nenhum post encontrado</h3>
        <p>Ainda não há publicações nesta categoria. Confira os outros temas ou veja todos os artigos.</p>
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn-secondary btn-sm" style="margin-top: var(--space-6);">
          Ver todos os posts
        </a>
      </div>

    <?php else : ?>

      <!-- Fallback estático — blog ainda sem posts publicados -->
      <div class="grid-3col" style="margin-top: var(--space-10);">

        <?php
        $posts_fallback = [
            [ 'cat' => 'Masculinidade', 'title' => 'Masculinidade Saudável',              'excerpt' => 'O que significa ser um homem saudável na contemporaneidade? Uma reflexão a partir da clínica e da teoria winnicottiana.' ],
            [ 'cat' => 'Masculinidade', 'title' => 'Produtividade Masculina',              'excerpt' => 'Por que tantos homens se identificam apenas pelo que produzem? Uma leitura psicanalítica do fazer compulsivo.' ],
            [ 'cat' => 'Masculinidade', 'title' => 'Responsabilidade Masculina',           'excerpt' => 'Responsabilidade sem culpa: como amadurecer sem se perder no peso das expectativas alheias.' ],
            [ 'cat' => 'Winnicott',     'title' => 'Identidade em Winnicott',              'excerpt' => 'Como Winnicott compreende a construção da identidade e do verdadeiro self ao longo da vida.' ],
            [ 'cat' => 'Psicanálise',   'title' => 'Terapeuta Winnicottiano',              'excerpt' => 'O que diferencia um terapeuta de orientação winnicottiana? Presença, holding e espaço de ser.' ],
            [ 'cat' => 'Psicanálise',   'title' => 'Psicoterapia & Psicanálise Winnicottiana', 'excerpt' => 'Entendendo as diferenças e complementaridades entre psicoterapia e psicanálise na abordagem winnicottiana.' ],
            [ 'cat' => 'Winnicott',     'title' => 'Masculinidade em Winnicott',           'excerpt' => 'Leitura dos escritos winnicottianos sobre gênero, masculinidade e os caminhos do amadurecimento emocional do homem.' ],
            [ 'cat' => 'Winnicott',     'title' => 'Sexualidade em Winnicott',             'excerpt' => 'Como Winnicott pensa a sexualidade humana para além do modelo freudiano clássico.' ],
            [ 'cat' => 'Paternidade',   'title' => 'Paternidade em Winnicott',             'excerpt' => 'A figura paterna na teoria winnicottiana: função, presença e seu papel no amadurecimento emocional dos filhos.' ],
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

  </div>
</section>


<!-- ============================================================
     SEÇÃO 3 — NEWSLETTER
     Fundo: --color-bg-footer
============================================================ -->
<section class="section-cta" aria-labelledby="sec-newsletter-titulo">
  <div class="container">

    <h2 id="sec-newsletter-titulo">Receba reflexões direto no seu e-mail.</h2>

    <p>Não é spam. É conteúdo pensado para homens que querem crescer de dentro para fora.</p>

    <form
      class="newsletter-form"
      method="post"
      action="#"
      aria-label="Formulário de inscrição na newsletter"
      novalidate
    >
      <?php wp_nonce_field( 'newsletter_subscribe', 'newsletter_nonce' ); ?>
      <label for="newsletter-email" class="visually-hidden">Seu melhor e-mail</label>
      <input
        type="email"
        id="newsletter-email"
        name="email"
        class="form-input"
        placeholder="Seu melhor e-mail"
        required
        autocomplete="email"
      >
      <button type="submit" class="btn-primary">
        Quero receber
      </button>
    </form>

  </div>
</section>


<!-- WhatsApp flutuante -->
<a class="whatsapp-float" href="#" aria-label="Conversar pelo WhatsApp">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
  </svg>
</a>

<?php get_footer(); ?>

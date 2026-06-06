<?php
/**
 * functions.php — Rogério Paulo | Tema Filho Hello Elementor
 *
 * Enfileira CSS e JS do tema filho. Carrega após os estilos do tema pai.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* ==========================================================
   ENFILEIRAR ESTILOS
========================================================== */
function rogerio_paulo_enqueue_styles() {

    // Estilo do tema pai (Hello Elementor) — obrigatório para tema filho
    wp_enqueue_style(
        'hello-elementor-style',
        get_template_directory_uri() . '/style.css',
        [],
        wp_get_theme( 'hello-elementor' )->get( 'Version' )
    );

    // Google Fonts — DM Sans
    wp_enqueue_style(
        'rogerio-paulo-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap',
        [],
        null
    );

    // CSS Custom Properties (:root) — carregado primeiro
    wp_enqueue_style(
        'rogerio-paulo-variables',
        get_stylesheet_directory_uri() . '/css/variables.css',
        [ 'rogerio-paulo-fonts' ],
        '1.1.3'
    );

    // Reset, body e tipografia global
    wp_enqueue_style(
        'rogerio-paulo-base',
        get_stylesheet_directory_uri() . '/css/base.css',
        [ 'rogerio-paulo-variables' ],
        '1.1.3'
    );

    // Botões, cards, tags, blockquote, WhatsApp flutuante
    wp_enqueue_style(
        'rogerio-paulo-components',
        get_stylesheet_directory_uri() . '/css/components.css',
        [ 'rogerio-paulo-base' ],
        '1.1.3'
    );

    // Navbar, footer, seções, grids, FAQ
    wp_enqueue_style(
        'rogerio-paulo-layout',
        get_stylesheet_directory_uri() . '/css/layout.css',
        [ 'rogerio-paulo-components' ],
        '1.1.3'
    );

    // Declaração do tema filho (style.css) — depois de tudo
    wp_enqueue_style(
        'rogerio-paulo-child',
        get_stylesheet_uri(),
        [ 'rogerio-paulo-layout' ],
        '1.1.3'
    );
}
add_action( 'wp_enqueue_scripts', 'rogerio_paulo_enqueue_styles' );


/* ==========================================================
   ENFILEIRAR SCRIPTS
========================================================== */
function rogerio_paulo_enqueue_scripts() {

    wp_enqueue_script(
        'rogerio-paulo-script',
        get_stylesheet_directory_uri() . '/js/script.js',
        [],          // sem dependências (vanilla JS)
        '1.1.3',
        true         // carrega no rodapé (antes de </body>)
    );
}
add_action( 'wp_enqueue_scripts', 'rogerio_paulo_enqueue_scripts' );


/* ==========================================================
   PRECONNECT — GOOGLE FONTS (performance)
========================================================== */
function rogerio_paulo_preconnect_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'rogerio_paulo_preconnect_fonts', 1 );


/* ==========================================================
   SUPORTE A RECURSOS DO TEMA
========================================================== */
function rogerio_paulo_setup() {
    // Título gerenciado pelo WordPress (Yoast SEO)
    add_theme_support( 'title-tag' );

    // Imagens destacadas em posts e páginas
    add_theme_support( 'post-thumbnails' );

    // HTML5 semântico para formulários, busca, galeria e caption
    add_theme_support( 'html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ] );
}
add_action( 'after_setup_theme', 'rogerio_paulo_setup' );


/* ==========================================================
   CUSTOM POST TYPE — PUBLICAÇÕES
========================================================== */
function rogerio_paulo_register_cpt_publicacoes() {
    $labels = [
        'name'               => 'Publicações',
        'singular_name'      => 'Publicação',
        'menu_name'          => 'Publicações',
        'add_new'            => 'Adicionar nova',
        'add_new_item'       => 'Adicionar nova publicação',
        'edit_item'          => 'Editar publicação',
        'new_item'           => 'Nova publicação',
        'view_item'          => 'Ver publicação',
        'search_items'       => 'Buscar publicações',
        'not_found'          => 'Nenhuma publicação encontrada',
        'not_found_in_trash' => 'Nenhuma publicação na lixeira',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-book-alt',
        'supports'           => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
        'rewrite'            => [ 'slug' => 'publicacoes' ],
        'has_archive'        => true,
        'show_in_rest'       => true,  // compatível com o editor de blocos
    ];

    register_post_type( 'publicacoes', $args );
}
add_action( 'init', 'rogerio_paulo_register_cpt_publicacoes' );


/* ==========================================================
   AJAX — CARREGAR MAIS POSTS DO BLOG
========================================================== */
function rogerio_paulo_load_more_posts() {
    check_ajax_referer( 'load_more_posts', 'nonce' );

    $paged    = isset( $_POST['page'] )     ? absint( $_POST['page'] )                 : 2;
    $cat_slug = isset( $_POST['categoria'] ) ? sanitize_text_field( $_POST['categoria'] ) : '';
    $cat_id   = 0;

    if ( $cat_slug ) {
        $cat_object = get_category_by_slug( $cat_slug );
        $cat_id     = $cat_object ? $cat_object->term_id : 0;
    }

    $query_args = [
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 9,
        'paged'          => $paged,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ];

    if ( $cat_id ) {
        $query_args['cat'] = $cat_id;
    }

    $query = new WP_Query( $query_args );

    if ( ! $query->have_posts() ) {
        wp_send_json_success( [ 'html' => '', 'has_more' => false ] );
    }

    ob_start();
    while ( $query->have_posts() ) :
        $query->the_post();
        $cats = get_the_category();
        ?>
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
                <?php if ( $cats ) : ?>
                    <span class="tag tag-green"><?php echo esc_html( $cats[0]->name ); ?></span>
                <?php endif; ?>
                <h3>
                    <a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"
                       aria-label="<?php echo esc_attr( 'Ler: ' . get_the_title() ); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <p><?php echo wp_trim_words( get_the_excerpt(), 18, '…' ); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn-link">Ler artigo →</a>
            </div>
        </article>
        <?php
    endwhile;
    wp_reset_postdata();
    $html = ob_get_clean();

    wp_send_json_success( [
        'html'     => $html,
        'has_more' => $paged < $query->max_num_pages,
    ] );
}
add_action( 'wp_ajax_load_more_posts',        'rogerio_paulo_load_more_posts' );
add_action( 'wp_ajax_nopriv_load_more_posts', 'rogerio_paulo_load_more_posts' );

// Passa variáveis para o JS (URL do admin-ajax e nonce)
function rogerio_paulo_localize_scripts() {
    wp_localize_script( 'rogerio-paulo-script', 'rpAjax', [
        'url'   => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce( 'load_more_posts' ),
    ] );
}
add_action( 'wp_enqueue_scripts', 'rogerio_paulo_localize_scripts', 20 );


/* ==========================================================
   DESABILITAR COMENTÁRIOS GLOBALMENTE
========================================================== */
function rogerio_paulo_disable_comments() {
    // Remove suporte a comentários de todos os tipos de post
    foreach ( get_post_types() as $post_type ) {
        if ( post_type_supports( $post_type, 'comments' ) ) {
            remove_post_type_support( $post_type, 'comments' );
            remove_post_type_support( $post_type, 'trackbacks' );
        }
    }
}
add_action( 'init', 'rogerio_paulo_disable_comments' );

// Fecha comentários em todos os posts
add_filter( 'comments_open', '__return_false', 20, 2 );
add_filter( 'pings_open',    '__return_false', 20, 2 );

// Retorna zero comentários
add_filter( 'comments_array', '__return_empty_array', 10, 2 );

// Remove item "Comentários" do menu admin
add_action( 'admin_menu', function () {
    remove_menu_page( 'edit-comments.php' );
} );

// Remove o balão de comentários da barra admin
add_action( 'wp_before_admin_bar_render', function () {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'comments' );
} );


/* ==========================================================
   CRIAR PÁGINAS AUTOMATICAMENTE NA ATIVAÇÃO DO TEMA
========================================================== */
function rogerio_paulo_criar_paginas() {
    $paginas = [
        [
            'titulo'   => 'Home',
            'slug'     => 'home',
            'template' => 'template-home.php',
        ],
        [
            'titulo'   => 'Quem Sou',
            'slug'     => 'quem-sou',
            'template' => 'template-quem-sou.php',
        ],
        [
            'titulo'   => 'O Que Faço',
            'slug'     => 'o-que-faco',
            'template' => 'template-o-que-faco.php',
        ],
        [
            'titulo'   => 'Blog',
            'slug'     => 'blog',
            'template' => 'template-blog.php',
        ],
        [
            'titulo'   => 'Publicações',
            'slug'     => 'publicacoes',
            'template' => 'template-publicacoes.php',
        ],
        [
            'titulo'   => 'Obrigado',
            'slug'     => 'obrigado',
            'template' => 'template-obrigado.php',
        ],
    ];

    foreach ( $paginas as $pagina ) {
        $existe = get_page_by_path( $pagina['slug'] );
        if ( $existe ) {
            continue;
        }

        $id = wp_insert_post( [
            'post_title'   => $pagina['titulo'],
            'post_name'    => $pagina['slug'],
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ] );

        if ( $id && ! is_wp_error( $id ) ) {
            update_post_meta( $id, '_wp_page_template', $pagina['template'] );
        }
    }

    // Define a página Home como página inicial
    $home = get_page_by_path( 'home' );
    if ( $home ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $home->ID );
    }
}
add_action( 'after_switch_theme', 'rogerio_paulo_criar_paginas' );

// Garante que as páginas sejam criadas mesmo com o tema já ativo
add_action( 'admin_init', function () {
    if ( ! get_option( 'rogerio_paulo_paginas_criadas' ) ) {
        rogerio_paulo_criar_paginas();
        update_option( 'rogerio_paulo_paginas_criadas', true );
    }
} );


/* ==========================================================
   REMOVE ESTILOS DESNECESSÁRIOS DO HELLO ELEMENTOR
========================================================== */
function rogerio_paulo_dequeue_hello_styles() {
    // Remove o estilo padrão mínimo do Hello Elementor se o Elementor Pro
    // já o gerenciar — descomente só se necessário após testes.
    // wp_dequeue_style( 'hello-elementor-theme-style' );
}
add_action( 'wp_enqueue_scripts', 'rogerio_paulo_dequeue_hello_styles', 20 );

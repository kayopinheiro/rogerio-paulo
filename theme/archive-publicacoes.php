<?php
/**
 * Archive Template: Publicações
 *
 * Arquivo de archive do CPT publicacoes — exibe todas as publicações de Rogério Paulo.
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
============================================================ -->
<section class="page-hero" aria-label="Publicações de Rogério Paulo">
  <div class="container">

    <span class="overline" style="color: var(--color-primary-mid);">Produção acadêmica</span>
    <h1>Pesquisa, escrita e reflexão.</h1>
    <p class="lead">
      Aqui você encontra minhas publicações: artigos, textos e reflexões construídos a partir da minha prática clínica, atuação social, experiência na condução de grupos terapêuticos e participação em seminários e congressos.
    </p>

  </div>
</section>


<!-- ============================================================
     SEÇÃO 2 — LISTA DE PUBLICAÇÕES
============================================================ -->
<section class="section section--white" aria-labelledby="sec-publicacoes-lista-titulo">
  <div class="container">

    <div class="section-header">
      <span class="overline">Capítulos</span>
      <h2 id="sec-publicacoes-lista-titulo">Publicações</h2>
    </div>

    <div style="margin-top: var(--space-12);">

      <?php
      // Dados reais das publicações — sempre exibidos (independente do CPT)
      $base = get_stylesheet_directory_uri() . '/assets/';
      $publicacoes_estaticas = [
          [
              'img'       => $base . 'pub-1.avif',
              'ref'       => 'IMN Editora, 2023.',
              'titulo'    => 'Winnicott Seminários Mineiros: Ambiente e Holding',
              'capitulos' => [
                  [
                      'nome' => 'A perspectiva winnicottiana de indivíduo saudável: possibilidades de cuidado na saúde mental dos homens (p.369)',
                      'desc' => 'Neste capítulo, convido você a refletir comigo sobre possibilidades de cuidado emocional voltadas à saúde mental dos homens a partir da perspectiva de Donald Winnicott. Compartilho reflexões construídas a partir da minha experiência clínica em atendimentos psicoterapêuticos individuais e na facilitação de grupos de homens (Illuman Brasil), espaços que me permitiram acompanhar diferentes histórias, dores e processos de amadurecimento. Ao longo do texto, você encontrará uma discussão sobre a importância de ambientes seguros e acolhedores, onde homens possam expressar medos, angústias e vulnerabilidades sem julgamentos. Também apresento como a espontaneidade, a criatividade e os vínculos humanos podem favorecer processos de cuidado, elaboração emocional e uma experiência mais autêntica de ser.',
                  ],
              ],
              'baixar'  => '',
              'comprar' => 'https://inmeditora.com.br/produto/winnicott-seminarios-mineiros/',
          ],
          [
              'img'       => $base . 'pub-3.avif',
              'ref'       => 'Instituto de Psicologia da Universidade de São Paulo, 2023.',
              'titulo'    => 'Adolescência: Desafios, Sofrimento e Esperança',
              'capitulos' => [
                  [
                      'nome' => 'Reflexões sobre a paternidade na atualidade a luz de Winnicott (p.179)',
                      'desc' => 'Neste artigo, convidamos você a refletir comigo sobre as transformações da paternidade na atualidade a partir da perspectiva de Donald Winnicott. Ao longo do texto, abordamos o papel do pai ou de quem exerce essa função em diferentes configurações familiares, destacando a importância do cuidado, da presença e dos vínculos no desenvolvimento emocional humano. Você encontrará uma reflexão sobre como a teoria winnicottiana permanece atual e relevante para compreender os desafios e as experiências da paternidade no mundo contemporâneo.',
                  ],
              ],
              'baixar'  => 'https://www.rogeriopaulopsi.com.br/_files/ugd/4ada22_55a8b9b82e04425a93769f258e3e69bc.pdf',
              'comprar' => '',
          ],
          [
              'img'       => $base . 'pub-2.avif',
              'ref'       => 'Instituto de Psicologia da Universidade de São Paulo, 2022.',
              'titulo'    => 'A Clínica Social: Percurso e Perspectivas',
              'capitulos' => [
                  [
                      'nome' => 'Psicopatologia do TOC: Perspectivas da Psicanálise Winnicottiana (p. 21)',
                      'desc' => 'Ao longo deste capítulo, apresentamos uma reflexão sobre o Transtorno Obsessivo-Compulsivo (TOC) a partir da perspectiva da psicanálise de Donald Winnicott. Por meio de um caso clínico e do diálogo com a psicopatologia contemporânea, busco ampliar a compreensão sobre os aspectos emocionais que atravessam o sofrimento relacionado ao TOC. Você encontrará uma discussão sobre a complexidade desse transtorno e sobre como a teoria do desenvolvimento emocional de Winnicott pode contribuir para uma escuta clínica mais sensível, destacando a importância de um ambiente terapêutico confiável e reparador nos processos de cuidado e amadurecimento emocional.',
                  ],
                  [
                      'nome' => 'O Homem e a transicionalidade (p. 461)',
                      'desc' => 'Neste capítulo, convido você a refletir comigo sobre como o sofrimento emocional na contemporaneidade pode assumir diferentes formas, especialmente por meio das dependências — sejam elas relacionadas a drogas, álcool, internet, sexo, comida ou relações interpessoais. A partir da teoria de Donald Winnicott, apresento um caso clínico que nos ajuda a compreender como experiências precoces de falhas no cuidado podem impactar profundamente a vida emocional de um indivíduo. Ao longo do texto, você encontrará uma reflexão sobre a importância de um ambiente terapêutico seguro, confiável e acolhedor, capaz de favorecer experiências reparadoras e abrir caminhos para processos de integração emocional e amadurecimento humano.',
                  ],
              ],
              'baixar'  => 'https://www.rogeriopaulopsi.com.br/_files/ugd/4ada22_eaf9f450d4024047a4018cd35e1ae952.pdf',
              'comprar' => '',
          ],
          [
              'img'       => $base . 'pub-4.avif',
              'ref'       => 'Expressão Gráfica e Editora, 2019.',
              'titulo'    => 'O Gesto Espontâneo em 90 Trabalhos',
              'capitulos' => [
                  [
                      'nome' => 'O verdadeiro self e bebês prematuros: As Possibilidades do Método Canguru (p. 341)',
                      'desc' => 'Neste capítulo, compartilhamos uma reflexão sobre os impactos da prematuridade no desenvolvimento emocional do bebê a partir da teoria de Donald Winnicott. Ao longo do texto, busco compreender como as experiências iniciais de cuidado influenciam a constituição do verdadeiro self e a importância do ambiente nos primeiros momentos da vida. Você encontrará uma discussão sobre os desafios enfrentados por bebês prematuros e suas famílias, além de uma reflexão sobre o potencial do Método Canguru como uma prática de cuidado capaz de fortalecer vínculos, favorecer a presença emocional e contribuir para um desenvolvimento psíquico mais saudável, mesmo em contextos de adversidade.',
                  ],
              ],
              'baixar'  => '',
              'comprar' => 'https://www.amazon.com.br/Gesto-Espont%C3%A2neo-Em-90-Trabalhos/dp/8542014820',
          ],
      ];
      ?>

      <?php foreach ( $publicacoes_estaticas as $pub ) : ?>
        <article class="card-publication">

          <?php if ( $pub['img'] ) : ?>
            <img
              src="<?php echo esc_url( $pub['img'] ); ?>"
              alt="<?php echo esc_attr( 'Capa — ' . $pub['titulo'] ); ?>"
              class="card-publication-cover"
              loading="lazy"
            >
          <?php else : ?>
            <div class="card-publication-cover-placeholder" aria-hidden="true">Capa</div>
          <?php endif; ?>

          <div class="card-publication-body">
            <p class="card-publication-ref"><?php echo esc_html( $pub['ref'] ); ?></p>
            <h3><?php echo esc_html( $pub['titulo'] ); ?></h3>

            <?php foreach ( $pub['capitulos'] as $cap ) : ?>
              <div class="card-publication-chapter">
                <p class="card-publication-chapter-name">Capítulo: <?php echo esc_html( $cap['nome'] ); ?></p>
                <p class="card-publication-chapter-desc"><?php echo esc_html( $cap['desc'] ); ?></p>
              </div>
            <?php endforeach; ?>

            <div class="card-publication-actions">
              <?php if ( $pub['baixar'] ) : ?>
                <a href="<?php echo esc_url( $pub['baixar'] ); ?>"
                   class="btn-primary btn-sm"
                   target="_blank"
                   rel="noopener noreferrer">
                  Baixar
                </a>
              <?php endif; ?>
              <?php if ( $pub['comprar'] ) : ?>
                <a href="<?php echo esc_url( $pub['comprar'] ); ?>"
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

    </div>

  </div>
</section>


<!-- ============================================================
     SEÇÃO 3 — CITAÇÃO WINNICOTT
============================================================ -->
<section class="section section--dark" aria-label="Citação de Winnicott">
  <div class="container">
    <blockquote class="quote-winnicott">
      <p>"A única companhia que tenho ao explorar o território desconhecido de um novo caso é a teoria que levo comigo e que tem se tornado parte de mim e em relação à qual nem sequer tenho que pensar de maneira deliberada. Trata-se da teoria do desenvolvimento emocional do indivíduo..."</p>
      <footer>— Winnicott</footer>
    </blockquote>
  </div>
</section>


<!-- ============================================================
     SEÇÃO 4 — CTA
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

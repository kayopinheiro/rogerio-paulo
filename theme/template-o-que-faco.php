<?php
/**
 * Template Name: O Que Faço
 *
 * Página O Que Faço — Rogério Paulo | Psicoterapia & Psicanálise
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
     Referência: screenshot/Mindwise Psychology Counseling Template Preview (2).png — page hero
============================================================ -->
<section class="page-hero" aria-label="Como Rogério Paulo pode ajudar você">
  <div class="container">

    <span class="overline" style="color: var(--color-primary-mid);">Serviços</span>
    <h1>Como posso caminhar com você.</h1>
    <p class="lead">
      Seja em sessões individuais, em grupos terapêuticos ou em espaços de estudo — o foco é sempre o mesmo: cuidar do amadurecimento emocional com responsabilidade e presença.
    </p>

  </div>
</section>


<!-- ============================================================
     SEÇÃO 2 — TERAPIA E ANÁLISE ONLINE
     Âncora: id="terapia"
     Bloco: 2 colunas | texto esquerda | foto direita
     Referência: screenshot/Mindwise Psychology Counseling Template Preview (2).png — appointment
============================================================ -->
<section id="terapia" class="section section--white" aria-labelledby="sec-terapia-titulo">
  <div class="container">
    <div class="grid-2col grid-2col--img-right">

      <div class="col-text">
        <span class="overline">Atendimento individual</span>
        <h2 id="sec-terapia-titulo">Terapia e Análise Online</h2>

        <p>
          A psicoterapia é um tratamento clínico fundamentado em métodos psicológicos que buscam promover saúde mental, aliviar sofrimentos emocionais e cuidar de transtornos psíquicos. Trata-se de um processo de escuta, compreensão e intervenção.
        </p>
        <p>
          A psicanálise, por sua vez, não se limita à resolução de sintomas. É uma proposta de investigação profunda de si mesmo — das dimensões conscientes e inconscientes da experiência — permitindo ao indivíduo reconhecer seus conflitos internos, elaborar sua história e viver de forma mais integrada.
        </p>
        <p>
          A terapia e análise que realizo estão ancoradas na psicanálise winnicottiana, abordagem que valoriza o ambiente relacional como fator essencial para o amadurecimento emocional. Trata-se de um trabalho cuidadoso, sustentado por uma escuta ética, acolhedora e comprometida com o desenvolvimento da saúde psíquica em sua totalidade.
        </p>

        <blockquote>
          "Faço análise porque é do que o paciente necessita. Se o paciente não necessita de análise, então faço alguma outra coisa."
          <cite>Donald Winnicott</cite>
        </blockquote>

        <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Gostaria de agendar uma sessão.' ); ?>"
           class="btn-primary"
           target="_blank"
           rel="noopener noreferrer">
          Agendar uma sessão →
        </a>
      </div>

      <div class="col-img">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/foto-rogerio-hero.jpg' ); ?>"
          alt="Sessão de psicoterapia online com Rogério Paulo"
          width="560"
          height="520"
          loading="lazy"
        >
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     SEÇÃO 3 — GRUPO DE ESTUDOS WINNICOTTIANO
     Âncora: id="grupo-estudos"
     Bloco: 2 colunas invertidas | foto esquerda | texto direita
     Fundo: --color-bg-section
============================================================ -->
<section id="grupo-estudos" class="section section--alt" aria-labelledby="sec-grupo-estudos-titulo"
  style="
    background-image:
      url('<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/bg_grande_fuperior.png' ); ?>'),
      url('<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/bg_grande_inferior.png' ); ?>');
    background-position: top center, bottom center;
    background-repeat: no-repeat, no-repeat;
    background-size: 100% auto, 100% auto;
  ">
  <div class="container">
    <div class="grid-2col grid-2col--img-left">

      <div class="col-img">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/foto-rogerio-psicologo.jpg' ); ?>"
          alt="Grupo de Estudos Winnicottiano — Amadurecimento Pessoal"
          width="560"
          height="520"
          loading="lazy"
        >
      </div>

      <div class="col-text">
        <span class="overline">Formação</span>
        <h2 id="sec-grupo-estudos-titulo">Grupo de Estudos Winnicottiano "Amadurecimento Pessoal"</h2>

        <p>
          Um espaço virtual de aprendizado, troca e reflexão. Destinado a profissionais e estudantes das áreas de saúde, educação, direito, medicina ou qualquer pessoa envolvida com o cuidado de pessoas.
        </p>
        <p>
          Em um ambiente acolhedor e estimulante, discutimos semanalmente temas fundamentais a partir da psicanálise winnicottiana, promovendo aprofundamento teórico e prático acerca do amadurecimento pessoal e profissional do ser humano.
        </p>

        <h3 style="margin-top: var(--space-6); margin-bottom: var(--space-3);">Como funciona</h3>

        <ol class="steps-list">
          <li>Encontros online quinzenais com duração de 1h30min — o grupo se reúne uma vez por semana</li>
          <li>Material de estudo organizado: você recebe o cronograma com os textos selecionados ou o livro que será trabalhado</li>
          <li>Valor Mensal: R$ 150,00</li>
        </ol>

        <blockquote style="margin-top: var(--space-6);">
          "A única companhia que tenho ao explorar o território desconhecido de um novo caso é a teoria que levo comigo e que tem se tornado parte de mim."
          <cite>Donald Winnicott</cite>
        </blockquote>

        <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Gostaria de fazer inscrição no Grupo de Estudos Winnicottiano.' ); ?>"
           class="btn-primary"
           target="_blank"
           rel="noopener noreferrer">
          Fazer inscrição →
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     SEÇÃO 4 — GRUPO TERAPÊUTICO PARA HOMENS
     Âncora: id="grupo-homens"
     Bloco: full-width | imagem de fundo + overlay
     Referência: screenshot/Mindwise Psychology Counseling Template Preview (2).png — approach
============================================================ -->
<section
  id="grupo-homens"
  class="section-group-hero"
  aria-labelledby="sec-grupo-homens-titulo"
>
  <div
    class="section-group-hero-bg"
    style="background-image: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/caquito-background.webp' ); ?>');"
    role="img"
    aria-label="Grupo Terapêutico para Homens"
  ></div>
  <div class="section-group-hero-overlay" aria-hidden="true"></div>

  <div class="container" style="position: relative; z-index: 1;">
    <div style="max-width: 680px;">

      <span class="overline" style="color: var(--color-primary-mid);">Grupo terapêutico</span>
      <h2 id="sec-grupo-homens-titulo">Grupo Terapêutico para Homens</h2>

      <p>
        Vivemos em uma cultura que, por muito tempo, ensinou os homens a esconder suas emoções, resolver tudo sozinhos e não demonstrar fragilidade. Essa lógica tem gerado solidão, adoecimento psíquico e dificuldades de relacionamento — consigo mesmo e com os outros.
      </p>
      <p>
        O Grupo Terapêutico para Homens é um espaço seguro e confidencial de escuta, acolhimento e partilha. Um encontro entre homens dispostos a refletir sobre suas vivências, afetos, dores, masculinidades, paternidades, sexualidades, relações familiares, trabalho, espiritualidade e sentido de vida.
      </p>
      <p>
        Através do vínculo e da troca de experiências com outros homens, o grupo favorece o autoconhecimento, o amadurecimento emocional e a construção de uma nova forma de estar no mundo — mais íntegra, saudável e verdadeira.
      </p>

      <h3>Como funciona</h3>

      <ol class="steps-list">
        <li>Encontros Online (1º sábado) e Presencial (3º sábado) das 10h às 11h30min</li>
        <li>Para participar, faça inscrição no link abaixo para receber todas as informações</li>
        <li>Gratuito — vagas limitadas</li>
      </ol>

      <div style="margin-top: var(--space-8);">
        <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Gostaria de fazer inscrição no Grupo Terapêutico para Homens.' ); ?>"
           class="btn-primary"
           target="_blank"
           rel="noopener noreferrer">
          Inscrição gratuita →
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     SEÇÃO 5 — FAQ
     Bloco: 2 colunas | texto esquerda (sticky) | accordion direita
     Referência: screenshot/Mindwise Psychology Counseling Template Preview (3).png — FAQ
============================================================ -->
<section class="section section--white" aria-labelledby="sec-faq-titulo">
  <div class="container">
    <div class="faq-section">

      <!-- Intro (sticky no desktop) -->
      <div class="faq-intro">
        <span class="overline">Dúvidas</span>
        <h2 id="sec-faq-titulo">Perguntas frequentes</h2>
        <p>
          Se você ainda tem dúvidas sobre como funciona o processo, estas são as perguntas que mais chegam. Caso a sua não esteja aqui, fale comigo diretamente.
        </p>
        <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Tenho uma dúvida sobre o atendimento.' ); ?>"
           class="btn-link"
           target="_blank"
           rel="noopener noreferrer">
          Fazer uma pergunta →
        </a>
      </div>

      <!-- Accordion -->
      <div class="faq-list" role="list">

        <div class="faq-item" role="listitem">
          <button class="faq-question" type="button">
            Como funciona a sessão inicial?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              Na primeira sessão busco compreender sua história, suas vivências, dores e esperanças. É um momento de escuta ativa e acolhedora. Ao final, apresento minha abordagem e avaliamos juntos a melhor forma de seguirmos.
            </div>
          </div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" type="button">
            As sessões são online?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              Sim, atendo exclusivamente online — o que permite que você se conecte de qualquer lugar do Brasil ou do exterior com segurança e conforto.
            </div>
          </div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" type="button">
            Qual é o valor das sessões individuais?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              O valor é informado na sessão inicial. Em caso de necessidade, emito nota fiscal para reembolso por convênios.
            </div>
          </div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" type="button">
            O Grupo Terapêutico para Homens é realmente gratuito?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              Sim, totalmente gratuito. As vagas são limitadas — faça sua inscrição para garantir seu lugar.
            </div>
          </div>
        </div>

      </div><!-- /.faq-list -->

    </div><!-- /.faq-section -->
  </div>
</section>


<!-- ============================================================
     SEÇÃO 6 — CTA FINAL
     Fundo: --color-bg-footer
============================================================ -->
<section class="section-cta" aria-labelledby="sec-cta-o-que-faco-titulo">
  <div class="container">

    <h2 id="sec-cta-o-que-faco-titulo">Pronto para dar o próximo passo?</h2>

    <p>Não importa por onde você queira começar — o que importa é que você escolheu se cuidar.</p>

    <div class="btn-group" style="justify-content: center;">
      <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Gostaria de agendar uma sessão individual.' ); ?>"
         class="btn-primary btn-lg"
         target="_blank"
         rel="noopener noreferrer">
        Agendar sessão individual →
      </a>
      <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Gostaria de entrar no Grupo Terapêutico para Homens.' ); ?>"
         class="btn-ghost btn-lg"
         target="_blank"
         rel="noopener noreferrer">
        Entrar no grupo de homens →
      </a>
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

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
    <div class="page-hero-stack">

      <div>
        <span class="overline" style="color: var(--color-primary-mid);">Serviços</span>
        <h1>Como posso caminhar com você.</h1>
      </div>

      <div class="page-hero-body">
        <p class="lead">
          Minha atuação é fruto de mais de 10 anos de experiência clínica e de 25 anos de trabalho social voltado à comunidade, além de pesquisas, publicações, condução de grupos terapêuticos e estudos interdisciplinares com autores como Richard Rohr, dedicados à compreensão do desenvolvimento e do amadurecimento humano.
        </p>
        <p class="lead">
          Fundamentada na Psicanálise Winnicottiana, minha prática clínica foi construída ao longo de diferentes experiências formativas e institucionais, entre elas: a Universidade Federal do Ceará (UFC), a Fundação Batista Central (FBC), a Secretaria da Proteção Social do Ceará (SPS), a Universidade de São Paulo (USP), a Fundação São Paulo (PUC-SP) e a Illuman Español, nos Estados Unidos.
        </p>
        <a href="http://lattes.cnpq.br/" class="btn-ghost" target="_blank" rel="noopener noreferrer" style="margin-top: var(--space-6);">
          Currículo Lattes →
        </a>
      </div>

    </div>
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
        <span class="overline">Cuidado Individual</span>
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

        <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Gostaria de agendar uma sessão.' ); ?>"
           class="btn-primary"
           target="_blank"
           rel="noopener noreferrer"
           >
          Agendar uma sessão →
        </a>
      </div>

      <div class="col-img">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/o-psicologo.png' ); ?>"
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
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/IMG-20230619-WA0100.png' ); ?>"
          alt="Grupo de Estudos Winnicottiano — Amadurecimento Pessoal"
          width="560"
          height="520"
          loading="lazy"
        >
      </div>

      <div class="col-text">
        <span class="overline">Formação</span>
        <h2 id="sec-grupo-estudos-titulo">Grupos de Estudo</h2>

        <h3 style="margin-top: var(--space-4); margin-bottom: var(--space-3);">Grupo I: Amadurecimento Emocional em Winnicott</h3>
        <p>
          Um espaço virtual de aprendizado, troca e reflexão, destinado a profissionais, estudantes e a todas as pessoas interessadas no desenvolvimento humano e no cuidado emocional.
        </p>
        <p>
          A partir da leitura e discussão dos textos de Donald Winnicott, exploramos temas fundamentais como desenvolvimento emocional, ambiente facilitador, verdadeiro e falso self, criatividade, saúde emocional, amadurecimento e relações humanas.
        </p>
        <p>
          Em um ambiente acolhedor e estimulante, promovemos o aprofundamento teórico e prático da Psicanálise Winnicottiana, favorecendo reflexões sobre o cuidado de si, do outro e os processos de amadurecimento ao longo da vida.
        </p>

        <h3 style="margin-top: var(--space-6); margin-bottom: var(--space-3);">Grupo II: Amadurecimento Humano e Espiritual em Richard Rohr</h3>
        <p>
          Este grupo de estudos é um convite para refletir sobre os processos de amadurecimento humano e espiritual a partir da obra <em>Caindo para Cima</em>, de Richard Rohr. Ao longo dos encontros, exploraremos temas como identidade, propósito, crises, quedas, perdas, recomeços e transformação pessoal.
        </p>
        <p>
          Um espaço de leitura, diálogo e reflexão para homens e mulheres que desejam compreender melhor a própria jornada e encontrar novos significados para os desafios da vida.
        </p>

        <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Gostaria de fazer inscrição em um Grupo de Estudo.' ); ?>"
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
  <div class="container">
    <div class="section-group-hero-grid">

    <!-- Coluna esquerda: overline, título e parágrafos -->
    <div class="section-group-hero-col-content">
      <span class="overline" style="color: var(--color-primary-mid);">Cuidado Coletivo</span>
      <h2 id="sec-grupo-homens-titulo">Grupo Terapêutico de Homens</h2>

      <p>
        É um grupo que busca ajudar homens a se tornarem mais saudáveis, a partir de um ambiente seguro, onde é possível compartilhar os desafios da vida, receber apoio mútuo e aprender com as experiências dos participantes.
      </p>
      <p>
        Falar sobre nossos erros e acertos, além de escutar com profundidade as emoções e a história de vida de outros homens, pode gerar alívio para os sofrimentos e fortalecer nosso processo de mudança.
      </p>
      <p>
        Não se trata de terapia em grupo, mas é um espaço que pode ter efeitos terapêuticos importantes.
      </p>
    </div><!-- /.col-esquerda -->

    <!-- Coluna direita: listas e botão -->
    <div class="section-group-hero-col-content">

      <h3 style="margin-top: 0;">O que o GT não é</h3>
      <ul class="steps-list">
        <li>Um ambiente para homens machistas, preconceituosos ou narcisistas</li>
        <li>Um grupo com ideologia política, religiosa ou financeira — cada homem faz sua própria jornada</li>
        <li>Um ambiente que valoriza status social, profissão ou situação financeira</li>
        <li>Um grupo de falas longas — busca-se falar de forma breve, para que todos possam se expressar</li>
        <li>Um grupo de homens que se colocam como superiores — valoriza-se a vulnerabilidade, as potencialidades e as dificuldades de cada participante</li>
      </ul>

      <hr style="border: none; border-top: 1px solid var(--color-border); margin: var(--space-6) 0;">

      <h3 style="margin-top: 0;">Como funciona</h3>

      <div class="como-funciona-grid">
        <div>
          <strong>Presencial (Gratuito)</strong>
          <ul class="steps-list" style="margin-top: var(--space-2);">
            <li>Local: Condomínio L'abitare-Butantã, São Paulo-SP</li>
            <li>Dia: Primeiro sábado do mês</li>
            <li>Horário: 10h às 12h</li>
          </ul>
        </div>
        <div>
          <strong>Online (Gratuito)</strong>
          <ul class="steps-list" style="margin-top: var(--space-2);">
            <li>Local: Google Meet</li>
            <li>Dia: Terceiro sábado do mês</li>
            <li>Horário: 10h às 11h30min</li>
          </ul>
        </div>
      </div>

      <div style="margin-top: var(--space-8);">
        <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Gostaria de fazer inscrição no Grupo Terapêutico de Homens.' ); ?>"
           class="btn-primary"
           target="_blank"
           rel="noopener noreferrer">
          Inscrição gratuita →
        </a>
      </div>

    </div><!-- /.col-direita -->
    </div><!-- /.section-group-hero-grid -->
  </div>
</section>


<!-- ============================================================
     SEÇÃO 5 — GRUPO DE PESQUISA
     Âncora: id="pesquisa"
     Bloco: 2 colunas | texto esquerda | foto direita
============================================================ -->
<section id="pesquisa" class="section section--white section--divider-top" aria-labelledby="sec-pesquisa-titulo">
  <div class="container">
    <div class="grid-2col grid-2col--img-right">

      <div class="col-text">
        <span class="overline">Cuidado Interdisciplinar</span>
        <h2 id="sec-pesquisa-titulo">Grupo de Pesquisa (i)maturidade masculina</h2>

        <p>
          Espaço voltado a pessoas interessadas em aprofundar o estudo sobre o amadurecimento e o desenvolvimento emocional do homem ao longo da vida, a partir de uma perspectiva interdisciplinar.
        </p>
        <p>
          A proposta busca ampliar a compreensão sobre os desafios, vivências e transformações da jornada masculina, promovendo reflexão, troca de conhecimentos e construção coletiva.
        </p>

        <blockquote>
          "Num setting profissional, dado o comportamento profissional apropriado, o doente pode encontrar uma solução pessoal para problemas complexos da vida emocional e das relações interpessoais; o que fizemos não foi aplicar um tratamento, mas facilitar o crescimento."
          <cite>Donald Winnicott</cite>
        </blockquote>

        <p><strong>Modalidade:</strong> online e gratuito.</p>

        <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Gostaria de participar do Grupo de Pesquisa sobre imaturidade masculina.' ); ?>"
           class="btn-primary"
           target="_blank"
           rel="noopener noreferrer">
          Participar →
        </a>
      </div>

      <div class="col-img">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/cuidado.png' ); ?>"
          alt="Grupo de Pesquisa (i)maturidade masculina"
          width="560"
          height="520"
          loading="lazy"
        >
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     SEÇÃO 7 — FAQ
     Bloco: 2 colunas | texto esquerda (sticky) | accordion direita
     Referência: screenshot/Mindwise Psychology Counseling Template Preview (3).png — FAQ
============================================================ -->
<section class="section section--white section--divider-top" aria-labelledby="sec-faq-titulo">
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
            <span class="faq-question-text">Como funciona a sessão inicial?</span>
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
            <span class="faq-question-text">As sessões são online?</span>
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
            <span class="faq-question-text">Qual é o valor das sessões individuais?</span>
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
            <span class="faq-question-text">O Grupo Terapêutico para Homens é realmente gratuito?</span>
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
     SEÇÃO 8 — CTA FINAL
     Fundo: --color-bg-footer
============================================================ -->
<section class="section-cta" aria-label="Citação de Donald Winnicott">
  <div class="container">

    <blockquote>
      "Faço análise porque é do que o paciente necessita. Se o paciente não necessita de análise, então faço alguma outra coisa."
      <cite>Donald Winnicott</cite>
    </blockquote>

  </div>
</section>


<!-- WhatsApp flutuante -->
<a class="whatsapp-float" href="#" aria-label="Conversar pelo WhatsApp">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
  </svg>
</a>

<?php get_footer(); ?>

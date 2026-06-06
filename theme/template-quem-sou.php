<?php
/**
 * Template Name: Quem Sou
 *
 * Página Quem Sou — Rogério Paulo | Psicoterapia & Psicanálise
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
     Referência: screenshot/Mindwise Psychology Counseling Template Preview (1).png — page hero
============================================================ -->
<section class="page-hero" aria-label="Quem é Rogério Paulo">
  <div class="container">

    <span class="overline" style="color: var(--color-primary-mid);">Quem Sou</span>
    <h1>O Homem, o Psicólogo e o Psicanalista.</h1>
    <p class="lead">
      Cearense, homem 40+, filho, amigo, marido, psicólogo, terapeuta e analista winnicottiano, fundador do Instituto Indivíduo Saudável (IS). Atravessando a segunda metade da vida tentando viver de forma autêntica, conectado comigo mesmo, com o outro e com a natureza.
    </p>

  </div>
</section>


<!-- ============================================================
     SEÇÃO 2 — O HOMEM
     Bloco: 2 colunas | texto esquerda | foto direita
============================================================ -->
<section class="section section--white" aria-labelledby="sec-homem-titulo">
  <div class="container">
    <div class="grid-2col grid-2col--img-right">

      <div class="col-text">
        <span class="overline">Pessoa</span>
        <h2 id="sec-homem-titulo">O Homem</h2>

        <p>
          Sou um homem paradoxal: sinto-me seguro naquilo que já é conhecido, mas continuo fazendo mudanças ao longo da vida. Tenho compreendido que uma vida que vale a pena ser vivida envolve um processo constante de transformação e, ao mesmo tempo, uma continuidade na experiência de ser quem sou. Mesmo quando uma parte de mim insiste em se definir pelo que faz, sigo aprendendo a valorizar quem sou para além das realizações, dos papéis e das responsabilidades que assumo.
        </p>
        <p>
          Minha história de vida, assim como minha trajetória na Psicologia, é marcada por mudanças, encontros e recomeços. Em determinado momento, deixei um cargo de gerência em um shopping em Fortaleza e iniciei uma nova etapa como estagiário em um banco público, movido pelo desejo de seguir carreira no serviço público. Porém, em 2007, durante esse período de transição, vivi um encontro profundamente curativo e transformador com Jesus, uma experiência que redefiniu meus planos, ampliou minha compreensão sobre a vida e mudou significativamente a direção da minha caminhada.
        </p>
        <p>
          Após um intenso processo de reflexão sobre a vida que desejava viver, comecei a caminhar de forma mais intencional ao lado de pessoas, especialmente de outros homens, em experiências de cuidado mútuo, crescimento humano e construção de vínculos mais autênticos. Com o tempo, percebi que essa caminhada havia começado muito antes.
        </p>
        <p>
          Desde 1997, ainda na adolescência, mesmo sem compreender plenamente o que fazia, já participava de experiências de cuidado individual, coletivo e comunitário, movido pelo desejo genuíno de ajudar pessoas em seus processos de desenvolvimento. Sem perceber, algo essencial já acontecia dentro de mim: a necessidade de integrar quem sou, aquilo em que acredito e o que poderia oferecer para cuidar e ajudar o outro.
        </p>
        <p>
          Foi nesse recomeço, já com quase 30 anos de idade, durante a graduação em Psicologia e no meu próprio processo terapêutico e analítico, que algo importante se consolidou em minha trajetória. Ao concluir a graduação, em 2017, tomei uma decisão que ultrapassava a escolha de uma profissão: continuar construindo uma vida mais saudável, criativa e real. Minha história me conduziu à Psicologia não apenas pelos estudos, mas também pelos encontros, pelas crises, pelos vínculos e pelas perguntas complexas que não cabem em respostas rápidas.
        </p>
        <p>
          Hoje continuo essa caminhada cultivando práticas de autocuidado que fazem sentido para mim. Antes de ser um profissional, sou um ser humano em constante processo de transformação, aprendizado e amadurecimento. Acredito que cuidado cura e que amadurecer não significa chegar a um lugar pronto, mas permanecer aberto ao crescimento, às mudanças.
        </p>

        <blockquote>
          "Após ser — fazer e deixar-se fazer. Mas ser, antes de tudo."
          <cite>Donald Winnicott</cite>
        </blockquote>

        <div class="btn-group">
          <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Gostaria de conversar com você.' ); ?>"
             class="btn-primary"
             target="_blank"
             rel="noopener noreferrer">
            Fale comigo →
          </a>
        </div>
      </div>

      <div class="col-img">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/o-homem.avif' ); ?>"
          alt="Rogério Paulo"
          width="560"
          height="520"
          loading="lazy"
        >
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     SEÇÃO 3 — O PSICÓLOGO
     Bloco: 2 colunas | foto esquerda | lista direita
     Fundo: --color-bg-section
============================================================ -->
<section class="section section--alt" aria-labelledby="sec-psicologo-titulo"
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
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/o-psicologo.avif' ); ?>"
          alt="Rogério Paulo — psicólogo"
          width="560"
          height="520"
          loading="lazy"
        >
      </div>

      <div class="col-text">
        <span class="overline">Formação</span>
        <h2 id="sec-psicologo-titulo">O Psicólogo</h2>

        <p>
          Pesquisador e psicoterapeuta voluntário, Rogério construiu sua formação em algumas das principais instituições de psicologia do Brasil.
        </p>

        <ul class="curriculum-list" style="margin-top: var(--space-4);">
          <li>Pesquisador e psicoterapeuta voluntário no projeto APOIAR Online — Laboratório de Saúde Mental e Psicologia Clínica Social do Instituto de Psicologia da USP (2021–2023)</li>
          <li>Pesquisador e psicólogo social — precursor do processo de extensão no Laboratório de Relações Interpessoais (LABRI) do Departamento de Psicologia da UFC (2018–2021)</li>
          <li>Especializado em Psicologia em Saúde pelo Conselho Federal de Psicologia (2021)</li>
          <li>Psicólogo Clínico e Social voluntário na Fundação Batista Geral — FMC (2017–2023)</li>
          <li>Pesquisador no Instituto Primeira Infância (IPBIN) — parceria internacional entre a Faculdade de Medicina da UFC e a Universidade de Quebec à Montreal (2018–2019)</li>
          <li>Membro do Grupo de Estudos sobre a Abordagem Pikler na Faculdade de Educação da UFC (2016–2019)</li>
          <li>Psicólogo Social na Secretaria de Proteção Social do Governo do Estado do Ceará (2017–2019)</li>
          <li>Membro do Núcleo de Estudos Aplicados: Direito, Infância e Justiça — NUDEJS da Faculdade de Direito da UFC (2019)</li>
          <li>Psicólogo graduado pelo Centro Universitário Unifanor Wyden (2017)</li>
        </ul>

        <div class="btn-group" style="margin-top: var(--space-4);">
          <a href="<?php echo esc_url( home_url( '/o-que-faco' ) ); ?>" class="btn-secondary">
            Saiba mais →
          </a>
          <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn-secondary">
            Leia as cartas →
          </a>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     SEÇÃO 4 — O PSICANALISTA
     Bloco: 2 colunas | lista esquerda | foto direita
============================================================ -->
<section class="section section--white" aria-labelledby="sec-psicanalista-titulo">
  <div class="container">
    <div class="grid-2col grid-2col--img-right">

      <div class="col-text">
        <span class="overline">Psicanálise</span>
        <h2 id="sec-psicanalista-titulo">O Psicanalista</h2>

        <p>
          Na psicanálise, Rogério encontrou a abordagem que integra sua prática clínica e sua pesquisa acadêmica — a teoria winnicottiana do amadurecimento emocional.
        </p>

        <ul class="curriculum-list" style="margin-top: var(--space-4);">
          <li>Pesquisador no Laboratório de Política, Comportamento e Mídia — LABÔ na PUC-SP, grupo de pesquisa "A Crise do Amadurecimento na Contemporaneidade" (2025)</li>
          <li>Coordenador do Grupo de Estudos em Psicanálise Winnicottiana "Amadurecimento Pessoal" (2024–2025)</li>
          <li>Membro do Grupo de Estudos em Winnicott, coordenado por Ives Fernando Melo (PUC-SP, 2023)</li>
          <li>Membro do Grupo de Estudos "Natureza Humana — Estudos Winnicottianos", coordenado por Renata da Silva Coelho (2021–2023)</li>
          <li>Membro do Grupo de Estudo "Espaço Transicional Winnicott" (IWF Fortaleza), coordenado por Denie Silva Thé (2020–2022)</li>
          <li>Membro do grupo de estudo "Pensamento Winnicottiano", coordenado pelo psicanalista Davy Bogomoletz (in memoriam) (2016–2017)</li>
          <li>Membro do "Grupo de Estudos sobre Pensamento de Winnicott — GSPWIN", coordenado pela psicóloga e psicanalista Lina Schlachter (2013–2014)</li>
        </ul>
      </div>

      <div class="col-img">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/o-psicanalista.png' ); ?>"
          alt="Rogério Paulo — psicanalista"
          width="560"
          height="520"
          loading="lazy"
        >
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     SEÇÃO 5 — CTA FINAL
     Fundo: --color-bg-footer
============================================================ -->
<section class="section-cta" aria-labelledby="sec-cta-quem-sou-titulo">
  <div class="container">

    <h2 id="sec-cta-quem-sou-titulo">Vamos conversar?</h2>

    <p>
      Se algo do que você leu aqui fez sentido — seja a trajetória, a abordagem ou o cuidado que busco ter — talvez seja hora de marcarmos uma conversa.
    </p>

    <div style="text-align: center;">
      <a href="https://wa.me/5511915713774?text=<?php echo rawurlencode( 'Olá, Rogério! Gostaria de agendar uma sessão inicial.' ); ?>"
         class="btn-primary btn-lg"
         target="_blank"
         rel="noopener noreferrer">
        Agendar sessão inicial →
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

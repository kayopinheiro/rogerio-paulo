# SPEC.md — Site Rogério Paulo
## Psicoterapia & Psicanálise

**Plataforma:** WordPress + Hello Elementor (tema filho)
**Objetivo principal:** Conversão para agendamento de sessão
**Público:** Homens adultos (30–55 anos) buscando psicoterapia online, amadurecimento emocional e saúde psíquica

---

## Antes de Começar

1. Leia `instructions/CLAUDE.md` — regras da sessão
2. Leia `instructions/STYLEGUIDE.md` — cores, tipografia, espaçamentos
3. Liste `assets/` — imagens e logo disponíveis
4. Liste `screenshot/` — prints de referência visual (MindWise)
5. Liste `theme/css/` — arquivos CSS já gerados
6. Desenvolva uma seção por vez, na ordem listada neste documento

---

## Fonte de Verdade

| O quê | Onde buscar |
|---|---|
| Layout e hierarquia visual | `screenshot/` + este SPEC.md |
| Cores (hex exatos) | `instructions/STYLEGUIDE.md` |
| Tipografia (tamanhos, pesos) | `instructions/STYLEGUIDE.md` |
| Logos e imagens | `assets/` |
| Copy (textos) | Este SPEC.md — seção de cada página |
| Tags HTML (h1, h2, p...) | Este SPEC.md — tag antes de cada texto |

---

## Estrutura de Arquivos do Projeto

```
site-rogerio-paulo/
│
├── instructions/
│   ├── CLAUDE.md
│   ├── SPEC.md                  ← este arquivo
│   ├── STYLEGUIDE.md
│   └── styleguide.html
│
├── assets/
│   ├── logo.svg
│   ├── foto-rogerio-hero.jpg
│   ├── foto-rogerio-psicologo.jpg
│   ├── foto-rogerio-psicanalista.jpg
│   ├── foto-grupo.jpg
│   └── [demais imagens]
│
├── screenshot/
│   ├── Mindwise Psychology Counseling Template Preview (1).png
│   ├── Mindwise Psychology Counseling Template Preview (2).png
│   ├── Mindwise Psychology Counseling Template Preview (3).png
│   ├── Mindwise Psychology Counseling Template Preview (4).png
│   ├── Mindwise Psychology Counseling Template Preview (5).png
│   ├── Mindwise Psychology Counseling Template Preview (6).png
│   ├── Mindwise Psychology Template Preview.png
│   ├── screencapture-...-11_41_34.png
│   └── screencapture-...-11_43_47.png
│
└── theme/                       ← tema filho — sobe pro WordPress
    ├── style.css
    ├── functions.php
    ├── css/
    │   ├── variables.css
    │   ├── base.css
    │   ├── components.css
    │   └── layout.css
    └── js/
        └── script.js
```

---

## Arquitetura de Páginas

| Slug | Template WordPress |
|---|---|
| `/` | template-home.php |
| `/quem-sou` | template-quem-sou.php |
| `/o-que-faco` | template-o-que-faco.php |
| `/publicacoes` | template-publicacoes.php |
| `/blog` | template-blog.php |
| `/obrigado` | template-obrigado.php |

---

## Componentes Globais

### Header (todas as páginas)
- Logo — `assets/logo.svg` — esquerda
- Nav — centro: `Boas-vindas | Quem Sou | O Que Faço | Publicações | Blog`
- Botão — direita: `Agendar sessão` — estilo `.btn-primary`
- Scroll: `background: transparent` → `background: #fff + box-shadow` ao rolar
- Mobile: menu hamburguer

### Footer (todas as páginas)
- Logo Rogério Paulo
- `[nav]` Boas-vindas | Quem Sou | O Que Faço | Publicações | Blog
- `p` 11 91571 3774
- `p` rogeriopaulopsi@gmail.com
- `p` Av. Paulista 1106, sala 01, Bela Vista, São Paulo-SP CEP 01310914
- `small` © 2026 ANTONIO ROGERIO PAULO DE SOUSA LTDA — CNPJ 57.886.734/0001-89

### WhatsApp Flutuante
- `position: fixed` | canto inferior direito | `z-index: 9999`
- Presente em todas as páginas

---

---

## PÁGINA 1 — HOME `/`

`meta title` Rogério Paulo | Psicólogo e Psicanalista Online — Psicanálise Winnicottiana
`meta description` Psicólogo e psicanalista online especializado em saúde do homem e amadurecimento emocional. Consultas individuais e grupos terapêuticos. Agende sua sessão.
`slug` /
`template` template-home.php

---

### SEÇÃO 1 — Hero

**Bloco:** Full-width | imagem de fundo `assets/foto-rogerio-hero.jpg` + overlay escuro
**Referência visual:** `screenshot/Mindwise Psychology Template Preview.png` — seção hero

`h1` Você chegou até aqui por algum motivo.

`p.lead` Algo dentro de você pede escuta. Este é um espaço seguro para cuidar de si de forma autêntica, profunda e real.

`button.btn-primary` Agendar minha sessão →

`a.btn-link` Quero saber mais sobre o Rogério

---

### SEÇÃO 2 — Apresentação Rápida

**Bloco:** 2 colunas | foto esquerda `assets/foto-rogerio-hero.jpg` | texto direita
**Referência visual:** `screenshot/Mindwise Psychology Counseling Template Preview (1).png` — seção about

`h2` Olá, sou Rogério Paulo.

`p` Sou cearense, 40+, psicólogo e psicanalista com mais de 10 anos de experiência. Trabalho com homens e mulheres adultos online, com foco na psicanálise winnicottiana — uma abordagem que valoriza o amadurecimento emocional e a escuta profunda do ser humano.

`p` Minha prática parte de um lugar simples: acredito que você só consegue se cuidar de verdade na relação com alguém de forma autêntica. Na sessão inicial, você será recebido com cuidado e presença.

`a.btn-link` Conheça minha trajetória → → link `/quem-sou`

---

### SEÇÃO 3 — Serviços (3 cards)

**Bloco:** Grid 3 colunas
**Referência visual:** `screenshot/Mindwise Psychology Counseling Template Preview (1).png` — seção services

`h2` Por onde você quer começar?

**Card 1**
`h3` Terapia e Análise Online
`p` Sessões individuais com escuta ativa, diagnóstico e acompanhamento psicanalítico. Um espaço só seu.
`a.btn-link` Saiba mais → → link `/o-que-faco#terapia`

**Card 2**
`h3` Grupo Terapêutico para Homens
`p` Um espaço seguro para refletir sobre masculinidade, emoções, paternidade e relações. Gratuito e com vagas limitadas.
`a.btn-link` Saiba mais → → link `/o-que-faco#grupo-homens`

**Card 3**
`h3` Grupo de Estudos Winnicottiano
`p` Para profissionais e estudantes da saúde. Discussões sobre psicanálise winnicottiana e amadurecimento pessoal.
`a.btn-link` Saiba mais → → link `/o-que-faco#grupo-estudos`

---

### SEÇÃO 4 — Citação

**Bloco:** Full-width | fundo `--color-bg-footer`

`blockquote` "A vida de um indivíduo saudável é caracterizada tanto por medos, sentimentos conflituosos, dúvidas e frustrações como por características positivas."
`cite` Donald Winnicott

`p` É daqui que trabalhamos — da vida real, não de uma ideia idealizada de saúde.

---

### SEÇÃO 5 — Publicações em Destaque

**Bloco:** Grid 3 colunas | loop WordPress CPT `publicacoes` limit 3
**Referência visual:** `screenshot/Mindwise Psychology Counseling Template Preview (3).png` — blog section

`h2` Pesquisa e Reflexão

`p` Além da clínica, Rogério é pesquisador e autor de capítulos em livros sobre psicanálise winnicottiana.

Por card: `img` capa | `h3` título | `button` Baixar ou Comprar

`a.btn-link` Ver todas as publicações → → link `/publicacoes`

---

### SEÇÃO 6 — Blog (Posts Recentes)

**Bloco:** Grid 3 colunas | loop WordPress posts limit 3

`h2` Reflexões sobre saúde mental masculina

`p` Textos que nascem da prática clínica e do cotidiano do homem contemporâneo.

Por card: `img` | `h3` título | `p` excerpt | `a.btn-link` Ler artigo →

`a.btn-link` Ler todos os artigos → → link `/blog`

---

### SEÇÃO 7 — CTA Final

**Bloco:** Full-width | fundo `--color-bg-footer`
**Referência visual:** `screenshot/Mindwise Psychology Counseling Template Preview (1).png` — CTA section

`h2` Pronto para dar o próximo passo?

`p` A construção da relação terapêutica começa já na primeira sessão. Agende agora e venha descobrir o que é possível quando você decide se cuidar de verdade.

`button.btn-primary` Agendar minha sessão →

---

---

## PÁGINA 2 — QUEM SOU `/quem-sou`

`meta title` Quem Sou | Rogério Paulo — Psicólogo e Psicanalista em São Paulo
`meta description` Conheça a trajetória de Rogério Paulo: psicólogo, psicanalista e pesquisador especializado em saúde do homem e psicanálise winnicottiana.
`slug` /quem-sou
`template` template-quem-sou.php

---

### SEÇÃO 1 — Hero

**Bloco:** Full-width | imagem `assets/foto-grupo.jpg` + overlay
**Referência visual:** `screenshot/Mindwise Psychology Counseling Template Preview (1).png` — page hero banner

`h1` O Homem, o Psicólogo e o Psicanalista.

`p.lead` Cearense, 40+, atravessando a segunda metade da vida com o desejo sincero de cultivar uma existência mais saudável, autêntica e conectada com o essencial.

---

### SEÇÃO 2 — O Homem

**Bloco:** 2 colunas | texto esquerda | foto direita `assets/foto-rogerio-hero.jpg`

`h2` O Homem

`p` Além do consultório, Rogério vive relações de cuidado mútuo com homens de todo o Brasil desde 2007 — em encontros individuais, no Grupo Terapêutico de Homens e com amigos pelo mundo. Participa de grupos de autoconhecimento como jiu-jítsu, corrida e meditação.

`p` Anualmente, participa do curso de formação "Calibrando Âncoras" (Cultivando Homens Maduros), promovido pela Ilumne Inspiração — experiência significativa para seu próprio amadurecimento emocional e espiritual.

`p` Exerce trabalho voluntário há mais de 25 anos. Iniciou ainda na adolescência, em 1999, tendo experiência com crianças, adolescentes, adultos e idosos.

`blockquote` "Antes ser — fazer e deixar de ser fazer. Mas ser, antes de tudo."
`cite` Donald Winnicott

`button.btn-primary` Fale comigo →

---

### SEÇÃO 3 — O Psicólogo

**Bloco:** 2 colunas | foto esquerda `assets/foto-rogerio-psicologo.jpg` | lista direita
**Fundo:** `--color-bg-section`

`h2` O Psicólogo

`p` Pesquisador e psicoterapeuta voluntário, Rogério construiu sua formação em algumas das principais instituições de psicologia do Brasil.

`ul`
- Pesquisador e psicoterapeuta voluntário no projeto APOIAR Online — Laboratório de Saúde Mental e Psicologia Clínica Social do Instituto de Psicologia da USP (2021–2023)
- Pesquisador e psicólogo social — precursor do processo de extensão no Laboratório de Relações Interpessoais (LABRI) do Departamento de Psicologia da UFC (2018–2021)
- Especializado em Psicologia em Saúde pelo Conselho Federal de Psicologia (2021)
- Psicólogo Clínico e Social voluntário na Fundação Batista Geral — FMC (2017–2023)
- Pesquisador no Instituto Primeira Infância (IPBIN) — parceria internacional entre a Faculdade de Medicina da UFC e a Universidade de Quebec à Montreal (2018–2019)
- Membro do Grupo de Estudos sobre a Abordagem Pikler na Faculdade de Educação da UFC (2016–2019)
- Psicólogo Social na Secretaria de Proteção Social do Governo do Estado do Ceará (2017–2019)
- Membro do Núcleo de Estudos Aplicados: Direito, Infância e Justiça — NUDEJS da Faculdade de Direito da UFC (2019)
- Psicólogo graduado pelo Centro Universitário Unifanor Wyden (2017)

`a.btn-secondary` Saiba mais →
`a.btn-secondary` Leia as cartas →

---

### SEÇÃO 4 — O Psicanalista

**Bloco:** 2 colunas | lista esquerda | foto direita `assets/foto-rogerio-psicanalista.jpg`

`h2` O Psicanalista

`p` Na psicanálise, Rogério encontrou a abordagem que integra sua prática clínica e sua pesquisa acadêmica — a teoria winnicottiana do amadurecimento emocional.

`ul`
- Pesquisador no Laboratório de Política, Comportamento e Mídia — LABÔ na PUC-SP, grupo de pesquisa "A Crise do Amadurecimento na Contemporaneidade" (2025)
- Coordenador do Grupo de Estudos em Psicanálise Winnicottiana "Amadurecimento Pessoal" (2024–2025)
- Membro do Grupo de Estudos em Winnicott, coordenado por Ives Fernando Melo (PUC-SP, 2023)
- Membro do Grupo de Estudos "Natureza Humana — Estudos Winnicottianos", coordenado por Renata da Silva Coelho (2021–2023)
- Membro do Grupo de Estudo "Espaço Transicional Winnicott" (IWF Fortaleza), coordenado por Denie Silva Thé (2020–2022)
- Membro do grupo de estudo "Pensamento Winnicottiano", coordenado pelo psicanalista Davy Bogomoletz (in memoriam) (2016–2017)
- Membro do "Grupo de Estudos sobre Pensamento de Winnicott — GSPWIN", coordenado pela psicóloga e psicanalista Lina Schlachter (2013–2014)

---

### SEÇÃO 5 — CTA Final

**Bloco:** Full-width | fundo `--color-bg-footer`

`h2` Vamos conversar?

`p` Se algo do que você leu aqui fez sentido — seja a trajetória, a abordagem ou o cuidado que busco ter — talvez seja hora de marcarmos uma conversa.

`button.btn-primary` Agendar sessão inicial →
`a.btn-ghost` WhatsApp →

---

---

## PÁGINA 3 — O QUE FAÇO `/o-que-faco`

`meta title` O Que Faço | Terapia Online, Grupo Terapêutico e Grupo de Estudos — Rogério Paulo
`meta description` Psicoterapia individual online, Grupo Terapêutico para Homens e Grupo de Estudos Winnicottiano. Conheça os serviços de Rogério Paulo.
`slug` /o-que-faco
`template` template-o-que-faco.php

---

### SEÇÃO 1 — Hero

**Bloco:** Full-width simples | fundo `--color-bg-footer`
**Referência visual:** `screenshot/Mindwise Psychology Counseling Template Preview (2).png` — page hero

`h1` Como posso caminhar com você.

`p.lead` Seja em sessões individuais, em grupos terapêuticos ou em espaços de estudo — o foco é sempre o mesmo: cuidar do amadurecimento emocional com responsabilidade e presença.

---

### SEÇÃO 2 — Terapia e Análise Online

**Âncora:** `id="terapia"`
**Bloco:** 2 colunas | texto esquerda | foto direita
**Referência visual:** `screenshot/Mindwise Psychology Counseling Template Preview (2).png` — appointment section

`h2` Terapia e Análise Online

`p` A psicoterapia é um tratamento clínico fundamentado em métodos psicológicos que buscam promover saúde mental, aliviar sofrimentos emocionais e cuidar de transtornos psíquicos. Trata-se de um processo de escuta, compreensão e intervenção.

`p` A psicanálise, por sua vez, não se limita à resolução de sintomas. É uma proposta de investigação profunda de si mesmo — das dimensões conscientes e inconscientes da experiência — permitindo ao indivíduo reconhecer seus conflitos internos, elaborar sua história e viver de forma mais integrada.

`p` A terapia e análise que realizo estão ancoradas na psicanálise winnicottiana, abordagem que valoriza o ambiente relacional como fator essencial para o amadurecimento emocional. Trata-se de um trabalho cuidadoso, sustentado por uma escuta ética, acolhedora e comprometida com o desenvolvimento da saúde psíquica em sua totalidade.

`blockquote` "Faço análise porque é do que o paciente necessita. Se o paciente não necessita de análise, então faço alguma outra coisa."
`cite` Donald Winnicott

`button.btn-primary` Agendar uma sessão →

---

### SEÇÃO 3 — Grupo de Estudos Winnicottiano

**Âncora:** `id="grupo-estudos"`
**Bloco:** 2 colunas invertidas | foto esquerda | texto direita
**Fundo:** `--color-bg-section`

`h2` Grupo de Estudos Winnicottiano "Amadurecimento Pessoal"

`p` Um espaço virtual de aprendizado, troca e reflexão. Destinado a profissionais e estudantes das áreas de saúde, educação, direito, medicina ou qualquer pessoa envolvida com o cuidado de pessoas.

`p` Em um ambiente acolhedor e estimulante, discutimos semanalmente temas fundamentais a partir da psicanálise winnicottiana, promovendo aprofundamento teórico e prático acerca do amadurecimento pessoal e profissional do ser humano.

`h3` Como funciona

`ol`
1. Encontros online quinzenais com duração de 1h30min — o grupo se reúne uma vez por semana
2. Material de estudo organizado: você recebe o cronograma com os textos selecionados ou o livro que será trabalhado
3. Valor Mensal: R$ 150,00

`blockquote` "A única companhia que tenho ao explorar o território desconhecido de um novo caso é a teoria que levo comigo e que tem se tornado parte de mim."
`cite` Donald Winnicott

`button.btn-primary` Fazer inscrição →

---

### SEÇÃO 4 — Grupo Terapêutico para Homens

**Âncora:** `id="grupo-homens"`
**Bloco:** Full-width | imagem de fundo `assets/foto-grupo.jpg` + overlay
**Referência visual:** `screenshot/Mindwise Psychology Counseling Template Preview (2).png` — approach section

`h2` Grupo Terapêutico para Homens

`p` Vivemos em uma cultura que, por muito tempo, ensinou os homens a esconder suas emoções, resolver tudo sozinhos e não demonstrar fragilidade. Essa lógica tem gerado solidão, adoecimento psíquico e dificuldades de relacionamento — consigo mesmo e com os outros.

`p` O Grupo Terapêutico para Homens é um espaço seguro e confidencial de escuta, acolhimento e partilha. Um encontro entre homens dispostos a refletir sobre suas vivências, afetos, dores, masculinidades, paternidades, sexualidades, relações familiares, trabalho, espiritualidade e sentido de vida.

`p` Através do vínculo e da troca de experiências com outros homens, o grupo favorece o autoconhecimento, o amadurecimento emocional e a construção de uma nova forma de estar no mundo — mais íntegra, saudável e verdadeira.

`h3` Como funciona

`ol`
1. Encontros Online (1º sábado) e Presencial (3º sábado) das 10h às 11h30min
2. Para participar, faça inscrição no link abaixo para receber todas as informações
3. Gratuito — vagas limitadas

`button.btn-primary` Inscrição gratuita →

---

### SEÇÃO 5 — FAQ

**Bloco:** Acordeão (accordion) | 2 colunas: texto esquerda | perguntas direita
**Referência visual:** `screenshot/Mindwise Psychology Counseling Template Preview (3).png` — FAQ section

`h2` Perguntas frequentes

`h3` Como funciona a sessão inicial?
`p` Na primeira sessão busco compreender sua história, suas vivências, dores e esperanças. É um momento de escuta ativa e acolhedora. Ao final, apresento minha abordagem e avaliamos juntos a melhor forma de seguirmos.

`h3` As sessões são online?
`p` Sim, atendo exclusivamente online — o que permite que você se conecte de qualquer lugar do Brasil ou do exterior com segurança e conforto.

`h3` Qual é o valor das sessões individuais?
`p` O valor é informado na sessão inicial. Em caso de necessidade, emito nota fiscal para reembolso por convênios.

`h3` O Grupo Terapêutico para Homens é realmente gratuito?
`p` Sim, totalmente gratuito. As vagas são limitadas — faça sua inscrição para garantir seu lugar.

---

### SEÇÃO 6 — CTA Final

**Bloco:** Full-width | fundo `--color-bg-footer`

`h2` Pronto para dar o próximo passo?

`p` Não importa por onde você queira começar — o que importa é que você escolheu se cuidar.

`button.btn-primary` Agendar sessão individual →
`a.btn-ghost` Entrar no grupo de homens →

---

---

## PÁGINA 4 — PUBLICAÇÕES `/publicacoes`

`meta title` Publicações | Rogério Paulo — Psicólogo e Pesquisador Winnicottiano
`meta description` Capítulos de livros e produções científicas de Rogério Paulo sobre psicanálise winnicottiana, saúde mental masculina e amadurecimento emocional.
`slug` /publicacoes
`template` template-publicacoes.php

---

### SEÇÃO 1 — Hero

**Bloco:** Full-width | fundo `--color-bg-footer`

`h1` Pesquisa, escrita e reflexão.

`p.lead` Além da clínica, Rogério é pesquisador e autor de capítulos em obras coletivas sobre psicanálise winnicottiana, saúde do homem e amadurecimento emocional.

---

### SEÇÃO 2 — Grid de Publicações

**Bloco:** Grid 1 coluna (capa esquerda + texto direita) | loop CPT `publicacoes`

Por item:
`img` capa do livro — `assets/`
`p.ref` referência bibliográfica
`h3` título do capítulo
`p` descrição do capítulo
`button.btn-primary` Baixar  ou  `button.btn-secondary` Comprar

**Publicações cadastradas:**
1. Reflexões sobre a paternidade na atualidade à luz de Winnicott (p. 179)
2. A perspectiva winnicottiana do indivíduo saudável: possibilidades de cuidado na saúde mental dos homens (p. 369)
3. O homem e a transicionalidade (p. 401)
4. Psicopatologia do TOC: Perspectivas da Psicanálise Winnicottiana (p. 21)
5. O verdadeiro self e bebês prematuros: As Possibilidades do Método Canguru (p. 311)

---

### SEÇÃO 3 — CTA

**Bloco:** Full-width | fundo `--color-bg-footer`

`h2` Quer conhecer mais sobre a abordagem winnicottiana?

`p` Conheça os grupos de estudo e aprofunde-se nos fundamentos teóricos que guiam o trabalho clínico de Rogério Paulo.

`button.btn-primary` Conhecer o Grupo de Estudos → → link `/o-que-faco#grupo-estudos`

---

---

## PÁGINA 5 — BLOG `/blog`

`meta title` Blog | Rogério Paulo — Saúde Mental Masculina e Psicanálise
`meta description` Textos sobre saúde mental masculina, masculinidade saudável, psicanálise winnicottiana e amadurecimento emocional por Rogério Paulo.
`slug` /blog
`template` template-blog.php

---

### SEÇÃO 1 — Hero

**Bloco:** Full-width | fundo `--color-bg-footer`
**Referência visual:** `screenshot/Mindwise Psychology Counseling Template Preview (5).png` — blog hero

`h1` Reflexões sobre o homem e a vida interior.

`p.lead` Textos que nascem da prática clínica, da pesquisa e do cotidiano do homem contemporâneo. Sobre masculinidade, paternidade, emoções e saúde psíquica.

---

### SEÇÃO 2 — Grid de Posts

**Bloco:** Grid 3 colunas | loop WordPress posts | paginação
**Referência visual:** `screenshot/Mindwise Psychology Counseling Template Preview (5).png` — blog grid

Por card:
`img` imagem destacada
`span.tag` categoria
`h3` título do post
`p` excerpt (2 linhas)
`a.btn-link` Ler artigo →

**Categorias:** Masculinidade | Winnicott | Saúde Mental | Paternidade | Psicanálise

**Posts existentes:**
- Masculinidade Saudável
- Produtividade Masculina
- Responsabilidade Masculina
- Identidade em Winnicott
- Terapeuta Winnicottiano
- Psicoterapia & Psicanálise Winnicottiana
- Masculinidade em Winnicott
- Sexualidade em Winnicott
- Paternidade em Winnicott

---

### SEÇÃO 3 — Newsletter

**Bloco:** Full-width | fundo `--color-bg-footer`

`h2` Receba reflexões direto no seu e-mail.

`p` Não é spam. É conteúdo pensado para homens que querem crescer de dentro para fora.

`input` placeholder: Seu melhor e-mail
`button.btn-primary` Quero receber

---

---

## PÁGINA 6 — OBRIGADO `/obrigado`

`meta title` Mensagem Recebida | Rogério Paulo
`slug` /obrigado
`template` template-obrigado.php
`robots` noindex, nofollow — configurar no Yoast SEO

---

### SEÇÃO 1 — Confirmação

**Bloco:** Full-width centralizado | fundo `--color-bg-section`

`h1` Mensagem recebida.

`p` Obrigado por dar esse passo. Em breve entro em contato para conversarmos e agendarmos sua sessão inicial.

`p` Enquanto isso, fique à vontade para conhecer um pouco mais sobre minha abordagem e minha trajetória.

`a.btn-secondary` Conhecer o trabalho → → link `/o-que-faco`
`a.btn-link` Ler o blog → → link `/blog`

---

---

## Custom Post Types WordPress

| CPT | Slug | Campos |
|---|---|---|
| Publicações | `publicacoes` | titulo_capitulo, referencia, descricao, capa (imagem), link_download, link_compra |

---

## Plugins necessários

| Plugin | Função |
|---|---|
| Elementor (free) | Construtor de páginas |
| Yoast SEO | Meta, sitemap, noindex |
| WPForms ou CF7 | Formulário de agendamento |
| Custom Post Type UI | CPT `publicacoes` |

---

## Fluxo de Desenvolvimento

1. `theme/css/variables.css` — primeiro arquivo a criar (colar o `:root` do styleguide)
2. `theme/css/base.css` — reset, body, tipografia
3. `theme/css/components.css` — botões, cards, tags, blockquote
4. `theme/css/layout.css` — navbar, footer, seções, grid
5. `theme/js/script.js` — navbar scroll, WhatsApp, FAQ
6. Páginas: Home → Quem Sou → O Que Faço → Publicações → Blog → Obrigado
7. Cada seção: screenshot → compara com `screenshot/` → corrige → avança

---

## Checklist SEO

- [ ] H1 único por página
- [ ] Meta title ≤ 60 caracteres
- [ ] Meta description ≤ 155 caracteres
- [ ] Alt text em todas as imagens
- [ ] Slug limpo
- [ ] Schema: `LocalBusiness` + `Person` + `MedicalBusiness` na home
- [ ] Open Graph via Yoast
- [ ] `/obrigado` noindex no Yoast
- [ ] Sitemap.xml ativo

---

*Versão: 1.1 — Março 2026*
*Ver também: `instructions/CLAUDE.md` e `instructions/STYLEGUIDE.md`*

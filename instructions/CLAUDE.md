# CLAUDE.md — Rogério Paulo | Psicoterapia & Psicanálise

Este arquivo é lido automaticamente pelo Claude Code antes de qualquer ação.
Siga todas as instruções abaixo em toda sessão, sem exceção.

---

## Estrutura Real do Projeto

```
site-rogerio-paulo/              ← raiz — você está aqui
│
├── instructions/                ← documentação (não sobe pro WordPress)
│   ├── CLAUDE.md                ← este arquivo
│   ├── SPEC.md                  ← estrutura, copy e hierarquia HTML
│   ├── STYLEGUIDE.md            ← tokens de design (cores, tipografia)
│   └── styleguide.html          ← styleguide visual (abre no browser)
│
├── assets/                      ← imagens e logo do cliente
│
├── screenshot/                  ← prints de referência visual (MindWise)
│
└── theme/                       ← tema filho Hello Elementor (sobe pro WP)
    ├── style.css                ← declaração do tema filho
    ├── functions.php            ← carrega estilos e scripts
    ├── css/
    │   ├── variables.css        ← CSS custom properties (:root)
    │   ├── base.css             ← reset, body, tipografia global
    │   ├── components.css       ← botões, cards, tags, blockquote
    │   └── layout.css           ← navbar, footer, seções, grid
    └── js/
        └── script.js            ← navbar scroll, WhatsApp, FAQ accordion
```

---

## Antes de Escrever Qualquer Código

1. Invoque a skill `frontend-design` antes de escrever qualquer código frontend
2. Leia `instructions/SPEC.md` — estrutura completa de páginas, seções, copy e hierarquia HTML
3. Leia `instructions/STYLEGUIDE.md` — cores, tipografia, espaçamentos e componentes
4. Liste os arquivos em `assets/` para saber quais imagens estão disponíveis
5. Liste os arquivos em `screenshot/` para usar como referência visual por seção

---

## Fonte de Verdade

| O quê | Onde buscar |
|---|---|
| Estrutura de páginas e copy | `instructions/SPEC.md` |
| Cores, tipografia, tokens | `instructions/STYLEGUIDE.md` |
| Referência visual por seção | `screenshot/` |
| Imagens e logo | `assets/` |
| Código CSS gerado | `theme/css/` |
| Código JS gerado | `theme/js/script.js` |

---

## Stack do Projeto

- **Plataforma:** WordPress + Hello Elementor (tema filho)
- **CSS:** sempre em `theme/css/` — nunca inline
- **Variáveis:** use sempre `var(--nome)` — nunca hex direto no código
- **JS:** sempre em `theme/js/script.js`
- **Fontes:** apenas as definidas em `instructions/STYLEGUIDE.md`
- **Imagens ausentes:** use `https://placehold.co/` com as dimensões corretas

---

## Fluxo de Desenvolvimento (Screenshot Loop)

1. Sirva o projeto localmente antes de começar
2. Desenvolva **uma seção por vez**, na ordem definida em `instructions/SPEC.md`
3. Após cada seção concluída:
   - Tire screenshot: `node screenshot.mjs http://localhost:3000 nome-da-secao`
   - Compare com o arquivo correspondente em `screenshot/`
   - Corrija diferenças — mínimo 2 rodadas por seção
4. Só avance para a próxima seção quando estiver aprovada
5. Para elementos animados: não use o screenshot loop — informe e aguarde feedback manual

---

## Nomenclatura de Screenshots Gerados

Salve sempre no formato: `screenshot/[pagina]-[secao]-v[numero].png`

Exemplos:
- `screenshot/home-hero-v1.png`
- `screenshot/home-hero-v2.png`
- `screenshot/quem-sou-psicologo-v1.png`

Os prints de referência do MindWise já estão em `screenshot/` — não os apague.

---

## Brand Assets

Todas as imagens do cliente estão em `assets/`:
- `assets/logo.svg` — logo principal
- `assets/foto-rogerio-hero.jpg` — foto principal do Rogério
- `assets/foto-rogerio-psicologo.jpg` — foto seção O Psicólogo
- `assets/foto-rogerio-psicanalista.jpg` — foto seção O Psicanalista
- `assets/foto-grupo.jpg` — foto do grupo terapêutico

Se uma imagem não estiver disponível, use `https://placehold.co/` com as dimensões corretas.

---

## Regras de Código

- HTML semântico — use as tags corretas (`h1`, `h2`, `p`, `ul`, `blockquote`, `cite`)
- Apenas um `h1` por página
- Todo elemento clicável deve ter estados `hover`, `focus-visible` e `active`
- Não use `transition-all`
- Não use cores fora de `instructions/STYLEGUIDE.md`
- Não use fontes fora de `instructions/STYLEGUIDE.md`
- Não adicione seções que não estejam em `instructions/SPEC.md`
- Não melhore o design por conta própria — reproduza o que está no SPEC

---

## Regras de Copy

- Use exatamente os textos definidos em `instructions/SPEC.md`
- Preserve as tags HTML indicadas antes de cada texto
- Não altere citações de Winnicott

---

## Componentes Globais (todas as páginas)

- **Header fixo:** logo esquerda | nav centro | botão `Agendar sessão` direita
  - Scroll: fundo transparente → branco sólido + sombra
  - Mobile: menu hamburguer
- **Footer:** logo, nav, contatos, CNPJ
- **WhatsApp flutuante:** `position: fixed`, canto inferior direito, z-index 9999

---

## Deploy

- Desenvolva e teste sempre em **localhost** primeiro
- Só faça commit/push quando eu disser: `"pode commitar"` ou `"push para o GitHub"`
- Nunca faça push automático

---

## Quando Retomar uma Sessão

Se esta é uma nova sessão, comece sempre com:

1. Leia `instructions/CLAUDE.md`
2. Leia `instructions/SPEC.md`
3. Leia `instructions/STYLEGUIDE.md`
4. Liste `assets/` e `screenshot/`
5. Liste `theme/css/` para ver o que já foi gerado
6. Identifique onde paramos e continue da próxima seção pendente

---

*Projeto: Rogério Paulo — Psicoterapia & Psicanálise*
*Stack: WordPress + Hello Elementor (tema filho)*
*Versão: 1.1 — Março 2026*

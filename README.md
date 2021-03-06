# Template para Elucidário.art
- [Elucidário.art (tema)](https://github.com/hgodinho/elucidario-art-tema)
- @version `0.43β`
- @source https://elucidario.art



[ALTERAR VERSAO EM: readme.md, style.css, estilos,css, functions.php]
## `0.43β`
- mudança de url de autor em todos os arquivos (hgod.in)

## `0.42β`
- inversão da ordem de informações da tabela do search.php, agora informa antes o tipo `autor` ou `obra` e depois o nome.

***
## `0.41β`
- mudança no layout do single term ambiente, acréscimo de accordion para organizar melhor as informações.

## `0.40β`
- integração com o VLibras -> `http://vlibras.gov.br/`

## `0.39β`
- acréscimo de thumbnail no layout `search.php`

## `0.38β`
- bug fix no jumbotrom home com imagem da obra do mês que estava com nome do campo errado.

## `0.37β`
- alteração na query de imagens de classificação, para evitar que mostre objetos quebrados logo de cara.
- reorganização do db na parte de classificações para que as classificações fiquem mais claras, acréscimo da hierarquia diretamente no nome. ex: `Objetos Domésticos - Mobiliário`
- adicionada integração com o Google Arts&Culture: adicionado campo nas obras para inserção de url de embed, adicionado o iframe no layout de obras, adicionado iframe no layout da página ambiente para embutir a url de embed da visita virtual

## `0.36β`
- acréscimo de dato estruturado de museu no header.php

## `0.35β`
- acréscimo de the_content() em classificacoes e núcleos

## `0.34β`
- ajuste no layout das taxonomias ambientes

## `0.33β`
- acréscimo de campo de imagem extra na obra para melhorar o crop do jumbotrom obra do mês
- ajuste no layout dos ambientes
- ajuste no footer

## `0.32 β` 
- função `capitular($string, $echo = true)` que capitaliza as primeiras letras de cada palavra com exceção de conjunções, preposições e artigos.
por padrão `$echo = true`, se `$echo = false` então `return`.
- comentei a linha que gerava as letras no alphabetical-pagination mesmo quando elas não continham itens.
- novos parâmetros de ordem nas query das páginas single-elucidario_art-classificacoes e nucleos, esses novos parâmetros procuram por imagens de cada classificação ou núcleo, prezando pela ordem pelo ID 
- mudança nas cores primárias e secundárias.
- acréscimo de css no scss do bootstrap para gerar um underline no link ativo do menu
- omissão do ambiente recepção na lista de ambientes

## `0.31 β`
- mudança de nome para Elucidário.art

## `0.30 β`
- menu de rodape adicionado, com classe css também no estilos.css
- inicio de implementação de formulário de newsletter
- logo da fundação adicionado no header-menu.php
- função que capitaliza os títulos das obras omitindo conjunções, preposições e artigos 
@todo melhorar função de capitalização dos títulos, transformas em função na functions.php e chamar nos templates em que é necessário a conversão das strings.

## `0.29` 
- `!important` na height do jumbotrom
- `exclude` Reserva Técnica da query da página de Ambientes
- Mudança no termo `Acervo` para `Coleção` no single obra e autores

## `0.28.3`
- correção no jumbotrom home 

## `0.28.2`
- shadow no `p class lead` do jumbotrom
- `d-print-none` em elementos no layout obra-single para o layout print ficar mais agradável

## `0.28.1`
- inicio do SEO, com JSON-LD no content-obra.php
- `echo get_site_url()` na badge do menu 

## `0.28`
- melhoria na página ema klabin
- melhoria no jumbotrom da home
- melhoria nas obras relacionadas, que agora é uma função com parametro opcional de query
- mudança no index.php
- o script para copiar informações pertence somente ao modal de copiar informações. assim a função na precisa carregar em todas as páginas, gerando erro no console por não achar as id(s) especificadas na função.
- mudança no visual do back top buttom

## `0.27`
- fix no layout dos cartoes das obras relacionadas que não mostrava o autor

## `0.26`
- layout da page padrão adicionado
- melhorias nas obras relacionados no single-obra
- melhorias no cartão de obras
- melhorias no menu
- melhorias no códigos preparativas para mudança de nome

## `0.25`
- webhook no github adicionado para quando houver novo commit atualizar automaticamente pelo GitHub Updater

## `0.24`
- template para página Ema Klabin 

## `0.23`
- mudança na cor do botão back-to-top
- função de copiar informações no modal-copiar-informacoes.php (ref: https://jsfiddle.net/jfriend00/v9g1x0o6/)
- mudança no tempo do owl-slider
- inicio do template single-wiki_ema-ema-klabin.php @TODO
- mudança no header-archive.php
- ajuste no layout do modal-qr-code.php
- condicional para remover a grade de botoes da obra caso seja visualizada na Home (obra do mês).

## `0.22`
- correção no cabeçalho do tema

## `0.21`
- atualização do cabeçalho do tema no `style.css`

## `0.20`

## `0.19`
- remoção do `PLUGIN_SLUG` do tema. Isso foi uma mudança estratégica ao perceber que a instalação da Wiki utilizando o plugin Multiple Themes geraria um monte de problemas de dificil solução, e que também, poluiria o banco de dados do Site com todas as informações do acervo que seriam acrescentadas na importação. Essa mudança estratégica é importante, pois faz com que a instalação da Wiki seja independente do site, uma nova instalação wordpress no servidor bluehost.  

## `0.18`
- multiplas correções de bugs

## `0.17`
### concluídas
- múltiplas correções de bugs
- adição de novo template para a página Ema Klabin


## `0.16`
### Concluídas
- https://github.com/hgodinho/wiki-ema-template/projects/1#card-22255478
- https://github.com/hgodinho/wiki-ema-template/projects/1#card-22255456
- https://github.com/hgodinho/wiki-ema-template/projects/1#card-22256425

### Em progresso
- https://github.com/hgodinho/wiki-ema-template/projects/1#card-23081224
- https://github.com/hgodinho/wiki-ema-template/projects/1#card-22254886
- https://github.com/hgodinho/wiki-ema-template/projects/1#card-22254879


***
## `0.15`
- templates de busca
- correções

## `0.14`

## `0.13`
### principal
- versão bootstrap 4.3.1
- habilitação de fontes responsíveis
- multiplas correções, ver git log

***
## `0.12`
### principal
- multiplas correções, ver git log

## `0.10`
### principal
- Mudança no bootstrap para poder alterar as variáveis bootstrap usando Sass
> @source <https://hackerthemes.com/kit/>

### changed
- estilos.css
- functions.php
- alphabetical pagination
- searchform.php
- single-wiki_ema-ambientes
- single-wiki_ema-classificacoes
- single-wiki_ema-nucleos
- style.css
- taxonomy-ambientes.php
- taxonomy-autor_az.php
- taxonomy-obra_az.php
- taxonomy-classificao.php
- taxonomy-nucleo.php
- content-obras-no-ambiente.php
- hearder-archive.php


***
## `0.9`

## `0.8`
Padronização dos arquivos e atualização do bootstrap core para 4.3.1

## `0.7`
Some bug fixes.

### added
- template-parts/header/header-archive.php
- template-parts/autor/contet-tabela-autor.php

### changed
- content-campos_clonaveis.php
- content-cartao-obra.php
- content-obra.php
- mudança de lista-autores.php para tabela-autores.php no archive-autores e no taxonomy-autor_az.php
- arruma erro de undefined_index nas páginas de obras e autores single
- archive-autores.php
- archive-obras.php
- function.php
- js/wiki-ema.js
- search.php
- search-form.php
- taxonomy-autor_az.php
- taxonomy-nucleo.php
- taxonomy-obra_az.php
- template-parts/ambiente/content-obras-no-ambiente.php
- template-parts/autor/content-autor.php
- template-parts/autor/content-campos-clonaveis.php
- template-parts/obra/content-campos-clonaveis.php
- template-parts/obra/content-cartao-obra.oho
- template-parts/obra/content-resumo_autor.php


*** 
## `0.6`
### added
- taxonomy-obra_az.php

### changed
- archive-autor.php
- archive-obra.php
- estilos.php
- functions.php
- alphabetical pagination class
- content-lista-autor.php
- header-breadcruumb.php
- header-menu.php

***
## 0.5
### added
- inc/alphabetical-pagination/wp-bootstrap-alphabetical-pagination.php
- taxonomy-autor_az.php

### changed
- archive-autores.php
- functions.php
- single-autores.php
- taxonomy-classificacao.php
- template-parts/autor/content-obras-do-autor.php
- template-parts/autor/content-lista-autor.php
- template-parts/jumbotron-home.php
- single-wiki_ema-nucleos.php
- taxonomy-nucleo.php
- taxonomy-ambiente.php

### removed
- taxonomy-tipo_autor.php
- js/ajax-pagination.js


## 0.4
### added
- query_arquivo_principal() no functions.php
- archive-obras.pgp
- /inc/pagination/wp-bootstrap4.1-pagination.php
- search.php
- searchform.php
- /template-parts/autor/content-lista-autor.php

### changed
- archive-autores.ph
- functions.php
- single-obras.php
- single-wiki_ema-classificacoes.php
- taxonomy-classificacao.php
- /template-parts/ambiente/content-obras-no-ambiente.php
- /template-parts/autor/content-obras-do-autor.php
- /template-parts/header/header-breadcrumb.php
- /template-parts/header/header-menu.php
- /template-parts/obra/content-cartao-obra.php

***
## 0.3
### added
- header-menu.php
- template-parts/carousel/carousel-ambiente.php
- template-parts/ambiente/content-obras-no-ambiente.php
- taxonomy-tipo_ator.php
- taxonomy-nucleo.php
- taxonomy-classificacao.php
- taxonomy-ambiente.php
- single-wiki_ema-nucleos.php
- single-wiki_ema-clasificacoes.php
- single-wiki_ema-ambientes.php
- page-wiki-ema.php // organizar isso
- composer
- apigen.neon
- doc/

### changed
- .gitignore
- css/estilos.css
- functions.php
- header.php
- template-parts/header/header-breadcrumb.php

### removed
- index.php
- archive-autor.php

***
## `0.2`
### added
- owl carousel
- single-autores.php
- template parts do autor
- template parts modal
- template parts header
- template parts obra
- 404.php

### changed
- single-obras.php
- functions.php
- header.php
- css/estilos.css
- index.php
- content-obra.php
- content-obradomes.php para-obra-do-mes.php

### removed
- content-obrasingle.php


## `0.1`
inicio do tema
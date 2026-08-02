# Estudos de PHP

Repositório de estudos com exemplos introdutórios e intermediários de PHP. O conteúdo está organizado em três conjuntos: exercícios do **Curso em Vídeo**, anotações baseadas no **W3Schools** e um **formulário de cadastro** independente.

> Este repositório é uma coleção didática, não uma aplicação única. Cada arquivo ou pequeno grupo de arquivos deve ser estudado separadamente.

## Conteúdo

- [Visão geral](#visão-geral)
- [Requisitos](#requisitos)
- [Como executar](#como-executar)
- [Estrutura do repositório](#estrutura-do-repositório)
- [Trilha Curso em Vídeo](#trilha-curso-em-vídeo)
- [Trilha W3Schools](#trilha-w3schools)
- [Formulário de cadastro](#formulário-de-cadastro)
- [Cuidados ao estudar os exemplos](#cuidados-ao-estudar-os-exemplos)
- [Validação e testes](#validação-e-testes)
- [Como contribuir](#como-contribuir)
- [Licença](#licença)

## Visão geral

O projeto cobre, entre outros assuntos:

- sintaxe, comentários, variáveis, escopo e tipos de dados;
- operadores aritméticos, relacionais, lógicos e ternários;
- condicionais `if`, `else`, `elseif` e `switch`;
- laços `while`, `do...while`, `for` e `foreach`;
- funções, passagem de argumentos, referências e inclusão de arquivos;
- strings, arrays indexados, associativos e multidimensionais;
- formulários, métodos GET e POST, validação e superglobais;
- datas, arquivos, uploads, cookies, sessões, filtros, JSON e exceções;
- callbacks e expressões regulares.

Não há framework, banco de dados, Composer, processo de build ou dependências externas versionadas.

## Requisitos

- PHP 8.x recomendado; muitos exemplos básicos também funcionam em PHP 7.x;
- navegador web;
- terminal para iniciar o servidor embutido do PHP.

Confirme a instalação:

```bash
php --version
```

Se o comando não existir, instale o PHP e adicione o executável à variável `PATH`. Alternativamente, use um ambiente como XAMPP, WampServer ou MAMP e coloque o repositório no diretório servido pela ferramenta.

## Como executar

Na raiz do repositório, inicie o servidor de desenvolvimento:

```bash
php -S localhost:8000
```

Depois acesse no navegador:

- formulário independente: <http://localhost:8000/Forms/>;
- exemplo inicial: <http://localhost:8000/curso_em_video/aula03/01-olamundo.php>;
- índice de uma pasta: `http://localhost:8000/<pasta>/<arquivo>.php`.

O servidor deve permanecer aberto enquanto os exemplos forem usados. Encerre-o com `Ctrl+C`.

### Caminhos com espaços

Vários arquivos em `w3school/` possuem espaços no nome. No navegador, eles podem aparecer codificados como `%20`. Exemplo:

```text
http://localhost:8000/w3school/Advanced/01-%20Date%20and%20Time.php
```

### Execução pelo terminal

Arquivos que apenas imprimem valores e não dependem de HTML, formulário, cabeçalhos HTTP ou superglobais também podem ser executados diretamente:

```bash
php caminho/para/exemplo.php
```

Para os demais, prefira o servidor web.

## Estrutura do repositório

```text
.
├── curso_em_video/       # Exercícios organizados por aula
│   ├── aula03/ ... aula19/
│   └── aulaXX/_css/      # Estilos e imagem de fundo das aulas
├── w3school/
│   ├── tutorial/         # Fundamentos da linguagem
│   ├── Forms/            # Formulários e validação
│   └── Advanced/         # Recursos intermediários/avançados
├── Forms/                # Formulário de cadastro independente
│   ├── index.php
│   ├── process.php
│   └── style.css
├── .gitattributes        # Normalização de arquivos de texto
├── .hintrc               # Configuração de análise de HTML
├── LICENSE               # Licença MIT
└── README.md
```

Atualmente há 127 arquivos PHP e 10 arquivos HTML, além dos estilos e recursos visuais usados pelos exercícios.

## Trilha Curso em Vídeo

Os exemplos em `curso_em_video/` formam uma sequência prática. Em exercícios divididos entre `.html` e `.php`, abra primeiro o formulário HTML; ele envia os dados para o script PHP correspondente.

| Aula | Conteúdo principal |
| --- | --- |
| `aula03` | Primeiro programa e saída com `echo` |
| `aula04` | Variáveis e tipos básicos |
| `aula05` | Operadores e funções matemáticas |
| `aula06` | Atribuição, incremento, referência e variáveis variáveis |
| `aula07` | Operadores relacionais, identidade e operador ternário |
| `aula08` | Formulários GET, raiz quadrada, idade e estilos dinâmicos |
| `aula09` | Condicionais, maioridade, voto e situação escolar |
| `aula10` | `switch`, operações, dia da semana e região do Brasil |
| `aula11` | Laço `while`, campos dinâmicos e contagem configurável |
| `aula12` | `do...while`, contagem, fatorial e tabuada |
| `aula13` | Laço `for`, tabuada e números primos |
| `aula14` | Declaração de funções e argumentos |
| `aula15` | Escopo, passagem por valor/referência e `include` |
| `aula16` | Formatação e manipulação de strings |
| `aula17` | Busca, substituição e partes de strings |
| `aula18` | Criação, leitura e iteração de arrays |
| `aula19` | Contagem, ordenação e outras operações com arrays |

### Fluxos com formulário

Os principais pares de entrada e processamento são:

- `aula08/01-exercicio.html` → `aula08/01valor.php`;
- `aula08/02-exercicio.html` → `aula08/02idade.php`;
- `aula08/03-exercicio.html` → `aula08/03cores.php`;
- `aula09/exercicio01.html` → `aula09/exercicio01.php`;
- `aula09/exercicio02.html` → `aula09/exercicio02.php`;
- `aula09/exercicio03.html` → `aula09/exercicio03.php`;
- `aula10/exericio01.html` → `aula10/exercicio01.php`;
- `aula10/exercicio02.html` → `aula10/exercicio02.php`;
- `aula10/exercicio03.html` → `aula10/exercicio03.php`;
- formulários gerados nas aulas 11 a 13 enviam valores para seus respectivos scripts de resultado.

Na `aula15`, `05-funcao.php` inclui `funcoes.php`; os dois arquivos precisam permanecer na mesma pasta.

## Trilha W3Schools

Esta área é um caderno de estudo baseado em capítulos do W3Schools. Os arquivos misturam explicações em comentários HTML e blocos PHP de demonstração.

### Fundamentos (`w3school/tutorial`)

| Grupo | Assuntos |
| --- | --- |
| 01–04 | introdução, instalação, sintaxe e comentários |
| 05–07 | variáveis, escopo, saída e tipos de dados |
| 08 | strings: concatenação, escape, alteração e recorte |
| 09–13 | números, conversão, matemática, constantes e constantes mágicas |
| 14–16 | operadores e estruturas condicionais |
| 17–18 | laços, `break`, `continue` e funções |
| 19 | arrays: criação, acesso, alteração, adição, remoção, ordenação e multidimensionais |
| 20 | superglobais: `$GLOBALS`, `$_SERVER`, `$_REQUEST`, `$_POST` e `$_GET` |
| 21 | expressões regulares com funções `preg_*` |

### Formulários (`w3school/Forms`)

Os cinco capítulos avançam de leitura básica de formulário para validação completa:

1. tratamento de formulários;
2. sanitização e função auxiliar de validação;
3. campos obrigatórios e mensagens de erro;
4. validação de nome, e-mail e URL;
5. formulário completo com preservação dos valores.

### Tópicos avançados (`w3school/Advanced`)

| Arquivo/capítulo | Assunto |
| --- | --- |
| 01 | data e hora |
| 02 | `include` e `require` |
| 03–05 | leitura, abertura, criação e escrita de arquivos |
| 06 | upload de arquivos |
| 07 | cookies |
| 08 | sessões |
| 09–10 | filtros e validações avançadas |
| 11 | callbacks |
| 12 | codificação e decodificação JSON |
| 13 | exceções |

> Os arquivos desta trilha não devem ser tratados automaticamente como páginas prontas. Alguns capítulos apresentam várias alternativas no mesmo arquivo, referências a arquivos ilustrativos não incluídos (`footer.php`, `menu.php`, `vars.php`, `webdictionary.txt`, `upload.php`) e até exemplos de erro. Copie o bloco desejado para um arquivo isolado antes de experimentá-lo.

## Formulário de cadastro

`Forms/` contém o exemplo mais próximo de uma pequena aplicação completa.

### Funcionamento

1. `index.php` apresenta campos de nome, idade, e-mail, senha e gênero.
2. O navegador envia os dados via POST para `process.php`.
3. O script remove espaços, escapa texto e valida idade e e-mail.
4. Em caso de erro, as mensagens são exibidas; caso contrário, os dados validados são mostrados.
5. `style.css` define o layout do formulário e das mensagens.

Execute o servidor e acesse <http://localhost:8000/Forms/>.

### Regras atuais

- nome obrigatório;
- idade inteira e maior que zero;
- e-mail em formato válido;
- senha com pelo menos seis caracteres;
- gênero obrigatório.

O exemplo não persiste dados. Nada é gravado em banco de dados ou arquivo. A senha é validada apenas pelo tamanho e descartada ao fim da requisição.

## Cuidados ao estudar os exemplos

- O código tem finalidade didática e preserva a evolução das aulas; não representa, necessariamente, práticas recomendadas para produção.
- Vários scripts acessam `$_GET`, `$_POST` ou `$_SERVER` diretamente. Acessá-los fora do fluxo esperado pode gerar avisos de chave inexistente em versões recentes do PHP.
- Os capítulos do W3Schools agregam blocos independentes. Executar o arquivo inteiro pode causar conflito entre declarações, saída inesperada ou erro proposital.
- Os exemplos de upload e manipulação de arquivos exigem diretórios, permissões e arquivos auxiliares que não estão versionados.
- Cookies e sessões precisam ser testados por HTTP; cabeçalhos como `setcookie()` e `session_start()` devem ser enviados antes de qualquer saída.
- Nunca exponha exemplos de upload ou entrada do usuário diretamente na internet sem reforçar validação, limites, nomes de arquivo, tipo MIME e permissões.
- O diretório contém arquivos `Thumbs.db`, que são metadados antigos do Windows e não participam da execução.

## Validação e testes

Não há suíte de testes automatizados configurada. Para verificar a sintaxe de um arquivo:

```bash
php -l caminho/para/arquivo.php
```

Para validar todos os arquivos em Linux/macOS:

```bash
find . -name '*.php' -print0 | xargs -0 -n1 php -l
```

No PowerShell:

```powershell
Get-ChildItem -Recurse -Filter *.php | ForEach-Object { php -l $_.FullName }
```

Interprete os resultados da pasta `w3school/` no contexto didático: alguns arquivos contêm, intencionalmente, trechos que demonstram erros. Para validar uma demonstração, mova apenas aquele bloco para um arquivo temporário.

Checklist manual recomendado:

1. iniciar `php -S localhost:8000`;
2. abrir o exemplo no navegador;
3. testar valores válidos, vazios e nos limites;
4. conferir avisos no terminal do servidor;
5. validar o HTML gerado e verificar se links, CSS e botões de retorno funcionam.

## Como contribuir

Ao adicionar ou alterar um exemplo:

1. mantenha o arquivo na trilha e aula correspondentes;
2. use UTF-8 e preserve a normalização definida em `.gitattributes`;
3. prefira nomes claros e corrija links relativos entre formulário, processador e CSS;
4. valide o arquivo com `php -l` quando ele for destinado à execução integral;
5. teste entradas ausentes e inválidas antes de acessar superglobais;
6. atualize este README se adicionar uma nova aula ou categoria.

Como os exercícios existentes representam etapas de aprendizado, mudanças de comportamento devem ser pequenas e explicadas no commit.

## Licença

Distribuído sob a licença MIT. Consulte [LICENSE](LICENSE) para os termos completos.

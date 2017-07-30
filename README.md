# QuebraQuebra REST API

Projeto do **Hackfest contra a Corrupção 2017: Tecnologia, Transparência e Cidadania**.

Acesse: [api.quebraquebra.lsd.ufcg.edu.br](http://api.quebraquebra.lsd.ufcg.edu.br)

## Recursos Disponíveis na API

### Folha da Câmara dos Deputados

Link: [api.quebraquebra.lsd.ufcg.edu.br/camara/folha](http://api.quebraquebra.lsd.ufcg.edu.br/camara/folha)

#### Dados retornados (formato JSON):

| Atributo | Descrição |
|-|-|
| **total** | Total de registros no banco de dados que atendem aos parâmetros da consulta. |
| **result** | Array de registros de folhas de pagamento.<br/>Atributos da consulta:<br/>- **id**,<br/>- **mes**,<br/>- **ano**,<br/>- **cargo**,<br/>- **vinculo**,<br/>- **servidor**,<br/>- **remuneracaoFixa**,<br/>- **vantagensPessoais**,<br/>- **remuneracaoEventual**,<br/>- **abonoPermanencia**,<br/>- **descontos**,<br/>- **outrosDiarias**,<br/>- **outrosAuxilios**,<br/>- **outrosVantagens**. |

#### Parâmetros da consulta (via QueryString):

| Parâmetro | Descrição |
|-|-|
| **limit** | Limite de registros por página.<br/>__Valor padrão__: **10**. |
| **page** | Número da página de registros.<br/>__Valor padrão__: **1**. |
| **ano** | Ano da folha. |
| **mes** | Mês (valor numérico) da folha. |
| **servidor** | Nome do servidor. |
| **vinculo** | Vínculo do servidor junto à Câmara dos Deputados. |
| **cargo** | Cargo do servidor junto à Câmara dos Deputados. |
| **sort** | Atributo utilizado para ordenar os registros.<br/>__Valor padrão__: **servidor**.<br/>__Observação__: Se não forem informados **ano** e **mês**, além do valor de **sort**, a consulta também ordenará os registros por **ano** e **mês**, respectivamente. |
| **order** | Regra de ordenação dos registros.<br/>__Valores possíveis__: **ASC** (ascendente) e **DESC** (decrescente)<br/>__Valor padrão__: **ASC**. |

Exemplo de consulta com parâmetros: [api.quebraquebra.lsd.ufcg.edu.br/camara/folha?limit=10&page=1&ano=2017&mes=1&servidor=jose&vinculo=&cargo=&sort=servidor&order=desc](http://api.quebraquebra.lsd.ufcg.edu.br/camara/folha?limit=10&page=1&ano=2017&mes=1&servidor=jose&vinculo=&cargo=&sort=servidor&order=desc)

### Folha do Senado Federal

Link: [api.quebraquebra.lsd.ufcg.edu.br/senado/folha](http://api.quebraquebra.lsd.ufcg.edu.br/senado/folha)

#### Dados retornados (formato JSON):

| Atributo | Descrição |
|-|-|
| **total** | Total de registros no banco de dados que atendem aos parâmetros da consulta. |
| **result** | Array de registros de folhas de pagamento.<br/>Atributos da consulta:<br/>- **id**<br/>- **tipo**<br/>- **ano**<br/>- **mes**<br/>- **servidor**<br/>- **anoAdmissao**<br/>- **vinculo**<br/>- **cargo**<br/>- **padrao**<br/>- **especialidade**<br/>- **situacao**<br/>- **remuneracaoBasica**<br/>- **vantagensPessoais**<br/>- **funcaoCargoComissao**<br/>- **gratificacaoNatalina**<br/>- **horasExtras**<br/>- **outrasRemuneracoesEventuais**<br/>- **adicionalPericulosidade**<br/>- **adicionalNoturno**<br/>- **abonoPermanencia**<br/>- **reversaoTetoConstitucional**<br/>- **impostoRenda**<br/>- **psss**<br/>- **faltas**<br/>- **diarias**<br/>- **auxilioAlimentacao**<br/>- **outrasVantagensIndenizatorias**<br/>- **licencaPremio** |

#### Parâmetros da consulta (via QueryString):

| Parâmetro | Descrição |
|-|-|
| **limit** | Limite de registros por página.<br/>__Valor padrão__: **10**. |
| **page** | Número da página de registros.<br/>__Valor padrão__: **1**. |
| **ano** | Ano da folha. |
| **mes** | Mês (valor numérico) da folha. |
| **servidor** | Nome do servidor. |
| **vinculo** | Vínculo do servidor junto à Câmara dos Deputados. |
| **cargo** | Cargo do servidor junto à Câmara dos Deputados. |
| **sort** | Atributo utilizado para ordenar os registros.<br/>__Valor padrão__: **servidor**.<br/>__Observação__: Se não forem informados **ano** e **mês**, além do valor de **sort**, a consulta também ordenará os registros por **ano** e **mês**, respectivamente. |
| **order** | Regra de ordenação dos registros.<br/>__Valores possíveis__: **ASC** (ascendente) e **DESC** (decrescente)<br/>__Valor padrão__: **ASC**. |

Exemplo de consulta com parâmetros: [api.quebraquebra.lsd.ufcg.edu.br/senado/folha?limit=10&page=1&ano=2017&mes=1&servidor=jose&vinculo=&cargo=&sort=servidor&order=desc](http://api.quebraquebra.lsd.ufcg.edu.br/senado/folha?limit=10&page=1&ano=2017&mes=1&servidor=jose&vinculo=&cargo=&sort=servidor&order=desc)

## Links Externos

**Website Oficial**: [quebraquebra.lsd.ufcg.edu.br](http://quebraquebra.lsd.ufcg.edu.br/)

**GitHub**: [github.com/quebraquebra](https://github.com/quebraquebra)

**Facebook**: [facebook.com/quebracamaraquebrasenado](https://www.facebook.com/quebracamaraquebrasenado)

## Para os Desenvolvedores

### Tecnologias Utilizadas

* PHP
  * [Symfony](https://symfony.com/)
  * [Doctrine](http://www.doctrine-project.org/)
  * [Composer](https://getcomposer.org/)

### Ambiente de Desenvolvimento

* Servidor Web com suporte ao PHP (Apache);
* PHP;
* Composer;
* Banco de Dados (MySQL, PostgreSQL, etc.).

### Desenvolvimento

1. Instale as dependências com o **Composer**.

```
composer install
```

2. No decorrer da instalação das dependências, serão solicitados os dados de acesso ao banco de dados. Após os dados serem informados, o arquivo **app/config/parameters.yml** será criado. Você poderá atualizar esse arquivo sempre que necessário.

3. Para utilização da API, o **Symfony** conta com um servidor web interno com suporte ao PHP.

```
bin/console server:run
```

> O servidor web do **Symfony** roda no endereço [http://localhost:8000](http://localhost:8000).

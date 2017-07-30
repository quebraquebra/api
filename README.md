# QuebraQuebra REST API

Projeto do **Hackfest contra a Corrupção 2017: Tecnologia, Transparência e Cidadania**.

Acesse: [api.quebraquebra.lsd.ufcg.edu.br](http://api.quebraquebra.lsd.ufcg.edu.br)

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

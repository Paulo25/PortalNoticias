# Portal de Notícias

## Visão Geral

Este projeto visa aplicar e aprimorar conhecimentos técnicos em Redis através da simulação de um portal de notícias. Utilizando Docker para gerenciar serviços essenciais como MySQL e Redis, o projeto demonstra como o Redis pode ser utilizado para retornar notícias de forma rápida e eficiente, melhorando significativamente o desempenho do sistema ao armazenar em cache as consultas mais frequentes.

## Tecnologias Utilizadas

- **PHP 8.2**
- **Laravel**
- **MySQL**
- **Redis**
- **Bootstrap**
- **Docker**

## Instruções para Execução

Para executar o projeto, é necessário ter o Docker configurado e um terminal bash. Siga os passos abaixo:

1. Clone o repositório:
    ```bash
    git clone https://github.com/seu-usuario/seu-repositorio.git
    ```

2. Ajuste o arquivo `.env` com a string de conexão do banco de dados desejado e configure o Redis para funcionar com o predis do Laravel.

3. Gere a chave de aplicação:
    ```bash
    php artisan key:generate
    ```

4. Na pasta raiz do projeto, execute o comando abaixo no terminal:
    ```bash
    docker-compose up -d
    ```

Feito isso, aguarde enquanto o projeto é iniciado e todos os scripts necessários são executados. Se desejar popular as tabelas do banco de dados com dados iniciais, execute o comando abaixo:
```bash
php artisan db:seed

# Teste
![image](https://github.com/Paulo25/PortalNoticias/assets/29576745/29a3a217-e1bb-4d00-87c9-d3dd3862181d)
![image](https://github.com/Paulo25/PortalNoticias/assets/29576745/d2ebbb34-20f9-43ff-92a2-013c49bc8675)



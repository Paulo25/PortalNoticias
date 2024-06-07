# Portal de Notícias

## Visão Geral

O **Portal de Notícias** é um aplicativo web que permite visualizar notícias em um formato estiloso e responsivo. O projeto utiliza Docker para gerenciar os serviços necessários, incluindo MySQL e Redis.

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



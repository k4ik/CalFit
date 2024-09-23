# CalFit

Calfit é um projeto desenvolvido em Laravel 11 com PHP 8.3, focado em ajudar os usuários a calcular seu Gasto Energético Total (GET), Índice de Massa Corporal (IMC) e a montar dietas personalizadas. 

## Funcionalidades

- Cálculo do Gasto Energético Total (GET)
- Cálculo do Índice de Massa Corporal (IMC)
- Criação de dietas personalizadas baseadas no GET

## Setup 

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/k4ik/CalFit.git
```
```sh
cd CalFit
```

Suba os containers do projeto
```sh
docker-compose up -d
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```

OPCIONAL: Gere o banco SQLite (caso não use o banco MySQL)
```sh
touch database/database.sqlite
```

Rodar as migrations
```sh
php artisan migrate
```

Acesse o projeto
[http://localhost:8000](http://localhost:8000)

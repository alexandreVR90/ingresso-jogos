<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/alexandreVR90/ingresso-jogos/actions"><img src="https://github.com/alexandreVR90/ingresso-jogos/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="License"></a>
</p>

# ingresso-jogos

## Sobre o projeto

O **ingresso-jogos** é um sistema web para venda e gerenciamento de ingressos para jogos esportivos.  
Permite o cadastro e edição de jogos, criação de lotes de ingressos, controle de vendas e emissão de QR codes para autenticação dos tickets.

Este projeto é construído com Laravel 12, Vite, e possui painel administrativo com CRUD completo para jogos e lotes, autenticação e rotas protegidas.

---

## Funcionalidades

- Cadastro, listagem, edição e exclusão de jogos.
- Cadastro, edição e exclusão de lotes de ingressos vinculados a cada jogo.
- Controle de estoque e preços dos ingressos por lote.
- Sistema de autenticação de usuários para acessar o painel administrativo.
- Rotas protegidas com middleware de autenticação.
- Paginação nas listagens para melhor usabilidade.
- Estrutura modular e organizada para fácil manutenção e expansão.

## Tecnologias utilizadas

- PHP 8.x
- Laravel 12
- MySQL (ou outro banco relacional compatível)
- Blade Templates
- Vite para build frontend
- Bootstrap / Tailwind CSS (dependendo do que for implementado no frontend)
- Git para controle de versão

---
## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/alexandreVR90/ingresso-jogos.git
   cd ingresso-jogos

2. Instale as dependências via Composer:
composer install

3. Copie o arquivo de ambiente e configure:
cp .env.example .env
Configure as variáveis de ambiente no arquivo .env, principalmente as relacionadas ao banco de dados.

4. Gere a chave da aplicação:
php artisan key:generate

5. Execute as migrations para criar as tabelas no banco:
php artisan migrate

6. (Opcional) Seeders para popular dados iniciais, se houver:
php artisan db:seed

7. Rode o servidor local: 
php artisan serve

8. Acesse o projeto no navegador via http://localhost:8000

Contribuição

Contribuições são bem-vindas!
Para contribuir, por favor abra uma issue ou envie um pull request com suas melhorias.

Licença

Este projeto está licenciado sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.

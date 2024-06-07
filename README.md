<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Instructions
Introdução ao Desafio: Desenvolvedor PHP + Laravel
Descrição do Cenário: Cadastro de Usuário com PHP, Laravel e PostgreSQL
Você está trabalhando em um projeto de uma aplicação web usando o framework
Laravel, com PHP no back-end e um banco de dados PostgreSQL para armazenamento
de dados. Sua tarefa é criar a funcionalidade de cadastro de usuários com as seguintes
regras:
Página de Cadastro (Laravel/Blade):
• Crie uma página de registro de usuário com os seguintes campos:
• Nome (obrigatório, mínimo de 3 caracteres, máximo de 50 caracteres).
• E-mail (obrigatório, deve ser um e-mail válido).
• Senha (obrigatória, mínimo de 6 caracteres, máximo de 20 caracteres).
• Confirmação de Senha (obrigatória e deve coincidir com a senha).
Validações (Laravel):
• Utilize as ferramentas de validação fornecidas pelo Laravel para validar os
campos do formulário.
• Exiba mensagens de erro apropriadas quando os campos não atenderem às
regras especificadas acima.
Modelo e Migração (Laravel):
• Crie um modelo e uma migração para armazenar os usuários no banco de dados
PostgreSQL.
• Configure a tabela para armazenar as informações dos usuários.
API de Back-end (Laravel):
• Crie uma API RESTful em Laravel para processar o registro de usuários.
• Valide os dados recebidos da solicitação, incluindo a confirmação de senha.
• Armazene os usuários registrados no banco de dados PostgreSQL.
• Retorne uma resposta apropriada para o front-end (por exemplo, sucesso ou
erro) no formato JSON.
Testes Unitários (Laravel/PHP):
• Escreva pelo menos um teste unitário para a API Laravel para garantir que os
dados sejam validados corretamente e armazenados no banco de dados
PostgreSQL.
• Utilize a ferramenta de teste do Laravel para isso.
Tratamento de Erros (Laravel):
• Implemente um tratamento de erro apropriado na API Laravel para lidar com
falhas na comunicação com o front-end.
• Retorne respostas de erro no formato JSON.
Repositório Público no GitHub:
• Crie um repositório público no GitHub para o seu código.
• Envie o código do projeto com todas as alterações para o seu repositório público
no GitHub.
Critérios de Avaliação:
• Funcionamento correto do formulário de registro de usuário.
• Validações eficazes e mensagens de erro claras.
• Comunicação bem-sucedida entre o front-end e o back-end.
• Armazenamento correto dos usuários registrados no banco de dados
PostgreSQL.
• Pelo menos um teste unitário bem-sucedido no back-end.
• Tratamento de erros adequado.
• Boa organização do código, seguindo as melhores práticas do Laravel e PHP.
Por favor, forneça o link para o seu repositório público no GitHub ao concluir o teste.
Além disso, você deve estar preparado para explicar suas escolhas de implementação
durante a entrevista técnica.
Observação final:
Mesmo que não consiga completar todo o desafio no tempo esperado, envie o que
conseguiu pois estamos buscando perfis que tenham pontos fortes, exemplo: Mesmo
que você não tenha feito 100% do front, mas concluiu o Back ou mostrou pontos
positivos já é critério para classificação.
Desejamos boa sorte no processo seletivo.
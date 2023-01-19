
#Como executar o projeto:

- git clone https://github.com/jmperes17/laravel-crud.git
- cd laravel-crud -> Entrar no diretório do projeto
- composer install -> Executar o Autoload do projeto
- Iniciar o xammp ativando o serviço do MySql
- php artisan migrate -> Criar as tabelas necessárias para rodar o projeto
- php artisan php artisan db:seed -> "Mockar" a tabela users.

Após isso, basta pegarmos um usuário qualquer no banco para conseguir "logar" no sistema:

- php artisan tinker
- User::all()
- Copiar email de qualquer usuário
- php artisan serve -> Rodar o sistema e depois inserir no navegador: http://127.0.0.1:8000/
- Inserir email e senha padrão = 'password'

## Setup inicial

Clone o projeto em sua máquina local.

Configure o arquivo `.env` com os dados de conexão do seu banco de dados MySQL local.

Instale as dependencias do projeto com o comando `composer install`

Rode o comando `php artisan migrate` para criar as tabelas iniciais no seu bd.

Rode o comando `php artisan db:seed --class=CompanySeeder` para popular a tabela `companies`.

Rode o comando `php artisan db:seed --class=EmployeeSeeder` para popular a tabela `employees`.

Gere uma chave para a sua aplicação com `php artisan key:generate`. 

Sirva sua API com o comando `php artisan serve`.

Pronto para o uso.

## Requisitos

<h3>Requisitos de Hardware e software para utilização da API</h3>
<p>- Computador com Composer + Laravel 8.21.0 + Artisan + PHP 7.4.10 instalados em ambiente global</p>
<p>- Banco de dados do tipo mariaDB ou MySQL devidamente instalado</p>
<p>- HTTP client instalado, Ex.: <a href= 'https://www.postman.com/' target="_blank">Postman</a></p>
<p>- Editor de texto/IDE para a edição das variáveis globais</p>


## Configurando o ambiente


<p>Crie um Banco de dados e usuário com amplas permissões para essa base de dados.</p>
<p>No editor de texto/IDE, acesso o arquivo .env. Dentro desse arquivo, edite as informações do banco de dados, inserindo as informações do banco de dados criado.</p>


## Iniciando aplicação


<p>Abra o terminal no diretorio raiz do projeto e insira os seguintes comandos:</p>
<p>php artisan migrate:fresh</p>
<p>php artisan serve</p>


## Utilizando API

<p>Agora que o ambiente já está configurado, vamos ver como funciona a API</p>

### Rotas
<p>Todas as rotas partem do endereço {url}/api</p>
<p>Para cessar as informações do produto, adicione no endereço /produto</p>
<p>Para cessar as informações dos tipos de produto, adicione no endereço /tipo_produto</p>

<p>Todos os endpoints seguem o padrão dos verbos de requisição internacional (GET, POST, UPDATE, DELETE)</p>
<p>Onde o verbo GET lista os registros contidos(Todos ou um específico)</p>
<p>O verbo POST Grava um novo registro</p>
<p>O verbo UPDATE atualiza o registro especificado</p>
<p>O verbo DELETE Exclui, por soft delete, o registro especificado</p>

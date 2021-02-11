## Requisitos

### Requisitos de Hardware e software para utilização da API
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


### Verbo GET em todas as rotas


<p>Caso não seja especificado um item desejado, por exemplo: "{url}/api/produto", ele listará todos os registros de produto.</p>
<p>Para visualizar um registro em específico, precisamos apenas especificar na URL o id do item, por exemplo: "{url}/api/produto/3". Assim, ele retornará as informações do produto de id 3</p>


### Verbo POST


<p>Produto, passar os seguintes parametros:</p>
<ul>
    <li>nome [text] - Required</li>
    <li>descricao [text] - Optional</li>
    <li>valor [double] - Optional</li>
    <li>tipo [BigInt] - Required -> Identificador único do tipo de produto</li>
</ul>

<p>Tipos de produto, passar os seguintes parametros:</p>
<ul>
    <li>nome [text] - Required</li>
</ul>

<h5>Verbo DELETE em todas as rotas</h5>
<p>Para excluir um registro, precisamos apenas especificar na URL o id do item, por exemplo: "{url}/api/produto/3". Assim, ele fará o soft delete do produto de id 3</p>


### Verbo UPDATE


<p>Produto, especificar na URL o ID do produto a ser atualizado. Passar os seguintes parametros opcionais para atualização:</p>
<ul>
    <li>nome [text]</li>
    <li>descricao [text]</li>
    <li>valor [double]</li>
    <li>tipo [BigInt]</li>
</ul>

<p>Tipo de produto, especificar na URL o ID do tipo de produto a ser atualizado. Passar os seguintes parametros opcionais para atualização:</p>
<ul>
    <li>nome [text]</li>
</ul>


## Retornos
<p>Os retornos dessa APi são de base Json</p>


### Author: Henrique Maraschin Granja



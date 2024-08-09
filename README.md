<h1>Estrutura</h1>

- crud.sql
    - Arquivo para inserir o banco de dados usado no crud
<br>
- config.php
    - Utilizado para fazer a ligação com o banco de dados.
        - $db_host - para salvar o local que será o host do servidor para que não haja problema com o 'require_once'.
        - $db_name - salvar o nome da base de dados dentro do PHPmyadmin.
        - $db_user - usuario de entrada para o banco de dados.
        - $db_pass - senha para acessar o banco de dados.
<br>
- /src
    - /pages
        - pasta responsavel pela organização do nosso HTML sendo divida em 2 sub pastas "user" e "partials"
            - user: pasta utilizada para separar o body e fazer o HTML para ser utilizado  no crud, criando as 'div' e 'input' para salvar as informações do bando, mostrar, editar e remover.
            - partials: pasta separada destinada para fazer um template do Header e footer do site e não precisar ficar replicando toda vez que criar uma nova pagina na pasta user.
    - /modules
        - pasta responsavel por criar os modulos/funções repetitivas do site, como por exemplo as mensagens de erro e sucesso ao realizar algo no site (add, remove, update).
    - /database
        - pasta onde fica o 'db.php', responsavel pela inserção, remoção, atualização ou consulta no banco de dados, resumindo onde fica todas as funções do CRUD.
    - /actions
        - pasta responsavel pelas ações do site, por exemplo: ao inserir um novo usuario ao banco de dados ele tem como ação conferir se a ação foi realizada com sucesso, após isso ele retorna para a pagina princial (read.php) e exibe uma mensagem dizendo se foi efetuada a ação com sucesso ou não.

<h1>Tags</h1>

- require_once
    - Utilizado para importar algo de outro arquivo, por exemplo: "require_once ' ../partials/footer.php'", para estar importando a pagina HTML do footer para alguma pagina presente na /src/pages/user.
- required (HTML)
    - Utilizado para ser obrigatorio preencher aquela informação solicitada, dependendo do que for importante não esquecer essa tag para não ir para o banco de dados com dados faltando.
- mysqli_real_escape_string
    - prevenção contra SQL injection, servindo para escapar os dados recebidos como paramentro.

<br>

<h3>Novas atualizações e breve...</h3>

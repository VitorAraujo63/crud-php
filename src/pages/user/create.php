<?php

require_once '../../../config.php';
require_once '../../actions/user.php';
require_once '../partials/header.php';

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]))
    createUserAction($conn, $_POST["name"], $_POST["email"], $_POST["phone"]);

?>
<div class="container">
    <div class="row">
        <a href="../../../index.php"><h1>Users - Create</h1></a>
    </div>
    <div class="form">
        <div class="form-div">
            <a class="btn-prev" href="../../../index.php"><img src="../../../img/close.svg" alt="botao fechar"></a>
            <form class="form" action="../../pages/user/create.php" method="POST">
                <label>Name</label>
                <input type="text" name="name" required/>
                <label>E-mail</label>
                <input type="email" name="email" required/>
                <label>Phone</label>
                <input type="text" name="phone" required/>

                <button class="btn-save" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>
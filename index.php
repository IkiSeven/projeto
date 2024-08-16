<?php
session_start();

if(isset($_SESSION['login_error'])){
    echo '<div class="alert alert-danger" role="alert">'.$_SESSION['login_error'].'</div>';
    unset($_SESSION['login_error']);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-4 mb-4">
            <div class="col-8">
                <p>
                    O [nome do app] é um aplicativo inovador desenvolvido para aprimorar a comunicação e a inclusão de pessoas com deficiência auditiva.
                    Utilizando tecnologia avançada de reconhecimento de sinais e tradução automática,
                    o [nome do app] permite que usuários se comuniquem de forma eficiente com aqueles que não estão familiarizados com a Língua de Sinais.
                    O aplicativo oferece uma interface intuitiva onde os usuários podem traduzir sinais em texto e vice-versa,
                    além de fornecer recursos de legendagem em tempo real para vídeos e conversas ao vivo.
                </p>
            </div>
        </div>
        <div class="row mt-4 mb-4 justify-content-center ">
            <div class="col-8">
                <button type="button" class="btn btn-primary mb-4" id="btnLogin">Entrar</button><br>
                <button type="button" class="btn btn-outline-primary" id="btnRegister">Registrar</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalLogin">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalLoginMessage">Bem-vindo!</h1>
                <input type="button" class="btn-close" id="btnLoginClose">
            </div>
            <div class="modal-body">
                <form action="processarUsuario.php" method="post">
                    <label for="formEmail">E-mail: </label>
                    <input type="text" class="form-control" name="formEmail" id="formEmail" placeholder="Digite seu E-mail..."><br>
                    <label for="formSenha">Senha: </label>
                    <input type="text" class="form-control" name="formSenha" id="formSenha" placeholder="Digite sua senha..."><br>
                    <input type="Submit" class="btn btn-outline-primary" value="Entrar"><br>
                </form>
            </div>
            <div class="modal-footer">
            <a href="#">Esqueceu a senha?</a>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade" id="modalReg">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalRegMessage">Bem-vindo!</h1>
                <input type="button" class="btn-close" id="btnRegClose">
            </div>
            <div class="modal-body">
                <form action="processaReg.php" method="post">
                    <label for="formEmailReg">E-mail: </label>
                    <input type="text" class="form-control" name="formEmailReg" id="formEmailReg" placeholder="Digite seu E-mail..."><br>
                    <label for="formSenhaReg">Senha: </label>
                    <input type="text" class="form-control" name="formSenhaReg" id="formSenhaReg" placeholder="Digite sua senha..."><br>
                    <div class="col-6">
                        <label for="formNomeReg">Nome: </label>
                        <input type="text" class="form-control" name="formNomeReg" id="formNomeReg" placeholder="Digite seu nome..."><br>
                        <label for="formSobrenomeReg">Sobrenome: </label>
                        <input type="text" class="form-control" name="formSobrenomeReg" id="formSobrenomeReg" placeholder="Digite seu sobrenome"><br>
                    </div>
                    <input type="Submit" class="btn btn-outline-primary" value="Registrar"><br>
                </form>
            </div>
        </div>
        </div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="login.js"></script>
</body>
</html>
<div class="container">
    <form class="form form-login" action="/login/recuperar-senha" method="POST">
        
        <h2>Lembrar Senha</h2>
        <div class="form-floating mb-3">
                <input type="email" class="form-control" id="lEmail" name="lEmail">
                <label for="lEmail">Digite o email</label>
        </div>
        <input type="submit" class="btn btn-success" value="Enviar">
        <div class="mt-3">
            <p class="text-center"><a href="/login">Voltar</a></p>
        </div>
        
        <?php if(!empty($_SESSION['error'])) : ?>
            <div class="mt-2 alert alert-danger" role="alert">
                <?=$_SESSION['error'];?>
                <?php unset($_SESSION['error']);?>
            </div>
        <<?php endif;?>

        <?php if(!empty($_SESSION['status'])) : ?>
            <div class="mt-2 alert alert-success" role="alert">
                <?=$_SESSION['status'];?>
                <?php unset($_SESSION['status']);?>
            </div>
        <<?php endif;?>
        
    </form>
</div>
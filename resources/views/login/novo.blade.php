
<div class="container">

<?php if(!isset($_SESSION['USER'])) : ?>
    <form class="form form-login" action="/login/criar-conta" method="POST">
        
        <h2>Novo Usuário</h2>
        <div class="">
        <div class="form-floating mb-3">
                <input type="email" class="form-control" id="lEmail" name="lEmail">
                <label for="lEmail">Email</label>
        </div>
        <div class="form-floating mb-3">
                <input type="password" id="lPass" name="lPass" class="form-control" aria-describedby="passwordHelpBlock">
                <label for="lPass">Senha</label>
            </div>
            <input type="submit" class="btn btn-success" value="Cadastrar">
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
    <?php else : ?>
        <p>Você está logado como <strong><?=$_SESSION['USER']['email'];?></strong>. Deseja fazer <a href="/logout">logout</a> ou ir para o <a href="/dashboard">dashboard</a>?</p>
    <?php endif;?>

</div>
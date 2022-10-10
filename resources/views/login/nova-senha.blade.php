
<div class="container">

<?php if(!isset($_SESSION['USER'])) : ?>
    <form class="form form-login" action="/login/redefinir-senha/" method="POST">
        
        <h2>Redefinir Senha</h2>
        <div class="">

        <div class="form-floating mb-3">
                <input type="password" id="lPass" name="lPass" class="form-control" aria-describedby="passwordHelpBlock">
                <input type="hidden" id="t" name="t" value="<?=$get_token?>">
                <input type="hidden" id="u" name="u" value="<?=$get_username?>">
                <label for="lPass">Nova Senha</label>
            </div>
            <input type="submit" class="btn btn-success" value="Alterar">
        </div>
        
        <?php if(!empty($_SESSION['error'])) : ?>
            <div class="mt-2 alert alert-danger" role="alert">
                <?=$_SESSION['error'];?>
                <?php unset($_SESSION['error']);?>
            </div>
        <<?php endif;?>
        
    </form>
    <?php else : ?>
        <p>Você está logado como <strong><?=$_SESSION['USER']['email'];?></strong>. Deseja fazer <a href="/logout">logout</a> ou ir para o <a href="/dashboard">dashboard</a>?</p>
    <?php endif;?>

</div>
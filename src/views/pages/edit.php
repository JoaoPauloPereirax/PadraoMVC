<?php $render('header');?>

<h2>EDITAR CADASTRO</h2>
<form action="<?=$base?>/usuario/<?=$usuario['id']?>/edit" method="post">
    <label>
        Nome: <input type="text" name="nome" value="<?=$usuario['nome']?>">
    </label><br><br>
    <label>
        E-mail: <input type="email" name='email' value="<?=$usuario['email']?>">
    </label><br><br>
    <input type="submit" value="ATUALIZAR">
</form>

<?php $render('footer');?>
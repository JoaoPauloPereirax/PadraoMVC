<?php $render('header');?>

BASE: <?=$base?><br><br>

<a href="<?php echo $base;?>/novo"><button>NOVO USUÁRIO</button></a><br><br>

<!-- Vamos agora mostrar os dados na tela através de uma tabela-->
<table border='1' width='100%'>
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario):?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="<?=$base?>/usuario/<?=$usuario['id']?>/edit">
                  <img src="<?=$base?>/assets/images/document.png" alt="" width='20'>  
                </a>
                <a href="<?=$base?>/usuario/<?=$usuario['id']?>/excluir" onclick='return confirm("Têm certeza que deseja excluir?")'>
                    <img src="<?=$base?>/assets/images/trash.png" alt="" width='20'>
                </a>
            </td>
        </tr>
    <?php endforeach;?>

</table>

<?php $render('footer');?>
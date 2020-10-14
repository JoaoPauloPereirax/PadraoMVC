<?php $render('header');?>
Meu nome é <?=$nome?>. <br>
Eu tenho <?=$idade?> anos. <br>
<?php foreach($posts as $post):?>
<h3><?=$post['titulo']; ?><br></h3>
<p> <?=$post['corpo']; ?><br></p>
<?php endforeach; ?>
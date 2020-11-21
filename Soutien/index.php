<?php
require 'menu.php';
use function Menu\{read, write, findAll, create, findById};


$menu = findAll();
$item = count($menu);


require 'head.php';

?>
<div class="informations">
<?php if (!empty ($_GET['succes'])) : ?>
<div class="alert alert-success" role="alert">

  <?= $_GET['succes'] ?>
</div>
<? endif; ?>
</div>

<div class="entete">
<br>
<h3 class="titre">Liste de tous nos plats</h3>
<br>
</div>

<div class="contenu">
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Plat</th>
            <th scope="col">Prix</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 0; $i < $item; $i++):
        ?>
        <tr>

        <th scope='row'><?= $menu[$i]['id'] ?></th> 
        <td> <?= $menu[$i]['plat']?> </td> 
        <td> <?= $menu[$i]['prix'] ?>$</td>

        </tr>
        <?php endfor; ?>

    </tbody>
</table>

<div class=creation>
    <form method='GET' action='create.php'>
        <button type="submit" class="btn btn-primary btn-lg" >Ajouter un nouveau plat</button>
    </form>
</div>
</div>
<?php require 'tail.php' ?>

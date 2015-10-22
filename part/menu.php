<?php

$pageEnCours = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/'));

if ($pageEnCours == "/index.php")
{
    $homeClass = "active";
    $morpionClass = "";
}
else if($pageEnCours == "/morpion.php"){
    $homeClass = "";
    $morpionClass = "active";
}

?>

<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills">
            <li role="presentation" class="<?=$homeClass ?>"><a href="index.php">Home</a></li>
            <li role="presentation" class="<?=$morpionClass ?>"><a href="morpion.php">Morpion</a></li>
        </ul>
    </div>
</div>
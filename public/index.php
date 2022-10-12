<?php

    require_once "../src/Pokemon.php";
    require_once "../src/Item.php";

    $carapuce = new Pokemon("carapuce", ["water"], "https://www.waouo.com/wp-content/uploads/2011/09/carapucepokemon.png");
    $superBonbon = new Item();

    $carapuce->setRetrieve($superBonbon);
    $carapuce->setEat($superBonbon);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP LC</title>
</head>
<body>
    <h1>Hello Carapuce</h1>
    <section>
        <h2>
            <?= $carapuce->getName() ?>
        </h2>
        <img src="<?= $carapuce->getPicture() ?>" alt="<?= $carapuce->getName() ?>">
        <p>
            level : <?= $carapuce->getLevel() ?> <br/>
            type : 
            <?php foreach($carapuce->getType() as $type) : ?>
                <?= $type ?>
            <?php endforeach ?> <br/>
            Carried item : <?= $carapuce->getRetrieve() ?> <br/>
            <?= $carapuce->getEat() ?>
        </p>
    </section>
    <section>
        <h2>Object found :</h2>
        <h3>
            <?= $superBonbon->getName() ?>
        </h3>
        <p>
            + <?= $superBonbon->getEffect() ?> level !
        </p>
    </section>
</body>
</html>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8" />

        <title>Billet simple pour l'Alaska</title>

        <link href="style.css" rel="stylesheet" /> 

    </head>
        
    <body>

        <h1>Billet simple pour l'Alaska</h1>
        
        <h2>Derniers billets du blog :</h2>
 
        
        <?php

        foreach ($posts as $data) 

        {
             
         
        ?>
            <div class="news">
                <h3>
                    <?= htmlspecialchars($data->getTitle()) ?>
                    <em>le <?= $data->getCreationDate() ?></em>
                </h3>
                
                <p>

                    <?= nl2br(htmlspecialchars($data->getTeaser())) ?>

                    <p><a href="index.php?action=post&amp;id=<?= $data->getId() ?>">Lire la suite</a></p>

                    
                </p>
            </div>

        <?php

        }

        ?>

    </body>
</html>
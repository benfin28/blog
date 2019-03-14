<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Billet simple pour l'Alaska</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>Billet simple pour l'Alaska</h1>
        <p>Derniers billets du blog :</p>
 
        
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
                    <?= nl2br(htmlspecialchars($data->getContent())) ?>
                </p>
            </div>

        <?php

        }

        ?>

    </body>
</html>
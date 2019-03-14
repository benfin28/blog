<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8" />

        <title>Billet simple pour l'Alaska</title>

        <link href="style.css" rel="stylesheet" /> 

    </head>
        
    <body>

        <h1>Bienvenue dans votre interface d'administration</h1>

        <p><a href="admin.php?action=getReportedComments">Voir les commentaires signalés</a></p>

        <p><a href="admin.php?action=addPostForm">Ajouter un nouveau billet</a></p>
        
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

                    
                    <p><a href="admin.php?action=modifyPostForm&amp;id=<?= $data->getId() ?>">Modifier le billet</a></p>

                    
                </p>
            </div>

        <?php

        }

        ?>

    </body>
</html>
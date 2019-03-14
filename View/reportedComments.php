<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Billet simple pour l'Alaska</title>

        <link href="style.css" rel="stylesheet" /> 

    </head>

        

    <body>

        <h1>Billet simple pour l'Alaska</h1>

        <p><a href="index.php?action=listPosts">Retour à la liste des billets</a></p>


        


            


        <h2>Commentaires signalés</h2>


        
        <?php

        foreach ($comments as $data) 

        {
            

        ?>

            <p><strong><?= htmlspecialchars($data->getAuthor()) ?></strong> le <?= $data->getCommentDate() ?></p>

            <p><?= nl2br(htmlspecialchars($data->getComment())) ?></p>

            <p><a href="index.php?action=modifyComment&amp;id=<?= $data->getId() ?>">Rendre le commentaire invisible</a></p>

        <?php

        }

        ?> 

        

    </body>

</html>
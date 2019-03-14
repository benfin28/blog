<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Billet simple pour l'Alaska</title>

        <link href="style.css" rel="stylesheet" /> 

    </head>

        

    <body>

        <h1>Billet simple pour l'Alaska</h1>

        <p><a href="admin.php?action=listPosts">Retour à la liste des billets</a></p>


        


        <div class="news">

            <h3>

                <?= htmlspecialchars($post->getTitle()) ?>

                <em>le <?= $post->getCreationDate() ?></em>

            </h3>

            

            <p>

                <?= nl2br(htmlspecialchars($post->getContent())) ?>

                <p><a href="admin.php?action=modifyPostForm&amp;id=<?= $post->getId() ?>">Modifier le billet</a></p>

            </p>

        </div>

        


        <h2>Commentaires</h2>

  

        <?php

        foreach ($comments as $data) 

        {
            

        ?>

            <p><strong><?= htmlspecialchars($data->getAuthor()) ?></strong> le <?= $data->getCommentDate() ?></p>

            <p><?= nl2br(htmlspecialchars($data->getComment())) ?></p>

            <p><a href="admin.php?action=modifyComment&amp;id=<?= $data->getId() ?>">Retirer le commentaire</a></p>

        <?php

        }

        ?> 

        

    </body>

</html>
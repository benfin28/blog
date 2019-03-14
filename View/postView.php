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


        


        <div class="news">

            <h3>

                <?= htmlspecialchars($post->getTitle()) ?>

                <em>le <?= $post->getCreationDate() ?></em>

            </h3>

            

            <p>

                <?= nl2br(htmlspecialchars($post->getContent())) ?>

            </p>

        </div>

        


        <h2>Commentaires</h2>


        <form action="index.php?action=addComment&amp;id=<?= $post->getId() ?>" method="post">

            <div>

                <label for="pseudo">Pseudo</label><br />

                <input type="text" id="pseudo" name="pseudo" />

            </div>

            <div>

                <label for="comment">Commentaire</label><br />

                <textarea id="comment" name="comment"></textarea>

            </div>

            <div>

                <input type="submit" />

            </div>

        </form> 

        

        <?php

        foreach ($comments as $data) 

        {
            

        ?>

            <p><strong><?= htmlspecialchars($data->getAuthor()) ?></strong> le <?= $data->getCommentDate() ?></p>

            <p><?= nl2br(htmlspecialchars($data->getComment())) ?></p>

            <p><a href="index.php?action=reportComment&amp;id=<?= $data->getId() ?>">Signaler le commentaire</a></p>

        <?php

        }

        ?> 

        

    </body>

</html>
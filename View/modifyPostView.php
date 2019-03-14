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


<form action="admin.php?action=modifyPost&amp;id=<?= $_GET['id'] ?>" method="post">

    <div>

        <label for="author">Titre</label><br />

        <input type="text" id="title" name="title" value="<?= $modifyPost->getTitle() ?>" />

    </div>

    <div>

        <label for="content">Billet</label><br />

        <textarea id="content" name="content"><?= $modifyPost->getContent() ?></textarea>

    </div>

    <div>

        <input type="submit" name="state" value="Brouillon"/>
        <input type="submit" name="state" value="Publier"/>

    </div>

</form>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Billet simple pour l'Alaska</title>

        <link href="style.css" rel="stylesheet" /> 

       <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=gqktwm823798z9leqzh1y9g3zhap8q188sewui7ki9ogbeku"></script>
       <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>


    </head>

        

    <body>

        <h1>Ajouter un nouveau billet</h1>

        <p><a href="admin.php?action=listPosts">Retour à la liste des billets</a></p>


        


        <div class="news">

            <form action="admin.php?action=addPost" method="post">

                <div>

                    <label for="title">Titre</label><br />

                    <input type="text" id="title" name="title" />

                </div>

                <div>

                    <label for="content">Billet</label><br />

                    <textarea style="width:100%;" id="mytextarea" name="content"></textarea>

                </div>

                <div>

                    <input type="submit" name="state" value="Brouillon"/>
                    <input type="submit" name="state" value="Publier"/>

                </div>

            </form> 

                

    </body>

</html>
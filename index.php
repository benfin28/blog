<?php

require_once("controller/controller.php");


try

{ 
    if (isset($_GET['action']))

    {

<<<<<<< HEAD
    	if ($_GET['action'] == 'connect')

        {

            connect($_POST['pseudo'], $_POST['pass']);

        }

        if ($_GET['action'] == 'listPosts')

        {

            getListPosts(1);
=======
    	if ($_GET['action'] == 'listPosts')

        {

            getListPosts();

        }


        elseif ($_GET['action'] == 'post')

        {

            if (isset($_GET['id']) && $_GET['id'] > 0)

            {

                getPost();
                getListComments();

            }

            else 

            {

                throw new Exception('Aucun identifiant de billet envoyé');

            }
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51

        }


<<<<<<< HEAD
        elseif ($_GET['action'] == 'post')
=======
        elseif ($_GET['action'] == 'addpost')

        {

            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['state']))

            {

                addPost($_POST['title'], $_POST['content'], $_POST['state']);

            }

            else

            {   

                throw new Exception('Tous les champs ne sont pas remplis !');

            }

        }


        elseif ($_GET['action'] == 'addComment')
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51

        {

            if (isset($_GET['id']) && $_GET['id'] > 0)

            {

<<<<<<< HEAD
                getPost($_GET['id']);
                getListComments($_GET['id']);

            }

            else 
=======
                if (!empty($_POST['pseudo']) && !empty($_POST['comment']))

                {

                    addComment($_GET['id'], $_POST['pseudo'], $_POST['comment']);

                }

                else

                {   

                    throw new Exception('Tous les champs ne sont pas remplis !');

                }
                
            }

            else
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51

            {

                throw new Exception('Aucun identifiant de billet envoyé');

            }

        }

<<<<<<< HEAD
        elseif ($_GET['action'] == 'addComment')

        {

            addComment($_GET['id'], $_POST['pseudo'], $_POST['comment']);
        }

        elseif ($_GET['action'] == 'reportComment')

        {

            reportComment($_GET['id']);
=======
        
        elseif ($_GET['action'] == 'modifyPost')

        {

            if (isset($_GET['id']) && $_GET['id'] > 0)

            {

                modifyPost($_GET['id'], $_POST['title'], $_POST['content'], $_POST['state']);

            }

            

            else

            {

                throw new Exception('Aucun identifiant de billet envoyé');

            }

        }


        elseif ($_GET['action'] == 'modifyComment')

        {

            if (isset($_GET['id']) && $_GET['id'] > 0)

            {

                if (!empty($_POST['pseudo']) && !empty($_POST['comment']))

                {

                    modifyComment($_GET['id'], $_POST['pseudo'], $_POST['comment'], $_GET['post_id']);

                }

                else

                {

                    throw new Exception('Tous les champs ne sont pas remplis !');

                }
            }

            else

            {

                throw new Exception('Aucun identifiant de billet envoyé');

            }

>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51
        }

    }

    else

    {

<<<<<<< HEAD
        home();
=======
        getListPosts();
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51

    }

}

catch(Exception $e)

{

    $errorMessage = $e->getMessage();

    require('view/errorView.php');

}

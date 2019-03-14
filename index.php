<?php

require_once("controller/controller.php");


try

{ 
    if (isset($_GET['action']))

    {

    	if ($_GET['action'] == 'connect')

        {

            connect($_POST['pseudo'], $_POST['pass']);

        }

        if ($_GET['action'] == 'listPosts')

        {

            getListPosts(1);

        }


        elseif ($_GET['action'] == 'post')

        {

            if (isset($_GET['id']) && $_GET['id'] > 0)

            {

                getPost($_GET['id']);
                getListComments($_GET['id']);

            }

            else 

            {

                throw new Exception('Aucun identifiant de billet envoyé');

            }

        }

        elseif ($_GET['action'] == 'addComment')

        {

            addComment($_GET['id'], $_POST['pseudo'], $_POST['comment']);
        }

        elseif ($_GET['action'] == 'reportComment')

        {

            reportComment($_GET['id']);
        }

    }

    else

    {

        home();

    }

}

catch(Exception $e)

{

    $errorMessage = $e->getMessage();

    require('view/errorView.php');

}

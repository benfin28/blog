<?php

require_once("controller/controller.php");
session_start();

try

{ 
	if (isset($_SESSION['pseudo']) && isset ($_SESSION['pass']) && isConnected($_SESSION['pseudo'], $_SESSION['pass']))

	{

        if (isset ($_GET['action']))

        {


    		if ($_GET['action'] == 'listPosts')

            {

                getListPosts();

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

            elseif ($_GET['action'] == 'addPostForm')

            {
               

                addPostForm();

                
            }


            elseif ($_GET['action'] == 'addPost')

            {

                if (isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['content']) && !empty($_POST['content']) && isset($_POST['state']) && !empty($_POST['state']))

                {

                    if ($_POST['state'] == 'Brouillon')

                    {

                        addPost($_POST['title'], $_POST['content'], DRAFTED);

                    }

                    elseif ($_POST['state'] == 'Publier')

                    {

                        addPost($_POST['title'], $_POST['content'], PUBLISHED);
                    }

                }

                else

                {   

                    throw new Exception('Tous les champs ne sont pas remplis !');

                }

            }

            elseif ($_GET['action'] == 'modifyPostForm')

            {

                if (isset($_GET['id']) && $_GET['id'] > 0)

                {

                    modifyPostForm($_GET['id']);

                }

                else 

                {

                    throw new Exception('Aucun identifiant de billet envoyé');

                }

            }

            elseif ($_GET['action'] == 'modifyPost')

            {

                if (isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['content']) && !empty($_POST['content']) && isset($_POST['state']) && !empty($_POST['state']) && isset ($_GET['id']) && !empty($_GET['id']))

                {

                    if ($_POST['state'] == 'Brouillon')

                    {

                    modifyPost($_GET['id'], $_POST['title'], $_POST['content'], DRAFTED);

                    }

                    elseif ($_POST['state'] == 'Publier')

                    {

                       modifyPost($_GET['id'], $_POST['title'], $_POST['content'], PUBLISHED);
                    }

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

                    
                    modifyComment($_GET['id']);
                  

                }

                else

                {

                    throw new Exception('Aucun identifiant de commentaire envoyé');

                }

            }


            elseif ($_GET['action'] == 'getReportedComments')

            {
                             

                getReportedComments();

                               
            }

            else

            {
                homeAdmin();

            }
            
        }

        else

            {
                homeAdmin();

            }

    }

    else

    {

        throw new Exception('Veuillez vous connecter');
    }

}

catch(Exception $e)

{

    $errorMessage = $e->getMessage();

    require('view/errorView.php');

}
	
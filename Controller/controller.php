<?php


const REPORTED = 2;

const PUBLISHED = 1;

const DRAFTED = 0;


function loadClass($class)

{

  require_once 'Model/'. $class . '.class.php'; 

}


spl_autoload_register('loadClass');


function homeAdmin()

    {
        $posts = _getListPosts();

        require ('View/adminView.php');
    }


function home()

    {

        require ('View/homeView.php');

    }


function postAdmin()

    {

        $post = _getPost();

        require ('View/adminPostView.php');
    }



function connect ($pseudo, $pass)

	{

		$admin = new Admin(array('pseudo'=>$pseudo, 'pass'=>$pass));

    	$adminManager = new AdminManager();

    	$connect = $adminManager->connect($admin);

		if ($connect === false)

		{

			echo 'Mauvais identifiant ou mot de passe !';

		}


		else

		{

			session_start();

        	
       	 	$_SESSION['pseudo'] = $pseudo;

            $_SESSION['pass'] = $pass;

        	header('Location: admin.php');
    
   		}


	}


function isConnected($pseudo, $pass)

    {

        $admin = new Admin(array('pseudo'=> $pseudo, 'pass'=> $pass));

        $adminManager = new AdminManager();

        $connect = $adminManager->connect($admin);

        return $connect;
    }


function getListPosts($state = NULL)

{
    $posts = _getListPosts($state);
    require('view/listPostsView.php');

}


function _getListPosts($state = NULL)

{
    
    $postManager = new PostManager(); 

    $posts = $postManager->getListPosts($state); 

    return $posts;

    
}


function getListComments($id)

{

    
    $comments = _getListComments($id); 

    require_once('view/PostView.php');

}


function _getListComments($id)

{

    $commentManager = new CommentManager(); 

    $comments = $commentManager->getListComments($id); 

    return $comments;

}


function getPost($id)

{

   
    $post = _getPost($id);

    $comments = _getListComments($id);
/*echo'<pre>';
print_r($comments);
die();*/

    require_once('view/postView.php');

}


function _getPost($id)

{

    $postManager = new PostManager();

    $commentManager = new CommentManager();


    $post = $postManager->getPost($id);

    $comments = $commentManager->getListComments($id);
/*echo'<pre>';
print_r($comments);
die();*/

    return $post;


}


function addPostForm ()

{
   
    require_once('view\addPostView.php');
}


function addPost ($title, $content, $state)

{

    $post = new Post(array('title'=>$title, 'content'=>$content, 'state'=>$state));

    $postManager = new PostManager();

    $addPost = $postManager->addPost($post);


    if ($addPost === false) 

    {

        throw new Exception('Impossible d'.'ajouter le billet !');

    }

    else 

    {

        header('Location: admin.php');

    }


}


function modifyPostForm ($id)

{
    $postManager = new PostManager();

    $modifyPost = $postManager->getPost($id);

    require('view\modifyPostView.php');
}


function modifyPost ($id, $title, $content, $state)

{

    $post = new Post(array('id'=>$id, 'title'=>$title, 'content'=>$content, 'state'=>$state));

    $postManager = new PostManager();

    $modifyPost = $postManager->modifyPost($post);


    if ($modifyPost === false) 

    {

        throw new Exception('Impossible de modifier le billet !');

    }

    else 

    {

        header('Location: admin.php');

    }


}


function addComment($postId, $pseudo, $comment)

{

   $comment = new Comment(array('postId'=>$postId, 'author'=>$pseudo, 'comment'=>$comment));

    $commentManager = new CommentManager();

    $addComment = $commentManager->addComment($comment);


    if ($addComment === false) 

    {

        throw new Exception('Impossible d\'ajouter le commentaire !');

    }

    else 

    {

        header('Location: index.php?action=post&id=' . $postId);

    }

}


function modifyComment ($id)

{
    $comment = new Comment(array('id'=>$id));

    $commentManager = new CommentManager();

    $modifyComment = $commentManager->modifyComment($comment);


    if ($modifyComment === false) 

    {

        throw new Exception('Impossible de modifier le commentaire !');

    }

    else 

    {

        header('Location: admin.php');

    }


}


function reportComment ($id)

{

    $comment = new Comment(array('id'=>$id));

    $commentManager = new CommentManager();

    $reportComment = $commentManager->reportComment($comment);


    if ($reportComment === false) 

    {

        throw new Exception('Impossible de signaler le commentaire !');

    }

    else 

    {

        header('Location: index.php');

    }


}


function getReportedComments()

{

    $commentManager = new CommentManager(); 

    $comments = $commentManager->getReportedComments(); 

    
    require_once('view/reportedCommentsView.php');

}

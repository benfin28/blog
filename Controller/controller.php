<?php


const PUBLISHED = 1;

const DRAFTED = 0;


function loadClass($class)

{

  require_once 'Model/'. $class . '.class.php'; 

}


spl_autoload_register('loadClass');



function connect ($pseudo, $pass)

	{

		$admin = new Admin(array('pseudo'=>$pseudo, 'pass'=>$pass));

    	$adminManager = new AdminManager();

    	$connect = $postManager->connect($admin);

		if ($connect === false)

		{

			echo 'Mauvais identifiant ou mot de passe !';

		}


		else

		{

			session_start();

        	$_SESSION['id'] = $result['id'];

       	 	$_SESSION['pseudo'] = $pseudo;

        	header('Location: espace_membre.php');
    
   		}


	}

function getListPosts()

{

    $postManager = new PostManager(); 

    $posts = $postManager->getListPosts(); 

    require('view/listPostsView.php');

}


function getPost()

{

    $postManager = new PostManager();

    $commentManager = new CommentManager();


    $post = $postManager->getPost($_GET['id']);

    $comments = $commentManager->getListComments($_GET['id']);


    require('view/postView.php');

}


function addPostForm ()

{
    $postManager = new PostManager();

    $addPost = $postManager->addPost();

    require('view\addPostView.php');
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

        header('Location: index.php?action=id=' . $id);

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

        header('Location: index.php?action=id=' . $id);

    }


}


function addCommentForm ($postId)

{
    $commentManager = new CommentManager();

    $addComment = $commentManager->addComment($postId);

    require('view\addCommentView.php');
}


function addComment($postId, $pseudo, $comment)

{

   $comment = new Comment(array('post_id'=>$postId, 'author'=>$pseudo, 'comment'=>$comment));

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


function modifyComment ($id, $author, $comment, $state, $postId)

{
    $comment = new Comment(array('id'=>$id, 'author'=>$author, 'comment'=>$comment, 'state'=>$state, 'post_id'=>$postId));

    $commentManager = new CommentManager();

    $modifyComment = $commentManager->modifyComment($comment);


    if ($modifyComment === false) 

    {

        throw new Exception('Impossible de modifier le commentaire !');

    }

    else 

    {

        header('Location: index.php?action=post&id=' . $post_id);

    }


}

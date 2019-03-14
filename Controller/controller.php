<?php


<<<<<<< HEAD
const REPORTED = 2;

const PUBLISHED = 1;

const DRAFTED = 0;


function loadClass($class)

{

=======
const PUBLISHED = 1;

const DRAFTED = 0;


function loadClass($class)

{

>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51
  require_once 'Model/'. $class . '.class.php'; 

}


spl_autoload_register('loadClass');


<<<<<<< HEAD
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


=======
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51

function connect ($pseudo, $pass)

	{

		$admin = new Admin(array('pseudo'=>$pseudo, 'pass'=>$pass));

    	$adminManager = new AdminManager();

<<<<<<< HEAD
    	$connect = $adminManager->connect($admin);
=======
    	$connect = $postManager->connect($admin);
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51

		if ($connect === false)

		{

			echo 'Mauvais identifiant ou mot de passe !';

		}


		else

		{

			session_start();

<<<<<<< HEAD
        	
       	 	$_SESSION['pseudo'] = $pseudo;

            $_SESSION['pass'] = $pass;

        	header('Location: admin.php');
=======
        	$_SESSION['id'] = $result['id'];

       	 	$_SESSION['pseudo'] = $pseudo;

        	header('Location: espace_membre.php');
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51
    
   		}


	}

<<<<<<< HEAD

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
=======
function getListPosts()

{

    $postManager = new PostManager(); 

    $posts = $postManager->getListPosts(); 

    require('view/listPostsView.php');
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51

}


<<<<<<< HEAD
function _getPost($id)
=======
function getPost()
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51

{

    $postManager = new PostManager();

    $commentManager = new CommentManager();


<<<<<<< HEAD
    $post = $postManager->getPost($id);

    $comments = $commentManager->getListComments($id);
/*echo'<pre>';
print_r($comments);
die();*/

    return $post;

=======
    $post = $postManager->getPost($_GET['id']);

    $comments = $commentManager->getListComments($_GET['id']);


    require('view/postView.php');
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51

}


function addPostForm ()

{
<<<<<<< HEAD
   
    require_once('view\addPostView.php');
=======
    $postManager = new PostManager();

    $addPost = $postManager->addPost();

    require('view\addPostView.php');
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51
}


function addPost ($title, $content, $state)

{
<<<<<<< HEAD

=======
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51
    $post = new Post(array('title'=>$title, 'content'=>$content, 'state'=>$state));

    $postManager = new PostManager();

    $addPost = $postManager->addPost($post);


    if ($addPost === false) 

    {

        throw new Exception('Impossible d'.'ajouter le billet !');

    }

    else 

    {

<<<<<<< HEAD
        header('Location: admin.php');
=======
        header('Location: index.php?action=id=' . $id);
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51

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
<<<<<<< HEAD

=======
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51
    $post = new Post(array('id'=>$id, 'title'=>$title, 'content'=>$content, 'state'=>$state));

    $postManager = new PostManager();

    $modifyPost = $postManager->modifyPost($post);


    if ($modifyPost === false) 

    {

        throw new Exception('Impossible de modifier le billet !');

    }

    else 

    {

<<<<<<< HEAD
        header('Location: admin.php');
=======
        header('Location: index.php?action=id=' . $id);
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51

    }


}


<<<<<<< HEAD
=======
function addCommentForm ($postId)

{
    $commentManager = new CommentManager();

    $addComment = $commentManager->addComment($postId);

    require('view\addCommentView.php');
}


>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51
function addComment($postId, $pseudo, $comment)

{

<<<<<<< HEAD
   $comment = new Comment(array('postId'=>$postId, 'author'=>$pseudo, 'comment'=>$comment));
=======
   $comment = new Comment(array('post_id'=>$postId, 'author'=>$pseudo, 'comment'=>$comment));
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51

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


<<<<<<< HEAD
function modifyComment ($id)

{
    $comment = new Comment(array('id'=>$id));
=======
function modifyComment ($id, $author, $comment, $state, $postId)

{
    $comment = new Comment(array('id'=>$id, 'author'=>$author, 'comment'=>$comment, 'state'=>$state, 'post_id'=>$postId));
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51

    $commentManager = new CommentManager();

    $modifyComment = $commentManager->modifyComment($comment);


    if ($modifyComment === false) 

    {

        throw new Exception('Impossible de modifier le commentaire !');

    }

    else 

    {

<<<<<<< HEAD
        header('Location: admin.php');
=======
        header('Location: index.php?action=post&id=' . $post_id);
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51

    }


}
<<<<<<< HEAD


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
=======
>>>>>>> 698c3bd35c747fd17af16395b12910e82d89ae51

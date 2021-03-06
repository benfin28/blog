<?php
/**
 * 
 * Code skeleton generated by dia-uml2php5 plugin
 * written by KDO kdo@zpmag.com
 */

class Comment 

{

	/**
	 * 
	 * @var int
	 * @access protected
	 */
	protected  $id;

	/**
	 * 
	 * @var int
	 * @access protected
	 */
	protected  $postId;

	/**
	 * 
	 * @var varchar
	 * @access protected
	 */
	protected  $author;

	/**
	 * 
	 * @var text
	 * @access protected
	 */
	protected  $comment;

	/**
	 * 
	 * @var date
	 * @access protected
	 */
	protected  $commentDate;


	protected $state;


	protected $state;


	/**
	 * @access public
	 * @param array $donnees 
	 * @return void
	 */

	public function __construct(array $donnees)

	{
		
		$this->hydrate($donnees);
		
	}

	public function hydrate(array $donnees)

	{

	  foreach ($donnees as $key => $value)

	  {
	    
	    $method = 'set'.ucfirst($key);
	        
	    
	    if (method_exists($this, $method))

	    {
	      
	      $this->$method($value);

	    }
	  }
	}

	public function getId()

	{

		return $this->id;

	}

	public function getPostId()

	{

		return $this->postId;

	}

	public function getAuthor()

	{

		return $this->author;

	}

	public function getComment()

	{

		return $this->comment;

	}

	public function getCommentDate()

	{

		return $this->commentDate;

	}

	public function getState()

	{

		return $this->state;

	}

	public function getState()

	{

		return $this->state;

	}

	public function setId($id)

	{

		$id = (int) $id;

        if ($id > 0)

    	{

     		$this->id = $id;

		}

	}

	public function setPostId($postId)

	{

		$id = (int) $postId;

        if ($postId > 0)

    	{

     		$this->postId = $postId;

		}

	}

	public function setAuthor($author)

	{

		if (is_string($author))

   	 	{

      		$this->author = $author;

    	}

	}

	public function setComment($comment)

	{

		if (is_string($comment))

   	 	{

      		$this->comment = $comment;

    	}

	}

	public function setCommentDate($commentDate)

	{

		

      		$this->commentDate = $commentDate;

    	

	}

	public function setState($state)

	{

		if (is_bool($state))

   	 	{

      		$this->state = $state;

    	}

	}

	public function setState($state)

	{

		if (is_bool($state))

   	 	{

      		$this->state = $state;

    	}

	}

}
?>
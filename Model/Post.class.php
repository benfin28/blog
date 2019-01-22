<?php
/**
 * 
 * Code skeleton generated by dia-uml2php5 plugin
 * written by KDO kdo@zpmag.com
 */

class Post 

{

	/**
	 * 
	 * @var int
	 * @access protected
	 */
	protected  $id;

	/**
	 * 
	 * @var varchar
	 * @access protected
	 */
	protected  $title;

	/**
	 * 
	 * @var text
	 * @access protected
	 */
	protected  $content;

	/**
	 * 
	 * @var date
	 * @access public
	 */
	protected  $date_creation;


	protected  $state;


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

	public function getTitle()

	{

		return $this->title;

	}

	public function getContent()

	{

		return $this->content;

	}

	public function getDateCreation()

	{

		return $this->date_creation;

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

	public function setTitle($title)

	{

		if (is_string($title))

   	 	{

      		$this->title = $title;

    	}

	}

	public function setContent($content)

	{

		if (is_string($content))

   	 	{

      		$this->content = $content;

    	}

	}

	public function getDateCreation($dateCreation)

	{

		if (is_date($date_creation))

   	 	{

      		$this->date_creation = $date_creation;

    	}

	}

	public function setState($state)

	{

		if (is_string($state))

   	 	{

      		$this->state = $state;

    	}

	}


}
?>
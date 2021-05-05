<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 */
class Author
{
	/**
	 * @Column(type="integer")
	 * @Id
	 * @GeneratedValue
	 */
	private $id;

	/**
	 * @Column(type="string")
	 */
	private $name;

	/**
	 * @OneToMany(targetEntity="Article", mappedBy="author")
	 * @OrderBy({"published" = "DESC"})
	 */
	private $articles;

	public function __construct()
	{
		$this->articles = new ArrayCollection;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getArticles()
	{
		return $this->articles;
	}

}
<?php


namespace App\Entity;

/**
 * @Entity
 */
class Article
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
	 * @Column(type="string", unique=true)
	 */
	private $slug;

	/**
	 * @Column(type="string", unique=true)
	 */
	private $image;

	/**
	 * @Column(type="text")
	 */
	private $body;

	/**
	 * @Column(type="datetime")
	 */
	private $published;

	/**
	 * @ManyToOne(targetEntity="Author", inversedBy="articles")
	 */
	private $author;

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getSlug()
	{
		return $this->slug;
	}

	/**
	 * @param mixed $slug
	 */
	public function setSlug($slug)
	{
		$this->slug = $slug;
	}

	/**
	 * @return mixed
	 */
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * @param mixed $image
	 */
	public function setImage($image)
	{
		$this->image = $image;
	}

	/**
	 * @return mixed
	 */
	public function getBody()
	{
		return $this->body;
	}

	/**
	 * @param mixed $body
	 */
	public function setBody($body)
	{
		$this->body = $body;
	}

	/**
	 * @return mixed
	 */
	public function getPublished()
	{
		return $this->published;
	}

	/**
	 * @param mixed $published
	 */
	public function setPublished(\DateTime $published = null)
	{
		$this->published = $published;
	}

	/**
	 * @return mixed
	 */
	public function getAuthor()
	{
		return $this->author;
	}

	/**
	 * @param mixed $author
	 */
	public function setAuthor(Author $author)
	{
		$this->author = $author;
	}

}
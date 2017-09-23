<?php

class Article
{
	private $_title;
	private $_category;
	private $_createdAt;
	private $_author;
	private $_content;

	public function __construct($title, $category, $createdAt, $author, $content)
	{
		$this->setTitle($title);
		$this->setCategory($category);
		$this->setCreatedAt($createdAt);
		$this->setAuthor($author);
		$this->setContent($content);
	}

	// GETTERS
	public function getTitle()
	{
		return $this->_title;
	}

	public function getCategory()
	{
		return $this->_category;
	}

	public function getCreatedAt()
	{
		return $this->_createdAt;		
	}

	public function getAuthor()
	{
		return $this->_author;
	}

	public function getContent()
	{
		return $this->_content;
	}

	// SETTERS
	public function setTitle(string $title)
	{
		$this->_title = htmlspecialchars($title);
	}

	public function setCategory(string $category)
	{
		$this->_category = htmlspecialchars($category);
	}

	public function setCreatedAt(string $createdAt)
	{
		$this->_createdAt = htmlspecialchars($createdAt);
	}

	public function setAuthor(string $author)
	{
		$this->_author = htmlspecialchars($author);
	}

	public function setContent(string $content)
	{
		$this->_content = htmlspecialchars($content);
	}
}

$article1 = new Article("titre", "catégorie", "00/00/00", "Vanessa", "lorem...");
$article2 = new Article("titre1", "catégorie2", "01/02/17", "Bruno", "coucou...");

echo "Auteur de l'article 2 : " . $article2->getAuthor() . "<br>";
echo "Catégorie de l'article 2 : " . $article2->getCategory() . "<br>";
<?php

namespace cinema\filmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Genre
 *
 * @ORM\Table(name="genre")
 * @ORM\Entity(repositoryClass="cinema\filmBundle\Repository\GenreRepository")
 */
class Genre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    /**
     * @var int
     *
     * @ORM\OneToMany(targetEntity="Film", mappedBy="genre")
     */
    private $film;

    public function __toString() {
        return $this->name;

    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Genre
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set films
     *
     * @param int $films
     *
     * @return Genre
     */
    public function setFilms($films)
    {
        $this->films = $films;

        return $this;
    }

}

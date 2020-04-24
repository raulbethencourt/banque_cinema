<?php

namespace cinema;

/**
 * This class set the Genre 
 */
class Genre
{
    /**
     * Genre data
     * @var [array]
     * @var [Film]
     */
    private $_type;
    private $_films;

    /**
     * Allows to pass parameters on object construction
     * @param string $type
     */
    public function __construct(string  $type)
    {
        $this->_type = $type;
        $this->_films = [];
    }

    /**
     * Get the value of _type
     */
    public function get_type()
    {
        return $this->_type;
    }

    /**
     * Get the value of _films
     */
    public function get_films()
    {
        return $this->_films;
    }

    /**
     * This function includes Film into $_films
     * @param [Film] $film
     */
    public function incluireFilm($film)
    {
        $this->_films[] = $film;
    }

    /**
     * This function display how many films are creates of one Genre
     * @return [HTML]
     */
    public function setGenre()
    {
        echo "<h2>Les filmes du Genre " . $this->get_type() . "</h2>";
        echo "<ul>";
        foreach ($this->get_films() as $film) {
            echo "<li>" . $film->get_titre() . ".</li>";
        }
        echo "</ul>";
    }
}

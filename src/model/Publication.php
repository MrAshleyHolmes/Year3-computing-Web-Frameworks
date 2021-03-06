<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 31/03/2016
 * Time: 02:12
 */

namespace Itb\Model;

use Mattsmithdev\PdoCrud\DatabaseTable;

/**
 * Contains the details of a Publication
 * Class Publication
 * @package Itb\Model
 */
class Publication extends DatabaseTable
{
    /**
     * unique identifier for the Publication
     * Auto-incremented by database
     * @var
     */
    private $id;

    /**
     * the Publication title
     * @var
     */
    private $title;

    /**
     * authors id
     * @var
     */
    private $authorId;

    /**
     * publication $url
     * @var
     */
    private $url;

    /**
     * gets the $id
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * sets the $id
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * gets the $title
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * sets the $title
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * gets the $authorId
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * sets the $authorId
     * @param mixed $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }

    /**
     * gets the $url
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * sets the $url
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}
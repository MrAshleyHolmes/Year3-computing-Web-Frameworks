<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 30/03/2016
 * Time: 16:39
 */

namespace Itb\Model;

use Mattsmithdev\PdoCrud\DatabaseTable;

/**
 * Contains the details of Messages
 * Class Message
 * @package Itb\Model
 */

class Message extends DatabaseTable
{
    /**
     * the object's unique ID
     * @var int
     */
    private $id;

    /**
     * text the user posted
     * @var string $text
     */
    private $text;

    /**
     * name of person who posted the text
     * @var string $user
     */
    private $user;

    /**
     * PHP timestamp of when text created
     * @var \DateTime
     */
    private $timestamp;

    /**
     * store the current date/time into the 'timestamp' property
     */
    public function __construct()
    {
        $now = new \DateTime();
        $this->timestamp = $now->getTimestamp();
    }

    /**
     * gets the id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * sets the text
     * @param $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * sets the user
     * @param $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * gets the texts
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * gets the user
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * get the timestamp as a PHP \DateTime object
     * @return \DateTime
     */
    public function getTimestamp()
    {
        $dateTimeObject = new \DateTime();
        $dateTimeObject->setTimestamp($this->timestamp);

        return $dateTimeObject;
    }

}
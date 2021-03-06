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
 * Contains the details of an Action
 * Class Action
 * @package Itb\Model
 */

class Action extends DatabaseTable
{
    /**
     * int
     *
     * @var
     */
    private $id;

    /**
     * String
     *
     * @var
     */
    private $description;

    /**
     * int
     *
     * @var
     */
    private $implementorid;

    /**
     * int
     *
     * @var
     */
    private $deadline;

    /**
     * String
     *
     * @var
     */
    private $status;

    /**
     * return the id property value
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * return the id property value
     *
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * gets the description property value
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * sets the description property value
     *
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * gets the implementorid property value
     *
     * @return mixed
     */
    public function getImplementorid()
    {
        return $this->implementorid;
    }

    /**
     * sets the implementorid property value
     *
     * @param mixed $implementorid
     */
    public function setImplementorid($implementorid)
    {
        $this->implementorid = $implementorid;
    }

    /**
     * gets the deadline
     *
     * @return mixed
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * sets the deadline
     *
     * @param mixed $deadline
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;
    }

    /**
     * gets status
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * set status
     *
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
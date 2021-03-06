<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 31/03/2016
 * Time: 02:17
 */

namespace Itb\Model;

use Mattsmithdev\PdoCrud\DatabaseTable;
use Mattsmithdev\PdoCrud\DatabaseManager;

/**
 * Contains the details of a User
 * Class User
 * @package Itb\Model
 */
class User extends DatabaseTable
{
    const ROLE_USER = 1;
    const ROLE_ADMIN = 2;

    /**
     * unique identifier for the User
     * Auto-incremented by database
     * @var
     */
    private $id;

    /**
     * the users $username
     * @var
     */
    private $username;

    /**
     * the users $password
     * @var
     */
    private $password;

    /**
     * identifies the users $role
     * @var
     */
    private $role;

    /**
     * gets the user's unique identifier
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * sets the user's unique identifier
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * gets the users $username
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * sets the users $username
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * gets the users password (hashed if read from database)
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * gets the users role
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * sets the users role
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * hash the password before storing ...
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $this->password = $hashedPassword;
    }

    /**
     * return success (or not) of attempting to find matching username/password in the repo
     * @param $username
     * @param $password
     *
     * @return bool
     */
    public static function canFindMatchingUsernameAndPassword($username, $password)
    {
        $user = User::getOneByUsername($username);

        // if no record has this username, return FALSE
        if (null == $user) {
            return false;
        }

        // hashed correct password
        $hashedStoredPassword = $user->getPassword();

        // return whether or not hash of input password matches stored hash
        return password_verify($password, $hashedStoredPassword);
    }

    /**
     * if record exists with $username, return User object for that record
     * otherwise return 'null'
     *
     * @param $username
     *
     * @return mixed|null
     */
    public static function getOneByUsername($username)
    {
        $db = new DatabaseManager();
        $connection = $db->getDbh();

        $sql = 'SELECT * FROM users WHERE username=:username';
        $statement = $connection->prepare($sql);
        $statement->bindParam(':username', $username, \PDO::PARAM_STR);
        $statement->setFetchMode(\PDO::FETCH_CLASS, __CLASS__);
        $statement->execute();

        if ($object = $statement->fetch()) {
            return $object;
        } else {
            return null;
        }
    }

}
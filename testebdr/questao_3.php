<?php
/**
 * Classes criada no mesmo arquivo somente para fins didáticos
 * Não foi especificado a camada da base de dados
 */

/**
 * User
 */
class User
{
    /** @var DatabaseConnection DB connection */
    private $dbconn;

    /**
     * @param DatabaseConnection
     */
    public function __construct(DatabaseConnection $dbconn)
    {
        $this->$dbconn = $dbconn;
    }

    /**
     * @return array
     */
    public function findAll()
    {
        return $dbconn->query('select name from user order by name');
    }
}

/**
 * MyUserClass
 */
class MyUserClass
{
    /** @var User Model class */
    private $user;

    /**
     * @param User
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function getUserList()
    {
        return $user->findAll();
    }
}

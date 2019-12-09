<?php


class Admin
{
    private $id_admin;
    private $user_name_admin;
    private $pass_admin;

    /**
     * Admin constructor.
     * @param $id_admin
     * @param $user_name_admin
     * @param $pass_admin
     */
    public function __construct ($id_admin, $user_name_admin, $pass_admin)
    {
        $this->id_admin = $id_admin;
        $this->user_name_admin = $user_name_admin;
        $this->pass_admin = $pass_admin;
    }

    /**
     * @return mixed
     */
    public function getIdAdmin ()
    {
        return $this->id_admin;
    }

    /**
     * @param mixed $id_admin
     */
    public function setIdAdmin ($id_admin)
    {
        $this->id_admin = $id_admin;
    }

    /**
     * @return mixed
     */
    public function getUserNameAdmin ()
    {
        return $this->user_name_admin;
    }

    /**
     * @param mixed $user_name_admin
     */
    public function setUserNameAdmin ($user_name_admin)
    {
        $this->user_name_admin = $user_name_admin;
    }

    /**
     * @return mixed
     */
    public function getPassAdmin ()
    {
        return $this->pass_admin;
    }

    /**
     * @param mixed $pass_admin
     */
    public function setPassAdmin ($pass_admin)
    {
        $this->pass_admin = $pass_admin;
    }


}
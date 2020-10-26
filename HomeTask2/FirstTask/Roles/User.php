<?php


namespace FirstTask\Roles;


abstract class User
{
    protected $role;
    protected $name;
    protected $phoneNumber;

    public abstract function getRole();


    protected function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $phoneNumber
     */
    protected function setPhoneNumber($phoneNumber)
    {

        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }



}
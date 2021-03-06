<?php

namespace FirstTask\Roles;


class Viewer extends User
{
    public function __construct($name, $phoneNumber)
    {
        $this->setName($name);
        $this->setPhoneNumber($phoneNumber);

        $this->role = $this->explodeForRole();
    }
    private function explodeForRole()
    {
        $str = strtolower(__CLASS__);
        $expClassName = explode('\\' , $str);

        $res = end($expClassName);

        return $res;
    }

    public function getRole()
    {
        return $this->role;
    }
}
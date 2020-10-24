<?php


class Accounting
{
    public $users = [];

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->users;
    }

    public function add(array $user){
        foreach ($user as $item => $value){
            $this->users[$item] = $value;
        }
    }

    public function deleteData($accountNumber)
    {
        foreach ($this->users as $user => $value){
            if($user == $accountNumber){
               unset($this->users[$user]);
            }
        }
    }

    public function update(array $newData)
    {
        foreach ($this->users as $item => $value){
            $this->users = array_replace($this->users,$newData);
        }
    }
}

$accounting = new Accounting();

$accounting->add(['3344' => ['sasha', '0999667711']]);
$accounting->add(['3333' => ['andrey', '0995568712']]);
$accounting->add(['5566' => ['kira', '0934478335']]);

$accounting->deleteData( '3344 ');
$accounting->update(['3333'=>['Masha', '0674478822']]);

var_dump($accounting->getUser());
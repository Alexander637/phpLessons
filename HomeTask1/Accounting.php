<?php


class Accounting
{
    const afterTax = 0.8;
    public $users = [];
    public $personalTax;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->users;
    }

    public function add(array $user)
    {
        foreach ($user as $item => $value){
            $value[] = $this->taxes($user);
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
        foreach ($newData as $item => $value){
            $value[] = $this->taxes($newData);
            $newData[$item] = $value;
        }
        $this->users = array_replace($this->users,$newData);
    }
    
    public function taxes(array $user)
    {
        foreach ($user as $item => $value){
            if(is_array($value)){
                foreach ($value as $i){
                    if(is_int($i)){
                        $this->personalTax = $i / self::afterTax - $i;
                    }
                }
            }
        }
        return $this->personalTax;
    }

}

$accounting = new Accounting();

$accounting->add(['3344' => ['sasha', '+380999667711', 20000]]);
$accounting->add(['3333' => ['andrey', '+380995568712', 15000]]);
$accounting->add(['5566' => ['kira', '+380934478335', 30000]]);

$accounting->deleteData( '3344');
$accounting->update(['3333'=>['Masha', '+380674478822', 32000]]);

echo '<br>';
var_dump($accounting->getUser());

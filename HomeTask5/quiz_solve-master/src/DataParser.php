<?php


namespace QuizProcessing;

use Exception;
use QuizProcessing\Struct\AbstractBaseStruct;
use QuizProcessing\Struct\AddressInterface;
use QuizProcessing\Struct\ContactInterface;
use QuizProcessing\Struct\Factory\StructFactory;
use QuizProcessing\Struct\Guest;
use QuizProcessing\Struct\ProfileInterface;
use QuizProcessing\Struct\Teacher;
use QuizProcessing\Struct\User;

class DataParser
{
    private $data;
    private $jsonFile;

    public function __construct(string $jsonFile)
    {
        if (!file_exists($jsonFile)) {
            throw new Exception('File not exists');
        }
        $this->jsonFile = $jsonFile;
    }

    public function process()
    {
        try {

            $this->loadJson();

            foreach ($this->data as $item) {
                $struct = StructFactory::create($item['type']);
                if ($struct instanceof AbstractBaseStruct) {
                    $struct->type = $item['type'];
                }
                if ($struct instanceof AbstractBaseStruct) {
                    $struct->name = $item['name'];
                }
                if ($struct instanceof ProfileInterface) {
                    $struct->first_name = $item['first_name'];
                }
                if ($struct instanceof ProfileInterface) {
                    $struct->last_name = $item['last_name'];
                }
                if ($struct instanceof ContactInterface) {
                    $struct->email = $item['email'];
                }
                if  ($struct instanceof AddressInterface) {
                    $struct->address = $item['address'];
                }

                if ($struct instanceof User) {
                    var_dump($struct);
                }
                if ($struct instanceof Teacher) {
                    var_dump($struct);
                }

                if ($struct instanceof Guest) {
                    var_dump($struct);
                    break;
                }

            }



        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }

    private function loadJson()
    {
        $json = file_get_contents($this->jsonFile);

        $data = json_decode($json, true);
        if ($data === null) {
            throw new Exception('Invalid json file');
        }
        $this->data = $data;
    }
}
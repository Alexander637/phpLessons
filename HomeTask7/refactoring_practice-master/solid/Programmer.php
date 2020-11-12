<?php

//Hint - Interface Segregation Principle
interface Workable
{
    public function canCode();
    public function code();
}
interface Test
{
    public function test();
}

class Programmer implements Workable, Test
{
    public function canCode()
    {
        return true;
    }
    public function code()
    {
        return 'coding';
    }
    public function test()
    {
        return 'testing in localhost';
    }
}

class Tester implements Test
{

    public function test()
    {
        return 'testing in test server';
    }
}

class ProjectManagement
{
    public function processCode(Workable $member)
    {
        if ($member->canCode()) {
            $member->code();
        }
    }
}

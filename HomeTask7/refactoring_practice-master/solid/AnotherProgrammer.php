<?php

//Hint - Open Closed Principle
interface TextInterface
{
    public function text(): string;
}
class AnotherProgrammer implements TextInterface
{
    public function text(): string
    {
        return 'coding';
    }
}
class Tester implements TextInterface
{
    public function text(): string
    {
        return 'testing';
    }
}

/** Что если добавить еще класс Designer с методом draw() **/

class ProjectManagement
{
    public function process($member)
    {
        if ($member instanceof TextInterface) {
            $member->text();
        } else {
            throw new Exception('Invalid input member');
        }
    }
}


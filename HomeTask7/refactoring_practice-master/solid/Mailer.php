<?php

//Hint - Dependency Inversion Principle
interface MailInterface
{
}
class Mailer implements MailInterface
{
}

class SendWelcomeMessage
{
    private $mailer;
    public function __construct(MailInterface $mailer)
    {
        $this->mailer = $mailer;
    }
}

//SendWelcomeGoolge
//SendWelcomeSendgrid
//SendWelcomeMailchimp

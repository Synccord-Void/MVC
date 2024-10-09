<?php

class Responsible extends Participant
{
    public $email;

    public function __construct($firstName, $lastName, $age, $isMember, $arrival, $departure, $email)
    {
        parent::__construct($firstName, $lastName, $age, $isMember, $arrival, $departure);
        $this->email = $email;
    }
}

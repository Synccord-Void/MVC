<?php

class Participant
{

    use Model;
    public $firstName;
    public $lastName;
    public $age;
    public $isMember;
    public $arrival;
    public $departure;
    public $nights;

    public function __construct($firstName, $lastName, $age, $isMember, $arrival, $departure)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->isMember = $isMember;
        $this->arrival = $arrival;
        $this->departure = $departure;
        $this->nights = $this->calculateNights();
    }

    private function calculateNights()
    {
        $arrivalDate = strtotime($this->arrival);
        $departureDate = strtotime($this->departure);
        if ($arrivalDate && $departureDate) {
            return ceil(($departureDate - $arrivalDate) / (60 * 60 * 24));
        }
        return 0;
    }
}

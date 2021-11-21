<?php

namespace App\Entities;

use App\Interfaces\HasFirstName;
use App\Interfaces\HasLastName;

class House
{
    private HasFirstName&HasLastName $person;

    public function __construct(HasFirstName&HasLastName $person)
    {
        $this->person = $person;
    }

    public function getOwner(): string
    {
        return $this->person->getFirstName() . ' ' . $this->person->getLastName();
    }
}

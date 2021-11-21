<?php

namespace App\Entities;

use App\Interfaces\HasFirstName;
use App\Interfaces\HasLastName;

/**
 * @todo Implement HasLastName
 */
class Person implements HasFirstName, HasLastName
{
    public function __construct(
        readonly public string $firstName,
        readonly public string $lastName
    ) {

    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
}

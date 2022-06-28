<?php

namespace App;

class Person
{
    protected int $deathAge, $deathYear;

    /**
     * Create a new Person instance
     *
     * @param int $deathAge
     * @param int $deathYear
     */
    public function __construct(int $deathAge, int $deathYear)
    {
        $this->deathAge  = $deathAge;
        $this->deathYear = $deathYear;
    }

    /**
     * Check if Person's age and year of death is valid.
     *
     * @return bool
     */
    public function isValid() : bool
    {
        return $this->deathAge  > 0 AND
               $this->deathYear > 0 AND
               $this->deathYear > $this->deathAge;
    }

    /**
     * Get number of people killed by Witch on Person birth year.
     *
     * @return int
     */
    public function getNumberOfKilledOnBirthYear() : int
    {
        // The rule of people killed every year follow Sum of Fibonacci number function
        return Helper::fibSum($this->deathYear - $this->deathAge);
    }
}
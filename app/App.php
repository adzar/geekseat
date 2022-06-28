<?php

namespace App;

class App
{
    /**
     * @return void
     */
    public function run(): void
    {
        // Read input from user
        $da1 = (int) readline('(Person 1)  Age of Death : ');
        $dy1 = (int) readline('(Person 1) Year of Death : ');
        $da2 = (int) readline('(Person 2)  Age of Death : ');
        $dy2 = (int) readline('(Person 2) Year of Death : ');

        // Create new Person instances
        $person1 = new Person($da1, $dy1);
        $person2 = new Person($da2, $dy2);

        // Default output
        $output = -1;

        // Calculate average number of killed people on birth year of Person 1 & 2
        // only if age and year of death is valid
        if( $person1->isValid() AND $person2->isValid() )
        {
            $output = ( $person1->getNumberOfKilledOnBirthYear() +
                        $person2->getNumberOfKilledOnBirthYear() ) / 2;
        }

        // Display output to user
        echo "Average people killed on birth year of Person 1 & 2 : ".$output."\n";
    }
}
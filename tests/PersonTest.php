<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Person;

final class PersonTest extends TestCase
{
    public function isValidDataProvider(): array
    {
        return
        [
            [ 10,  12,  true],
            [ 12,  10, false],
            [-10,  12, false],
            [ 10, -12, false],
            [-10, -12, false],
            [  0,  12, false],
            [ 10,   0, false],
            [  0,   0, false],
        ];
    }

    /**
     * @dataProvider isValidDataProvider
     */
    public function testIsValid($deathAge, $deathYear, $expected)
     {
        $person = new Person($deathAge, $deathYear);
        $result = $person->isValid();

        $this->assertSame($expected, $result);
     }

    public function getNumberOfKilledOnBirthYearDataProvider(): array
    {
        return
        [
            [ 11,  10,   1],
            [ 12,  10,   2],
            [ 13,  10,   4],
            [ 14,  10,   7],
            [ 15,  10,  12],
            [ 16,  10,  20],
            [ 17,  10,  33],
            [ 18,  10,  54],
            [ 19,  10,  88],
            [ 19,  10, 143],
        ];
    }

    /**
     * @dataProvider getNumberOfKilledOnBirthYearDataProvider
     */
     public function testGetNumberOfKilledOnBirthYear()
     {
         $person = new Person(10, 12);

         $this->assertSame(2, $person->getNumberOfKilledOnBirthYear());
     }
}
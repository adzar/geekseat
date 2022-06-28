<?php

namespace App;

class Helper
{
    /**
     * Calculate sum of fibonacci for a given number.
     *
     * @param int $number
     * @return int
     */
    public static function fibSum(int $number): int
    {
        if($number <= 0) { return 0; }
 
        $fib[0] = 0;
        $fib[1] = 1;
    
        $sum = $fib[0] + $fib[1];
    
        for($i = 2; $i <= $number; $i++)
        {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
            $sum += $fib[$i];
        }
    
        return $sum;
    }
}
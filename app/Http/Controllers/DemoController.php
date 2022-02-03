<?php

namespace App\Http\Controllers;

class DemoController
{
    public function __invoke()
    {
        $output = "Hello, Laracon Online!";
        $output = strtoupper($output);
        for($i = 0; $i< 3; $i++){
            $output .= random_int(0, 9);
        }
        return $output;
    }
}

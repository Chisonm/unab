<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebTest extends Test
{
    Public function webTest(){
        return $this->test().' web test';
    }
}

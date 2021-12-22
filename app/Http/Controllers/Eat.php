<?php


namespace App\Http\Controllers;


class Eat
{
    public function eat()
    {
        app('eat')->kuaizi();
        app('eat')->fan();
    }
}

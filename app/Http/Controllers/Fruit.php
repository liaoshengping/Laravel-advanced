<?php


namespace App\Http\Controllers;

class Fruit
{

    public $express;

    public function __construct(\App\Contracts\Express $express)
    {
        $this->express = $express;
    }

    public function get()
    {

        return $this->express->getAmount();

    }

}

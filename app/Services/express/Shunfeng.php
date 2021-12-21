<?php


namespace App\Services\express;


use App\Contracts\Express;

class Shunfeng implements Express
{

    public function getAmount()
    {
        return 20;
    }
}

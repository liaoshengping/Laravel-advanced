<?php


namespace App\Services\express;

use App\Contracts\Express;

class Yuantong implements Express
{

    public function getAmount()
    {
        return 10;
    }
}

<?php


namespace App\Contracts;


interface Express
{
    /**
     * 获取第三方 物流配置的价格
     * @return mixed
     */
    public function getAmount();

}

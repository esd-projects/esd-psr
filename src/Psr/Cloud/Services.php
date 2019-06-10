<?php
/**
 * Created by PhpStorm.
 * User: administrato
 * Date: 2019/6/10
 * Time: 13:47
 */

namespace ESD\Psr\Cloud;


interface Services
{
    /**
     * @param string $service
     * @return ServiceInfoList
     */
    public function getServices(string $service): ?ServiceInfoList;
}
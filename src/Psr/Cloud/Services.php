<?php
/**
 * Created by PhpStorm.
 * User: 白猫
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
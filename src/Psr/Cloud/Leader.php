<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/6/10
 * Time: 13:37
 */

namespace ESD\Psr\Cloud;


interface Leader
{
    public function isLeader(): bool;

    public function setLeader(bool $leader): void;
}
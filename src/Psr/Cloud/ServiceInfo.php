<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/6/10
 * Time: 13:55
 */

namespace ESD\Psr\Cloud;


class ServiceInfo
{
    /**
     * @var string
     */
    private $serviceName;

    /**
     * @var string
     */
    private $serviceId;
    /**
     * @var string
     */
    private $serviceAddress;
    /**
     * @var string
     */
    private $servicePort;
    /**
     * @var null|string[]
     */
    private $serviceMeta;

    /**
     * @var null|string[]
     */
    private $serviceTags;

    public function __construct($serviceName, $serviceId, $serviceAddress, $servicePort, $serviceMeta, $serviceTags)
    {
        $this->serviceName = $serviceName;
        $this->serviceId = $serviceId;
        $this->serviceAddress = $serviceAddress;
        $this->servicePort = $servicePort;
        $this->serviceMeta = $serviceMeta;
        $this->serviceTags = $serviceTags;
    }

    /**
     * @return string
     */
    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    /**
     * @param string $serviceName
     */
    public function setServiceName(string $serviceName): void
    {
        $this->serviceName = $serviceName;
    }

    /**
     * @return string
     */
    public function getServiceAddress(): string
    {
        return $this->serviceAddress;
    }

    /**
     * @param string $serviceAddress
     */
    public function setServiceAddress(string $serviceAddress): void
    {
        $this->serviceAddress = $serviceAddress;
    }

    /**
     * @return string
     */
    public function getServicePort(): string
    {
        return $this->servicePort;
    }

    /**
     * @param string $servicePort
     */
    public function setServicePort(string $servicePort): void
    {
        $this->servicePort = $servicePort;
    }

    /**
     * @return string[]|null
     */
    public function getServiceMeta(): ?array
    {
        return $this->serviceMeta;
    }

    /**
     * @param string[]|null $serviceMeta
     */
    public function setServiceMeta(?array $serviceMeta): void
    {
        $this->serviceMeta = $serviceMeta;
    }

    /**
     * @return string
     */
    public function getServiceId(): string
    {
        return $this->serviceId;
    }

    /**
     * @param string $serviceId
     */
    public function setServiceId(string $serviceId): void
    {
        $this->serviceId = $serviceId;
    }

    /**
     * @param string[]|null $serviceTags
     * @return ServiceInfo
     */
    public function setServiceTags(?array $serviceTags): ServiceInfo
    {
        $this->serviceTags = $serviceTags;
        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getServiceTags(): ?array
    {
        return $this->serviceTags;
    }
}
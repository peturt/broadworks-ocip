<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Informs BroadWorks that a file was uploaded to the repository. The response is always a SuccessResponse.
 */
class DeviceManagementPutFileRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'DeviceManagementPutFileRequest';
    protected $deviceAccessURI;
    protected $ipAddress;

    public function __construct(
         $deviceAccessURI = '',
         $ipAddress = ''
    ) {
        $this->setDeviceAccessURI($deviceAccessURI);
        $this->setIpAddress($ipAddress);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceAccessURI($deviceAccessURI = null)
    {
        $this->deviceAccessURI = ($deviceAccessURI InstanceOf DeviceManagementAccessURI)
             ? $deviceAccessURI
             : new DeviceManagementAccessURI($deviceAccessURI);
        $this->deviceAccessURI->setElementName('deviceAccessURI');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementAccessURI $deviceAccessURI
     */
    public function getDeviceAccessURI()
    {
        return ($this->deviceAccessURI)
            ? $this->deviceAccessURI->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIpAddress($ipAddress = null)
    {
        $this->ipAddress = ($ipAddress InstanceOf NetAddress)
             ? $ipAddress
             : new NetAddress($ipAddress);
        $this->ipAddress->setElementName('ipAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $ipAddress
     */
    public function getIpAddress()
    {
        return ($this->ipAddress)
            ? $this->ipAddress->getElementValue()
            : null;
    }
}

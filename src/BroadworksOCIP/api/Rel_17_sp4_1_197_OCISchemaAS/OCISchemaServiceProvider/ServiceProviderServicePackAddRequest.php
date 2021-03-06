<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to add a service pack to a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderServicePackAddRequest';
    protected $serviceProviderId;
    protected $servicePackName;
    protected $servicePackDescription;
    protected $isAvailableForUse;
    protected $servicePackQuantity;
    protected $serviceName;

    public function __construct(
         $serviceProviderId = '',
         $servicePackName = '',
         $servicePackDescription = null,
         $isAvailableForUse = '',
         $servicePackQuantity = '',
         $serviceName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setServicePackName($servicePackName);
        $this->setServicePackDescription($servicePackDescription);
        $this->setIsAvailableForUse($isAvailableForUse);
        $this->setServicePackQuantity($servicePackQuantity);
        $this->setServiceName($serviceName);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
        $this->servicePackName->setElementName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $servicePackName
     */
    public function getServicePackName()
    {
        return ($this->servicePackName)
            ? $this->servicePackName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServicePackDescription($servicePackDescription = null)
    {
        $this->servicePackDescription = ($servicePackDescription InstanceOf ServicePackDescription)
             ? $servicePackDescription
             : new ServicePackDescription($servicePackDescription);
        $this->servicePackDescription->setElementName('servicePackDescription');
        return $this;
    }

    /**
     * 
     * @return ServicePackDescription $servicePackDescription
     */
    public function getServicePackDescription()
    {
        return ($this->servicePackDescription)
            ? $this->servicePackDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsAvailableForUse($isAvailableForUse = null)
    {
        $this->isAvailableForUse = new PrimitiveType($isAvailableForUse);
        $this->isAvailableForUse->setElementName('isAvailableForUse');
        return $this;
    }

    /**
     * 
     * @return boolean $isAvailableForUse
     */
    public function getIsAvailableForUse()
    {
        return ($this->isAvailableForUse)
            ? $this->isAvailableForUse->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServicePackQuantity(UnboundedPositiveInt $servicePackQuantity = null)
    {
        $this->servicePackQuantity = ($servicePackQuantity InstanceOf UnboundedPositiveInt)
             ? $servicePackQuantity
             : new UnboundedPositiveInt($servicePackQuantity);
        $this->servicePackQuantity->setElementName('servicePackQuantity');
        return $this;
    }

    /**
     * 
     * @return UnboundedPositiveInt $servicePackQuantity
     */
    public function getServicePackQuantity()
    {
        return $this->servicePackQuantity;
    }

    /**
     * 
     */
    public function setServiceName($serviceName = null)
    {
        $this->serviceName = ($serviceName InstanceOf UserService)
             ? $serviceName
             : new UserService($serviceName);
        $this->serviceName->setElementName('serviceName');
        return $this;
    }

    /**
     * 
     * @return UserService $serviceName
     */
    public function getServiceName()
    {
        return ($this->serviceName)
            ? $this->serviceName->getElementValue()
            : null;
    }
}

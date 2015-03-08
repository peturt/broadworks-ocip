<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get a home zone from the BroadWorks Mobile Manager.
 *         The response is either EnterpriseBroadWorksMobileManagerGetHomeZoneResponse or ErrorResponse.
 */
class EnterpriseBroadWorksMobileManagerGetHomeZoneRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseBroadWorksMobileManagerGetHomeZoneResponse';
    public    $name              = __CLASS__;
    protected $serviceProviderId = null;
    protected $homeZoneId        = null;

    public function __construct(
         $serviceProviderId,
         $homeZoneId
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setHomeZoneId($homeZoneId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setHomeZoneId($homeZoneId = null)
    {
        $this->homeZoneId = (string) $homeZoneId;
    }

    /**
     * 
     */
    public function getHomeZoneId()
    {
        return (!$this->homeZoneId) ?: $this->homeZoneId->getValue();
    }
}

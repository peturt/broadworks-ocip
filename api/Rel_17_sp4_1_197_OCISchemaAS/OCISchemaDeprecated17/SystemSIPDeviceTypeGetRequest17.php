<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to get a sip device type.
 *         See Also: SystemDeviceTypeGetRequest
 *         The response is either SystemSIPDeviceTypeGetResponse17 or ErrorResponse.
 */
class SystemSIPDeviceTypeGetRequest17 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemSIPDeviceTypeGetResponse17';
    public    $name       = __CLASS__;
    protected $deviceType = null;

    public function __construct(
         $deviceType
    ) {
        $this->setDeviceType($deviceType);
    }

    /**
     * Access device type.
     */
    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
    }

    /**
     * Access device type.
     */
    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNLocationCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Delete a enterprise voice VPN location.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNDeletePolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $serviceProviderId   = null;
    protected $locationDialingCode = null;

    public function __construct(
         $serviceProviderId,
         $locationDialingCode
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setLocationDialingCode($locationDialingCode);
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
     * Enterprise Voice VPN location code.
     */
    public function setLocationDialingCode($locationDialingCode = null)
    {
        $this->locationDialingCode = ($locationDialingCode InstanceOf EnterpriseVoiceVPNLocationCode)
             ? $locationDialingCode
             : new EnterpriseVoiceVPNLocationCode($locationDialingCode);
    }

    /**
     * Enterprise Voice VPN location code.
     */
    public function getLocationDialingCode()
    {
        return (!$this->locationDialingCode) ?: $this->locationDialingCode->getValue();
    }
}

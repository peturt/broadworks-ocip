<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallTypeDigitMap;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a system outgoing calling plan call type mapping.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOutgoingCallingPlanCallTypeAddMappingRequest extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $countryCode = null;
    protected $digitMap    = null;
    protected $callType    = null;

    public function __construct(
         $countryCode,
         $digitMap,
         $callType
    ) {
        $this->setCountryCode($countryCode);
        $this->setDigitMap($digitMap);
        $this->setCallType($callType);
    }

    /**
     * Country dialing code.
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
    }

    /**
     * Country dialing code.
     */
    public function getCountryCode()
    {
        return (!$this->countryCode) ?: $this->countryCode->getValue();
    }

    /**
     * Call Type Digit Map.
     */
    public function setDigitMap($digitMap = null)
    {
        $this->digitMap = ($digitMap InstanceOf CallTypeDigitMap)
             ? $digitMap
             : new CallTypeDigitMap($digitMap);
    }

    /**
     * Call Type Digit Map.
     */
    public function getDigitMap()
    {
        return (!$this->digitMap) ?: $this->digitMap->getValue();
    }

    /**
     * Outgoing Calling Plan Call Type
     */
    public function setCallType($callType = null)
    {
        $this->callType = ($callType InstanceOf OutgoingCallingPlanCallType)
             ? $callType
             : new OutgoingCallingPlanCallType($callType);
    }

    /**
     * Outgoing Calling Plan Call Type
     */
    public function getCallType()
    {
        return (!$this->callType) ?: $this->callType->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallTypeDigitMap;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingCallingPlanCallType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a system outgoing calling plan call type mapping.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOutgoingCallingPlanCallTypeAddMappingRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $countryCode,
             $digitMap,
             $callType
    ) {
        $this->countryCode = new CountryCode($countryCode);
        $this->digitMap    = new CallTypeDigitMap($digitMap);
        $this->callType    = $callType;
        $this->args        = func_get_args();
    }

    public function setCountryCode($countryCode)
    {
        $countryCode and $this->countryCode = new CountryCode($countryCode);
    }

    public function getCountryCode()
    {
        return (!$this->countryCode) ?: $this->countryCode->value();
    }

    public function setDigitMap($digitMap)
    {
        $digitMap and $this->digitMap = new CallTypeDigitMap($digitMap);
    }

    public function getDigitMap()
    {
        return (!$this->digitMap) ?: $this->digitMap->value();
    }

    public function setCallType($callType)
    {
        $callType and $this->callType = new OutgoingCallingPlanCallType($callType);
    }

    public function getCallType()
    {
        return (!$this->callType) ?: $this->callType->value();
    }
}
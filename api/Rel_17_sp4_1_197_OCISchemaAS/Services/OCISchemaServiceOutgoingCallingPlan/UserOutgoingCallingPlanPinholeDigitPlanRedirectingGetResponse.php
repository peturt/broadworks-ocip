<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetRequest.
 */
class UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetResponse';
    public    $name              = __CLASS__;
    protected $useCustomSettings = null;
    protected $userPermissions   = null;


    /**
     * 
     */
    public function setUseCustomSettings($useCustomSettings = null)
    {
        $this->useCustomSettings = (boolean) $useCustomSettings;
    }

    /**
     * 
     */
    public function getUseCustomSettings()
    {
        return (!$this->useCustomSettings) ?: $this->useCustomSettings->getValue();
    }

    /**
     * Outgoing Pinhole Digit Plan redirecting call permissions for specified digit patterns.
     */
    public function setUserPermissions(OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions $userPermissions = null)
    {
        $this->userPermissions = OutgoingPinholeDigitPlanDigitPatternRedirectingPermissions $userPermissions;
    }

    /**
     * Outgoing Pinhole Digit Plan redirecting call permissions for specified digit patterns.
     */
    public function getUserPermissions()
    {
        return (!$this->userPermissions) ?: $this->userPermissions->getValue();
    }
}

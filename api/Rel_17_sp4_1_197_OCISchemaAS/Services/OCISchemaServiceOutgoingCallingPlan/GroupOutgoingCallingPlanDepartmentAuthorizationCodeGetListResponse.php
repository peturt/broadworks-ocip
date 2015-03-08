<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanAuthorizationCodeEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupOutgoingCallingPlanDepartmentAuthorizationCodeGetListRequest.
 */
class GroupOutgoingCallingPlanDepartmentAuthorizationCodeGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanDepartmentAuthorizationCodeGetListResponse';
    public    $name      = __CLASS__;
    protected $codeEntry = null;


    /**
     * Outgoing Calling Plan Authorization Code.
     */
    public function setCodeEntry(OutgoingCallingPlanAuthorizationCodeEntry $codeEntry = null)
    {
        $this->codeEntry = OutgoingCallingPlanAuthorizationCodeEntry $codeEntry;
    }

    /**
     * Outgoing Calling Plan Authorization Code.
     */
    public function getCodeEntry()
    {
        return (!$this->codeEntry) ?: $this->codeEntry->getValue();
    }
}

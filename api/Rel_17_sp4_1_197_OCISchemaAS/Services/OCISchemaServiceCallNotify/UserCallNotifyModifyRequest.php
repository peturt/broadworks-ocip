<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallNotify; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's call notify service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallNotifyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $callNotifyEmailAddress=null,
             CriteriaActivation $criteriaActivation=null
    ) {
        $this->userId                 = new UserId($userId);
        $this->callNotifyEmailAddress = new EmailAddress($callNotifyEmailAddress);
        $this->criteriaActivation     = $criteriaActivation;
        $this->args                   = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setCallNotifyEmailAddress($callNotifyEmailAddress)
    {
        $callNotifyEmailAddress and $this->callNotifyEmailAddress = new EmailAddress($callNotifyEmailAddress);
    }

    public function getCallNotifyEmailAddress()
    {
        return (!$this->callNotifyEmailAddress) ?: $this->callNotifyEmailAddress->value();
    }

    public function setCriteriaActivation($criteriaActivation)
    {
        $criteriaActivation and $this->criteriaActivation = new CriteriaActivation($criteriaActivation);
    }

    public function getCriteriaActivation()
    {
        return (!$this->criteriaActivation) ?: $this->criteriaActivation->value();
    }
}
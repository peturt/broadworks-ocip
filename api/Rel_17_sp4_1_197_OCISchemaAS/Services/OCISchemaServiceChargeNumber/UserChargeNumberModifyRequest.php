<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceChargeNumber; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the user level data associated with Charge Number.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserChargeNumberModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                   = __CLASS__;
    protected $userId                                 = null;
    protected $phoneNumber                            = null;
    protected $useChargeNumberForEnhancedTranslations = null;
    protected $sendChargeNumberToNetwork              = null;

    public function __construct(
         $userId,
         $phoneNumber = null,
         $useChargeNumberForEnhancedTranslations = null,
         $sendChargeNumberToNetwork = null
    ) {
        $this->setUserId($userId);
        $this->setPhoneNumber($phoneNumber);
        $this->setUseChargeNumberForEnhancedTranslations($useChargeNumberForEnhancedTranslations);
        $this->setSendChargeNumberToNetwork($sendChargeNumberToNetwork);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->getValue();
    }

    /**
     * 
     */
    public function setUseChargeNumberForEnhancedTranslations($useChargeNumberForEnhancedTranslations = null)
    {
        $this->useChargeNumberForEnhancedTranslations = (boolean) $useChargeNumberForEnhancedTranslations;
    }

    /**
     * 
     */
    public function getUseChargeNumberForEnhancedTranslations()
    {
        return (!$this->useChargeNumberForEnhancedTranslations) ?: $this->useChargeNumberForEnhancedTranslations->getValue();
    }

    /**
     * 
     */
    public function setSendChargeNumberToNetwork($sendChargeNumberToNetwork = null)
    {
        $this->sendChargeNumberToNetwork = (boolean) $sendChargeNumberToNetwork;
    }

    /**
     * 
     */
    public function getSendChargeNumberToNetwork()
    {
        return (!$this->sendChargeNumberToNetwork) ?: $this->sendChargeNumberToNetwork->getValue();
    }
}

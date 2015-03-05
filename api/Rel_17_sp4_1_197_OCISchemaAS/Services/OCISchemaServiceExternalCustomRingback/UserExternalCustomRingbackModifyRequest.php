<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceExternalCustomRingback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExternalCustomRingbackSettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPContact;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with External Custom Ringback.  
 *         The user SIP URI, when selected, it replaces the SP address, port and prefix.  
 *         The user SIP URI, if selected, is the Request URI of the SIP INVITE sent 
 *         to the external server.  When the service provider data is used instead, 
 *         the Request URI is constructed using the prefix, address, port and the user DN.  
 *         The timeout value is the only SP configuration used when the user SIP URI is selected.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserExternalCustomRingbackModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $isActive=null,
             $useSettingLevel=null,
             $sipRequestURI=null
    ) {
        $this->userId          = new UserId($userId);
        $this->isActive        = $isActive;
        $this->useSettingLevel = $useSettingLevel;
        $this->sipRequestURI   = new SIPContact($sipRequestURI);
        $this->args            = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setUseSettingLevel($useSettingLevel)
    {
        $useSettingLevel and $this->useSettingLevel = new ExternalCustomRingbackSettingLevel($useSettingLevel);
    }

    public function getUseSettingLevel()
    {
        return (!$this->useSettingLevel) ?: $this->useSettingLevel->value();
    }

    public function setSipRequestURI($sipRequestURI)
    {
        $sipRequestURI and $this->sipRequestURI = new SIPContact($sipRequestURI);
    }

    public function getSipRequestURI()
    {
        return (!$this->sipRequestURI) ?: $this->sipRequestURI->value();
    }
}
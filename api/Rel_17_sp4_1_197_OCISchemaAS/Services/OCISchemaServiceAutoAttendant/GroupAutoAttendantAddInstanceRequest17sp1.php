<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAutoAttendant; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutoAttendantDialingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutoAttendantNameDialingEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutoAttendantAddMenu16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a Auto Attendant instance to a group.
 *         The domain is required in the serviceUserId.
 *         Only Group and Enterprise level schedules are accepted.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupAutoAttendantAddInstanceRequest17sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $serviceUserId,
             ServiceInstanceAddProfile $serviceInstanceProfile,
             $enableVideo,
             TimeSchedule $businessHours=null,
             HolidaySchedule $holidaySchedule=null,
             $extensionDialingScope,
             $nameDialingScope,
             $nameDialingEntries,
             $businessHoursMenu=null,
             $afterHoursMenu=null
    ) {
        $this->serviceProviderId      = new ServiceProviderId($serviceProviderId);
        $this->groupId                = new GroupId($groupId);
        $this->serviceUserId          = new UserId($serviceUserId);
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->enableVideo            = $enableVideo;
        $this->businessHours          = $businessHours;
        $this->holidaySchedule        = $holidaySchedule;
        $this->extensionDialingScope  = $extensionDialingScope;
        $this->nameDialingScope       = $nameDialingScope;
        $this->nameDialingEntries     = $nameDialingEntries;
        $this->businessHoursMenu      = $businessHoursMenu;
        $this->afterHoursMenu         = $afterHoursMenu;
        $this->args                   = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceAddProfile($serviceInstanceProfile);
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setEnableVideo($enableVideo)
    {
        $enableVideo and $this->enableVideo = new xs:boolean($enableVideo);
    }

    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->value();
    }

    public function setBusinessHours($businessHours)
    {
        $businessHours and $this->businessHours = new TimeSchedule($businessHours);
    }

    public function getBusinessHours()
    {
        return (!$this->businessHours) ?: $this->businessHours->value();
    }

    public function setHolidaySchedule($holidaySchedule)
    {
        $holidaySchedule and $this->holidaySchedule = new HolidaySchedule($holidaySchedule);
    }

    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->value();
    }

    public function setExtensionDialingScope($extensionDialingScope)
    {
        $extensionDialingScope and $this->extensionDialingScope = new AutoAttendantDialingScope($extensionDialingScope);
    }

    public function getExtensionDialingScope()
    {
        return (!$this->extensionDialingScope) ?: $this->extensionDialingScope->value();
    }

    public function setNameDialingScope($nameDialingScope)
    {
        $nameDialingScope and $this->nameDialingScope = new AutoAttendantDialingScope($nameDialingScope);
    }

    public function getNameDialingScope()
    {
        return (!$this->nameDialingScope) ?: $this->nameDialingScope->value();
    }

    public function setNameDialingEntries($nameDialingEntries)
    {
        $nameDialingEntries and $this->nameDialingEntries = new AutoAttendantNameDialingEntry($nameDialingEntries);
    }

    public function getNameDialingEntries()
    {
        return (!$this->nameDialingEntries) ?: $this->nameDialingEntries->value();
    }

    public function setBusinessHoursMenu($businessHoursMenu)
    {
        $businessHoursMenu and $this->businessHoursMenu = new AutoAttendantAddMenu16($businessHoursMenu);
    }

    public function getBusinessHoursMenu()
    {
        return (!$this->businessHoursMenu) ?: $this->businessHoursMenu->value();
    }

    public function setAfterHoursMenu($afterHoursMenu)
    {
        $afterHoursMenu and $this->afterHoursMenu = new AutoAttendantAddMenu16($afterHoursMenu);
    }

    public function getAfterHoursMenu()
    {
        return (!$this->afterHoursMenu) ?: $this->afterHoursMenu->value();
    }
}
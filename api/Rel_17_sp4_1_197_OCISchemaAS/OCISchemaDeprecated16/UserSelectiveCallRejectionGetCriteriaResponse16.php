<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSelectiveCallRejection\SelectiveCallRejectionCriteriaCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserSelectiveCallRejectionGetCriteriaRequest16.
 *         Replaced by: UserSelectiveCallRejectionGetCriteriaResponse16sp1
 */
class UserSelectiveCallRejectionGetCriteriaResponse16 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserSelectiveCallRejectionGetCriteriaResponse16';
    public    $name            = __CLASS__;
    protected $timeSchedule    = null;
    protected $fromDnCriteria  = null;
    protected $blacklisted     = null;
    protected $holidaySchedule = null;


    /**
     * The from dn criteria.
     */
    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
        $this->timeSchedule = TimeSchedule $timeSchedule;
    }

    /**
     * The from dn criteria.
     */
    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->getValue();
    }

    /**
     * The call type criteria used within an add/get request.
     */
    public function setFromDnCriteria(SelectiveCallRejectionCriteriaCallType $fromDnCriteria = null)
    {
        $this->fromDnCriteria = SelectiveCallRejectionCriteriaCallType $fromDnCriteria;
    }

    /**
     * The call type criteria used within an add/get request.
     */
    public function getFromDnCriteria()
    {
        return (!$this->fromDnCriteria) ?: $this->fromDnCriteria->getValue();
    }

    /**
     * 
     */
    public function setBlacklisted($blacklisted = null)
    {
        $this->blacklisted = (boolean) $blacklisted;
    }

    /**
     * 
     */
    public function getBlacklisted()
    {
        return (!$this->blacklisted) ?: $this->blacklisted->getValue();
    }

    /**
     * Holiday Schedule.
     */
    public function setHolidaySchedule(HolidaySchedule $holidaySchedule = null)
    {
        $this->holidaySchedule = HolidaySchedule $holidaySchedule;
    }

    /**
     * Holiday Schedule.
     */
    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->getValue();
    }
}

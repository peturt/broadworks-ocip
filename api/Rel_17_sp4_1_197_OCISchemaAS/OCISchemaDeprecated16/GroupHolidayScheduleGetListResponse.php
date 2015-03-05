<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupHolidayScheduleGetListRequest.
 *         The response contains all the group's holiday schedule name.
 */
class GroupHolidayScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $holidayScheduleName=null
    ) {
        $this->holidayScheduleName = new ScheduleName($holidayScheduleName);
        $this->args                = func_get_args();
    }

    public function setHolidayScheduleName($holidayScheduleName)
    {
        $holidayScheduleName and $this->holidayScheduleName = new ScheduleName($holidayScheduleName);
    }

    public function getHolidayScheduleName()
    {
        return (!$this->holidayScheduleName) ?: $this->holidayScheduleName->value();
    }
}
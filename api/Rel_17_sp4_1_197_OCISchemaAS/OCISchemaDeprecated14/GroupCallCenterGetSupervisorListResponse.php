<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterGetSupervisorListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 *         Replaced By: GroupCallCenterSupervisorReportingGetResponse
 */
class GroupCallCenterGetSupervisorListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $reportingServerURL=null,
             $supervisorTable
    ) {
        $this->reportingServerURL = new URL($reportingServerURL);
        $this->supervisorTable    = $supervisorTable;
        $this->args               = func_get_args();
    }

    public function setReportingServerURL($reportingServerURL)
    {
        $reportingServerURL and $this->reportingServerURL = new URL($reportingServerURL);
    }

    public function getReportingServerURL()
    {
        return (!$this->reportingServerURL) ?: $this->reportingServerURL->value();
    }

    public function setSupervisorTable($supervisorTable)
    {
        $supervisorTable and $this->supervisorTable = new core:OCITable($supervisorTable);
    }

    public function getSupervisorTable()
    {
        return (!$this->supervisorTable) ?: $this->supervisorTable->value();
    }
}
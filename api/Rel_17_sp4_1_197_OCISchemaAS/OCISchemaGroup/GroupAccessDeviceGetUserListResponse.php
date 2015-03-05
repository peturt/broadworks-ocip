<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupAccessDeviceGetUserListRequest.
 *         The column headings for the deviceUserTable are: "Line/Port", "Last Name",
 *         "First Name", "Phone Number", "User Id", "User Type", "Endpoint Type", "Order", "Primary Line/Port".
 *         In IMS mode, the table will contain a row for each TEL-URI in the Phone Number column.
 *         In Standalone mode, rows for the alternate numbers are not included.
 *         The User Type column contains one of the enumerated UserType values.
 *         The Endpoint Type column contains one of the enumerated EndpointType values.
 */
class GroupAccessDeviceGetUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceUserTable
    ) {
        $this->deviceUserTable = $deviceUserTable;
        $this->args            = func_get_args();
    }

    public function setDeviceUserTable($deviceUserTable)
    {
        $deviceUserTable and $this->deviceUserTable = new core:OCITable($deviceUserTable);
    }

    public function getDeviceUserTable()
    {
        return (!$this->deviceUserTable) ?: $this->deviceUserTable->value();
    }
}
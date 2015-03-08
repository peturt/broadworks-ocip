<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupDeviceTypeFileGetListRequest.
 *         Contains a table of device type files managed by the Device Management System, on a per-group basis.
 *         The column headings are: "File Type", "File Format", "Is Authenticated".
 *         Replaced By: GroupDeviceTypeFileGetListResponse14sp8
 */
class GroupDeviceTypeFileGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupDeviceTypeFileGetListResponse';
    public    $name                      = __CLASS__;
    protected $groupDeviceTypeFilesTable = null;


    /**
     * 
     */
    public function setGroupDeviceTypeFilesTable(core:OCITable $groupDeviceTypeFilesTable = null)
    {
        $this->groupDeviceTypeFilesTable = core:OCITable $groupDeviceTypeFilesTable;
    }

    /**
     * 
     */
    public function getGroupDeviceTypeFilesTable()
    {
        return (!$this->groupDeviceTypeFilesTable) ?: $this->groupDeviceTypeFilesTable->getValue();
    }
}

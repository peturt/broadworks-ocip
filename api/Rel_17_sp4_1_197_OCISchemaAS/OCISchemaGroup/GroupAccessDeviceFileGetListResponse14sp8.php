<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupAccessDeviceFileGetListRequest14sp8.
 *         Contains a table of device files managed by the Device Management System on a per-device profile basis.
 *         The column headings are: "File Format", "Is Authenticated", "Access URL", "Repository URL", "Template URL".
 */
class GroupAccessDeviceFileGetListResponse14sp8 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceFileGetListResponse14sp8';
    public    $name             = __CLASS__;
    protected $deviceFilesTable = null;


    /**
     * 
     */
    public function setDeviceFilesTable(core:OCITable $deviceFilesTable = null)
    {
        $this->deviceFilesTable = core:OCITable $deviceFilesTable;
    }

    /**
     * 
     */
    public function getDeviceFilesTable()
    {
        return (!$this->deviceFilesTable) ?: $this->deviceFilesTable->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupDeviceTypeFileGetListRequest14sp8.
 *         Contains a table of device type files managed by the Device Management System, on a per-group basis.
 *         The column headings are: "File Format", "Is Authenticated", "Access URL", "Repository URL", "Template URL".
 */
class GroupDeviceTypeFileGetListResponse14sp8 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupDeviceTypeFileGetListResponse14sp8';
    protected $groupDeviceTypeFilesTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDeviceTypeFileGetListResponse14sp8 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupDeviceTypeFilesTable(TableType $groupDeviceTypeFilesTable = null)
    {
        $this->groupDeviceTypeFilesTable = $groupDeviceTypeFilesTable;
        $this->groupDeviceTypeFilesTable->setElementName('groupDeviceTypeFilesTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getGroupDeviceTypeFilesTable()
    {
        return $this->groupDeviceTypeFilesTable;
    }
}

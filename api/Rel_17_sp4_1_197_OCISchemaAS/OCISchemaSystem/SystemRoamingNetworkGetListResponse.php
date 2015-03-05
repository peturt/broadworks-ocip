<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemRoamingNetworkGetListRequest.
 *         Contains a table with columns: "MSC Address", "Network Translation Index".
 */
class SystemRoamingNetworkGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $roamingNetworkTable
    ) {
        $this->roamingNetworkTable = $roamingNetworkTable;
        $this->args                = func_get_args();
    }

    public function setRoamingNetworkTable($roamingNetworkTable)
    {
        $roamingNetworkTable and $this->roamingNetworkTable = new core:OCITable($roamingNetworkTable);
    }

    public function getRoamingNetworkTable()
    {
        return (!$this->roamingNetworkTable) ?: $this->roamingNetworkTable->value();
    }
}
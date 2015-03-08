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
     * Response to SystemCPEConfigGetFileServerListRequest. The table columns are:
 *         "Device Type", "FTP Host Net Address", "FTP User Id", "Directory" and "Passive FTP".
 *         Replaced By: SystemCPEConfigGetFileServerListResponse14sp6
 */
class SystemCPEConfigGetFileServerListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemCPEConfigGetFileServerListResponse';
    public    $name            = __CLASS__;
    protected $fileServerTable = null;


    /**
     * 
     */
    public function setFileServerTable(core:OCITable $fileServerTable = null)
    {
        $this->fileServerTable = core:OCITable $fileServerTable;
    }

    /**
     * 
     */
    public function getFileServerTable()
    {
        return (!$this->fileServerTable) ?: $this->fileServerTable->getValue();
    }
}

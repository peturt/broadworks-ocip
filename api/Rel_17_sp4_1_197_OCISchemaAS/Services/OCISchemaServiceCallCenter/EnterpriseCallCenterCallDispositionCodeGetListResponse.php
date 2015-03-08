<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the EnterpriseCallCenterCallDispositionCodeGetListRequest.
 *         Contains a table with column headings: "Is Active", "Code", "Description".
 */
class EnterpriseCallCenterCallDispositionCodeGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\EnterpriseCallCenterCallDispositionCodeGetListResponse';
    public    $name                  = __CLASS__;
    protected $dispositionCodesTable = null;


    /**
     * 
     */
    public function setDispositionCodesTable(core:OCITable $dispositionCodesTable = null)
    {
        $this->dispositionCodesTable = core:OCITable $dispositionCodesTable;
    }

    /**
     * 
     */
    public function getDispositionCodesTable()
    {
        return (!$this->dispositionCodesTable) ?: $this->dispositionCodesTable->getValue();
    }
}

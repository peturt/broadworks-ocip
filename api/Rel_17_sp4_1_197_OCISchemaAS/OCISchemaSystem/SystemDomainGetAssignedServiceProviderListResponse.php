<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemDomainGetAssignedServiceProviderListRequest.
 *         The table columns are: "Service Provider Id", "Service Provider Name" and "Is Enterprise".
 */
class SystemDomainGetAssignedServiceProviderListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDomainGetAssignedServiceProviderListResponse';
    public    $name                 = __CLASS__;
    protected $serviceProviderTable = null;


    /**
     * 
     */
    public function setServiceProviderTable(core:OCITable $serviceProviderTable = null)
    {
        $this->serviceProviderTable = core:OCITable $serviceProviderTable;
    }

    /**
     * 
     */
    public function getServiceProviderTable()
    {
        return (!$this->serviceProviderTable) ?: $this->serviceProviderTable->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemLicenseType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemSystemLicenseGetListRequest.
 */
class SystemLicensingGetSystemLicenseListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemLicensingGetSystemLicenseListResponse';
    public    $name    = __CLASS__;
    protected $license = null;


    /**
     * System License type.
     */
    public function setLicense($license = null)
    {
        $this->license = ($license InstanceOf SystemLicenseType)
             ? $license
             : new SystemLicenseType($license);
    }

    /**
     * System License type.
     */
    public function getLicense()
    {
        return (!$this->license) ?: $this->license->getValue();
    }
}

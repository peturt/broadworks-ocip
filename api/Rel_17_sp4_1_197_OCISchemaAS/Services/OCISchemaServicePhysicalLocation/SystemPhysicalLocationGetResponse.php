<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePhysicalLocation; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemPhysicalLocationGetRequest.
 *         Contains a list of system Physical Location parameters.
 */
class SystemPhysicalLocationGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePhysicalLocation\SystemPhysicalLocationGetResponse';
    public    $name                      = __CLASS__;
    protected $alwaysAllowEmergencyCalls = null;


    /**
     * 
     */
    public function setAlwaysAllowEmergencyCalls($alwaysAllowEmergencyCalls = null)
    {
        $this->alwaysAllowEmergencyCalls = (boolean) $alwaysAllowEmergencyCalls;
    }

    /**
     * 
     */
    public function getAlwaysAllowEmergencyCalls()
    {
        return (!$this->alwaysAllowEmergencyCalls) ?: $this->alwaysAllowEmergencyCalls->getValue();
    }
}

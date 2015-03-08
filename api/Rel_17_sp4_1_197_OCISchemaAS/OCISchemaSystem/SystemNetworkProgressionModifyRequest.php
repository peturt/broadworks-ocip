<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkProgressionWaitPeriodSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the system level data associated with network progression.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNetworkProgressionModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $isActive          = null;
    protected $waitPeriodSeconds = null;

    public function __construct(
         $isActive = null,
         $waitPeriodSeconds = null
    ) {
        $this->setIsActive($isActive);
        $this->setWaitPeriodSeconds($waitPeriodSeconds);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Network progression wait period in seconds.
     */
    public function setWaitPeriodSeconds($waitPeriodSeconds = null)
    {
        $this->waitPeriodSeconds = ($waitPeriodSeconds InstanceOf NetworkProgressionWaitPeriodSeconds)
             ? $waitPeriodSeconds
             : new NetworkProgressionWaitPeriodSeconds($waitPeriodSeconds);
    }

    /**
     * Network progression wait period in seconds.
     */
    public function getWaitPeriodSeconds()
    {
        return (!$this->waitPeriodSeconds) ?: $this->waitPeriodSeconds->getValue();
    }
}

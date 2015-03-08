<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ScheduleCombinationType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the system level data associated with SystemSelectiveServicesRequest.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSelectiveServicesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $scheduleCombination = null;

    public function __construct(
         $scheduleCombination = null
    ) {
        $this->setScheduleCombination($scheduleCombination);
    }

    /**
     * Schedule Combination.
     */
    public function setScheduleCombination($scheduleCombination = null)
    {
        $this->scheduleCombination = ($scheduleCombination InstanceOf ScheduleCombinationType)
             ? $scheduleCombination
             : new ScheduleCombinationType($scheduleCombination);
    }

    /**
     * Schedule Combination.
     */
    public function getScheduleCombination()
    {
        return (!$this->scheduleCombination) ?: $this->scheduleCombination->getValue();
    }
}

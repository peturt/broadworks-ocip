<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CallBlockingService;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the fields for a Call Blocking Service mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingCallBlockingServiceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $callBlockingService = null;
    protected $treatmentId         = null;

    public function __construct(
         $callBlockingService,
         $treatmentId = null
    ) {
        $this->setCallBlockingService($callBlockingService);
        $this->setTreatmentId($treatmentId);
    }

    /**
     * Possible types of Call Blocking Services.
     *         The following enumeration values are only used in AS Data mode:
     *            PTT
     *            SAC
     *            BroadWorks Mobility Deny Originations
     *            BroadWorks Mobility Deny Terminations
     *          The following types are only used in HSS data mode:
     * 	    Incoming Communication Barring
     * 	    Hierarchical Communication Barring
     * 	    Incoming Hierarchical Communication Barring
     */
    public function setCallBlockingService($callBlockingService = null)
    {
        $this->callBlockingService = ($callBlockingService InstanceOf CallBlockingService)
             ? $callBlockingService
             : new CallBlockingService($callBlockingService);
    }

    /**
     * Possible types of Call Blocking Services.
     *         The following enumeration values are only used in AS Data mode:
     *            PTT
     *            SAC
     *            BroadWorks Mobility Deny Originations
     *            BroadWorks Mobility Deny Terminations
     *          The following types are only used in HSS data mode:
     * 	    Incoming Communication Barring
     * 	    Hierarchical Communication Barring
     * 	    Incoming Hierarchical Communication Barring
     */
    public function getCallBlockingService()
    {
        return (!$this->callBlockingService) ?: $this->callBlockingService->getValue();
    }

    /**
     * Configurable Treatment Name
     */
    public function setTreatmentId($treatmentId = null)
    {
        $this->treatmentId = ($treatmentId InstanceOf TreatmentId)
             ? $treatmentId
             : new TreatmentId($treatmentId);
    }

    /**
     * Configurable Treatment Name
     */
    public function getTreatmentId()
    {
        return (!$this->treatmentId) ?: $this->treatmentId->getValue();
    }
}

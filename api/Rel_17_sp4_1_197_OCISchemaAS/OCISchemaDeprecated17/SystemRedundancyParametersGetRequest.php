<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Replaced by: SystemRedundancyParametersGetRequest16sp2
 *       
 *         Request to get the list of Redundancy system parameters.
 *         The response is either SystemRedundancyParametersGetResponse or ErrorResponse.
 */
class SystemRedundancyParametersGetRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(    ) {
        $this->args= func_get_args();
    }
}
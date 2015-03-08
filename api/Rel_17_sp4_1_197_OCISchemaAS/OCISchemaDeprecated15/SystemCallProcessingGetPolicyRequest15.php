<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request the system level data associated with Call Processing Policy.
 *             The response is either a SystemCallProcessingGetPolicyResponse15 or an
 *             ErrorResponse.
 * 
 *             Replaced By: SystemCallProcessingGetPolicyRequest16
 */
class SystemCallProcessingGetPolicyRequest15 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemCallProcessingGetPolicyResponse15';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}

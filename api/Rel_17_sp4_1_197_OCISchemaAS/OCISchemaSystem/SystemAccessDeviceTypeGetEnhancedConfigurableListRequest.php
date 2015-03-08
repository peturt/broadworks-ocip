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
     * Requests the list of device types supporting enhanced configuration.
 *         The response is either SystemAccessDeviceTypeGetEnhancedConfigurableListResponse
 *         or ErrorResponse.
 */
class SystemAccessDeviceTypeGetEnhancedConfigurableListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceTypeGetEnhancedConfigurableListResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}

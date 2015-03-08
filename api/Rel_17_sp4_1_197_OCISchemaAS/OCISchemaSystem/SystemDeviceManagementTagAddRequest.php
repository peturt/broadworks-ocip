<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to add a static configuration tag.
 *           The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDeviceManagementTagAddRequest extends ComplexType implements ComplexInterface
{
    public    $name     = __CLASS__;
    protected $tagName  = null;
    protected $tagValue = null;

    public function __construct(
         $tagName,
         $tagValue = null
    ) {
        $this->setTagName($tagName);
        $this->setTagValue($tagValue);
    }

    /**
     * A static tag name for access device files managed by the Device Management System on BroadWorks.
     *         The static tag name must start and end with a % with no other % in between. The tag must not
     *         start with %BW.
     */
    public function setTagName($tagName = null)
    {
        $this->tagName = ($tagName InstanceOf DeviceManagementTagName)
             ? $tagName
             : new DeviceManagementTagName($tagName);
    }

    /**
     * A static tag name for access device files managed by the Device Management System on BroadWorks.
     *         The static tag name must start and end with a % with no other % in between. The tag must not
     *         start with %BW.
     */
    public function getTagName()
    {
        return (!$this->tagName) ?: $this->tagName->getValue();
    }

    /**
     * A static tag value for access device files managed by the Device Management System on BroadWorks.
     */
    public function setTagValue($tagValue = null)
    {
        $this->tagValue = ($tagValue InstanceOf DeviceManagementTagValue)
             ? $tagValue
             : new DeviceManagementTagValue($tagValue);
    }

    /**
     * A static tag value for access device files managed by the Device Management System on BroadWorks.
     */
    public function getTagValue()
    {
        return (!$this->tagValue) ?: $this->tagValue->getValue();
    }
}

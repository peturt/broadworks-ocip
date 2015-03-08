<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupExtensionLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the group's extension length.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupExtensionLengthModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceProviderId = null;
    protected $groupId           = null;
    protected $extensionLength   = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $extensionLength = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setExtensionLength($extensionLength);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * The group's extension length.
     */
    public function setExtensionLength($extensionLength = null)
    {
        $this->extensionLength = ($extensionLength InstanceOf GroupExtensionLength)
             ? $extensionLength
             : new GroupExtensionLength($extensionLength);
    }

    /**
     * The group's extension length.
     */
    public function getExtensionLength()
    {
        return (!$this->extensionLength) ?: $this->extensionLength->getValue();
    }
}

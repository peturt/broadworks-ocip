<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemInstantConferencingGetRequest.
 */
class SystemInstantConferencingGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\SystemInstantConferencingGetResponse';
    public    $name                                       = __CLASS__;
    protected $defaultDropAllParticipantsWhenLeaderLeaves = null;
    protected $defaultAllowDialOutInInvitation            = null;
    protected $defaultFromAddress                         = null;


    /**
     * 
     */
    public function setDefaultDropAllParticipantsWhenLeaderLeaves($defaultDropAllParticipantsWhenLeaderLeaves = null)
    {
        $this->defaultDropAllParticipantsWhenLeaderLeaves = (boolean) $defaultDropAllParticipantsWhenLeaderLeaves;
    }

    /**
     * 
     */
    public function getDefaultDropAllParticipantsWhenLeaderLeaves()
    {
        return (!$this->defaultDropAllParticipantsWhenLeaderLeaves) ?: $this->defaultDropAllParticipantsWhenLeaderLeaves->getValue();
    }

    /**
     * 
     */
    public function setDefaultAllowDialOutInInvitation($defaultAllowDialOutInInvitation = null)
    {
        $this->defaultAllowDialOutInInvitation = (boolean) $defaultAllowDialOutInInvitation;
    }

    /**
     * 
     */
    public function getDefaultAllowDialOutInInvitation()
    {
        return (!$this->defaultAllowDialOutInInvitation) ?: $this->defaultAllowDialOutInInvitation->getValue();
    }

    /**
     * Email Address
     */
    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf EmailAddress)
             ? $defaultFromAddress
             : new EmailAddress($defaultFromAddress);
    }

    /**
     * Email Address
     */
    public function getDefaultFromAddress()
    {
        return (!$this->defaultFromAddress) ?: $this->defaultFromAddress->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to add a Network Server to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNetworkSynchingServerAddRequest extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $netAddress  = null;
    protected $port        = null;
    protected $description = null;

    public function __construct(
         $netAddress,
         $port = null,
         $description = null
    ) {
        $this->setNetAddress($netAddress);
        $this->setPort($port);
        $this->setDescription($description);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->getValue();
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setPort($port = null)
    {
        $this->port = ($port InstanceOf Port1025)
             ? $port
             : new Port1025($port);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getPort()
    {
        return (!$this->port) ?: $this->port->getValue();
    }

    /**
     * Network Server description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf NetworkServerDescription)
             ? $description
             : new NetworkServerDescription($description);
    }

    /**
     * Network Server description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }
}

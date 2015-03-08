<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Contact;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a service provider or enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderAddRequest13mp2 extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $serviceProviderId   = null;
    protected $defaultDomain       = null;
    protected $serviceProviderName = null;
    protected $supportEmail        = null;
    protected $contact             = null;
    protected $address             = null;

    public function __construct(
         $serviceProviderId,
         $defaultDomain,
         $serviceProviderName = null,
         $supportEmail = null,
         Contact $contact = null,
         StreetAddress $address = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setDefaultDomain($defaultDomain);
        $this->setServiceProviderName($serviceProviderName);
        $this->setSupportEmail($supportEmail);
        $this->setContact($contact);
        $this->setAddress($address);
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
     * IP Address, hostname, or domain.
     */
    public function setDefaultDomain($defaultDomain = null)
    {
        $this->defaultDomain = ($defaultDomain InstanceOf NetAddress)
             ? $defaultDomain
             : new NetAddress($defaultDomain);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getDefaultDomain()
    {
        return (!$this->defaultDomain) ?: $this->defaultDomain->getValue();
    }

    /**
     * Service Provider display name.
     */
    public function setServiceProviderName($serviceProviderName = null)
    {
        $this->serviceProviderName = ($serviceProviderName InstanceOf ServiceProviderName)
             ? $serviceProviderName
             : new ServiceProviderName($serviceProviderName);
    }

    /**
     * Service Provider display name.
     */
    public function getServiceProviderName()
    {
        return (!$this->serviceProviderName) ?: $this->serviceProviderName->getValue();
    }

    /**
     * Email Address
     */
    public function setSupportEmail($supportEmail = null)
    {
        $this->supportEmail = ($supportEmail InstanceOf EmailAddress)
             ? $supportEmail
             : new EmailAddress($supportEmail);
    }

    /**
     * Email Address
     */
    public function getSupportEmail()
    {
        return (!$this->supportEmail) ?: $this->supportEmail->getValue();
    }

    /**
     * Contact information.
     */
    public function setContact(Contact $contact = null)
    {
        $this->contact = Contact $contact;
    }

    /**
     * Contact information.
     */
    public function getContact()
    {
        return (!$this->contact) ?: $this->contact->getValue();
    }

    /**
     * Street address information.
     */
    public function setAddress(StreetAddress $address = null)
    {
        $this->address = StreetAddress $address;
    }

    /**
     * Street address information.
     */
    public function getAddress()
    {
        return (!$this->address) ?: $this->address->getValue();
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Contact;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the ServiceProviderGetRequest13mp2.
 *         The response contains the service provider or enterprise's profile information.
 */
class ServiceProviderGetResponse13mp2 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderGetResponse13mp2';
    protected $defaultDomain;
    protected $serviceProviderName;
    protected $supportEmail;
    protected $contact;
    protected $address;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\ServiceProviderGetResponse13mp2 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDefaultDomain($defaultDomain = null)
    {
        $this->defaultDomain = ($defaultDomain InstanceOf NetAddress)
             ? $defaultDomain
             : new NetAddress($defaultDomain);
        $this->defaultDomain->setElementName('defaultDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $defaultDomain
     */
    public function getDefaultDomain()
    {
        return ($this->defaultDomain)
            ? $this->defaultDomain->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceProviderName($serviceProviderName = null)
    {
        $this->serviceProviderName = ($serviceProviderName InstanceOf ServiceProviderName)
             ? $serviceProviderName
             : new ServiceProviderName($serviceProviderName);
        $this->serviceProviderName->setElementName('serviceProviderName');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderName $serviceProviderName
     */
    public function getServiceProviderName()
    {
        return ($this->serviceProviderName)
            ? $this->serviceProviderName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSupportEmail($supportEmail = null)
    {
        $this->supportEmail = ($supportEmail InstanceOf EmailAddress)
             ? $supportEmail
             : new EmailAddress($supportEmail);
        $this->supportEmail->setElementName('supportEmail');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $supportEmail
     */
    public function getSupportEmail()
    {
        return ($this->supportEmail)
            ? $this->supportEmail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setContact(Contact $contact = null)
    {
        $this->contact = ($contact InstanceOf Contact)
             ? $contact
             : new Contact($contact);
        $this->contact->setElementName('contact');
        return $this;
    }

    /**
     * 
     * @return Contact $contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * 
     */
    public function setAddress(StreetAddress $address = null)
    {
        $this->address = ($address InstanceOf StreetAddress)
             ? $address
             : new StreetAddress($address);
        $this->address->setElementName('address');
        return $this;
    }

    /**
     * 
     * @return StreetAddress $address
     */
    public function getAddress()
    {
        return $this->address;
    }
}

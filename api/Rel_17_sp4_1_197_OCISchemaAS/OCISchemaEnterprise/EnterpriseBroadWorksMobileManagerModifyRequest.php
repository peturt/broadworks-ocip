<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerCertificateFile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerInformationFile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerMaxTxPerSecond;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the BroadWorks Mobile Manager settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseBroadWorksMobileManagerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $serviceProviderId            = null;
    protected $informationFile              = null;
    protected $certificateFile              = null;
    protected $localToCarrier               = null;
    protected $maxTxPerSecondEnabled        = null;
    protected $maxTxPerSecond               = null;
    protected $tldnEnabled                  = null;
    protected $genericNumberEnabled         = null;
    protected $mobileStateCheckEnabled      = null;
    protected $locationBasedServicesEnabled = null;

    public function __construct(
         $serviceProviderId,
         $informationFile = null,
         $certificateFile = null,
         $localToCarrier = null,
         $maxTxPerSecondEnabled = null,
         $maxTxPerSecond = null,
         $tldnEnabled = null,
         $genericNumberEnabled = null,
         $mobileStateCheckEnabled = null,
         $locationBasedServicesEnabled = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setInformationFile($informationFile);
        $this->setCertificateFile($certificateFile);
        $this->setLocalToCarrier($localToCarrier);
        $this->setMaxTxPerSecondEnabled($maxTxPerSecondEnabled);
        $this->setMaxTxPerSecond($maxTxPerSecond);
        $this->setTldnEnabled($tldnEnabled);
        $this->setGenericNumberEnabled($genericNumberEnabled);
        $this->setMobileStateCheckEnabled($mobileStateCheckEnabled);
        $this->setLocationBasedServicesEnabled($locationBasedServicesEnabled);
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
     * Information file.
     */
    public function setInformationFile($informationFile = null)
    {
        $this->informationFile = ($informationFile InstanceOf BroadWorksMobileManagerInformationFile)
             ? $informationFile
             : new BroadWorksMobileManagerInformationFile($informationFile);
    }

    /**
     * Information file.
     */
    public function getInformationFile()
    {
        return (!$this->informationFile) ?: $this->informationFile->getValue();
    }

    /**
     * Certificate file.
     */
    public function setCertificateFile($certificateFile = null)
    {
        $this->certificateFile = ($certificateFile InstanceOf BroadWorksMobileManagerCertificateFile)
             ? $certificateFile
             : new BroadWorksMobileManagerCertificateFile($certificateFile);
    }

    /**
     * Certificate file.
     */
    public function getCertificateFile()
    {
        return (!$this->certificateFile) ?: $this->certificateFile->getValue();
    }

    /**
     * 
     */
    public function setLocalToCarrier($localToCarrier = null)
    {
        $this->localToCarrier = (boolean) $localToCarrier;
    }

    /**
     * 
     */
    public function getLocalToCarrier()
    {
        return (!$this->localToCarrier) ?: $this->localToCarrier->getValue();
    }

    /**
     * 
     */
    public function setMaxTxPerSecondEnabled($maxTxPerSecondEnabled = null)
    {
        $this->maxTxPerSecondEnabled = (boolean) $maxTxPerSecondEnabled;
    }

    /**
     * 
     */
    public function getMaxTxPerSecondEnabled()
    {
        return (!$this->maxTxPerSecondEnabled) ?: $this->maxTxPerSecondEnabled->getValue();
    }

    /**
     * Maximum number of simultaneous SS7 transactions allowed
     *         per second before throttling occurs.
     */
    public function setMaxTxPerSecond($maxTxPerSecond = null)
    {
        $this->maxTxPerSecond = ($maxTxPerSecond InstanceOf BroadWorksMobileManagerMaxTxPerSecond)
             ? $maxTxPerSecond
             : new BroadWorksMobileManagerMaxTxPerSecond($maxTxPerSecond);
    }

    /**
     * Maximum number of simultaneous SS7 transactions allowed
     *         per second before throttling occurs.
     */
    public function getMaxTxPerSecond()
    {
        return (!$this->maxTxPerSecond) ?: $this->maxTxPerSecond->getValue();
    }

    /**
     * 
     */
    public function setTldnEnabled($tldnEnabled = null)
    {
        $this->tldnEnabled = (boolean) $tldnEnabled;
    }

    /**
     * 
     */
    public function getTldnEnabled()
    {
        return (!$this->tldnEnabled) ?: $this->tldnEnabled->getValue();
    }

    /**
     * 
     */
    public function setGenericNumberEnabled($genericNumberEnabled = null)
    {
        $this->genericNumberEnabled = (boolean) $genericNumberEnabled;
    }

    /**
     * 
     */
    public function getGenericNumberEnabled()
    {
        return (!$this->genericNumberEnabled) ?: $this->genericNumberEnabled->getValue();
    }

    /**
     * 
     */
    public function setMobileStateCheckEnabled($mobileStateCheckEnabled = null)
    {
        $this->mobileStateCheckEnabled = (boolean) $mobileStateCheckEnabled;
    }

    /**
     * 
     */
    public function getMobileStateCheckEnabled()
    {
        return (!$this->mobileStateCheckEnabled) ?: $this->mobileStateCheckEnabled->getValue();
    }

    /**
     * 
     */
    public function setLocationBasedServicesEnabled($locationBasedServicesEnabled = null)
    {
        $this->locationBasedServicesEnabled = (boolean) $locationBasedServicesEnabled;
    }

    /**
     * 
     */
    public function getLocationBasedServicesEnabled()
    {
        return (!$this->locationBasedServicesEnabled) ?: $this->locationBasedServicesEnabled->getValue();
    }
}

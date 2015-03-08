<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderAccessDeviceFileGetRequest16sp1.
 */
class ServiceProviderAccessDeviceFileGetResponse16sp1 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderAccessDeviceFileGetResponse16sp1';
    public    $name                  = __CLASS__;
    protected $fileSource            = null;
    protected $configurationFileName = null;
    protected $accessUrl             = null;
    protected $repositoryUrl         = null;
    protected $templateUrl           = null;


    /**
     * Choices for the access device configuration mode.
     */
    public function setFileSource($fileSource = null)
    {
        $this->fileSource = ($fileSource InstanceOf AccessDeviceEnhancedConfigurationMode)
             ? $fileSource
             : new AccessDeviceEnhancedConfigurationMode($fileSource);
    }

    /**
     * Choices for the access device configuration mode.
     */
    public function getFileSource()
    {
        return (!$this->fileSource) ?: $this->fileSource->getValue();
    }

    /**
     * Access device enhanced configuration file name.
     */
    public function setConfigurationFileName($configurationFileName = null)
    {
        $this->configurationFileName = ($configurationFileName InstanceOf AccessDeviceEnhancedConfigurationFileName)
             ? $configurationFileName
             : new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
    }

    /**
     * Access device enhanced configuration file name.
     */
    public function getConfigurationFileName()
    {
        return (!$this->configurationFileName) ?: $this->configurationFileName->getValue();
    }

    /**
     * URL.
     */
    public function setAccessUrl($accessUrl = null)
    {
        $this->accessUrl = ($accessUrl InstanceOf URL)
             ? $accessUrl
             : new URL($accessUrl);
    }

    /**
     * URL.
     */
    public function getAccessUrl()
    {
        return (!$this->accessUrl) ?: $this->accessUrl->getValue();
    }

    /**
     * URL.
     */
    public function setRepositoryUrl($repositoryUrl = null)
    {
        $this->repositoryUrl = ($repositoryUrl InstanceOf URL)
             ? $repositoryUrl
             : new URL($repositoryUrl);
    }

    /**
     * URL.
     */
    public function getRepositoryUrl()
    {
        return (!$this->repositoryUrl) ?: $this->repositoryUrl->getValue();
    }

    /**
     * URL.
     */
    public function setTemplateUrl($templateUrl = null)
    {
        $this->templateUrl = ($templateUrl InstanceOf URL)
             ? $templateUrl
             : new URL($templateUrl);
    }

    /**
     * URL.
     */
    public function getTemplateUrl()
    {
        return (!$this->templateUrl) ?: $this->templateUrl->getValue();
    }
}

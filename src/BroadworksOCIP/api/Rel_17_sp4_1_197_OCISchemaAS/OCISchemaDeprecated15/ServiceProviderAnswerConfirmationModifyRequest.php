<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\AnswerConfirmationAnnouncementSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\AnswerConfirmationTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a service provider or enterprise's answer confirmation settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: ServiceProviderAnswerConfirmationModifyRequest16
 */
class ServiceProviderAnswerConfirmationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderAnswerConfirmationModifyRequest';
    protected $serviceProviderId;
    protected $announcementMessageSelection;
    protected $confirmationMessageAudioFile;
    protected $confirmationTimoutSeconds;

    public function __construct(
         $serviceProviderId = '',
         $announcementMessageSelection = null,
         $confirmationMessageAudioFile = null,
         $confirmationTimoutSeconds = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setAnnouncementMessageSelection($announcementMessageSelection);
        $this->setConfirmationMessageAudioFile($confirmationMessageAudioFile);
        $this->setConfirmationTimoutSeconds($confirmationTimoutSeconds);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAnnouncementMessageSelection($announcementMessageSelection = null)
    {
        $this->announcementMessageSelection = ($announcementMessageSelection InstanceOf AnswerConfirmationAnnouncementSelection)
             ? $announcementMessageSelection
             : new AnswerConfirmationAnnouncementSelection($announcementMessageSelection);
        $this->announcementMessageSelection->setElementName('announcementMessageSelection');
        return $this;
    }

    /**
     * 
     * @return AnswerConfirmationAnnouncementSelection $announcementMessageSelection
     */
    public function getAnnouncementMessageSelection()
    {
        return ($this->announcementMessageSelection)
            ? $this->announcementMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConfirmationMessageAudioFile(LabeledFileResource $confirmationMessageAudioFile = null)
    {
        $this->confirmationMessageAudioFile = ($confirmationMessageAudioFile InstanceOf LabeledFileResource)
             ? $confirmationMessageAudioFile
             : new LabeledFileResource($confirmationMessageAudioFile);
        $this->confirmationMessageAudioFile->setElementName('confirmationMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $confirmationMessageAudioFile
     */
    public function getConfirmationMessageAudioFile()
    {
        return $this->confirmationMessageAudioFile;
    }

    /**
     * 
     */
    public function setConfirmationTimoutSeconds($confirmationTimoutSeconds = null)
    {
        $this->confirmationTimoutSeconds = ($confirmationTimoutSeconds InstanceOf AnswerConfirmationTimeoutSeconds)
             ? $confirmationTimoutSeconds
             : new AnswerConfirmationTimeoutSeconds($confirmationTimoutSeconds);
        $this->confirmationTimoutSeconds->setElementName('confirmationTimoutSeconds');
        return $this;
    }

    /**
     * 
     * @return AnswerConfirmationTimeoutSeconds $confirmationTimoutSeconds
     */
    public function getConfirmationTimoutSeconds()
    {
        return ($this->confirmationTimoutSeconds)
            ? $this->confirmationTimoutSeconds->getElementValue()
            : null;
    }
}

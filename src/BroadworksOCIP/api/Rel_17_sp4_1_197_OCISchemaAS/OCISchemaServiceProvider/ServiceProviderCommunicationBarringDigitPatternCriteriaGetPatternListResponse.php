<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPattern;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest.
 *         The response contains the Digit Pattern Criteria information.
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse';
    protected $matchDigitPattern;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMatchDigitPattern($matchDigitPattern = null)
    {
        $this->matchDigitPattern = ($matchDigitPattern InstanceOf DigitPattern)
             ? $matchDigitPattern
             : new DigitPattern($matchDigitPattern);
        $this->matchDigitPattern->setElementName('matchDigitPattern');
        return $this;
    }

    /**
     * 
     * @return DigitPattern $matchDigitPattern
     */
    public function getMatchDigitPattern()
    {
        return ($this->matchDigitPattern)
            ? $this->matchDigitPattern->getElementValue()
            : null;
    }
}

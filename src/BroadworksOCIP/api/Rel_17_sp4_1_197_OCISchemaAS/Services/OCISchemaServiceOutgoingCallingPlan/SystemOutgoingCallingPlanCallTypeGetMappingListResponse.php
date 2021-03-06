<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemOutgoingCallingPlanCallTypeGetMappingListRequest. The table columns are:
 *         "Country Code", "Digit Map" and "Call Type".
 */
class SystemOutgoingCallingPlanCallTypeGetMappingListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemOutgoingCallingPlanCallTypeGetMappingListResponse';
    protected $callTypeMapping;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\SystemOutgoingCallingPlanCallTypeGetMappingListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCallTypeMapping(TableType $callTypeMapping = null)
    {
        $this->callTypeMapping = $callTypeMapping;
        $this->callTypeMapping->setElementName('callTypeMapping');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCallTypeMapping()
    {
        return ($this->callTypeMapping)
            ? $this->callTypeMapping->getElementValue()
            : null;
    }
}

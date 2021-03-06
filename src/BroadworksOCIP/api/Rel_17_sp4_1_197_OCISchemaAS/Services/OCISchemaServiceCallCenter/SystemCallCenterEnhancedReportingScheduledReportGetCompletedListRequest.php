<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterScheduledReportServiceProvider;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaCallCenterScheduledReportName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaCallCenterReportTemplateName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to get the list of all completed call center reporting scheduled reports in the system.
 *         The response is either a SystemCallCenterEnhancedReportingScheduledReportGetCompletedListResponse or an ErrorResponse.
 */
class SystemCallCenterEnhancedReportingScheduledReportGetCompletedListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingScheduledReportGetCompletedListResponse';
    public    $elementName = 'SystemCallCenterEnhancedReportingScheduledReportGetCompletedListRequest';
    protected $responseSizeLimit;
    protected $searchCriteriaCallCenterScheduledReportName;
    protected $searchCriteriaGroupId;
    protected $searchCriteriaExactCallCenterScheduledReportServiceProvider;
    protected $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
    protected $searchCriteriaCallCenterReportTemplateName;

    public function __construct(
         $responseSizeLimit = null,
         $searchCriteriaCallCenterScheduledReportName = null,
         $searchCriteriaGroupId = null,
         $searchCriteriaExactCallCenterScheduledReportServiceProvider = null,
         $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null,
         $searchCriteriaCallCenterReportTemplateName = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaExactCallCenterScheduledReportServiceProvider($searchCriteriaExactCallCenterScheduledReportServiceProvider);
        $this->setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor);
        $this->setSearchCriteriaCallCenterReportTemplateName($searchCriteriaCallCenterReportTemplateName);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingScheduledReportGetCompletedListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setElementName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return ($this->responseSizeLimit)
            ? $this->responseSizeLimit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaCallCenterScheduledReportName(SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName = null)
    {
        $this->searchCriteriaCallCenterScheduledReportName = ($searchCriteriaCallCenterScheduledReportName InstanceOf SearchCriteriaCallCenterScheduledReportName)
             ? $searchCriteriaCallCenterScheduledReportName
             : new SearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName);
        $this->searchCriteriaCallCenterScheduledReportName->setElementName('searchCriteriaCallCenterScheduledReportName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName
     */
    public function getSearchCriteriaCallCenterScheduledReportName()
    {
        return $this->searchCriteriaCallCenterScheduledReportName;
    }

    /**
     * 
     */
    public function setSearchCriteriaGroupId(SearchCriteriaGroupId $searchCriteriaGroupId = null)
    {
        $this->searchCriteriaGroupId = ($searchCriteriaGroupId InstanceOf SearchCriteriaGroupId)
             ? $searchCriteriaGroupId
             : new SearchCriteriaGroupId($searchCriteriaGroupId);
        $this->searchCriteriaGroupId->setElementName('searchCriteriaGroupId');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupId $searchCriteriaGroupId
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactCallCenterScheduledReportServiceProvider(SearchCriteriaExactCallCenterScheduledReportServiceProvider $searchCriteriaExactCallCenterScheduledReportServiceProvider = null)
    {
        $this->searchCriteriaExactCallCenterScheduledReportServiceProvider = ($searchCriteriaExactCallCenterScheduledReportServiceProvider InstanceOf SearchCriteriaExactCallCenterScheduledReportServiceProvider)
             ? $searchCriteriaExactCallCenterScheduledReportServiceProvider
             : new SearchCriteriaExactCallCenterScheduledReportServiceProvider($searchCriteriaExactCallCenterScheduledReportServiceProvider);
        $this->searchCriteriaExactCallCenterScheduledReportServiceProvider->setElementName('searchCriteriaExactCallCenterScheduledReportServiceProvider');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactCallCenterScheduledReportServiceProvider $searchCriteriaExactCallCenterScheduledReportServiceProvider
     */
    public function getSearchCriteriaExactCallCenterScheduledReportServiceProvider()
    {
        return $this->searchCriteriaExactCallCenterScheduledReportServiceProvider;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor(SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null)
    {
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = ($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor InstanceOf SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor)
             ? $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
             : new SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor);
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor->setElementName('searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     */
    public function getSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor()
    {
        return $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
    }

    /**
     * 
     */
    public function setSearchCriteriaCallCenterReportTemplateName(SearchCriteriaCallCenterReportTemplateName $searchCriteriaCallCenterReportTemplateName = null)
    {
        $this->searchCriteriaCallCenterReportTemplateName = ($searchCriteriaCallCenterReportTemplateName InstanceOf SearchCriteriaCallCenterReportTemplateName)
             ? $searchCriteriaCallCenterReportTemplateName
             : new SearchCriteriaCallCenterReportTemplateName($searchCriteriaCallCenterReportTemplateName);
        $this->searchCriteriaCallCenterReportTemplateName->setElementName('searchCriteriaCallCenterReportTemplateName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaCallCenterReportTemplateName $searchCriteriaCallCenterReportTemplateName
     */
    public function getSearchCriteriaCallCenterReportTemplateName()
    {
        return $this->searchCriteriaCallCenterReportTemplateName;
    }
}

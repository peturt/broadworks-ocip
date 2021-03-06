<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsCollectionPeriodMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\CallCenterAgentStatistics13mp8;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\CallCenterQueueStatistics13mp8;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Contains Call Center statistics.
 *         Replaced By: GroupCallCenterGetInstanceStatisticsResponse14sp9
 */
class GroupCallCenterGetInstanceStatisticsResponse13mp8 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterGetInstanceStatisticsResponse13mp8';
    protected $numberOfCallsQueuedNow;
    protected $generateDailyReport;
    protected $collectionPeriodMinutes;
    protected $reportingEmailAddress1;
    protected $reportingEmailAddress2;
    protected $queueStatisticsYesterday;
    protected $queueStatisticsToday;
    protected $agentStatistics;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupCallCenterGetInstanceStatisticsResponse13mp8 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setNumberOfCallsQueuedNow($numberOfCallsQueuedNow = null)
    {
        $this->numberOfCallsQueuedNow = new PrimitiveType($numberOfCallsQueuedNow);
        $this->numberOfCallsQueuedNow->setElementName('numberOfCallsQueuedNow');
        return $this;
    }

    /**
     * 
     * @return int $numberOfCallsQueuedNow
     */
    public function getNumberOfCallsQueuedNow()
    {
        return ($this->numberOfCallsQueuedNow)
            ? $this->numberOfCallsQueuedNow->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGenerateDailyReport($generateDailyReport = null)
    {
        $this->generateDailyReport = new PrimitiveType($generateDailyReport);
        $this->generateDailyReport->setElementName('generateDailyReport');
        return $this;
    }

    /**
     * 
     * @return boolean $generateDailyReport
     */
    public function getGenerateDailyReport()
    {
        return ($this->generateDailyReport)
            ? $this->generateDailyReport->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCollectionPeriodMinutes($collectionPeriodMinutes = null)
    {
        $this->collectionPeriodMinutes = ($collectionPeriodMinutes InstanceOf CallCenterStatisticsCollectionPeriodMinutes)
             ? $collectionPeriodMinutes
             : new CallCenterStatisticsCollectionPeriodMinutes($collectionPeriodMinutes);
        $this->collectionPeriodMinutes->setElementName('collectionPeriodMinutes');
        return $this;
    }

    /**
     * 
     * @return CallCenterStatisticsCollectionPeriodMinutes $collectionPeriodMinutes
     */
    public function getCollectionPeriodMinutes()
    {
        return ($this->collectionPeriodMinutes)
            ? $this->collectionPeriodMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportingEmailAddress1($reportingEmailAddress1 = null)
    {
        $this->reportingEmailAddress1 = ($reportingEmailAddress1 InstanceOf EmailAddress)
             ? $reportingEmailAddress1
             : new EmailAddress($reportingEmailAddress1);
        $this->reportingEmailAddress1->setElementName('reportingEmailAddress1');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $reportingEmailAddress1
     */
    public function getReportingEmailAddress1()
    {
        return ($this->reportingEmailAddress1)
            ? $this->reportingEmailAddress1->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportingEmailAddress2($reportingEmailAddress2 = null)
    {
        $this->reportingEmailAddress2 = ($reportingEmailAddress2 InstanceOf EmailAddress)
             ? $reportingEmailAddress2
             : new EmailAddress($reportingEmailAddress2);
        $this->reportingEmailAddress2->setElementName('reportingEmailAddress2');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $reportingEmailAddress2
     */
    public function getReportingEmailAddress2()
    {
        return ($this->reportingEmailAddress2)
            ? $this->reportingEmailAddress2->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setQueueStatisticsYesterday(CallCenterQueueStatistics13mp8 $queueStatisticsYesterday = null)
    {
        $this->queueStatisticsYesterday = ($queueStatisticsYesterday InstanceOf CallCenterQueueStatistics13mp8)
             ? $queueStatisticsYesterday
             : new CallCenterQueueStatistics13mp8($queueStatisticsYesterday);
        $this->queueStatisticsYesterday->setElementName('queueStatisticsYesterday');
        return $this;
    }

    /**
     * 
     * @return CallCenterQueueStatistics13mp8 $queueStatisticsYesterday
     */
    public function getQueueStatisticsYesterday()
    {
        return $this->queueStatisticsYesterday;
    }

    /**
     * 
     */
    public function setQueueStatisticsToday(CallCenterQueueStatistics13mp8 $queueStatisticsToday = null)
    {
        $this->queueStatisticsToday = ($queueStatisticsToday InstanceOf CallCenterQueueStatistics13mp8)
             ? $queueStatisticsToday
             : new CallCenterQueueStatistics13mp8($queueStatisticsToday);
        $this->queueStatisticsToday->setElementName('queueStatisticsToday');
        return $this;
    }

    /**
     * 
     * @return CallCenterQueueStatistics13mp8 $queueStatisticsToday
     */
    public function getQueueStatisticsToday()
    {
        return $this->queueStatisticsToday;
    }

    /**
     * 
     */
    public function setAgentStatistics(CallCenterAgentStatistics13mp8 $agentStatistics = null)
    {
        $this->agentStatistics = ($agentStatistics InstanceOf CallCenterAgentStatistics13mp8)
             ? $agentStatistics
             : new CallCenterAgentStatistics13mp8($agentStatistics);
        $this->agentStatistics->setElementName('agentStatistics');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentStatistics13mp8 $agentStatistics
     */
    public function getAgentStatistics()
    {
        return $this->agentStatistics;
    }
}

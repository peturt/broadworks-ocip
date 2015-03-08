<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ExpensiveCallNotificationPostAnnouncementDelaySeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemExpensiveCallNotificationGetRequest.
 */
class SystemExpensiveCallNotificationGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemExpensiveCallNotificationGetResponse';
    public    $name                             = __CLASS__;
    protected $enablePostAnnouncementDelayTimer = null;
    protected $postAnnouncementDelaySeconds     = null;


    /**
     * 
     */
    public function setEnablePostAnnouncementDelayTimer($enablePostAnnouncementDelayTimer = null)
    {
        $this->enablePostAnnouncementDelayTimer = (boolean) $enablePostAnnouncementDelayTimer;
    }

    /**
     * 
     */
    public function getEnablePostAnnouncementDelayTimer()
    {
        return (!$this->enablePostAnnouncementDelayTimer) ?: $this->enablePostAnnouncementDelayTimer->getValue();
    }

    /**
     * Additional grace period after the expensive call notification announcement before call setup continues.
     */
    public function setPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds = null)
    {
        $this->postAnnouncementDelaySeconds = ($postAnnouncementDelaySeconds InstanceOf ExpensiveCallNotificationPostAnnouncementDelaySeconds)
             ? $postAnnouncementDelaySeconds
             : new ExpensiveCallNotificationPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds);
    }

    /**
     * Additional grace period after the expensive call notification announcement before call setup continues.
     */
    public function getPostAnnouncementDelaySeconds()
    {
        return (!$this->postAnnouncementDelaySeconds) ?: $this->postAnnouncementDelaySeconds->getValue();
    }
}

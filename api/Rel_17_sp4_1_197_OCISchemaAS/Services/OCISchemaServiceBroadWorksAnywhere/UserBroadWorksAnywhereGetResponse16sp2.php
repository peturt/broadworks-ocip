<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksAnywhere; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserBroadWorksAnywhereGetRequest16sp2.
 *         The phoneNumberTable contains columns: "Phone Number", "Description"
 */
class UserBroadWorksAnywhereGetResponse16sp2 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksAnywhere\UserBroadWorksAnywhereGetResponse16sp2';
    public    $name                                 = __CLASS__;
    protected $alertAllLocationsForClickToDialCalls = null;
    protected $alertAllLocationsForGroupPagingCalls = null;
    protected $phoneNumberTable                     = null;


    /**
     * 
     */
    public function setAlertAllLocationsForClickToDialCalls($alertAllLocationsForClickToDialCalls = null)
    {
        $this->alertAllLocationsForClickToDialCalls = (boolean) $alertAllLocationsForClickToDialCalls;
    }

    /**
     * 
     */
    public function getAlertAllLocationsForClickToDialCalls()
    {
        return (!$this->alertAllLocationsForClickToDialCalls) ?: $this->alertAllLocationsForClickToDialCalls->getValue();
    }

    /**
     * 
     */
    public function setAlertAllLocationsForGroupPagingCalls($alertAllLocationsForGroupPagingCalls = null)
    {
        $this->alertAllLocationsForGroupPagingCalls = (boolean) $alertAllLocationsForGroupPagingCalls;
    }

    /**
     * 
     */
    public function getAlertAllLocationsForGroupPagingCalls()
    {
        return (!$this->alertAllLocationsForGroupPagingCalls) ?: $this->alertAllLocationsForGroupPagingCalls->getValue();
    }

    /**
     * 
     */
    public function setPhoneNumberTable(core:OCITable $phoneNumberTable = null)
    {
        $this->phoneNumberTable = core:OCITable $phoneNumberTable;
    }

    /**
     * 
     */
    public function getPhoneNumberTable()
    {
        return (!$this->phoneNumberTable) ?: $this->phoneNumberTable->getValue();
    }
}

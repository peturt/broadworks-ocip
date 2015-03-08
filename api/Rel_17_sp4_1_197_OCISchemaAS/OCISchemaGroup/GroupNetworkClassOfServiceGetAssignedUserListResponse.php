<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupNetworkClassOfServiceGetAssignedUserListRequest.
 *         Contains a table of users that have the Network Class of Service 
 *         assigned. The column headings are: "User Id", "User Type", "Last Name", "First Name",
 *         "Department", "Phone Number", "Email Address", "Service Provider Id", 
 *         "Group Id", "Hiragana Last Name" and "Hiragana First Name".
 */
class GroupNetworkClassOfServiceGetAssignedUserListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupNetworkClassOfServiceGetAssignedUserListResponse';
    public    $name      = __CLASS__;
    protected $userTable = null;


    /**
     * 
     */
    public function setUserTable(core:OCITable $userTable = null)
    {
        $this->userTable = core:OCITable $userTable;
    }

    /**
     * 
     */
    public function getUserTable()
    {
        return (!$this->userTable) ?: $this->userTable->getValue();
    }
}

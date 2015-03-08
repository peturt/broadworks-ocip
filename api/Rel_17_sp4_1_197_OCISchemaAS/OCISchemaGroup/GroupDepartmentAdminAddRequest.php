<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a department administrator to a group department.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDepartmentAdminAddRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $departmentKey = null;
    protected $userId        = null;
    protected $firstName     = null;
    protected $lastName      = null;
    protected $password      = null;
    protected $language      = null;

    public function __construct(
         GroupDepartmentKey $departmentKey,
         $userId,
         $firstName = null,
         $lastName = null,
         $password = null,
         $language = null
    ) {
        $this->setDepartmentKey($departmentKey);
        $this->setUserId($userId);
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setPassword($password);
        $this->setLanguage($language);
    }

    /**
     * Uniquely identifies a department defined within a group.
     *         To uniquely identify a group department, we must know the department name and which
     *         group contains the department.
     */
    public function setDepartmentKey(GroupDepartmentKey $departmentKey = null)
    {
        $this->departmentKey = GroupDepartmentKey $departmentKey;
    }

    /**
     * Uniquely identifies a department defined within a group.
     *         To uniquely identify a group department, we must know the department name and which
     *         group contains the department.
     */
    public function getDepartmentKey()
    {
        return (!$this->departmentKey) ?: $this->departmentKey->getValue();
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * First Name is the first name of a user or an administrator.
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = ($firstName InstanceOf FirstName)
             ? $firstName
             : new FirstName($firstName);
    }

    /**
     * First Name is the first name of a user or an administrator.
     */
    public function getFirstName()
    {
        return (!$this->firstName) ?: $this->firstName->getValue();
    }

    /**
     * Last Name is the last name of a user or an administrator.
     */
    public function setLastName($lastName = null)
    {
        $this->lastName = ($lastName InstanceOf LastName)
             ? $lastName
             : new LastName($lastName);
    }

    /**
     * Last Name is the last name of a user or an administrator.
     */
    public function getLastName()
    {
        return (!$this->lastName) ?: $this->lastName->getValue();
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        $this->password = ($password InstanceOf Password)
             ? $password
             : new Password($password);
    }

    /**
     * 
     */
    public function getPassword()
    {
        return (!$this->password) ?: $this->password->getValue();
    }

    /**
     * Language identifies the language of a user or an administrator.
     */
    public function setLanguage($language = null)
    {
        $this->language = ($language InstanceOf Language)
             ? $language
             : new Language($language);
    }

    /**
     * Language identifies the language of a user or an administrator.
     */
    public function getLanguage()
    {
        return (!$this->language) ?: $this->language->getValue();
    }
}

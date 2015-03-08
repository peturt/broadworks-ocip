<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminEnhancedServiceInstanceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminSessionAdmissionControlAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminFeatureAccessCodeAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDialableCallerIDAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminOfficeZoneAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify the group administrator's policy settings.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode:
 *             dialableCallerIDAccess
 */
class GroupAdminModifyPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $userId                        = null;
    protected $profileAccess                 = null;
    protected $userAccess                    = null;
    protected $adminAccess                   = null;
    protected $departmentAccess              = null;
    protected $accessDeviceAccess            = null;
    protected $enhancedServiceInstanceAccess = null;
    protected $featureAccessCodeAccess       = null;
    protected $phoneNumberExtensionAccess    = null;
    protected $callingLineIdNumberAccess     = null;
    protected $serviceAccess                 = null;
    protected $trunkGroupAccess              = null;
    protected $sessionAdmissionControlAccess = null;
    protected $officeZoneAccess              = null;
    protected $dialableCallerIDAccess        = null;

    public function __construct(
         $userId,
         $profileAccess = null,
         $userAccess = null,
         $adminAccess = null,
         $departmentAccess = null,
         $accessDeviceAccess = null,
         $enhancedServiceInstanceAccess = null,
         $featureAccessCodeAccess = null,
         $phoneNumberExtensionAccess = null,
         $callingLineIdNumberAccess = null,
         $serviceAccess = null,
         $trunkGroupAccess = null,
         $sessionAdmissionControlAccess = null,
         $officeZoneAccess = null,
         $dialableCallerIDAccess = null
    ) {
        $this->setUserId($userId);
        $this->setProfileAccess($profileAccess);
        $this->setUserAccess($userAccess);
        $this->setAdminAccess($adminAccess);
        $this->setDepartmentAccess($departmentAccess);
        $this->setAccessDeviceAccess($accessDeviceAccess);
        $this->setEnhancedServiceInstanceAccess($enhancedServiceInstanceAccess);
        $this->setFeatureAccessCodeAccess($featureAccessCodeAccess);
        $this->setPhoneNumberExtensionAccess($phoneNumberExtensionAccess);
        $this->setCallingLineIdNumberAccess($callingLineIdNumberAccess);
        $this->setServiceAccess($serviceAccess);
        $this->setTrunkGroupAccess($trunkGroupAccess);
        $this->setSessionAdmissionControlAccess($sessionAdmissionControlAccess);
        $this->setOfficeZoneAccess($officeZoneAccess);
        $this->setDialableCallerIDAccess($dialableCallerIDAccess);
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
     * Policy for a group administrator's access to the group profile.
     */
    public function setProfileAccess($profileAccess = null)
    {
        $this->profileAccess = ($profileAccess InstanceOf GroupAdminProfileAccess)
             ? $profileAccess
             : new GroupAdminProfileAccess($profileAccess);
    }

    /**
     * Policy for a group administrator's access to the group profile.
     */
    public function getProfileAccess()
    {
        return (!$this->profileAccess) ?: $this->profileAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to user configuration.
     *         "Full" indicates full access to users in the group.
     *         "Full Profile" indicates
     *           1) the group administrator is restricted from adding or removing users, but
     *           2) has full access to the user's profile
     *         "Read-Only Profile" indicates
     *           1) the group administrator is restricted from adding or removing users, and
     *           2) read-only access is granted to the user's profile.
     *         "No Profile" indicates
     *           1) the group administrator is restricted from adding or removing users, and
     *           2) no access is granted to the user's profile.
     *         "None" indicates no access to users in the group.
     */
    public function setUserAccess($userAccess = null)
    {
        $this->userAccess = ($userAccess InstanceOf GroupAdminUserAccess)
             ? $userAccess
             : new GroupAdminUserAccess($userAccess);
    }

    /**
     * Policy for a group administrator's access to user configuration.
     *         "Full" indicates full access to users in the group.
     *         "Full Profile" indicates
     *           1) the group administrator is restricted from adding or removing users, but
     *           2) has full access to the user's profile
     *         "Read-Only Profile" indicates
     *           1) the group administrator is restricted from adding or removing users, and
     *           2) read-only access is granted to the user's profile.
     *         "No Profile" indicates
     *           1) the group administrator is restricted from adding or removing users, and
     *           2) no access is granted to the user's profile.
     *         "None" indicates no access to users in the group.
     */
    public function getUserAccess()
    {
        return (!$this->userAccess) ?: $this->userAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to group administrators and department administrators.
     */
    public function setAdminAccess($adminAccess = null)
    {
        $this->adminAccess = ($adminAccess InstanceOf GroupAdminAdminAccess)
             ? $adminAccess
             : new GroupAdminAdminAccess($adminAccess);
    }

    /**
     * Policy for a group administrator's access to group administrators and department administrators.
     */
    public function getAdminAccess()
    {
        return (!$this->adminAccess) ?: $this->adminAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to departments.
     *         "Full" indicates full access to departments.
     *         "Read-Only" indicates read-only access to the department list
     *         "None" indicates no access to the department list
     */
    public function setDepartmentAccess($departmentAccess = null)
    {
        $this->departmentAccess = ($departmentAccess InstanceOf GroupAdminDepartmentAccess)
             ? $departmentAccess
             : new GroupAdminDepartmentAccess($departmentAccess);
    }

    /**
     * Policy for a group administrator's access to departments.
     *         "Full" indicates full access to departments.
     *         "Read-Only" indicates read-only access to the department list
     *         "None" indicates no access to the department list
     */
    public function getDepartmentAccess()
    {
        return (!$this->departmentAccess) ?: $this->departmentAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to access devices.
     *        "Full" indicates full access to access devices.
     *        "Associate User With Device" indicates
     *          1) read-only access to devices, but
     *          2) the group administrator may associate users with devices
     *        "Read-Only" indicates read-only access to devices and user-device associations
     */
    public function setAccessDeviceAccess($accessDeviceAccess = null)
    {
        $this->accessDeviceAccess = ($accessDeviceAccess InstanceOf GroupAdminAccessDeviceAccess)
             ? $accessDeviceAccess
             : new GroupAdminAccessDeviceAccess($accessDeviceAccess);
    }

    /**
     * Policy for a group administrator's access to access devices.
     *        "Full" indicates full access to access devices.
     *        "Associate User With Device" indicates
     *          1) read-only access to devices, but
     *          2) the group administrator may associate users with devices
     *        "Read-Only" indicates read-only access to devices and user-device associations
     */
    public function getAccessDeviceAccess()
    {
        return (!$this->accessDeviceAccess) ?: $this->accessDeviceAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to enhanced service instances (e.g. - instances of Auto Attendants, Call Capacity Groups,
     *         Conference Bridges, Hunt Groups, Call Centers, Series Completion Groups, etc.).
     *         "Full" indicates full access to enhanced service instances.
     *         "Modify-Only" indicates
     *           1) the group administrator is restricted from adding or removing enhanced service instances, but
     *           2) may modify existing instances.
     */
    public function setEnhancedServiceInstanceAccess($enhancedServiceInstanceAccess = null)
    {
        $this->enhancedServiceInstanceAccess = ($enhancedServiceInstanceAccess InstanceOf GroupAdminEnhancedServiceInstanceAccess)
             ? $enhancedServiceInstanceAccess
             : new GroupAdminEnhancedServiceInstanceAccess($enhancedServiceInstanceAccess);
    }

    /**
     * Policy for a group administrator's access to enhanced service instances (e.g. - instances of Auto Attendants, Call Capacity Groups,
     *         Conference Bridges, Hunt Groups, Call Centers, Series Completion Groups, etc.).
     *         "Full" indicates full access to enhanced service instances.
     *         "Modify-Only" indicates
     *           1) the group administrator is restricted from adding or removing enhanced service instances, but
     *           2) may modify existing instances.
     */
    public function getEnhancedServiceInstanceAccess()
    {
        return (!$this->enhancedServiceInstanceAccess) ?: $this->enhancedServiceInstanceAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to feature access codes.
     */
    public function setFeatureAccessCodeAccess($featureAccessCodeAccess = null)
    {
        $this->featureAccessCodeAccess = ($featureAccessCodeAccess InstanceOf GroupAdminFeatureAccessCodeAccess)
             ? $featureAccessCodeAccess
             : new GroupAdminFeatureAccessCodeAccess($featureAccessCodeAccess);
    }

    /**
     * Policy for a group administrator's access to feature access codes.
     */
    public function getFeatureAccessCodeAccess()
    {
        return (!$this->featureAccessCodeAccess) ?: $this->featureAccessCodeAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to assigning phone numbers and extensions.
     */
    public function setPhoneNumberExtensionAccess($phoneNumberExtensionAccess = null)
    {
        $this->phoneNumberExtensionAccess = ($phoneNumberExtensionAccess InstanceOf GroupAdminPhoneNumberExtensionAccess)
             ? $phoneNumberExtensionAccess
             : new GroupAdminPhoneNumberExtensionAccess($phoneNumberExtensionAccess);
    }

    /**
     * Policy for a group administrator's access to assigning phone numbers and extensions.
     */
    public function getPhoneNumberExtensionAccess()
    {
        return (!$this->phoneNumberExtensionAccess) ?: $this->phoneNumberExtensionAccess->getValue();
    }

    /**
     * Group Administrator's policy for accessing calling line id number.
     */
    public function setCallingLineIdNumberAccess($callingLineIdNumberAccess = null)
    {
        $this->callingLineIdNumberAccess = ($callingLineIdNumberAccess InstanceOf GroupAdminCallingLineIdNumberAccess)
             ? $callingLineIdNumberAccess
             : new GroupAdminCallingLineIdNumberAccess($callingLineIdNumberAccess);
    }

    /**
     * Group Administrator's policy for accessing calling line id number.
     */
    public function getCallingLineIdNumberAccess()
    {
        return (!$this->callingLineIdNumberAccess) ?: $this->callingLineIdNumberAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to assigning services to groups and users.
     */
    public function setServiceAccess($serviceAccess = null)
    {
        $this->serviceAccess = ($serviceAccess InstanceOf GroupAdminServiceAccess)
             ? $serviceAccess
             : new GroupAdminServiceAccess($serviceAccess);
    }

    /**
     * Policy for a group administrator's access to assigning services to groups and users.
     */
    public function getServiceAccess()
    {
        return (!$this->serviceAccess) ?: $this->serviceAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to trunk groups.
     *         "Full" indicates full access to add/modify/delete trunk groups in the group.
     *         "Full Resources" indicates
     *           1) Restricted from adding or removing trunk groups, and
     *           2) Full access to trunk group resources
     *         "Read-Only Resources" indicates
     *           1) Restricted from adding or removing trunk groups, and
     *           2) Read-only access to trunk group resources
     *         "None" indicates no access to trunk groups in the group.
     */
    public function setTrunkGroupAccess($trunkGroupAccess = null)
    {
        $this->trunkGroupAccess = ($trunkGroupAccess InstanceOf GroupAdminTrunkGroupAccess)
             ? $trunkGroupAccess
             : new GroupAdminTrunkGroupAccess($trunkGroupAccess);
    }

    /**
     * Policy for a group administrator's access to trunk groups.
     *         "Full" indicates full access to add/modify/delete trunk groups in the group.
     *         "Full Resources" indicates
     *           1) Restricted from adding or removing trunk groups, and
     *           2) Full access to trunk group resources
     *         "Read-Only Resources" indicates
     *           1) Restricted from adding or removing trunk groups, and
     *           2) Read-only access to trunk group resources
     *         "None" indicates no access to trunk groups in the group.
     */
    public function getTrunkGroupAccess()
    {
        return (!$this->trunkGroupAccess) ?: $this->trunkGroupAccess->getValue();
    }

    /**
     * Group Administrator's policy for accessing
     *         the Session Admission Control information.
     */
    public function setSessionAdmissionControlAccess($sessionAdmissionControlAccess = null)
    {
        $this->sessionAdmissionControlAccess = ($sessionAdmissionControlAccess InstanceOf GroupAdminSessionAdmissionControlAccess)
             ? $sessionAdmissionControlAccess
             : new GroupAdminSessionAdmissionControlAccess($sessionAdmissionControlAccess);
    }

    /**
     * Group Administrator's policy for accessing
     *         the Session Admission Control information.
     */
    public function getSessionAdmissionControlAccess()
    {
        return (!$this->sessionAdmissionControlAccess) ?: $this->sessionAdmissionControlAccess->getValue();
    }

    /**
     * Group Administrator's policy for accessing
     *         the Office Zone information.
     */
    public function setOfficeZoneAccess($officeZoneAccess = null)
    {
        $this->officeZoneAccess = ($officeZoneAccess InstanceOf GroupAdminOfficeZoneAccess)
             ? $officeZoneAccess
             : new GroupAdminOfficeZoneAccess($officeZoneAccess);
    }

    /**
     * Group Administrator's policy for accessing
     *         the Office Zone information.
     */
    public function getOfficeZoneAccess()
    {
        return (!$this->officeZoneAccess) ?: $this->officeZoneAccess->getValue();
    }

    /**
     * Policy for accessing the group Dialable Caller ID configuration.
     */
    public function setDialableCallerIDAccess($dialableCallerIDAccess = null)
    {
        $this->dialableCallerIDAccess = ($dialableCallerIDAccess InstanceOf GroupAdminDialableCallerIDAccess)
             ? $dialableCallerIDAccess
             : new GroupAdminDialableCallerIDAccess($dialableCallerIDAccess);
    }

    /**
     * Policy for accessing the group Dialable Caller ID configuration.
     */
    public function getDialableCallerIDAccess()
    {
        return (!$this->dialableCallerIDAccess) ?: $this->dialableCallerIDAccess->getValue();
    }
}

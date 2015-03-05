<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MusicOnHoldUserSourceModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify data for Music On Hold User.
 *         The response is either a SuccessResponse or an
 *         ErrorResponse.
 *         Replaced By: UserMusicOnHoldUserModifyRequest16
 */
class UserMusicOnHoldUserModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $source=null,
             $useAlternateSourceForInternalCalls=null,
             $internalSource=null
    ) {
        $this->userId                             = new UserId($userId);
        $this->source                             = $source;
        $this->useAlternateSourceForInternalCalls = $useAlternateSourceForInternalCalls;
        $this->internalSource                     = $internalSource;
        $this->args                               = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setSource($source)
    {
        $source and $this->source = new MusicOnHoldUserSourceModify($source);
    }

    public function getSource()
    {
        return (!$this->source) ?: $this->source->value();
    }

    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls)
    {
        $useAlternateSourceForInternalCalls and $this->useAlternateSourceForInternalCalls = new xs:boolean($useAlternateSourceForInternalCalls);
    }

    public function getUseAlternateSourceForInternalCalls()
    {
        return (!$this->useAlternateSourceForInternalCalls) ?: $this->useAlternateSourceForInternalCalls->value();
    }

    public function setInternalSource($internalSource)
    {
        $internalSource and $this->internalSource = new MusicOnHoldUserSourceModify($internalSource);
    }

    public function getInternalSource()
    {
        return (!$this->internalSource) ?: $this->internalSource->value();
    }
}
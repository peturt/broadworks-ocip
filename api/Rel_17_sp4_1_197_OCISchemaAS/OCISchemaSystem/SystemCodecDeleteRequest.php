<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\Codec;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to delete a supported codec from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCodecDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name  = __CLASS__;
    protected $codec = null;

    public function __construct(
         $codec
    ) {
        $this->setCodec($codec);
    }

    /**
     * Codec.
     */
    public function setCodec($codec = null)
    {
        $this->codec = ($codec InstanceOf Codec)
             ? $codec
             : new Codec($codec);
    }

    /**
     * Codec.
     */
    public function getCodec()
    {
        return (!$this->codec) ?: $this->codec->getValue();
    }
}

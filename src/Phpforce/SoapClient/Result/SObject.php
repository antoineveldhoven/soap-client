<?php

namespace Phpforce\SoapClient\Result;

/**
 * Standard object
 *
 */
#[\AllowDynamicProperties]
class SObject
{
    /**
     * @var string
     */
    public $Id;
    
    public function getId()
    {
        return $this->Id;
    }
}

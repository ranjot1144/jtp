<?php

/**
 * Modified: 2020-05-26T22:07:25+00:00 
 */
namespace Office365\OneDrive\ContentTypes;

use Office365\Runtime\ClientValue;
class ContentTypeOrder extends ClientValue
{
    /**
     * @var bool
     */
    public $Default;
    /**
     * @var integer
     */
    public $Position;
}
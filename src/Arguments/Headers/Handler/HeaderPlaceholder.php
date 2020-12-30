<?php

namespace GoetasWebservices\SoapServices\Metadata\Arguments\Headers\Handler;


abstract class HeaderPlaceholder
{
    private $__headers = [];

    public function addHeader(object $header)
    {
        $this->__headers[] = $header;
    }
}



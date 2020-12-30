<?php

namespace GoetasWebservices\SoapServices\Metadata\Envelope;

abstract class Fault
{
    abstract public function getRawDetail(): ?\SimpleXMLElement;
    abstract public function setRawDetail(\SimpleXMLElement $rawDetail): void;
}


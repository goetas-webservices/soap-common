<?php

namespace GoetasWebservices\SoapServices\Metadata\Envelope\SoapEnvelope\Parts;

use \GoetasWebservices\SoapServices\Metadata\Envelope\Fault as BaseFault;

class Fault extends BaseFault
{
    /**
     * @var string
     */
    private $code;
    /**
     * @var string
     */
    private $actor;
    /**
     * @var string
     */
    private $string;

    /**
     * @var string
     */
    private $detail;

    /**
     * @return string
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param string $actor
     */
    public function setActor($actor)
    {
        $this->actor = $actor;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * @param string $string
     */
    public function setString($string)
    {
        $this->string = $string;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param string $detail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }


    /**
     * @var \SimpleXMLElement
     */
    private $rawDetail;

    /**
     * @return \SimpleXMLElement
     */
    public function getRawDetail(): ?\SimpleXMLElement
    {
        return $this->rawDetail;
    }

    /**
     * @param \SimpleXMLElement $rawDetail
     */
    public function setRawDetail(\SimpleXMLElement $rawDetail): void
    {
        $this->rawDetail = $rawDetail;
    }


}


<?php

namespace GoetasWebservices\SoapServices\Metadata\Envelope\SoapEnvelope12\Parts;

use \GoetasWebservices\SoapServices\Metadata\Envelope\Fault as BaseFault;

/**
 * Class representing DoSomethingInput
 */
class Fault extends BaseFault
{
    /**
     * @var FaultCode
     */
    private $code;
    /**
     * @var string[]
     */
    private $reason = [];
    /**
     * @var string
     */
    private $detail;
    /**
     * @var string
     */
    private $role;
    /**
     * @var string
     */
    private $node;

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
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     * @return Fault
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * @param string $node
     */
    public function setNode($node)
    {
        $this->node = $node;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FaultCode $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string[] $reason
     */
    public function setReason(array $reason)
    {
        $this->reason = $reason;
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


<?php


class ServiceParam
{
 public $billerId;

 public $billId;

 public $requestId;

 public $rrr;

    /**
     * @return mixed
     */
    public function getRrr()
    {
        return $this->rrr;
    }

    /**
     * @param mixed $rrr
     */
    public function setRrr($rrr): void
    {
        $this->rrr = $rrr;
    }

    /**
     * @return mixed
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param mixed $requestId
     */
    public function setRequestId($requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * @return mixed
     */
    public function getBillId()
    {
        return $this->billId;
    }

    /**
     * @param mixed $billId
     */
    public function setBillId($billId): void
    {
        $this->billId = $billId;
    }

    /**
     * @return mixed
     */
    public function getBillerId()
    {
        return $this->billerId;
    }

    /**
     * @param mixed $billerId
     */
    public function setBillerId($billerId): void
    {
        $this->billerId = $billerId;
    }
}
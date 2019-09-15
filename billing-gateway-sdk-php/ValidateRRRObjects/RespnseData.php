<?php


class RespnseData
{
    public $customFields= array(CustomFields::class);//array( CustomFields )
    public $billId; //String
    public $amount; //double
    public $payerPhone; //String
    public $currency; //String
    public $payerName; //String
    public $payerEmail; //String
    public $amountDue; //double
    public $status; //String

    /**
     * @return array
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param array $customFields
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;
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
    public function setBillId($billId)
    {
        $this->billId = $billId;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getPayerPhone()
    {
        return $this->payerPhone;
    }

    /**
     * @param mixed $payerPhone
     */
    public function setPayerPhone($payerPhone)
    {
        $this->payerPhone = $payerPhone;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getPayerName()
    {
        return $this->payerName;
    }

    /**
     * @param mixed $payerName
     */
    public function setPayerName($payerName)
    {
        $this->payerName = $payerName;
    }

    /**
     * @return mixed
     */
    public function getPayerEmail()
    {
        return $this->payerEmail;
    }

    /**
     * @param mixed $payerEmail
     */
    public function setPayerEmail($payerEmail)
    {
        $this->payerEmail = $payerEmail;
    }

    /**
     * @return mixed
     */
    public function getAmountDue()
    {
        return $this->amountDue;
    }

    /**
     * @param mixed $amountDue
     */
    public function setAmountDue($amountDue)
    {
        $this->amountDue = $amountDue;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
<?php


class GenerateRRRRequest
{
    private $customFields = Array(CustomFields::class);//array( CustomFields )
    private $billId; //String
    private $amount; //double
    private $payerPhone; //String
    private $currency; //String
    private $payerName; //String
    private $payerEmail; //String

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
        $this->amount = (double)$amount;
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



}
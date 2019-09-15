<?php


class ResponseData
{
    private $rrr; //array( undefined )
    private $amountDue; //array( undefined )
    private $chargeFee; //array( undefined )
    private $rrrAmount;//array( undefined )
    private $payerEmail; //array( undefined )
    private $payerName; //array( undefined )
    private $payerPhone; //array( undefined )
    private $description; //array( undefined )
    private $currency; //array( undefined )
    private $type; //array( undefined )
    private $acceptPartPayment; //boolean
    private $frequency; //String
    private $payerAccountNumber; //String
    private $maxNoOfDebits; //array( undefined )
    private $startDate; //String
    private $endDate; //String
    private $extraData = array();  //array( undefined )
    private $customFields =array();  //array( undefined )

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
    public function setRrr($rrr)
    {
        $this->rrr = $rrr;
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
    public function getChargeFee()
    {
        return $this->chargeFee;
    }

    /**
     * @param mixed $chargeFee
     */
    public function setChargeFee($chargeFee)
    {
        $this->chargeFee = $chargeFee;
    }

    /**
     * @return mixed
     */
    public function getRrrAmount()
    {
        return $this->rrrAmount;
    }

    /**
     * @param mixed $rrrAmount
     */
    public function setRrrAmount($rrrAmount)
    {
        $this->rrrAmount = $rrrAmount;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getAcceptPartPayment()
    {
        return $this->acceptPartPayment;
    }

    /**
     * @param mixed $acceptPartPayment
     */
    public function setAcceptPartPayment($acceptPartPayment)
    {
        $this->acceptPartPayment = $acceptPartPayment;
    }

    /**
     * @return mixed
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param mixed $frequency
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }

    /**
     * @return mixed
     */
    public function getPayerAccountNumber()
    {
        return $this->payerAccountNumber;
    }

    /**
     * @param mixed $payerAccountNumber
     */
    public function setPayerAccountNumber($payerAccountNumber)
    {
        $this->payerAccountNumber = $payerAccountNumber;
    }

    /**
     * @return mixed
     */
    public function getMaxNoOfDebits()
    {
        return $this->maxNoOfDebits;
    }

    /**
     * @param mixed $maxNoOfDebits
     */
    public function setMaxNoOfDebits($maxNoOfDebits)
    {
        $this->maxNoOfDebits = $maxNoOfDebits;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return array
     */
    public function getExtraData()
    {
        return $this->extraData;
    }

    /**
     * @param array $extraData
     */
    public function setExtraData($extraData)
    {
        $this->extraData = $extraData;
    }

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

}
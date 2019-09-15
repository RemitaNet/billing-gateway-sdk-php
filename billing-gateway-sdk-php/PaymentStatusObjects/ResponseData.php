<?php


class ResponseData
{
    public $rrr; //String
    public $totalAmount;//double
    public $balanceDue; //double
    public $paymentRef; //String
    public $paymentDate; //Date
    public $debittedAccount; //String
    public $amountDebitted; //double
    public $extendedData=array(ExtendedData::class); //array( undefined )

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
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param mixed $totalAmount
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * @return mixed
     */
    public function getBalanceDue()
    {
        return $this->balanceDue;
    }

    /**
     * @param mixed $balanceDue
     */
    public function setBalanceDue($balanceDue)
    {
        $this->balanceDue = $balanceDue;
    }

    /**
     * @return mixed
     */
    public function getPaymentRef()
    {
        return $this->paymentRef;
    }

    /**
     * @param mixed $paymentRef
     */
    public function setPaymentRef($paymentRef)
    {
        $this->paymentRef = $paymentRef;
    }

    /**
     * @return mixed
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * @param mixed $paymentDate
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;
    }

    /**
     * @return mixed
     */
    public function getDebittedAccount()
    {
        return $this->debittedAccount;
    }

    /**
     * @param mixed $debittedAccount
     */
    public function setDebittedAccount($debittedAccount)
    {
        $this->debittedAccount = $debittedAccount;
    }

    /**
     * @return mixed
     */
    public function getAmountDebitted()
    {
        return $this->amountDebitted;
    }

    /**
     * @param mixed $amountDebitted
     */
    public function setAmountDebitted($amountDebitted)
    {
        $this->amountDebitted = $amountDebitted;
    }

    /**
     * @return mixed
     */
    public function getExtendedData()
    {
        return $this->extendedData;
    }

    /**
     * @param mixed $extendedData
     */
    public function setExtendedData($extendedData)
    {
        $this->extendedData = $extendedData;
    }
}
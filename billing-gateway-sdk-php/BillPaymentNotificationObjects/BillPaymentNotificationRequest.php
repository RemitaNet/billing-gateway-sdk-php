<?php


class BillPaymentNotificationRequest
{
    public $rrr; //String
    public $incomeAccount; //String
    public $debittedAccount;//String
    public $paymentAuthCode; //String
    public $paymentChannel; //String
    public $tellerName; //String
    public $branchCode; //String
    public $amountDebitted; //String
    public $fundingSource; //String
    public $hash; //String

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
    public function getIncomeAccount()
    {
        return $this->incomeAccount;
    }

    /**
     * @param mixed $incomeAccount
     */
    public function setIncomeAccount($incomeAccount)
    {
        $this->incomeAccount = $incomeAccount;
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
    public function getPaymentAuthCode()
    {
        return $this->paymentAuthCode;
    }

    /**
     * @param mixed $paymentAuthCode
     */
    public function setPaymentAuthCode($paymentAuthCode)
    {
        $this->paymentAuthCode = $paymentAuthCode;
    }

    /**
     * @return mixed
     */
    public function getPaymentChannel()
    {
        return $this->paymentChannel;
    }

    /**
     * @param mixed $paymentChannel
     */
    public function setPaymentChannel($paymentChannel)
    {
        $this->paymentChannel = $paymentChannel;
    }

    /**
     * @return mixed
     */
    public function getTellerName()
    {
        return $this->tellerName;
    }

    /**
     * @param mixed $tellerName
     */
    public function setTellerName($tellerName)
    {
        $this->tellerName = $tellerName;
    }

    /**
     * @return mixed
     */
    public function getBranchCode()
    {
        return $this->branchCode;
    }

    /**
     * @param mixed $branchCode
     */
    public function setBranchCode($branchCode)
    {
        $this->branchCode = $branchCode;
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
    public function getFundingSource()
    {
        return $this->fundingSource;
    }

    /**
     * @param mixed $fundingSource
     */
    public function setFundingSource($fundingSource)
    {
        $this->fundingSource = $fundingSource;
    }

    /**
     * @return mixed
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param mixed $hash
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
    }
}
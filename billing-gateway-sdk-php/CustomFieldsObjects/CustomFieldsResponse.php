<?php


class CustomFieldsResponse
{
    private $responseCode; //String
    private $responseData = array();
    private $responseMsg; //String
    private $appVersionCode; //array( object )
    private $acceptPartPayment; //boolean
    private $fixedPrice; //boolean
    private $fixedAmount; //int
    private $currency; //String

    /**
     * @return mixed
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @param mixed $responseCode
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
    }

    /**
     * @return array
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * @param array $responseData
     */
    public function setResponseData($responseData)
    {
        $this->responseData = $responseData;
    }

    /**
     * @return mixed
     */
    public function getResponseMsg()
    {
        return $this->responseMsg;
    }

    /**
     * @param mixed $responseMsg
     */
    public function setResponseMsg($responseMsg)
    {
        $this->responseMsg = $responseMsg;
    }

    /**
     * @return mixed
     */
    public function getAppVersionCode()
    {
        return $this->appVersionCode;
    }

    /**
     * @param mixed $appVersionCode
     */
    public function setAppVersionCode($appVersionCode)
    {
        $this->appVersionCode = $appVersionCode;
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
    public function getFixedPrice()
    {
        return $this->fixedPrice;
    }

    /**
     * @param mixed $fixedPrice
     */
    public function setFixedPrice($fixedPrice)
    {
        $this->fixedPrice = $fixedPrice;
    }

    /**
     * @return mixed
     */
    public function getFixedAmount()
    {
        return $this->fixedAmount;
    }

    /**
     * @param mixed $fixedAmount
     */
    public function setFixedAmount($fixedAmount)
    {
        $this->fixedAmount = $fixedAmount;
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
    } //array( ResponseData )

}
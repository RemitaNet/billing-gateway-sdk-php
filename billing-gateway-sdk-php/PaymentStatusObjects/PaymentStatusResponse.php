<?php


class PaymentStatusResponse
{
    public $responseCode; //String
    public $responseMsg; //String
    public $iResponseCode;//array( undefined )
    public $iResponseMessage; //array( undefined )
    public $appVersionCode; //array( undefined )
    public $responseData= array(ResponseData::class); //array( ResponseData )

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
    public function getIResponseCode()
    {
        return $this->iResponseCode;
    }

    /**
     * @param mixed $iResponseCode
     */
    public function setIResponseCode($iResponseCode)
    {
        $this->iResponseCode = $iResponseCode;
    }

    /**
     * @return mixed
     */
    public function getIResponseMessage()
    {
        return $this->iResponseMessage;
    }

    /**
     * @param mixed $iResponseMessage
     */
    public function setIResponseMessage($iResponseMessage)
    {
        $this->iResponseMessage = $iResponseMessage;
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
}
<?php


class ValidateRRRResponse
{

    public $responseCode;//String
    public $responseData = array(ResponseData::class); //array( ResponseData )
    public $responseMsg; //String
    public $appVersionCode; //array( object )

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
}
<?php


class ServiceResponse
{

    private $responseCode; //String
    private $responseData = array();
    private $responseMsg; //String
    private $appVersionCode = array(); //array( object )

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
     * @return array
     */
    public function getAppVersionCode()
    {
        return $this->appVersionCode;
    }

    /**
     * @param array $appVersionCode
     */
    public function setAppVersionCode($appVersionCode)
    {
        $this->appVersionCode = $appVersionCode;
    } //array( ResponseData )



}
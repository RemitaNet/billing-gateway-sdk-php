<?php

class ConfigCredentials
{
    public static  string $emptyCredentialsResponseCode;
    public static  string $emptyCredentialsMessage;
    public static string $credentialStatus = 'fail';



    function __construct($credentials)
    {
        $this->credentials = $credentials;
    }


      function isCredential($credentials)
    {
        if ($credentials->getPublicKey() == null) {
            $emptyCredentialsMessage = "key not available";
            $emptyCredentialsResponseCode = "012";
            return false;

        } else if ($credentials->getSecretKey() == null) {
            $emptyCredentialsMessage = "key not available";
            $emptyCredentialsResponseCode = "013";
            return false;

        }
        return true;
    }

}

$obj = new ConfigCredentials();
$obj->isCredential();

<?php
include 'ApplicationUrl.php';

//include 'ConfigCredentials.php';


class BillerService
{
    private $credentials;

    private $transactionId;

    private $secretKey;


    function __construct($credentials)
    {
        $this->credentials = $credentials;
    }

    function getBillers($param)
    {
        if ($this->credentials->getEnvironment() == 'Live') {
            $publicKey = $this->credentials->publicKey;
            $requestId = $param->getRequestId();
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'requestId:' . $requestId
            );

            $url = ApplicationUrl::$liveUrlGetBillers;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $result = curl_exec($ch);
            curl_close($ch);
            $billerResponse = json_decode($result, BillersResponse::class);
        } else {
            $publicKey = $this->credentials->publicKey;
            $requestId = $param->getRequestId();
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'requestId:' . $requestId
            );

            $url = ApplicationUrl::$demoUrlGetBillers;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $result = curl_exec($ch);
            curl_close($ch);
            $billerResponse = json_decode($result, BillersResponse::class);
        }
        //echo json_encode($billerResponse['responseData']);
        return $billerResponse;
    }

    function getServices($param)
    {
        if ($this->credentials->getEnvironment() == 'Live') {
            $publicKey = $this->credentials->publicKey;
            $requestId = $param->getRequestId();
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'requestId:' . $requestId
            );

            $url = ApplicationUrl::$liveUrlGetServices . $param->getBillerId() . '/servicetypes';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $result = curl_exec($ch);
            echo($result);
            curl_close($ch);
            $serviceResponse = json_decode($result, ServiceResponse::class);
        } else {
            $publicKey = $this->credentials->publicKey;
            $requestId = $param->getRequestId();
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'requestId:' . $requestId
            );

            $url = ApplicationUrl::$demoUrlGetServices . $param->getBillerId() . '/servicetypes';
            echo($url);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $result = curl_exec($ch);
            curl_close($ch);
            $serviceResponse = json_decode($result, ServiceResponse::class);
        }
        // echo json_encode($serviceResponse['responseData']);
        return $serviceResponse;

    }

    function getCustomFields($param)
    {
        if ($this->credentials->getEnvironment() == 'Live') {
            $publicKey = $this->credentials->publicKey;
            $requestId = $param->getRequestId();
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'requestId:' . $requestId
            );

            $url = ApplicationUrl::$liveUrlGetCustomFields . $param->getBillId();
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $result = curl_exec($ch);
            curl_close($ch);
            $customFieldResponse = json_decode($result, CustomFieldsResponse::class);
            //echo json_encode($customFieldResponse['responseData']);
        } else {
            $publicKey = $this->credentials->publicKey;
            $requestId = $param->getRequestId();
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'requestId:' . $requestId
            );

            $url = ApplicationUrl::$demoUrlGetCustomFields . $param->getBillId();
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $result = curl_exec($ch);
            curl_close($ch);
            $customFieldResponse = json_decode($result, CustomFieldsResponse::class);
        }
        return $customFieldResponse;
    }


    function getPaymentStatus($param)
    {
        if ($this->credentials->getEnvironment() == 'Live') {
            $publicKey = $this->credentials->publicKey;
            $requestId = $param->getRequestId();
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'requestId:' . $requestId
            );

            $url = ApplicationUrl::$liveUrlPaymentStatus . $param->getTeansactionId();
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $result = curl_exec($ch);
            curl_close($ch);
            $paymentStatusResponse = json_decode($result, PaymentStatusResponse::class);
        } else {
            $publicKey = $this->credentials->publicKey;
            $requestId = $param->getRequestId();
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'requestId:' . $requestId
            );

            $url = ApplicationUrl::$demoUrlPaymentStatus . $param->getTeansactionId();
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $result = curl_exec($ch);
            curl_close($ch);
            $paymentStatusResponse = json_decode($result, PaymentStatusResponse::class);
        }
        // echo json_encode($paymentStatusResponse['responseData']);
        return $paymentStatusResponse;
    }


    function getRRRDetails($param)
    {
        if ($this->credentials->getEnvironment() == 'Live') {
            $publicKey = $this->credentials->publicKey;
            $requestId = $param->getRequestId();
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'requestId:' . $requestId
            );

            $url = ApplicationUrl::$liveUrlGetRRRDetails . $param->getRRR();
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $result = curl_exec($ch);
            curl_close($ch);
            $rrrDetailsResponse = json_decode($result, RRRDetailsResponse::class);
            //echo json_encode($rrrDetailsResponse['responseData']);
        } else {
            $publicKey = $this->credentials->publicKey;
            $requestId = $param->getRequestId();
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'requestId:' . $requestId
            );

            $url = ApplicationUrl::$demoUrlGetRRRDetails . $param->getRRR();
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $result = curl_exec($ch);
            curl_close($ch);
            $rrrDetailsResponse = json_decode($result, RRRDetailsResponse::class);
        }
        return $rrrDetailsResponse;
    }


    function generateRRR($payload)
    {
        if ($this->credentials->getEnvironment() == 'Live') {
            $customFields = array($payload->getCustomFields());
            $data = array(
                'customFields' => $customFields,
                'billId' => $payload->getBillId(),
                'amount' => $payload->getAmount(),
                'payerPhone' => $payload->getPayerPhone(),
                'currency' => $payload->getCurrency(),
                'payerEmail' => $payload->getPayerEmail(),
                'payerName' => $payload->getPayerName()

            );
            $publicKey = $this->credentials->publicKey;
            $transactionId = $this->credentials->transactionId;

            $requestId = $payload->getRequestId();
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'requestId:' . $requestId,
                'transactionId:' . $transactionId
            );
            $url = ApplicationUrl::$liveUrlGenerateRRR;
            $ch = curl_init();
            $repos_params_json = json_encode($data);
            echo $repos_params_json;
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $repos_params_json);
            $result = curl_exec($ch);
            curl_close($ch);
            $generateRRResponse = json_decode($result, GenerateRRRRespone::class);
        } else {
            $customFields = array($payload->getCustomFields());
            $data = array(
                'customFields' => $customFields,
                'billId' => $payload->getBillId(),
                'amount' => $payload->getAmount(),
                'payerPhone' => $payload->getPayerPhone(),
                'currency' => $payload->getCurrency(),
                'payerEmail' => $payload->getPayerEmail(),
                'payerName' => $payload->getPayerName()

            );
            $publicKey = $this->credentials->publicKey;
            $transactionId = $this->credentials->transactionId;
            $requestId = $payload->getRequestId();
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'requestId:' . $requestId,
                'transactionId:' . $transactionId
            );
            $url = ApplicationUrl::$demoUrlGenerateRRR;
            $ch = curl_init();
            $repos_params_json = json_encode($data);
            echo $repos_params_json;
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $repos_params_json);
            $result = curl_exec($ch);
            curl_close($ch);
            $generateRRResponse = json_decode($result, GenerateRRRRespone::class);
        }
        // echo("============================================");
        // echo json_encode($rrrDetailsResponse['responseData']);
        return $generateRRResponse;
    }

    function validateRRR($payload)
    {
        if ($this->credentials->getEnvironment() == 'Live') {
            $customFields = array($payload->getCustomFields());
            $data = array(
                'customFields' => $customFields,
                'billId' => $payload->getBillId(),
                'amount' => $payload->getAmount(),
                'payerPhone' => $payload->getPayerPhone(),
                'currency' => $payload->getCurrency(),
                'payerEmail' => $payload->getPayerEmail(),
                'payerName' => $payload->getPayerName()

            );
            $publicKey = $this->credentials->publicKey;
            $requestId = $payload->getRequestId();
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'requestId:' . $requestId
            );
            $url = ApplicationUrl::$liveUrlValidateRRR;
            $ch = curl_init();
            $repos_params_json = json_encode($data);
            //echo $repos_params_json;
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $repos_params_json);
            $result = curl_exec($ch);
            curl_close($ch);
            $validateRRRResponse = json_decode($result, ValidateRRRResponse::class);
        } else {
            $customFields = array($payload->getCustomFields());
            $data = array(
                'customFields' => $customFields,
                'billId' => $payload->getBillId(),
                'amount' => $payload->getAmount(),
                'payerPhone' => $payload->getPayerPhone(),
                'currency' => $payload->getCurrency(),
                'payerEmail' => $payload->getPayerEmail(),
                'payerName' => $payload->getPayerName()

            );
            $publicKey = $this->credentials->publicKey;
            $requestId = $payload->getRequestId();
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'requestId:' . $requestId
            );
            $url = ApplicationUrl::$demoUrlValidateRRR;
            $ch = curl_init();
            $repos_params_json = json_encode($data);
            //echo $repos_params_json;
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $repos_params_json);
            $result = curl_exec($ch);
            curl_close($ch);
            $validateRRRResponse = json_decode($result, ValidateRRRResponse::class);
        }
        // echo("============================================");
        // echo json_encode($rrrDetailsResponse['responseData']);
        return $validateRRRResponse;
    }


    function billPaymentNotification($payload)
    {
        if ($this->credentials->getEnvironment() == "Live") {
            $data = array(
                'rrr' => $payload->getRRR(),
                'incomeAccount' => $payload->getIncomeAccount(),
                'debittedAccount' => $payload->getDebittedAccount(),
                'paymentAuthCode' => $payload->getPaymentAuthCode(),
                'paymentChannel' => $payload->getPaymentChannel(),
                'tellerName' => $payload->getTellerName(),
                'branchCode' => $payload->getBranchCode(),
                'amountDebitted' => $payload->getAmountDebitted(),
                'fundingSource' => $payload->getFundingSource(),
                'hash' => $payload->getHash()
            );
            echo $this->credentials->getSecretKey();
            $api_hash = hash('sha512', $payload->getRRR() . $payload->getAmountDebitted() . $payload->getFundingSource() . $payload->getDebittedAccount() . $payload->getPaymentAuthCode() . $this->credentials->getSecretKey());
            $hash = $api_hash;
            $publicKey = $this->credentials->publicKey;
            $transactionId = $this->credentials->transactionId;
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'transactionId:' . $transactionId,
                'TXN_HASH:' . $hash
            );
            $url = ApplicationUrl::$liveUrlPaymentNotification;
            $ch = curl_init();
            $repos_params_json = json_encode($data);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $repos_params_json);
            $result = curl_exec($ch);
            curl_close($ch);
            $billNotificationResponse = json_decode($result, true);
        } else {
            $data = array(
                'rrr' => $payload->getRRR(),
                'incomeAccount' => $payload->getIncomeAccount(),
                'debittedAccount' => $payload->getDebittedAccount(),
                'paymentAuthCode' => $payload->getPaymentAuthCode(),
                'paymentChannel' => $payload->getPaymentChannel(),
                'tellerName' => $payload->getTellerName(),
                'branchCode' => $payload->getBranchCode(),
                'amountDebitted' => $payload->getAmountDebitted(),
                'fundingSource' => $payload->getFundingSource(),
                'hash' => $payload->getHash()
            );
            echo $this->credentials->getSecretKey();
            $api_hash = hash('sha512', $payload->getRRR() . $payload->getAmountDebitted() . $payload->getFundingSource() . $payload->getDebittedAccount() . $payload->getPaymentAuthCode() . $this->credentials->getSecretKey());
            // echo $api_hash;
            $hash = $api_hash;
            $publicKey = $this->credentials->publicKey;
            $transactionId = $this->credentials->transactionId;
            $header = array(
                'Content-Type: application/json',
                'publicKey:' . $publicKey,
                'transactionId:' . $transactionId,
                'TXN_HASH:' . $hash
            );
            $url = ApplicationUrl::$demoUrlPaymentNotification;
            $ch = curl_init();
            $repos_params_json = json_encode($data);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $repos_params_json);
            $result = curl_exec($ch);
            curl_close($ch);
            $billNotificationResponse = json_decode($result, true);

        }
        //echo("============================================");
        //echo json_encode($billNotificationResponse['responseData']);
        return $billNotificationResponse;
    }


}

//$obj = new BillerService(Credentials::class);
//$obj->getBillers();
//$obj->getServices();
//$obj->getCustomFields();
//$obj->getRRRDetails();

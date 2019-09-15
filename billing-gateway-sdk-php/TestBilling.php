<?php


include("C:/Users/TAJUDEEN/PhpstormProjects/billing-gateway-sdk-php/Config/BillerService.php");
include("C:/Users/TAJUDEEN/PhpstormProjects/billing-gateway-sdk-php/Config/Credentials.php");
include("C:/Users/TAJUDEEN/PhpstormProjects/billing-gateway-sdk-php/GenerateRRRObjects/Values.php");
include("C:/Users/TAJUDEEN/PhpstormProjects/billing-gateway-sdk-php/GenerateRRRObjects/CustomFields.php");
include("C:/Users/TAJUDEEN/PhpstormProjects/billing-gateway-sdk-php/GenerateRRRObjects/GenerateRRRRequest.php");
include("C:/Users/TAJUDEEN/PhpstormProjects/billing-gateway-sdk-php/Config/ServiceParam.php");
include("C:/Users/TAJUDEEN/PhpstormProjects/billing-gateway-sdk-php/ValidateRRRObjects/ValidateRRRRequest.php");
include("C:/Users/TAJUDEEN/PhpstormProjects/billing-gateway-sdk-php/BillPaymentNotificationObjects/BillPaymentNotificationRequest.php");




class TestBilling
{

    function call_getBillers(){
        $credentials = new Credentials();
        $credentials->publicKey = "dC5vbW9udWJpQGdtYWlsLmNvbXxiM2RjMDhjZDRlZTc5ZDIxZDQwMjdjOWM3MmI5ZWY0ZDA3MTk2YTRkNGRkMjY3NjNkMGZkYzA4MjM1MzI4OWFhODE5OGM4MjM0NTI2YWI2ZjZkYzNhZmQzNDNkZmIzYmUwNTkxODlmMmNkOTkxNmM5MjVhNjYwZjk0ZTk1OTkwNw==";
        $billers = new BillerService($credentials);
        $param =new ServiceParam();
        $param->setRequestId(rand());
        $get_billers = $billers->getBillers($param);
        //var_dump($get_billers);
      // echo $get_billers->responseCode['responseCode'];
        echo json_encode($get_billers);

    }



    function call_getRRRDetails(){
        $credentials = new Credentials();
        $credentials->publicKey = "dC5vbW9udWJpQGdtYWlsLmNvbXxiM2RjMDhjZDRlZTc5ZDIxZDQwMjdjOWM3MmI5ZWY0ZDA3MTk2YTRkNGRkMjY3NjNkMGZkYzA4MjM1MzI4OWFhODE5OGM4MjM0NTI2YWI2ZjZkYzNhZmQzNDNkZmIzYmUwNTkxODlmMmNkOTkxNmM5MjVhNjYwZjk0ZTk1OTkwNw==";
        $billers = new BillerService($credentials);
        $param =new ServiceParam();
        $param->setRequestId(rand());
        $param->setRRR("340007740378");
        $get_billers = $billers->getRRRDetails($param);
        //var_dump($get_billers);
        // echo $get_billers->responseCode['responseCode'];
        echo json_encode($get_billers);

    }


    function call_getCustomFields(){
        $credentials = new Credentials();
        $credentials->publicKey = "TU9KRUN8NDA5NzY2NzF8MGFiZGMwNTIyNzU1NDdkYTgxMDkxYjNlY2Y0MTAzNjc0NWI5NzQwYzFhNTU3MGY1YzViMmE0YmFkZjQwMTljZDZkYTZlNGEyZjAzMDk4YjQyZDA4NGUzMTY5ZDk4MzUwZTI0ZThmZDg0ZTc2YWY5YWI5MTBhM2Q0MGQxNmFlN2Y==";
        $services = new BillerService($credentials);
        $param =new ServiceParam();
        $param->setBillId("41958627");
        $get_services = $services->getCustomFields($param);
        //var_dump($get_billers);
        // echo $get_billers->responseCode['responseCode'];
        echo json_encode($get_services);
    }

    function call_getServices(){
        $credentials = new Credentials();
       $credentials->publicKey = "TU9KRUN8NDA5NzY2NzF8MGFiZGMwNTIyNzU1NDdkYTgxMDkxYjNlY2Y0MTAzNjc0NWI5NzQwYzFhNTU3MGY1YzViMmE0YmFkZjQwMTljZDZkYTZlNGEyZjAzMDk4YjQyZDA4NGUzMTY5ZDk4MzUwZTI0ZThmZDg0ZTc2YWY5YWI5MTBhM2Q0MGQxNmFlN2Y==";
        $services = new BillerService($credentials);
        $param =new ServiceParam();
        $param->setBillerId("DEMOMDA");
        $param->setRequestId(rand());
        $get_services = $services->getServices($param);
        //var_dump($get_billers);
        // echo $get_billers->responseCode['responseCode'];
        echo json_encode($get_services);
    }




    function call_getPaymentStatus(){
        $credentials = new Credentials();
        $credentials->publicKey = "TU9KRUN8NDA5NzY2NzF8MGFiZGMwNTIyNzU1NDdkYTgxMDkxYjNlY2Y0MTAzNjc0NWI5NzQwYzFhNTU3MGY1YzViMmE0YmFkZjQwMTljZDZkYTZlNGEyZjAzMDk4YjQyZDA4NGUzMTY5ZDk4MzUwZTI0ZThmZDg0ZTc2YWY5YWI5MTBhM2Q0MGQxNmFlN2Y==";
        $services = new BillerService($credentials);
        $param =new ServiceParam();
        $param->setTranactionId(rand());
        $get_services = $services->getPaymentStatus($param);
        //var_dump($get_billers);
        // echo $get_billers->responseCode['responseCode'];
        echo json_encode($get_services);
    }


    function call_generateRRR(){
        $credentials = new Credentials();
        $credentials-> transactionId = "64798347";
        $credentials->publicKey = "dC5vbW9udWJpQGdtYWlsLmNvbXxiM2RjMDhjZDRlZTc5ZDIxZDQwMjdjOWM3MmI5ZWY0ZDA3MTk2YTRkNGRkMjY3NjNkMGZkYzA4MjM1MzI4OWFhODE5OGM4MjM0NTI2YWI2ZjZkYzNhZmQzNDNkZmIzYmUwNTkxODlmMmNkOTkxNmM5MjVhNjYwZjk0ZTk1OTkwNw==";
        $services = new BillerService($credentials);
        $customField = new CustomFields();
        $customField->setId("41958626");
        $payload = new GenerateRRRRequest();
        $payload->setCurrency("NGN");
        $payload->setBillId("41958627");
        $payload->setAmount(100);
        $payload->setPayerPhone("08085519759");
        $payload->setPayerEmail("t.omonubi@gmail.com");
        $payload->setPayerName("Tokunbo Omonubi");
        $value = new Values();
        $value->setAmount(100);
        $value->setQuantity(0);
        $value->setValue("45236RGGH985263");
        $value1 = new Values();
        $value1->setAmount(200);
        $value1->setQuantity(0);
        $value1->setValue("17171717");
        $value2 = new Values();
        $value2->setAmount(800);
        $value2->setQuantity(100);
        $value2->setValue("57744");
        $value3 = new Values();
        $value3->setAmount(266);
        $value3->setQuantity(50);
        $value3->setValue("100098");
        $customField->setValues(array($value, $value1, $value2));
        $payload->setCustomFields($customField);
        $get_services = $services->generateRRR($payload);
       // var_dump($get_services);
      //  echo $get_services->responseCode['responseCode'];
        //echo json_encode($get_services['responseData']);
        echo json_encode($get_services);


        // echo json_encode($get_services);

    }


    function call_validateRRR()
    {
        $credentials = new Credentials();
        $credentials->publicKey = "dC5vbW9udWJpQGdtYWlsLmNvbXxiM2RjMDhjZDRlZTc5ZDIxZDQwMjdjOWM3MmI5ZWY0ZDA3MTk2YTRkNGRkMjY3NjNkMGZkYzA4MjM1MzI4OWFhODE5OGM4MjM0NTI2YWI2ZjZkYzNhZmQzNDNkZmIzYmUwNTkxODlmMmNkOTkxNmM5MjVhNjYwZjk0ZTk1OTkwNw==";
        $services = new BillerService($credentials);
        $customField = new CustomFields();
        $customField->setId("41958626");
        $payload = new ValidateRRRRequest();
        $payload->setRequestId(rand());
        $payload->setCurrency("NGN");
        $payload->setBillId("41958627");
        $payload->setAmount(100);
        $payload->setPayerPhone("08085519759");
        $payload->setPayerEmail("t.omonubi@gmail.com");
        $payload->setPayerName("Tokunbo Omonubi");
        $value = new Values();
        $value->setAmount(100);
        $value->setQuantity(0);
        $value->setValue("45236RGGH985263");
        $value1 = new Values();
        $value1->setAmount(200);
        $value1->setQuantity(0);
        $value1->setValue("17171717");
        $value2 = new Values();
        $value2->setAmount(800);
        $value2->setQuantity(100);
        $value2->setValue("57744");
        $value3 = new Values();
        $value3->setAmount(266);
        $value3->setQuantity(50);
        $value3->setValue("100098");
        $customField->setValues(array($value, $value1, $value2));
        $payload->setCustomFields($customField);
        $get_services = $services->validateRRR($payload);
        // var_dump($get_services);
        //  echo $get_services->responseCode['responseCode'];
        //echo json_encode($get_services['responseData']);
        echo json_encode($get_services);


        // echo json_encode($get_services);

    }


    function call_paymentNotification()
    {
        $credentials = new Credentials();
        $credentials->environment="Live";
        $credentials->hash="cd6b57977b033fda4018b29574e62af3603ce01e403794008d7a6a15a74d795a535784fa01e3bac99b2c99cb4d56cb18f83795a5583d87cc2ca0f34023271bfb";
        $credentials->secretKey = "95ab7ab7b2dc3152e3ab776c8f4bbe0ec5fe87526ee129617f319fb9edf79263a6fd15f1efe78f38ad6f04634dff993ccf9f075bf91f37aa52b61a9bd61c881e";
        $credentials->publicKey = "dC5vbW9udWJpQGdtYWlsLmNvbXxiM2RjMDhjZDRlZTc5ZDIxZDQwMjdjOWM3MmI5ZWY0ZDA3MTk2YTRkNGRkMjY3NjNkMGZkYzA4MjM1MzI4OWFhODE5OGM4MjM0NTI2YWI2ZjZkYzNhZmQzNDNkZmIzYmUwNTkxODlmMmNkOTkxNmM5MjVhNjYwZjk0ZTk1OTkwNw==";
        $services = new BillerService($credentials);
        $payload = new BillPaymentNotificationRequest();
        $payload->setRrr("240007763614");
        $payload->setAmountDebitted(200000);
        $payload->setFundingSource("TOKS");
        $payload->setDebittedAccount("2044863290");
        $payload->setPaymentAuthCode("546789096543545678990");
        $payload->setIncomeAccount("0001061499");
        $payload->setPaymentChannel("INTERNETBANKING");
        $payload->setTellerName("INTERNETBANKING");
        $payload->setBranchCode("EMPTY");
        $get_services = $services->billPaymentNotification($payload);
        // var_dump($get_services);
        //  echo $get_services->responseCode['responseCode'];
        //echo json_encode($get_services['responseData']);
        echo json_encode($get_services);


        // echo json_encode($get_services);

    }



}


$test_class = new TestBilling();
//$test_class->call_getBillers();
//$test_class->call_getServices();
//$test_class->call_generateRRR();
//$test_class->call_validateRRR();
//$test_class->call_paymentNotification();
//$test_class->call_getCustomFields();
$test_class->call_getRRRDetails();


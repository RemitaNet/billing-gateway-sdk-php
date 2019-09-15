# REMITA BILLER PHP SDK
PHP SDK for Remita Billing Gateway Service simple APIs

## Package 
To install the `billing-gateway-sdk-php` package, run the following command.

```
 composer require billing-gateway-sdk-php
```
## Requirements
*  PHP 7.2.18 or later

## Overview
Integrating to Remita for Biller payments SDK enables your customers make payments to billers on Remita through your platform. This provides you with the capability to offer your customers access to the vast array of billers and merchants, including schools, churches, service providers and the Federal Government ministries, departments and agencies (MDAs) available on Remita to purchase and subscribe to their various products and services.

The process involves your customers selecting a biller to pay via your platform. They will supply payment details and confirm the details so you can debit their account with AmountDue to credit a designated Funds Holding Account. Your customers will be emailed Remita receipts (which are FGN MDA-recognized for TSA-bound payments) for each transaction.

## Prerequisites
Prior to using the SDK, you need to set up an integration profile on [Remita](https://login.remita.net) if you are not already registered as a merchant/biller on the platform. Each method call will require you to pass the Public key/Secret key. Your public and secret keys are located at the Billing page on your profile. After you login, click ‘Setup Billing’ at your dashboard >> click ‘Proceed’ on the ‘Yes’ option for the integration question that comes up >> to display the Public/Secret key.

## Configuration
All biller credentials needed to use the SDK are being setup by instantiating the Credential Class and set properties in this class accordingly.
Properties such as public_key, secret_key, and environment are mandatory.
_Note:_ Environment can either be DEMO (DEMO) or LIVE (Live), each of this environment has it respective Credential. Ensure you set the 
right credentials. By default Environment is DEMO


## Responses
Every successful method call returns 4 attributes 

| Name  		| Data Type     | 
| --------------| --------------| 
| responseCode  | String 		|
| responseMsg   | String 		|  
| appVersionCode| String 		| 
| responseData  | List			|


## Methods
#### Get Bller(s) To Your Profile
This returns a list of the billers, merchants and MDAs available on Remita.

	
 ```php

      function call_getBillers(){
        $credentials = new Credentials();
        $credentials->publicKey = "dC5vbW9udWJpQGdtYWlsLmNvbXxiM2RjMDhjZDRlZTc5ZDIxZDQwMjdjOWM3MmI5ZWY0ZDA3MTk2YTRkNGRkMjY3NjNkMGZkYzA4MjM1MzI4OWFhODE5OGM4MjM0NTI2YWI2ZjZkYzNhZmQzNDNkZmIzYmUwNTkxODlmMmNkOTkxNmM5MjVhNjYwZjk0ZTk1OTkwNw==";
        $billers = new BillerService($credentials);
        $param =new ServiceParam();
        $param->setRequestId(rand());
        $get_billers = $billers->getBillers($param);
        echo json_encode($get_billers);
     }

 ```

#### Get Service Types
This returns a list of products and services associated with specified billers on Remita.

* The first step is to supply your credential which is the publicKey,    required to view the list of services;
	1. billerId: this is a paramerter that must be passed to get the list of services.
	2. requestId: This uniquely identifies the request

 ```php


     function call_getServices(){
        $credentials = new Credentials();
       $credentials->publicKey = "TU9KRUN8NDA5NzY2NzF8MGFiZGMwNTIyNzU1NDdkYTgxMDkxYjNlY2Y0MTAzNjc0NWI5NzQwYzFhNTU3MGY1YzViMmE0YmFkZjQwMTljZDZkYTZlNGEyZjAzMDk4YjQyZDA4NGUzMTY5ZDk4MzUwZTI0ZThmZDg0ZTc2YWY5YWI5MTBhM2Q0MGQxNmFlN2Y==";
        $services = new BillerService($credentials);
        $param =new ServiceParam();
        $param->setBillerId("DEMOMDA");
        $param->setRequestId(rand());
        $get_services = $services->getServices($param);
        echo json_encode($get_services);
    }


 ```

#### Get Custom Fields
Custom fields are additional information specific to a service/product offered for sale by a biller. A service/product may or may not have custom fields defined. This method returns a list of the custom fields associated with a specific product/service offered by a biller on the platform.

* The first step is to supply your credential which is the publicKey,    required to get the custom fields;
	1. billId: this is a paramerter that must be passed to get the customFields.
	2. requestId: This uniquely identifies the request


 ```php


     function call_getCustomFields(){
        $credentials = new Credentials();
        $credentials->publicKey = "TU9KRUN8NDA5NzY2NzF8MGFiZGMwNTIyNzU1NDdkYTgxMDkxYjNlY2Y0MTAzNjc0NWI5NzQwYzFhNTU3MGY1YzViMmE0YmFkZjQwMTljZDZkYTZlNGEyZjAzMDk4YjQyZDA4NGUzMTY5ZDk4MzUwZTI0ZThmZDg0ZTc2YWY5YWI5MTBhM2Q0MGQxNmFlN2Y==";
        $services = new BillerService($credentials);
        $param =new ServiceParam();
        $param->setBillId("41958627");
        $get_services = $services->getCustomFields($param);
        echo json_encode($get_services);
    }
 ```

#### Generate RRR
In order to complete the transaction through the Remita Payment Gateway, a Remita Retrieval Reference or RRR is required. This is what uniquely identifies and embodies the payment details of a transaction on the platform ecosystem. Calling this method will generate an RRR for the biller payment.

* The first step is to supply your credential which is the publicKey,    required to generate rrr;
    1. transactionId: This uniquely identifies the transaction id to generate rrr
	2. requestId: This uniquely identifies the request

 ```php

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
        echo json_encode($get_services);

    }


 ```

#### Validate Request
You need to make a request for Remita to execute a validation operation on the details retrieved to check the validity of the data. This serves to ensure that the details being passed for payment are viable and will derive an amount payable to generate a Remita Retrieval Reference (RRR) successfully. This method enables you make this call towards generating an RRR for payment.

* The first step is to supply your credential which is the publicKey,    required to validate rrr;
	1. requestId: This uniquely identifies the request

 ```php

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
        echo json_encode($get_services);

    }

 ```


#### Get RRR Details
If your customer already has a Remita Retrieval Reference (RRR) before logging on to your online platform, he/she can also still process payment to Remita billers. They can supply the RRR, verify the RRR to display payment details associated with it before completing the payment. This method makes the call to verify the RRR.

* The first step is to supply your credential which is the publicKey,    required to get the custom fields;
	1. rrr: this is a paramerter that must be passed to get the rrr details.
	2. requestId: This uniquely identifies the request

 ```php


     function call_getRRRDetails(){
        $credentials = new Credentials();
        $credentials->publicKey = "dC5vbW9udWJpQGdtYWlsLmNvbXxiM2RjMDhjZDRlZTc5ZDIxZDQwMjdjOWM3MmI5ZWY0ZDA3MTk2YTRkNGRkMjY3NjNkMGZkYzA4MjM1MzI4OWFhODE5OGM4MjM0NTI2YWI2ZjZkYzNhZmQzNDNkZmIzYmUwNTkxODlmMmNkOTkxNmM5MjVhNjYwZjk0ZTk1OTkwNw==";
        $billers = new BillerService($credentials);
        $param =new ServiceParam();
        $param->setRequestId(rand());
        $param->setRRR("340007740378");
        $get_billers = $billers->getRRRDetails($param);
        echo json_encode($get_billers);

    }
 ```



#### Bill Payment Notification
After you have debit the customer with the RRR amount (amountDue) to process the payment, you are required to notify Remita with details of the transaction. Calling this method will send a payment notification for the transaction to Remita accordingly. 

* The first step is to supply your credential which is the publicKey and the secretKey, required to get the payment notification;
    1. transactionId: This uniquely identifies the transaction id to generate rrr
	2. requestId: This uniquely identifies the request
	3. hash: these are hash values using sha512 with the fields provided (rrr + amountDebitted + fundingSource + debittedAccount + paymentAuthCode + secretKey) 


```php

    function call_paymentNotification()
    {
        $credentials = new Credentials();
        $credentials->transactionId"64798347"
        $credentials->environment="DEMO";
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
        echo json_encode($get_services);


    }


```
#### Transaction Status
You may need to enquire that status of biller payments your customers have made via the Bill Payment Notification API.

* The first step is to supply your credential which is the publicKey,    required to get the paymentStatus;
    1. transactionId: This uniquely identifies the transaction id to get the payment status.
	2. requestId: This uniquely identifies the request. 


```php

     function call_getPaymentStatus(){
        $credentials = new Credentials();
        $credentials->publicKey = "TU9KRUN8NDA5NzY2NzF8MGFiZGMwNTIyNzU1NDdkYTgxMDkxYjNlY2Y0MTAzNjc0NWI5NzQwYzFhNTU3MGY1YzViMmE0YmFkZjQwMTljZDZkYTZlNGEyZjAzMDk4YjQyZDA4NGUzMTY5ZDk4MzUwZTI0ZThmZDg0ZTc2YWY5YWI5MTBhM2Q0MGQxNmFlN2Y==";
        $services = new BillerService($credentials);
        $param =new ServiceParam();
        $param->setTranactionId("64798347");
        $get_services = $services->getPaymentStatus($param);
        echo json_encode($get_services);
    }

```
---
    
## Support
- For all other support needs, support@remita.net

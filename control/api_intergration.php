<?php
define('MPESA_CONSUMER_KEY', 'your_consumer_key');
define('MPESA_CONSUMER_SECRET', 'your_consumer_secret');

$amount = $_POST['amount'];
$paymentMethod = $_POST['payment_method'];

// Create an Mpesa payment request
$mpesaRequest = array(
    'amount' => $amount,
    'phone_number' => $_POST['phone_number'],
    'reference' => 'Payment for ' . $borrowerName,
);

// Use the Mpesa API to process the payment
$mpesaResponse = mpesa_process_payment($mpesaRequest);

function mpesa_process_payment($request)
{
    // Set API credentials
    $consumer_key = 'your_consumer_key';
    $consumer_secret = 'your_consumer_secret';
    $api_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

    // Generate access token
    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Basic ' . base64_encode($consumer_key . ':' . $consumer_secret)
    ));
    $response = curl_exec($ch);
    curl_close($ch);
    $access_token = json_decode($response, true)['access_token'];

    // Set payment request parameters
    $payment_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    $payment_request = array(
        'BusinessShortCode' => 'your_business_short_code',
        'Password' => 'your_password',
        'Timestamp' => date('YmdHis'),
        'TransactionType' => 'CustomerPayBillOnline',
        'Amount' => $request['amount'],
        'PartyA' => $request['phone_number'],
        'PartyB' => 'your_business_short_code',
        'PhoneNumber' => $request['phone_number'],
        'CallBackURL' => 'https://example.com/mpesa_callback.php',
        'AccountReference' => 'Payment for ' . $request['reference'],
        'TransactionDesc' => 'Payment for ' . $request['reference']
    );

    // Process payment request
    $ch = curl_init($payment_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer ' . $access_token,
        'Content-Type: application/json'
    ));
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payment_request));
    $response = curl_exec($ch);
    curl_close($ch);

    // Handle payment response
    $response = json_decode($response, true);
    if ($response['ResponseCode'] == '0') {
        return array('status' => 'success', 'message' => 'Payment processed successfully');
    } else {
        return array('status' => 'error', 'message' => 'Payment failed');
    }
}

// Handle the payment response
if ($mpesaResponse['status'] == 'success') {
    echo "Payment of $amount received from $borrowerName using Mpesa.";
} else {
    echo "Payment failed. Please try again.";
}

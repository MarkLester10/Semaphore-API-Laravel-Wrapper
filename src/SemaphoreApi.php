<?php

namespace MarkLesterMorta\Semaphore;

use GuzzleHttp\Client;

class SemaphoreApi
{

    public static function send($receiverNumber, $message)
    {
        $ch = curl_init();
        $parameters = array(
            'apikey' => config('semaphore.SEMAPHORE_API_KEY'), //Your API KEY
            'number' => $receiverNumber,
            'message' => $message,
            'sendername' => config('semaphore.SEMAPHORE_SENDER_NAME')
        );
        curl_setopt($ch, CURLOPT_URL, 'https://semaphore.co/api/v4/messages');
        curl_setopt($ch, CURLOPT_POST, 1);

        //Send the parameters set above with the request
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));

        // Receive response from server
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);

        //Show the server response
        return $output;
    }
}
<?php
return array(
    // set your paypal credential
    'client_id' => 'AU2Bg0ASMfrnTul3dYxyAJLlyLnNQ6CB250Sny2C4Sg5MLRyZ6o6HwOYweEXZnsk9hUMW_JOFU4gyyAN',
    'secret' => 'EF_-fXe4_u2_DNoKqyPYYYMzlm39jOLP3h55v08-debMZDfINafqV-T5qJyqAi1t3hs02bhRpqIfMzWg',

    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
<?php

namespace JK\Midtrans\Classes;

// use Veritrans_Config;
// use Veritrans_Snap;
use JK\Midtrans\Models\Settings;

class MidtransConfig
{

    public static function getSnapToken($transaction)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = Settings::get('server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $snapToken = \Midtrans\Snap::getSnapToken($transaction);
        return $snapToken;
    }
}

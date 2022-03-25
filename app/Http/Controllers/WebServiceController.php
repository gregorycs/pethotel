<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class WebServiceController extends Controller
{
    public static $token;

    public static function generateToken()
    {
        $response = Http::withBasicAuth('SEGUROS', 'pruebas2021*')
                    ->post(Config::get('api.generateToken'), [
                        'grant_type' => 'client_credentials'
                    ]);
        $dataToken = $response->json();

        self::$token = isset($dataToken['codigo']) && $dataToken['codigo'] == '200' ? $dataToken['token'] : false;
    }

    public static function getDataCustomer(string $document)
    {
        $response = $response = Http::withToken(self::$token)
                                ->post(Config::get('api.getDataCostumer'), [
                                    'document' => $document
                                ]);
        $dataCustomer = $response->json();

        return isset($dataCustomer['codigo']) && $dataCustomer['codigo'] == '200' ? $dataCustomer['mensaje'] : false;
    }
}

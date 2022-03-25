<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public static function getDataCustomerExternal(string $document)
    {
        WebServiceController::generateToken();

        return WebServiceController::getDataCustomer($document);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Jobs\SendEmail;
use App\Models\Customer;
use App\Models\Sex;
use App\Models\TypePet;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * 
     */
    public function create()
    {
        $sexes = Sex::all();
        $type_pets = TypePet::all();

        return view('reservation.index', compact('sexes', 'type_pets'));
    }

    /**
     * Save form reservation
     */
    public function store(StorePostRequest $request)
    {
        $customer = Customer::where('document', $request->all()['customer']['document'])->first();
        
        (is_null($customer)) && $customer = Customer::create($request->all()['customer']);        
        
        $customer->pets()->create($request->all()['pet']);
        $customer->reservationForms()->create($request->all()['reservation']);

        isset($request->all()['send_email']) && $this->sendEmail($customer);

        return redirect()->route('success-save');
    }

    /**
     * Obtains data from an external customer
     */
    public function getDataCustomer(Request $request)
    {
        $dataCustomer = CustomerController::getDataCustomerExternal($request->document);

        return $dataCustomer ? 
                response()->json(array_merge(['valid' => true], $dataCustomer)) : 
                response()->json(['valid' => false]);
    }

    /**
     * Send email in queue
     */
    public function sendEmail(Customer $customer)
    {
        $nameCustomer = "$customer->first_name $customer->last_name";
        SendEmail::dispatch($nameCustomer, $customer->pets()->get()->last()->name, $customer->reservationForms()->get()->last()->entry_date,
                            $customer->reservationForms()->get()->last()->release_date,
                            $customer->reservationForms()->get()->last()->movility, $customer->email);
    }
}

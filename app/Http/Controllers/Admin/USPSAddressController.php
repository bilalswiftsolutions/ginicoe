<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class USPSAddressController extends Controller
{

    public function validateAddress(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://secure.shippingapis.com/ShippingAPI.dll', [
            'query' => [
                'API' => 'Verify',
                'XML' => '<AddressValidateRequest USERID="YOUR_USER_ID"><Address ID="0"><Address1>' . $request->address_line_1 . '</Address1><Address2>' . $request->address_line_2 . '</Address2><City>' . $request->city . '</City><State>' . $request->state . '</State><Zip5>' . $request->zip_code . '</Zip5><Zip4></Zip4></Address></AddressValidateRequest>',
            ],
        ]);

        $xml = simplexml_load_string($response->getBody()->getContents());
        $result = json_decode(json_encode((array)$xml), TRUE);

        // Return the validated address as JSON
        return response()->json($result);
    }
}

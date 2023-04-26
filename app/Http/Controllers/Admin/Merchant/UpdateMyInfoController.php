<?php

namespace App\Http\Controllers\Admin\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Admin\Merchant\Merchant;
use Illuminate\Http\Request;

class UpdateMyInfoController extends Controller
{

    public function index()
    {
        $merchant = Merchant::where('merchant_id',session('id'))->first();
        return view('admin.merchant.index',compact('merchant'));
    }

    public function store(Request $request)
    {
      
        foreach ($request->all() as $key => $value) {
            // Check if the value is "on" or "off" and modify it
            if ($value === 'on') {
                $request[$key] = 1;
            } elseif ($value === 'off') {
                $request[$key] = 0;
            }
        }
        Merchant::updateOrCreate(
            ['merchant_id' => session('id')],
            $request->only(
                'business_legal_name',
                'business_dba_name',
                'business_legal_address',
                'state_legal',
                'city_legal',
                'zip_legal',
                'business_physical_address',
                'zip_physical',
                'state_physical',
                'city_physical',
                'first_name',
                'mi',
                'last_name',
                'telephone_number',
                'toll_free_number',
                'fax_number',
                'mobile_phone',
                'email_address',
                'federal_tax_id',
                'owner_partner',
                'ownership_first_name',
                'ownership_mi',
                'ownership_last_name',
                'ownership_ssn',
                'ownership_title',
                'ownership_telephone',
                'ownership_percentage',
                'ownership_dob',
                'ownership_home_address',
                'ownership_state',
                'ownership_city',
                'ownership_zip',
                'business_structure',
                'home_based_business',
                'num_employees',
                'sales_per_month',
                'tier1_merchant',
                'tier2_merchant',
                'tier3_merchant',
                'tier4_merchant_no',
                'bank_name',
                'bank_account_manager_fn',
                'bank_account_manager_ln',
                'bank_account_manager_address',
                'bank_account_manager_state',
                'bank_account_manager_city',
                'bank_account_manager_zipcode',
                'bank_account_manager_telephone_number',
                'bank_account_manager_email',
                'ein_number',
                'primary_line_of_business',
                'merchant_duns_number',
                'pos_estimated_number',
                'pos_manufacturer',
                'when',
                'use_pos',
                'third_party_vendor',
                'third_party_name',
                'third_party_version',
                'transactions_third_party',
                'third_party_name_transactions',
                'cardholder_data',
                'card_data_store_merchant',
                'card_data_store_third_party_only',
                'card_data_store_both',
                'pci_dss_compliant',
                'qsa_name',
                'compliance_date',
                'last_scan_date',
                'help_description'
            )
        );

        return back()->with('success','Your Information saved successfully');
    }
}

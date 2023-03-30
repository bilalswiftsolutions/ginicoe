<?php

namespace App\Models\Admin;

use App\Mail\Send2FAMail;
use App\Models\Admin\Consumer\AttestationInformation;
use App\Models\Admin\Consumer\ChargeCardInformation;
use App\Models\Admin\Consumer\DistinguishIdentifierInformation;
use App\Models\Admin\Consumer\EmploymentInformation;
use App\Models\Admin\Consumer\EthnicityInformation;
use App\Models\Admin\Consumer\FacialImageUpload;
use App\Models\Admin\Consumer\FamilyAndMedicalHistoryInformation;
use App\Models\Admin\Consumer\FindMeHere;
use App\Models\Admin\Consumer\GenderIdentityInformation;
use App\Models\Admin\Consumer\HairInformation;
use App\Models\Admin\Consumer\HeadAndFaceInformation;
use App\Models\Admin\Consumer\MedicalInformation;
use App\Models\Admin\Consumer\MyNeighborhoodInformation;
use App\Models\Admin\Consumer\MyPidegreeInformation;
use App\Models\Admin\Consumer\TravelInformation;
use App\Models\Admin\Consumer\TwinIdentifierInformation;
use App\Models\OldPassword;
use App\Models\AdminCode;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Mail;
use App\Models\Admin\Role;


class Admin extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'token',
        'photo',
        'role_id',
        'phone'
    ];
    public function oldPassword()
    {
        return $this->hasMany(OldPassword::class, 'admin_id')->orderBy('id', 'desc')->limit(4);
    }

    public function role()
    {
        return $this->hasOne(Role::class,'id','role_id');
    }

    public function generateCode()
    {
        $code = rand(1000, 9999);

        AdminCode::updateOrCreate(
            ['admin_id' => session('id')],
            ['code' => $code]
        );

        $receiverNumber = session('phone');
        $message = "Your Ginicoe Verification Code is: " . $code;

        try {
            try {
                Mail::to(session('email'))->send(new Send2FAMail('2FA Code from Ginicoe', $message));
            } catch (Exception $e) {
            }

            if (!empty($receiverNumber)) {
              
                $account_sid = getenv("TWILIO_SID");
                $auth_token = getenv("TWILIO_TOKEN");
                $twilio_number = getenv("TWILIO_FROM");

                $client = new Client($account_sid, $auth_token);
                $client->messages->create($receiverNumber, [
                    'from' => $twilio_number,
                    'body' => $message
                ]);
            }
        } catch (Exception $e) {
           
            info("Error: " . $e->getMessage());
        }
    }

    public function my_pidegree_info()
    {
        return $this->hasOne(MyPidegreeInformation::class,'consumer_id');
    }

    public function find_me_here()
    {
        return $this->hasOne(FindMeHere::class,'consumer_id');
    }

    public function gender_identity_info()
    {
        return $this->hasOne(GenderIdentityInformation::class,'consumer_id');
    }
    public function ethnicity_info()
    {
        return $this->hasOne(EthnicityInformation::class,'consumer_id');
    }

    public function my_neighborhood_info()
    {
        return $this->hasOne(MyNeighborhoodInformation::class,'consumer_id');
    }

    public function employment_info()
    {
        return $this->hasOne(EmploymentInformation::class,'consumer_id');
    }

    public function charge_card_info()
    {
        return $this->hasOne(ChargeCardInformation::class,'consumer_id');
    }

    public function head_and_face_info()
    {
        return $this->hasOne(HeadAndFaceInformation::class,'consumer_id');
    }
    public function hair_info()
    {
        return $this->hasOne(HairInformation::class,'consumer_id');
    }

    public function distinguish_identifier_info()
    {
        return $this->hasOne(DistinguishIdentifierInformation::class,'consumer_id');
    }

    public function twin_identifier_info()
    {
        return $this->hasOne(TwinIdentifierInformation::class,'consumer_id');
    }

    public function medical_info()
    {
        return $this->hasOne(MedicalInformation::class,'consumer_id');
    }

    public function family_and_medical_info()
    {
        return $this->hasOne(FamilyAndMedicalHistoryInformation::class,'consumer_id');
    }

    
    public function travel_info()
    {
        return $this->hasOne(TravelInformation::class,'consumer_id');
    }


    public function attestation_info()
    {
        return $this->hasOne(AttestationInformation::class,'consumer_id');
    }

    public function this_is_me_return_back_data()
    {
        return $this->hasOne(FieldsetReturnBackData::class,'admin_id')->where('module','consumer_this_is_me');
    }

    public function facial_image()
    {
        return $this->hasOne(FacialImageUpload::class,'consumer_id');
    }
}

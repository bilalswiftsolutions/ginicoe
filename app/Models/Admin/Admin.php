<?php

namespace App\Models\Admin;

use App\Mail\Send2FAMail;
use App\Models\OldPassword;
use App\Models\AdminCode;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Mail;

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
        return $this->hasMany(OldPassword::class,'admin_id')->orderBy('id','desc')->limit(4);
    }

    public function generateCode()
    {
        $code = rand(1000, 9999);
  
        AdminCode::updateOrCreate(
            [ 'admin_id' => session('id') ],
            [ 'code' => $code ]
        );
  
        $receiverNumber = session('phone');
        $message = "2FA login code is ". $code;
    
        try {
   
            if(false){
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
    
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number, 
                'body' => $message]);
            }
            Mail::to(session('email'))->send(new Send2FAMail('2FA Code from Ginicoe',$message));

    
        } catch (Exception $e) {
            info("Error: ". $e->getMessage());
        }
    }
}

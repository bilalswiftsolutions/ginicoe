<?php

namespace App\Models\Admin;

use App\Models\OldPassword;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'token',
        'photo',
        'role_id'
    ];
    public function oldPassword()
    {
        return $this->hasMany(OldPassword::class,'admin_id')->orderBy('id','desc')->limit(4);
    }
}

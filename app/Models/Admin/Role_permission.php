<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Role;
class Role_permission extends Model
{
    protected $fillable = [
        'role_id',
        'role_page_id',
        'access_status'
    ];
   

}

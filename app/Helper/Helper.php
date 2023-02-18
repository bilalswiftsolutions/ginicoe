<?php
namespace app\Helper;

use App\Models\Admin\Admin;

class Helper 
{
 

   public static function auth_admin()
   {
     return Admin::where('role_id',session('role_id'))->first();
   }
}

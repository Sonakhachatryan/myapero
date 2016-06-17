<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserBaseController;

class AccountController extends UserBaseController
{
    /**
     * Show Dashboard default page
     * 
     * @return view
     */
    public function getIndex()
    {
        return view('user/account/index');
    }
    
    
}

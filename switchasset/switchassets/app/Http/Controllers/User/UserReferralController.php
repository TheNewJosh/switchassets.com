<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserReferralController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }

    public function index()
    {        
        return view('user.referral');
    }

    public function bonus()
    {        
        return view('user.referralBonus');
    }
}

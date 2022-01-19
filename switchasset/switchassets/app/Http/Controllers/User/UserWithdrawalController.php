<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserWithdrawalController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:user|superadministrator']);
    }

    public function index()
    {        
        return view('user.withdrawal');
    }

    public function history()
    {        
        return view('user.withdrawalHistory');
    }
}
